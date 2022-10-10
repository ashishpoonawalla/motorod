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
                        <li class="active">
							<a href="A_newslist.php"> News</a>
						</li>
						<li>
							<a href="A_rejectnews.php">Reject News</a>
							
						</li>
						<li>
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
		<div class="col-md-10 column">
		
		<h2>News Authentication</h2>
		
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
			
			
			$sql="SELECT * FROM news ORDER BY nid DESC" ;
			
			$result = $conn->query($sql);

			
			 while($row = $result->fetch_assoc())
			  {
			  	$img=$row['image'];
				$tit=$row['Title'];
				$nid=$row['nid'];
				
					$details=$row['details'];
					$category=$row['category'];
					$sta=$row['status'];
				
				
			  	?>
			  	<hr>
				<div class="media">
				 <a href="News.php?var=<?php echo $nid; ?>" class="pull-left">
				 <img src="<?php echo $img; ?>" width="150px" class="media-object" alt='' /></a>
					<div class="media-body">
						<h4 class="media-heading">
							<?php echo $tit; ?>
						</h4>		
							
					    <a class="btn btn-success btn-large" href="A_newsEdit.php?var=<?php echo $nid; ?>&status=<?php echo $sta; ?>"><?php echo $sta; ?></a>
						<!-- <a class="btn btn-primary btn-large" href="A_newsDel.php?var=<?php echo $nid; ?>">DEL</a> -->
						
						
							
						
					</div>
				</div>
		    	
			
				
				
				<?php
				
				}
				
				$conn->close();

			
				?>

		
		
		
		
		
		
		
				
		
		
		</div>
	</div>
		
		
		
	</div>
	</body>
	</html>