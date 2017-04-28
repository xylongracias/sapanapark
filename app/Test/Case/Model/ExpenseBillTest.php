<?php
App::uses('ExpenseBill', 'Model');

/**
 * ExpenseBill Test Case
 *
 */
class ExpenseBillTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.expense_bill',
		'app.expense_category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ExpenseBill = ClassRegistry::init('ExpenseBill');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ExpenseBill);

		parent::tearDown();
	}

}
