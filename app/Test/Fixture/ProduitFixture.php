<?php
/**
 * Produit Fixture
 */
class ProduitFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'Product\'s id'),
		'Des_Prod' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8mb4_general_ci', 'comment' => 'Product\'s name', 'charset' => 'utf8mb4'),
		'Nom_Cat' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8mb4_general_ci', 'comment' => 'Product\'s category', 'charset' => 'utf8mb4'),
		'Prix_U' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,0', 'unsigned' => false, 'comment' => 'Product\'s price_per_unit'),
		'Qte_Stck' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => 'Product\'s quantity in store'),
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
			'Des_Prod' => 'Lorem ipsum dolor sit amet',
			'Nom_Cat' => 'Lorem ipsum dolor sit amet',
			'Prix_U' => '',
			'Qte_Stck' => 1
		),
	);

}
