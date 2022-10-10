 <?php 
				session_start();		
				$msg ="";
				echo $_SESSION["var3"];
				
				
						    if(isset($_POST['email']))   {

								$uname = ($_POST['email']);
        						$pass = ($_POST['password']);
								
								echo "$uname - $pass";
							require('db.php');
		
				$sql="SELECT * FROM user_info WHERE email='$uname' AND password='$pass' " ;
				$result = $conn->query($sql);

				 if($row = $result->fetch_assoc())
				  {
				  		echo " = $uname - $pass";			
					
					$_SESSION["uname"] = $uname;
					
					$_SESSION["uid"] = $row["user_id"];
					$_SESSION["fname"]=$row["first_name"];
					$_SESSION["lname"]=$row["last_name"];
					
					//$_SESSION["uimage"] = $row["image"];
					$_SESSION["mobile"] = $row["mobile"];
					
					$msg="";
					$conn->close();
					
					if (isset($_SESSION["var3"]) ){
						  header('Location: checkout.php');
						exit; 
					} else {
						  header('Location: User.Profile.php');
						exit; 
					}
				  
				
				} else {
					
					$msg = "";
					$conn->close();	
					header('Location: Login.php?var=Invalid Username or Password');
				}
				
				//header('Location: index.php');
				}
?>