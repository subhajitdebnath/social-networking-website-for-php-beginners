<?php

include_once 'connect.php';

session_start();
$Email = $_SESSION["emailid"];
$qr = mysqli_query($con,"select * from tbl_registration where email = '$Email'");
$r = mysqli_fetch_array($qr);
$id = $r["id"];//table id of the user

//insertion values
$post = $_REQUEST["post"];
//inserting into table...
$qr = mysqli_query($con,"insert into tbl7_posts values ('','$post','$id',now())");
if($qr)
    {
        echo "<script>alert('Successfully Posted')</script>";
        echo "<script>window.location.href='page12timeline.php'</script>";
    }
    else 
    {
        echo "<script>alert('Failed.Please try Again.')</script>";
        echo "<script>window.location.href='page11CreatePost.php'</script>";
    }


?>