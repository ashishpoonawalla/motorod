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
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">Media</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					
					<ul class="nav navbar-nav navbar-right">
                        
                        <li class="active">
							<a href="home.php">Home</a>
						</li>
						
                        <li>
							<a href="newslist.php">List Of News</a>
						</li>
						<li>
							<a href="Reject.php">Reject News</a>
						</li>
						<li>
							<a href="work.php">WorkSheet</a>
						</li>						
						
						<li>
							<a href="message.php">Message</a>
						</li>
						<li>
							<a href="Profile.php">Profile</a>
						</li>			
					
                        <li>
							<a href="logout.php">Log Out</a>
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
	<div class="row clearfix">
		<div class="col-md-10 column">
		
		
		<?php
			
			$conn=new mysqli("localhost","root","","media");
			
			if($conn-> connect_error)
			{
				die("connection failed:".$conn->connect_error);	
			}
			
			
			$sql="SELECT * FROM news" ;
			
			$result = $conn->query($sql);

			
			 while($row = $result->fetch_assoc())
			  {
			  	$img=$row['image'];
				
				$tit=$row['Title'];
				
				$details=$row['details'];
				
				$category=$row['category'];
						
						
				
				
				
				
				
				
			  	?>
			  	
				<div class="media">
				 <a href="News.php" class="pull-left">
				 <img src="<?php echo $img; ?>" width="300px" height="250px"class="media-object" alt='' /></a>
				<div class="media-body">
					<h4 class="media-heading">
						<?php echo $tit; ?>
					</h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
							
							
							
							<div class="media-body">
					<h4 class="media-heading">
						<?php echo $details; ?>
					</h4>.
							
							
							
							
							<div class="media-body">
					<h4 class="media-heading">
						<?php echo $category; ?>
					</h4>.</div>
							
					</div>
				</div>
				
		    	<br/><br/>
			
				
				
				<?php
				
			}
			
			
			$conn->close();

			
			?>

		
		
		
		
		
		
		
		
				
		
		
		</div>
		</div>
		
		
		
	</div>
	</body>
	</html>