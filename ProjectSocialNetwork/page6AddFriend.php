<?php

session_start();
include_once 'connect.php';
    //getting both ids from email id
$rqstFrom = $_SESSION["emailid"];
$rqstTo = $_REQUEST["f"];
$qr = mysqli_query($con,"select id from tbl_registration where email = '$rqstFrom'");
$r = mysqli_fetch_array($qr);
$rqstFromId = $r["id"];//table id of sender

$qr1 = mysqli_query($con,"select id from tbl_registration where email = '$rqstTo'");
$r1 = mysqli_fetch_array($qr1);
$rqstToId = $r1["id"];//table id of receiver

$qr2 = mysqli_query($con,"insert into tbl6_friendlist values('','$rqstFromId','$rqstToId','1','0')");
if($qr2){
    echo "<script>alert('Request Sent')</script>";
    echo "<script>window.location.href='page5ProfileDetails.php?m=$rqstTo'</script>";
}
else{
    echo "<script>alert('Technical error occured')</script>";
    echo "<script>window.location.href='page5ProfileDetails.php'</script>";
}


?>