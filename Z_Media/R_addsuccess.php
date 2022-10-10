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
		
		
		
		
	 	
	
	   
	
		?>
		
		<div class="jumbotron">
				
				<h2>News Saved...</h2>
				
				<?php

				


				$servername="localhost";$username="root";
				$password=""; $dbname="media";

				$conn=new mysqli($servername,$username,$password,$dbname);
				if($conn-> connect_error)
				{
					die("connection failed:".$conn->connect_error);	
				}
				
		session_start();
		
		//------------------ Security Check
		if ($_SESSION["role"] != "Reporter" || !isset($_SESSION["role"]))
			header('Location: Error1.php');
			
			
		$tit = $_SESSION["title"];
		$fil = $_SESSION["file1"];
		$det = $_SESSION["details"];
		$cat = $_SESSION["category"];		
		$use = $_SESSION["uname"];
	 	$dat = "2019-04-11";
	 	

				$sql="INSERT INTO news (title,image,details,category,likes,username, date1, status) Values('$tit','$fil','$det','$cat','0','$use','$dat','UnPublish') " ;

				if ($conn->query($sql) === TRUE) {
				    echo "News Addes successfully";
				} else {
				    echo "Error Inserting record: " . $conn->error;
				}

						
				$conn->close();



				?>
			
				
				
				
				
			</div>
		
		
		
		
		
		
		
		
				
		
		
		</div>
	</div>
		
		
		
	</div>
	</body>
	</html>