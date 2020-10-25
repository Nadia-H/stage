<?php
/**
 * ArticleFixture
 *
 */
class ArticleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 127, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'prix' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,3'),
		'lastprix' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,3'),
		'minprix' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,3'),
		'maxprix' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,3'),
		'qtealert' => array('type' => 'integer', 'null' => true, 'default' => null),
		'famille_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'reference_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modele_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'couleur_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'taille_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'type_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'prix' => 1,
			'lastprix' => 1,
			'minprix' => 1,
			'maxprix' => 1,
			'qtealert' => 1,
			'famille_id' => 1,
			'reference_id' => 1,
			'modele_id' => 1,
			'couleur_id' => 1,
			'taille_id' => 1,
			'type_id' => 1
		),
	);

}
