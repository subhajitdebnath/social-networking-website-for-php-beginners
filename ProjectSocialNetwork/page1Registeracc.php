<?php
include_once 'connect.php';

$Name = $_REQUEST["name"];
$Contact = $_REQUEST["contact"];
$Email = $_REQUEST["email"];
$Password = $_REQUEST["pass"];
$Gender = $_REQUEST["gk"];

//img upload
$p = $_FILES["pic"];
$nm = $_FILES["pic"]["name"];
$path = "image/".$nm;
$tmp = $_FILES["pic"]["tmp_name"];
move_uploaded_file($tmp, $path);



$qr = mysql_query("select * from tbl_registration where email='$Email'");
$r = mysql_fetch_array($qr);
$e = $r["email"];
echo $e;
if($e != $Email)
{
    $qr1 = mysql_query("insert into tbl_registration values('','$Name','$Contact','$Email','$Password','$Gender','$path')");
    if($qr1)
    {
        echo "<script>alert('Successfully Registered')</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
    else 
    {
        echo "<script>alert('Registration Failed.Please try Again.')</script>";
        echo "<script>window.location.href='page1register.php'</script>";
    }
}
else 
{
    echo "<script>alert('Email ID Already Exists')</script>";
    echo "<script>window.location.href='page1register.php'</script>";
}
?>