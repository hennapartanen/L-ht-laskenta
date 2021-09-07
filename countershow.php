<?php session_start(); ?>
<?php include_once 'layout/top.inc.php'; ?>
<?php include_once 'layout/nav.inc.php'; ?>

    
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">CounterApp</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
      </li>
   
    
  </ul>

  </div>
  <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" id="back" class="btn btn-secondary" onClick="location.href='login.php'">Log off</button>
      </div>
</nav>

<div id= "countershow">
  <img id="bgg" src=>
  
  <div id="countername">
     <h9 id="countname" ></h9>
</div>

<div id= number>
     <h8 id="demo"> </h8>
</div>


</div>

 
<?php include_once 'layout/bottom.inc.php'; ?>