<?php
/**
 * Vente Fixture
 */
class VenteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'sale\'s id'),
		'Ref_vente' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8mb4_general_ci', 'comment' => 'sale\'s reference', 'charset' => 'utf8mb4'),
		'Prix_Total' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,0', 'unsigned' => false, 'comment' => 'sale\'s total amount'),
		'Nom_Client' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8mb4_general_ci', 'comment' => 'client\'s full name', 'charset' => 'utf8mb4'),
		'Date_effect' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => 'created date'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_general_ci', 'engine' => 'InnoDB', 'comment' => 'Sales\' informations')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'Ref_vente' => 'Lorem ipsum dolor sit amet',
			'Prix_Total' => '',
			'Nom_Client' => 'Lorem ipsum dolor sit amet',
			'Date_effect' => '2020-10-23 13:31:14'
		),
	);

}
