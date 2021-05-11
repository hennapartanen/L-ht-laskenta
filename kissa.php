<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countdown</title>
    
      <link rel="stylesheet" href="./css/bootstrap.min.css">

</head>

<body>
        
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">CounterApp</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Own counters</a>
        </li>
        </ul>
    </div>

        <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button"id="back" class="btn btn-secondary" onClick="location.href='login.php'">Log off</button>
    </div>

  </nav>



    <div class="jumbotron">
        <h1 class="display-3">You dont have any counters</h1>
        <?php id (isset($_SESSION['logged_in'])) ?>
        <p><?php echo $_SESSION['username']; ?></p>
        <?php endif; ?>
        
        <p class="lead">Add counters from button belove</p>
        
  
          <a class="btn btn-primary btn-lg"  id="button" role="button" onClick="location.href='counter.html'"New counter> New counter</a>
        </p>
      </div>
</body>

<script src="js/jquery.min.js"></script>
<script src="css/bootstrap.min.css"></script>
<script src="js/login.js"></script>
</html>