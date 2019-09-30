<?php

 session_start();
include ("connection.php");		

 error_reporting(0);
$email=$_SESSION['email'];  
if($email)
{
	echo "     Welcome ".$email;
}   	   
?>



<!DOCTYPE html>
<html>
<head>
	<title>Main Page</title>
	<link rel="stylesheet" type="text/css" href="cssworking.css">
</head>
<body>
	<div class="titlebar">
		<a href="mainpage.php">Home</a>
		<a href="login.php">Login</a>
		<a href="Registeration.php">Register</a>
		<a href="resetpasswd.php">Reset Password</a>

		<a href="dashboard.php">Dashboard</a>
	</div>
	<br>
<hr>
<div class="csf_games">
	<h1>Security Games</h1><br>
	<h2>Learn basic to advance of OWASP vulnerabities and web securities.</h2><br>
	<br>
	<a href="page1.1.php">
		<input class="button" type='submit'  value="Lets Play The Game">
	</a>
	<a href="logout.php">
		<input class="button" type='submit'  value="LogOut">
	</a>

</div>

</body>
</html>