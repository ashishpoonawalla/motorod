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
							<a href="R_home.php">Home</a>
						</li>
						<li class="active">
							<a href="R_addnews.php">Add News</a>
						</li>
                        <li>
							<a href="R_newslist.php">List Of News</a>
						</li>
						<li>
							<a href="R_rejectnews.php">Reject News</a>
						</li>
						<li>
							<a href="R_worksheet.php">WorkSheet</a>
						</li>			
						
						
						<li>
							<a href="R_profile.php">Profile</a>
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
		
		<?Php
		session_start();
		//------------------ Security Check
		if ($_SESSION["role"] != "Reporter" || !isset($_SESSION["role"]))
			header('Location: Error1.php');
			
	//$_SESSION["uname"] = $uname;
	 $fn = $_SESSION["fullname"];
	//$_SESSION["role"] =$role;
	 $img=$_SESSION["uimage"];
		
	
		?>
		
		<div class="jumbotron">
				
				<h2>Add New News</h2>
				
				
			<form role="form" action="R_addimage.php" method="POST">
				<div class="form-group">
					 News Title<input type="Text"  class="form-control" name="title" />
				</div>
				<div class="form-group">
					 News Content<textarea class="form-control" rows="5" name="details"></textarea>
				</div>
				
				<div class="form-group">
			      Selects Category
			      
			        <select class="form-control" name="category">
			          <option value="Politics">Politics</option>
					  <option value="Business">Business</option>
			          <option value="Entertainment">Entertainment</option>
			          <option value="Sports">Sports</option>			          
			        </select>
			       
			      
			    </div>
		
				<div class="form-group">
					 Reporters Name<input type="Text"  class="form-control" name="rname" Value="<?php echo $fn; ?>" />
				</div>
				
				<button type="submit" class="btn btn-primary">NEXT</button>
	
			</form>
				
				
				
			</div>
		
		
		
		
		
		
		
		
				
		
		
		</div>
	</div>
		
		
		
	</div>
	</body>
	</html>