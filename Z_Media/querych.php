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
            
			  <form role="form" action="chquery.php"   method="POST">
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
				
				<div class="checkbox">
					 <label><input type="checkbox" /> Check me out</label>
				</div> <button type="submit" class="btn btn-default">Update</button>
			</form>
		
	</div>			
</body>
</html>