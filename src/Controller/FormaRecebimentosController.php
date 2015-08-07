<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FormaRecebimentos Controller
 *
 * @property \App\Model\Table\FormaRecebimentosTable $FormaRecebimentos
 */
class FormaRecebimentosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('formaRecebimentos', $this->paginate($this->FormaRecebimentos));
        $this->set('_serialize', ['formaRecebimentos']);
    }

    /**
     * View method
     *
     * @param string|null $id Forma Recebimento id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $formaRecebimento = $this->FormaRecebimentos->get($id, [
            'contain' => ['ContasAReceber']
        ]);
        $this->set('formaRecebimento', $formaRecebimento);
        $this->set('_serialize', ['formaRecebimento']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $formaRecebimento = $this->FormaRecebimentos->newEntity();
        if ($this->request->is('post')) {
            $formaRecebimento = $this->FormaRecebimentos->patchEntity($formaRecebimento, $this->request->data);
            if ($this->FormaRecebimentos->save($formaRecebimento)) {
                $this->Flash->success(__('The forma recebimento has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The forma recebimento could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('formaRecebimento'));
        $this->set('_serialize', ['formaRecebimento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Forma Recebimento id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $formaRecebimento = $this->FormaRecebimentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $formaRecebimento = $this->FormaRecebimentos->patchEntity($formaRecebimento, $this->request->data);
            if ($this->FormaRecebimentos->save($formaRecebimento)) {
                $this->Flash->success(__('The forma recebimento has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The forma recebimento could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('formaRecebimento'));
        $this->set('_serialize', ['formaRecebimento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Forma Recebimento id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $formaRecebimento = $this->FormaRecebimentos->get($id);
        if ($this->FormaRecebimentos->delete($formaRecebimento)) {
            $this->Flash->success(__('The forma recebimento has been deleted.'));
        } else {
            $this->Flash->error(__('The forma recebimento could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
