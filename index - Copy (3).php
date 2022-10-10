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

include_once('menu2.php');

?>

<br><br><br><br>

<!-- Slider ------------------------------------------ -->
<section class="engine"><a rel="external" href="#">mobile web generator</a></section><section class="mbr-slider mbr-section mbr-section--no-padding carousel slide" data-ride="carousel" data-wrap="true" data-interval="5000" id="index-slider-0" style="background-color: rgb(255, 255, 255);">
    <div class="mbr-section__container">
        <div>
            <ol class="carousel-indicators">
                <li data-app-prevent-settings="" data-target="#index-slider-0" data-slide-to="0" class="active"></li><li data-app-prevent-settings="" data-target="#index-slider-0" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#index-slider-0" class="" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
			
				<div class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--bg-adapted item dark center mbr-section--full-height" style="background-image: url(assets/images/slide2.jpg);  height:450px;">
                    <div class="mbr-box__magnet mbr-box__magnet--center-center mbr-box__magnet--sm-padding mbr-after-navbar">
                                            
                        <div class=" container">
                            
                            <div class="row">
                                <div class=" col-md-8 col-md-offset-2">  

                                <div class="mbr-hero">
                                    

                                    
                                </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			
				<div class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--bg-adapted item dark center mbr-section--full-height" style="background-image: url(assets/images/slide3.jpg); height:450px;">
                    <div class="mbr-box__magnet mbr-box__magnet--center-center mbr-box__magnet--sm-padding mbr-after-navbar">
                                            
                        <div class=" container">
                            
                            <div class="row">
                                <div class=" col-md-8 col-md-offset-2">  

                                <div class="mbr-hero">
                                    

                                    
                                </div>
                                <!-- <div class="mbr-buttons btn-inverse mbr-buttons--center"> <a class="mbr-buttons__btn btn btn-lg btn-default" href="#">More Details</a></div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
                <div class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--bg-adapted item dark center mbr-section--full-height active" style="background-image: url(assets/images/slide1.jpg); height:450px; ">
                    <div class="mbr-box__magnet mbr-box__magnet--center-center mbr-box__magnet--sm-padding mbr-after-navbar">
                                            
                        <div class=" container">
                            
                            <div class="row">
                                <div class=" col-md-8 col-md-offset-2">  

                                <div class="mbr-hero">
                                    

                                    
                                </div>
                                <!-- <div class="mbr-buttons btn-inverse mbr-buttons--center"> <a class="mbr-buttons__btn btn btn-lg btn-default" href="#">More Details</a></div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
				
            </div>
            
			<!--
            <a data-app-prevent-settings="" class="left carousel-control" role="button" data-slide="prev" href="#index-slider-0">
                <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a data-app-prevent-settings="" class="right carousel-control" role="button" data-slide="next" href="#index-slider-0">
                <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
			-->
        </div>
    </div>
</section>


<!-- Best Seller Titile ------------------------------------------ -->
<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="index-social-buttons1-0" style="background-color: rgb(255, 255, 255);">
    

    <div class="mbr-section__container container">
        <div class="mbr-header mbr-header--inline row" style="padding-top: 13.6px; padding-bottom: 27.2px;">
            <div class="col-sm-4">
                <h3 class="mbr-header__text">Best Seller</h3>
            </div>
            <div class="mbr-social-icons col-sm-8">
                <div class="mbr-social-likes social-likes_style-1" data-counters="false">
                    
                    
                    
                </div>
            </div>
        </div>
		

    </div>
</section>


<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="index-features1-0" style="background-color: rgb(255, 255, 255);">
    
    
    <div class="mbr-section__container container mbr-section__container--std-top-padding" style="padding-top: 23px;">
    
	
	    <div class="mbr-section__row row">
            
			
			<?php
			
			require('db.php');
			
			$sql1="SELECT * FROM products Where product_keywords='Best Seller' " ;
			
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
                    <figure class="mbr-figure"><a target="_blank" href="Product.php?var=<?php echo $pid1; ?>"><img src="assets/images/<?php echo $img1; ?>" style="height: 150px;" class="mbr-figure__img"></a></figure>
                </div>
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                        <h3 class="mbr-header__text"><a style="font-size: 18px; color: #000000; text-decoration: none;"target="_blank" href="Product.php?var=<?php echo $pid1; ?>"><?php echo $tit1; ?></a></h3>
                    </div>
                <br>
                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                        <h3 class="mbr-header__text">Rs. <?php echo $pri1; ?></h3>
                    </div>
                </div>
				
               
               
            </div>
					
					
					<?php
					
				}
				
				?>
			
			
			
		
            
        </div>
    </div>
