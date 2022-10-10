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
							<a href="E_home.php">Home</a>
						</li>
						<li>
							<a href="E_addreporter.php">Add Reporter</a>
						</li>
                        <li>
							<a href="E_newslist.php">News</a>
						</li>
						<li>
							<a href="E_rejectnews.php">Reject News</a>
						</li>
						<li class="active">
							<a href="E_newwork.php">New Work</a>
						</li>
						<li>
							<a href="E_worksheet.php">WorkSheet</a>
						</li>			
						
						
						<li>
							<a href="E_profile.php">Profile</a>
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
		
		<h2>Work Sheet</h2>
		
		<?Php
		session_start();
		
		//------------------ Security Check
		if ($_SESSION["role"] != "Editor" || !isset($_SESSION["role"]))
			header('Location: Error1.php');
			
			
			 $uname = $_SESSION["uname"] ;
			 $fn = $_SESSION["fullname"];	
			 $img=$_SESSION["uimage"];
		?>
	
		<h2>Add Work</h2>
				
				
			<form role="form" action="E_newwork1.php" method="POST">
				<div class="form-group">
					 Username<input type="Text"  class="form-control" name="username" />
				</div>
				<div class="form-group">
					 WorkTitle<input type="text"  class="form-control" name="title" />
				</div>
				<div class="form-group">
					Details<input type="Text"  class="form-control" name="details" />
				</div>				
				<div class="form-group">
					Complition Date<input type="date"  class="form-control" name="date" />
				</div>
				
				<button type="submit" class="btn btn-primary">Save</button>
	
			</form>
				
		
		
		
		
		
		
				
		
		
		</div>
		
		
		<div class="col-md-2 column">
		
		
		</div>
		
	</div>
		
		
		
	</div>
	</body>
	</html>