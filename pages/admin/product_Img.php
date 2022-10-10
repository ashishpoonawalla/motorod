<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Seller | Add Product</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
 <?php

session_start();

?>
 
<!-- Navbar ------------------------------------------------------------------------->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="http://localhost/1_motorod/admin_dash.php" class="nav-link">Home</a>
      </li>
	 
      <li class="nav-item d-none d-sm-inline-block">
        <a href="http://localhost/1_motorod/pages/admin/products.php" class="nav-link">Pending</a>
      </li>
	  <li class="nav-item d-none d-sm-inline-block">
        <a href="http://localhost/1_motorod/pages/admin/orders.php" class="nav-link">Orders</a>
      </li>
	  <li class="nav-item d-none d-sm-inline-block">
        <a href="http://localhost/1_motorod/pages/admin/category.php" class="nav-link">Category</a>
      </li>
	  <li class="nav-item d-none d-sm-inline-block">
        <a href="http://localhost/1_motorod/pages/admin/brands.php" class="nav-link">Brands</a>
      </li>
	  <li class="nav-item d-none d-sm-inline-block">
        <a href="http://localhost/1_motorod/pages/admin/users.php" class="nav-link">User</a>
      </li>
	  <li class="nav-item d-none d-sm-inline-block">
        <a href="http://localhost/1_motorod/pages/admin/sellers.php" class="nav-link">Seller</a>
      </li>
	  <li class="nav-item d-none d-sm-inline-block">
        <a href="http://localhost/1_motorod/pages/admin/withdrawl.php" class="nav-link">Withdrawl</a>
      </li>
	  <li class="nav-item d-none d-sm-inline-block">
        <a href="http://localhost/1_motorod/pages/admin/profile.php" class="nav-link">Profile</a>
      </li>
    </ul>

    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
     <li class="nav-item d-none d-sm-inline-block">
        <a href="http://localhost/1_motorod/Logout.php" class="nav-link">Logout</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->






  <!-- Main Sidebar Container -------------------------------------------------------->
  

      <?php
	  
	  include("menuleft.php")
	   
	  ?>
 
    <!-- /.sidebar -->
 





  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Image To Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Image To Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
		 <div class="container-fluid">
          <div class="row">
          <div class="col-md-9">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
		<?php
			//$var = $_REQUEST['var'];
			//$var1 = $_REQUEST['var1'];
			//$var2 = $_REQUEST['var2']; 	
		?>
          <h3 class="card-title"> Add Image To Product </h3>
		  
          
        </div>
        <div class="card-body p-2">
          
		 
		 	
						<?php
							//session_start();
							$pid = $_SESSION["pidIMG"];
							require('db.php');	
							$sql="SELECT * FROM products where product_id=$pid" ;
			
							$result = $conn->query($sql);
			
							if($row = $result->fetch_assoc())
			  				{
							  	
							  	$img1= $row['product_image'];
								$img2= $row['img2'];
								$img3= $row['img3'];
								$img4= $row['img4'];
							}
							
						?>
                        
						
						
<!-- Main Image1 ------------------------------------------ -->						
						
                        	
							<div class="form-group">
								<label for="exampleInputEmail1">Main Image</label><br>
							    <img alt="140x140" width="320px" src="../../assets/images/<?php echo $img1; ?>">
                                
                            </div>
							
                             <form action="product_Img11.php"  method="post" enctype="multipart/form-data">

								    <div class="form-group">
								      
								      <input type="file" class="form-control" name="fileToUpload" id="fileToUpload"  onkeypress="unsetnameError(false);" >
								    </div>

								    <button type="submit" class="btn btn-primary">Upload Image</button>
								 
								     <br />						    
						     </form>                       
						<br>
						
						
<!-- Img 2 ------------------------------------------ -->						
						
                        	
							<div class="form-group">
								<label for="exampleInputEmail1">Image 1</label><br>
							    <img alt="140x140" width="150px" src="../../assets/images/<?php echo $img2; ?>">
                                
                            </div>
							
                             <form action="product_Img22.php"  method="post" enctype="multipart/form-data">

								    <div class="form-group">
								      
								      <input type="file" class="form-control" name="fileToUpload" id="fileToUpload"  onkeypress="unsetnameError(false);" >
								    </div>

								    <button type="submit" class="btn btn-primary">Upload Image</button>
								 
								     <br />						    
						     </form>
						<br>						
<!-- Img 3 ------------------------------------------ -->						
						
                        	
							<div class="form-group">
								<label for="exampleInputEmail1">Image 2</label><br>
							    <img alt="140x140" width="150px" src="../../assets/images/<?php echo $img3; ?>">
                                
                            </div>
							
                             <form action="product_Img33.php"  method="post" enctype="multipart/form-data">

								    <div class="form-group">
								      
								      <input type="file" class="form-control" name="fileToUpload" id="fileToUpload"  onkeypress="unsetnameError(false);" >
								    </div>

								    <button type="submit" class="btn btn-primary">Upload Image</button>
								 
								     <br />						    
						     </form>
						<br>						

<!-- Img 3 ------------------------------------------ -->						
						
                        	
							<div class="form-group">
								<label for="exampleInputEmail1">Image 3</label><br>
							    <img alt="140x140" width="150px" src="../../assets/images/<?php echo $img4; ?>">
                                
                            </div>
							
                             <form action="product_Img44.php"  method="post" enctype="multipart/form-data">

								    <div class="form-group">
								      
								      <input type="file" class="form-control" name="fileToUpload" id="fileToUpload"  onkeypress="unsetnameError(false);" >
								    </div>

								    <button type="submit" class="btn btn-primary">Upload Image</button>
								 
								     <br />						    
						     </form>
						<br>						
							
						
						
			
			
			
			
		 
		 
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

		</div>
		</div>
		</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.1
    </div>
    <strong>Copyright &copy; 2019 motorod.in.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
