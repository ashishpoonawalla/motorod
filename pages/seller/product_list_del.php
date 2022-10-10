<?php
	session_start();
$var = $_REQUEST['var'];
$var1 = $_REQUEST['var1'];
$var2 = $_REQUEST['var2'];
$pid1 = $_REQUEST['pid1'];
$pri1 = $_REQUEST['pri1'];


$un23 = $_SESSION["uname"];

echo "$var - $var1 - $var2 - $pid1 - $pri1 - $un23";


require('db.php');
		    
			$sql="Delete from product_seller where product_id=$pid1 and username='$un23'" ;
			
			if ($conn->query($sql) === TRUE) {
					
					$last_id = $conn->insert_id;
				
					echo "Success";
				   
			}	
			else
			{
				echo "Failed";
			}
if($_SESSION["add1"] == "products")
{
	header("Location: products.php?var=$var&var1=$var1&var2=$var2");
}
else
{
	header("Location: product_list.php?var=$var&var1=$var1&var2=$var2");
}
					
?>
       