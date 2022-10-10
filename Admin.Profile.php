<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v3.6.4, # -->
  <title>motorod.in</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.6.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/LogoMakr_9qkixk.png" type="image/x-icon">
  <meta name="description" content="">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/socicon/css/socicon.min.css">
  <link rel="stylesheet" href="assets/mobirise/css/style.css">
  <link rel="stylesheet" href="assets/mobirise-slider/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  <link rel="stylesheet" href="side_menu.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<body>


<!-- Menu ------------------------------------------ -->
<?php

include('menuA.php');
session_start();
?>

<br>

<section class="engine"><a rel="external" href="#">free bootstrap web page maker software download</a></section><section class="mbr-section mbr-section--relative mbr-section--fixed-size mbr-after-navbar" id="page5-form1-0" style="background-color: rgb(239, 239, 239);">
    
    <div class="mbr-section__container mbr-section__container--std-padding container" style="padding-top: 13px; padding-bottom: 10px;">
        <div class="row">


 <!-- User Details ---------------------------------- -->
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-11 col-sm-offset-1" style="background-color: #aaa; " data-form-type="formoid">
                        <br>
						<div class="mbr-header mbr-header--center mbr-header--std-padding">
                            <h2 class="mbr-header__text">Admin Details</h2>
                        </div>
						<?php 
						
						
						
						    if(isset($_POST['email']))   {

       							$email = ($_POST['email']);
        						$pass = ($_POST['password']);
								
								$fname = ($_POST['f_name']);
								$lname = ($_POST['l_name']);
								$ph = ($_POST['phone']);
								$add = ($_POST['address']);
								$city = ($_POST['city']);
								$pin = ($_POST['pin']);
								
							require('db.php');
		        $sql ="";
				//$sql="INSERT INTO user_info(email, password, first_name,last_name,mobile,address,city,pin) Values('$email','$pass','$fname','$lname','$ph','$add','$city','$pin') " ;
			

				if ($conn->query($sql) === TRUE) {
				   ?>
				   
				   <div data-form-alert="true">
                            <div data-form-alert-success="true">Profile Updated!</div><br><br><br><br><br><br><br><br><br><br>
                        </div>
				   <?php
				} else {
					?>
					<div data-form-alert="true">
                            <div data-form-alert-warning="true">Some Error when creating account!</div><br><br><br><br><br><br><br>
                        </div>
						<?php
						
				    echo "Error Inserting record: " . $conn->error;
				}

						
				$conn->close();

					}else{
						
					
						
						?>
						
						
						
						<?php                         
				//session_start();		
				$uname = $_SESSION["uname"];
        		require('db.php');
		
				$sql="SELECT * FROM seller_info WHERE username='$uname' " ;
				$result = $conn->query($sql);

				 if($row = $result->fetch_assoc())
				  {
				  	$email = $row["username"] ;
					$store_name = $row["store_name"] ;
					$gst_num = $row["gst_num"] ;
					$full_name = $row["full_name"];
					$phone = $row["phone"];
					$address = $row["address"];
					$city = $row["city"];
					$pin = $row["pin"];
					
					
					
				  	}
						?>
                        
                        <form action="#" method="post" data-form-title="Signup Seller">
                             <div class="form-group">
                                <input type="email" class="form-control" name="email" required=""  value = "<?php echo $email; ?>" placeholder="Email/Username*">
                            </div>
                            
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="gst_num" required="" placeholder="Full Name*" value = "<?php echo $full_name; ?>" data-form-field="Name">
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" name="phone" required="" placeholder="Phone*" value = "<?php echo $phone; ?>" data-form-field="Phone">
                            </div>
							
							
							
                            <div class="mbr-buttons mbr-buttons--right"><button type="submit" class="mbr-buttons__btn btn btn-lg btn-warning">Update Details</button></div>
							<br><br>
                        </form>
						
						<?php
						}
						?>
                    </div>
                </div>
            </div>
<!-- Change Password ---------------------------------- -->
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2" style="background-color: #aaa; " data-form-type="formoid">
                        <br>
						<div class="mbr-header mbr-header--center mbr-header--std-padding">
                            <h2 class="mbr-header__text">Change Password</h2>
                        </div>
						<?php 
						
						
						
						    if(isset($_POST['email']))   {

       							$email = ($_POST['email']);
        						$pass = ($_POST['password']);
								
								$fname = ($_POST['f_name']);
								$lname = ($_POST['l_name']);
								$ph = ($_POST['phone']);
								$add = ($_POST['address']);
								$city = ($_POST['city']);
								$pin = ($_POST['pin']);
								
							require('db.php');
		
				$sql="INSERT INTO user_info(email, password, first_name,last_name,mobile,address,city,pin) Values('$email','$pass','$fname','$lname','$ph','$add','$city','$pin') " ;
			//$sql="INSERT INTO seller_info('username', 'password', 'store_name' ) Values('$email','$pass','$snm')" ;

				if ($conn->query($sql) === TRUE) {
				   ?>
				   
				   <div data-form-alert="true">
                            <div data-form-alert-success="true">Thanks for signing with us!</div><br><br><br><br><br><br><br><br><br><br>
                        </div>
				   <?php
				} else {
					?>
					<div data-form-alert="true">
                            <div data-form-alert-warning="true">Some Error when creating account!</div><br><br><br><br><br><br><br>
                        </div>
						<?php
						
				    echo "Error Inserting record: " . $conn->error;
				}

						
				$conn->close();

					}else{
						
					
						
						?>
						
                        
                        <form action="#" method="post" data-form-title="Signup Seller">
                             <div class="form-group">
                                <input type="password" class="form-control" name="oldpass" required="" placeholder="Old Password*">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="newpass1" required="" placeholder="New Password*" >
                            </div>
							 <div class="form-group">
                                <input type="password" class="form-control" name="newpass2" required="" placeholder="Retype New Password*" >
                            </div>
							
                            
							
                            <div class="mbr-buttons mbr-buttons--right"><button type="submit" class="mbr-buttons__btn btn btn-lg btn-warning">Change Password</button></div>
							<br>
                        </form>
						<br>
						<?php
						}
						?>
                    </div>
					
                </div>
            </div>
 			
			
			

        </div>
    </div>
<br><br>
</section>

<!-- Footer Link ---------------------------------- -->
<?php 

include('footer.php'); 

?>



  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/mobirise/js/script.js"></script>
  
  
</body>
</html>