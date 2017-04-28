<?php
App::uses('AppController', 'Controller');
/**
 * UserBills Controller
 *
 * @property UserBill $UserBill
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UserBillsController extends AppController {

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
		$this->UserBill->recursive = 0;
		$this->set('userBills', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {

		if (!$this->UserBill->exists($id)) {
			throw new NotFoundException(__('Invalid user bill'));
		}
		$options = array('conditions' => array('UserBill.' . $this->UserBill->primaryKey => $id));
		$this->set('userBill', $this->UserBill->find('first', $options));
	}




// public function viewpdf() {
//     //Import /app/Vendor/Fpdf
//     App::import('Vendor', 'Fpdf', array('file' => 'fpdf/fpdf.php'));
//     //Assign layout to /app/View/Layout/pdf.ctp
//     $this->layout = 'pdf'; //this will use the pdf.ctp layout
//     //Set fpdf variable to use in view
//     $this->set('fpdf', new FPDF('P','mm','A4'));
//     //pass data to view
//     $this->set('data', 'Ur account is debited as under:-');
//     //render the pdf view (app/View/[view_name]/pdf.ctp)
//     $this->render('pdf');
// }


/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->loadModel('Month');
		$this->UserBill->recursive = 2;
		if ($this->request->is('post')) {
			$this->UserBill->create();
			$this->Month->create();
			// $data = $this->request->data;
			// $semiRandomArticle = $this->Month->find('first');
			// echo "<pre>";
			// print_r($semiRandomArticle);
			// exit();
			
			// echo "<pre>";
			// print_r($this->request->data); exit();

			$this->request->data['UserBill']['month_paid_for'] = implode(", ", array_keys($this->request->data['Month']));

			if ($this->UserBill->save($this->request->data)) {

				$this->request->data['Month']['user_id'] = $this->request->data['UserBill']['user_id'];
				$this->request->data['Month']['user_bill_id'] = $this->UserBill->id;
				$this->request->data['Month']['year'] = date('Y');

				$this->Month->save($this->request->data);

				return $this->redirect(array('action' => 'index'));
				
				
			} else {
				$this->Session->setFlash(__('The user bill could not be saved. Please, try again.'));
				return $this->redirect(array('action' => 'index'));
			}
		}
		$users = $this->UserBill->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {

			$this->UserBill->recursive = 2;
				// echo "<pre>";

				// $this->loadModel('User');
				// $options1 = array('conditions' => array('User.' . $this->UserBill->Us => $id));
				// echo "<pre>";

				// print_r($this->UserBill->find('all'));
				// exit();
				$options = array('conditions' => array('UserBill.' . $this->UserBill->primaryKey => $id));
				$data = $this->UserBill->find('first', $options);
				$userName = $data['User']['owner_name'];
				$id = $data['UserBill']['id'];

				// print_r($data);exit();

				$flat = $data['User']['flat_id'];

				$FlatName = $data['User']['Flat']['name'];

				if ($flat == 1) {
					$FlatName = 'G-1';
				}
				$building =$data['User']['building_id'];
				if ($building == 1) {
					$BuildNmae = 'C-4';
				} elseif ($building == 2) {
					$BuildNmae = 'C-4';
				}


				// print_r($data);
				// exit();

				//Import /app/Vendor/Fpdf
			    App::import('Vendor', 'Fpdf', array('file' => 'fpdf/fpdf.php'));

			    //Assign layout to /app/View/Layout/pdf.ctp
			    $this->layout = 'pdf'; //this will use the pdf.ctp layout

			    //Set fpdf variable to use in view
			    $this->set('fpdf', new FPDF('P','mm','A4'));

			    //pass data to view
			    $this->set('userName', $userName);
			    $this->set('id', $id);
				$this->set('flat', $FlatName);
				$this->set('building', $BuildNmae);
				$this->set('months', $data['UserBill']['month_paid_for']);
				$this->set('amount', $data['UserBill']['ammount']);
				$this->set('description', $data['UserBill']['payment_for']);

			    //render the pdf view (app/View/[view_name]/pdf.ctp)
			    $this->render('pdf');
			$options = array('conditions' => array('UserBill.' . $this->UserBill->primaryKey => $id));
			$this->request->data = $this->UserBill->find('first', $options);
	
		$users = $this->UserBill->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->UserBill->id = $id;
		if (!$this->UserBill->exists()) {
			throw new NotFoundException(__('Invalid user bill'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UserBill->delete()) {
			$this->Session->setFlash(__('The user bill has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user bill could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->UserBill->recursive = 0;
		$this->set('userBills', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->UserBill->exists($id)) {
			throw new NotFoundException(__('Invalid user bill'));
		}
		$options = array('conditions' => array('UserBill.' . $this->UserBill->primaryKey => $id));
		$this->set('userBill', $this->UserBill->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->UserBill->create();
			if ($this->UserBill->save($this->request->data)) {
				$this->Session->setFlash(__('The user bill has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user bill could not be saved. Please, try again.'));
			}
		}
		$users = $this->UserBill->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->UserBill->exists($id)) {
			throw new NotFoundException(__('Invalid user bill'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserBill->save($this->request->data)) {
				$this->Session->setFlash(__('The user bill has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user bill could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserBill.' . $this->UserBill->primaryKey => $id));
			$this->request->data = $this->UserBill->find('first', $options);
		}
		$users = $this->UserBill->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->UserBill->id = $id;
		if (!$this->UserBill->exists()) {
			throw new NotFoundException(__('Invalid user bill'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UserBill->delete()) {
			$this->Session->setFlash(__('The user bill has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user bill could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
