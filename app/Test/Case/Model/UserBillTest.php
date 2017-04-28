<?php
App::uses('UserBill', 'Model');

/**
 * UserBill Test Case
 *
 */
class UserBillTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user_bill',
		'app.user',
		'app.flat',
		'app.building',
		'app.family_member',
		'app.month'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UserBill = ClassRegistry::init('UserBill');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserBill);

		parent::tearDown();
	}

}
