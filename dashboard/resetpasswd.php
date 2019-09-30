<?php
 session_start();
include ("connection.php");		

 error_reporting(0);
$email=$_SESSION['email'];  
$password=$_SESSION['passwd'];
if($email)
{
	echo "     Welcome ".$email;
}   
else{
	header('location: mainpage.php');
}
?>

<!Doctype HTML>
<html>
	<head>
		<title> Reset Password</title>
		<link rel="stylesheet" type="text/css" href="cssworking.css">
	</head>

	<body><div class="titlebar">
		<a href="mainpage.php">Home</a>
		<a href="login.php">Login</a>
		<a href="Registeration.php">Register</a>
		<a href="resetpasswd.php">Reset Password</a>

		<a href="dashboard.php">Dashboard</a>
	</div>
	<br>
<hr>
		<form action="resetpasswd.php" method="POST" >
	<div class="block">
	<div class = "box">
		<div class="my_form">
			<div class="my_form">
			<label>Old Password</label>
			<input type="password" placeholder="Enter your old Password" name="opasswd">
		</div>
		<br>
			<div class="my_form">
			<label>New Password</label>
			<input type="password" placeholder="Enter new Password" name="1passwd">
		</div>
		<br>
		

	
     	<div class="my_form">
			<label>Confirm Password:</label>
			<input type="password" placeholder="Enter the Password again" name="1cpasswd">
		</div>
		<br>
		<input class="button" type='submit'  name="resetpasswd" value="Reset Password">
	</form>


	<?php


		if(isset($_REQUEST['resetpasswd']))
		    {	
		    	$md5passwd = $_POST["opasswd"];
		        $sha1passwd=md5($md5passwd);
                  $oldpasswd=sha1($sha1passwd);
                 

		        $md5passwd = $_POST["1passwd"];
		        $sha1passwd=md5($md5passwd);
                  $passwd=sha1($sha1passwd);
                 

		        $md5cpasswd = $_POST["1cpasswd"];
		        $sha1cpasswd=md5($md5cpasswd);
                  $cpasswd=sha1($sha1cpasswd);
                 
		      
		        $role='user';

		        
				if(!empty($passwd) && !empty($passwd))
		        {
		            if($passwd ==$cpasswd)
		            {
		            		echo $email;
		      			 	$query = "UPDATE user SET passwd='$passwd',role='$role' WHERE email='$email' and passwd='$oldpasswd' ";
					        $data = mysqli_query($conn, $query);
					        	if($data)
						       
							        {
							        	header('Location: mainpage.php'); 
							        	
							        }
						       		 else
						       		 { 
						        		echo "Unsuccessful Password Reset";
						        		}

		            } 
		            else
		            {
		                echo "<script>alert('Password doesnot matches. ')</script>"; 
		            }
		        }
		        else
		        {
		            echo "<script>alert('Enter Password. Feild is empty')</script>";
		        }
  		  }

  		     $conn->close();
	?>
      
    </div>
</div>

</body>
</html>


