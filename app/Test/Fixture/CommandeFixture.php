<?php
/**
 * Commande Fixture
 */
class CommandeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'order\'s id'),
		'Ref_Com' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8mb4_general_ci', 'comment' => 'order\'s reference', 'charset' => 'utf8mb4'),
		'Qte_Prod' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => 'order\'s total number of diff products'),
		'Prix_Total' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,0', 'unsigned' => false, 'comment' => 'order\'s total amount'),
		'Nom_Client' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => 'client\'s name'),
		'Date_pass' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => 'order\'s created date'),
		'Date_mod' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'order\'s modified date'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_general_ci', 'engine' => 'InnoDB', 'comment' => 'Orders from client')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'Ref_Com' => 'Lorem ipsum dolor sit amet',
			'Qte_Prod' => 1,
			'Prix_Total' => '',
			'Nom_Client' => 1,
			'Date_pass' => '2020-10-23 11:15:02',
			'Date_mod' => '2020-10-23 11:15:02'
		),
	);

}
