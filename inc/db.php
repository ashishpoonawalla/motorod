<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "1_motorod";

// Create connection
//$conn = mysqli_connect($servername, $username, $password,$db);
$conn=new mysqli($servername, $username, $password,$db);	
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>