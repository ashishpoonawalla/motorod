<?php

$un = $_POST["uname"];
$pw = $_POST["pass"];
$nm = $_POST["nm"];

echo " $un - $pw -$nm <br> <br>";

$servername="localhost";$username="root";
$password=""; $dbname="media";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn-> connect_error)
{
	die("connection failed:".$conn->connect_error);	
}


$sql="INSERT INTO userinfo Values('$un','$pw','$nm') " ;

if ($conn->query($sql) === TRUE) {
    echo "Record Inserted successfully";
} else {
    echo "Error Inserting record: " . $conn->error;
}

		
$conn->close();



?>