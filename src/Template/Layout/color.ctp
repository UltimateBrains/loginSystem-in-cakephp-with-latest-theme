<?php

$cakeDescription = 'Gallery ';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
 
    <?= $this->Html->css(['bootstrap.min.css','font-awesome.min.css']) ?>
    <?= $this->Html->script(['jquery-3.3.1.slim.min.js','popper.min.js','bootstrap.min.js']) ?>
       
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
       <?php echo $this->Html->link('<i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span>',"/gallery",["class"=>"nav-link","escape"=>false]); ?>
        </li>     
      </ul>
     <ul class="navbar-nav">
     <li class="nav-item">
      <?php echo $this->Html->link('<i class="fa fa-sign-in" aria-hidden="true"></i> Log In',"/gallery/login",["class"=>"nav-link","escape"=>false]); ?>
      </li>
      
      <li class="nav-item">
        <?php echo $this->Html->link('<i class="fa fa-sign-out" aria-hidden="true"></i>Sign Up',"/gallery/signup",["class"=>"nav-link","escape"=>false]); ?>
      </li>
     </ul>
  </div>
</nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <br>
    <footer>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        </nav>
    </footer>
</body> 
</html>
