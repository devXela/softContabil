<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ContaEmpresas Controller
 *
 * @property \App\Model\Table\ContaEmpresasTable $ContaEmpresas
 */
class ContaEmpresasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Empresas', 'Bancos', 'ContaEmpresasGerentes', 'ContaEmpresasTipos']
        ];
        $this->set('contaEmpresas', $this->paginate($this->ContaEmpresas));
        $this->set('_serialize', ['contaEmpresas']);
    }

    /**
     * View method
     *
     * @param string|null $id Conta Empresa id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contaEmpresa = $this->ContaEmpresas->get($id, [
            'contain' => ['Empresas', 'Bancos', 'ContaEmpresasGerentes', 'ContaEmpresasTipos', 'ContasAReceber']
        ]);
        $this->set('contaEmpresa', $contaEmpresa);
        $this->set('_serialize', ['contaEmpresa']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contaEmpresa = $this->ContaEmpresas->newEntity();
        if ($this->request->is('post')) {
            $contaEmpresa = $this->ContaEmpresas->patchEntity($contaEmpresa, $this->request->data);
            if ($this->ContaEmpresas->save($contaEmpresa)) {
                $this->Flash->success(__('The conta empresa has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The conta empresa could not be saved. Please, try again.'));
            }
        }
        $empresas = $this->ContaEmpresas->Empresas->find('list', ['limit' => 200]);
        $bancos = $this->ContaEmpresas->Bancos->find('list', ['limit' => 200]);
        $contaEmpresasGerentes = $this->ContaEmpresas->ContaEmpresasGerentes->find('list', ['limit' => 200]);
        $contaEmpresasTipos = $this->ContaEmpresas->ContaEmpresasTipos->find('list', ['limit' => 200]);
        $this->set(compact('contaEmpresa', 'empresas', 'bancos', 'contaEmpresasGerentes', 'contaEmpresasTipos'));
        $this->set('_serialize', ['contaEmpresa']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Conta Empresa id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contaEmpresa = $this->ContaEmpresas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contaEmpresa = $this->ContaEmpresas->patchEntity($contaEmpresa, $this->request->data);
            if ($this->ContaEmpresas->save($contaEmpresa)) {
                $this->Flash->success(__('The conta empresa has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The conta empresa could not be saved. Please, try again.'));
            }
        }
        $empresas = $this->ContaEmpresas->Empresas->find('list', ['limit' => 200]);
        $bancos = $this->ContaEmpresas->Bancos->find('list', ['limit' => 200]);
        $contaEmpresasGerentes = $this->ContaEmpresas->ContaEmpresasGerentes->find('list', ['limit' => 200]);
        $contaEmpresasTipos = $this->ContaEmpresas->ContaEmpresasTipos->find('list', ['limit' => 200]);
        $this->set(compact('contaEmpresa', 'empresas', 'bancos', 'contaEmpresasGerentes', 'contaEmpresasTipos'));
        $this->set('_serialize', ['contaEmpresa']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Conta Empresa id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contaEmpresa = $this->ContaEmpresas->get($id);
        if ($this->ContaEmpresas->delete($contaEmpresa)) {
            $this->Flash->success(__('The conta empresa has been deleted.'));
        } else {
            $this->Flash->error(__('The conta empresa could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
