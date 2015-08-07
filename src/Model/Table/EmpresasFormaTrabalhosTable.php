<?php
namespace App\Model\Table;

use App\Model\Entity\EmpresasFormaTrabalho;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmpresasFormaTrabalhos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $FormaTrabalhos
 * @property \Cake\ORM\Association\BelongsTo $Empresas
 */
class EmpresasFormaTrabalhosTable extends Table
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

        $this->table('empresas_forma_trabalhos');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('FormaTrabalhos', [
            'foreignKey' => 'forma_trabalhos_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Empresas', [
            'foreignKey' => 'empresas_id',
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
        $rules->add($rules->existsIn(['forma_trabalhos_id'], 'FormaTrabalhos'));
        $rules->add($rules->existsIn(['empresas_id'], 'Empresas'));
        return $rules;
    }
}
