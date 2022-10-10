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

<br><br><br><br><br><br><br>


<section class="mbr-section mbr-section--relative mbr-section--short-paddings" id="page9-msg-box2-0" style="background-color: rgb(255, 255, 255);">


    
<!-- Main Title BIKE ------------------------------------------ -->
    <div class="mbr-section__container mbr-section__container--isolated container" style="padding-top: 30px; padding-bottom: 0px;">
        <div class="row">
            <div class="mbr-box mbr-box--fixed mbr-box--adapted">
                <div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__right col-sm-3">
                    <div class="mbr-section__container">
                        <h3>BIKE</h3>
                    </div>
                </div>
				
				<div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__left col-sm-7">
                    <div class="mbr-section__container">
                        <div class="mbr-header mbr-header--auto-align mbr-header--wysiwyg">
                            
							
							
									
                        </div>
                    </div>
                    
                </div>
				
				 <div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__right col-sm-2">
                    <div class="mbr-section__container">
                        <div class="mbr-buttons mbr-buttons--auto-align mbr-buttons--top mbr-buttons--left"><a class="mbr-buttons__btn btn btn-lg btn-success" href="#">Add Category</a></div>
                    </div>
                </div>
				
				
                
            </div>
        </div>
		
    </div>


<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="index-features1-0" style="background-color: rgb(255, 255, 255);">
    
    
    <div class="mbr-section__container container mbr-section__container--std-top-padding" style="padding-top: 93px;">
        <div class="mbr-section__row row">
            
			
			<?php
			
			require('db.php');
			$sql1="SELECT * FROM categories Where main_cat=1 " ;
			
			
			
			$result1 = $conn->query($sql1);

			
			 while($row1 = $result1->fetch_assoc())
			  {
			  	$pid1=$row1['cat_id'];
				$tit1=$row1['cat_title'];
				$main1=$row1['main_cat'];

				
				?>
					
					
			<div class="mbr-section__col col-xs-12 col-md-3 col-sm-6">
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                        <h3 class="mbr-header__text"><a  target="_blank" href="Product.php?var=<?php echo $pid1; ?>"><?php echo $tit1; ?></a></h3>
                    </div>
                </div>
				
				
               <!--
                <div class="mbr-section__container mbr-section__container--last" style="padding-bottom: 93px;">
                    <div class="mbr-buttons mbr-buttons--center"><a href="Product.php?var=<?php echo $pid1; ?>" class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-default">View Product</a></div>
                </div>
				-->
				<br><br>
            </div>
					
					
					<?php
					
				}
				
				?>
			
			
			
		
            
        </div>
    </div>
</section>




    
<!-- Main Title CAR ------------------------------------------ -->
    <div class="mbr-section__container mbr-section__container--isolated container" style="padding-top: 30px; padding-bottom: 0px;">
        <div class="row">
            <div class="mbr-box mbr-box--fixed mbr-box--adapted">
                <div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__right col-sm-3">
                    <div class="mbr-section__container">
                        <h3>CAR</h3>
                    </div>
                </div>
				
				<div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__left col-sm-7">
                    <div class="mbr-section__container">
                        <div class="mbr-header mbr-header--auto-align mbr-header--wysiwyg">
                        </div>
                    </div>
                    
                </div>
				
				 <div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__right col-sm-2">
                    <div class="mbr-section__container">
                        <div class="mbr-buttons mbr-buttons--auto-align mbr-buttons--top mbr-buttons--left"><a class="mbr-buttons__btn btn btn-lg btn-success" href="#">Add Category</a></div>
                    </div>
                </div>
				
				
                
            </div>
        </div>
		
    </div>


