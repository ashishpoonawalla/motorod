<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>MauCom Connect</title>
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
										
					
                        <li  class="active">
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
	
<!-- Content-------------------------------- -->

<div class="row clearfix" >

   <div class="col-md-6 column">

			
            <form role="form" action="loginCh.php"   method="POST">
				<div class="form-group">
					 <label for="">Username</label>
					 <input type="text"  class="form-control" name="uname" />
				</div>
				<div class="form-group">
					 <label for="">Password</label>
					 <input type="password" class="form-control" name="pass" />
				</div>
				
				<div class="checkbox">
					 <label><input type="checkbox" /> Check me out</label>
				</div> <button type="submit" class="btn btn-default">Login</button>
			</form>
			

        </div>

		<div class="col-md-6 column">

		
            <h2>
				Heading
			</h2>
			<p>
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class="btn" href="#">View details »</a>
			</p>
			

        </div>
     
        
    </div>

<br />
<div class="row clearfix">

		<div class="col-md-12 column">

		
           <img src="news/security1.jpg" width="100%" ></img>
			

        </div>
        
        
    </div>




<!-- Footer -->
	<div class="row clearfix">
		<div class="col-md-12 column">
        <hr />			&copy - MauCom Solutions P Ltd  | <a href="http://www.maucom.co.in" > Website</a>   <hr />
		</div>
	</div>
</div>
</body>
</html>
