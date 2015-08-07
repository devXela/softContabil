<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Empresas Controller
 *
 * @property \App\Model\Table\EmpresasTable $Empresas
 */
class EmpresasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['AtividadeEmpresas', 'EmpresasTipos', 'EmpresasFormaTributacoes']
        ];
        $this->set('empresas', $this->paginate($this->Empresas));
        $this->set('_serialize', ['empresas']);
    }

    /**
     * View method
     *
     * @param string|null $id Empresa id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $empresa = $this->Empresas->get($id, [
            'contain' => ['AtividadeEmpresas', 'EmpresasTipos', 'EmpresasFormaTributacoes', 'FormaTrabalhos', 'Clientes', 'Diretorias', 'Fornecedores']
        ]);
        $this->set('empresa', $empresa);
        $this->set('_serialize', ['empresa']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $empresa = $this->Empresas->newEntity();
        if ($this->request->is('post')) {
            $empresa = $this->Empresas->patchEntity($empresa, $this->request->data);
            if ($this->Empresas->save($empresa)) {
                $this->Flash->success(__('The empresa has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The empresa could not be saved. Please, try again.'));
            }
        }
        $atividadeEmpresas = $this->Empresas->AtividadeEmpresas->find('list', ['limit' => 200]);

        $EmpresasTipos = $this->Empresas->EmpresasTipos->find('list', ['limit' => 200]);
        // debug($EmpresasTipos);
        $EmpresasFormaTributacoes = $this->Empresas->EmpresasFormaTributacoes->find('list', ['limit' => 200]);
        $formaTrabalhos = $this->Empresas->FormaTrabalhos->find('list', ['limit' => 200]);
        $this->set(compact('empresa', 'atividadeEmpresas', 'EmpresasTipos', 'EmpresasFormaTributacoes', 'formaTrabalhos'));
        $this->set('_serialize', ['empresa']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Empresa id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $empresa = $this->Empresas->get($id, [
            'contain' => ['FormaTrabalhos']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $empresa = $this->Empresas->patchEntity($empresa, $this->request->data);
            if ($this->Empresas->save($empresa)) {
                $this->Flash->success(__('The empresa has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The empresa could not be saved. Please, try again.'));
            }
        }
        $atividadeEmpresas = $this->Empresas->AtividadeEmpresas->find('list', ['limit' => 200]);
        $EmpresasTipos = $this->Empresas->EmpresasTipos->find('list', ['limit' => 200]);
        $EmpresasFormaTributacoes = $this->Empresas->EmpresasFormaTributacoes->find('list', ['limit' => 200]);
        $formaTrabalhos = $this->Empresas->FormaTrabalhos->find('list', ['limit' => 200]);
        $this->set(compact('empresa', 'atividadeEmpresas', 'EmpresasTipos', 'EmpresasFormaTributacoes', 'formaTrabalhos'));
        $this->set('_serialize', ['empresa']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Empresa id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $empresa = $this->Empresas->get($id);
        if ($this->Empresas->delete($empresa)) {
            $this->Flash->success(__('The empresa has been deleted.'));
        } else {
            $this->Flash->error(__('The empresa could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
