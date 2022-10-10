<?php

				
	    		$uname = ($_POST['email']);
        		$pass = ($_POST['password']);
								
								
				require('db.php');
		
				$sql="SELECT * FROM seller_info WHERE username='$uname' AND password='$pass' AND status1='Admin' " ;
				$result = $conn->query($sql);

				 if($row = $result->fetch_assoc())
				  {
				  					
					session_start();
					$_SESSION["uname"] = $uname;					
					$_SESSION["StoreNM"] = $row["store_name"];
					$_SESSION["GST"]=$row["gst_num"];					
					$_SESSION["full_name"] = $row["full_name"];
					$_SESSION["city"] = $row["city"];
				    $sts = $row["status"];
					
					
					//$conn->close();
				    header('Location: admin_dash.php');
				
				} else {
					//$conn->close();
					header('Location: admin_login.php?var=Invalid Username or Password');
				}

						
				$conn->close();

				

?>