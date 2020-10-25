<?php
App::uses('Article', 'Model');

/**
 * Article Test Case
 *
 */
class ArticleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.article',
		'app.famille',
		'app.reference',
		'app.modele',
		'app.couleur',
		'app.taille',
		'app.type',
		'app.lignebonlivraison',
		'app.lignecommande',
		'app.lignedevi',
		'app.lignefacture',
		'app.ligneproduction',
		'app.stockdepot'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Article = ClassRegistry::init('Article');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Article);

		parent::tearDown();
	}

}
