<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fornecedores Controller
 *
 * @property \App\Model\Table\FornecedoresTable $Fornecedores
 */
class FornecedoresController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Empresas', 'ClasseFornecedores', 'CategoriaFornecedores']
        ];
        $this->set('fornecedores', $this->paginate($this->Fornecedores));
        $this->set('_serialize', ['fornecedores']);
    }

    /**
     * View method
     *
     * @param string|null $id Fornecedor id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fornecedor = $this->Fornecedores->get($id, [
            'contain' => ['Empresas', 'ClasseFornecedores', 'CategoriaFornecedores', 'ContasAPagar']
        ]);
        $this->set('fornecedor', $fornecedor);
        $this->set('_serialize', ['fornecedor']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fornecedor = $this->Fornecedores->newEntity();
        if ($this->request->is('post')) {
            $fornecedor = $this->Fornecedores->patchEntity($fornecedor, $this->request->data);
            if ($this->Fornecedores->save($fornecedor)) {
                $this->Flash->success(__('The fornecedor has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The fornecedor could not be saved. Please, try again.'));
            }
        }
        $empresas = $this->Fornecedores->Empresas->find('list', ['limit' => 200]);
        $classeFornecedores = $this->Fornecedores->ClasseFornecedores->find('list', ['limit' => 200]);
        $categoriaFornecedores = $this->Fornecedores->CategoriaFornecedores->find('list', ['limit' => 200]);
        $this->set(compact('fornecedor', 'empresas', 'classeFornecedores', 'categoriaFornecedores'));
        $this->set('_serialize', ['fornecedor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Fornecedor id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fornecedor = $this->Fornecedores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fornecedor = $this->Fornecedores->patchEntity($fornecedor, $this->request->data);
            if ($this->Fornecedores->save($fornecedor)) {
                $this->Flash->success(__('The fornecedor has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The fornecedor could not be saved. Please, try again.'));
            }
        }
        $empresas = $this->Fornecedores->Empresas->find('list', ['limit' => 200]);
        $classeFornecedores = $this->Fornecedores->ClasseFornecedores->find('list', ['limit' => 200]);
        $categoriaFornecedores = $this->Fornecedores->CategoriaFornecedores->find('list', ['limit' => 200]);
        $this->set(compact('fornecedor', 'empresas', 'classeFornecedores', 'categoriaFornecedores'));
        $this->set('_serialize', ['fornecedor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Fornecedor id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fornecedor = $this->Fornecedores->get($id);
        if ($this->Fornecedores->delete($fornecedor)) {
            $this->Flash->success(__('The fornecedor has been deleted.'));
        } else {
            $this->Flash->error(__('The fornecedor could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
