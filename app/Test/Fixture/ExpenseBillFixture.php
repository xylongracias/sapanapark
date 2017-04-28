<?php
/**
 * ExpenseBillFixture
 *
 */
class ExpenseBillFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'expense_bill';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 25, 'unsigned' => false, 'key' => 'primary', 'comment' => 'unique Id of the expense bill'),
		'expense_category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 25, 'unsigned' => false, 'comment' => 'id from the expense_category  table'),
		'name' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'to whom the ammount is paid', 'charset' => 'latin1'),
		'ammount' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 100, 'unsigned' => false, 'comment' => 'amoount paid '),
		'payment_method' => array('type' => 'boolean', 'null' => false, 'default' => null, 'comment' => 'mathod by which payment was made...0=cash,1=cheque'),
		'date' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => 'date whenthe bill was paid'),
		'date_created' => array('type' => 'timestamp', 'null' => true, 'default' => null, 'comment' => 'date when the entry was created'),
		'date_modified' => array('type' => 'timestamp', 'null' => false, 'default' => null, 'comment' => 'date when the entry was modified'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB', 'comment' => 'expenditure bill table')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'expense_category_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'ammount' => 1,
			'payment_method' => 1,
			'date' => '2009-07-20',
			'date_created' => 1248119033,
			'date_modified' => 1248119033
		),
	);

}
