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
							<a href="A_addeditor.php">Add Editor</a>
						</li>
                        <li>
							<a href="A_newslist.php">News</a>
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
		
		<?Php
		
		
		
		session_start();
		
		//------------------ Security Check
	
	
		?>
		
		<div class="jumbotron">
				
				<h2>Image for Advertisement</h2>
				
				
		
				
			</div>
		
		
		</div>
		
		
		
		
		
		<div class="col-md-6 column">
		
		<div class="jumbotron">
				<form role="form" action="A_adv_success.php" method="POST">
				<div class="form-group">
					 Amount Rs.<input type="Text"  class="form-control" name="amount" />
				</div>
				<div class="form-group">
					 Card Number<input type="Text"  class="form-control" name="cnum" />
				</div>
				<div class="form-group">
					 Card Name<input type="text"  class="form-control" name="cname" />
				</div>
				
				<div class="col-md-4 column">
					Month
			        <select class="form-control" id="select" name="month">
			          <option>1</option>
			          <option>2</option>
			          <option>3</option>
			          <option>4</option>
			          <option>5</option>
			          <option>6</option>
			          <option>7</option>
			          <option>8</option>
			          <option>9</option>
			          <option>10</option>
					  <option>11</option>
			          <option>12</option>
			        </select>
			      </div>
				  
				  <div class="col-md-4 column">
				  Year
			      <select class="form-control" id="select" name="year">
			          <option>2019</option>
			          <option>2020</option>
			          <option>2021</option>
			          <option>2022</option>
			          <option>2023</option>
			          <option>2024</option>
			          <option>2025</option>	
			        </select>
			      </div>
				  <div class="col-md-4 column">
					<div class="form-group">
						 Code<input type="Text"  class="form-control" name="scode" />
					</div>
				</div>
				
				<button type="submit" class="btn btn-primary">Make Payment</button>
				
			</form>
		</div>
		
		</div>
	</div>
		
		
		
	</div>
	</body>
	</html>