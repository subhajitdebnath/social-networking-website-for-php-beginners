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
    
    $Email = $_SESSION["emailid"];
    $qr = mysqli_query($con,"select * from tbl_registration where email = '$Email'");
    $r = mysqli_fetch_array($qr);
    $Id = $r["id"];//table id
    
    include_once 'navbar.php';
    ?>

<br><br>
<div style="text-align: left;font-family: sans-serif">
    <?php
    
    $qr2 = mysqli_query($con,"select * from tbl6_friendlist where rqst_to_id='$Id' and status1='1' and status2='0'");
    $rn = mysqli_num_rows($qr2);
    if($rn>0){
    while($r2 = mysqli_fetch_array($qr2)){
        $qr3 = mysqli_query($con,"select * from tbl_registration where id='$r2[rqst_from_id]'");
        $r3 = mysqli_fetch_array($qr3);
        echo "<h3><img src='$r3[image]' style='height:100px;width:100px;'>  &nbsp";
        echo $r3["name"]." has sent you a friend request.</h3>";
        echo "<a href='page8Accept.php?f=$r3[id]' class='btn btn-primary navbar-btn '>Accept</a>     ";
        echo "<a href='page9Decline.php?f=$r3[id]' class='btn btn-danger navbar-btn '>Decline</a>";
    }
    }
    else{
        echo "No Pending Friend Requests";
    }
    
    ?>
    
</div>
    
   
</div>
    <!--Compiled and minified JS -->
    <script src="jquery/jquery-3.1.0.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>