<?php
namespace App\Model\Table;

use App\Model\Entity\Retencao;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Retencoes Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $ContasAPagar
 * @property \Cake\ORM\Association\BelongsToMany $ContasAReceber
 */
class RetencoesTable extends Table
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

        $this->table('retencoes');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsToMany('ContasAPagar', [
            'foreignKey' => 'retencao_id',
            'targetForeignKey' => 'contas_a_pagar_id',
            'joinTable' => 'contas_a_pagar_retencoes'
        ]);
        $this->belongsToMany('ContasAReceber', [
            'foreignKey' => 'retencao_id',
            'targetForeignKey' => 'contas_a_receber_id',
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
            ->requirePresence('descricao', 'create')
            ->notEmpty('descricao');

        return $validator;
    }
}
