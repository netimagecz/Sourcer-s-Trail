<?php
session_start();
include ("connection.php");

 error_reporting(0);
$email=$_SESSION['email']; 

 if($email )
{
    echo "     Welcome ".$email;
    
}  
  
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body><div class="titlebar">
        <a href="mainpage.php">Home</a>
        <a href="login.php">Login</a>
        <a href="Registeration.php">Register</a>
        <a href="resetpasswd.php">Reset Password</a>

        <a href="dashboard.php">Dashboard</a>
    </div><hr>
    <br>
	<center>
		<h1>You are on the next level...
</h1><a href="page1.1.php">
<input class="button" type="submit" name="level 2" value="Level "></a>
</h1><a href="page2.1.php">
<input class="button" type="submit" name="level 2" value="Level 2"></a>
</h1><a href="page3.1.php">
<input class="button" type="submit" name="level 2" value="Level 2"></a>
</h1><a href="page4.1.php">
<input class="button" type="submit" name="level 2" value="Level 2"></a>
</h1><a href="page5.1.php">
<input class="button" type="submit" name="level 2" value="Level 2"></a>
</h1><a href="page6.1.php">
<input class="button" type="submit" name="level 2" value="Level 2"></a>
</h1><a href="page7.1.php">
<input class="button" type="submit" name="level 2" value="Level 2"></a>


</center>
</body>
</html>