<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="index-features1-0" style="background-color: rgb(255, 255, 255);">
    
    
    <div class="mbr-section__container container mbr-section__container--std-top-padding" style="padding-top: 93px;">
        <div class="mbr-section__row row">
            
			
			<?php
			
			require('db.php');
			$sql1="SELECT * FROM categories Where main_cat=2 " ;
			
			
			
			$result1 = $conn->query($sql1);

			
			 while($row1 = $result1->fetch_assoc())
			  {
			  	$pid1=$row1['cat_id'];
				$tit1=$row1['cat_title'];
				$main1=$row1['main_cat'];

				
				?>
					
					
			<div class="mbr-section__col col-xs-12 col-md-3 col-sm-6">
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                        <h3 class="mbr-header__text"><a  target="_blank" href="Product.php?var=<?php echo $pid1; ?>"><?php echo $tit1; ?></a></h3>
                    </div>
                </div>
				
				
               <!--
                <div class="mbr-section__container mbr-section__container--last" style="padding-bottom: 93px;">
                    <div class="mbr-buttons mbr-buttons--center"><a href="Product.php?var=<?php echo $pid1; ?>" class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-default">View Product</a></div>
                </div>
				-->
				<br><br>
            </div>
					
					
					<?php
					
				}
				
				?>
			
			
			
		
            
        </div>
    </div>
</section>



    
<!-- Main Title Scooter ------------------------------------------ -->
    <div class="mbr-section__container mbr-section__container--isolated container" style="padding-top: 30px; padding-bottom: 0px;">
        <div class="row">
            <div class="mbr-box mbr-box--fixed mbr-box--adapted">
                <div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__right col-sm-3">
                    <div class="mbr-section__container">
                        <h3>SCOOTER</h3>
                    </div>
                </div>
				
				<div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__left col-sm-7">
                    <div class="mbr-section__container">
                        <div class="mbr-header mbr-header--auto-align mbr-header--wysiwyg">
                        </div>
                    </div>
                    
                </div>
				
				 <div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__right col-sm-2">
                    <div class="mbr-section__container">
                        <div class="mbr-buttons mbr-buttons--auto-align mbr-buttons--top mbr-buttons--left"><a class="mbr-buttons__btn btn btn-lg btn-success" href="#">Add Category</a></div>
                    </div>
                </div>
				
				
                
            </div>
        </div>
		
    </div>


