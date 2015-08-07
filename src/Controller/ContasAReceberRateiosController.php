<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ContasAReceberRateios Controller
 *
 * @property \App\Model\Table\ContasAReceberRateiosTable $ContasAReceberRateios
 */
class ContasAReceberRateiosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ContasAReceber', 'Setores']
        ];
        $this->set('contasAReceberRateios', $this->paginate($this->ContasAReceberRateios));
        $this->set('_serialize', ['contasAReceberRateios']);
    }

    /**
     * View method
     *
     * @param string|null $id Contas A Receber Rateio id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contasAReceberRateio = $this->ContasAReceberRateios->get($id, [
            'contain' => ['ContasAReceber', 'Setores']
        ]);
        $this->set('contasAReceberRateio', $contasAReceberRateio);
        $this->set('_serialize', ['contasAReceberRateio']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contasAReceberRateio = $this->ContasAReceberRateios->newEntity();
        if ($this->request->is('post')) {
            $contasAReceberRateio = $this->ContasAReceberRateios->patchEntity($contasAReceberRateio, $this->request->data);
            if ($this->ContasAReceberRateios->save($contasAReceberRateio)) {
                $this->Flash->success(__('The contas a receber rateio has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The contas a receber rateio could not be saved. Please, try again.'));
            }
        }
        $contasAReceber = $this->ContasAReceberRateios->ContasAReceber->find('list', ['limit' => 200]);
        $setores = $this->ContasAReceberRateios->Setores->find('list', ['limit' => 200]);
        $this->set(compact('contasAReceberRateio', 'contasAReceber', 'setores'));
        $this->set('_serialize', ['contasAReceberRateio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Contas A Receber Rateio id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contasAReceberRateio = $this->ContasAReceberRateios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contasAReceberRateio = $this->ContasAReceberRateios->patchEntity($contasAReceberRateio, $this->request->data);
            if ($this->ContasAReceberRateios->save($contasAReceberRateio)) {
                $this->Flash->success(__('The contas a receber rateio has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The contas a receber rateio could not be saved. Please, try again.'));
            }
        }
        $contasAReceber = $this->ContasAReceberRateios->ContasAReceber->find('list', ['limit' => 200]);
        $setores = $this->ContasAReceberRateios->Setores->find('list', ['limit' => 200]);
        $this->set(compact('contasAReceberRateio', 'contasAReceber', 'setores'));
        $this->set('_serialize', ['contasAReceberRateio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Contas A Receber Rateio id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contasAReceberRateio = $this->ContasAReceberRateios->get($id);
        if ($this->ContasAReceberRateios->delete($contasAReceberRateio)) {
            $this->Flash->success(__('The contas a receber rateio has been deleted.'));
        } else {
            $this->Flash->error(__('The contas a receber rateio could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
