<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ContaEmpresasGerentes Controller
 *
 * @property \App\Model\Table\ContaEmpresasGerentesTable $ContaEmpresasGerentes
 */
class ContaEmpresasGerentesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('contaEmpresasGerentes', $this->paginate($this->ContaEmpresasGerentes));
        $this->set('_serialize', ['contaEmpresasGerentes']);
    }

    /**
     * View method
     *
     * @param string|null $id Conta Empresas Gerente id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contaEmpresasGerente = $this->ContaEmpresasGerentes->get($id, [
            'contain' => []
        ]);
        $this->set('contaEmpresasGerente', $contaEmpresasGerente);
        $this->set('_serialize', ['contaEmpresasGerente']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contaEmpresasGerente = $this->ContaEmpresasGerentes->newEntity();
        if ($this->request->is('post')) {
            $contaEmpresasGerente = $this->ContaEmpresasGerentes->patchEntity($contaEmpresasGerente, $this->request->data);
            if ($this->ContaEmpresasGerentes->save($contaEmpresasGerente)) {
                $this->Flash->success(__('The conta empresas gerente has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The conta empresas gerente could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('contaEmpresasGerente'));
        $this->set('_serialize', ['contaEmpresasGerente']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Conta Empresas Gerente id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contaEmpresasGerente = $this->ContaEmpresasGerentes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contaEmpresasGerente = $this->ContaEmpresasGerentes->patchEntity($contaEmpresasGerente, $this->request->data);
            if ($this->ContaEmpresasGerentes->save($contaEmpresasGerente)) {
                $this->Flash->success(__('The conta empresas gerente has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The conta empresas gerente could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('contaEmpresasGerente'));
        $this->set('_serialize', ['contaEmpresasGerente']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Conta Empresas Gerente id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contaEmpresasGerente = $this->ContaEmpresasGerentes->get($id);
        if ($this->ContaEmpresasGerentes->delete($contaEmpresasGerente)) {
            $this->Flash->success(__('The conta empresas gerente has been deleted.'));
        } else {
            $this->Flash->error(__('The conta empresas gerente could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
