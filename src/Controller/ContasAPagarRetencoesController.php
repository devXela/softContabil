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
            'contain' => ['Retencaos', 'ContasAPagars']
        ];
        $this->set('contasAPagarRetencoes', $this->paginate($this->ContasAPagarRetencoes));
        $this->set('_serialize', ['contasAPagarRetencoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Contas A Pagar Retenco id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contasAPagarRetenco = $this->ContasAPagarRetencoes->get($id, [
            'contain' => ['Retencaos', 'ContasAPagars']
        ]);
        $this->set('contasAPagarRetenco', $contasAPagarRetenco);
        $this->set('_serialize', ['contasAPagarRetenco']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contasAPagarRetenco = $this->ContasAPagarRetencoes->newEntity();
        if ($this->request->is('post')) {
            $contasAPagarRetenco = $this->ContasAPagarRetencoes->patchEntity($contasAPagarRetenco, $this->request->data);
            if ($this->ContasAPagarRetencoes->save($contasAPagarRetenco)) {
                $this->Flash->success(__('The contas a pagar retenco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The contas a pagar retenco could not be saved. Please, try again.'));
            }
        }
        $retencaos = $this->ContasAPagarRetencoes->Retencaos->find('list', ['limit' => 200]);
        $contasAPagars = $this->ContasAPagarRetencoes->ContasAPagars->find('list', ['limit' => 200]);
        $this->set(compact('contasAPagarRetenco', 'retencaos', 'contasAPagars'));
        $this->set('_serialize', ['contasAPagarRetenco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Contas A Pagar Retenco id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contasAPagarRetenco = $this->ContasAPagarRetencoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contasAPagarRetenco = $this->ContasAPagarRetencoes->patchEntity($contasAPagarRetenco, $this->request->data);
            if ($this->ContasAPagarRetencoes->save($contasAPagarRetenco)) {
                $this->Flash->success(__('The contas a pagar retenco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The contas a pagar retenco could not be saved. Please, try again.'));
            }
        }
        $retencaos = $this->ContasAPagarRetencoes->Retencaos->find('list', ['limit' => 200]);
        $contasAPagars = $this->ContasAPagarRetencoes->ContasAPagars->find('list', ['limit' => 200]);
        $this->set(compact('contasAPagarRetenco', 'retencaos', 'contasAPagars'));
        $this->set('_serialize', ['contasAPagarRetenco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Contas A Pagar Retenco id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contasAPagarRetenco = $this->ContasAPagarRetencoes->get($id);
        if ($this->ContasAPagarRetencoes->delete($contasAPagarRetenco)) {
            $this->Flash->success(__('The contas a pagar retenco has been deleted.'));
        } else {
            $this->Flash->error(__('The contas a pagar retenco could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
