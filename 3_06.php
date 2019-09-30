<?php
    include('../header.php');
?>
<?php
  if(isset($_REQUEST['submit']))
  {
      $passwd = $_POST["passwd"];
      if(!empty($passwd))
      {
          if($passwd == "959028")
          {
                echo "<script>alert('password correct')</script>";
                header('location:3_end.php');
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

<h1 style="padding-left: 35px; padding-top:15px;"><u>Game 3 – 06</u></h1></div>
<link rel="stylesheet" href="./level_03.css">
<div class="container">
</br></br></br></br></br></br>
<div class="text">
Meeting new people is always great because you will learn a lot about them and also from them.
</br>My friend met a guy in California who is working there as a data scientist, and he told him that he is a discussion expert on the site that has something to 
</br>do with “Your Home for Data Science”.
</br></br></br>
He remembered on his profile photo on his page, where he was wearing glasses and funny winter hat.
</br>He got a certificate for the analytics edge training, and this certificate has a really long code. Luckily, the codes
</br> for the next level are the first 6 digits of this number.
</div>
</br></br></br></br>
-------------------------------------------------------------------------------------------------Instructions----------------------------------------------------------------------------------------------------
</br></br></br><div class="midText">The code is the first 6 digits of his code of his certificate.</div>
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