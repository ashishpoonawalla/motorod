<?php
	session_start();
$var = $_REQUEST['var'];
$var1 = $_REQUEST['var1'];
$var2 = $_REQUEST['var2'];
$psid = $_REQUEST['psid'];
$price = $_REQUEST['price'];
$stock = $_REQUEST['stock'];

$un23 = $_SESSION["uname"];

//echo "$var - $var1 - $var2 - $pid1 - $pri1 - $un23";


require('db.php');
		    
			$sql="UPDATE product_seller SET rate=$price, instock=$stock where psid=$psid" ;
			
			if ($conn->query($sql) === TRUE) {
					
					$last_id = $conn->insert_id;
				
				//	echo "Success";
				   
			}	
			else
			{
				//echo "Failed";
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
       