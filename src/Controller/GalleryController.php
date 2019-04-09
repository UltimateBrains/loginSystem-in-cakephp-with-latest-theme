<?php

namespace App\Controller;

class GalleryController extends AppController
{
     public function initialize(){
         parent :: initialize();
         $this->loadModel("Galleries");
         $this->viewBuilder()->setlayout("color");
    }


      public function index(){
       
      }
      public function login(){
       
      }
      public function signup(){
         
         
         $sign_up = $this->Galleries->newEntity($this->request->getData());
        
           if($this->request->is('post')){
            $signup = $this->Users->patchEntity($sign_up, $this->request->getData());
                
                if ($this->Galleries->save($sign_up)) {
                     $this->Flash->success('User Added Succefully',['key'=>'message']);
                     return $this->redirect(['action'=>'signup']);
                }
                $this->Flash->error(_('Unable to add your user!'));
           }
           $this->set('post',$sign_up);
       
      }
   
    
  
}
