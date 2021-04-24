<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="assets/stylesheets/customer.css"></link>

</head>
<body>


<?php
require 'includes/functions.php';
require 'includes/db.inc.php';

$id=escape($_GET['bookid']);

$custid=escape($_GET['custid']);
	
    

?>
<div class="back">
<?php include 'header.php';?>
<div class="center colorsel">
    <h1>
        Booking activity
    <h1>
</div>

<div class="row">
  <div class="column left">
    
  </div>
  <div id="content" class="column middle">
    
  <div class="center colorsel">
    <h2>
        Enter Booking Details
     <h2>
</div>
    
    <center>
    <form action="includes/booking.inc.php?actid= <?php echo escape($id);?> &custid=<?php echo escape($custid);?>"  method="post"> 
      <label >Select Activity Date :</label>
      <input type="date" class="input-field button-box spacee colorsel" id="acdate" name="dobb" required="required" >    
      <label for="tickets">Choose No Of Tickets:</label>
      <select class=" input-field2 button-box colorsel" name="tickets" id="tickets" name="tickets">
        <option value="1" class="colorsel">1</option>
        <option value="2" class="colorsel">2</option>
        <option value="3" class="colorsel">3</option>
        <option value="4" class="colorsel">4</option>
        <option value="5" class="colorsel">5</option>
        <option value="6" class="colorsel">6</option>
        <option value="7" class="colorsel">7</option>
        <option value="8" class="colorsel">8</option>
        <option value="9" class="colorsel">9</option>
        <option value="10" class="colorsel">10</option>
        </select>
        <br>
        <br>
        <br>

        <button type="submit" class="submit-button colorsel" name="booking-submit">Add Booking</button>
      </form>
      <center>
  </div>
  <div class="column right">
    
  </div>
</div>
</div>
</body>
</html>



