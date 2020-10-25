<?php
/**
 * DetailfactureFixture
 *
 */
class DetailfactureFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'facture_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'article_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'qte' => array('type' => 'integer', 'null' => false, 'default' => null),
		'prix' => array('type' => 'integer', 'null' => false, 'default' => null),
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
			'facture_id' => 1,
			'article_id' => 1,
			'qte' => 1,
			'prix' => 1
		),
	);

}
