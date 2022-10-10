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
						<li class="active">
							<a href="A_addeditor.php">Add Editor</a>
						</li>
                        <li>
							<a href="A_newslist.php"> News</a>
						</li>
						<li>
							<a href="Arejectnews.php">Reject News</a>
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
		
				
		<div class="jumbotron">
				
				<h2>Advertisement Saved...</h2>
				
				
		<?php
		
		//------------------ Security Check
			//	if ($_SESSION["role"] != "Admin" || !isset($_SESSION["role"]))
			//		header('Location: Error1.php');
				
			
		//----------------------- Save Payment --------------
		
		{
			   $amt = $_POST["amount"];
			   $cno = $_POST["cnum"];
			   $cnm = $_POST["cname"];
			   $month = $_POST["month"];
			   $year = $_POST["year"];
			   //$cod = $_POST["scode"];
			
		
				$servername="localhost";$username="root";
				$password=""; $dbname="media";

				$conn=new mysqli($servername,$username,$password,$dbname);	
						
		
				$sql="INSERT INTO payment(amount,CardNumber, CardName,month,year) Values('$amt','$cno','$cnm','$month','$year') " ;

				if ($conn->query($sql) === TRUE) {
				    echo "Payment Info Saved..";
				} else {
				    echo "Error Inserting record: " . $conn->error;
				}

						
				$conn->close();
			
			}
		
		
		
		//----------------------- Save Adv ------------------
		{
			
		
				$servername="localhost";$username="root";
				$password=""; $dbname="media";

				$conn=new mysqli($servername,$username,$password,$dbname);
				
				
				session_start();
				
								
				$tit = $_SESSION["tit"];
				$det = $_SESSION["det"] ;
				$url = $_SESSION["url"];	 	
				$fil = $_SESSION["file1"];
		
		
				$sql="INSERT INTO advertisement(AdTitle,AdDetails, AdImage, AdURL) Values('$tit','$det','$fil','$url') " ;

				if ($conn->query($sql) === TRUE) {
				    echo "<br>Advertisement Saved..";
				} else {
				    echo "<br>Error Inserting record: " . $conn->error;
				}

						
				$conn->close();
				
			}

				?>
			
				
				
				
				
			</div>
		
		
		
		
		
		
		
		
				
		
		
		</div>
	</div>
		
		
		
	</div>
	</body>
	</html>