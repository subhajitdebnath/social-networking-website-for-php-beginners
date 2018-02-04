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
    
    
    
<!--    navbar        ----------------------->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse"
data-target="#example-navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
    <a class="navbar-brand" href="#" class="active"><img class="img-responsive" style="height: 30px;" src="image/Capture.JPG"></a>
</div>
<div class="collapse navbar-collapse" id="example-navbar-collapse">
    <a href="index.php" class="btn btn-info navbar-btn ">Sign In</a>
    <a href="page1Register.php" class="btn btn-default navbar-btn ">Sign Up</a>
<ul class="nav navbar-nav">

</ul>
</div>
</nav>
    
<div>
    <center>
        <h2>Register with <img style="height:35px;" src="image/Capture.JPG"></h2>
    <p>Its damn easy. Just fill the below form, hit <button class="btn btn-primary">Sign Up</button> and you are done !!</p></center>
</div>
    
<form class="form-horizontal" style="padding-top: 0px;" role="form" action="page1Registeracc.php" method="post" onsubmit="return validation()" enctype="multipart/form-data">
<div class="form-group">
<label for ="name" class="col-sm-2 control-label">Name</label>
<div class="col-sm-8">
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
</div>
<span id="vName" style="color:red"></span>
</div>

<div class="form-group">
<label for ="cont" class="col-sm-2 control-label">Contact</label>
<div class="col-sm-8">
    <input type="text" class="form-control" id="cont" name="contact" placeholder="Enter Phone Number">
</div>
<span id="vCont" style="color:red"></span>
</div>

<div class="form-group">
<label for ="email" class="col-sm-2 control-label">Email</label>
<div class="col-sm-8">
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email ID">
</div>
<span id="vEmail" style="color:red"></span>
</div>

<div class="form-group">
<label for ="pass" class="col-sm-2 control-label">Password</label>
<div class="col-sm-8">
    <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter Password" onkeyup="ProgressBar()">
</div>
<span id="vPass" style="color:red"></span><progress id="progress" value="0" max ="100" style="display: none">
</div>

<div class="form-group">
<label for ="confirmpass" class="col-sm-2 control-label">Confirm Password</label>
<div class="col-sm-8">
<input type="password" class="form-control" id="confirmpass" placeholder="ReEnter Password">
</div>
<span id="vConPass" style="color:red"></span>
</div>
    
<div class="form-group">
<label  class="col-sm-2 control-label">Upload Profile Picture</label>
<div class="col-sm-8">
<div class="checkbox">
    <input type="file" name="pic">
</div>
</div>
</div>

<div class="form-group">
<label  class="col-sm-2 control-label">Gender</label>
<div class="col-sm-8">
<div class="radio">
<label><input type="radio" name = "gk" value = "M">Male</label>
<label><input type="radio" name = "gk" value = "F">Female</label>
<label><input type="radio" name = "gk" value = "O">Others</label>
</div><span id="vGen" style="color:red"></span>
</div>
</div>

<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<button type="submit" class="btn btn-primary">Sign Up</button>
<button type="reset" class="btn btn-primary">Reset</button>
</div>
</div>
</form>
</div>
    <!--Compiled and minified JS -->
    <script src="jquery/jquery-3.1.0.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>