<?php
session_start();
$email=$_SESSION['email'];
$otp=$_SESSION['passwd'];
 error_reporting(0);
include ("connection.php");
if($email){
	echo "     Welcome ".$email;
}


?>

<!Doctype HTML>
<html>
	<head>
		<title> Email Verification Password</title>
		<link rel="stylesheet" type="text/css" href="cssworking.css">
	</head>

	<body background="bimg.jpg" >
		<form action="fpass2.php" method="POST" >
			<div class="block">
		<div class = "box">
		
			<div class="my_form">
			<label>Enter the Verification Password:</label>
			<input type="password" placeholder="Enter the Verification Password" name="1passwd">
		</div>
		<br>
		<input class="button" type="submit"  name="resetpasswd" value="Reset Password">
		<?php
		  if(isset($_REQUEST['resetpasswd']))
		{



		$md5passwd=$_POST["1passwd"];
		$sha1passwd=md5($md5passwd);
                  $passwd=sha1($sha1passwd);
                  
    	
    	 if((!empty($passwd)) && ($_POST['1passwd']==$otp))
        {
       		 $query3 = "UPDATE user SET passwd='$passwd' WHERE email='$email' ";
		        $data = mysqli_query($conn,$query3);
		        if($data)
			        {
			        	echo "\nYou have successfully Logged In";
			        	header('location: ../dashboard/dashboard-crm.php');
			        }
		        else{ 
		        	echo "\nRegistration unsuccessful";
		        }
		      
		}
		 else
        {
        	echo "\nPlease enter the correct password. ";
        }
    }
       $conn->close();
    ?>

      </div></div></form></body></html>
      