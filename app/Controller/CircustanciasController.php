<?php
App::uses('AppController', 'Controller');
/**
 *
 * Circustancias Controller
 *
 * @property Circustancia $Circustancia
 * @property PaginatorComponent $Paginator
 */
class CircustanciasController extends AppController {

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
		$this->Circustancia->recursive = 0;
		$this->set('circustancias', $this->Paginator->paginate());
	}

/**
 * Metodo de la vista
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Circustancia->exists($id)) {
			throw new NotFoundException(__('Invalid circustancia'));
		}
		$options = array('conditions' => array('Circustancia.' . $this->Circustancia->primaryKey => $id));
		$this->set('circustancia', $this->Circustancia->find('first', $options));
	}

/**
 * Metodo para eliminar mas circustancia medicas
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Circustancia->create();
			if ($this->Circustancia->save($this->request->data)) {
				$this->Flash->success(__('The circustancia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The circustancia could not be saved. Please, try again.'));
			}
		}
	}

/**
 * Metodo para poder editar las circunstancias
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Circustancia->exists($id)) {
			throw new NotFoundException(__('Invalid circustancia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Circustancia->save($this->request->data)) {
				$this->Flash->success(__('The circustancia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The circustancia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Circustancia.' . $this->Circustancia->primaryKey => $id));
			$this->request->data = $this->Circustancia->find('first', $options);
		}
	}

/**
 * Metodo para poder eliminar circunstancias
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Circustancia->id = $id;
		if (!$this->Circustancia->exists()) {
			throw new NotFoundException(__('Invalid circustancia'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Circustancia->delete()) {
			$this->Flash->success(__('The circustancia has been deleted.'));
		} else {
			$this->Flash->error(__('The circustancia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
