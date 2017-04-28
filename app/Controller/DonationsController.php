<?php
App::uses('AppController', 'Controller');
/**
 * Donations Controller
 *
 * @property Donation $Donation
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DonationsController extends AppController {

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
		$this->Donation->recursive = 0;
		$this->set('donations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Donation->exists($id)) {
			throw new NotFoundException(__('Invalid donation'));
		}
		$options = array('conditions' => array('Donation.' . $this->Donation->primaryKey => $id));
		$this->set('donation', $this->Donation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Donation->create();
			if ($this->Donation->save($this->request->data)) {
				$this->Session->setFlash(__('The donation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The donation could not be saved. Please, try again.'));
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
		if (!$this->Donation->exists($id)) {
			throw new NotFoundException(__('Invalid donation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Donation->save($this->request->data)) {
				$this->Session->setFlash(__('The donation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The donation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Donation.' . $this->Donation->primaryKey => $id));
			$this->request->data = $this->Donation->find('first', $options);
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
		$this->Donation->id = $id;
		if (!$this->Donation->exists()) {
			throw new NotFoundException(__('Invalid donation'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Donation->delete()) {
			$this->Session->setFlash(__('The donation has been deleted.'));
		} else {
			$this->Session->setFlash(__('The donation could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Donation->recursive = 0;
		$this->set('donations', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Donation->exists($id)) {
			throw new NotFoundException(__('Invalid donation'));
		}
		$options = array('conditions' => array('Donation.' . $this->Donation->primaryKey => $id));
		$this->set('donation', $this->Donation->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Donation->create();
			if ($this->Donation->save($this->request->data)) {
				$this->Session->setFlash(__('The donation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The donation could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Donation->exists($id)) {
			throw new NotFoundException(__('Invalid donation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Donation->save($this->request->data)) {
				$this->Session->setFlash(__('The donation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The donation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Donation.' . $this->Donation->primaryKey => $id));
			$this->request->data = $this->Donation->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Donation->id = $id;
		if (!$this->Donation->exists()) {
			throw new NotFoundException(__('Invalid donation'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Donation->delete()) {
			$this->Session->setFlash(__('The donation has been deleted.'));
		} else {
			$this->Session->setFlash(__('The donation could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
