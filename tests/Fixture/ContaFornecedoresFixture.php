<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContaFornecedoresFixture
 *
 */
class ContaFornecedoresFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'fornecedor_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'conta' => ['type' => 'string', 'length' => 20, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'fixed' => null],
        'agencia' => ['type' => 'string', 'length' => 15, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'fixed' => null],
        'banco_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'fornecedor_id' => 1,
            'conta' => 'Lorem ipsum dolor ',
            'agencia' => 'Lorem ipsum d',
            'banco_id' => 1
        ],
    ];
}
