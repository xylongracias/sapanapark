<?php
App::uses('Month', 'Model');

/**
 * Month Test Case
 *
 */
class MonthTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.month',
		'app.user',
		'app.flat',
		'app.building',
		'app.family_member',
		'app.user_bill'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Month = ClassRegistry::init('Month');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Month);

		parent::tearDown();
	}

}
