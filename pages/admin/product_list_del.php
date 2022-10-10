<?php
	session_start();

$pid1 = $_REQUEST['pid1'];


require('db.php');
		    
			$sql="Delete from products where product_id=$pid1" ;
			
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
       