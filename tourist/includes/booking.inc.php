<?php 
require 'functions.php';
session_start();
$actID=$_GET['actid'];
$custid=$_GET['custid'];
$_SESSION["actid"]=$actID;
if (isset($_POST['booking-submit']))
{
	require 'db.inc.php';	
    $dob=escape($_POST['dobb']);
     
    $ticket=escape($_POST['tickets']);
    
	
	
	{
		
	
	 $sql =$conn->prepare("INSERT INTO booked_activities (activityID,customerID,date_of_activity,number_of_tickets) values
     (?,?,?,?)");	
     $sql->bind_param("ssss",$actID,$custid,$dob,$ticket);
	 $sql->execute();
	 	
    header("Location: ../activity.php?booking=success"); 
    
	
	}
	mysqli_close($conn);
}
?>
	
