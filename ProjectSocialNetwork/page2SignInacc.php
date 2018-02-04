<?php
session_start();
include_once 'connect.php';

$Email = $_REQUEST["email"];
$Password = $_REQUEST["pass"];

$qr = mysqli_query($con,"select * from tbl_registration where email = '$Email' and password = '$Password'");
$r = mysqli_num_rows($qr);
if($r == 1){
    $_SESSION["emailid"] = $Email;
    echo "<script>alert('Successfully Logged In')</script>";
    echo "<script>window.location.href='page3Profile.php'</script>";
}
else{
    echo "<script>alert('Incorrect Email or Password')</script>";
    echo "<script>window.location.href='page2SignIn.php'</script>";
}
    

?>