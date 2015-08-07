<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Retencoes Controller
 *
 * @property \App\Model\Table\RetencoesTable $Retencoes
 */
class RetencoesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('retencoes', $this->paginate($this->Retencoes));
        $this->set('_serialize', ['retencoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Retencao id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $retencao = $this->Retencoes->get($id, [
            'contain' => ['ContasAPagar', 'ContasAReceber']
        ]);
        $this->set('retencao', $retencao);
        $this->set('_serialize', ['retencao']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $retencao = $this->Retencoes->newEntity();
        if ($this->request->is('post')) {
            $retencao = $this->Retencoes->patchEntity($retencao, $this->request->data);
            if ($this->Retencoes->save($retencao)) {
                $this->Flash->success(__('The retencao has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The retencao could not be saved. Please, try again.'));
            }
        }
        $contasAPagar = $this->Retencoes->ContasAPagar->find('list', ['limit' => 200]);
        $contasAReceber = $this->Retencoes->ContasAReceber->find('list', ['limit' => 200]);
        $this->set(compact('retencao', 'contasAPagar', 'contasAReceber'));
        $this->set('_serialize', ['retencao']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Retencao id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $retencao = $this->Retencoes->get($id, [
            'contain' => ['ContasAPagar', 'ContasAReceber']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $retencao = $this->Retencoes->patchEntity($retencao, $this->request->data);
            if ($this->Retencoes->save($retencao)) {
                $this->Flash->success(__('The retencao has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The retencao could not be saved. Please, try again.'));
            }
        }
        $contasAPagar = $this->Retencoes->ContasAPagar->find('list', ['limit' => 200]);
        $contasAReceber = $this->Retencoes->ContasAReceber->find('list', ['limit' => 200]);
        $this->set(compact('retencao', 'contasAPagar', 'contasAReceber'));
        $this->set('_serialize', ['retencao']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Retencao id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $retencao = $this->Retencoes->get($id);
        if ($this->Retencoes->delete($retencao)) {
            $this->Flash->success(__('The retencao has been deleted.'));
        } else {
            $this->Flash->error(__('The retencao could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
