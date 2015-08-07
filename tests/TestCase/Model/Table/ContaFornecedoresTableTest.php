<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContaFornecedoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContaFornecedoresTable Test Case
 */
class ContaFornecedoresTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.conta_fornecedores',
        'app.fornecedors',
        'app.bancos',
        'app.conta_empresas',
        'app.empresas',
        'app.conta_empresas_gerentes',
        'app.conta_empresas_tipos',
        'app.contas_a_receber'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ContaFornecedores') ? [] : ['className' => 'App\Model\Table\ContaFornecedoresTable'];
        $this->ContaFornecedores = TableRegistry::get('ContaFornecedores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ContaFornecedores);

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
