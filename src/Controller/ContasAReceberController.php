<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ContasAReceber Controller
 *
 * @property \App\Model\Table\ContasAReceberTable $ContasAReceber
 */
class ContasAReceberController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clientes', 'FormaRecebimentos', 'ContaEmpresas']
        ];
        $this->set('contasAReceber', $this->paginate($this->ContasAReceber));
        $this->set('_serialize', ['contasAReceber']);
    }

    /**
     * View method
     *
     * @param string|null $id Contas A Receber id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contasAReceber = $this->ContasAReceber->get($id, [
            'contain' => ['Clientes', 'FormaRecebimentos', 'ContaEmpresas', 'Retencoes']
        ]);
        $this->set('contasAReceber', $contasAReceber);
        $this->set('_serialize', ['contasAReceber']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contasAReceber = $this->ContasAReceber->newEntity();
        if ($this->request->is('post')) {
            $contasAReceber = $this->ContasAReceber->patchEntity($contasAReceber, $this->request->data);
            if ($this->ContasAReceber->save($contasAReceber)) {
                $this->Flash->success(__('The contas a receber has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The contas a receber could not be saved. Please, try again.'));
            }
        }
        $clientes = $this->ContasAReceber->Clientes->find('list', ['limit' => 200]);
        $formaRecebimentos = $this->ContasAReceber->FormaRecebimentos->find('list', ['limit' => 200]);
        $contaEmpresas = $this->ContasAReceber->ContaEmpresas->find('list', ['limit' => 200]);
        $retencoes = $this->ContasAReceber->Retencoes->find('list', ['limit' => 200]);
        $this->set(compact('contasAReceber', 'clientes', 'formaRecebimentos', 'contaEmpresas', 'retencoes'));
        $this->set('_serialize', ['contasAReceber']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Contas A Receber id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contasAReceber = $this->ContasAReceber->get($id, [
            'contain' => ['Retencoes']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contasAReceber = $this->ContasAReceber->patchEntity($contasAReceber, $this->request->data);
            if ($this->ContasAReceber->save($contasAReceber)) {
                $this->Flash->success(__('The contas a receber has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The contas a receber could not be saved. Please, try again.'));
            }
        }
        $clientes = $this->ContasAReceber->Clientes->find('list', ['limit' => 200]);
        $formaRecebimentos = $this->ContasAReceber->FormaRecebimentos->find('list', ['limit' => 200]);
        $contaEmpresas = $this->ContasAReceber->ContaEmpresas->find('list', ['limit' => 200]);
        $retencoes = $this->ContasAReceber->Retencoes->find('list', ['limit' => 200]);
        $this->set(compact('contasAReceber', 'clientes', 'formaRecebimentos', 'contaEmpresas', 'retencoes'));
        $this->set('_serialize', ['contasAReceber']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Contas A Receber id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contasAReceber = $this->ContasAReceber->get($id);
        if ($this->ContasAReceber->delete($contasAReceber)) {
            $this->Flash->success(__('The contas a receber has been deleted.'));
        } else {
            $this->Flash->error(__('The contas a receber could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
