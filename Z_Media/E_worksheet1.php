<?php

$var = $_REQUEST["var"];
$sta = $_REQUEST["status"];

echo " $var  <br> <br>";

$servername="localhost";$username="root";
$password=""; $dbname="media";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn-> connect_error)
{
	die("connection failed:".$conn->connect_error);	
}

if ($sta=="Pending")
	$sta="Complete";
else
	$sta="Pending";

$sql="Update worksheet SET status='$sta'  Where wid='$var'" ;

if ($conn->query($sql) === TRUE) {
    echo "Record Update successfully";
	
	
} else {
    echo "Error Inserting record: " . $conn->error;
}

		
$conn->close();


header('Location: E_worksheet.php');

?>