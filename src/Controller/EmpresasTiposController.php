<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EmpresasTipos Controller
 *
 * @property \App\Model\Table\EmpresasTiposTable $EmpresasTipos
 */
class EmpresasTiposController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('empresasTipos', $this->paginate($this->EmpresasTipos));
        $this->set('_serialize', ['empresasTipos']);
    }

    /**
     * View method
     *
     * @param string|null $id Empresas Tipo id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $empresasTipo = $this->EmpresasTipos->get($id, [
            'contain' => []
        ]);
        $this->set('empresasTipo', $empresasTipo);
        $this->set('_serialize', ['empresasTipo']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $empresasTipo = $this->EmpresasTipos->newEntity();
        if ($this->request->is('post')) {
            $empresasTipo = $this->EmpresasTipos->patchEntity($empresasTipo, $this->request->data);
            if ($this->EmpresasTipos->save($empresasTipo)) {
                $this->Flash->success(__('The empresas tipo has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The empresas tipo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('empresasTipo'));
        $this->set('_serialize', ['empresasTipo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Empresas Tipo id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $empresasTipo = $this->EmpresasTipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $empresasTipo = $this->EmpresasTipos->patchEntity($empresasTipo, $this->request->data);
            if ($this->EmpresasTipos->save($empresasTipo)) {
                $this->Flash->success(__('The empresas tipo has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The empresas tipo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('empresasTipo'));
        $this->set('_serialize', ['empresasTipo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Empresas Tipo id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $empresasTipo = $this->EmpresasTipos->get($id);
        if ($this->EmpresasTipos->delete($empresasTipo)) {
            $this->Flash->success(__('The empresas tipo has been deleted.'));
        } else {
            $this->Flash->error(__('The empresas tipo could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
