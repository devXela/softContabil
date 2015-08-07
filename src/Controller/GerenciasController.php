<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Gerencias Controller
 *
 * @property \App\Model\Table\GerenciasTable $Gerencias
 */
class GerenciasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Diretorias']
        ];
        $this->set('gerencias', $this->paginate($this->Gerencias));
        $this->set('_serialize', ['gerencias']);
    }

    /**
     * View method
     *
     * @param string|null $id Gerencia id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gerencia = $this->Gerencias->get($id, [
            'contain' => ['Diretorias', 'Setores']
        ]);
        $this->set('gerencia', $gerencia);
        $this->set('_serialize', ['gerencia']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gerencia = $this->Gerencias->newEntity();
        if ($this->request->is('post')) {
            $gerencia = $this->Gerencias->patchEntity($gerencia, $this->request->data);
            if ($this->Gerencias->save($gerencia)) {
                $this->Flash->success(__('The gerencia has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The gerencia could not be saved. Please, try again.'));
            }
        }
        $diretorias = $this->Gerencias->Diretorias->find('list', ['limit' => 200]);
        $this->set(compact('gerencia', 'diretorias'));
        $this->set('_serialize', ['gerencia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Gerencia id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gerencia = $this->Gerencias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gerencia = $this->Gerencias->patchEntity($gerencia, $this->request->data);
            if ($this->Gerencias->save($gerencia)) {
                $this->Flash->success(__('The gerencia has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The gerencia could not be saved. Please, try again.'));
            }
        }
        $diretorias = $this->Gerencias->Diretorias->find('list', ['limit' => 200]);
        $this->set(compact('gerencia', 'diretorias'));
        $this->set('_serialize', ['gerencia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Gerencia id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gerencia = $this->Gerencias->get($id);
        if ($this->Gerencias->delete($gerencia)) {
            $this->Flash->success(__('The gerencia has been deleted.'));
        } else {
            $this->Flash->error(__('The gerencia could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
