<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Seller | Profile</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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
        <a href="http://localhost/1_motorod/seller_dash.php" class="nav-link">Home</a>
      </li>
	 
      <li class="nav-item d-none d-sm-inline-block">
        <a href="http://localhost/1_motorod/pages/seller/products.php" class="nav-link">My Products</a>
      </li>
	  <li class="nav-item d-none d-sm-inline-block">
        <a href="http://localhost/1_motorod/pages/seller/orders.php" class="nav-link">Orders</a>
      </li>
	  <li class="nav-item d-none d-sm-inline-block">
        <a href="http://localhost/1_motorod/pages/seller/shipping.php" class="nav-link">Shipping</a>
      </li>
	  <li class="nav-item d-none d-sm-inline-block">
        <a href="http://localhost/1_motorod/pages/seller/delivered.php" class="nav-link">Delivered</a>
      </li>
	  <li class="nav-item d-none d-sm-inline-block">
        <a href="http://localhost/1_motorod/pages/seller/transaction.php" class="nav-link">Transaction</a>
      </li>
	  <li class="nav-item d-none d-sm-inline-block">
        <a href="http://localhost/1_motorod/pages/seller/withdrawl.php" class="nav-link">Withdrawl</a>
      </li>
	  <li class="nav-item d-none d-sm-inline-block">
        <a href="http://localhost/1_motorod/pages/seller/profile.php" class="nav-link">Profile</a>
      </li>
    </ul>

    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
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
            <h1>Seller Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Seller Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

           
       
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                Edit Profile
              </div><!-- /.card-header -->
              <div class="card-body" style="background-color: #eee;">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                     
                      
					  
					  
					  
					  
					  
					  
					  
					  
					  
					  
					  
					  	<?php 
						
						
						
						    if(isset($_POST['email']))   {

       							$email = ($_POST['email']);
        						$store_name = ($_POST['store_name']);								
								$gst_num = ($_POST['gst_num']);
								$full_name = $_POST['full_name'];
								$ph = ($_POST['phone']);
								$add = ($_POST['address']);
								$city = ($_POST['city']);
								$pin = ($_POST['pin']);
								
							require('db.php');
		        $sql ="";
				$sql="Update seller_info SET store_name='$store_name', gst_num='$gst_num',full_name='$full_name',phone='$ph',address='$add',city='$city',pin='$pin' Where username='$email' " ;
			

				if ($conn->query($sql) === TRUE) {
				   ?>
				   
				   <div data-form-alert="true">
                            <div  data-form-alert-success="true">Profile Updated!</div><br><br><br><br><br><br><br><br><br><br>
                        </div>
				   <?php
				} else {
					?>
					<div data-form-alert="true">
                            <div  data-form-alert-warning="true">Some Error when updating!</div><br><br><br><br><br><br><br>
                        </div>
						<?php
						
				    echo "Error Inserting record: " . $conn->error;
				}

						
				$conn->close();

					}else{
						
					
						
						?>
						
						
						
						<?php                         
				//session_start();		
				$uname = $_SESSION["uname"];
        		require('db.php');
		
				$sql="SELECT * FROM seller_info WHERE username='$uname' " ;
				$result = $conn->query($sql);

				 if($row = $result->fetch_assoc())
				  {
				  	$email = $row["username"] ;
					$store_name = $row["store_name"] ;
					$gst_num = $row["gst_num"] ;
					$full_name = $row["full_name"];
					$phone = $row["phone"];
					$address = $row["address"];
					$city = $row["city"];
					$pin = $row["pin"];
					
					
					
				  	}
						?>
                        
                        <form action="#" method="post" data-form-title="Signup Seller">
                            <input type="hidden" class="form-control" name="email"   value = "<?php echo $email; ?>" >
                            
							<div class="form-group">
                                <input type="email" class="form-control" name="email1" required=""  value = "<?php echo $email; ?>" placeholder="Email/Username*" disabled="">
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="store_name" required="" placeholder="Store Name*"   value = "<?php echo $store_name; ?>"data-form-field="Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="gst_num" required="" placeholder="GST Number*" value = "<?php echo $gst_num; ?>" data-form-field="Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="full_name" required="" placeholder="Full Name*" value = "<?php echo $full_name; ?>" data-form-field="Name">
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" name="phone" required="" placeholder="Phone*" value = "<?php echo $phone; ?>" data-form-field="Phone">
                            </div>
							
							<div class="form-group">
                                <textarea class="form-control" name="address" rows="4" placeholder="Address*" required="" data-form-field="Message"><?php echo $address; ?></textarea>
                            </div>
							<div class="form-group">
                                <input type="text" class="form-control" name="city" required="" placeholder="City*" value = "<?php echo $city; ?>"data-form-field="Phone">
                            </div>
							
							<div class="form-group">
                                <input type="text" class="form-control" name="pin" required="" placeholder="Pin*" value = "<?php echo $pin; ?>"data-form-field="Phone">
                            </div>
							
                            <button type="submit" class="btn btn-info">Update Details</button>
							<br>
                        </form>
						
						<?php
						}
						?>
					  
					  
					  
					  
					  
					  
					  
					  
					  
					  
					  

                     
                    </div>
                    <!-- /.post -->

                 

                  </div>
                 
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
		  </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
