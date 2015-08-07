<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EmpresasFormaTributacoes Controller
 *
 * @property \App\Model\Table\EmpresasFormaTributacoesTable $EmpresasFormaTributacoes
 */
class EmpresasFormaTributacoesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('empresasFormaTributacoes', $this->paginate($this->EmpresasFormaTributacoes));
        $this->set('_serialize', ['empresasFormaTributacoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Empresas Forma Tributaco id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $empresasFormaTributaco = $this->EmpresasFormaTributacoes->get($id, [
            'contain' => []
        ]);
        $this->set('empresasFormaTributaco', $empresasFormaTributaco);
        $this->set('_serialize', ['empresasFormaTributaco']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $empresasFormaTributaco = $this->EmpresasFormaTributacoes->newEntity();
        if ($this->request->is('post')) {
            $empresasFormaTributaco = $this->EmpresasFormaTributacoes->patchEntity($empresasFormaTributaco, $this->request->data);
            if ($this->EmpresasFormaTributacoes->save($empresasFormaTributaco)) {
                $this->Flash->success(__('The empresas forma tributaco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The empresas forma tributaco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('empresasFormaTributaco'));
        $this->set('_serialize', ['empresasFormaTributaco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Empresas Forma Tributaco id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $empresasFormaTributaco = $this->EmpresasFormaTributacoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $empresasFormaTributaco = $this->EmpresasFormaTributacoes->patchEntity($empresasFormaTributaco, $this->request->data);
            if ($this->EmpresasFormaTributacoes->save($empresasFormaTributaco)) {
                $this->Flash->success(__('The empresas forma tributaco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The empresas forma tributaco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('empresasFormaTributaco'));
        $this->set('_serialize', ['empresasFormaTributaco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Empresas Forma Tributaco id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $empresasFormaTributaco = $this->EmpresasFormaTributacoes->get($id);
        if ($this->EmpresasFormaTributacoes->delete($empresasFormaTributaco)) {
            $this->Flash->success(__('The empresas forma tributaco has been deleted.'));
        } else {
            $this->Flash->error(__('The empresas forma tributaco could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
