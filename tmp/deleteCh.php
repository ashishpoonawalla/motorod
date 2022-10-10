<?php

$un = $_POST["uname"];

echo " $un  <br> <br>";

$servername="localhost";$username="root";
$password=""; $dbname="media";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn-> connect_error)
{
	die("connection failed:".$conn->connect_error);	
}


$sql="Delete from userinfo Where usernm='$un'" ;

if ($conn->query($sql) === TRUE) {
    echo "Record Deleted successfully";
} else {
    echo "Error Inserting record: " . $conn->error;
}

		
$conn->close();




?>