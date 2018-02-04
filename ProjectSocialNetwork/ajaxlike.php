<?php
    session_start();
    include_once 'connect.php';
    
    $Email = $_SESSION["emailid"];
    $qr = mysqli_query($con,"select * from tbl_registration where email = '$Email'");
    $r = mysqli_fetch_array($qr);
    $id = $r["id"];//table id of the user
    $post_id=$_SESSION["post_id"];
    $qr4 = mysqli_query($con,"insert into likepost values('','$post_id','$id',now())");
    $qf = mysqli_query($con,"select * from likepost where post_id = '$post_id'");
    $rn= mysqli_num_rows($qf);
    $q11 = mysqli_query($con,"select * from likepost where mem_id = '$id' and post_id='$post_id'");
    $rn11=  mysqli_num_rows($q11);
    if($rn11==0){
?>
<div id="like" value='<?=$id?>' style="cursor:pointer; color:blue;font-size: 20px;">Like</div>
            <?php
            }
            else{
            ?>
    <div id="unlike" value='<?=$id?>' style="cursor:pointer; color:blue;font-size: 20px;">Unlike</div>
            <?php
            }
            ?>
    <div><?=$rn?> people like this</div>
    <script>window.location.href="page14PostIndividual.php?m=<?=$post_id?>"</script>