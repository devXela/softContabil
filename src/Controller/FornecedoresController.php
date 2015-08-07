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
     * @param string|null $id Fornecedorr id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fornecedorr = $this->Fornecedores->get($id, [
            'contain' => ['Empresas', 'ClasseFornecedores', 'CategoriaFornecedores']
        ]);
        $this->set('fornecedorr', $fornecedorr);
        $this->set('_serialize', ['fornecedorr']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fornecedorr = $this->Fornecedores->newEntity();
        if ($this->request->is('post')) {
            $fornecedorr = $this->Fornecedores->patchEntity($fornecedorr, $this->request->data);
            if ($this->Fornecedores->save($fornecedorr)) {
                $this->Flash->success(__('The fornecedorr has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The fornecedorr could not be saved. Please, try again.'));
            }
        }
        $empresas = $this->Fornecedores->Empresas->find('list', ['limit' => 200]);
        $classeFornecedores = $this->Fornecedores->ClasseFornecedores->find('list', ['limit' => 200]);
        $categoriaFornecedores = $this->Fornecedores->CategoriaFornecedores->find('list', ['limit' => 200]);
        $this->set(compact('fornecedorr', 'empresas', 'classeFornecedores', 'categoriaFornecedores'));
        $this->set('_serialize', ['fornecedorr']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Fornecedorr id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fornecedorr = $this->Fornecedores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fornecedorr = $this->Fornecedores->patchEntity($fornecedorr, $this->request->data);
            if ($this->Fornecedores->save($fornecedorr)) {
                $this->Flash->success(__('The fornecedorr has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The fornecedorr could not be saved. Please, try again.'));
            }
        }
        $empresas = $this->Fornecedores->Empresas->find('list', ['limit' => 200]);
        $classeFornecedores = $this->Fornecedores->ClasseFornecedores->find('list', ['limit' => 200]);
        $categoriaFornecedores = $this->Fornecedores->CategoriaFornecedores->find('list', ['limit' => 200]);
        $this->set(compact('fornecedorr', 'empresas', 'classeFornecedores', 'categoriaFornecedores'));
        $this->set('_serialize', ['fornecedorr']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Fornecedorr id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fornecedorr = $this->Fornecedores->get($id);
        if ($this->Fornecedores->delete($fornecedorr)) {
            $this->Flash->success(__('The fornecedorr has been deleted.'));
        } else {
            $this->Flash->error(__('The fornecedorr could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
