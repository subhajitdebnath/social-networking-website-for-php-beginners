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
<form action="page13Comment.php" method="post">
        <center>
            <h2>My Posts</h2>
        </center>
            <ol>
            <?php
            
            $qr1 = mysqli_query($con,"select * from tbl7_posts where mem_id='$id' order by created_on desc");
            while($r1 = mysqli_fetch_array($qr1))
            {
            ?>
            
            <li style="text-decoration:none;font-size: 20px;font-family: sans-serif;background-color: gainsboro">
                <?php echo "<a href = 'page14PostIndividual.php?m=$r1[id]' >".$r1["value"]."</a>"; ?></li><br>
            
            <?php   
            }
            ?>
            </ol>
        </form>
    
   
</div>
    <!--Compiled and minified JS -->
    <script src="jquery/jquery-3.1.0.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>