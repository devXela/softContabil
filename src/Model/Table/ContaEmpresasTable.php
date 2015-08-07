<?php
namespace App\Model\Table;

use App\Model\Entity\ContaEmpresa;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ContaEmpresas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Empresas
 * @property \Cake\ORM\Association\BelongsTo $Bancos
 * @property \Cake\ORM\Association\BelongsTo $ContaEmpresasGerentes
 * @property \Cake\ORM\Association\BelongsTo $ContaEmpresasTipos
 * @property \Cake\ORM\Association\HasMany $ContasAReceber
 */
class ContaEmpresasTable extends Table
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

        $this->table('conta_empresas');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Empresas', [
            'foreignKey' => 'empresa_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Bancos', [
            'foreignKey' => 'banco_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ContaEmpresasGerentes', [
            'foreignKey' => 'conta_empresas_gerentes_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ContaEmpresasTipos', [
            'foreignKey' => 'conta_empresas_tipos_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('ContasAReceber', [
            'foreignKey' => 'conta_empresa_id'
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
            ->requirePresence('nome_conta', 'create')
            ->notEmpty('nome_conta');

        $validator
            ->add('agencia', 'valid', ['rule' => 'decimal'])
            ->requirePresence('agencia', 'create')
            ->notEmpty('agencia');

        $validator
            ->add('numero_conta', 'valid', ['rule' => 'decimal'])
            ->requirePresence('numero_conta', 'create')
            ->notEmpty('numero_conta');

        $validator
            ->requirePresence('limite', 'create')
            ->notEmpty('limite');

        $validator
            ->add('desconto_cartao', 'valid', ['rule' => 'decimal'])
            ->requirePresence('desconto_cartao', 'create')
            ->notEmpty('desconto_cartao');

        $validator
            ->add('saldo_abertura', 'valid', ['rule' => 'decimal'])
            ->requirePresence('saldo_abertura', 'create')
            ->notEmpty('saldo_abertura');

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
        $rules->add($rules->existsIn(['empresa_id'], 'Empresas'));
        $rules->add($rules->existsIn(['banco_id'], 'Bancos'));
        $rules->add($rules->existsIn(['conta_empresas_gerentes_id'], 'ContaEmpresasGerentes'));
        $rules->add($rules->existsIn(['conta_empresas_tipos_id'], 'ContaEmpresasTipos'));
        return $rules;
    }
}
