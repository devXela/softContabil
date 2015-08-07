<?php
namespace App\Model\Table;

use App\Model\Entity\ContasAPagarRetenco;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ContasAPagarRetencoes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Retencaos
 * @property \Cake\ORM\Association\BelongsTo $ContasAPagars
 */
class ContasAPagarRetencoesTable extends Table
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

        $this->table('contas_a_pagar_retencoes');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Retencaos', [
            'foreignKey' => 'retencao_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ContasAPagars', [
            'foreignKey' => 'contas_a_pagar_id',
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
            ->requirePresence('valor_retencao', 'create')
            ->notEmpty('valor_retencao');

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
        $rules->add($rules->existsIn(['retencao_id'], 'Retencaos'));
        $rules->add($rules->existsIn(['contas_a_pagar_id'], 'ContasAPagars'));
        return $rules;
    }
}
