<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Validation\Validator;
use Cake\ORM\Entity;

class PostsController extends AppController
{


	public function initialize(){   
    	parent::initialize();
    	// Ajoute l'action 'add' à la liste des actions autorisées.
    	$this->Auth->allow(['my','edit']);
	}

	public function my(){

	}


	public function edit(){
		$pets=$this->Posts->Pets->find('list', array(
			'conditions'=> array('Pets.user_id'=>$this->Auth->user('id'))
		));
		$pets->_joinData = $postsTable->ArticlesTags->newEntity();




		$post = $this->Posts->newEntity();
        if ($this->request->is('post')) {
            $post = $this->Posts->patchEntity($post, $this->request->getData());

            debug($this->request->getData());
            die();

            if ($this->Posts->save($post)) {
                $this->Flash->success(__('Votre inscription a réussi :D :D .'));

                return $this->redirect(['action' => 'my']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
		$this->set(compact('pets','post'));
	}

}