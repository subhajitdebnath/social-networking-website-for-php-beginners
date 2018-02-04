<?php
session_start();
include_once 'connect.php';

$Comment = $_REQUEST["comment"];
$post_id = $_SESSION["post_id"];
$Email = $_SESSION["emailid"];
$qr = mysqli_query($con,"select * from tbl_registration where email = '$Email'");
$r = mysqli_fetch_array($qr);
$id = $r["id"];//table id of the user

$qr1 = mysqli_query($con,"insert into tbl3_comment values('','$Comment','$post_id','$id')");
if($qr1)
{
    //echo "<script>alert('Comment Added')</script>";
    echo "<script>window.location.href='page14PostIndividual.php?m=$post_id'</script>";
}
else 
{
    //echo "<script>alert('Failed.Please try Again.')</script>";
    echo "<script>window.location.href='page14PostIndividual.php?m=$post_id'</script>";
}
?>