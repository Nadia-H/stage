<?php
App::uses('Detailfacture', 'Model');

/**
 * Detailfacture Test Case
 *
 */
class DetailfactureTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.detailfacture',
		'app.facture',
		'app.client',
		'app.typeclient',
		'app.contact',
		'app.article'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Detailfacture = ClassRegistry::init('Detailfacture');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Detailfacture);

		parent::tearDown();
	}

}
