<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Templates Model
 *
 * @property \App\Model\Table\ArticlesTable|\Cake\ORM\Association\BelongsToMany $Articles
 *
 * @method \App\Model\Entity\Template get($primaryKey, $options = [])
 * @method \App\Model\Entity\Template newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Template[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Template|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Template patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Template[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Template findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TemplatesTable extends Table
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

        $this->setTable('templates');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Articles', [
            'foreignKey' => 'template_id',
            'targetForeignKey' => 'article_id',
            'joinTable' => 'articles_templates'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('body')
            ->requirePresence('body', 'create')
            ->notEmpty('body');

        return $validator;
    }
}
