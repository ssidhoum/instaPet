<?php
namespace App\Model\Table;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
class PostsTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->belongsTo('Pets', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('Pets');
        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'photo' => [
               'fields' => [
                   'dir' => 'photo_dir',
               ],
                'path'=>'webroot{DS}img{DS}files{DS}{model}{DS}{field}{DS}',
           ],
       ]);  
    }
}