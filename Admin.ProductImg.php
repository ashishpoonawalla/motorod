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

?>
<br><br>	<br>	
    
    <div class="mbr-section__container mbr-section__container--std-padding container" style="padding-top: 93px; padding-bottom: 93px;">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2" style="background-color: #ccc; " data-form-type="formoid">
                        <br>
						<div class="mbr-header mbr-header--center mbr-header--std-padding">
                            <h2 class="mbr-header__text">New Product Images</h2>
							<div class="mbr-buttons mbr-buttons--right"><a href="Admin.Products.php" >Back To Products</a></div>
                        </div>
						
						<?php
							//session_start();
							$pid = $_SESSION["pidIMG"];
							require('db.php');	
							$sql="SELECT * FROM products where product_id=$pid" ;
			
							$result = $conn->query($sql);
			
							if($row = $result->fetch_assoc())
			  				{
							  	
							  	$img1= $row['product_image'];
								$img2= $row['img2'];
								$img3= $row['img3'];
								$img4= $row['img4'];
							}
							
						?>
                        
						
						
<!-- Main Image1 ------------------------------------------ -->						
						
                        	
							<div class="form-group">
								<label for="exampleInputEmail1">Main Image</label><br>
							    <img alt="140x140" width="320px" src="assets/images/<?php echo $img1; ?>">
                                
                            </div>
							
                             <form action="Admin.ProductImg11.php"  method="post" enctype="multipart/form-data">

								    <div class="form-group">
								      
								      <input type="file" class="form-control" name="fileToUpload" id="fileToUpload"  onkeypress="unsetnameError(false);" >
								    </div>

								    <button type="submit" class="btn btn-primary">Upload Image</button>
								 
								     <br />						    
						     </form>                       
						<br>
						
						
<!-- Img 2 ------------------------------------------ -->						
						
                        	
							<div class="form-group">
								<label for="exampleInputEmail1">Image 2</label><br>
							    <img alt="140x140" width="150px" src="assets/images/<?php echo $img2; ?>">
                                
                            </div>
							
                             <form action="Admin.ProductImg22.php"  method="post" enctype="multipart/form-data">

								    <div class="form-group">
								      
								      <input type="file" class="form-control" name="fileToUpload" id="fileToUpload"  onkeypress="unsetnameError(false);" >
								    </div>

								    <button type="submit" class="btn btn-primary">Upload Image</button>
								 
								     <br />						    
						     </form>
						<br>						
<!-- Img 3 ------------------------------------------ -->						
						
                        	
							<div class="form-group">
								<label for="exampleInputEmail1">Image 2</label><br>
							    <img alt="140x140" width="150px" src="assets/images/<?php echo $img3; ?>">
                                
                            </div>
							
                             <form action="Admin.ProductImg33.php"  method="post" enctype="multipart/form-data">

								    <div class="form-group">
								      
								      <input type="file" class="form-control" name="fileToUpload" id="fileToUpload"  onkeypress="unsetnameError(false);" >
								    </div>

								    <button type="submit" class="btn btn-primary">Upload Image</button>
								 
								     <br />						    
						     </form>
						<br>						

<!-- Img 3 ------------------------------------------ -->						
						
                        	
							<div class="form-group">
								<label for="exampleInputEmail1">Image 2</label><br>
							    <img alt="140x140" width="150px" src="assets/images/<?php echo $img4; ?>">
                                
                            </div>
							
                             <form action="Admin.ProductImg44.php"  method="post" enctype="multipart/form-data">

								    <div class="form-group">
								      
								      <input type="file" class="form-control" name="fileToUpload" id="fileToUpload"  onkeypress="unsetnameError(false);" >
								    </div>

								    <button type="submit" class="btn btn-primary">Upload Image</button>
								 
								     <br />						    
						     </form>
						<br>						
							
						
						
						
						
                    </div>
                </div>
            </div>
        </div>
    </div>


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