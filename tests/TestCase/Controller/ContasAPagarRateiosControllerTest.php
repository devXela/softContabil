<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ContasAPagarRateiosController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ContasAPagarRateiosController Test Case
 */
class ContasAPagarRateiosControllerTest extends IntegrationTestCase
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
