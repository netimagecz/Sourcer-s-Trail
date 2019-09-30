<?php
session_start();

 error_reporting(0);
session_destroy();
if(isset($_COOKIE['email']) and isset($_COOKIE['passwd']))
{
	$email=$_COOKIE['email'];
	$passwd=$_COOKIE['passwd'];
	setcookie('email',$email,time()-1);

	setcookie('passwd',$passwd,time()-1);
	
}
else{

	
}
header('location: mainpage.php');
?>