<?php
App::uses('AppController', 'Controller');
/**
 * Detailfactures Controller
 *
 * @property Detailfacture $Detailfacture
 */
class DetailfacturesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Detailfacture->recursive = 0;
		$this->set('detailfactures', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Detailfacture->exists($id)) {
			throw new NotFoundException(__('Invalid detailfacture'));
		}
		$options = array('conditions' => array('Detailfacture.' . $this->Detailfacture->primaryKey => $id));
		$this->set('detailfacture', $this->Detailfacture->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Detailfacture->create();
			if ($this->Detailfacture->save($this->request->data)) {
				$this->Session->setFlash(__('The detailfacture has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detailfacture could not be saved. Please, try again.'));
			}
		}
		$factures = $this->Detailfacture->Facture->find('list');
		$articles = $this->Detailfacture->Article->find('list');
		$this->set(compact('factures', 'articles'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Detailfacture->exists($id)) {
			throw new NotFoundException(__('Invalid detailfacture'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Detailfacture->save($this->request->data)) {
				$this->Session->setFlash(__('The detailfacture has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detailfacture could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Detailfacture.' . $this->Detailfacture->primaryKey => $id));
			$this->request->data = $this->Detailfacture->find('first', $options);
		}
		$factures = $this->Detailfacture->Facture->find('list');
		$articles = $this->Detailfacture->Article->find('list');
		$this->set(compact('factures', 'articles'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Detailfacture->id = $id;
		if (!$this->Detailfacture->exists()) {
			throw new NotFoundException(__('Invalid detailfacture'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Detailfacture->delete()) {
			$this->Session->setFlash(__('Detailfacture deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Detailfacture was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
