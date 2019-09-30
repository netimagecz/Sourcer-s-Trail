<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        html,body{
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Poppins',sans-serif;  
            height: 1000px; 
        }
        nav{
            position: fixed;
            height: 80px;
            width: 100%;
            background-color:white;
            z-index: 99;
        }
        nav a{
            text-decoration: none;
            color: black;
            margin-left: 30px;
            line-height: 75px;
            font-weight: 500;
            font-size: 16px;
        }
        #siteName{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 25px;
            font-stretch: extra-condensed; 
            margin-left: 60px;
        }
        #first{
            margin-left: 720px;
        }
        h1{
            padding: 0px;
            margin: 0px;
        }
        .page-wrapper{
            min-height: 50%;
        }
        #cl{
            padding-top: 80px;
            background: rgba(0,0,0,0.2);
            height:100px;
        }
        .footer{
            background: #303036;
            color:#d3d3d3;
            height: 25;
            position: relative;
        }
        .footer .footer_bottom{
            background: #343a40;
            color: #686868;
            height: 25px;
            text-align: center;
            position: absolute;
            bottom: 0px;
            left: 0px;
            padding-top: 15px;
            width: 100%;
        }
    </style>
   
</head>

<body>
    <nav>
            <a href="#" id="siteName">Yet To Be Revealed</a>
            <a href="#" id="first">Home</a>
            <a href="#">About Us</a>
            <a href="#">Contact</a>
            <a href="#">Logout</a>
    </nav>
    <div id="cl" class="ok">
    