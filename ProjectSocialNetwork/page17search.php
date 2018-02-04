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
<body style="background-image: url('image/background4.jpg');background-size: cover;background-attachment: fixed;">
<div class="container"><br><br>                          
    
    <?php
    session_start();
    include_once 'connect.php';
    
    $Email = $_SESSION["emailid"];
    $qr = mysqli_query($con,"select * from tbl_registration where email = '$Email'");
    $r = mysqli_fetch_array($qr);
    
    include_once 'navbar.php';
    $srch = $_GET["search"];
    $qr1 = mysqli_query($con,"select * from tbl_registration where name like '%$srch%'");
    $row = mysqli_num_rows($qr1);
    if($row > 0){
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
    }
    else{
        echo "<div style='padding-top: 20px;'>No Person Found</div>";
    }
    
    
    ?> 
   

    <!--Compiled and minified JS -->
    <script src="jquery/jquery-3.1.0.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>