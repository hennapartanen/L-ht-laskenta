<?php session_start(); ?>
<?php include_once 'layout/top.inc.php'; ?>
<?php include_once 'layout/nav.inc.php'; ?>

    



<div class="container">

<div id="msg" class="alert alert-dismissible alert-warning d-none">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4 class="alert-heading">Warning!</h4>
  <p class="mb-0"></a></p>
</div>

<form name="newCounter">
  <fieldset>
  
    <div class="form-group">
      <label for="topic"> Name</label>
      <input class="form-control" type="text" name="topic">
  </div>

    <div class="form-group">
      <label for="date"> Date </label>
      <input class="form-control" type="date" name="date">
    </div>

    <div class="form-group">
      <label for="time"> Time</label>
      <input class="form-control" type="time" name="time">
    </div>

    <button type="submit" class="btn btn-primary">Start counter</button>
       </fieldset>
    </form>
  </div>

 
  <?php include_once 'layout/bottom.inc.php'; ?>