<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="index-features1-0" style="background-color: rgb(255, 255, 255);">
    
    
    <div class="mbr-section__container container mbr-section__container--std-top-padding" style="padding-top: 93px;">
        <div class="mbr-section__row row">
            
			
			<?php
			
			require('db.php');
			$sql1="SELECT * FROM categories Where main_cat=3 " ;
			
			
			
			$result1 = $conn->query($sql1);

			
			 while($row1 = $result1->fetch_assoc())
			  {
			  	$pid1=$row1['cat_id'];
				$tit1=$row1['cat_title'];
				$main1=$row1['main_cat'];

				
				?>
					
					
			<div class="mbr-section__col col-xs-12 col-md-3 col-sm-6">
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                        <h3 class="mbr-header__text"><a  target="_blank" href="Product.php?var=<?php echo $pid1; ?>"><?php echo $tit1; ?></a></h3>
                    </div>
                </div>
				
				
               <!--
                <div class="mbr-section__container mbr-section__container--last" style="padding-bottom: 93px;">
                    <div class="mbr-buttons mbr-buttons--center"><a href="Product.php?var=<?php echo $pid1; ?>" class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-default">View Product</a></div>
                </div>
				-->
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



<!-- Main Title Automotive Services ------------------------------------------ -->
    <div class="mbr-section__container mbr-section__container--isolated container" style="padding-top: 30px; padding-bottom: 0px;">
        <div class="row">
            <div class="mbr-box mbr-box--fixed mbr-box--adapted">
                <div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__right col-sm-5">
                    <div class="mbr-section__container">
                        <h3>Automotive Services</h3>
                    </div>
                </div>
				
				<div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__left col-sm-5">
                    <div class="mbr-section__container">
                        <div class="mbr-header mbr-header--auto-align mbr-header--wysiwyg">
                        </div>
                    </div>
                    
                </div>
				
				 <div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__right col-sm-2">
                    <div class="mbr-section__container">
                        <div class="mbr-buttons mbr-buttons--auto-align mbr-buttons--top mbr-buttons--left"><a class="mbr-buttons__btn btn btn-lg btn-success" href="#">Add Category</a></div>
                    </div>
                </div>
				
				
                
            </div>
        </div>
		
    </div>


<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="index-features1-0" style="background-color: rgb(255, 255, 255);">
    
    
    <div class="mbr-section__container container mbr-section__container--std-top-padding" style="padding-top: 93px;">
        <div class="mbr-section__row row">
            
			
			<?php
			
			require('db.php');
			$sql1="SELECT * FROM categories Where main_cat=4 " ;
			
			
			
			$result1 = $conn->query($sql1);

			
			 while($row1 = $result1->fetch_assoc())
			  {
			  	$pid1=$row1['cat_id'];
				$tit1=$row1['cat_title'];
				$main1=$row1['main_cat'];

				
				?>
					
					
			<div class="mbr-section__col col-xs-12 col-md-3 col-sm-6">
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                        <h3 class="mbr-header__text"><a  target="_blank" href="Product.php?var=<?php echo $pid1; ?>"><?php echo $tit1; ?></a></h3>
                    </div>
                </div>
				
				
               <!--
                <div class="mbr-section__container mbr-section__container--last" style="padding-bottom: 93px;">
                    <div class="mbr-buttons mbr-buttons--center"><a href="Product.php?var=<?php echo $pid1; ?>" class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-default">View Product</a></div>
                </div>
				-->
				<br><br>
            </div>
					
					
					<?php
					
				}
				
				?>
			
			
			
		
            
        </div>
    </div>
</section>



<!-- Care ------------------------------------------ -->
    <div class="mbr-section__container mbr-section__container--isolated container" style="padding-top: 30px; padding-bottom: 0px;">
        <div class="row">
            <div class="mbr-box mbr-box--fixed mbr-box--adapted">
                <div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__right col-sm-5">
                    <div class="mbr-section__container">
                        <h3>Care</h3>
                    </div>
                </div>
				
				<div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__left col-sm-5">
                    <div class="mbr-section__container">
                        <div class="mbr-header mbr-header--auto-align mbr-header--wysiwyg">
                        </div>
                    </div>
                    
                </div>
				
				 <div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__right col-sm-2">
                    <div class="mbr-section__container">
                        <div class="mbr-buttons mbr-buttons--auto-align mbr-buttons--top mbr-buttons--left"><a class="mbr-buttons__btn btn btn-lg btn-success" href="#">Add Category</a></div>
                    </div>
                </div>
				
				
                
            </div>
        </div>
		
    </div>


<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="index-features1-0" style="background-color: rgb(255, 255, 255);">
    
    
    <div class="mbr-section__container container mbr-section__container--std-top-padding" style="padding-top: 93px;">
        <div class="mbr-section__row row">
            
			
			<?php
			
			require('db.php');
			$sql1="SELECT * FROM categories Where main_cat=5 " ;
			
			
			
			$result1 = $conn->query($sql1);

			
			 while($row1 = $result1->fetch_assoc())
			  {
			  	$pid1=$row1['cat_id'];
				$tit1=$row1['cat_title'];
				$main1=$row1['main_cat'];

				
				?>
					
					
			<div class="mbr-section__col col-xs-12 col-md-3 col-sm-6">
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                        <h3 class="mbr-header__text"><a  target="_blank" href="Product.php?var=<?php echo $pid1; ?>"><?php echo $tit1; ?></a></h3>
                    </div>
                </div>
				
				
               <!--
                <div class="mbr-section__container mbr-section__container--last" style="padding-bottom: 93px;">
                    <div class="mbr-buttons mbr-buttons--center"><a href="Product.php?var=<?php echo $pid1; ?>" class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-default">View Product</a></div>
                </div>
				-->
				<br><br>
            </div>
					
					
					<?php
					
				}
				
				?>
			
			
			
		
            
        </div>
    </div>
</section>




<!-- Electronics ------------------------------------------ -->
    <div class="mbr-section__container mbr-section__container--isolated container" style="padding-top: 30px; padding-bottom: 0px;">
        <div class="row">
            <div class="mbr-box mbr-box--fixed mbr-box--adapted">
                <div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__right col-sm-5">
                    <div class="mbr-section__container">
                        <h3>Electronics</h3>
                    </div>
                </div>
				
				<div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__left col-sm-5">
                    <div class="mbr-section__container">
                        <div class="mbr-header mbr-header--auto-align mbr-header--wysiwyg">
                        </div>
                    </div>
                    
                </div>
				
				 <div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__right col-sm-2">
                    <div class="mbr-section__container">
                        <div class="mbr-buttons mbr-buttons--auto-align mbr-buttons--top mbr-buttons--left"><a class="mbr-buttons__btn btn btn-lg btn-success" href="#">Add Category</a></div>
                    </div>
                </div>
				
				
                
            </div>
        </div>
		
    </div>


<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="index-features1-0" style="background-color: rgb(255, 255, 255);">
    
    
    <div class="mbr-section__container container mbr-section__container--std-top-padding" style="padding-top: 93px;">
        <div class="mbr-section__row row">
            
			
			<?php
			
			require('db.php');
			$sql1="SELECT * FROM categories Where main_cat=6 " ;
			
			
			
			$result1 = $conn->query($sql1);

			
			 while($row1 = $result1->fetch_assoc())
			  {
			  	$pid1=$row1['cat_id'];
				$tit1=$row1['cat_title'];
				$main1=$row1['main_cat'];

				
				?>
					
					
			<div class="mbr-section__col col-xs-12 col-md-3 col-sm-6">
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                        <h3 class="mbr-header__text"><a  target="_blank" href="Product.php?var=<?php echo $pid1; ?>"><?php echo $tit1; ?></a></h3>
                    </div>
                </div>
				
				
               <!--
                <div class="mbr-section__container mbr-section__container--last" style="padding-bottom: 93px;">
                    <div class="mbr-buttons mbr-buttons--center"><a href="Product.php?var=<?php echo $pid1; ?>" class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-default">View Product</a></div>
                </div>
				-->
				<br><br>
            </div>
					
					
					<?php
					
				}
				
				?>
			
			
			
		
            
        </div>
    </div>
</section>



<!-- Gift & Merchandise ------------------------------------------ -->
    <div class="mbr-section__container mbr-section__container--isolated container" style="padding-top: 30px; padding-bottom: 0px;">
        <div class="row">
            <div class="mbr-box mbr-box--fixed mbr-box--adapted">
                <div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__right col-sm-5">
                    <div class="mbr-section__container">
                        <h3>Gift & Merchandise</h3>
                    </div>
                </div>
				
				<div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__left col-sm-5">
                    <div class="mbr-section__container">
                        <div class="mbr-header mbr-header--auto-align mbr-header--wysiwyg">
                        </div>
                    </div>
                    
                </div>
				
				 <div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__right col-sm-2">
                    <div class="mbr-section__container">
                        <div class="mbr-buttons mbr-buttons--auto-align mbr-buttons--top mbr-buttons--left"><a class="mbr-buttons__btn btn btn-lg btn-success" href="#">Add Category</a></div>
                    </div>
                </div>
				
				
                
            </div>
        </div>
		
    </div>


<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="index-features1-0" style="background-color: rgb(255, 255, 255);">
    
    
    <div class="mbr-section__container container mbr-section__container--std-top-padding" style="padding-top: 93px;">
        <div class="mbr-section__row row">
            
			
			<?php
			
			require('db.php');
			$sql1="SELECT * FROM categories Where main_cat=7 " ;
			
			
			
			$result1 = $conn->query($sql1);

			
			 while($row1 = $result1->fetch_assoc())
			  {
			  	$pid1=$row1['cat_id'];
				$tit1=$row1['cat_title'];
				$main1=$row1['main_cat'];

				
				?>
					
					
			<div class="mbr-section__col col-xs-12 col-md-3 col-sm-6">
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                        <h3 class="mbr-header__text"><a  target="_blank" href="Product.php?var=<?php echo $pid1; ?>"><?php echo $tit1; ?></a></h3>
                    </div>
                </div>
				
				
               <!--
                <div class="mbr-section__container mbr-section__container--last" style="padding-bottom: 93px;">
                    <div class="mbr-buttons mbr-buttons--center"><a href="Product.php?var=<?php echo $pid1; ?>" class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-default">View Product</a></div>
                </div>
				-->
				<br><br>
            </div>
					
					
					<?php
					
				}
				
				?>
			
			
			
		
            
        </div>
    </div>
</section>


<!-- Riding Gears ------------------------------------------ -->
    <div class="mbr-section__container mbr-section__container--isolated container" style="padding-top: 30px; padding-bottom: 0px;">
        <div class="row">
            <div class="mbr-box mbr-box--fixed mbr-box--adapted">
                <div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__right col-sm-5">
                    <div class="mbr-section__container">
                        <h3>Riding Gears</h3>
                    </div>
                </div>
				
				<div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__left col-sm-5">
                    <div class="mbr-section__container">
                        <div class="mbr-header mbr-header--auto-align mbr-header--wysiwyg">
                        </div>
                    </div>
                    
                </div>
				
				 <div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__right col-sm-2">
                    <div class="mbr-section__container">
                        <div class="mbr-buttons mbr-buttons--auto-align mbr-buttons--top mbr-buttons--left"><a class="mbr-buttons__btn btn btn-lg btn-success" href="#">Add Category</a></div>
                    </div>
                </div>
				
				
                
            </div>
        </div>
		
    </div>


<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="index-features1-0" style="background-color: rgb(255, 255, 255);">
    
    
    <div class="mbr-section__container container mbr-section__container--std-top-padding" style="padding-top: 93px;">
        <div class="mbr-section__row row">
            
			
			<?php
			
			require('db.php');
			$sql1="SELECT * FROM categories Where main_cat=8 " ;
			
			
			
			$result1 = $conn->query($sql1);

			
			 while($row1 = $result1->fetch_assoc())
			  {
			  	$pid1=$row1['cat_id'];
				$tit1=$row1['cat_title'];
				$main1=$row1['main_cat'];

				
				?>
					
					
			<div class="mbr-section__col col-xs-12 col-md-3 col-sm-6">
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                        <h3 class="mbr-header__text"><a  target="_blank" href="Product.php?var=<?php echo $pid1; ?>"><?php echo $tit1; ?></a></h3>
                    </div>
                </div>
				
				
               <!--
                <div class="mbr-section__container mbr-section__container--last" style="padding-bottom: 93px;">
                    <div class="mbr-buttons mbr-buttons--center"><a href="Product.php?var=<?php echo $pid1; ?>" class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-default">View Product</a></div>
                </div>
				-->
				<br><br>
            </div>
					
					
					<?php
					
				}
				
				?>
			
			
			
		
            
        </div>
    </div>
</section>



<!-- Safety ------------------------------------------ -->
    <div class="mbr-section__container mbr-section__container--isolated container" style="padding-top: 30px; padding-bottom: 0px;">
        <div class="row">
            <div class="mbr-box mbr-box--fixed mbr-box--adapted">
                <div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__right col-sm-5">
                    <div class="mbr-section__container">
                        <h3>Safety</h3>
                    </div>
                </div>
				
				<div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__left col-sm-5">
                    <div class="mbr-section__container">
                        <div class="mbr-header mbr-header--auto-align mbr-header--wysiwyg">
                        </div>
                    </div>
                    
                </div>
				
				 <div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__right col-sm-2">
                    <div class="mbr-section__container">
                        <div class="mbr-buttons mbr-buttons--auto-align mbr-buttons--top mbr-buttons--left"><a class="mbr-buttons__btn btn btn-lg btn-success" href="#">Add Category</a></div>
                    </div>
                </div>
				
				
                
            </div>
        </div>
		
    </div>


<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="index-features1-0" style="background-color: rgb(255, 255, 255);">
    
    
    <div class="mbr-section__container container mbr-section__container--std-top-padding" style="padding-top: 93px;">
        <div class="mbr-section__row row">
            
			
			<?php
			
			require('db.php');
			$sql1="SELECT * FROM categories Where main_cat=9 " ;
			
			
			
			$result1 = $conn->query($sql1);

			
			 while($row1 = $result1->fetch_assoc())
			  {
			  	$pid1=$row1['cat_id'];
				$tit1=$row1['cat_title'];
				$main1=$row1['main_cat'];

				
				?>
					
					
			<div class="mbr-section__col col-xs-12 col-md-3 col-sm-6">
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                        <h3 class="mbr-header__text"><a  target="_blank" href="Product.php?var=<?php echo $pid1; ?>"><?php echo $tit1; ?></a></h3>
                    </div>
                </div>
				
				
               <!--
                <div class="mbr-section__container mbr-section__container--last" style="padding-bottom: 93px;">
                    <div class="mbr-buttons mbr-buttons--center"><a href="Product.php?var=<?php echo $pid1; ?>" class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-default">View Product</a></div>
                </div>
				-->
				<br><br>
            </div>
					
					
					<?php
					
				}
				
				?>
			
			
			
		
            
        </div>
    </div>
</section>



<!-- Tools & Machines ------------------------------------------ -->
    <div class="mbr-section__container mbr-section__container--isolated container" style="padding-top: 30px; padding-bottom: 0px;">
        <div class="row">
            <div class="mbr-box mbr-box--fixed mbr-box--adapted">
                <div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__right col-sm-5">
                    <div class="mbr-section__container">
                        <h3>Tools & Machines</h3>
                    </div>
                </div>
				
				<div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__left col-sm-5">
                    <div class="mbr-section__container">
                        <div class="mbr-header mbr-header--auto-align mbr-header--wysiwyg">
                        </div>
                    </div>
                    
                </div>
				
				 <div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__right col-sm-2">
                    <div class="mbr-section__container">
                        <div class="mbr-buttons mbr-buttons--auto-align mbr-buttons--top mbr-buttons--left"><a class="mbr-buttons__btn btn btn-lg btn-success" href="#">Add Category</a></div>
                    </div>
                </div>
				
				
                
            </div>
        </div>
		
    </div>


<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="index-features1-0" style="background-color: rgb(255, 255, 255);">
    
    
    <div class="mbr-section__container container mbr-section__container--std-top-padding" style="padding-top: 93px;">
        <div class="mbr-section__row row">
            
			
			<?php
			
			require('db.php');
			$sql1="SELECT * FROM categories Where main_cat=10 " ;
			
			
			
			$result1 = $conn->query($sql1);

			
			 while($row1 = $result1->fetch_assoc())
			  {
			  	$pid1=$row1['cat_id'];
				$tit1=$row1['cat_title'];
				$main1=$row1['main_cat'];

				
				?>
					
					
			<div class="mbr-section__col col-xs-12 col-md-3 col-sm-6">
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                        <h3 class="mbr-header__text"><a  target="_blank" href="Product.php?var=<?php echo $pid1; ?>"><?php echo $tit1; ?></a></h3>
                    </div>
                </div>
				
				
               <!--
                <div class="mbr-section__container mbr-section__container--last" style="padding-bottom: 93px;">
                    <div class="mbr-buttons mbr-buttons--center"><a href="Product.php?var=<?php echo $pid1; ?>" class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-default">View Product</a></div>
                </div>
				-->
				<br><br>
            </div>
					
					
					<?php
					
				}
				
				?>
			
			
			
		
            
        </div>
    </div>
</section>


<br><br><br>




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