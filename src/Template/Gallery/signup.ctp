
<div class="card">
       <div class="card-body">
<div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
    <?php $this->Flash->render('message');
         $this->Form->setTemplates([
             'inputContainer' => '<div class="form-group{{required}}">
             {{content}} <span class="help">{{help}}</span></div>'

         ]);

         echo $this->Form->create();
         echo $this->Form->controls(
            [
                'name'=>['class'=>'form-control','required'=>true,'placeholder'=>'Enter Full Name','label'=>['text'=>'User Full name']],
                'username'=>['class'=>'form-control','required'=>true,'placeholder'=>'Enter Username','label'=>['text'=>'User Username']],
                'email'=>['class'=>'form-control','required'=>true,'placeholder'=>'Enter Email Id','label'=>['text'=>'User Email']],
                'password'=>['class'=>'form-control','required'=>true,'placeholder'=>'Enter Password','label'=>['text'=>'Password']],
                'phone'=>['class'=>'form-control','required'=>true,'placeholder'=>'Enter Phone','label'=>['text'=>'Phone']],
                'zipcode'=>['class'=>'form-control','required'=>true,'placeholder'=>'Enter zipcode']
            ],
            [
                'legend'=>'User Sign Up here'
            ]
         );
         echo $this->Form->submit('signup',['type'=>'submit','class'=>'btn btn-success']);
         echo $this->Form->end();
         
          
         ?>
        
    </div>
</div>
<br>
</div>
</div>