<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClientesEnderecos Controller
 *
 * @property \App\Model\Table\ClientesEnderecosTable $ClientesEnderecos
 */
class ClientesEnderecosController extends AppController
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
        $this->set('clientesEnderecos', $this->paginate($this->ClientesEnderecos));
        $this->set('_serialize', ['clientesEnderecos']);
    }

    /**
     * View method
     *
     * @param string|null $id Clientes Endereco id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientesEndereco = $this->ClientesEnderecos->get($id, [
            'contain' => ['Clientes']
        ]);
        $this->set('clientesEndereco', $clientesEndereco);
        $this->set('_serialize', ['clientesEndereco']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clientesEndereco = $this->ClientesEnderecos->newEntity();
        if ($this->request->is('post')) {
            $clientesEndereco = $this->ClientesEnderecos->patchEntity($clientesEndereco, $this->request->data);
            if ($this->ClientesEnderecos->save($clientesEndereco)) {
                $this->Flash->success(__('The clientes endereco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The clientes endereco could not be saved. Please, try again.'));
            }
        }
        $clientes = $this->ClientesEnderecos->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('clientesEndereco', 'clientes'));
        $this->set('_serialize', ['clientesEndereco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Clientes Endereco id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clientesEndereco = $this->ClientesEnderecos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientesEndereco = $this->ClientesEnderecos->patchEntity($clientesEndereco, $this->request->data);
            if ($this->ClientesEnderecos->save($clientesEndereco)) {
                $this->Flash->success(__('The clientes endereco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The clientes endereco could not be saved. Please, try again.'));
            }
        }
        $clientes = $this->ClientesEnderecos->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('clientesEndereco', 'clientes'));
        $this->set('_serialize', ['clientesEndereco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Clientes Endereco id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientesEndereco = $this->ClientesEnderecos->get($id);
        if ($this->ClientesEnderecos->delete($clientesEndereco)) {
            $this->Flash->success(__('The clientes endereco has been deleted.'));
        } else {
            $this->Flash->error(__('The clientes endereco could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
