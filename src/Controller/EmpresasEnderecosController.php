<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EmpresasEnderecos Controller
 *
 * @property \App\Model\Table\EmpresasEnderecosTable $EmpresasEnderecos
 */
class EmpresasEnderecosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Empresas']
        ];
        $this->set('empresasEnderecos', $this->paginate($this->EmpresasEnderecos));
        $this->set('_serialize', ['empresasEnderecos']);
    }

    /**
     * View method
     *
     * @param string|null $id Empresas Endereco id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $empresasEndereco = $this->EmpresasEnderecos->get($id, [
            'contain' => ['Empresas']
        ]);
        $this->set('empresasEndereco', $empresasEndereco);
        $this->set('_serialize', ['empresasEndereco']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $empresasEndereco = $this->EmpresasEnderecos->newEntity();
        if ($this->request->is('post')) {
            $empresasEndereco = $this->EmpresasEnderecos->patchEntity($empresasEndereco, $this->request->data);
            if ($this->EmpresasEnderecos->save($empresasEndereco)) {
                $this->Flash->success(__('The empresas endereco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The empresas endereco could not be saved. Please, try again.'));
            }
        }
        $empresas = $this->EmpresasEnderecos->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('empresasEndereco', 'empresas'));
        $this->set('_serialize', ['empresasEndereco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Empresas Endereco id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $empresasEndereco = $this->EmpresasEnderecos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $empresasEndereco = $this->EmpresasEnderecos->patchEntity($empresasEndereco, $this->request->data);
            if ($this->EmpresasEnderecos->save($empresasEndereco)) {
                $this->Flash->success(__('The empresas endereco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The empresas endereco could not be saved. Please, try again.'));
            }
        }
        $empresas = $this->EmpresasEnderecos->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('empresasEndereco', 'empresas'));
        $this->set('_serialize', ['empresasEndereco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Empresas Endereco id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $empresasEndereco = $this->EmpresasEnderecos->get($id);
        if ($this->EmpresasEnderecos->delete($empresasEndereco)) {
            $this->Flash->success(__('The empresas endereco has been deleted.'));
        } else {
            $this->Flash->error(__('The empresas endereco could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
