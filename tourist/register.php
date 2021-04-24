<!DOCTYPE html>
<html>
<head>
<?php include 'header.php';?>
<link rel="stylesheet" href="assets/stylesheets/register.css"></link>
<style>



</style>
</head>
<body class="back">
<div >
    <div class="formbox">
            
    <div class="button-boxnew setting">
            <h2>
                Registeration
            
            </h2>
        
         </div>
    
        
    <form action="includes/register.inc.php" method="post" class="input-group">
    
    <input type="text" class="input-field button-box" id="phone" name="phno" placeholder="Enter Username" required="required"> 
    <input type="password" class="input-field button-box" id="pass" name="pwd" placeholder="Enter Password" required="required">
    <input type="text" class="input-field button-box" id="first" name="fname" placeholder="Enter Firstname" required="required">
    <input type="text" class="input-field button-box" id="last" name="lname" placeholder="Enter Lastname" required="required">
    <input type="text" class="input-field button-box" id="postcode" name="post" placeholder="Enter Postcode" required="required">
    <input type="text" class="input-field button-box" id="address1" name="uadd1" placeholder="Enter Address1" required="required">
    <input type="text" class="input-field button-box" id="address2" name="uadd2" placeholder="Enter Address2 (optional)" required="required">
    <input type="date" class="input-field button-box" id="birthday" name="dobb" required="required" >
    

    
    <button type="submit" class="submit-button" name="register-submit">Register</button>
    </form>
    </div>
     

</div>

</body>
</html>
