<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContasAPagarRetencoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContasAPagarRetencoesTable Test Case
 */
class ContasAPagarRetencoesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.contas_a_pagar_retencoes',
        'app.retencoes',
        'app.contas_a_pagar',
        'app.forma_pagamentos',
        'app.fornecedores',
        'app.empresas',
        'app.classe_fornecedores',
        'app.categoria_fornecedores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ContasAPagarRetencoes') ? [] : ['className' => 'App\Model\Table\ContasAPagarRetencoesTable'];
        $this->ContasAPagarRetencoes = TableRegistry::get('ContasAPagarRetencoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ContasAPagarRetencoes);

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
