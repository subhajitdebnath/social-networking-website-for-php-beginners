<?php
    //session_start();
    //include_once 'connect.php';
    
    $Email9 = $_SESSION["emailid"];
    $qr9 = mysqli_query($con,"select * from tbl_registration where email = '$Email9'");
    $r9 = mysqli_fetch_array($qr9);
?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="opacity: 1.0">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse"
data-target="#example-navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
    <a class="navbar-brand" href="page12timeline.php" class="active"><img class="img-responsive" style="height: 30px;" src="image/Capture.JPG"></a>
</div>
<div class="collapse navbar-collapse" id="example-navbar-collapse">
    
<ul class="nav navbar-nav">
    <li><a href="page3Profile.php"><?php echo $r9["name"];?></a></li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">More<span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
            <li><a href="inbox.php">Inbox</a></li>
            <li><a href="page7FriendRequest.php">Friend Requests</a></li>
            <!--<li><a href="#">Notifications</a></li>
            
            <li><a href="#">Settings</a></li>-->
            
            
        </ul>
    </li>
</ul>
    <form class="navbar-form navbar-right" role="form" action="page17search.php" method="get">
        <div class="form-group">
            <input type="text" class="form-control" id="search" name="search" placeholder="search for a person">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
    </form>
    <a href="Page4AllMember.php" class="btn btn-info navbar-btn">Find friends</a>
    <a href="logout.php" class="btn btn-info navbar-btn ">Logout</a>
</div>
    
    
    
    
    
</nav>