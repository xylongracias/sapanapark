<?php
/**
 * FlatFixture
 *
 */
class FlatFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 25, 'unsigned' => false, 'key' => 'primary', 'comment' => 'unique Id of the flat/shop'),
		'building_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 25, 'unsigned' => false, 'comment' => 'id from the buildings table'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'comment' => 'name of the flat/shop', 'charset' => 'latin1'),
		'floor' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'which floor is the flat is located', 'charset' => 'latin1'),
		'date_created' => array('type' => 'timestamp', 'null' => true, 'default' => null, 'comment' => 'date when the entry is created'),
		'date_modified' => array('type' => 'timestamp', 'null' => false, 'default' => null, 'comment' => 'date when the entry was modified'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB', 'comment' => 'this table also include details of the shops')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'building_id' => 1,
			'name' => 'Lorem ipsum dolor sit a',
			'floor' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'date_created' => 1248119445,
			'date_modified' => 1248119445
		),
	);

}
