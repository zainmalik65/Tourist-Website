<?php
require 'functions.php';

if(isset($_POST['login-submit']))
{
    
	require 'db.inc.php';
    
    $uid=escape($_POST['cust']);
    $password=escape($_POST['pwd']);
    
	
	if(empty($uid)||empty($password))
	{
		header("Location: ../login.php?error=emptyfields");
	exit();
    }
    else if(!preg_match("/^[a-zA-Z0-9]*$/",$uid))
	{
			header("Location: ../login.php?error=invalidusername");
			exit();
			
    }
    else if(!preg_match("/^[a-zA-Z0-9]*$/",$password))
	{
			header("Location: ../login.php?error=invalidpass");
			exit();
			
	}
	else
	{
		session_start();
        $message="";
        //if(count($_POST)>0) {
               $stmt = $conn->prepare("SELECT * FROM customers WHERE username='$uid'") or die(mysqli_error());
        if($stmt->execute()){
            $result = $stmt->get_result();
            $num_rows = $result->num_rows;
        }
        if($num_rows > 0){

            $roww=mysqli_fetch_array($result);
            $hash=$roww['password_hash'];
            if(password_verify($password,$hash))
            {

                $cust=$roww['customerID'];
                $_SESSION["id"] = $roww['customerID'];
                echo $_SESSION["id"];
                print_r($_SESSION);
                header("Location: ../activity.php");
            }
            else
            {
                header("Location: ../login.php?error=incorrect password");
            }
 

            
        }else{
            $message = "Invalid Username or Password!";
            header("Location: ../login.php?error=incorrect username");
               
        }
        
    }
}
        
?>



