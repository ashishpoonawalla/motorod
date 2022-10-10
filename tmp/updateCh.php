<?php

$un = $_POST["uname"];
$pw = $_POST["pass"];
$nm = $_POST["nm"];

echo " $un  <br> <br>";

$servername="localhost";$username="root";
$password=""; $dbname="media";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn-> connect_error)
{
	die("connection failed:".$conn->connect_error);	
}


$sql="Update userinfo SET pword='$pw' , name='$nm' Where usernm='$un'" ;

if ($conn->query($sql) === TRUE) {
    echo "Record Update successfully";
} else {
    echo "Error Inserting record: " . $conn->error;
}

		
$conn->close();




?>