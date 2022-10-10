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
							<a href="index.php">Home</a>
						</li>
						
                        <li>
							<a href="Politics.php">Policts</a>
						</li>
						<li>
							<a href="Business.php">Business</a>
						</li>
						
						<li>
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
	<div class="row clearfix">
		<div class="col-md-12 column">
		
			
			
			<?php
			$nid=$_REQUEST['var'];
			
			$conn=new mysqli("localhost","root","","media");
			
			if($conn-> connect_error)
			{
				die("connection failed:".$conn->connect_error);	
			}
			
			
			$sql="SELECT * FROM news where nid=$nid" ;
			
			$result = $conn->query($sql);

			
			if($row = $result->fetch_assoc())
			  {
			  	$img=$row['image'];
				$tit=$row['Title'];
				$nid=$row['nid'];
				
				$details=$row['details'];
				$category=$row['category'];
				$like=$row['likes'];
				
				
			  	?>
			  	<h2>
					<?php echo $tit; ?>
				</h2>
				
				 <img src="<?php echo $img; ?>" width="100%" class="media-object" alt='' /></a>
				<br /><br />	
				<p>
					<?php echo $details; ?>
				</p>
			
				
				
				<?php
				
				}
				
				$conn->close();

			
				?>

		
			
			
			
			
			
			
			<a class="btn btn-success btn-large" href="newslikes.php?var=<?php echo $nid; ?>&likes=<?php echo $like; ?>">Likes (<?php echo $like; ?>)</a>
			
			
			<!-- <button type="submit" class="btn btn-success">Likes (<?php echo $like; ?>)</button> -->
			
			<!-- <button type="submit" class="btn btn-default">Comment</button> -->
			
			<!-- ------------------------------ Comment Form --------------- -->
			<br /><br /><br />
			
			
			
			
			
			
		
			
		</div>
	</div>
					
					
					
					
					
					
					
					
	<div class="row clearfix">

		<div class="col-md-6 column">
		
		<h2>Comments</h2>
		
		
		
		<?php
			
			$conn=new mysqli("localhost","root","","media");
			
			if($conn-> connect_error)
			{
				die("connection failed:".$conn->connect_error);	
			}
			
			
			$sql="SELECT * FROM comments Where nid='$nid' ORDER BY cid DESC" ;
			
			$result = $conn->query($sql);

			
			 while($row = $result->fetch_assoc())
			  {
			  	$cmt=$row['comment'];
				$nam=$row['Name'];
			
				
			  	?>
			  	<hr>
				<div class="media">
				 
					<div class="media-body">
					
							@ - <?php echo $cmt; ?>
						<h4 class="media-heading">
							<?php echo $nam; ?>
						</h4>		
							
							
							
						
						
					</div>
				</div>
		    	
			
				
				
				<?php
				
				}
				
				$conn->close();

			
				?>

		
		
		
		
			
        
		</div>
		
		<div class="col-md-6 column">
		
		<form role="form" action="NewsComment.php" method="POST" width="60%">
				<div class="form-group">
					 Name<input type="Text"  class="form-control" name="name" />
				</div>				
				
				<input type="hidden"  class="form-control" name="nid" value="<?php echo $nid; ?>" />
							
				
				<div class="form-group">		     
			  
			        <textarea class="form-control" rows="3" name="comment"></textarea>
			        <span class="help-block">Comment Details.</span>
			      
			    </div>
			   
				
				<button type="submit" class="btn btn-primary">Make Comment</button>
	
			</form>
		
		
		
		</div>
			
	</div>
	<!-- Footer -->
	<div class="row clearfix">
		<div class="col-md-12 column">
        <hr />			&copy 2019 - Media & News  <hr />
		</div>
	</div>
	</body>
	</html>
	