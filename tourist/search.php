<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="assets/stylesheets/activity.css"></link>
<?php
require 'includes/functions.php';
require 'includes/db.inc.php';
?>
</head>
<body>
<div class="back">
<?php include 'header.php';?>

<div class="row">
  <div class="column left" >
   
  </div>
  <div class="column middle">
  

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
    $search='';
    if (isset($_POST['search-submit']))
    {
        $search=mysqli_real_escape_string($conn,$_POST['search']);
    }
    $sql2="SELECT * from activities WHERE location LIKE '%$search%' OR activity_name LIKE '%$search%';";
    $result2=mysqli_query($conn,$sql2);
    while($row=$result2->fetch_assoc()):
    ?>
        <tr>
        <td><?php echo escape($row['activity_name']) ?></td>
        <td><?php echo escape($row['description']) ?></td>
        <td> <?php echo escape($row['price']) ?></td>
        <td> <?php echo escape($row['location']) ?></td>
        <td>
      
        <input type="button" onclick="window.location.href='customer.php?bookid=<?php echo escape($row['activityID']);?>&custid=<?php echo escape($custID) ?> ';" value="Book Now" />
        </td>
        
         
        </tr>
    <?php endwhile; ?>
    
</table> 
    
  </div>
  <div class="column right">
    
  </div>
</div>
<div>
</br>
</br>
</br>
</br>
<center>
<input type="button" onclick="window.location.href='activity.php';" value="See All Activities" />
</center>
</div>
    </div>

</body>
</html>
