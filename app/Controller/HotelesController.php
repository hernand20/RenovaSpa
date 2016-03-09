<?php
App::uses('AppController', 'Controller');
/**
 * Hoteles Controller
 *
 * @property Hotele $Hotele
 * @property PaginatorComponent $Paginator
 */
class HotelesController extends AppController {

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
		$this->Hotele->recursive = 0;
		$this->set('hoteles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Hotele->exists($id)) {
			throw new NotFoundException(__('Invalid hotele'));
		}
		$options = array('conditions' => array('Hotele.' . $this->Hotele->primaryKey => $id));
		$this->set('hotele', $this->Hotele->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Hotele->create();
			if ($this->Hotele->save($this->request->data)) {
				$this->Flash->success(__('The hotele has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The hotele could not be saved. Please, try again.'));
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
		if (!$this->Hotele->exists($id)) {
			throw new NotFoundException(__('Invalid hotele'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Hotele->save($this->request->data)) {
				$this->Flash->success(__('The hotele has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The hotele could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Hotele.' . $this->Hotele->primaryKey => $id));
			$this->request->data = $this->Hotele->find('first', $options);
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
		$this->Hotele->id = $id;
		if (!$this->Hotele->exists()) {
			throw new NotFoundException(__('Invalid hotele'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Hotele->delete()) {
			$this->Flash->success(__('The hotele has been deleted.'));
		} else {
			$this->Flash->error(__('The hotele could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
