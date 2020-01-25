<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cor Model
 *
 * @method \App\Model\Entity\Cor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cor|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cor saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cor findOrCreate($search, callable $callback = null, $options = [])
 */
class CorTable extends Table
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

        $this->setTable('cor');
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
            ->scalar('cor')
            ->maxLength('cor', 40)
            ->requirePresence('cor', 'create')
            ->notEmptyString('cor');

        return $validator;
    }
}
