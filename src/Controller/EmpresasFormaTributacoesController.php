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
        $empresasFormaTributacoes = $this->EmpresasFormaTributacoes->get($id, [
            'contain' => []
        ]);
        $this->set('empresasFormaTributacoes', $empresasFormaTributacoes);
        $this->set('_serialize', ['empresasFormaTributacoes']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $empresasFormaTributacoes = $this->EmpresasFormaTributacoes->newEntity();
        if ($this->request->is('post')) {
            $empresasFormaTributacoes = $this->EmpresasFormaTributacoes->patchEntity($empresasFormaTributacoes, $this->request->data);
            if ($this->EmpresasFormaTributacoes->save($empresasFormaTributacoes)) {
                $this->Flash->success(__('The empresas forma tributaco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The empresas forma tributaco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('empresasFormaTributacoes'));
        $this->set('_serialize', ['empresasFormaTributacoes']);
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
        $empresasFormaTributacoes = $this->EmpresasFormaTributacoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $empresasFormaTributacoes = $this->EmpresasFormaTributacoes->patchEntity($empresasFormaTributacoes, $this->request->data);
            if ($this->EmpresasFormaTributacoes->save($empresasFormaTributacoes)) {
                $this->Flash->success(__('The empresas forma tributaco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The empresas forma tributaco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('empresasFormaTributacoes'));
        $this->set('_serialize', ['empresasFormaTributacoes']);
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
        $empresasFormaTributacoes = $this->EmpresasFormaTributacoes->get($id);
        if ($this->EmpresasFormaTributacoes->delete($empresasFormaTributacoes)) {
            $this->Flash->success(__('The empresas forma tributaco has been deleted.'));
        } else {
            $this->Flash->error(__('The empresas forma tributaco could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
