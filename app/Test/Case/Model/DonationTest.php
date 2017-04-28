<?php
App::uses('Donation', 'Model');

/**
 * Donation Test Case
 *
 */
class DonationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.donation'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Donation = ClassRegistry::init('Donation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Donation);

		parent::tearDown();
	}

}
