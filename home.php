<?php 
   session_start();
   include "db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
      <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
      	<?php if ($_SESSION['role'] == 'admin') {?>
      		<!-- For Admin -->

            <?php
            // include admin.php file
            include ('pages/admin.php');
            ?>
			 <a href="backend/logout.php" class="btn btn-dark">Logout</a>

      	<?php }elseif ($_SESSION['role'] == 'donor')   { ?>
      		<!-- FOR donor -->
      		
            <?php
            // include donor.php file
            include ('pages/donor.php');
            ?>
			 <a href="backend/logout.php" class="btn btn-dark">Logout</a>
            
      	<?php }else { ?>
            <!-- For User -->

            <?php
            // include user.php file
            include ('pages/user.php');
            ?>
			

        <?php } ?>
      </div>
</body>
</html>
<?php }else{
	header("Location: index.php");
} ?>