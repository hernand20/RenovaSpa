<?php
App::uses('AppController', 'Controller');
/**
 * Sesiones Controller
 *
 * @property Sesion $Sesion
 * @property PaginatorComponent $Paginator
 */
class SesionesController extends AppController {

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
		$this->Sesion->recursive = 0;
		$this->set('sesiones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Sesion->exists($id)) {
			throw new NotFoundException(__('Invalid sesion'));
		}
		$options = array('conditions' => array('Sesion.' . $this->Sesion->primaryKey => $id));
		$this->set('sesion', $this->Sesion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sesion->create();
			if ($this->Sesion->save($this->request->data)) {
				$this->Flash->success(__('The sesion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The sesion could not be saved. Please, try again.'));
			}
		}
		$opiniones = $this->Sesion->Opinion->find('list');
		$clientes = $this->Sesion->Cliente->find('list');
		$terapeutas = $this->Sesion->Terapeuta->find('list');//IR 
		$tratamientos = $this->Sesion->Tratamiento->find('list');
		$this->set(compact('opiniones', 'clientes', 'terapeutas', 'tratamientos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Sesion->exists($id)) {
			throw new NotFoundException(__('Invalid sesion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sesion->save($this->request->data)) {
				$this->Flash->success(__('The sesion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The sesion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Sesion.' . $this->Sesion->primaryKey => $id));
			$this->request->data = $this->Sesion->find('first', $options);
		}
		$opiniones = $this->Sesion->Opinione->find('list');
		$clientes = $this->Sesion->Cliente->find('list');
		$terapeutas = $this->Sesion->Terapeuta->find('list');
		$tratamientos = $this->Sesion->Tratamiento->find('list');
		$this->set(compact('opiniones', 'clientes', 'terapeutas', 'tratamientos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Sesion->id = $id;
		if (!$this->Sesion->exists()) {
			throw new NotFoundException(__('Invalid sesion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Sesion->delete()) {
			$this->Flash->success(__('The sesion has been deleted.'));
		} else {
			$this->Flash->error(__('The sesion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
