<!DOCTYPE html>
<html>
<head>
<title>Bootstrap 101 Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<!--Compiled and minified CSS -->
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

<link href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet">
<script src="validByOnClick.js"></script>
</head>
<body>
<div class="container"><br><br>                          
    
    <?php
    session_start();
    include_once 'connect.php';
    
    $Email = $_SESSION["emailid"];
    $qr = mysqli_query($con,"select * from tbl_registration where email = '$Email'");
    $r = mysqli_fetch_array($qr);
    
    
    ?>
    
<!--    navbar        ----------------------->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse"
data-target="#example-navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
    <a class="navbar-brand" href="#" class="active"><img class="img-responsive" style="height: 30px;" src="image/Capture.JPG"></a>
</div>
<div class="collapse navbar-collapse" id="example-navbar-collapse">
    
<ul class="nav navbar-nav">
    <li><a href="page3Profile.php"><?php echo $r["name"];?></a></li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">More<span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#">Inbox</a></li>
            <li class="divider"></li>
            <li><a href="#">Notifications</a></li>
            <li class="divider"></li>
            <li><a href="#">Settings</a></li>
            <li class="divider"></li>
        </ul>
    </li>
</ul>
    <a href="Page4AllMember.php" class="btn btn-info navbar-btn">Find friends</a>
    <a href="logout.php" class="btn btn-info navbar-btn ">Logout</a>
</div>
    
</nav>

   <?php
    
    $qr1 = mysqli_query($con,"select * from tbl_registration");
    while($r1 = mysqli_fetch_array($qr1))
    {
        ?><br>
        <a href="page5ProfileDetails.php?m=<?php echo $r1['email'] ?> ">
            <h4>
        <img style="padding-top: 20px; height: 100px;width: 100px;" src="<?php echo $r1["image"]; ?>">
        <?php echo $r1["name"]?></h4>
        </a>
    <?php
    }
    
    
    ?> 
   

    <!--Compiled and minified JS -->
    <script src="jquery/jquery-3.1.0.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>