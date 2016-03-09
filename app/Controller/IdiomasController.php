<?php
App::uses('AppController', 'Controller');
/**
 * Idiomas Controller
 *
 * @property Idioma $Idioma
 * @property PaginatorComponent $Paginator
 */
class IdiomasController extends AppController {

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
		$this->Idioma->recursive = 0;
		$this->set('idiomas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Idioma->exists($id)) {
			throw new NotFoundException(__('Invalid idioma'));
		}
		$options = array('conditions' => array('Idioma.' . $this->Idioma->primaryKey => $id));
		$this->set('idioma', $this->Idioma->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Idioma->create();
			if ($this->Idioma->save($this->request->data)) {
				$this->Flash->success(__('The idioma has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The idioma could not be saved. Please, try again.'));
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
		if (!$this->Idioma->exists($id)) {
			throw new NotFoundException(__('Invalid idioma'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Idioma->save($this->request->data)) {
				$this->Flash->success(__('The idioma has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The idioma could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Idioma.' . $this->Idioma->primaryKey => $id));
			$this->request->data = $this->Idioma->find('first', $options);
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
		$this->Idioma->id = $id;
		if (!$this->Idioma->exists()) {
			throw new NotFoundException(__('Invalid idioma'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Idioma->delete()) {
			$this->Flash->success(__('The idioma has been deleted.'));
		} else {
			$this->Flash->error(__('The idioma could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
