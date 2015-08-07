<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClientesCategorias Controller
 *
 * @property \App\Model\Table\ClientesCategoriasTable $ClientesCategorias
 */
class ClientesCategoriasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('clientesCategorias', $this->paginate($this->ClientesCategorias));
        $this->set('_serialize', ['clientesCategorias']);
    }

    /**
     * View method
     *
     * @param string|null $id Clientes Categoria id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientesCategoria = $this->ClientesCategorias->get($id, [
            'contain' => []
        ]);
        $this->set('clientesCategoria', $clientesCategoria);
        $this->set('_serialize', ['clientesCategoria']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clientesCategoria = $this->ClientesCategorias->newEntity();
        if ($this->request->is('post')) {
            $clientesCategoria = $this->ClientesCategorias->patchEntity($clientesCategoria, $this->request->data);
            if ($this->ClientesCategorias->save($clientesCategoria)) {
                $this->Flash->success(__('The clientes categoria has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The clientes categoria could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('clientesCategoria'));
        $this->set('_serialize', ['clientesCategoria']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Clientes Categoria id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clientesCategoria = $this->ClientesCategorias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientesCategoria = $this->ClientesCategorias->patchEntity($clientesCategoria, $this->request->data);
            if ($this->ClientesCategorias->save($clientesCategoria)) {
                $this->Flash->success(__('The clientes categoria has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The clientes categoria could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('clientesCategoria'));
        $this->set('_serialize', ['clientesCategoria']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Clientes Categoria id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientesCategoria = $this->ClientesCategorias->get($id);
        if ($this->ClientesCategorias->delete($clientesCategoria)) {
            $this->Flash->success(__('The clientes categoria has been deleted.'));
        } else {
            $this->Flash->error(__('The clientes categoria could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
