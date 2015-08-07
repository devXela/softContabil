<?php
namespace App\Model\Table;

use App\Model\Entity\ContasAPagar;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ContasAPagar Model
 *
 * @property \Cake\ORM\Association\BelongsTo $FormaPagamentos
 * @property \Cake\ORM\Association\BelongsTo $Fornecedores
 * @property \Cake\ORM\Association\BelongsToMany $Retencoes
 */
class ContasAPagarTable extends Table
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

        $this->table('contas_a_pagar');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('FormaPagamentos', [
            'foreignKey' => 'forma_pagamento_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Fornecedores', [
            'foreignKey' => 'fornecedor_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('Retencoes', [
            'foreignKey' => 'contas_a_pagar_id',
            'targetForeignKey' => 'retencao_id',
            'joinTable' => 'contas_a_pagar_retencoes'
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
            ->add('numero_documento', 'valid', ['rule' => 'decimal'])
            ->requirePresence('numero_documento', 'create')
            ->notEmpty('numero_documento');

        $validator
            ->requirePresence('valor_documento', 'create')
            ->notEmpty('valor_documento');

        $validator
            ->requirePresence('valor_liquido', 'create')
            ->notEmpty('valor_liquido');

        $validator
            ->add('parcelas', 'valid', ['rule' => 'decimal'])
            ->requirePresence('parcelas', 'create')
            ->notEmpty('parcelas');

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
        $rules->add($rules->existsIn(['forma_pagamento_id'], 'FormaPagamentos'));
        $rules->add($rules->existsIn(['fornecedor_id'], 'Fornecedores'));
        return $rules;
    }
}
