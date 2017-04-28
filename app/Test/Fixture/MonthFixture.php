<?php
/**
 * MonthFixture
 *
 */
class MonthFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 25, 'unsigned' => false, 'comment' => 'unique Id of the months table ', 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 25, 'unsigned' => false, 'comment' => 'id from the user table'),
		'year' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 25, 'unsigned' => false, 'comment' => 'year in which payments are done'),
		'april' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'may' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'june' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'july' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'august' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'september' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'october' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'november' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'december' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'january' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'february' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'march' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'date_created' => array('type' => 'timestamp', 'null' => true, 'default' => null, 'comment' => 'date when entry was created'),
		'date_modified' => array('type' => 'timestamp', 'null' => false, 'default' => null, 'comment' => 'date when entry was modified'),
		'indexes' => array(
			
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'year' => 1,
			'april' => 1,
			'may' => 1,
			'june' => 1,
			'july' => 1,
			'august' => 1,
			'september' => 1,
			'october' => 1,
			'november' => 1,
			'december' => 1,
			'january' => 1,
			'february' => 1,
			'march' => 1,
			'date_created' => 1248119739,
			'date_modified' => 1248119739
		),
	);

}
