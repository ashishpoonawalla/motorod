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

include('menu2.php');

?>
<br><br>	<br>	
    
    <div class="mbr-section__container mbr-section__container--std-padding container" style="padding-top: 93px; padding-bottom: 93px;">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2" style="background-color: #ccc; " data-form-type="formoid">
                        <br>
						<div class="mbr-header mbr-header--center mbr-header--std-padding">
                            <h2 class="mbr-header__text">New Product</h2>
							<div class="mbr-buttons mbr-buttons--right"><a href="Seller.Products.php" >Back To Products</a></div>
                        </div>
						
						
                        
                        <form action="Seller.ProductAddCode.php" method="post" data-form-title="Signup Seller">
                            <!--
							<div class="form-group">
                                <input type="text" class="form-control" name="sku" required="" placeholder="SKU*" data-form-field="Name">
                            </div>
							-->
							
							<div class="form-group">
                                <input type="text" class="form-control" name="title" required="" placeholder="Product Name*">
                            </div>
							
                            <div class="form-group">
								<input  type="number" class="form-control" name="price" size="5" maxlength="5" style="width:100%; " required="" placeholder="Product Price*" >
                            </div>
							
							<div class="form-group">
                            <select class="form-control" name="brand" required="" placeholder="Full Name*">
								<?php
				
								require('db.php');								
								$sql1="SELECT * FROM brands ORDER BY brand_title  " ;								
								$result1 = $conn->query($sql1);
								
								 while($row1 = $result1->fetch_assoc())
								 {
								  	$id=$row1['brand_id'];
									$brand=$row1['brand_title'];
									echo "<option value='$id'>$brand</option>";									
								 }
									
							    ?>
								
                            </select>							
							</div>
							
							<div class="form-group">
                            <select class="form-control" name="category" required="" placeholder="Full Name*">
								<?php
				
								require('db.php');
								
								$sql1="SELECT * FROM categories ORDER BY cat_title  " ;
								
								$result1 = $conn->query($sql1);

								
								 while($row1 = $result1->fetch_assoc())
								 {
								  	$id=$row1['cat_id'];
									$cat=$row1['cat_title'];
									echo "<option value='$id'>$cat</option>";									
								 }
									
							    ?>
								
                            </select>
							
							</div>							
							
							<div class="form-group">
                            <select class="form-control" name="keyward" required="" placeholder="Keyward">
								<option value='-'>-</option>
								<option value='Best Seller'>Best Seller</option>
								<option value='New Release'>New Release</option>
								<option value='Today Deal'>Today Deal</option>
								
                            </select>
							
							</div>
															
							<div class="form-group">
                                <textarea class="form-control" name="desc" rows="6" placeholder="Product Description*" required="" data-form-field="Message"></textarea>
                            </div>
										
							
                            <div class="mbr-buttons mbr-buttons--right"><button type="submit" class="mbr-buttons__btn btn btn-lg btn-warning">NEXT - ></button></div>
                        </form>
						
						
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
  <!--[if lte IE 9]>
    <script src="assets/jquery-placeholder/jquery.placeholder.min.js"></script>
  <![endif]-->
  <script src="assets/mobirise/js/script.js"></script>
 <!--
  <script src="assets/formoid/formoid.min.js"></script>
  -->
  
</body>
</html>