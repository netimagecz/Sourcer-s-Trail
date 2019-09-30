<?php
    include('../header.php');
?>
<?php
  if(isset($_REQUEST['submit']))
  {
      $passwd = $_POST["passwd"];
      if(!empty($passwd))
      {
          if($passwd == "PqkjFb3n453")
          {
            header('location:3_03.php');
            echo "<script>alert('password correct')</script>";
          } 
          else
          {
              echo "<script>alert('hello world!!')</script>"; 
          }
      }
      else
      {
          echo "<script>alert('Enter Password. Feild is empty')</script>";
      }
  }
?>

<h1 style="padding-left: 35px; padding-top:15px;"><u>Game 3 – 02</u></h1></div>

<link rel="stylesheet" href="./level_03.css">
<div class="container">
</br></br></br></br></br></br>
<div class="text">
Sometimes, you need to decode messages that people are sharing on their profile.
Because you can use </br>that info in the message that you are going to send them.
</br></br></br></br>
01010000 01100001 01110011 01110011 01110111 01101111 01110010 01100100 00100000 01101001 01110011 00111010 00100000 00001010
</br></br>
01010000 01110001 01101011 01101010 01000110 01100010 00110011 01101110 00110100 00110101 00110011
</div>
</br></br></br></br>
-------------------------------------------------------------------------------------------------Instructions----------------------------------------------------------------------------------------------------
</br></br></br><div class="midText">Use the right password.</div>
</br></br></br>
--------------------------------------------------------------------To view next challenge please enter your password below:--------------------------------------------------------------------------------

</br></br></br>
<div class="midText">
This content is password protected. To view it please enter your password below:
</div>
</br></br>
Password
<form method = "post">
    <input class="p" type="password" name="passwd">
    <input class="s p" type="submit" name="submit" value="SUBMIT">
</form>
</div>
<?php
    include('footer.php');
?>