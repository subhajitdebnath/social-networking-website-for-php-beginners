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
<body style="background-image: url('image/background6.jpg');background-size: cover">
<div class="container"><br><br>                          
    
    <?php
    session_start();
    include_once 'connect.php';
    
    $Email = $_SESSION["emailid"];
    $qr = mysqli_query($con,"select * from tbl_registration where email = '$Email'");
    $r = mysqli_fetch_array($qr);
    $Id = $r["id"];//user's table id
    
include_once 'navbar.php';
?>

<div style="text-align: left;font-family: sans-serif">
    <?php
    
    $qr2 = mysqli_query($con,"select * from tbl6_friendlist where rqst_to_id='$Id' and status2='1' or rqst_from_id='$Id' and status2='1'");
    $rn = mysqli_num_rows($qr2);
    if($rn>0){
    while($r2 = mysqli_fetch_array($qr2)){
        if($r2['rqst_from_id'] == $Id){
            $qr3 = mysqli_query($con,"select * from tbl_registration where id='$r2[rqst_to_id]'");
           $r3 = mysqli_fetch_array($qr3);
        }else{
            $qr3 = mysqli_query($con,"select * from tbl_registration where id='$r2[rqst_from_id]'");
            $r3 = mysqli_fetch_array($qr3);
        }
        
        echo "<h3><img src='$r3[image]' style='height:100px;width:100px;'>  &nbsp";
        echo $r3["name"]."&nbsp;&nbsp;&nbsp";
        //echo "<a href='page5ProfileDetails.php?m=$r3[email]' class='btn btn-default navbar-btn '>View Profile</a>     ";
        echo "<a href='page18ChatDetails.php?m=$r3[id]' class='btn btn-primary navbar-btn '>Chat</a></h3>";
    }
    }
    else{
        echo "No Friends";
    }
    
    ?>
    
</div>
</div>
    <!--Compiled and minified JS -->
    <script src="jquery/jquery-3.1.0.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>