<?php
App::uses('ExpenseCategory', 'Model');

/**
 * ExpenseCategory Test Case
 *
 */
class ExpenseCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.expense_category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ExpenseCategory = ClassRegistry::init('ExpenseCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ExpenseCategory);

		parent::tearDown();
	}

}
