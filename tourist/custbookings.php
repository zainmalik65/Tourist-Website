<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="assets/stylesheets/bookings.css"></link>
<?php
require 'includes/functions.php';
require 'includes/db.inc.php';

$custID='';
$actID='';



?>
</head>
<body>
<div class="back">
<?php include 'header.php';
if(isset($_SESSION["id"])) 
{
  $custID=$_SESSION['id'];
if(isset($_SESSION["actid"]))
{
  $actID=$_SESSION["actid"];
  
}
}


?>

<div class="row">
  <div class="column left" >
   
  </div>
  <div class="column middle">
  <div class="center">
    <h2>
        Customer Bookings
    </h2>


</div>
  <table class="table">
    <thead>
    <tr>
        <th width=15%>Name</th>
        <th width=40%>Description</th>
        <th width=15%>Location</th>
        <th width=15%>Date</th>
        <th width=15%>Booked Tickets</th>
        
        
    </tr>
    </thead>
    <tr>
    <?php
    $sql2="SELECT * from activities  WHERE activityID =$actID;";
    $result2=mysqli_query($conn,$sql2);
    while($row=$result2->fetch_assoc()):

    
      
    ?>
        
        <td><?php echo escape($row['activity_name']) ?></td>
        <td> <?php echo escape($row['description']) ?></td>
        <td> <?php echo escape($row['location']) ?></td>
        
    <?php endwhile; ?>
    <?php
    $sql2="SELECT * from booked_activities  WHERE 	customerID =$custID;";
    $result2=mysqli_query($conn,$sql2);
    while($row=$result2->fetch_assoc()):

    
      
    ?>
        <td><?php echo escape($row['date_of_activity']) ?></td>
        <td> <?php echo escape($row['number_of_tickets']) ?></td>
        
    <?php endwhile; ?>
    </tr>
</table> 
    
  </div>
  <div class="column right">
    
  </div>
</div>
    </div>
</body>
</html>
