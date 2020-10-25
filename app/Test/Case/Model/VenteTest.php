<?php
App::uses('Vente', 'Model');

/**
 * Vente Test Case
 */
class VenteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.vente'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Vente = ClassRegistry::init('Vente');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Vente);

		parent::tearDown();
	}

}
