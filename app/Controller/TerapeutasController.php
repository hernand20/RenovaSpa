<?php
App::uses('AppController', 'Controller');
/**
 * Terapeutas Controller
 *
 * @property Terapeuta $Terapeuta
 * @property PaginatorComponent $Paginator
 */
class TerapeutasController extends AppController {

/**
 * Componentes
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * Metodo del index
 *
 * @return void
 */
	public function index() {
		$this->Terapeuta->recursive = 0;
		$this->set('terapeutas', $this->Paginator->paginate());
	}

/**
 * Metodo de la vista
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Terapeuta->exists($id)) {
			throw new NotFoundException(__('Invalid terapeuta'));
		}
		$options = array('conditions' => array('Terapeuta.' . $this->Terapeuta->primaryKey => $id));
		$this->set('terapeuta', $this->Terapeuta->find('first', $options));
	}

/**
 * Metodo para poder agregar mas terapeutas
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Terapeuta->create();
			if ($this->Terapeuta->save($this->request->data)) {
				$this->Flash->success(__('The terapeuta has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The terapeuta could not be saved. Please, try again.'));
			}
		}
	}

/**
 * Metodo para poder editar
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Terapeuta->exists($id)) {
			throw new NotFoundException(__('Invalid terapeuta'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Terapeuta->save($this->request->data)) {
				$this->Flash->success(__('The terapeuta has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The terapeuta could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Terapeuta.' . $this->Terapeuta->primaryKey => $id));
			$this->request->data = $this->Terapeuta->find('first', $options);
		}
	}

/**
 * Metodo para eliminar
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Terapeuta->id = $id;
		if (!$this->Terapeuta->exists()) {
			throw new NotFoundException(__('Invalid terapeuta'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Terapeuta->delete()) {
			$this->Flash->success(__('The terapeuta has been deleted.'));
		} else {
			$this->Flash->error(__('The terapeuta could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
