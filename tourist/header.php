<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="assets/stylesheets/header.css"></link>


</head>
<body>
<?php
session_start();
?>

<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="activity.php">Activities</a></li>
  <?php
  if(isset($_SESSION["id"]))
  {
    ?>
  <li><a href="custbookings.php">Bookings</a></li>
  <?php
  }
  else
  {
    ?>
    <li><a href="login.php">Bookings</a></li>
  <?php
  }
  ?>

  <li><a href="credits.php">Credits</a></li>
  <?php
  if(isset($_SESSION["id"]))
  {
    ?>

  <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
    <?php
  }
  else{
    ?>
    <li style="float:right"><a class="active" href="login.php">Login</a></li>
    <?php
  }
  ?>

 
</ul>

</body>
</html>
