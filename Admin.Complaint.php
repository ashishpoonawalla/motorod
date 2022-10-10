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

<br><br><br><br><br><br>


<section class="mbr-section mbr-section--relative mbr-section--short-paddings" id="page9-msg-box2-0" style="background-color: rgb(255, 255, 255);">

    
<!-- Main Title ------------------------------------------ -->
    <div class="mbr-section__container mbr-section__container--isolated container" style="padding-top: 40px; padding-bottom: 0px;">
        <div class="row">
            <div class="mbr-box mbr-box--fixed mbr-box--adapted">
                <div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__right col-sm-3">
                    <div class="mbr-section__container">
                        <h3>COMPLAINT</h3>
                    </div>
                </div>
				
				<div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__left col-sm-7">
                    <div class="mbr-section__container">
                        <div class="mbr-header mbr-header--auto-align mbr-header--wysiwyg">
                            
							<!--
							<form class="example" action="Admin.Seller.php" method="GET" style="margin:auto;max-width:400px;">
  								<input type="text" style="border-color: #000; 16px;  " placeholder="Search Seller.." name="search" class="form-control" >
  							</form>
							-->
									
                        </div>
                    </div>
                    
                </div>
				
				 <div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__right col-sm-2">
                    <div class="mbr-section__container">
                        
                    </div>
                </div>
				
				
                
            </div>
        </div>
		
    </div>



<!-- Product ------------------------------------------ -->
<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="index-features1-0" style="background-color: rgb(255, 255, 255);">
    
    
    <div class="mbr-section__container container mbr-section__container--std-top-padding" style="padding-top: 0px;">
        <div class="mbr-section__row row">           
<?php
			
			require('db.php');
			$sql1="SELECT * FROM Complaint " ;
			
			
			if (isset($_REQUEST['search'])){			
			
				$cid = $_REQUEST['search'];
			
				$sql1="SELECT * FROM  Complaint Where (username LIKE '%$cid%') OR (store_name LIKE '%$cid%') OR (full_name LIKE '%$cid%') OR (city LIKE '%$cid%')   " ;
			}
			
			$result1 = $conn->query($sql1);

?>

<table border="1" width="100%">
<tr>
	<td Width="25%">NAME</td><td Width="25%">EMAIL</td><td Width="20%">MOBILE</td><td Width="30%">SUBJECT</td>
				
</tr>
<?php			
			 while($row1 = $result1->fetch_assoc())
			  {
			  	$pid1=$row1['id'];
				$tit1=$row1['full_name'];
				$email1=$row1['email'];
				$mobile1=$row1['mobile'];
				$subject1=$row1['Subject'];
				
				
				?>
					
					
			<div class="mbr-section__col col-xs-12 col-md-10 col-sm-2">
            
			<tr>
			        <td><a  target="_blank" href="Product.php?var=<?php echo $pid1; ?>"><?php echo $tit1; ?></a></td>
					<td><a  target="_blank" href="Product.php?var=<?php echo $pid1; ?>"><?php echo $email1; ?></a></td>
					<td><?php echo $mobile1; ?></td>
					<td><?php echo $subject1; ?></td>
						
            </tr>	
				
             
				<br><br>
            </div>
					
					
					<?php
					
				}
				
				?>
			
</table>

			
		
            
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