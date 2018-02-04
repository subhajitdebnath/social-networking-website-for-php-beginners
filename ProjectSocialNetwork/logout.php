<?php

session_start();
session_destroy();
$_SESSION["emailid"] = '';
echo "<script>alert('Successfully Logged out')</script>";
echo "<script>window.location.href='index.php'</script>";

?>