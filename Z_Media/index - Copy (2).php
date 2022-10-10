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
                        
                        <li class="active">
							<a href="index.php">Home</a>
						</li>
						
                        <li>
							<a href="Politics.php">Politics</a>
						</li>
						
					
							
					
					<li>
							<a href="Politics.php">Business</a>
						</li>
					<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Entertainment<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Bollywood</a>
								</li>
								<li>
									<a href="#">Hollywood</a>
								</li>
								<li>
									<a href="#">Astrilogy</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Separated link</a>
								</li>
								
								</ul>
							</li>
		
		
						 <li>
							<a href="Politics.php">Sports</a>
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

<div class="row clearfix">

		<div class="col-md-8 column">
  

			<div class="carousel slide" id="carousel-47768">
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#carousel-47768">
					</li>
					<li data-slide-to="1" data-target="#carousel-47768">
					</li>
					<li data-slide-to="2" data-target="#carousel-47768">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img alt="" src="img/slide1.jpg" />
						<div class="carousel-caption">
							<h4>
								First Thumbnail label
							</h4>
							
						</div>
					</div>
					<div class="item">
						<img alt="" src="img/slide2.jpg" />
						<div class="carousel-caption">
							<h4>
								Second Thumbnail label
							</h4>
							
						</div>
					</div>
					<div class="item">
						<img alt="" src="img/slide3.jpg" />
						<div class="carousel-caption">
							<h4>
								Third Thumbnail label
							</h4>
							
						</div>
					</div>
				</div> <a class="left carousel-control" href="#carousel-47768" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-47768" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
			

        </div>
        <div class="col-md-4 column">

			<h3>
				Who Become Our Next PM
			</h3>
			
			<div class="radio">
			  <label><input type="radio" name="optradio" checked>Rahul Gandhi</label>
			</div>
			<div class="radio">
			  <label><input type="radio" name="optradio">Narendra Modi</label>
			</div>
			<div class="radio">
			  <label><input type="radio" name="optradio">Mamata Banerji</label>
			</div>

						
						

        </div>
        
    </div>

<br /><br />

<!-- ----------------------------- News List --------------------- -->

<div class="row clearfix">
		<div class="col-md-9 column">

<?php
			
			$conn=new mysqli("localhost","root","","media");
			
			if($conn-> connect_error)
			{
				die("connection failed:".$conn->connect_error);	
			}
			
			
			$sql="SELECT * FROM news ORDER BY nid DESC" ;
			
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
						<h2 class="media-heading">
							<?php echo $tit; ?>
						</h2>		
							
							
							
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
		
		Sponsered
		<img src="img/surfacepro.png" width="200px" class="media-object" alt='' />
		<br>
		<img src="img/xbox.png" width="200px" class="media-object" alt='' />
		<br>
		<img src="img/iphone.png" width="200px" class="media-object" alt='' />
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
