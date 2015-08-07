<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClientesTelefones Controller
 *
 * @property \App\Model\Table\ClientesTelefonesTable $ClientesTelefones
 */
class ClientesTelefonesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clientes']
        ];
        $this->set('clientesTelefones', $this->paginate($this->ClientesTelefones));
        $this->set('_serialize', ['clientesTelefones']);
    }

    /**
     * View method
     *
     * @param string|null $id Clientes Telefone id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientesTelefone = $this->ClientesTelefones->get($id, [
            'contain' => ['Clientes']
        ]);
        $this->set('clientesTelefone', $clientesTelefone);
        $this->set('_serialize', ['clientesTelefone']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clientesTelefone = $this->ClientesTelefones->newEntity();
        if ($this->request->is('post')) {
            $clientesTelefone = $this->ClientesTelefones->patchEntity($clientesTelefone, $this->request->data);
            if ($this->ClientesTelefones->save($clientesTelefone)) {
                $this->Flash->success(__('The clientes telefone has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The clientes telefone could not be saved. Please, try again.'));
            }
        }
        $clientes = $this->ClientesTelefones->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('clientesTelefone', 'clientes'));
        $this->set('_serialize', ['clientesTelefone']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Clientes Telefone id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clientesTelefone = $this->ClientesTelefones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientesTelefone = $this->ClientesTelefones->patchEntity($clientesTelefone, $this->request->data);
            if ($this->ClientesTelefones->save($clientesTelefone)) {
                $this->Flash->success(__('The clientes telefone has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The clientes telefone could not be saved. Please, try again.'));
            }
        }
        $clientes = $this->ClientesTelefones->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('clientesTelefone', 'clientes'));
        $this->set('_serialize', ['clientesTelefone']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Clientes Telefone id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientesTelefone = $this->ClientesTelefones->get($id);
        if ($this->ClientesTelefones->delete($clientesTelefone)) {
            $this->Flash->success(__('The clientes telefone has been deleted.'));
        } else {
            $this->Flash->error(__('The clientes telefone could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
