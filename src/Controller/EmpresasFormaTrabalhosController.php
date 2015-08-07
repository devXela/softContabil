<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EmpresasFormaTrabalhos Controller
 *
 * @property \App\Model\Table\EmpresasFormaTrabalhosTable $EmpresasFormaTrabalhos
 */
class EmpresasFormaTrabalhosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['FormaTrabalhos', 'Empresas']
        ];
        $this->set('empresasFormaTrabalhos', $this->paginate($this->EmpresasFormaTrabalhos));
        $this->set('_serialize', ['empresasFormaTrabalhos']);
    }

    /**
     * View method
     *
     * @param string|null $id Empresas Forma Trabalho id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $empresasFormaTrabalho = $this->EmpresasFormaTrabalhos->get($id, [
            'contain' => ['FormaTrabalhos', 'Empresas']
        ]);
        $this->set('empresasFormaTrabalho', $empresasFormaTrabalho);
        $this->set('_serialize', ['empresasFormaTrabalho']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $empresasFormaTrabalho = $this->EmpresasFormaTrabalhos->newEntity();
        if ($this->request->is('post')) {
            $empresasFormaTrabalho = $this->EmpresasFormaTrabalhos->patchEntity($empresasFormaTrabalho, $this->request->data);
            if ($this->EmpresasFormaTrabalhos->save($empresasFormaTrabalho)) {
                $this->Flash->success(__('The empresas forma trabalho has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The empresas forma trabalho could not be saved. Please, try again.'));
            }
        }
        $formaTrabalhos = $this->EmpresasFormaTrabalhos->FormaTrabalhos->find('list', ['limit' => 200]);
        $empresas = $this->EmpresasFormaTrabalhos->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('empresasFormaTrabalho', 'formaTrabalhos', 'empresas'));
        $this->set('_serialize', ['empresasFormaTrabalho']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Empresas Forma Trabalho id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $empresasFormaTrabalho = $this->EmpresasFormaTrabalhos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $empresasFormaTrabalho = $this->EmpresasFormaTrabalhos->patchEntity($empresasFormaTrabalho, $this->request->data);
            if ($this->EmpresasFormaTrabalhos->save($empresasFormaTrabalho)) {
                $this->Flash->success(__('The empresas forma trabalho has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The empresas forma trabalho could not be saved. Please, try again.'));
            }
        }
        $formaTrabalhos = $this->EmpresasFormaTrabalhos->FormaTrabalhos->find('list', ['limit' => 200]);
        $empresas = $this->EmpresasFormaTrabalhos->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('empresasFormaTrabalho', 'formaTrabalhos', 'empresas'));
        $this->set('_serialize', ['empresasFormaTrabalho']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Empresas Forma Trabalho id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $empresasFormaTrabalho = $this->EmpresasFormaTrabalhos->get($id);
        if ($this->EmpresasFormaTrabalhos->delete($empresasFormaTrabalho)) {
            $this->Flash->success(__('The empresas forma trabalho has been deleted.'));
        } else {
            $this->Flash->error(__('The empresas forma trabalho could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
