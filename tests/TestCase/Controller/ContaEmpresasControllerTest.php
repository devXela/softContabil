<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ContaEmpresasController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ContaEmpresasController Test Case
 */
class ContaEmpresasControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.conta_empresas',
        'app.empresas',
        'app.bancos',
        'app.conta_fornecedores',
        'app.conta_empresas_gerentes',
        'app.conta_empresas_tipos',
        'app.contas_a_receber'
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
