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
						<li class="active">
							<a href="E_addreporter.php">Add Reporter</a>
						</li>
                        <li>
							<a href="E_newslist.php">News</a>
						</li>
						<li>
							<a href="E_rejectnews.php">Reject News</a>
						</li>
						<li>
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
		
		<?Php
		
		
		
		session_start();
		
		//------------------ Security Check
		//if ($_SESSION["role"] != "Editor" || !isset($_SESSION["role"]))
		//	header('Location: Error1.php');
			
		//$_SESSION["title"] = $_POST["title"];
		//$_SESSION["details"] = $_POST["details"];
	 	//$_SESSION["category"] = $_POST["category"];
	 	//$_SESSION["rname"] = $_POST["rname"];
	 
	
	    //echo $_SESSION["title"];
		
		
	
		?>
		
		<div class="jumbotron">
				
				<h2>Image for Reporter</h2>
				
				
			<?php
				$target_dir = "img/";
				$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
				
				
				$_SESSION["file1"]=$target_file;
				
				$uploadOk = 1;
				
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				
				
				
				
				/* Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
				    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				    $uploadOk = 0;
				}
				 Check if $uploadOk is set to 0 by an error
				*/
				
			    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
					
					echo "<img src='$target_file' width='200px' />";
					
					?>
					<a class="btn btn-primary btn-large" href="E_addsuccess.php">Save News</a>
					<?php
					
			    } else {
			        echo "Sorry, there was an error uploading your file.";
			    }
				
				
				
			?>
				
				
				
				
			</div>
		
		
		
		
		
		
		
		
				
		
		
		</div>
	</div>
		
		
		
	</div>
	</body>
	</html>