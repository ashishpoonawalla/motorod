<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Users</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
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
            <h1>Sellers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sellers</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Email</th>
                  <th>Store</th>
                  <th>GST No</th>
                  <th>Mobile</th>
                  <th>CITY</th>
				  <th>Status</th>
                </tr>
                </thead>
                <tbody>
              
<?php
			  
			  require('db.php');
					
				$sql1="SELECT * FROM seller_info" ;
				$result1 = $conn->query($sql1);
		
				while($row1 = $result1->fetch_assoc())
				{
						
						  	$uid1=$row1['username'];
							$snm1=$row1['store_name'];
						  	$gst1=$row1['gst_num'];								
							$mob1=$row1['phone'];
							$city1=$row1['city'];
							$sta1=$row1['status1'];
							$new = "Pending";
							if ($sta1 == "Pending")
								$new = "Verified";
								
					 if ($sta1 != "Admin")			
					{
						
							
					 ?>
              
                <tr>
                  <td><?php echo $uid1; ?></td>
                  <td><?php echo $snm1; ?></td>
                  <td><?php echo $gst1; ?></td>
                  <td><?php echo $mob1; ?></td>
                  <td><?php echo $city1; ?></td>
				  <td>
				   	<!-- <a class="btn btn-info btn-sm" target="blank" href="users_edit.php?uid=<?php echo $uid1; ?>"> -->
				    <a class="btn btn-info btn-sm" target="blank" href="#">
				            <?php echo $sta1; ?>
				    </a>
				  
				  </td>
				  
                </tr>
				
				<?php
					}
				}
				?>
				
                </tbody>
                
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

         
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>