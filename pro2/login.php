<?php
include ("connection.php");
 error_reporting(0);
      session_start();
     $email=$_SESSION['email']; 
     


       if($email )
{
   header('location: ../dashboard/dashborad-crm.php');
}  
?>

<!Doctype HTML>
  <html>
        <head>
          <title> Login</title>
          <link rel="stylesheet" type="text/css" href="cssworking.css">
        </head>

  <body background="back.jpg">
  <div class="head">
      <h1 class="w3-xlarge">Log In</h1>
    </div>
  
  <br>
<hr>
    <form action="login.php" method="POST" >
      <div class="block">
            <div class = "box">
            <div class="my_form">
              
                    <label>Email :</label>
                    <input type="email" placeholder="Enter your email" id="email" name="email">
             </div>
         <br>
      
            <div class="my_form">
                  <label>Password:</label>
                  <input type="password" placeholder="Enter the Password "  id="passwd" name="1passwd">
            </div>
               
          <br>   
          <div class="g-recaptcha" data-sitekey="7LfV4KqUMDJJWDspnjtV8upj90dvcygHGpOjLCas"></div>
          
          <br><label>Remember Me</label>
          
          <input type="checkbox" name="remember" value="1">
          <br>
          <input class="button" type="submit" name="login" value="Login"><br><br>
          <p><a href="fpass.php">Forgot Password</a></p><br><br>
    </form>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</div>
</div>

</body>
</html>
 <?php

if (isset($_REQUEST['login']))
 { 
   echo "hello world";
        $username = $_POST['username'];
        $secretkey = "7LfV8KoUWHHJSPsJfAHLsghAdPPbh7pZslRJA5s6";
        $responsekey = $_POST['g-recaptcha-response'];
        
        $url="https://www.google.com/recaptcha/api/siteverify?secret='$secretkey'&response='$responsekey'";        
        $response = file_get_contents($url);
        
        if($response['success']){
            echo"done";
       
        if (empty($_POST['email']) || empty($_POST['1passwd'])) 
        { 
          echo "Email or Password is invalid"; 
        } 
        else{ 
                // Define $email and $password 
                 $email = $_POST['email'];
                  $md5passwd = $_POST['1passwd']; 
                  $sha1passwd=md5($md5passwd);
                  $passwd=sha1($sha1passwd);
                     
                  $sql = "SELECT username FROM user WHERE email = '$email' and passwd = '$passwd'";
                  $result = mysqli_query($conn,$sql);
                  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

                if($row)
                 {
                  echo "successful login";
                   $rem=$_POST['remember'];

                   if(isset($_POST['remember']))
                   {
                    setcookie('email',$email,time()+60*60*1);
                  
                    }
                  $_SESSION['email']=$email;
                   
                  header("location: ../dashboard/dashboard-crm.php"); // Redirecting To Profile Page 
                  }
                  else
                  {
                    echo "Sorry, wrong email or password";
                    header('login.php');

                  } 
              }
         }
        else
        {
            echo "ur dumb";
        }
     
        mysqli_close($conn); // Closing Connection 
} 
?>