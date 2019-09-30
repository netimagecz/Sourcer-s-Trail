<?php
    if(isset($_REQUEST['submit']))
    {
        $passwd = $_POST["passwd"];
        if(!empty($passwd))
        {
            if($passwd == "barker")
            {
                    echo "<script>alert('PASSWORD CORRECT')</script>";
                    header('location: level-4.4.php');
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
    <h3 class="c">I saw a PDF file about advanced Boolean and some search tips on a website. I can’t recall the website but I am pretty sure it was related to site academia.edu.<br>

The author was from some university, perhaps California or Florida, but I am not sure.<br>

You will find the answer in the file and his surname on the bottom of that file is your password to the next level.</h3>
        
</br></br>--------------------------------------------------------------Instructions-------------------------------------------------------------
</br></br><h4 class="c">Password is surname in lowercase</h4>
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