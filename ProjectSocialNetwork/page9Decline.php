<?php

    session_start();
    include_once 'connect.php';
    
    $Email = $_SESSION["emailid"];
    $qr = mysqli_query($con,"select * from tbl_registration where email = '$Email'");
    $r = mysqli_fetch_array($qr);
    $Id = $r["id"];//user's table id
    
    $Fid = $_REQUEST["f"];//friend's table id
    //getting the name of the friend
    $qr2 = mysqli_query($con,"select name from tbl_registration where id = '$Fid'");
    $r2 = mysqli_fetch_array($qr2);
    
    $qr3 = mysqli_query($con,"delete from tbl6_friendlist where rqst_to_id='$Id' and rqst_from_id='$Fid'");
    if($qr3){
        echo "<script>alert('Friend Request Declined $r2[name]')</script>";
        echo "<script>window.location.href='page7FriendRequest.php'</script>";
    }
    else{
        echo "<script>alert('Error Occured')</script>";
        echo "<script>window.location.href='page7FriendRequest.php'</script>";
    }

?>