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
<script src="jquery/jquery-3.1.0.min.js"></script>

<script>
    $(document).ready(function(){
        $("#like").click(function(){
            $.post("ajaxlike.php",function(data,status){
            $("#like_no").html(data);
            });
        }); 
        
        $("#unlike").click(function(){
            $.post("ajaxunlike.php",function(data,status){
                //alert(data);
            $("#like_no").html(data);
            window.location.href='page14PostIndividual.php?m='+data;
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
include_once 'navbar.php';
?>

<form style="padding-top: 50px;" action="page15Commentacc.php" method="post">
        
            <?php
            $post_id = $_REQUEST['m'];
            $_SESSION["post_id"] = $post_id;
//getting the post
            $qr1 = mysqli_query($con,"select * from tbl7_posts where id = $post_id");
            $r1 = mysqli_fetch_array($qr1);
            $mem = $r1["mem_id"];
            $qr2 = mysqli_query($con,"select tbl_registration.name from tbl_registration,tbl7_posts where tbl_registration.id = tbl7_posts.mem_id and tbl_registration.id = $mem");
            $r2 = mysqli_fetch_array($qr2);
            echo "<p style='font-size: 20px;font-family: sans-serif'><span style='color:blue'>".$r2['name']."</span><br>".$r1['value']."</p><br>";
            $q11 = mysqli_query($con,"select * from likepost where mem_id = '$id' and post_id='$post_id'");
            $rn11=  mysqli_num_rows($q11);
            $qf = mysqli_query($con,"select * from likepost where post_id = '$post_id'");
            $rn= mysqli_num_rows($qf);
            if($rn11==0){
            ?>
    <span id="like_no">        
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
    </span>
            <?php
            echo "All Comments..........";
//getting the comments
            //$qr3 = mysqli_query("select tbl_registration.name from tbl_registration,tbl3_comment where tbl_registration.id = tbl3_comment.mem_id and tbl_registration.id = $mem");

            $qr4 = mysqli_query($con,"select * from tbl3_comment where post_id = $post_id");
            while ($r3 = mysqli_fetch_array($qr4))
            {
                $mem_id = $r3["mem_id"];
                $qr3 = mysqli_query($con,"select tbl_registration.name from tbl_registration,tbl3_comment where tbl_registration.id = tbl3_comment.mem_id and tbl_registration.id = $mem_id");
                $r4 = mysqli_fetch_array($qr3);
                echo "<p style='font-size: 15px;font-family: sans-serif'><span style='color:blue'>".$r4['name']."</span><br>".$r3['value']."<br></p>";

            }
            
            
            ?>
            <textarea style="height: 50px; width: 630px; margin: 0px;" name="comment"></textarea>
            <input type="submit" value="Comment">
        </form>
    
   
</div>
    <!--Compiled and minified JS -->
    
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>