<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AtividadeEmpresas Controller
 *
 * @property \App\Model\Table\AtividadeEmpresasTable $AtividadeEmpresas
 */
class AtividadeEmpresasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('atividadeEmpresas', $this->paginate($this->AtividadeEmpresas));
        $this->set('_serialize', ['atividadeEmpresas']);
    }

    /**
     * View method
     *
     * @param string|null $id Atividade Empresa id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $atividadeEmpresa = $this->AtividadeEmpresas->get($id, [
            'contain' => ['Empresas']
        ]);
        $this->set('atividadeEmpresa', $atividadeEmpresa);
        $this->set('_serialize', ['atividadeEmpresa']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $atividadeEmpresa = $this->AtividadeEmpresas->newEntity();
        if ($this->request->is('post')) {
            $atividadeEmpresa = $this->AtividadeEmpresas->patchEntity($atividadeEmpresa, $this->request->data);
            if ($this->AtividadeEmpresas->save($atividadeEmpresa)) {
                $this->Flash->success(__('The atividade empresa has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The atividade empresa could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('atividadeEmpresa'));
        $this->set('_serialize', ['atividadeEmpresa']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Atividade Empresa id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $atividadeEmpresa = $this->AtividadeEmpresas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $atividadeEmpresa = $this->AtividadeEmpresas->patchEntity($atividadeEmpresa, $this->request->data);
            if ($this->AtividadeEmpresas->save($atividadeEmpresa)) {
                $this->Flash->success(__('The atividade empresa has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The atividade empresa could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('atividadeEmpresa'));
        $this->set('_serialize', ['atividadeEmpresa']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Atividade Empresa id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $atividadeEmpresa = $this->AtividadeEmpresas->get($id);
        if ($this->AtividadeEmpresas->delete($atividadeEmpresa)) {
            $this->Flash->success(__('The atividade empresa has been deleted.'));
        } else {
            $this->Flash->error(__('The atividade empresa could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
