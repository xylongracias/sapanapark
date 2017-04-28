<?php
App::uses('AppController', 'Controller');
/**
 * ExpenseCategories Controller
 *
 * @property ExpenseCategory $ExpenseCategory
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ExpenseCategoriesController extends AppController {

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
		$this->ExpenseCategory->recursive = 0;
		$this->set('expenseCategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ExpenseCategory->exists($id)) {
			throw new NotFoundException(__('Invalid expense category'));
		}
		$options = array('conditions' => array('ExpenseCategory.' . $this->ExpenseCategory->primaryKey => $id));
		$this->set('expenseCategory', $this->ExpenseCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ExpenseCategory->create();
			if ($this->ExpenseCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The expense category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The expense category could not be saved. Please, try again.'));
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
		if (!$this->ExpenseCategory->exists($id)) {
			throw new NotFoundException(__('Invalid expense category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ExpenseCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The expense category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The expense category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ExpenseCategory.' . $this->ExpenseCategory->primaryKey => $id));
			$this->request->data = $this->ExpenseCategory->find('first', $options);
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
		$this->ExpenseCategory->id = $id;
		if (!$this->ExpenseCategory->exists()) {
			throw new NotFoundException(__('Invalid expense category'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ExpenseCategory->delete()) {
			$this->Session->setFlash(__('The expense category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The expense category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ExpenseCategory->recursive = 0;
		$this->set('expenseCategories', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ExpenseCategory->exists($id)) {
			throw new NotFoundException(__('Invalid expense category'));
		}
		$options = array('conditions' => array('ExpenseCategory.' . $this->ExpenseCategory->primaryKey => $id));
		$this->set('expenseCategory', $this->ExpenseCategory->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ExpenseCategory->create();
			if ($this->ExpenseCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The expense category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The expense category could not be saved. Please, try again.'));
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
		if (!$this->ExpenseCategory->exists($id)) {
			throw new NotFoundException(__('Invalid expense category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ExpenseCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The expense category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The expense category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ExpenseCategory.' . $this->ExpenseCategory->primaryKey => $id));
			$this->request->data = $this->ExpenseCategory->find('first', $options);
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
		$this->ExpenseCategory->id = $id;
		if (!$this->ExpenseCategory->exists()) {
			throw new NotFoundException(__('Invalid expense category'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ExpenseCategory->delete()) {
			$this->Session->setFlash(__('The expense category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The expense category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
