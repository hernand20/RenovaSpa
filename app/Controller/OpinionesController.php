<?php
App::uses('AppController', 'Controller');
/**
 * Opiniones Controller
 *
 * @property Opinion $Opinion
 * @property PaginatorComponent $Paginator
 */
class OpinionesController extends AppController {

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
		$this->Opinion->recursive = 0;
		$this->set('opiniones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Opinion->exists($id)) {
			throw new NotFoundException(__('Invalid opinion'));
		}
		$options = array('conditions' => array('Opinion.' . $this->Opinion->primaryKey => $id));
		$this->set('opinion', $this->Opinion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Opinion->create();
			if ($this->Opinion->save($this->request->data)) {
				$this->Flash->success(__('The opinion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The opinion could not be saved. Please, try again.'));
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
		if (!$this->Opinion->exists($id)) {
			throw new NotFoundException(__('Invalid opinion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Opinion->save($this->request->data)) {
				$this->Flash->success(__('The opinion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The opinion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Opinion.' . $this->Opinion->primaryKey => $id));
			$this->request->data = $this->Opinion->find('first', $options);
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
		$this->Opinion->id = $id;
		if (!$this->Opinion->exists()) {
			throw new NotFoundException(__('Invalid opinion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Opinion->delete()) {
			$this->Flash->success(__('The opinion has been deleted.'));
		} else {
			$this->Flash->error(__('The opinion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
