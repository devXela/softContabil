<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ContaFornecedores Controller
 *
 * @property \App\Model\Table\ContaFornecedoresTable $ContaFornecedores
 */
class ContaFornecedoresController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Fornecedors', 'Bancos']
        ];
        $this->set('contaFornecedores', $this->paginate($this->ContaFornecedores));
        $this->set('_serialize', ['contaFornecedores']);
    }

    /**
     * View method
     *
     * @param string|null $id Conta Fornecedore id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contaFornecedore = $this->ContaFornecedores->get($id, [
            'contain' => ['Fornecedors', 'Bancos']
        ]);
        $this->set('contaFornecedore', $contaFornecedore);
        $this->set('_serialize', ['contaFornecedore']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contaFornecedore = $this->ContaFornecedores->newEntity();
        if ($this->request->is('post')) {
            $contaFornecedore = $this->ContaFornecedores->patchEntity($contaFornecedore, $this->request->data);
            if ($this->ContaFornecedores->save($contaFornecedore)) {
                $this->Flash->success(__('The conta fornecedore has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The conta fornecedore could not be saved. Please, try again.'));
            }
        }
        $fornecedors = $this->ContaFornecedores->Fornecedors->find('list', ['limit' => 200]);
        $bancos = $this->ContaFornecedores->Bancos->find('list', ['limit' => 200]);
        $this->set(compact('contaFornecedore', 'fornecedors', 'bancos'));
        $this->set('_serialize', ['contaFornecedore']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Conta Fornecedore id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contaFornecedore = $this->ContaFornecedores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contaFornecedore = $this->ContaFornecedores->patchEntity($contaFornecedore, $this->request->data);
            if ($this->ContaFornecedores->save($contaFornecedore)) {
                $this->Flash->success(__('The conta fornecedore has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The conta fornecedore could not be saved. Please, try again.'));
            }
        }
        $fornecedors = $this->ContaFornecedores->Fornecedors->find('list', ['limit' => 200]);
        $bancos = $this->ContaFornecedores->Bancos->find('list', ['limit' => 200]);
        $this->set(compact('contaFornecedore', 'fornecedors', 'bancos'));
        $this->set('_serialize', ['contaFornecedore']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Conta Fornecedore id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contaFornecedore = $this->ContaFornecedores->get($id);
        if ($this->ContaFornecedores->delete($contaFornecedore)) {
            $this->Flash->success(__('The conta fornecedore has been deleted.'));
        } else {
            $this->Flash->error(__('The conta fornecedore could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
