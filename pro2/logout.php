<!--?php
session_start();

 error_reporting(0);
session_destroy();
if(isset($_COOKIE['email']))
{
	$email=$_COOKIE['email'];
	$passwd=$_COOKIE['passwd'];
	setcookie('email',$email,time()-1);

	setcookie('passwd',$passwd,time()-1);
	
}
else{

	
}
header('location: ../index.php');

<!?php
//session_start();
session_destroy();
//$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
header("Location: ../index.php");
exit();
?-->

<?php
session_start();
if(session_destroy())
{
	header("location: ../index.php")
}
?>
