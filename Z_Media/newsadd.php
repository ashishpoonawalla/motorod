
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
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> 
					 <a class="navbar-brand" href="#">
					 	<img src="img/logo.png" width="80px" class="media-object" alt='' />
						
					 </a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					
					<ul class="nav navbar-nav navbar-right">
                        
                        <li>
							<a href="index.php">Home</a>
						</li>
						
                        <li class="active">
							<a href="Politics.php">Politics</a>
						</li>
						
						<li>
							<a href="Business.php">Business</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Entertainment<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Bollywood</a>
								</li>
								<li>
									<a href="#">Hollywood</a>
								</li>
								<li>
									<a href="#">Astrilogy</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Separated link</a>
								</li>
								
								</ul>
							</li>
		
		
						 <li>
							<a href="Sports.php">Sports</a>
						</li>
								
					
                        <li>
							<a href="Logout.php">Login</a>
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

 				 <form role="form">
				<div class="form-group">
					 <label for="exampleInputEmail1">News Title</label><input type="Text"  class="form-control" id="ntit" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">News Content</label> <textarea class="form-control" rows="3" id="textArea"></textarea>
				</div>
				<div class="form-group">
				
		<div class="btn-group">
	<button class="btn btn-default">Category</button> <button data-toggle="dropdown" class="btn btn-default dropdown-toggle"><span class="caret"></span></button>
		<ul class="dropdown-menu">
			<li>
				<a href="#">Business</a>
			</li>
			<li>
				<a href="#">Sports</a>
			</li>
			
			<li>
				<a href="#">Politics</a>
			</li>
		</ul>
	</div></div>
			<div class="form-group">
					 <label for="exampleInputPassword1">Reporters Name</label> <input type="Text"  class="form-control" id="rname" />
				</div>
				
				
<span class="label label-info">Next</span>
			</form>
 				
			</div>
			</body>
			</html>