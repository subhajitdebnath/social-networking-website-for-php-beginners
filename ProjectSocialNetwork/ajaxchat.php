<?php
    session_start();
    include_once 'connect.php';
    
    $Email = $_SESSION["emailid"];
    $qr = mysqli_query($con,"select * from tbl_registration where email = '$Email'");
    $r = mysqli_fetch_array($qr);
    $id = $r["id"];//table id of the user
    $msg=$_REQUEST['v'];
    $friendid=$_SESSION['frndid'];
    $qr4 = mysqli_query($con,"insert into chat values('','$friendid','$id','$msg','',now(),'','')");
    $qf = mysqli_query($con,"select * from tbl_registration where id = '$friendid'");
    $rf=  mysqli_fetch_array($qf);
?>
<form>
        <center>
            <h2><?=$rf['name']?></h2>
        </center>
        <ul style="list-style: none;">
            <?php
                $qr3 = mysqli_query($con,"SELECT * from chat where userto='$friendid' and userfrom='$id' or userto='$id' and userfrom='$friendid'");
                while($r3 = mysqli_fetch_array($qr3))
                {
            ?>
            <?php
                if($r3['userfrom']==$id){
            ?>
            <li style="text-align: right;padding-right: 750px;font-size: 20px;"><b><?php echo $r3['message']?><b></li>
            <?php
                }
                else{
            ?>
            <li style="color: blue;text-align: left;padding-left: 0px;font-size: 20px;"><?php echo $r3['message']?></li> 
            <?php
                }
                ?>
            <?php   
                }
            ?>
            </ul>
    </form>