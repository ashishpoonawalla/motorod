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

	
//header('Location: Login.php');


?>


<br><br>






<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="checkout-form1-0" style="background-color: rgb(204, 204, 204);">
    
    <div class="mbr-section__container mbr-section__container--std-padding container" style="padding-top: 93px; padding-bottom: 93px;">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    
					<div class="col-sm-6 col-sm-offset-0" data-form-type="formoid">
                        <div class="mbr-header mbr-header--center mbr-header--std-padding">
                            <h2 class="mbr-header__text">ACTION</h2>
                        </div>
						<div class="mbr-header mbr-header--center mbr-header--std-padding">
                            <div class="mbr-buttons mbr-buttons--auto-align mbr-buttons--top mbr-buttons--left"><a class="mbr-buttons__btn btn btn-lg btn-default" href="#">BLOCK SELLER</a></div>
                        </div>
						<div class="mbr-header mbr-header--center mbr-header--std-padding">
                            <div class="mbr-buttons mbr-buttons--auto-align mbr-buttons--top mbr-buttons--left"><a class="mbr-buttons__btn btn btn-lg btn-default" href="#">UNBLOCK SELLER</a></div>
                        </div>
					</div>
					
					<div class="col-sm-6 col-sm-offset-0" data-form-type="formoid">
                        <div class="mbr-header mbr-header--center mbr-header--std-padding">
                            <h2 class="mbr-header__text">User Details</h2>
                        </div>
<?php                         
				//session_start();		
				$id = $_REQUEST["var"];
        		require('db.php');
		
				$sql="SELECT * FROM seller_info WHERE username='$id' " ;
				$result = $conn->query($sql);

				 if($row = $result->fetch_assoc())
				  {
				  	
					$uid = $row["username"] ;
					$fname = $row["store_name"];
					$lname = $row["gst_num"];
					$fullname = $row["full_name"];
					
					$mobile = $row["phone"];
					$address = $row["address"];
					$city = $row["city"];
					$pin = $row["pin"];
					
					
					
				  	}
?>					
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="f_name" required="" placeholder="First Name*" value = "<?php echo $fname; ?>" data-form-field="Name" disabled>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="l_name" required="" placeholder="Last Name*"  value = "<?php echo $fullname; ?>"  data-form-field="Name" disabled>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" name="phone" required="" placeholder="Phone*" value = "<?php echo $mobile; ?>" data-form-field="Phone" disabled>
                            </div>
							
							<div class="form-group">
                                <textarea class="form-control" name="address" rows="7" placeholder="Address*" required="" data-form-field="Message" disabled><?php echo $address; ?></textarea>
                            </div>
							<div class="form-group">
                                <input type="text" class="form-control" name="city" required="" placeholder="City*" value = "<?php echo $city; ?>"data-form-field="Phone" disabled>
                            </div>
							
							<div class="form-group">
                                <input type="text" class="form-control" name="pin" required="" placeholder="Pin*" value = "<?php echo $pin; ?>"data-form-field="Phone" disabled>
                            </div>
							
                            <div class="mbr-buttons mbr-buttons--right"><a href="Login1.php"><button type="submit" class="mbr-buttons__btn btn btn-lg btn-Default">Update Seller Details</button></a></div>
							<br>
                       
                    </div>
					
				
					
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Footer Link ---------------------------------- -->
<?php 

include('footer.php'); 

?>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/social-likes/social-likes.js"></script>
  <!--[if lte IE 9]>
    <script src="assets/jquery-placeholder/jquery.placeholder.min.js"></script>
  <![endif]-->
  <script src="assets/mobirise/js/script.js"></script>
 <!-- <script src="assets/formoid/formoid.min.js"></script> -->
  
  
</body>
</html>