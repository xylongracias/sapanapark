<?php
App::uses('Flat', 'Model');

/**
 * Flat Test Case
 *
 */
class FlatTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.flat',
		'app.building',
		'app.user',
		'app.family_member',
		'app.month',
		'app.user_bill'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Flat = ClassRegistry::init('Flat');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Flat);

		parent::tearDown();
	}

}
