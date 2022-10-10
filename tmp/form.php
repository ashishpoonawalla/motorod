
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>MauCom Connect</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append �#!watch� to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
<div class="container">
<div class="col-md-4 column">
			
			 <form role="form" action="formch.php"   method="POST">
				<div class="form-group">
					 <label for="exampleInputEmail1">User Name</label><input type="text" class="form-control" id="uname">
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">Password</label><input type="password" class="form-control" id="pwd">
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">Email</label><input type="email" class="form-control" id="email">
				</div>
				
				 <button type="submit" class="btn btn-default">Submit</button>
			</form>
			</div>
			</div>
</body>
</html>