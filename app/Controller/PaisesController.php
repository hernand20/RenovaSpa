<?php
App::uses('AppController', 'Controller');
/**
 * Paises Controller
 *
 * @property Pais $Pais
 * @property PaginatorComponent $Paginator
 */
class PaisesController extends AppController {

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
		$this->Pais->recursive = 0;
		$this->set('paises', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pais->exists($id)) {
			throw new NotFoundException(__('Invalid pais'));
		}
		$options = array('conditions' => array('Pais.' . $this->Pais->primaryKey => $id));
		$this->set('pais', $this->Pais->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pais->create();
			if ($this->Pais->save($this->request->data)) {
				$this->Flash->success(__('The pais has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The pais could not be saved. Please, try again.'));
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
		if (!$this->Pais->exists($id)) {
			throw new NotFoundException(__('Invalid pais'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pais->save($this->request->data)) {
				$this->Flash->success(__('The pais has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The pais could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Pais.' . $this->Pais->primaryKey => $id));
			$this->request->data = $this->Pais->find('first', $options);
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
		$this->Pais->id = $id;
		if (!$this->Pais->exists()) {
			throw new NotFoundException(__('Invalid pais'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Pais->delete()) {
			$this->Flash->success(__('The pais has been deleted.'));
		} else {
			$this->Flash->error(__('The pais could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
