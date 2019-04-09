
<div class="col-sm-12">
<div class="container">
  <br>
  <div class="card">
       <div class="card-body">
        <?php echo $this->Form->create(null,["url"=>["action"=>"login"],"type"=>"POST"]); echo "<br>";?>
            <fieldset>
            <legend>Log In Here</legend>
            <br>
                <div class="col-sm-10">
                    <?php  echo $this->Form->control('email',[
                                    "label"=>"User Email",
                                    "type"=>"email",
                                    "class"=>"form-control",
                                    "required"=>true,
                                   "placeholder"=>"Enter email"
                    ]); echo "<br>"; ?>
                </div>
                <div class="col-sm-10">
                    <?php  echo $this->Form->control('password',[
                                    "label"=>"User Password",
                                    "type"=>"password",
                                    "class"=>"form-control",
                                    "required"=>true,
                                   "placeholder"=>"Enter Password"
                    ]); ?>
                </div>
                <div class="form-group"> 
                    <div class="col-sm-10">
                    <?php echo "<br>";
                          echo $this->Form->submit('Submit', [
                              'class' => 'btn btn-success',
                              'type'=>'submit'
                              ]);  ?>
                    </div>
                </div>
            </fieldset>
                  <?= $this->Form->end(["data-type"=>"hidden"]); ?>
    </div>     
  </div>
</div>

</div>
<?php echo "<br>"?>