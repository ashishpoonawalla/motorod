<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Media & News</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
 
  <link rel="shortcut icon" href="img/favicon.png">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
<div class="container">

<!-- Nav Bar -->

	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-inverse navbar-default navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> 
					 <a class="navbar-brand" href="#">
					 	<img src="img/logo.png" width="80px" class="media-object" alt='' />
						
					 </a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					
					<ul class="nav navbar-nav navbar-right">
                        
                        <li>
							<a href="index.php">Home</a>
						</li>
						
                        <li>
							<a href="Politics.php">Politics</a>
						</li>
						
						<li>
							<a href="Business.php">Business</a>
						</li>
						<li class="active">
							<a href="Entertainment.php">Entertainment</a>
						</li>
						 <li>
							<a href="Sports.php">Sports</a>
						</li>
								
					
                        <li>
							<a href="Login.php">Login</a>
						</li>
                          <li>
							<a href="#"> </a>
						</li>
					</ul>
				</div>
				
			</nav>
		</div>
	</div>

    <br /><br /><br />
	
<!-- Content-------------------------------- -->

<!-- ----------------------------- News List --------------------- -->

<div class="row clearfix">
		<div class="col-md-9 column">
		<h2>Entertainment News</h2>

<?php
			
			$conn=new mysqli("localhost","root","","media");
			
			if($conn-> connect_error)
			{
				die("connection failed:".$conn->connect_error);	
			}
			
			
			$sql="SELECT * FROM news   where category='Entertainment' ORDER BY nid DESC" ;
			
			$result = $conn->query($sql);

			
			 while($row = $result->fetch_assoc())
			  {
			  	$img=$row['image'];
				$tit=$row['Title'];
				$nid=$row['nid'];
				
					$details=$row['details'];
					$category=$row['category'];
				
				
			  	?>
			  	<hr>
				<div class="media">
				 <a href="News.php?var=<?php echo $nid; ?>" class="pull-left">
				 <img src="<?php echo $img; ?>" width="200px" class="media-object" alt='' /></a>
					<div class="media-body">
						<h3 class="media-heading">
							<?php echo $tit; ?>
						</h3>		
							
							
							
							<div class="media-body">
							<h4 class="media-heading">
								<?php echo $category; ?>
							</h4></div>
							
						
					</div>
				</div>
		    	
			
				
				
				<?php
				
				}
				
				$conn->close();

			
				?>

		
		
				
		</div>


		<div class="col-md-3 column">
		
		<?php  	include'Advert.php';	?>
		<br>
		</div>


</div>

<!-- Footer -->
	<div class="row clearfix">
		<div class="col-md-12 column">
        <hr />			&copy 2019 - Media & News  <hr />
		</div>
	</div>
</div>
</body>
</html>
