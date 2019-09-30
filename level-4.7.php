<?php
    if(isset($_REQUEST['submit']))
    {
        $passwd = $_POST["passwd"];
        if(!empty($passwd))
        {
            if($passwd == "curry")
            {
                    echo "<script>alert('PASSWORD CORRECT')</script>";
                    header('location: level-5.php');
            } 
            else
            {
                echo "<script>alert('PASSWORD INCORRECT')</script>"; 
            }
        }
        else
        {
            echo "<script>alert('Enter a Password')</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./index.css">
</head>
<body>
    
    <div class="container">
    <h3 class="c">Networking is vital in recruitment.<br>

I have met someone from Pfizer during the PMSA 2016 conference. He was one of the attendees.<br>

All I can remember that he was from Collegeville.<br>
His surname is the password to the next level.<br></h3>    
</br></br>--------------------------------------------------------------Instructions-------------------------------------------------------------
</br></br><h4 class="c">Password is Surname. (Lower case letters only)
</h4>
</br> </br>------------------------------------------
    To view next URL please enter your password below: ------------------------------------------
<br><br><pre class="c">This content is password protected. To view it 
    please enter your password below:</pre>
</br></br>Password:
</br></br>
<form method="post">
<input type="password" name="passwd" class="c">
<input type="submit" name="submit" class="c">
</form>
</div>

</body>
</html>