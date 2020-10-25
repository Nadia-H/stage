<?php
/**
 * Category Fixture
 */
class CategoryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'category\'s id'),
		'Ref_Cat' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8mb4_general_ci', 'comment' => 'category\'s reference', 'charset' => 'utf8mb4'),
		'Nom_Cat' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8mb4_general_ci', 'comment' => 'category\'s name', 'charset' => 'utf8mb4'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_general_ci', 'engine' => 'InnoDB', 'comment' => 'Products\' categories')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'Ref_Cat' => 'Lorem ipsum dolor sit amet',
			'Nom_Cat' => 'Lorem ipsum dolor sit amet'
		),
	);

}
