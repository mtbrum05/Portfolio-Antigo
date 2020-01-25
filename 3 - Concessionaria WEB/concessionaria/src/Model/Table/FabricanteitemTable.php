<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fabricanteitem Model
 *
 * @method \App\Model\Entity\Fabricanteitem get($primaryKey, $options = [])
 * @method \App\Model\Entity\Fabricanteitem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Fabricanteitem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Fabricanteitem|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fabricanteitem saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fabricanteitem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Fabricanteitem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Fabricanteitem findOrCreate($search, callable $callback = null, $options = [])
 */
class FabricanteitemTable extends Table
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

        $this->setTable('fabricanteitem');
        $this->setDisplayField('codigo');
        $this->setPrimaryKey('codigo');
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
            ->allowEmptyString('codigo', null, 'create');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 50)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome');

        return $validator;
    }
}
