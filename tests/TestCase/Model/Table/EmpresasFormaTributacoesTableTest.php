<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmpresasFormaTributacoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmpresasFormaTributacoesTable Test Case
 */
class EmpresasFormaTributacoesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.empresas_forma_tributacoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EmpresasFormaTributacoes') ? [] : ['className' => 'App\Model\Table\EmpresasFormaTributacoesTable'];
        $this->EmpresasFormaTributacoes = TableRegistry::get('EmpresasFormaTributacoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EmpresasFormaTributacoes);

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
}
