<?php
App::uses('AppController', 'Controller');
/**
 * Tratamientos Controller
 *
 * @property Tratamiento $Tratamiento
 * @property PaginatorComponent $Paginator
 */
class TratamientosController extends AppController {

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
		$this->Tratamiento->recursive = 0;
		$this->set('tratamientos', $this->Paginator->paginate());
	}

/**
 * Metodo de la vista
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tratamiento->exists($id)) {
			throw new NotFoundException(__('Invalid tratamiento'));
		}
		$options = array('conditions' => array('Tratamiento.' . $this->Tratamiento->primaryKey => $id));
		$this->set('tratamiento', $this->Tratamiento->find('first', $options));
	}

/**
 * Metodo para agregar Tratamientos
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tratamiento->create();
			if ($this->Tratamiento->save($this->request->data)) {
				$this->Flash->success(__('The tratamiento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tratamiento could not be saved. Please, try again.'));
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
		if (!$this->Tratamiento->exists($id)) {
			throw new NotFoundException(__('Invalid tratamiento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tratamiento->save($this->request->data)) {
				$this->Flash->success(__('The tratamiento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tratamiento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tratamiento.' . $this->Tratamiento->primaryKey => $id));
			$this->request->data = $this->Tratamiento->find('first', $options);
		}
	}

/**
 * Metodo para poder eliminar
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Tratamiento->id = $id;
		if (!$this->Tratamiento->exists()) {
			throw new NotFoundException(__('Invalid tratamiento'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tratamiento->delete()) {
			$this->Flash->success(__('The tratamiento has been deleted.'));
		} else {
			$this->Flash->error(__('The tratamiento could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
