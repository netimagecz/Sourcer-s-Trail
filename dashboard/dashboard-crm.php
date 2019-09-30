<?php
session_start();
$email=$_SESSION['email'];

 error_reporting(0);
include ("./pro2/conection.php");

if($email )
{
	echo "";
}  
else
{
	header('location : ../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>GAMES- Dashboard</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
   
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <!-- am chart export.css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="themify-icons/themify-icons.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <!-- am chart export.css -->
    
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="jquery.mCustomScrollbar.css">
    <!-- radial chart.css -->
    <link rel="stylesheet" href="radial.css" type="text/css" media="all">
    <!-- Style.css-->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<!-- Menu sidebar static layout -->

<body>
<!-- Pre-loader start -->

<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">
                <div class="navbar-logo">
                    
                    <a href="index.html">
                        <img class="img-fluid" src="logo1.png" alt="Theme-Logo" />
                    </a>
                    <a class="mobile-options waves-effect waves-light">
                        <i class="ti-more"></i>
                    </a>
                </div>
                
                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                        <li>
                            <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                        </li>
                        <!--<li class="header-search">
                            <div class="main-search morphsearch-search">
                                <div class="input-group">
                                    <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
                                </div>
                            </div>
                        </li>-->
                        <li>
                            <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                <i class="ti-fullscreen"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        
                        
                        <li class="user-profile header-notification">
                            <a href="#!" class="waves-effect waves-light">
                                <img src="alien.png" class="img-radius" alt="User-Profile-Image">
                                <!--?php
                                $sql = "SELECT username FROM user WHERE email= $email";
                                $result = $conn->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo  $row["username"] ;
                                    }
                                } else {
                                    echo "0 results";
                                }
                                
                            
                                ?-->
                               
                                
                                <i class="ti-angle-down"></i>
                            </a>
                            <ul class="show-notification profile-notification">
                                <li class="waves-effect waves-light">
                                    <a href="./pro2/resetpasswd.php">
                                        <i class="ti-settings"></i> Reset Password
                                    </a>
                                </li>                             
                                <li class="waves-effect waves-light">
                                    <a href="./pro2/logout.php">
                                        <i class="ti-layout-sidebar-left"></i> Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <div class="page-header-title">
                                        <h5 class="m-b-10">DASHBOARD</h5>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                     <!-- Page-header end -->
                     <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                
                                <div class="page-body">
                                    <div class="row">
                                        
                                        <!-- customar project  start -->
                                       <!-- 
                                     
                                     <div class="col-xl-4 col-md">  
                                        <div class="col-xl col-md">
                                            <div class="card">
                                                <div class="card-block">
                                                    <div class="row align-items-center m-l-0">
                                                        <div class="col-auto">
                                                            <i class="fa fa-rocket f-30 text-c-green"></i>
                                                        </div>
                                                        <div class="col-auto">
                                                            <h4 class="text-muted m-b-10">RANK</h4>
                                                            <h2 class="m-b-0">379</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl col-md">
                                            <div class="card">
                                                <div class="card-block">
                                                    <div class="row align-items-center m-l-0">
                                                        <div class="col-auto">
                                                            <i class="fa fa-rocket f-30 text-c-green"></i>
                                                        </div>
                                                        <div class="col-auto">
                                                            <h4 class="text-muted m-b-10">SCORE</h4>
                                                            <h2 class="m-b-0">205</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md">                                    
                                        <div class="col-xl col-md-6">
                                            <div class="card">
                                                <div class="card-block">
                                                    <div class="row align-items-center m-l-0">
                                                        <div class="col-auto">
                                                            <i class="fa fa-rocket f-30 text-c-green"></i>
                                                        </div>
                                                        <div class="col-auto">
                                                            <h4 class="text-muted m-b-10">LEVEL1</h4>
                                                            <h2 class="m-b-0">205</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl col-md-6">
                                            <div class="card">
                                                <div class="card-block">
                                                    <div class="row align-items-center m-l-0">
                                                        <div class="col-auto">
                                                            <i class="fa fa-rocket f-30 text-c-green"></i>
                                                        </div>
                                                        <div class="col-auto">
                                                            <h4 class="text-muted m-b-10">TASKS</h4>
                                                            <h2 class="m-b-0">205</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                   

                                    
                                         <div class="col-xl-4 col-md-6" >
                                            <div class="card">
                                                <div class="card-block" style="margin-left: 100px;">
                                                    <div class="row align-items-center m-1-0">
                                                        <center>
                                                        <div class="col-auto">
                                                            <img src="image/alien.png" style="height: 180px;width: 180px;">
                                                        </div>
                                                        <div class="col-auto">
                                                            <h4 class="text-muted m-b-10">DETAILS</h4>
                                                            <h5 class="m-b-0">Name:205</h5>
                                                            <h5 class="m-b-0">user id:205</h5>
                                                            <h5 class="m-b-0">email:205</h5>
                                                            
                                                        </div>
                                                    </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    


                                       
                                        <!-- customar project  end -->
    
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    </div>
                </div>


        <style>
        .b{
            color: yellow;
            font-size: 50px;
            font-weight:500;
        }
        .p{
            float: left;
            width: calc(90%/3);
            transition:all 0.5s ease; 
        }
        .p:hover
        {
            -webkit-transform: scale(1.1);
            -ms-transform: scale(1.1);
            transform: scale(1.1);
        }
        .sg{
            color:grey;
        }
        #blank{
            height:180px;
        }
        .g{
            padding-left: 50px;
        }
        .pn{
            text-decoration: none;
            color: darkgrey;
        }
        .pn:hover{
            font-size: 19px;
            color: black;
        }
    </style>
   
    </br></br>
