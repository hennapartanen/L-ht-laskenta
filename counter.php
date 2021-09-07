<?php session_start(); ?>
<?php 
if (isset($_SESSION['logged_in'])){
  header("Location: login.php");
  die();
}
?>

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
      <label for="name"> Name</label>
      <input class="form-control" type="text" name="name">
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


<div id= "kuvia" >

  <img src="pics/newyear.jpg" id="new" style="display:none;">
  <img src="pics/christmas.jpg" id="chris" style="display:none;">
  <img src="pics/vacation.jpg" id="vac" style="display:none;">
  <img src="pics/emt.jpg" id="emt" style="display:none;">
  
</div>


  <button id="modalBtn" class="btn btn-primary "> Choose a background</button>

<div id="simpleModal" class="modal">
  <div class="modal-content">
  <span id="closeBtn">&times;</span>
  <img src="pics/newyear.jpg" id= "newh" value="new" onclick="showpicn()" >
  <img src="pics/christmas.jpg" id="chrish" value="cri" onclick="showpicc()" >
  <img src="pics/vacation.jpg" id="vach" value="vac" onclick="showpicv()">
  <img src="pics/emt.jpg" id="emth" value="emt" onclick="showpice()">


  </div>

 
  <?php include_once 'layout/bottom.inc.php'; ?>