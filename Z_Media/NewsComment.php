<?php

$nm = $_POST["name"];
$nid = $_POST["nid"];
$cmt = $_POST["comment"];


echo " $var  <br> <br>";

$servername="localhost";$username="root";
$password=""; $dbname="media";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn-> connect_error)
{
	die("connection failed:".$conn->connect_error);	
}

$sql="INSERT INTO comments (Name,comment,nid) values('$nm','$cmt','$nid')";

if ($conn->query($sql) === TRUE) {
    echo "Record Insert successfully";
	
	
} else {
    echo "Error Inserting record: " . $conn->error;
}

		
$conn->close();


header('Location: News.php?var='.$nid);

?>