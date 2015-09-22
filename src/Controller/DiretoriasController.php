<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Diretorias Controller
 *
 * @property \App\Model\Table\DiretoriasTable $Diretorias
 */
class DiretoriasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => []
        ];
        $this->set('diretorias', $this->paginate($this->Diretorias));
        $this->set('_serialize', ['diretorias']);
    }

    /**
     * View method
     *
     * @param string|null $id Diretoria id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $diretoria = $this->Diretorias->get($id, [
            'contain' => ['Gerencias']
        ]);
        $this->set('diretoria', $diretoria);
        $this->set('_serialize', ['diretoria']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $diretoria = $this->Diretorias->newEntity();
        if ($this->request->is('post')) {
            $diretoria = $this->Diretorias->patchEntity($diretoria, $this->request->data);
            if ($this->Diretorias->save($diretoria)) {
                $this->Flash->success(__('The diretoria has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The diretoria could not be saved. Please, try again.'));
            }
        }
        // $empresas = $this->Diretorias->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('diretoria'));
        $this->set('_serialize', ['diretoria']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Diretoria id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $diretoria = $this->Diretorias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $diretoria = $this->Diretorias->patchEntity($diretoria, $this->request->data);
            if ($this->Diretorias->save($diretoria)) {
                $this->Flash->success(__('The diretoria has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The diretoria could not be saved. Please, try again.'));
            }
        }
        // $empresas = $this->Diretorias->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('diretoria'));
        $this->set('_serialize', ['diretoria']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Diretoria id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $diretoria = $this->Diretorias->get($id);
        if ($this->Diretorias->delete($diretoria)) {
            $this->Flash->success(__('The diretoria has been deleted.'));
        } else {
            $this->Flash->error(__('The diretoria could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
