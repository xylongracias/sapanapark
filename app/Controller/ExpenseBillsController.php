<?php
App::uses('AppController', 'Controller');
/**
 * ExpenseBills Controller
 *
 * @property ExpenseBill $ExpenseBill
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ExpenseBillsController extends AppController {

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
		$this->ExpenseBill->recursive = 0;
		$this->set('expenseBills', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ExpenseBill->exists($id)) {
			throw new NotFoundException(__('Invalid expense bill'));
		}
		$options = array('conditions' => array('ExpenseBill.' . $this->ExpenseBill->primaryKey => $id));
		$this->set('expenseBill', $this->ExpenseBill->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ExpenseBill->create();
			if ($this->ExpenseBill->save($this->request->data)) {
				$this->Session->setFlash(__('The expense bill has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The expense bill could not be saved. Please, try again.'));
			}
		}
		$expenseCategories = $this->ExpenseBill->ExpenseCategory->find('list');
		$this->set(compact('expenseCategories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ExpenseBill->exists($id)) {
			throw new NotFoundException(__('Invalid expense bill'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ExpenseBill->save($this->request->data)) {
				$this->Session->setFlash(__('The expense bill has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The expense bill could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ExpenseBill.' . $this->ExpenseBill->primaryKey => $id));
			$this->request->data = $this->ExpenseBill->find('first', $options);
		}
		$expenseCategories = $this->ExpenseBill->ExpenseCategory->find('list');
		$this->set(compact('expenseCategories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ExpenseBill->id = $id;
		if (!$this->ExpenseBill->exists()) {
			throw new NotFoundException(__('Invalid expense bill'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ExpenseBill->delete()) {
			$this->Session->setFlash(__('The expense bill has been deleted.'));
		} else {
			$this->Session->setFlash(__('The expense bill could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ExpenseBill->recursive = 0;
		$this->set('expenseBills', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ExpenseBill->exists($id)) {
			throw new NotFoundException(__('Invalid expense bill'));
		}
		$options = array('conditions' => array('ExpenseBill.' . $this->ExpenseBill->primaryKey => $id));
		$this->set('expenseBill', $this->ExpenseBill->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ExpenseBill->create();
			if ($this->ExpenseBill->save($this->request->data)) {
				$this->Session->setFlash(__('The expense bill has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The expense bill could not be saved. Please, try again.'));
			}
		}
		$expenseCategories = $this->ExpenseBill->ExpenseCategory->find('list');
		$this->set(compact('expenseCategories'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->ExpenseBill->exists($id)) {
			throw new NotFoundException(__('Invalid expense bill'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ExpenseBill->save($this->request->data)) {
				$this->Session->setFlash(__('The expense bill has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The expense bill could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ExpenseBill.' . $this->ExpenseBill->primaryKey => $id));
			$this->request->data = $this->ExpenseBill->find('first', $options);
		}
		$expenseCategories = $this->ExpenseBill->ExpenseCategory->find('list');
		$this->set(compact('expenseCategories'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->ExpenseBill->id = $id;
		if (!$this->ExpenseBill->exists()) {
			throw new NotFoundException(__('Invalid expense bill'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ExpenseBill->delete()) {
			$this->Session->setFlash(__('The expense bill has been deleted.'));
		} else {
			$this->Session->setFlash(__('The expense bill could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
