<?php
App::uses('AppController', 'Controller');
/**
 * Produits Controller
 *
 * @property Produit $Produit
 * @property PaginatorComponent $Paginator
 */
class ProduitsController extends AppController {

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
		$this->Produit->recursive = 0;
		$this->set('produits', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Produit->exists($id)) {
			throw new NotFoundException(__('Invalid produit'));
		}
		$options = array('conditions' => array('Produit.' . $this->Produit->primaryKey => $id));
		$this->set('produit', $this->Produit->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Produit->create();
			if ($this->Produit->save($this->request->data)) {
				$this->Flash->success(__('The produit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The produit could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Produit->exists($id)) {
			throw new NotFoundException(__('Invalid produit'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Produit->save($this->request->data)) {
				$this->Flash->success(__('The produit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The produit could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Produit.' . $this->Produit->primaryKey => $id));
			$this->request->data = $this->Produit->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Produit->exists($id)) {
			throw new NotFoundException(__('Invalid produit'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Produit->delete($id)) {
			$this->Flash->success(__('The produit has been deleted.'));
		} else {
			$this->Flash->error(__('The produit could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
