<?php
    include('../header.php');
?>
<?php
  if(isset($_REQUEST['submit']))
  {
      $passwd = $_POST["passwd"];
      if(!empty($passwd))
      {
          if($passwd == "reading")
          {
                  echo "<script>alert('password correct')</script>";
                  header('location:3_04.php');
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

<h1 style="padding-left: 35px; padding-top:15px;"><u>Game 3 – 03</u></h1></div>

<link rel="stylesheet" href="./level_03.css">
<div class="container">
</br></br></br></br></br></br>
<div class="text">
Finding some answers is easy; for instance, the name of the highest reputation holder
on <a href="https://stackoverflow.com" target="_blank">Stackoverflow</a>.
</br>However, all his social profiles stated one city where he is living.
</br>Hence, the Name of the city is your password for the next level.
</div>
</br></br></br></br>
-------------------------------------------------------------------------------------------------Instructions----------------------------------------------------------------------------------------------------
</br></br></br><div class="midText">The name of the city is the password. (lowercase letters)</div>
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