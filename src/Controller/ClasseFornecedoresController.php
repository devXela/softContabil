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
     * @param string|null $id Classe Fornecedore id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $classeFornecedore = $this->ClasseFornecedores->get($id, [
            'contain' => []
        ]);
        $this->set('classeFornecedore', $classeFornecedore);
        $this->set('_serialize', ['classeFornecedore']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $classeFornecedore = $this->ClasseFornecedores->newEntity();
        if ($this->request->is('post')) {
            $classeFornecedore = $this->ClasseFornecedores->patchEntity($classeFornecedore, $this->request->data);
            if ($this->ClasseFornecedores->save($classeFornecedore)) {
                $this->Flash->success(__('The classe fornecedore has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The classe fornecedore could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('classeFornecedore'));
        $this->set('_serialize', ['classeFornecedore']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Classe Fornecedore id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $classeFornecedore = $this->ClasseFornecedores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $classeFornecedore = $this->ClasseFornecedores->patchEntity($classeFornecedore, $this->request->data);
            if ($this->ClasseFornecedores->save($classeFornecedore)) {
                $this->Flash->success(__('The classe fornecedore has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The classe fornecedore could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('classeFornecedore'));
        $this->set('_serialize', ['classeFornecedore']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Classe Fornecedore id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $classeFornecedore = $this->ClasseFornecedores->get($id);
        if ($this->ClasseFornecedores->delete($classeFornecedore)) {
            $this->Flash->success(__('The classe fornecedore has been deleted.'));
        } else {
            $this->Flash->error(__('The classe fornecedore could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
