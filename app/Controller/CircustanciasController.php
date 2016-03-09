<?php
App::uses('AppController', 'Controller');
/**
 * Circustancias Controller
 *
 * @property Circustancia $Circustancia
 * @property PaginatorComponent $Paginator
 */
class CircustanciasController extends AppController {

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
		$this->Circustancia->recursive = 0;
		$this->set('circustancias', $this->Paginator->paginate());
	}

/**
 * view method
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
 * add method
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
 * edit method
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
 * delete method
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
