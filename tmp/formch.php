<?php

$uname = $_POST["uname"];
$pwd = $_POST["pwd"];
$email = $_POST["email"];

echo " $uname - $pass - $email <br> <br>";

$servername="localhost";$username="root";
$password=""; $dbname="db1";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn-> connect_error)
{
	die("connection failed:".$conn->connect_error);	
}


$sql="UPDATE info SET pwd='sandy25'  Where uname='sandhya'" ;

$result = $conn->query($sql);

 if($row = $result->fetch_assoc())
  {
  	echo"Welcome - ".$row["uname"];
 }
 else
 {
 	echo"Invalid Username or Password....  ";
 }
		
$conn->close();



?>