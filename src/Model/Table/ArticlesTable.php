<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Utility\Text;
use Cake\Validation\Validator;

class ArticlesTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('timestamp');
    }

    public function beforeSave($event, $entity, $options)
    {
        if ($entity->isNew() && !$entity->slug)
        {
            $sluggedTitle = Text::slug($entity->title);
            $entity->slug = substr($sluggedTitle, 0, 191);
        }

    }

    public function validationDefault(Validator $vailidator)
    {
        $vailidator
            ->allowEmptyString('title', false)
            ->minLength('title', 5)
            ->maxLength('title', 255)

            ->allowEmptyString('body', false)
            ->minLength('body', 5);

        return $vailidator;
    }
}
