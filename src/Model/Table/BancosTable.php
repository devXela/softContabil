<?php
namespace App\Model\Table;

use App\Model\Entity\Banco;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bancos Model
 *
 * @property \Cake\ORM\Association\HasMany $ContaEmpresas
 * @property \Cake\ORM\Association\HasMany $ContaFornecedores
 */
class BancosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('bancos');
        $this->displayField('nome');
        $this->primaryKey('id');
        $this->hasMany('ContaEmpresas', [
            'foreignKey' => 'banco_id'
        ]);
        $this->hasMany('ContaFornecedores', [
            'foreignKey' => 'banco_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->add('codigo', 'valid', ['rule' => 'decimal'])
            ->requirePresence('codigo', 'create')
            ->notEmpty('codigo');

        $validator
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        return $validator;
    }
}
