<?php

				
	    		$uname = ($_POST['email']);
        		$pass = ($_POST['password']);
								
								
				require('db.php');
		
				$sql="SELECT * FROM seller_info WHERE username='$uname' AND password='$pass' " ;
				$result = $conn->query($sql);

				 if($row = $result->fetch_assoc())
				  {
				  					
					session_start();
					$_SESSION["uname"] = $uname;					
					$_SESSION["StoreNM"] = $row["store_name"];
					$_SESSION["GST"]=$row["gst_num"];					
					$_SESSION["full_name"] = $row["full_name"];
					$_SESSION["city"] = $row["city"];
				
					echo $_SESSION["city"];
					
					//$conn->close();
				    header('Location: Seller_dash.php');
				
				} else {
					//$conn->close();
					header('Location: Seller.Login.php?var=Invalid Username or Password');
				}

						
				$conn->close();

				

?>