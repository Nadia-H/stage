<?php
App::uses('Lignecommande', 'Model');

/**
 * Lignecommande Test Case
 */
class LignecommandeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lignecommande',
		'app.produit',
		'app.commande'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Lignecommande = ClassRegistry::init('Lignecommande');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Lignecommande);

		parent::tearDown();
	}

}
