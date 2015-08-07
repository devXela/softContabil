<?php
namespace App\Model\Table;

use App\Model\Entity\FormaRecebimento;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FormaRecebimentos Model
 *
 * @property \Cake\ORM\Association\HasMany $ContasAReceber
 */
class FormaRecebimentosTable extends Table
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

        $this->table('forma_recebimentos');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->hasMany('ContasAReceber', [
            'foreignKey' => 'forma_recebimento_id'
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
