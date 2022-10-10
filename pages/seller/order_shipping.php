<?php
	session_start();
$var = $_REQUEST['var'];

$un23 = $_SESSION["uname"];

//echo "$var - $var1 - $var2 - $pid1 - $pri1 - $un23";


require('db.php');
		    
			$sql="UPDATE orders_detail SET status1='Shipping' where username='$un23' AND order_id=$var" ;
			
			if ($conn->query($sql) === TRUE) {
					
					$last_id = $conn->insert_id;
				
					echo "Success";
				   
			}	
			else
			{
				echo "Failed";
			}
	header("Location: orders.php");

 
					
?>
       