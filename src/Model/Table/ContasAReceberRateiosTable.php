<?php
namespace App\Model\Table;

use App\Model\Entity\ContasAReceberRateio;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ContasAReceberRateios Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ContasAReceber
 * @property \Cake\ORM\Association\BelongsTo $Setores
 */
class ContasAReceberRateiosTable extends Table
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

        $this->table('contas_a_receber_rateios');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('ContasAReceber', [
            'foreignKey' => 'contas_a_receber_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Setores', [
            'foreignKey' => 'setores_id',
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
        $rules->add($rules->existsIn(['contas_a_receber_id'], 'ContasAReceber'));
        $rules->add($rules->existsIn(['setores_id'], 'Setores'));
        return $rules;
    }
}