<div style="padding-left:100px; padding-top:200px;">
        <div class="p g"><div class="b g">01</div></br><div class="sg">SOURCING GAME #1</div></br><div class="pn"></div><a class="pn" href="../level1/level1_00.php">Play Now>>></a></div></div>
        <div class="p"><div class="b g">02</div></br><div class="sg">SOURCING GAME #2</div></br><div class="pn"></div><a class="pn" href="../level2/level2_00.php">Play Now>>></a></div></div>
        <div class="p"><div class="b g">03</div></br><div class="sg">SOURCING GAME #3</div></br><div class="pn"></div><a class="pn" href="../level3/level3_00.php">Play Now>>></a></div></div>
    </div>
    <div id="blank"></div>
   <div style="padding-left:100px;">
        <div class="p g"><div class="b g">04</div></br><div class="sg">SOURCING GAME #1</div></br><div class="pn"><a class="pn" href="../level4/level4_00.php">Play Now>>></a></div></div>
        <div class="p"><div class="b g">05</div></br><div class="sg">SOURCING GAME #2</div></br><div class="pn"><a class="pn" href="../level5/level5_00.php">Play Now>>></a></div></div>
        <div class="p"><div class="b g">06</div></br><div class="sg">SOURCING GAME #3</div></br><div class="pn"><a class="pn" href="../level6/level6_00.php">Play Now>>></a></div></div>
   </div>  
   <div id="blank"></div>
   <div style="padding-left:100px;">
        <div class="p g"><div class="b g">07</div></br><div class="sg">SOURCING GAME #1</div></br><div class="pn"><a class="pn" href="../level7/level7_00.php">Play Now>>></a></div></div>
    </div>
    </div>
    </div>

                
 
<!-- Required Jquery -->
<script type="text/javascript" src="jquery/js/jquery.min.js "></script>
<script type="text/javascript" src="jquery-ui/js/jquery-ui.min.js "></script>
<script type="text/javascript" src="popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js "></script>
<script type="text/javascript" src="excanvas.js "></script>
<!-- toggle full screen -->
<script type="text/javascript" src="common-pages.js "></script>

<!-- jquery slimscroll js -->
<script type="text/javascript" src="jquery-slimscroll/js/jquery.slimscroll.js "></script>
<!-- waves js -->
<script src="waves/js/waves.min.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="modernizr/js/modernizr.js "></script>
<!-- slimscroll js -->
<script type="text/javascript" src="../files/assets/js/SmoothScroll.js"></script>
<script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
<!-- Chart js -->
<script type="text/javascript" src="../files/bower_components/chart.js/js/Chart.js"></script>
<!-- amchart js -->
<!-- menu js TO BE SORTED-->
<script src="../files/assets/js/pcoded.min.js"></script>
<script src="../files/assets/js/vertical/vertical-layout.min.js "></script>
<!-- custom js -->
<script type="text/javascript" src="crm-dashboard.js"></script>

<!-- amchart js -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="amchart/gauge.js"></script>
<script src="amchart/serial.js"></script>
<script src="amchart/light.js"></script>
<script src="amchart/pie.min.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>

</body>

</html>
