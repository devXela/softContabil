<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FornecedoresTelefones Controller
 *
 * @property \App\Model\Table\FornecedoresTelefonesTable $FornecedoresTelefones
 */
class FornecedoresTelefonesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Fornecedores']
        ];
        $this->set('fornecedoresTelefones', $this->paginate($this->FornecedoresTelefones));
        $this->set('_serialize', ['fornecedoresTelefones']);
    }

    /**
     * View method
     *
     * @param string|null $id Fornecedores Telefone id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fornecedoresTelefone = $this->FornecedoresTelefones->get($id, [
            'contain' => ['Fornecedores']
        ]);
        $this->set('fornecedoresTelefone', $fornecedoresTelefone);
        $this->set('_serialize', ['fornecedoresTelefone']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fornecedoresTelefone = $this->FornecedoresTelefones->newEntity();
        if ($this->request->is('post')) {
            $fornecedoresTelefone = $this->FornecedoresTelefones->patchEntity($fornecedoresTelefone, $this->request->data);
            if ($this->FornecedoresTelefones->save($fornecedoresTelefone)) {
                $this->Flash->success(__('The fornecedores telefone has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The fornecedores telefone could not be saved. Please, try again.'));
            }
        }
        $fornecedores = $this->FornecedoresTelefones->Fornecedores->find('list', ['limit' => 200]);
        $this->set(compact('fornecedoresTelefone', 'fornecedores'));
        $this->set('_serialize', ['fornecedoresTelefone']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Fornecedores Telefone id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fornecedoresTelefone = $this->FornecedoresTelefones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fornecedoresTelefone = $this->FornecedoresTelefones->patchEntity($fornecedoresTelefone, $this->request->data);
            if ($this->FornecedoresTelefones->save($fornecedoresTelefone)) {
                $this->Flash->success(__('The fornecedores telefone has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The fornecedores telefone could not be saved. Please, try again.'));
            }
        }
        $fornecedores = $this->FornecedoresTelefones->Fornecedores->find('list', ['limit' => 200]);
        $this->set(compact('fornecedoresTelefone', 'fornecedores'));
        $this->set('_serialize', ['fornecedoresTelefone']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Fornecedores Telefone id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fornecedoresTelefone = $this->FornecedoresTelefones->get($id);
        if ($this->FornecedoresTelefones->delete($fornecedoresTelefone)) {
            $this->Flash->success(__('The fornecedores telefone has been deleted.'));
        } else {
            $this->Flash->error(__('The fornecedores telefone could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
