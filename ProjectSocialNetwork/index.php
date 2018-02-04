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
    
    
    
<!--    navbar        ---------------------->
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
    
    <a href="page1Register.php" class="btn btn-info navbar-btn ">Sign Up</a>
<ul class="nav navbar-nav">

</ul>
    <form class="navbar-form navbar-left" role="form" action="page2SignInacc.php" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email ID">
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter Password">
                        </div>
                        <button type="submit" class="btn btn-default">Sign In</button>
                    </form>
</div>
</nav>
    
    

</div>
    <!--Compiled and minified JS -->
    <script src="jquery/jquery-3.1.0.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>