<?php

$uname = $_POST["uname"];
$pass = $_POST["pass"];

echo " $uname - $pass <br> <br>";

$servername="localhost";$username="root";
$password=""; $dbname="media22";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn-> connect_error)
{
	die("connection failed:".$conn->connect_error);	
}


$sql="SELECT * FROM userinfo22 WHERE uname='$uname' AND pass='$pass' " ;
$result = $conn->query($sql);

 if($row = $result->fetch_assoc())
  {
  	echo"Welcome - ".$row["name"];
 }
 else
 {
 	echo"Invalid Username or Password....  ";
 }
		
$conn->close();



?>