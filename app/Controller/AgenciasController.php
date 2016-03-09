<?php
App::uses('AppController', 'Controller');
/**
 * Agencias Controller
 *
 * @property Agencia $Agencia
 * @property PaginatorComponent $Paginator
 */
class AgenciasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Agencia->recursive = 0;
		$this->set('agencias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Agencia->exists($id)) {
			throw new NotFoundException(__('Invalid agencia'));
		}
		$options = array('conditions' => array('Agencia.' . $this->Agencia->primaryKey => $id));
		$this->set('agencia', $this->Agencia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Agencia->create();
			if ($this->Agencia->save($this->request->data)) {
				$this->Flash->success(__('The agencia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The agencia could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Agencia->exists($id)) {
			throw new NotFoundException(__('Invalid agencia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Agencia->save($this->request->data)) {
				$this->Flash->success(__('The agencia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The agencia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Agencia.' . $this->Agencia->primaryKey => $id));
			$this->request->data = $this->Agencia->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Agencia->id = $id;
		if (!$this->Agencia->exists()) {
			throw new NotFoundException(__('Invalid agencia'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Agencia->delete()) {
			$this->Flash->success(__('The agencia has been deleted.'));
		} else {
			$this->Flash->error(__('The agencia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
