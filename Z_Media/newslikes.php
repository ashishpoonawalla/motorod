<?php

$var = $_REQUEST["var"];
$lik = $_REQUEST["likes"];
$lik++;

echo " $var  <br> <br>";

$servername="localhost";$username="root";
$password=""; $dbname="media";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn-> connect_error)
{
	die("connection failed:".$conn->connect_error);	
}

$sql="Update news SET likes='$lik'  Where nid='$var'" ;

if ($conn->query($sql) === TRUE) {
    echo "Record Update successfully";
	
	
} else {
    echo "Error Inserting record: " . $conn->error;
}

		
$conn->close();


header('Location: News.php?var='.$var);

?>