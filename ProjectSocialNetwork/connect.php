<?php

// $con = mysql_connect('localhost', 'root', '');
// mysql_select_db('project1', $con);

$servername = "localhost";
$username = "root";
$password = "";
$database = "project1";

// Create connection
$con = new mysqli($servername, $username, $password, $database);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?>