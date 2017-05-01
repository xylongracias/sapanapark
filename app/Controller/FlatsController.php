<?php
App::uses('AppController', 'Controller');
/**
 * Flats Controller
 *
 * @property Flat $Flat
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FlatsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Flat->recursive = 0;
		$this->set('flats', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Flat->exists($id)) {
			throw new NotFoundException(__('Invalid flat'));
		}
		$options = array('conditions' => array('Flat.' . $this->Flat->primaryKey => $id));
		$this->set('flat', $this->Flat->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Flat->create();
			if ($this->Flat->save($this->request->data)) {
				$this->Session->setFlash(__('The flat has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The flat could not be saved. Please, try again.'));
			}
		}
		$buildings = $this->Flat->Building->find('list');
		$this->set(compact('buildings'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Flat->exists($id)) {
			throw new NotFoundException(__('Invalid flat'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Flat->save($this->request->data)) {
				$this->Session->setFlash(__('The flat has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The flat could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Flat.' . $this->Flat->primaryKey => $id));
			$this->request->data = $this->Flat->find('first', $options);
		}
		$buildings = $this->Flat->Building->find('list');
		$this->set(compact('buildings'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Flat->id = $id;
		if (!$this->Flat->exists()) {
			throw new NotFoundException(__('Invalid flat'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Flat->delete()) {
			$this->Session->setFlash(__('The flat has been deleted.'));
		} else {
			$this->Session->setFlash(__('The flat could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Flat->recursive = 0;
		$this->set('flats', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Flat->exists($id)) {
			throw new NotFoundException(__('Invalid flat'));
		}
		$options = array('conditions' => array('Flat.' . $this->Flat->primaryKey => $id));
		$this->set('flat', $this->Flat->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Flat->create();
			if ($this->Flat->save($this->request->data)) {
				$this->Session->setFlash(__('The flat has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The flat could not be saved. Please, try again.'));
			}
		}
		$buildings = $this->Flat->Building->find('list');
		$this->set(compact('buildings'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Flat->exists($id)) {
			throw new NotFoundException(__('Invalid flat'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Flat->save($this->request->data)) {
				$this->Session->setFlash(__('The flat has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The flat could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Flat.' . $this->Flat->primaryKey => $id));
			$this->request->data = $this->Flat->find('first', $options);
		}
		$buildings = $this->Flat->Building->find('list');
		$this->set(compact('buildings'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Flat->id = $id;
		if (!$this->Flat->exists()) {
			throw new NotFoundException(__('Invalid flat'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Flat->delete()) {
			$this->Session->setFlash(__('The flat has been deleted.'));
		} else {
			$this->Session->setFlash(__('The flat could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	function getFlatsByBuildingId($id = null){
		$this->autoRender = false;
		// echo $id;
		// echo"<pre>";
		// print_r($this->Flat->findAllByBuildingId($id,array('Flat.id','Flat.name')));

		return json_encode($this->Flat->findAllByBuildingId($id,array('Flat.id','Flat.name')));
	}
}
