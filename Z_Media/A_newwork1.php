<?php

$un = $_POST["username"];
$ti = $_POST["title"];
$de = $_POST["details"];
$dt = $_POST["date"];

echo " $var  <br> <br>";

$servername="localhost";$username="root";
$password=""; $dbname="media";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn-> connect_error)
{
	die("connection failed:".$conn->connect_error);	
}


$sql="INSERT into worksheet (username, worktitle, details, status, completiondate) values('$un','$ti','$de','Pending','$dt') " ;

if ($conn->query($sql) === TRUE) {
    echo "Record Update successfully";
	
	
} else {
    echo "Error Inserting record: " . $conn->error;
}

		
$conn->close();


header('Location: E_worksheet.php');

?>