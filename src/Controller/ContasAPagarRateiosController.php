<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ContasAPagarRateios Controller
 *
 * @property \App\Model\Table\ContasAPagarRateiosTable $ContasAPagarRateios
 */
class ContasAPagarRateiosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ContasAPagars', 'Setores']
        ];
        $this->set('contasAPagarRateios', $this->paginate($this->ContasAPagarRateios));
        $this->set('_serialize', ['contasAPagarRateios']);
    }

    /**
     * View method
     *
     * @param string|null $id Contas A Pagar Rateio id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contasAPagarRateio = $this->ContasAPagarRateios->get($id, [
            'contain' => ['ContasAPagars', 'Setores']
        ]);
        $this->set('contasAPagarRateio', $contasAPagarRateio);
        $this->set('_serialize', ['contasAPagarRateio']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contasAPagarRateio = $this->ContasAPagarRateios->newEntity();
        if ($this->request->is('post')) {
            $contasAPagarRateio = $this->ContasAPagarRateios->patchEntity($contasAPagarRateio, $this->request->data);
            if ($this->ContasAPagarRateios->save($contasAPagarRateio)) {
                $this->Flash->success(__('The contas a pagar rateio has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The contas a pagar rateio could not be saved. Please, try again.'));
            }
        }
        $contasAPagars = $this->ContasAPagarRateios->ContasAPagars->find('list', ['limit' => 200]);
        $setores = $this->ContasAPagarRateios->Setores->find('list', ['limit' => 200]);
        $this->set(compact('contasAPagarRateio', 'contasAPagars', 'setores'));
        $this->set('_serialize', ['contasAPagarRateio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Contas A Pagar Rateio id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contasAPagarRateio = $this->ContasAPagarRateios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contasAPagarRateio = $this->ContasAPagarRateios->patchEntity($contasAPagarRateio, $this->request->data);
            if ($this->ContasAPagarRateios->save($contasAPagarRateio)) {
                $this->Flash->success(__('The contas a pagar rateio has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The contas a pagar rateio could not be saved. Please, try again.'));
            }
        }
        $contasAPagars = $this->ContasAPagarRateios->ContasAPagars->find('list', ['limit' => 200]);
        $setores = $this->ContasAPagarRateios->Setores->find('list', ['limit' => 200]);
        $this->set(compact('contasAPagarRateio', 'contasAPagars', 'setores'));
        $this->set('_serialize', ['contasAPagarRateio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Contas A Pagar Rateio id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contasAPagarRateio = $this->ContasAPagarRateios->get($id);
        if ($this->ContasAPagarRateios->delete($contasAPagarRateio)) {
            $this->Flash->success(__('The contas a pagar rateio has been deleted.'));
        } else {
            $this->Flash->error(__('The contas a pagar rateio could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
