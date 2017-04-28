<?php
/**
 * UserBillFixture
 *
 */
class UserBillFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 25, 'unsigned' => false, 'key' => 'primary', 'comment' => 'unique Id of the user bills'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 25, 'unsigned' => false, 'comment' => 'id from the user table'),
		'name' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'name of the user who pays the bills', 'charset' => 'latin1'),
		'ammount' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 100, 'unsigned' => false, 'comment' => 'ammount paid by the user'),
		'payment_method' => array('type' => 'boolean', 'null' => false, 'default' => null, 'comment' => 'method by which user pays the bill...0=cash, 1=cheque.'),
		'date' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => 'date when the user pays the bill'),
		'payment_for' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'why the payment is made by the user....0=maintainance,1=other', 'charset' => 'latin1'),
		'description' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => 'why the payment is made ', 'charset' => 'latin1'),
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
			'user_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'ammount' => 1,
			'payment_method' => 1,
			'date' => '2009-07-20',
			'payment_for' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'description' => 'Lorem ipsum dolor sit amet',
			'date_created' => 1248119864,
			'date_modified' => 1248119864
		),
	);

}
