<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClasseFornecedores Controller
 *
 * @property \App\Model\Table\ClasseFornecedoresTable $ClasseFornecedores
 */
class ClasseFornecedoresController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('classeFornecedores', $this->paginate($this->ClasseFornecedores));
        $this->set('_serialize', ['classeFornecedores']);
    }

    /**
     * View method
     *
     * @param string|null $id C id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $c = $this->ClasseFornecedores->get($id, [
            'contain' => []
        ]);
        $this->set('c', $c);
        $this->set('_serialize', ['c']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $c = $this->ClasseFornecedores->newEntity();
        if ($this->request->is('post')) {
            $c = $this->ClasseFornecedores->patchEntity($c, $this->request->data);
            if ($this->ClasseFornecedores->save($c)) {
                $this->Flash->success(__('The c has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The c could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('c'));
        $this->set('_serialize', ['c']);
    }

    /**
     * Edit method
     *
     * @param string|null $id C id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $c = $this->ClasseFornecedores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $c = $this->ClasseFornecedores->patchEntity($c, $this->request->data);
            if ($this->ClasseFornecedores->save($c)) {
                $this->Flash->success(__('The c has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The c could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('c'));
        $this->set('_serialize', ['c']);
    }

    /**
     * Delete method
     *
     * @param string|null $id C id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $c = $this->ClasseFornecedores->get($id);
        if ($this->ClasseFornecedores->delete($c)) {
            $this->Flash->success(__('The c has been deleted.'));
        } else {
            $this->Flash->error(__('The c could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
