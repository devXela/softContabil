<?php
namespace App\Model\Table;

use App\Model\Entity\ContasAReceber;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ContasAReceber Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Clientes
 * @property \Cake\ORM\Association\BelongsTo $FormaRecebimentos
 * @property \Cake\ORM\Association\BelongsTo $ContaEmpresas
 * @property \Cake\ORM\Association\BelongsToMany $Retencoes
 */
class ContasAReceberTable extends Table
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

        $this->table('contas_a_receber');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('Clientes', [
            'foreignKey' => 'cliente_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('FormaRecebimentos', [
            'foreignKey' => 'forma_recebimento_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ContaEmpresas', [
            'foreignKey' => 'conta_empresa_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('Retencoes', [
            'foreignKey' => 'contas_a_receber_id',
            'targetForeignKey' => 'retencao_id',
            'joinTable' => 'contas_a_receber_retencoes'
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
        $rules->add($rules->existsIn(['cliente_id'], 'Clientes'));
        $rules->add($rules->existsIn(['forma_recebimento_id'], 'FormaRecebimentos'));
        $rules->add($rules->existsIn(['conta_empresa_id'], 'ContaEmpresas'));
        return $rules;
    }
}
