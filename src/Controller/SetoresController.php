<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Setores Controller
 *
 * @property \App\Model\Table\SetoresTable $Setores
 */
class SetoresController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Gerencias']
        ];
        $this->set('setores', $this->paginate($this->Setores));
        $this->set('_serialize', ['setores']);
    }

    /**
     * View method
     *
     * @param string|null $id Setor id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $setor = $this->Setores->get($id, [
            'contain' => ['Gerencias']
        ]);
        $this->set('setor', $setor);
        $this->set('_serialize', ['setor']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $setor = $this->Setores->newEntity();
        if ($this->request->is('post')) {
            $setor = $this->Setores->patchEntity($setor, $this->request->data);
            if ($this->Setores->save($setor)) {
                $this->Flash->success(__('The setor has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The setor could not be saved. Please, try again.'));
            }
        }
        $gerencias = $this->Setores->Gerencias->find('list', ['limit' => 200]);
        $this->set(compact('setor', 'gerencias'));
        $this->set('_serialize', ['setor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Setor id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $setor = $this->Setores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $setor = $this->Setores->patchEntity($setor, $this->request->data);
            if ($this->Setores->save($setor)) {
                $this->Flash->success(__('The setor has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The setor could not be saved. Please, try again.'));
            }
        }
        $gerencias = $this->Setores->Gerencias->find('list', ['limit' => 200]);
        $this->set(compact('setor', 'gerencias'));
        $this->set('_serialize', ['setor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Setor id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $setor = $this->Setores->get($id);
        if ($this->Setores->delete($setor)) {
            $this->Flash->success(__('The setor has been deleted.'));
        } else {
            $this->Flash->error(__('The setor could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
