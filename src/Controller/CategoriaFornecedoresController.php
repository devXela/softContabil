<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CategoriaFornecedores Controller
 *
 * @property \App\Model\Table\CategoriaFornecedoresTable $CategoriaFornecedores
 */
class CategoriaFornecedoresController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('categoriaFornecedores', $this->paginate($this->CategoriaFornecedores));
        $this->set('_serialize', ['categoriaFornecedores']);
    }

    /**
     * View method
     *
     * @param string|null $id Categoria Fornecedore id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categoriaFornecedore = $this->CategoriaFornecedores->get($id, [
            'contain' => []
        ]);
        $this->set('categoriaFornecedore', $categoriaFornecedore);
        $this->set('_serialize', ['categoriaFornecedore']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categoriaFornecedore = $this->CategoriaFornecedores->newEntity();
        if ($this->request->is('post')) {
            $categoriaFornecedore = $this->CategoriaFornecedores->patchEntity($categoriaFornecedore, $this->request->data);
            if ($this->CategoriaFornecedores->save($categoriaFornecedore)) {
                $this->Flash->success(__('The categoria fornecedore has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The categoria fornecedore could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('categoriaFornecedore'));
        $this->set('_serialize', ['categoriaFornecedore']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Categoria Fornecedore id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categoriaFornecedore = $this->CategoriaFornecedores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoriaFornecedore = $this->CategoriaFornecedores->patchEntity($categoriaFornecedore, $this->request->data);
            if ($this->CategoriaFornecedores->save($categoriaFornecedore)) {
                $this->Flash->success(__('The categoria fornecedore has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The categoria fornecedore could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('categoriaFornecedore'));
        $this->set('_serialize', ['categoriaFornecedore']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Categoria Fornecedore id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoriaFornecedore = $this->CategoriaFornecedores->get($id);
        if ($this->CategoriaFornecedores->delete($categoriaFornecedore)) {
            $this->Flash->success(__('The categoria fornecedore has been deleted.'));
        } else {
            $this->Flash->error(__('The categoria fornecedore could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
