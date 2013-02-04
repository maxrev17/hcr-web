<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="includes/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="includes/css/bootstrap-responsive.css" rel="stylesheet">
    
    <link rel="icon" type="image/png" href="/favicon.png">
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
            <p class="navbar-text pull-right" style="color: grey;">
              Imperial College London
            </p>
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="../">CHARLES</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
                <?php 
                if($_SERVER['REQUEST_URI'] == '/') {
                    echo '<li class="active"><a href="../">Home</a></li>';
                } else {
                    echo '<li><a href="../">Home</a></li>';
                }
                ?>
                <?php 
                if($_SERVER['REQUEST_URI'] == '/video') {
                    echo '<li class="active"><a href="/video">Video</a></li>';
                } else {
                    echo '<li><a href="/video">Video</a></li>';
                } 
                ?>
                 <?php 
                if($_SERVER['REQUEST_URI'] == '/about') {
                    echo '<li class="active"><a href="/about">About</a></li>';
                } else {
                    echo '<li><a href="/about">About</a></li>';
                }
                ?>
            </ul>
            <ul class="nav pull-right">
                <li class="dropdown">
                    <a href="properties.php?type=showall" class="dropdown-toggle" data-toggle="dropdown">
                        GitHub
                        <b class="caret"></b>
                    </a>
                  <ul class="dropdown-menu">
                    <li><a href="https://github.com/Sergeus/HCR" target="_blank">Main ROS Project</a></li>
                    <li><a href="https://github.com/webbo89/RobotFace" target="_blank">CHARLES' Face</a></li>
                    <li><a href="https://github.com/webbo89/ncrdriver" target="_blank">Ticket Printer Driver</a></li>
                    <li><a href="https://github.com/maxrev17/hcr-web" target="_blank">Website</a></li>
                  </ul>
                </li>
          </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
