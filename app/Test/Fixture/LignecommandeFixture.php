<?php
/**
 * Lignecommande Fixture
 */
class LignecommandeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'produit_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'quantite' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'prix' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,0', 'unsigned' => false),
		'total' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,0', 'unsigned' => false),
		'commande_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'produit_id' => 1,
			'quantite' => 1,
			'prix' => '',
			'total' => '',
			'commande_id' => 1
		),
	);

}
