<?php 
require 'functions.php';
if (isset($_POST['register-submit']))
{
	require 'db.inc.php';	
	$usern=escape($_POST['phno']);	
	
	$userpwd=escape($_POST['pwd']);
	$userfirst=escape($_POST['fname']);
	$userlast=escape($_POST['lname']);
	$postcode=escape($_POST['post']);
	$useradd1=escape($_POST['uadd1']);
	$useradd2=$_POST['uadd2'];
	$dob=$_POST['dobb'];
		
	if (empty($usern) || empty($userfirst) || empty($userlast)||empty($userpwd)||empty($useradd1) )
	{
		header("Location: ../register.php?error=emptyfields");
		exit();
	}
	
	else if(!preg_match("/^[a-zA-Z0-9]*$/",$usern))
	{
			header("Location: ../register.php?error=invalidusername");
			exit();
			
    }
    else if(!preg_match("/^[a-zA-Z0-9]*$/",$userfirst))
	{
			header("Location: ../register.php?error=invalidforename");
			exit();
			
	}
	else if(!preg_match("/^[a-zA-Z0-9]*$/",$userlast))
	{
			header("Location: ../register.php?error=invalidsurname");
			exit();
			
    }
    else if(!preg_match("/^[a-zA-Z0-9]*$/",$userfirst) && !preg_match("/^[a-zA-Z0-9]*$/",$userlast))
	{
			header("Location: ../register.php?error=invalifirstname&lastname");
			exit();
			
    }
    
    else if( !preg_match("/^[a-zA-Z0-9]*$/",$useradd1))
	{
			header("Location: ../register.php?error=invalidaddress1");
	exit();

	}
    
	{
		
	$hashed=password_hash($userpwd,PASSWORD_DEFAULT);
	 $sql =$conn->prepare("INSERT INTO customers (username,password_hash,customer_forename,customer_surname,
	 customer_postcode,customer_address1,customer_address2,date_of_birth) values
     (?,?,?,?,?,?,?,?)");	
	 
	 $sql->bind_param("ssssssss", $usern, $hashed,$userfirst,$userlast,$postcode,$useradd1,$useradd2,$dob);
	 $sql->execute();
	 	
    header("Location: ../login.php?signup=success");    
	
	}
	mysqli_close($conn);
}
?>
	
