<?php
namespace App\Model\Table;

use App\Model\Entity\C;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CategoriaFornecedores Model
 *
 * @property \Cake\ORM\Association\HasMany $Fornecedores
 */
class CategoriaFornecedoresTable extends Table
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

        $this->table('categoria_fornecedores');
        $this->displayField('categoria');
        $this->primaryKey('id');
        $this->hasMany('Fornecedores', [
            'foreignKey' => 'categoria_fornecedor_id'
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
            ->requirePresence('categoria', 'create')
            ->notEmpty('categoria');

        return $validator;
    }
}
