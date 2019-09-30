<?php
    if(isset($_REQUEST['submit']))
    {
        $passwd = $_POST["passwd"];
        if(!empty($passwd))
        {
            if($passwd == "rea")
            {
                    echo "<script>alert('PASSWORD CORRECT')</script>";
                    header('location: level-4.6.php');
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
    <h3 class="c">I like meetups, you can meet great people there and be inspired by them.<br>

I met an account manager last year at a meetup event organized by the London Java Community.<br>

Apparently we both like to climb mountains.<br>
</h3>
    </br></br><input type="button" value="Download File" class="btn c">
    
</br></br>--------------------------------------------------------------Instructions-------------------------------------------------------------
</br></br><h4 class="c">

Surname of that person is the password to the next level.<br>
(Lower case letters only)</h4>
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