<?php
    include('../header.php');
?>
<?php
  if(isset($_REQUEST['submit']))
  {
      $passwd = $_POST["passwd"];
      if(!empty($passwd))
      {
          if($passwd == "game147")
          {
                  echo "<script>alert('password correct')</script>";
                  header('location:3_05.php');
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

<h1 style="padding-left: 35px; padding-top:15px;"><u>Game 3 – 04</u></h1></div>
<link rel="stylesheet" href="./level_03.css">
<div class="container">
</br></br></br></br></br></br>
<div class="text">
Get the password from the URL below.
</br></br></br>
<a href="3_04.html" target="_blank" style="display: inline-block;">
        <input type="submit" value="OPEN URL" style=" padding: 10px 15px 10px 15px; background:transparent; font-size:18px; border:black solid 2px;">
    </a>
</div>
</br></br></br></br>
-------------------------------------------------------------------------------------------------Instructions----------------------------------------------------------------------------------------------------
</br></br></br><div class="midText">Type password from URL</div>
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