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
                        
                        <li>
							<a href="A_home.php">Home</a>
						</li>
						<li>
							<a href="A_addreporter.php">Add Editor</a>
						</li>
                        <li>
							<a href="A_newslist.php"> News</a>
						</li>
						<li>
							<a href="A_rejectnews.php">Reject News</a>
							
						</li>
						<li class="active">
							<a href="A_advertisement.php">Advertisement</a>
						</li>	
								
						
						
						<li>
							<a href="A_profile.php">Profile</a>
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
		<div class="col-md-6 column">
		
		<h2>Adv. List</h2>
		
		<?Php
		session_start();
		
		//------------------ Security Check
		if ($_SESSION["role"] != "Admin" || !isset($_SESSION["role"]))
			header('Location: Error1.php');
			
			
			 $uname = $_SESSION["uname"] ;
			 $fn = $_SESSION["fullname"];	
			 $img=$_SESSION["uimage"];
		?>
	
		<?php
			
			$conn=new mysqli("localhost","root","","media");
			
			if($conn-> connect_error)
			{
				die("connection failed:".$conn->connect_error);	
			}
			
			
			$sql="SELECT * FROM advertisement ORDER BY aid DESC" ;
			
			$result = $conn->query($sql);

			
			 while($row = $result->fetch_assoc())
			  {
			  	$aid=$row['AID'];
			  	$tit=$row['AdTitle'];
				$det=$row['AdDetails'];				
				$img=$row['AdImage'];
				$url=$row['AdURL'];
			
				
				
			  	?>
			  	<hr>
				<div class="media">
				 <img src="<?php echo $img; ?>" width="150px" class="media-object" alt='' />
					<div class="media-body">
						<h4 class="media-heading">
							<?php echo $tit; ?>
						</h4>		
							
					    <a class="btn btn-success btn-large" href="A_advDel.php?var=<?php echo $aid; ?>">Del</a>
						
							
						
					</div>
				</div>
		    	
				
				<?php
				
				}
				
				$conn->close();

			
				?>

				
		
		
		</div>
		<div class="col-md-6 column">
		
			<h2>New Advertisement</h2>
		
			<form role="form" action="A_adv_image.php" method="POST">
				<div class="form-group">
					 Title<input type="Text"  class="form-control" name="title" />
				</div>
				<div class="form-group">
					 Details<input type="text"  class="form-control" name="details" />
				</div>
				<div class="form-group">
					 URL<input type="Text"  class="form-control" name="url" />
				</div>
				
				
				<button type="submit" class="btn btn-primary">NEXT</button>
	
			</form>
		
		</div>
	</div>
		
		
		
	</div>
	</body>
	</html>