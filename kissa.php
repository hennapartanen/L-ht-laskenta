<?php session_start(); ?>
<?php include_once 'layout/top.inc.php'; ?>
<?php include_once 'layout/nav.inc.php'; ?>

        
  
<div class="jumbotron">
 <h1 class="display-3">Welcome to Counterapp</h1>
   <?php if (isset($_SESSION['logged_in'])): ?> 
   <p>You are loggen in as <?php echo $_SESSION['username']; ?> </p>
        <?php endif; ?>
        <p class="lead">Add counters from button belove</p>
   <a class="btn btn-primary btn-lg"  id="button" role="button" onClick="location.href='counter.php'"> New counter</a>
        </p>
      </div>
</body>

 
<?php include_once 'layout/bottom.inc.php'; ?>