<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmpresasEnderecosFixture
 *
 */
class EmpresasEnderecosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'empresa_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'rua' => ['type' => 'string', 'length' => 100, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'fixed' => null],
        'numero' => ['type' => 'string', 'length' => 20, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'fixed' => null],
        'complemento' => ['type' => 'string', 'length' => 100, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'fixed' => null],
        'bairro' => ['type' => 'string', 'length' => 100, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'fixed' => null],
        'cidade' => ['type' => 'string', 'length' => 100, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'fixed' => null],
        'cep' => ['type' => 'decimal', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
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
            'empresa_id' => 1,
            'rua' => 'Lorem ipsum dolor sit amet',
            'numero' => 'Lorem ipsum dolor ',
            'complemento' => 'Lorem ipsum dolor sit amet',
            'bairro' => 'Lorem ipsum dolor sit amet',
            'cidade' => 'Lorem ipsum dolor sit amet',
            'cep' => ''
        ],
    ];
}
