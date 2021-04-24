<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="assets/stylesheets/activity.css"></link>
<?php
require 'includes/functions.php';
require 'includes/db.inc.php';
$custID='';

?>
</head>
<body>
<div class="back">
<?php include 'header.php';?>

<div class="row">
  <div class="column left" >
   
  </div>
  <div class="column middle">
  <div class="">
  <form class="example" action="search.php" method="post">
  <input type="text" placeholder="Search location or activity name" name="search">
  
  <button type="submit" name="search-submit"><i class="fa fa-search"></i>Search</button>
</form>

</div>

<div class="center ">
    <h2>
        Tourist Activities
    </h2>


</div>
  <table class="table">
    <thead>
    <tr>
        <th width=15%>Name</th>
        <th width=40%>Description</th>
        <th width=15%>Price</th>
        <th width=15%>Locaton</th>
        <th width=15%>Action</th>
        
    </tr>
    </thead>
    <?php
    $sql2="SELECT * from activities;";
    $result2=mysqli_query($conn,$sql2);
    while($row=$result2->fetch_assoc()):
    ?>
        <tr>
        <td><?php echo escape($row['activity_name']) ?></td>
        <td><?php echo escape($row['description']) ?></td>
        <td> <?php echo escape($row['price']) ?></td>
        <td> <?php echo escape($row['location']) ?></td>
        <td>
        <?php
        if(isset($_SESSION["id"])) 
        {
          $custID=$_SESSION['id'];
          ?>
      <input type="button" onclick="window.location.href='customer.php?bookid=<?php echo escape($row['activityID']);?>&custid=<?php echo escape($custID) ?> ';" value="Book Now" />
        <?php
        }
        else{?>
          <input type="button" onclick="window.location.href='login.php';" value="Book Now" />
        <?php
        }
        ?>
        </td>
        
         
        </tr>
    <?php endwhile; ?>
    
</table> 
    
  </div>
  <div class="column right">
    
  </div>
</div>
    </div>-
</body>
</html>
