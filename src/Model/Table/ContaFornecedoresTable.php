<?php
namespace App\Model\Table;

use App\Model\Entity\ContaFornecedore;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ContaFornecedores Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Fornecedors
 * @property \Cake\ORM\Association\BelongsTo $Bancos
 */
class ContaFornecedoresTable extends Table
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

        $this->table('conta_fornecedores');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Fornecedors', [
            'foreignKey' => 'fornecedor_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Bancos', [
            'foreignKey' => 'banco_id',
            'joinType' => 'INNER'
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
            ->requirePresence('conta', 'create')
            ->notEmpty('conta');

        $validator
            ->requirePresence('agencia', 'create')
            ->notEmpty('agencia');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['fornecedor_id'], 'Fornecedors'));
        $rules->add($rules->existsIn(['banco_id'], 'Bancos'));
        return $rules;
    }
}
