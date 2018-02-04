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
<body style="background-image: url('image/background4.jpg');background-size: cover">
<div class="container"><br><br>                          
    
    <?php
    session_start();
    include_once 'connect.php';
    
    $Email = $_SESSION["emailid"];//Current user's email address
    $qrr = mysqli_query($con,"select * from tbl_registration where email = '$Email'");
    $rr = mysqli_fetch_array($qrr);
    
    $visitorId = $_REQUEST['m'];//visiting user's email address
    if($Email == $visitorId)
    {
        echo "<script>window.location.href='page3Profile.php'</script>";
    }
    else{
        $qr = mysqli_query($con,"select * from tbl_registration where email = '$visitorId'");
        $row = mysqli_num_rows($qr);
        $r = mysqli_fetch_array($qr);
    }
    
include_once 'navbar.php';
?>
<div class="container" style="padding-top: 20px; height: 200px;width: 200px;">
    <img src="<?php echo $r["image"]; ?>"
class="img-rounded img-responsive">
</div><br><br>
<div style="text-align: center;font-family: sans-serif">
    <h1><?php echo $r["name"]; ?></h1>
    <h3>Gender : <?php echo $r["gender"]="M"? "Male":"Female"; ?></h3>
    <?php
    //friend request functionalities////////////////////////////////////////////////////////
    //getting id of receiver
    $qr1 = mysqli_query($con,"select id from tbl_registration where email = '$visitorId'");
    $r1 = mysqli_fetch_array($qr1);
    $rqstToId = $r1["id"];//table id of receiver
    
    //getting id of sender
    $qr2 = mysqli_query($con,"select id from tbl_registration where email = '$Email'");
    $r2 = mysqli_fetch_array($qr2);
    $rqstFromId = $r2["id"];//table id of sender
    
    //getting the status of friendship
    
    $qr3 = mysqli_query($con,"select * from tbl6_friendlist where rqst_from_id='$rqstFromId' and rqst_to_id='$rqstToId' or rqst_from_id='$rqstToId' and rqst_to_id='$rqstFromId'");
    $r3 = mysqli_fetch_array($qr3);
    
    if($r3["status1"]==0 && $r3["status2"]==0)
    {
        echo "<a href='page6AddFriend.php?f=$visitorId' class='btn btn-info navbar-btn '>Add Friend</a>";
    }
    else if($r3["status1"]==1 && $r3["status2"]==0){
        echo "<a href='#' class='btn btn-info navbar-btn '>Friend Request Sent</a>";
    }
    else if($r3["status1"]==1 && $r3["status2"]==1){
        echo "<a href='#' class='btn btn-info navbar-btn '>Friends</a>";
    }
?>
</div>
    
   
</div>
    <!--Compiled and minified JS -->
    <script src="jquery/jquery-3.1.0.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>