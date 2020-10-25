<?php
App::uses('Lot', 'Model');

/**
 * Lot Test Case
 *
 */
class LotTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lot',
		'app.deposit',
		'app.inventory',
		'app.bill',
		'app.fournisseur',
		'app.contact',
		'app.pay',
		'app.ligneclient',
		'app.ville',
		'app.client',
		'app.timbre',
		'app.boncommande',
		'app.utilisateur',
		'app.bonlivraison',
		'app.lignebonlivraison',
		'app.article',
		'app.famille',
		'app.lignecollection',
		'app.collection',
		'app.lignecommande',
		'app.transferecommandebl',
		'app.transferedeviscommande',
		'app.lignedevi',
		'app.devi',
		'app.lignelignecollection',
		'app.modele',
		'app.couleur',
		'app.taille',
		'app.type',
		'app.lignefacture',
		'app.facture',
		'app.transfereblfacture',
		'app.ligneinventaire',
		'app.inventaire',
		'app.depot',
		'app.mouvementstock',
		'app.ligneproduction',
		'app.production',
		'app.personnel',
		'app.ligneligneproduction',
		'app.stockdepot',
		'app.utilisateurmenu',
		'app.menu',
		'app.lien',
		'app.reglement',
		'app.lignereglement',
		'app.piecereglement',
		'app.paiement',
		'app.mpfournisseur',
		'app.matierepremiere',
		'app.unite',
		'app.family',
		'app.machine',
		'app.emplacement',
		'app.color',
		'app.typestock',
		'app.lineinventory',
		'app.stockmatierepremiere',
		'app.inventorie',
		'app.bl',
		'app.bc',
		'app.lc',
		'app.lbl',
		'app.lbill'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Lot = ClassRegistry::init('Lot');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Lot);

		parent::tearDown();
	}

}
