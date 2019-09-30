<?php
	session_start();
	error_reporting(0);
	include ("connection.php");
	include('../header.php');
	$email=$_SESSION['email'];
	$password=$_SESSION['passwd']; 
	 if($email )
	{

		header('location: mainpage.php');
	}   
?>


<!Doctype HTML>
<html>
	<head>
		<title> Forget Password</title>
		<link rel="stylesheet" type="text/css" href="cssworking.css">
	</head>

	<body background="bimg.jpg" >
		
		<br>
		<hr>

		<form action="fpass.php" method="POST" >
				<div class="block">
				<div class = "box">
				<div class="my_form">
					<label>
						Enter your email to get verification number:
					</label>
					<br>
					<label>Email:</label>
					<input type="email" placeholder="Enter your email-id" name="email">
				</div>
				<br>
				<input class="button" type="submit" name="submit" value="Submit"><br>

				<?php
					if (isset($_REQUEST['submit']))
					{   $email=$_POST['email'];

				        if(!empty($email))
				        {
				       		 if (!filter_var($email, FILTER_VALIDATE_EMAIL))
				       		  	{
				  					echo  "\nInvalid email format"; 
							  	}
							  else
							  	{
								  	  $_SESSION['email']=$email;
									  $sql = "SELECT username FROM user WHERE email = '$email'";
									  $result = mysqli_query($conn,$sql);
									  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

									  if($row)
									   {
										 header('Location: mail.php');
										}
								}
						}
						else
						{
							echo "Please enter your email. * This feild is compulsory.";
									
						}
					}
				   $conn->close();
				?>	
     	
      			</div>
     		    </div>
   		</form>
</body>
</html>