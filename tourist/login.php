<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="assets/stylesheets/login.css"></link>
<style>



</style>
</head>

<body >
<div class="back">
<?php include 'header.php';?>
    <div class="formbox">
            
        <div class="button-boxnew setting">
                <h2>
                    Tourist login
                
                </h2>
            
        </div>
        
    <form  class="input-group" id="login" action="includes/login.inc.php" method="post">
    
        <input type="text" class="input-field button-box" placeholder="User Name" name="cust" required>
        <input type="password" class="input-field button-box" placeholder="Enter Password" name="pwd" required>
    
        <button type="submit" class="submit-button" name="login-submit">Login</button>
    
    </form>
    
    
    </div>
     

</div>


</body>
</html>
