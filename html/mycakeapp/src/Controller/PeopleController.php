<?php
namespace App\Controller;

use App\Controller\AppController;

class PeopleController extends AppController{

    public $paginate = [
        'finder'=>'byAge',
        'limit'=>5,
        'contain'=>['Messages']
    ];

    public function initialize(){
        parent::initialize();
        $this->loadComponent('Paginator');
    }

    public function index(){
        $data = $this->paginate($this->People);
        $this->set('data',$data);
    }

    public function add(){
        $msg = 'Please type your personal data...';
        $entity = $this->People->newEntity();
        if($this->request->isPost()){
            $data = $this->request->data['People'];
            $entity = $this->People->newEntity($data);
            if($this->People->save($entity)){
                return $this->redirect(['action'=>'index']);
            }
            $msg = 'Error was occurred...';
        }
        $this->set('msg',$msg);
        $this->set('entity',$entity);
    }

    public function create(){
        if($this->request->isPost()){
            $data = $this->request->data['People'];
            $entity = $this->People->newEntity($data);
            $this->People->save($entity);
        }
        return $this->redirect(['action'=>'index']);
    }

    public function edit(){
        $data = $this->request->query['id'];
        $entity = $this->People->get($data);
        $this->set('entity',$entity);
    }

    public function update(){
        if($this->request->isPost()){
            $data = $this->request->data('People');
            $entity = $this->People->get($data['id']);
            var_dump($entity);
            exit();
            $this->People->patchEntity($entity,$data);
            $this->People->save($entity);
        }
        return $this->redirect(['action'=>'index']);
    }

    public function delete(){
        $data = $this->request->query['id'];
        $entity = $this->People->get($data);
        $this->set('entity',$entity);
    }

    public function destroy(){
        if($this->request->isPost()){
            $data = $this->request->data('People');
            $entity = $this->People->get($data['id']);
            $this->People->delete($entity);
        }
        return $this->redirect(['action'=>'index']);
    }
}