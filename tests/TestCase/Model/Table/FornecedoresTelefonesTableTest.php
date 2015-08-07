<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FornecedoresTelefonesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FornecedoresTelefonesTable Test Case
 */
class FornecedoresTelefonesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fornecedores_telefones',
        'app.fornecedores',
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
        'app.diretorias',
        'app.gerencias',
        'app.forma_trabalhos',
        'app.empresas_forma_trabalhos',
        'app.classe_fornecedores',
        'app.categoria_fornecedores',
        'app.contas_a_pagar',
        'app.forma_pagamentos',
        'app.contas_a_pagar_retencoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('FornecedoresTelefones') ? [] : ['className' => 'App\Model\Table\FornecedoresTelefonesTable'];
        $this->FornecedoresTelefones = TableRegistry::get('FornecedoresTelefones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FornecedoresTelefones);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
