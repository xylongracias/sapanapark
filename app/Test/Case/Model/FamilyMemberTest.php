<?php
App::uses('FamilyMember', 'Model');

/**
 * FamilyMember Test Case
 *
 */
class FamilyMemberTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.family_member',
		'app.user',
		'app.flat',
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
		$this->FamilyMember = ClassRegistry::init('FamilyMember');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FamilyMember);

		parent::tearDown();
	}

}
