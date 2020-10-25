<?php
App::uses('AppController', 'Controller');
/**
 * Lignecommandes Controller
 *
 * @property Lignecommande $Lignecommande
 * @property PaginatorComponent $Paginator
 */
class LignecommandesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Lignecommande->recursive = 0;
		$this->set('lignecommandes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Lignecommande->exists($id)) {
			throw new NotFoundException(__('Invalid lignecommande'));
		}
		$options = array('conditions' => array('Lignecommande.' . $this->Lignecommande->primaryKey => $id));
		$this->set('lignecommande', $this->Lignecommande->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Lignecommande->create();
			if ($this->Lignecommande->save($this->request->data)) {
				$this->Flash->success(__('The lignecommande has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The lignecommande could not be saved. Please, try again.'));
			}
		}
		$produits = $this->Lignecommande->Produit->find('list');
		$commandes = $this->Lignecommande->Commande->find('list');
		$this->set(compact('produits', 'commandes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Lignecommande->exists($id)) {
			throw new NotFoundException(__('Invalid lignecommande'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Lignecommande->save($this->request->data)) {
				$this->Flash->success(__('The lignecommande has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The lignecommande could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Lignecommande.' . $this->Lignecommande->primaryKey => $id));
			$this->request->data = $this->Lignecommande->find('first', $options);
		}
		$produits = $this->Lignecommande->Produit->find('list');
		$commandes = $this->Lignecommande->Commande->find('list');
		$this->set(compact('produits', 'commandes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Lignecommande->exists($id)) {
			throw new NotFoundException(__('Invalid lignecommande'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Lignecommande->delete($id)) {
			$this->Flash->success(__('The lignecommande has been deleted.'));
		} else {
			$this->Flash->error(__('The lignecommande could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
