<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ContasAReceberRetencoes Controller
 *
 * @property \App\Model\Table\ContasAReceberRetencoesTable $ContasAReceberRetencoes
 */
class ContasAReceberRetencoesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Retencoes', 'ContasAReceber']
        ];
        $this->set('contasAReceberRetencoes', $this->paginate($this->ContasAReceberRetencoes));
        $this->set('_serialize', ['contasAReceberRetencoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Contas A Receber Retencao id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contasAReceberRetencao = $this->ContasAReceberRetencoes->get($id, [
            'contain' => ['Retencoes', 'ContasAReceber']
        ]);
        $this->set('contasAReceberRetencao', $contasAReceberRetencao);
        $this->set('_serialize', ['contasAReceberRetencao']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contasAReceberRetencao = $this->ContasAReceberRetencoes->newEntity();
        if ($this->request->is('post')) {
            $contasAReceberRetencao = $this->ContasAReceberRetencoes->patchEntity($contasAReceberRetencao, $this->request->data);
            if ($this->ContasAReceberRetencoes->save($contasAReceberRetencao)) {
                $this->Flash->success(__('The contas a receber retencao has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The contas a receber retencao could not be saved. Please, try again.'));
            }
        }
        $retencoes = $this->ContasAReceberRetencoes->Retencoes->find('list', ['limit' => 200]);
        $contasAReceber = $this->ContasAReceberRetencoes->ContasAReceber->find('list', ['limit' => 200]);
        $this->set(compact('contasAReceberRetencao', 'retencoes', 'contasAReceber'));
        $this->set('_serialize', ['contasAReceberRetencao']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Contas A Receber Retencao id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contasAReceberRetencao = $this->ContasAReceberRetencoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contasAReceberRetencao = $this->ContasAReceberRetencoes->patchEntity($contasAReceberRetencao, $this->request->data);
            if ($this->ContasAReceberRetencoes->save($contasAReceberRetencao)) {
                $this->Flash->success(__('The contas a receber retencao has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The contas a receber retencao could not be saved. Please, try again.'));
            }
        }
        $retencoes = $this->ContasAReceberRetencoes->Retencoes->find('list', ['limit' => 200]);
        $contasAReceber = $this->ContasAReceberRetencoes->ContasAReceber->find('list', ['limit' => 200]);
        $this->set(compact('contasAReceberRetencao', 'retencoes', 'contasAReceber'));
        $this->set('_serialize', ['contasAReceberRetencao']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Contas A Receber Retencao id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contasAReceberRetencao = $this->ContasAReceberRetencoes->get($id);
        if ($this->ContasAReceberRetencoes->delete($contasAReceberRetencao)) {
            $this->Flash->success(__('The contas a receber retencao has been deleted.'));
        } else {
            $this->Flash->error(__('The contas a receber retencao could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
