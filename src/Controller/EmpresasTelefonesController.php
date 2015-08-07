<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EmpresasTelefones Controller
 *
 * @property \App\Model\Table\EmpresasTelefonesTable $EmpresasTelefones
 */
class EmpresasTelefonesController extends AppController
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
        $this->set('empresasTelefones', $this->paginate($this->EmpresasTelefones));
        $this->set('_serialize', ['empresasTelefones']);
    }

    /**
     * View method
     *
     * @param string|null $id Empresas Telefone id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $empresasTelefone = $this->EmpresasTelefones->get($id, [
            'contain' => ['Empresas']
        ]);
        $this->set('empresasTelefone', $empresasTelefone);
        $this->set('_serialize', ['empresasTelefone']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $empresasTelefone = $this->EmpresasTelefones->newEntity();
        if ($this->request->is('post')) {
            $empresasTelefone = $this->EmpresasTelefones->patchEntity($empresasTelefone, $this->request->data);
            if ($this->EmpresasTelefones->save($empresasTelefone)) {
                $this->Flash->success(__('The empresas telefone has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The empresas telefone could not be saved. Please, try again.'));
            }
        }
        $empresas = $this->EmpresasTelefones->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('empresasTelefone', 'empresas'));
        $this->set('_serialize', ['empresasTelefone']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Empresas Telefone id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $empresasTelefone = $this->EmpresasTelefones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $empresasTelefone = $this->EmpresasTelefones->patchEntity($empresasTelefone, $this->request->data);
            if ($this->EmpresasTelefones->save($empresasTelefone)) {
                $this->Flash->success(__('The empresas telefone has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The empresas telefone could not be saved. Please, try again.'));
            }
        }
        $empresas = $this->EmpresasTelefones->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('empresasTelefone', 'empresas'));
        $this->set('_serialize', ['empresasTelefone']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Empresas Telefone id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $empresasTelefone = $this->EmpresasTelefones->get($id);
        if ($this->EmpresasTelefones->delete($empresasTelefone)) {
            $this->Flash->success(__('The empresas telefone has been deleted.'));
        } else {
            $this->Flash->error(__('The empresas telefone could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
