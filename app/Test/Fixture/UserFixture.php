<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'user_login' => array('type' => 'string', 'null' => false, 'length' => 60, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_pass' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_nicename' => array('type' => 'string', 'null' => false, 'length' => 50, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_email' => array('type' => 'string', 'null' => false, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_url' => array('type' => 'string', 'null' => false, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_registered' => array('type' => 'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'user_activation_key' => array('type' => 'string', 'null' => false, 'length' => 60, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_status' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'display_name' => array('type' => 'string', 'null' => false, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'date_of_birth' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => 'Birth date of the Owner '),
		'flat_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 25, 'unsigned' => false, 'comment' => 'id from the flat table'),
		'join_date' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => 'date when the flat was bought'),
		'laeving_date' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => 'date when the owner leaves/sells the flat'),
		'date_created' => array('type' => 'timestamp', 'null' => true, 'default' => null, 'comment' => 'date when the entry was created'),
		'date_modified' => array('type' => 'timestamp', 'null' => false, 'default' => null, 'comment' => 'date when the entry was modified'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID', 'unique' => 1),
			'user_login_key' => array('column' => 'user_login', 'unique' => 0),
			'user_nicename' => array('column' => 'user_nicename', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'ID' => '',
			'user_login' => 'Lorem ipsum dolor sit amet',
			'user_pass' => 'Lorem ipsum dolor sit amet',
			'user_nicename' => 'Lorem ipsum dolor sit amet',
			'user_email' => 'Lorem ipsum dolor sit amet',
			'user_url' => 'Lorem ipsum dolor sit amet',
			'user_registered' => '2009-07-20 21:02:08',
			'user_activation_key' => 'Lorem ipsum dolor sit amet',
			'user_status' => 1,
			'display_name' => 'Lorem ipsum dolor sit amet',
			'date_of_birth' => '2009-07-20',
			'flat_id' => 1,
			'join_date' => '2009-07-20',
			'laeving_date' => '2009-07-20',
			'date_created' => 1248116528,
			'date_modified' => 1248116528
		),
	);

}
