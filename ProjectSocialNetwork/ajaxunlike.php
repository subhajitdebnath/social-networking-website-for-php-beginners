<?php
    session_start();
    include_once 'connect.php';
    
    $Email = $_SESSION["emailid"];
    $qr = mysqli_query($con,"select * from tbl_registration where email = '$Email'");
    $r = mysqli_fetch_array($qr);
    $id = $r["id"];//table id of the user
    echo $post_id=$_SESSION["post_id"];
    $qr4 = mysql_query($con,"delete from likepost where mem_id = '$id' and post_id='$post_id'");
    $qf = mysqli_query($con,"select * from likepost where post_id = '$post_id'");
    $rn= mysqli_num_rows($qf);
    $q11 = mysqli_query($con,"select * from likepost where mem_id = '$id' and post_id='$post_id'");
    $rn11=  mysqli_num_rows($q11);

?>