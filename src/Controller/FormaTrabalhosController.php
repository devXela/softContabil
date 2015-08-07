<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FormaTrabalhos Controller
 *
 * @property \App\Model\Table\FormaTrabalhosTable $FormaTrabalhos
 */
class FormaTrabalhosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('formaTrabalhos', $this->paginate($this->FormaTrabalhos));
        $this->set('_serialize', ['formaTrabalhos']);
    }

    /**
     * View method
     *
     * @param string|null $id Forma Trabalho id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $formaTrabalho = $this->FormaTrabalhos->get($id, [
            'contain' => ['Empresas']
        ]);
        $this->set('formaTrabalho', $formaTrabalho);
        $this->set('_serialize', ['formaTrabalho']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $formaTrabalho = $this->FormaTrabalhos->newEntity();
        if ($this->request->is('post')) {
            $formaTrabalho = $this->FormaTrabalhos->patchEntity($formaTrabalho, $this->request->data);
            if ($this->FormaTrabalhos->save($formaTrabalho)) {
                $this->Flash->success(__('The forma trabalho has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The forma trabalho could not be saved. Please, try again.'));
            }
        }
        $empresas = $this->FormaTrabalhos->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('formaTrabalho', 'empresas'));
        $this->set('_serialize', ['formaTrabalho']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Forma Trabalho id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $formaTrabalho = $this->FormaTrabalhos->get($id, [
            'contain' => ['Empresas']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $formaTrabalho = $this->FormaTrabalhos->patchEntity($formaTrabalho, $this->request->data);
            if ($this->FormaTrabalhos->save($formaTrabalho)) {
                $this->Flash->success(__('The forma trabalho has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The forma trabalho could not be saved. Please, try again.'));
            }
        }
        $empresas = $this->FormaTrabalhos->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('formaTrabalho', 'empresas'));
        $this->set('_serialize', ['formaTrabalho']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Forma Trabalho id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $formaTrabalho = $this->FormaTrabalhos->get($id);
        if ($this->FormaTrabalhos->delete($formaTrabalho)) {
            $this->Flash->success(__('The forma trabalho has been deleted.'));
        } else {
            $this->Flash->error(__('The forma trabalho could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
