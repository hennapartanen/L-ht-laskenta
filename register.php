

<?php include_once 'layout/top.inc.php'; ?>
<?php include_once 'layout/nav.inc.php'; ?>

    



<div class="jumbotron">
<h1>Register to CounterApp </h1>
</div>
<div class="container">

<div id="msg" class="alert alert-dismissible alert-warning d-none">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4 class="alert-heading">Warning!</h4>
  <p class="mb-0"></a></p>
</div>

<form name="register">
  <fieldset>
  
    <div class="form-group">
      <label for="username"> Username</label>
      <input class="form-control" type="text" name="username">
  </div>

    <div class="form-group">
      <label for="passwd"> Password </label>
      <input class="form-control" type="password" name="passwd">
    </div>

    <div class="form-group">
      <label for="passwd2"> Confirm password</label>
      <input class="form-control" type="password" name="passwd2">
    </div>

    <div class="form-group">
      <label for="email"> Email</label>
      <input class="form-control" type="text" name="email">
   </div>

    <button type="submit" class="btn btn-primary">Register</button>
       </fieldset>
    </form>
  </div>

    
  <?php include_once 'layout/bottom.inc.php'; ?>