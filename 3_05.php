<?php
    include('../header.php');
?>
<?php
  if(isset($_REQUEST['submit']))
  {
      $passwd = $_POST["passwd"];
      if(!empty($passwd))
      {
          if($passwd == "7329432")
          {
                  echo "<script>alert('password correct')</script>";
                  header('location:3_06.php');
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

<h1 style="padding-left: 35px; padding-top:15px;"><u>Game 3 – 05</u></h1></div>

<link rel="stylesheet" href="./level_03.css">
<div class="container">
</br></br></br></br></br></br>
<div class="text c">
My good friend was working for Barclays Bank and they used his photo for one Tweet.
</br>His photo was posted on <a href="https://twitter.com/barclaysjobs/" target="_blank">https://twitter.com/barclaysjobs/</a>
</br></br></br>

It was in May 2016 and at that time he was working as an advisor in customer support or care division, I am not sure. His name starting on D.
</br>(That tweet also show you his photo.)

First seven numbers from the URL of that Tweet is your password for the next level.
</div>
</br></br></br></br>
-------------------------------------------------------------------------------------------------Instructions----------------------------------------------------------------------------------------------------
</br></br></br><div class="midText">The number in the URL is your password for the next level.</div>
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