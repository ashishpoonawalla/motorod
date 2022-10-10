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

  		<div class="col-md-8 column">

			<?php

				$uname = $_POST["uname"];
				$pass = $_POST["pass"];

				//echo " $uname - $pass <br> <br>";

				$servername="localhost";$username="root";
				$password=""; $dbname="media";

				$conn=new mysqli($servername,$username,$password,$dbname);
				if($conn-> connect_error)
				{
					die("connection failed:".$conn->connect_error);	
				}


				$sql="SELECT * FROM userinfo WHERE username='$uname' AND password='$pass' " ;
				$result = $conn->query($sql);

				 if($row = $result->fetch_assoc())
				  {
				  	echo"Welcome - ".$row["name"];
					$role=$row["role"];
					
					session_start();
					$_SESSION["uname"] = $uname;
					$_SESSION["fullname"]=$row["name"];
					$_SESSION["role"] =$role;
					$_SESSION["uimage"] = $row["image"];
					$_SESSION["email"] = $row["email"];
					$_SESSION["phone"] = $row["phone"];
					$_SESSION["pass"] = $pass;
					
					
					
					
					
					if ($role == "Reporter")
						header('Location: R_home.php');
					else  if ($role == "Admin")
						header('Location: A_home.php');
					else  if ($role == "Editor")
						header('Location: E_home.php');
					else
						echo"<h1>Invalid Username or Password.... </h1>";
				 }
				 else
				 {
				 	echo"<h1>Invalid Username or Password.... </h1>";
				 }
						
				$conn->close();



				?>	
           

        </div>

		<div class="col-md-4 column">

		
			

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






