<?php
namespace App\Model\Table;

use App\Model\Entity\Cliente;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clientes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Empresas
 * @property \Cake\ORM\Association\BelongsTo $CategoriaClientes
 * @property \Cake\ORM\Association\HasMany $ContasAReceber
 */
class ClientesTable extends Table
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

        $this->table('clientes');
        $this->displayField('nome');
        $this->primaryKey('id');
        $this->belongsTo('Empresas', [
            'foreignKey' => 'empresa_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('CategoriaClientes', [
            'foreignKey' => 'categoria_clientes_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('ContasAReceber', [
            'foreignKey' => 'cliente_id'
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
            ->add('identificacao', 'valid', ['rule' => 'decimal'])
            ->requirePresence('identificacao', 'create')
            ->notEmpty('identificacao');

        $validator
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->add('email', 'valid', ['rule' => 'email'])
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('responsavel', 'create')
            ->notEmpty('responsavel');

        $validator
            ->requirePresence('limite_credito', 'create')
            ->notEmpty('limite_credito');

        $validator
            ->add('percentual_multa', 'valid', ['rule' => 'decimal'])
            ->requirePresence('percentual_multa', 'create')
            ->notEmpty('percentual_multa');

        $validator
            ->add('percentual_juros', 'valid', ['rule' => 'decimal'])
            ->requirePresence('percentual_juros', 'create')
            ->notEmpty('percentual_juros');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['empresa_id'], 'Empresas'));
        $rules->add($rules->existsIn(['categoria_clientes_id'], 'CategoriaClientes'));
        return $rules;
    }
}
