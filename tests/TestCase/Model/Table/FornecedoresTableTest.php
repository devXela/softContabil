<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FornecedoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FornecedoresTable Test Case
 */
class FornecedoresTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fornecedores',
        'app.empresas',
        'app.classe_fornecedores',
        'app.categoria_fornecedores',
        'app.contas_a_pagar',
        'app.forma_pagamentos',
        'app.retencoes',
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
        $config = TableRegistry::exists('Fornecedores') ? [] : ['className' => 'App\Model\Table\FornecedoresTable'];
        $this->Fornecedores = TableRegistry::get('Fornecedores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Fornecedores);

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
