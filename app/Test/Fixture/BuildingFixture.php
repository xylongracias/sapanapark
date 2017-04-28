<?php
/**
 * BuildingFixture
 *
 */
class BuildingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 25, 'unsigned' => false, 'key' => 'primary', 'comment' => 'iunique id of the building'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'comment' => 'name of the building', 'charset' => 'latin1'),
		'no_of_flats' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 25, 'unsigned' => false, 'comment' => 'no. of flats in the building'),
		'date_created' => array('type' => 'timestamp', 'null' => true, 'default' => null, 'comment' => 'date when the entry was created'),
		'date_modified' => array('type' => 'timestamp', 'null' => false, 'default' => null, 'comment' => 'date when the entry was modified'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'name' => 'Lorem ipsum dolor sit a',
			'no_of_flats' => 1,
			'date_created' => 1248117120,
			'date_modified' => 1248117120
		),
	);

}
