<?php
session_start();
include ("../connection.php");

 error_reporting(0);
$email=$_SESSION['$email']; 


 if($email )
{
	header('location: ../dashboard-crm.php');
}  
  
?>


<!Doctype HTML>
<html>
	<head>
		<title> Registration Page</title>
		<link rel="stylesheet" type="text/css" href="cssworking.css">
	</head>

	<body background="back.jpg">
		
		<br>
	
			<div class="head">
				<h1 class="w3-xlarge">Registration</h1>
			</div>
<hr>

		<form action="Registeration.php" method="POST" >
		<div class = "box">
		<div class="my_form">
			<label>Name:</label>
			<input type="text" placeholder="Enter your name" name="name">
		</div>
		<br>
		<div class="my_form">
			<label>UserName:</label>
			<input type="alphanumeric" placeholder="Enter a username" name="username">
		</div>
		<br>
		<div class="my_form">
			<label>Email:</label>
			<input type="email" placeholder="Enter your email-id" name="email" required>
		</div>
		<br>
		
		
		<div class="my_form">
			<label>Gender:</label>
			<select name="gender">
				<option value="M">Male</option>
				<option value="F">Female</option>
				<option value="O">Other</option>
			</select>
		</div>
		<br>
		
			<br>
			<div class="g-recaptcha" data-sitekey="7LfV4KqUMDJJWDspnjtV8upj90dvcygHGpOjLCas"></div>
			<br><br>	
			<input class="button" type="submit" name="register" value="Register">
		<br><br>
		<p>Already Registered?<br><a href="login.php"> Log In</a> Here</p>

		</form>
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<div class = "error-message">

<?php
    if(isset($_REQUEST['register']))
    {
		
        $username = $_POST['username'];
        $secretkey = "7LfV8KoUWHHJSPsJfAHLsghAdPPbh7pZslRJA5s6";
        $responsekey = $_POST['g-recaptcha-response'];
        
        $url="https://www.google.com/recaptcha/api/siteverify?secret='$secretkey'&response='$responsekey'";        
        $response = file_get_contents($url);
    
		if($response['success'])
		{
            echo"done";
			
			
				
			if(!empty($name) && strlen($name) != 0)
			{
				if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
				{
					echo  "Only letters and white space allowed."; 
				}
			}
			else
			{
				echo "Please enter your name. * This feild is compulsory.";	
			}
			
			
			if(!empty($email) && strlen($email) != 0)
			{
				if (!filter_var($email, FILTER_VALIDATE_EMAIL))
				{
					echo  "\nInvalid email format"; 
				}
			}
			else
			{
				echo "\nPlease enter your email. * This feild is compulsory.";	
			}

			$name = trim($_POST["name"]);
			$username = trim($_POST["username"]);
			$email = trim($_POST["email"]);
			$gender = $_POST["gender"];
			$uid=time();

			$query = "INSERT INTO user(UID,name,username,email,gender,role) VALUES('$uid','$name','$username','$email','$gender','user')";
			$query2 = "INSERT INTO leader_board(LID,UID,score) values('0','$uid','0')";
			$data = mysqli_query($conn, $query);
			$data2 = mysqli_query($conn,$query2);
			if($data && $data2)
			{
					echo "\nYou have successfully Registered";
					$_SESSION['email']=$email;		
					header("location: mail.php"); 
			}
			else
			{ 
				echo "\nRegistration unsuccessful";
			}
		}
        else
        {
            echo"Invalid captcha";
        }
    }
    $conn->close();
?>
	
</div>
</div>

</body>
</html>
