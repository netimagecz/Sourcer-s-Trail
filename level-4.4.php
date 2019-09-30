<?php
    if(isset($_REQUEST['submit']))
    {
        $passwd = $_POST["passwd"];
        if(!empty($passwd))
        {
            if($passwd == "1936jones")
            {
                    echo "<script>alert('PASSWORD CORRECT')</script>";
                    header('location: level-4.5.php');
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
    <h3 class="c">There is a professor at the Michigan State University who specializes in a rare disease called SanFilippo Syndrome<br>
She worked on that university for 30 years, but which year was she born and what is her surname?
Oops, she is not on Linkedin, sorry 🙁</h3>
   
    
</br></br>--------------------------------------------------------------Instructions-------------------------------------------------------------
</br></br><h4 class="c">
Password is Year together with Surname. (Lower case letters only)<br><br>

Example: 2017smith

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