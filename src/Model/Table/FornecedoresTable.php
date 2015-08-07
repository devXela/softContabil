<?php
namespace App\Model\Table;

use App\Model\Entity\Fornecedorr;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fornecedores Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Empresas
 * @property \Cake\ORM\Association\BelongsTo $ClasseFornecedores
 * @property \Cake\ORM\Association\BelongsTo $CategoriaFornecedores
 */
class FornecedoresTable extends Table
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

        $this->table('fornecedores');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Empresas', [
            'foreignKey' => 'empresa_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ClasseFornecedores', [
            'foreignKey' => 'classe_fornecedor_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('CategoriaFornecedores', [
            'foreignKey' => 'categoria_fornecedor_id',
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
            ->add('indentificacao', 'valid', ['rule' => 'decimal'])
            ->requirePresence('indentificacao', 'create')
            ->notEmpty('indentificacao');

        $validator
            ->add('email', 'valid', ['rule' => 'email'])
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

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
        $rules->add($rules->existsIn(['classe_fornecedor_id'], 'ClasseFornecedores'));
        $rules->add($rules->existsIn(['categoria_fornecedor_id'], 'CategoriaFornecedores'));
        return $rules;
    }
}
