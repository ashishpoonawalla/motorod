<?php
	session_start();
$var = $_REQUEST['var'];
$var1 = $_REQUEST['var1'];
$var2 = $_REQUEST['var2'];
$pid1 = $_REQUEST['pid1'];
$pri1 = $_REQUEST['pri1'];


$un23 = $_SESSION["uname"];

//echo "$var - $var1 - $var2 - $pid1 - $pri1 - $un23";


require('db.php');
		    
			$sql="INSERT INTO product_seller( product_id, username, rate, instock) Values($pid1,'$un23',$pri1,1) " ;
			
			if ($conn->query($sql) === TRUE) {
					
					$last_id = $conn->insert_id;
				
				//	echo "Success";
				   
			}	
			else
			{
				//echo "Failed";
			}

 header("Location: product_list.php?var=$var&var1=$var1&var2=$var2");
					
?>
       