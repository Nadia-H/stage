<?php
App::uses('AppController', 'Controller');
/**
 * Commandes Controller
 *
 * @property Commande $Commande
 * @property PaginatorComponent $Paginator
 */
class CommandesController extends AppController {

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
		$this->Commande->recursive = 0;
		$this->set('commandes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Commande->exists($id)) {
			throw new NotFoundException(__('Invalid commande'));
		}
		$options = array('conditions' => array('Commande.' . $this->Commande->primaryKey => $id));
		$this->set('commande', $this->Commande->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Commande->create();
			if ($this->Commande->save($this->request->data)) {
				$this->Flash->success(__('The commande has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The commande could not be saved. Please, try again.'));
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
		if (!$this->Commande->exists($id)) {
			throw new NotFoundException(__('Invalid commande'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Commande->save($this->request->data)) {
				$this->Flash->success(__('The commande has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The commande could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Commande.' . $this->Commande->primaryKey => $id));
			$this->request->data = $this->Commande->find('first', $options);
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
		if (!$this->Commande->exists($id)) {
			throw new NotFoundException(__('Invalid commande'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Commande->delete($id)) {
			$this->Flash->success(__('The commande has been deleted.'));
		} else {
			$this->Flash->error(__('The commande could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
