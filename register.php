<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CounterApp - Register </title>
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
        <a class="nav-link" href="#">Features</a>
      </li>
      
  </ul>

  </div>
  <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" id="back" class="btn btn-secondary" onClick="location.href='login.php'">Log in</button>
      </div>
</nav>


<div id="msg" class="alert alert-dismissible alert-warning d-none">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4 class="alert-heading">Warning!</h4>
  <p class="mb-0"></a></p>
</div>

<div class="jumbotron">
<form name="register">
  <fieldset>
    <h1> Register to CounterApp </h1>
    </div>

    <div class="container">

    <div class="form-group">
    
    <label for="username"> Username</label>
    <input class="form-control" type="text" name="username">

    <label for="passwd"> Password </label>
    <input class="form-control" type="password" name="passwd">

    <label for="passwd2"> Confirm password</label>
    <input class="form-control" type="password" name="passwd2">

    <label for="email"> Email</label>
    <input class="form-control" type="text" name="email">


    <button type="submit" class="btn btn-primary">Register</button>

  </fieldset>
    </form>
    </div>

    

<script src="js/common.js"></script>
<script src="js/register.js"></script>
<script src="backend/pdo_connect.php"></script>
<script src="backend/registerNewUser.php"></script>
</body>
</html>