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
							<a href="A_home.php">Home</a>
						</li>
						<li>
							<a href="A_addreporter.php">Add Editor</a>
						</li>
                        <li>
							<a href="A_newslist.php">News</a>
						</li>
						<li>
							<a href="A_rejectnews.php">Reject News</a>
						</li>
						<li>
							<a href="A_advertisement.php">Advertisement</a>
						</li>	
									
						
						
						<li class="active">
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
		
		<?Php
		session_start();
		
		//------------------ Security Check
		if ($_SESSION["role"] != "Admin" || !isset($_SESSION["role"]))
			header('Location: Error1.php');
			
			
	//$_SESSION["uname"] = $uname;
	 $fn = $_SESSION["fullname"];
	//$_SESSION["role"] =$role;
	 $img=$_SESSION["uimage"];
	$em=	$_SESSION["email"];
	$ph= $_SESSION["phone"];
	$pa=$_SESSION["pass"];
	
		?>
		
		
		<?php

$nid = $_REQUEST["var"];

$msg="";

	

		$servername="localhost";$username="root";
		$password=""; $dbname="media";

		$conn=new mysqli($servername,$username,$password,$dbname);
		if($conn-> connect_error)
		{
			die("connection failed:".$conn->connect_error);	
		}


		$sql="Delete from news  Where nid='$nid'" ;

		if ($conn->query($sql) === TRUE) {
		    $msg= "News Deleted successfully";
		} else {
		    $msg= "Error Inserting record: " . $conn->error;
		}

				
		$conn->close();




?>
		
		
		
		<h2>News Delete..</h2>
		<div class="jumbotron">
				
				<h3>
					<?php echo $msg; ?>
				</h3>
				
			
			</div>
		
		
		
		
		
		
		
		
				
		
		
		</div>
	</div>
		
		
		
	</div>
	</body>
	</html>


