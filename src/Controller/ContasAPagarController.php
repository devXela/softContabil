<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ContasAPagar Controller
 *
 * @property \App\Model\Table\ContasAPagarTable $ContasAPagar
 */
class ContasAPagarController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['FormaPagamentos', 'Fornecedors']
        ];
        $this->set('contasAPagar', $this->paginate($this->ContasAPagar));
        $this->set('_serialize', ['contasAPagar']);
    }

    /**
     * View method
     *
     * @param string|null $id Contas A Pagar id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contasAPagar = $this->ContasAPagar->get($id, [
            'contain' => ['FormaPagamentos', 'Fornecedors', 'Retencoes']
        ]);
        $this->set('contasAPagar', $contasAPagar);
        $this->set('_serialize', ['contasAPagar']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contasAPagar = $this->ContasAPagar->newEntity();
        if ($this->request->is('post')) {
            $contasAPagar = $this->ContasAPagar->patchEntity($contasAPagar, $this->request->data);
            if ($this->ContasAPagar->save($contasAPagar)) {
                $this->Flash->success(__('The contas a pagar has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The contas a pagar could not be saved. Please, try again.'));
            }
        }
        $formaPagamentos = $this->ContasAPagar->FormaPagamentos->find('list', ['limit' => 200]);
        $fornecedors = $this->ContasAPagar->Fornecedors->find('list', ['limit' => 200]);
        $retencoes = $this->ContasAPagar->Retencoes->find('list', ['limit' => 200]);
        $this->set(compact('contasAPagar', 'formaPagamentos', 'fornecedors', 'retencoes'));
        $this->set('_serialize', ['contasAPagar']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Contas A Pagar id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contasAPagar = $this->ContasAPagar->get($id, [
            'contain' => ['Retencoes']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contasAPagar = $this->ContasAPagar->patchEntity($contasAPagar, $this->request->data);
            if ($this->ContasAPagar->save($contasAPagar)) {
                $this->Flash->success(__('The contas a pagar has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The contas a pagar could not be saved. Please, try again.'));
            }
        }
        $formaPagamentos = $this->ContasAPagar->FormaPagamentos->find('list', ['limit' => 200]);
        $fornecedors = $this->ContasAPagar->Fornecedors->find('list', ['limit' => 200]);
        $retencoes = $this->ContasAPagar->Retencoes->find('list', ['limit' => 200]);
        $this->set(compact('contasAPagar', 'formaPagamentos', 'fornecedors', 'retencoes'));
        $this->set('_serialize', ['contasAPagar']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Contas A Pagar id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contasAPagar = $this->ContasAPagar->get($id);
        if ($this->ContasAPagar->delete($contasAPagar)) {
            $this->Flash->success(__('The contas a pagar has been deleted.'));
        } else {
            $this->Flash->error(__('The contas a pagar could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
