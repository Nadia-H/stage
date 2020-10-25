<?php
App::uses('AppController', 'Controller');
/**
 * Ventes Controller
 *
 * @property Vente $Vente
 * @property PaginatorComponent $Paginator
 */
class VentesController extends AppController {

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
		$this->Vente->recursive = 0;
		$this->set('ventes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Vente->exists($id)) {
			throw new NotFoundException(__('Invalid vente'));
		}
		$options = array('conditions' => array('Vente.' . $this->Vente->primaryKey => $id));
		$this->set('vente', $this->Vente->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Vente->create();
			if ($this->Vente->save($this->request->data)) {
				$this->Flash->success(__('The vente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The vente could not be saved. Please, try again.'));
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
		if (!$this->Vente->exists($id)) {
			throw new NotFoundException(__('Invalid vente'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Vente->save($this->request->data)) {
				$this->Flash->success(__('The vente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The vente could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Vente.' . $this->Vente->primaryKey => $id));
			$this->request->data = $this->Vente->find('first', $options);
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
		if (!$this->Vente->exists($id)) {
			throw new NotFoundException(__('Invalid vente'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Vente->delete($id)) {
			$this->Flash->success(__('The vente has been deleted.'));
		} else {
			$this->Flash->error(__('The vente could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