</section>

<!-- New Release Title ------------------------------------------ -->
<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="index-social-buttons1-1" style="background-color: rgb(255, 255, 255);">
    

    <div class="mbr-section__container container">
        <div class="mbr-header mbr-header--inline row" style="padding-top: 40.8px; padding-bottom: 40.8px;">
            <div class="col-sm-4">
                <h3 class="mbr-header__text">New Release</h3>
            </div>
            <div class="mbr-social-icons col-sm-8">
                <div class="mbr-social-likes social-likes_style-1" data-counters="true">
                    
                    
                    
                </div>
            </div>
        </div>
		
    </div>
</section>

<!-- New Release ------------------------------------------ -->
<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="index-features1-0" style="background-color: rgb(255, 255, 255);">
    
    
    <div class="mbr-section__container container mbr-section__container--std-top-padding" style="padding-top: 23px;">
        <div class="mbr-section__row row">
            
			
			<?php
			
			require('db.php');
			
			$sql1="SELECT * FROM products Where product_keywords='New Release' " ;
			
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
                    <figure class="mbr-figure"><a target="_blank" href="Product.php?var=<?php echo $pid1; ?>"><img src="assets/images/<?php echo $img1; ?>" style="height: 150px;" class="mbr-figure__img"></a></figure>
                </div>
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                        <h3 class="mbr-header__text"><a style="font-size: 18px; color: #000000; text-decoration: none;" target="_blank" href="Product.php?var=<?php echo $pid1; ?>"><?php echo $tit1; ?></a></h3>
                    </div>
                	<br>
                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                        <h3 class="mbr-header__text">Rs. <?php echo $pri1; ?></h3>
                    </div>
                </div>
				
               
               
            </div>
					
					
					<?php
					
				}
				
				?>
			
			
		
            
			
			
			
			
			
			
			
			
			
			
		
            
        </div>
    </div>
</section>

<!-- Today's Deal Title ---------------------------------- -->
<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="index-social-buttons1-2" style="background-color: rgb(255, 255, 255);">
    

    <div class="mbr-section__container container">
        <div class="mbr-header mbr-header--inline row" style="padding-top: 40.8px; padding-bottom: 40.8px;">
            <div class="col-sm-4">
                <h3 class="mbr-header__text">Today's Deal</h3>
            </div>
            <div class="mbr-social-icons col-sm-8">
                <div class="mbr-social-likes social-likes_style-1" data-counters="true">
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Today's Deal   ---------------------------------- -->
<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="index-features1-0" style="background-color: rgb(255, 255, 255);">
    
    
    <div class="mbr-section__container container mbr-section__container--std-top-padding" style="padding-top: 23px;">
        <div class="mbr-section__row row">
            
			
			<?php
			
			require('db.php');
			
			$sql1="SELECT * FROM products Where product_keywords='Today Deal' " ;
			
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
                    <figure class="mbr-figure"><a target="_blank" href="Product.php?var=<?php echo $pid1; ?>"><img src="assets/images/<?php echo $img1; ?>" style="height: 150px;" class="mbr-figure__img"></a></figure>
                </div>
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                        <h3 class="mbr-header__text"><a style="font-size: 18px; color: #000000; text-decoration: none;" target="_blank" href="Product.php?var=<?php echo $pid1; ?>"><?php echo $tit1; ?></a></h3>
                    </div>
                <br>
                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                        <h3 class="mbr-header__text">Rs. <?php echo $pri1; ?></h3>
                    </div>
                </div>
				
               
               
            </div>
					
					
					<?php
					
				}
				
				?>
			
			
			
			
			
		
            
        </div>
    </div>
</section>


<br><br>
<!-- Footer Link ---------------------------------- -->
<?php 

require('footer.php'); 

?>




  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/social-likes/social-likes.js"></script>
  <script src="assets/mobirise/js/script.js"></script>
  
<!-- mmenu scripts -->
		<script src="css/mmenu.polyfills.js"></script>
		<script src="css/mmenu.js"></script>
		<script>
			new Mmenu( document.querySelector( '#menu' ));

			document.addEventListener( 'click', function( evnt ) {
				var anchor = evnt.target.closest( 'a[href^="#/"]' );
				if ( anchor ) {
					alert('Thank you for clicking, but that\'s a demo link.');
					evnt.preventDefault();
				}
			});
		</script>
  
</body>
</html>