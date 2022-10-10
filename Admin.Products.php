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

<br><br><br><br><br><br>


<section class="mbr-section mbr-section--relative mbr-section--short-paddings" id="page9-msg-box2-0" style="background-color: rgb(255, 255, 255);">

    
<!-- Main Title ------------------------------------------ -->
    <div class="mbr-section__container mbr-section__container--isolated container" style="padding-top: 10px; padding-bottom: 0px;">
        <div class="row">
            <div class="mbr-box mbr-box--fixed mbr-box--adapted">
                <div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__right col-sm-3">
                    <div class="mbr-section__container">
                        <h3>PRODUCTS</h3>
                    </div>
                </div>
				
				<div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__left col-sm-7">
                    <div class="mbr-section__container">
                        <div class="mbr-header mbr-header--auto-align mbr-header--wysiwyg">
                            
							
							<form class="example" action="Admin.Products.php" method="GET" style="margin:auto;max-width:400px;">
  								<input type="text" style="border-color: #000; 16px;  " placeholder="Search Product.." name="search" class="form-control" >
  							</form>
							
									
                        </div>
                    </div>
                    
                </div>
				
				 <div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__right col-sm-2">
                    <div class="mbr-section__container">
                        <div class="mbr-buttons mbr-buttons--auto-align mbr-buttons--top mbr-buttons--left"><a class="mbr-buttons__btn btn btn-lg btn-success" href="Admin.Products_Cat.php">Add Product</a></div>
                    </div>
                </div>
				
				
                
            </div>
        </div>
		
    </div>



<!-- Product ------------------------------------------ -->
<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="index-features1-0" style="background-color: rgb(255, 255, 255);">
    
    
    <div class="mbr-section__container container mbr-section__container--std-top-padding" style="padding-top: 93px;">
        <div class="mbr-section__row row">
            
			
			<?php
			
			require('db.php');
			$sql1="SELECT * FROM products  " ;
			
			
			if (isset($_REQUEST['search'])){			
			
				$cid = $_REQUEST['search'];
			
				$sql1="SELECT * FROM products Where product_title LIKE '%$cid%' " ;
			}
			
			$result1 = $conn->query($sql1);

			
			 while($row1 = $result1->fetch_assoc())
			  {
			  	$pid1=$row1['product_id'];
			  	$img1=$row1['product_image'];
				$tit1=$row1['product_title'];
				$pri1=$row1['product_price'];

				
				?>
					
					
			<div class="mbr-section__col col-xs-12 col-md-3 col-sm-6">
                <div class="mbr-section__container mbr-section__container--center mbr-section__container--middle">
                    <figure class="mbr-figure"><a  target="_blank" href="Product.php?var=<?php echo $pid1; ?>"><img src="assets/images/<?php echo $img1; ?>" style="height: 150px;" class="mbr-figure__img"></a></figure>
                </div>
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                        <h3 class="mbr-header__text"><a  target="_blank" href="Product.php?var=<?php echo $pid1; ?>"><?php echo $tit1; ?></a></h3>
                    </div>
                </div>
				
			
				<br><br>
            </div>
					
					
					<?php
					
				}
				
				?>
			
			
			
		
            
        </div>
    </div>
</section>


<br><br><br>

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