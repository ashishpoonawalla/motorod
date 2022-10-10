<?php
	session_start();

$pid1 = $_REQUEST['pid1'];


require('db.php');
		    
			$sql="Update products SET status1='Added' where product_id=$pid1" ;
			
			if ($conn->query($sql) === TRUE) {
					
					$last_id = $conn->insert_id;
				
					echo "Success";
				   
			}	
			else
			{
				echo "Failed";
			}
	header("Location: products.php");

					
?>
       