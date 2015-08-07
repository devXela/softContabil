<?php
namespace App\Test\TestCase\Controller;

use App\Controller\EmpresasEnderecosController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\EmpresasEnderecosController Test Case
 */
class EmpresasEnderecosControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.empresas_enderecos',
        'app.empresas',
        'app.atividade_empresas',
        'app.tipo_empresas',
        'app.forma_tributacao_empresas',
        'app.clientes',
        'app.categoria_clientes',
        'app.contas_a_receber',
        'app.forma_recebimentos',
        'app.conta_empresas',
        'app.bancos',
        'app.conta_fornecedores',
        'app.fornecedors',
        'app.conta_empresas_gerentes',
        'app.conta_empresas_tipos',
        'app.retencoes',
        'app.contas_a_receber_retencoes',
        'app.contas_a_pagar_retencoes',
        'app.contas_a_pagar',
        'app.forma_pagamentos',
        'app.fornecedores',
        'app.classe_fornecedores',
        'app.categoria_fornecedores',
        'app.diretorias',
        'app.gerencias',
        'app.forma_trabalhos',
        'app.empresas_forma_trabalhos'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
