<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FormaPagamentos Controller
 *
 * @property \App\Model\Table\FormaPagamentosTable $FormaPagamentos
 */
class FormaPagamentosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('formaPagamentos', $this->paginate($this->FormaPagamentos));
        $this->set('_serialize', ['formaPagamentos']);
    }

    /**
     * View method
     *
     * @param string|null $id Forma Pagamento id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $formaPagamento = $this->FormaPagamentos->get($id, [
            'contain' => ['ContasAPagar']
        ]);
        $this->set('formaPagamento', $formaPagamento);
        $this->set('_serialize', ['formaPagamento']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $formaPagamento = $this->FormaPagamentos->newEntity();
        if ($this->request->is('post')) {
            $formaPagamento = $this->FormaPagamentos->patchEntity($formaPagamento, $this->request->data);
            if ($this->FormaPagamentos->save($formaPagamento)) {
                $this->Flash->success(__('The forma pagamento has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The forma pagamento could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('formaPagamento'));
        $this->set('_serialize', ['formaPagamento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Forma Pagamento id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $formaPagamento = $this->FormaPagamentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $formaPagamento = $this->FormaPagamentos->patchEntity($formaPagamento, $this->request->data);
            if ($this->FormaPagamentos->save($formaPagamento)) {
                $this->Flash->success(__('The forma pagamento has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The forma pagamento could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('formaPagamento'));
        $this->set('_serialize', ['formaPagamento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Forma Pagamento id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $formaPagamento = $this->FormaPagamentos->get($id);
        if ($this->FormaPagamentos->delete($formaPagamento)) {
            $this->Flash->success(__('The forma pagamento has been deleted.'));
        } else {
            $this->Flash->error(__('The forma pagamento could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
