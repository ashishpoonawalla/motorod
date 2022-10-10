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
            <h1>Add Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Product</li>
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
			$var = $_REQUEST['var'];
			$var1 = $_REQUEST['var1'];
			$var2 = $_REQUEST['var2']; 	
		?>
          <h3 class="card-title">(Add New Product) <?php echo $var1; ?> : <?php echo $var2; ?> </h3>
		  
          
        </div>
        <div class="card-body p-2">
          
		 
		 	
                        
                        <form action="product_addCode.php" method="post" data-form-title="Signup Seller">
                            <!--
							<div class="form-group">
                                <input type="text" class="form-control" name="sku" required="" placeholder="SKU*" data-form-field="Name">
                            </div>
							-->
							Product Name:
							<div class="form-group">
                                <input type="text" class="form-control" name="title" required="" placeholder="">
                            </div>
							Price:
                            <div class="form-group">
								<input  type="number" class="form-control" name="price" size="5" maxlength="5" style="width:100%; " required="" placeholder="" >
                            </div>
							Brand:
							<div class="form-group">
                            <select class="form-control" name="brand" required="" placeholder="">
								<?php
				
								require('db.php');								
								$sql1="SELECT * FROM brands ORDER BY brand_title  " ;								
								$result1 = $conn->query($sql1);
								
								 while($row1 = $result1->fetch_assoc())
								 {
								  	$id=$row1['brand_id'];
									$brand=$row1['brand_title'];
									echo "<option value='$id'>$brand</option>";									
								 }
									
							    ?>
								
                            </select>							
							</div>
							<?php
								$id = $_REQUEST['var'];
								//$tit3 = $_REQUEST['var1'];
							?>
							Category: <?php echo $_REQUEST['var1']; ?>
							<div class="form-group">
                            <select class="form-control" name="category" required="" placeholder="">
								<option value='<?php echo $var; ?>'><?php echo $var2; ?></option>";
                            </select>
							
							</div>							
							Keyward:
							<div class="form-group">
                            <select class="form-control" name="keyward" required="" placeholder="">
								<option value='-'>-</option>
								<option value='Best Seller'>Best Seller</option>
								<option value='New Release'>New Release</option>
								<option value='Today Deal'>Today Deal</option>
								
                            </select>
							
							</div>
							
							Description:							
							<div class="form-group">
                                <textarea class="form-control" name="desc" rows="6" placeholder="" required="" data-form-field="Message"></textarea>
                            </div>
							
							Weight Kg:			
							<div class="form-group">
                                <input type="text" class="form-control" name="weight" required="" placeholder="13.400">
                            </div>
							
							Compatible:
							<div class="form-group">
                                <input type="text" class="form-control" name="compatible" required="" placeholder="Hero Passion Plus, Universal, Bajaj Pulsar 135LS">
                            </div>
							
                            <div class="mbr-buttons mbr-buttons--right"><button type="submit" class="mbr-buttons__btn btn btn-lg btn-warning">NEXT - ></button></div>
                        </form>
						
		 
		 
		 
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
