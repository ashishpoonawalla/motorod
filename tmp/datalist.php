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
                        
                        <li class="active">
							<a href="index.html">Home</a>
						</li>
						
                        <li>
							<a href="About.html">Policts</a>
						</li>
						
						 <li>
							<a href="About.html">Entertainment</a>
						</li>
						
						 <li>
							<a href="About.html">Sports</a>
						</li>
						
					
					
                        <li>
							<a href="mailto:info@maucom.co.in">Mail us</a>
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

<div class="row clearfix">

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
        <div class="col-md-6 column">

		    <form role="form" action="AddData.php"   method="POST">
				<div class="form-group">
					 <label for="">Username</label>
					 <input type="text"  class="form-control" name="uname" />
				</div>
				<div class="form-group">
					 <label for="">Password</label>
					 <input type="password" class="form-control" name="pass" />
				</div>
				
				<div class="form-group">
					 <label for="">Name</label>
					 <input type="text" class="form-control" name="nm" />
				</div>
				
				<button type="submit" class="btn btn-default">Register</button>
			</form>

        </div>
        
    </div>



<div class="row clearfix">
		<div class="col-md-12 column">

			
			
			<?php
			
			$conn=new mysqli("localhost","root","","media");
			
			if($conn-> connect_error)
			{
				die("connection failed:".$conn->connect_error);	
			}
			
			
			$sql="SELECT * FROM userinfo" ;
			
			$result = $conn->query($sql);

			echo "<table border='1' width='100%' >";
			echo "<tr><td>UserName</td>";
			echo "<td>Password</td>";
			echo "<td>Name</td>";
			echo "<td>...</td></tr>";
			 while($row = $result->fetch_assoc())
			  {
			  	echo"<tr><td>".$row["usernm"]."</td><td>".$row["pword"]."</td><td>".$row["name"]."</td><td><a href='#'>X</a></td></tr>";
			}
			
			echo "</table>"	;	
			$conn->close();

			
			?>
			
	
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
