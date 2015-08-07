<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ContaEmpresasTipos Controller
 *
 * @property \App\Model\Table\ContaEmpresasTiposTable $ContaEmpresasTipos
 */
class ContaEmpresasTiposController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('contaEmpresasTipos', $this->paginate($this->ContaEmpresasTipos));
        $this->set('_serialize', ['contaEmpresasTipos']);
    }

    /**
     * View method
     *
     * @param string|null $id Conta Empresas Tipo id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contaEmpresasTipo = $this->ContaEmpresasTipos->get($id, [
            'contain' => []
        ]);
        $this->set('contaEmpresasTipo', $contaEmpresasTipo);
        $this->set('_serialize', ['contaEmpresasTipo']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contaEmpresasTipo = $this->ContaEmpresasTipos->newEntity();
        if ($this->request->is('post')) {
            $contaEmpresasTipo = $this->ContaEmpresasTipos->patchEntity($contaEmpresasTipo, $this->request->data);
            if ($this->ContaEmpresasTipos->save($contaEmpresasTipo)) {
                $this->Flash->success(__('The conta empresas tipo has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The conta empresas tipo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('contaEmpresasTipo'));
        $this->set('_serialize', ['contaEmpresasTipo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Conta Empresas Tipo id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contaEmpresasTipo = $this->ContaEmpresasTipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contaEmpresasTipo = $this->ContaEmpresasTipos->patchEntity($contaEmpresasTipo, $this->request->data);
            if ($this->ContaEmpresasTipos->save($contaEmpresasTipo)) {
                $this->Flash->success(__('The conta empresas tipo has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The conta empresas tipo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('contaEmpresasTipo'));
        $this->set('_serialize', ['contaEmpresasTipo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Conta Empresas Tipo id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contaEmpresasTipo = $this->ContaEmpresasTipos->get($id);
        if ($this->ContaEmpresasTipos->delete($contaEmpresasTipo)) {
            $this->Flash->success(__('The conta empresas tipo has been deleted.'));
        } else {
            $this->Flash->error(__('The conta empresas tipo could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
