<!DOCTYPE html>
<html>
<head>
<title>Bootstrap 101 Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<!--Compiled and minified CSS -->
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

<link href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet">
<script src="jquery/jquery-3.1.0.min.js"></script>
<script>
$(document).ready(function(){
$("#btn").click(function(){
var id=$("#msg").val();
if(id==""){
    alert("write something first");
    return false;
}
//alert(id);
$.post("ajaxchat.php",{v:id},function(data,status){
$("#b").html(data);
$("#msg").val('');
});
});
});
</script>
</head>
<body style="background-image: url('image/background4.jpg');background-size: cover">
<div class="container"><br><br>                          
    
    <?php
    session_start();
    include_once 'connect.php';
    
    $Email = $_SESSION["emailid"];
    $qr = mysqli_query($con,"select * from tbl_registration where email = '$Email'");
    $r = mysqli_fetch_array($qr);
    $id = $r["id"];//table id of the user
    $friendid=$_REQUEST['m'];
    $_SESSION['frndid']=$friendid;
    $qf = mysqli_query($con,"select * from tbl_registration where id = '$friendid'");
    $rf=  mysqli_fetch_array($qf);
    
    
include_once 'navbar.php';
?>
<div id="b">
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
            <li style=";text-align: right;padding-right: 750px;font-size: 20px;"><b><?php echo $r3['message']?><b></li>
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
</div>
     <textarea name="msg" id="msg" rows="3" cols="50"></textarea><input type="button" id="btn" value="send">
    <!--Compiled and minified JS -->
    <script src="jquery/jquery-3.1.0.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>