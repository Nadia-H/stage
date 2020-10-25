<?php
App::uses('Typeclient', 'Model');

/**
 * Typeclient Test Case
 *
 */
class TypeclientTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.typeclient',
		'app.client'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Typeclient = ClassRegistry::init('Typeclient');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Typeclient);

		parent::tearDown();
	}

}
