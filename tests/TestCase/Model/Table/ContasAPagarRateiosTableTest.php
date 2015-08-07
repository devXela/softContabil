<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContasAPagarRateiosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContasAPagarRateiosTable Test Case
 */
class ContasAPagarRateiosTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.contas_a_pagar_rateios',
        'app.contas_a_pagar',
        'app.forma_pagamentos',
        'app.fornecedores',
        'app.empresas',
        'app.classe_fornecedores',
        'app.categoria_fornecedores',
        'app.retencoes',
        'app.contas_a_pagar_retencoes',
        'app.setores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ContasAPagarRateios') ? [] : ['className' => 'App\Model\Table\ContasAPagarRateiosTable'];
        $this->ContasAPagarRateios = TableRegistry::get('ContasAPagarRateios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ContasAPagarRateios);

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
