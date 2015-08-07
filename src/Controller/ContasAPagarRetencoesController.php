<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ContasAPagarRetencoes Controller
 *
 * @property \App\Model\Table\ContasAPagarRetencoesTable $ContasAPagarRetencoes
 */
class ContasAPagarRetencoesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Retencoes', 'ContasAPagar']
        ];
        $this->set('contasAPagarRetencoes', $this->paginate($this->ContasAPagarRetencoes));
        $this->set('_serialize', ['contasAPagarRetencoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Contas A Pagar Retencao id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contasAPagarRetencao = $this->ContasAPagarRetencoes->get($id, [
            'contain' => ['Retencoes', 'ContasAPagar']
        ]);
        $this->set('contasAPagarRetencao', $contasAPagarRetencao);
        $this->set('_serialize', ['contasAPagarRetencao']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contasAPagarRetencao = $this->ContasAPagarRetencoes->newEntity();
        if ($this->request->is('post')) {
            $contasAPagarRetencao = $this->ContasAPagarRetencoes->patchEntity($contasAPagarRetencao, $this->request->data);
            if ($this->ContasAPagarRetencoes->save($contasAPagarRetencao)) {
                $this->Flash->success(__('The contas a pagar retencao has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The contas a pagar retencao could not be saved. Please, try again.'));
            }
        }
        $retencoes = $this->ContasAPagarRetencoes->Retencoes->find('list', ['limit' => 200]);
        $contasAPagar = $this->ContasAPagarRetencoes->ContasAPagar->find('list', ['limit' => 200]);
        $this->set(compact('contasAPagarRetencao', 'retencoes', 'contasAPagar'));
        $this->set('_serialize', ['contasAPagarRetencao']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Contas A Pagar Retencao id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contasAPagarRetencao = $this->ContasAPagarRetencoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contasAPagarRetencao = $this->ContasAPagarRetencoes->patchEntity($contasAPagarRetencao, $this->request->data);
            if ($this->ContasAPagarRetencoes->save($contasAPagarRetencao)) {
                $this->Flash->success(__('The contas a pagar retencao has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The contas a pagar retencao could not be saved. Please, try again.'));
            }
        }
        $retencoes = $this->ContasAPagarRetencoes->Retencoes->find('list', ['limit' => 200]);
        $contasAPagar = $this->ContasAPagarRetencoes->ContasAPagar->find('list', ['limit' => 200]);
        $this->set(compact('contasAPagarRetencao', 'retencoes', 'contasAPagar'));
        $this->set('_serialize', ['contasAPagarRetencao']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Contas A Pagar Retencao id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contasAPagarRetencao = $this->ContasAPagarRetencoes->get($id);
        if ($this->ContasAPagarRetencoes->delete($contasAPagarRetencao)) {
            $this->Flash->success(__('The contas a pagar retencao has been deleted.'));
        } else {
            $this->Flash->error(__('The contas a pagar retencao could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
