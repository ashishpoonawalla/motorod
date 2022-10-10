<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>seller.motorod.in</title>
    <link rel="shortcut icon" href="assets/images/LogoMakr_9qkixk.png" type="image/x-icon">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
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
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="seller_dash.php" class="brand-link">
      <img src="assets/images/LogoMakr_7XVO4n.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">seller.motorod.in</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!--
		<div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
		-->
        <div class="info">
          <a href="#" style="font-size: 20px;" class="d-block"><?php echo $_SESSION["StoreNM"]; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
		  
		  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
	 <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>		   
			   
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              
              <p>
                Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          
          </li>
       

         <?php
		 for ($cn = 1; $cn <=13; $cn++)
          {
		  	$tlt = "";
			  if ($cn == 1)					$tlt = "Automotive Services";
			  if ($cn == 2)					$tlt = "Bike Accessories";
			  if ($cn == 3)					$tlt = "Bike Parts";
			  if ($cn == 4)					$tlt = "Car Accessories";
			  if ($cn == 5)					$tlt = "Car Parts";
			  if ($cn == 6)					$tlt = "Care";
			  if ($cn == 7)					$tlt = "Electronics";
			  if ($cn == 8)					$tlt = "Gifts and Accessories";
			  if ($cn == 9)					$tlt = "Riding Gear";
			  if ($cn == 10)				$tlt = "Safety";
			  if ($cn == 11)				$tlt = "Scooter Accessories";
			  if ($cn == 12)				$tlt = "Scooter Parts";
			  if ($cn == 13)				$tlt = "Tools and Machines";
			
		  
		  
		  ?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i><p><?php echo $tlt; ?><i class="right fas fa-angle-left"></i>              </p>
            </a>
            			
			<ul class="nav nav-treeview">
             
			 <?php
			
			require('db.php');
			
			
			$sql1="SELECT * FROM categories Where main_cat=$cn " ;
			
			$result1 = $conn->query($sql1);

			
			 while($row1 = $result1->fetch_assoc())
			  {
			  	$pid1=$row1['cat_id'];
			  	$tit1=$row1['cat_title'];
			

				?>
			 
			  <li class="nav-item">
                <a href="http://localhost/1_motorod/pages/seller/product_list.php?var=<?php echo $pid1 ?>&var1=<?php echo $tlt; ?>&var2=<?php echo $tit1; ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i> <p><?php echo $tit1; ?></p> </a>
              </li>
			  
             <?php
			 }				
				?>
            </ul>
          </li>
         
		 <?php
		 }
		 ?>
		 
    	
		 
	
         
		 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<?php
	$o_cnt=0;
	$s_cnt=0;
	$d_cnt=0;


	require('db.php');
	$un24 =  $_SESSION["uname"];	
						
	$sql1="SELECT  DISTINCT order_id FROM orders_detail Where username='$un24' AND status1='Pending' " ;							
	$result1 = $conn->query($sql1);							
	while($row1 = $result1->fetch_assoc())
	{	
		$o_cnt++;  	
	}
						
	$sql1="SELECT  DISTINCT order_id FROM orders_detail Where username='$un24' AND status1='Shipping' " ;							
	$result1 = $conn->query($sql1);							
	while($row1 = $result1->fetch_assoc())
	{	
		$s_cnt++;  	
	}
						
	$sql1="SELECT  DISTINCT order_id FROM orders_detail Where username='$un24' AND status1='Delivered' " ;							
	$result1 = $conn->query($sql1);							
	while($row1 = $result1->fetch_assoc())
	{	
		$d_cnt++;  	
	}
						
	//-------------------------------- Check Order Table for Pending Balance
	
	$sql1="SELECT * FROM orders_detail Where username='$un24' AND payment_status='WAIT' " ;							
	$result1 = $conn->query($sql1);							
	while($row1 = $result1->fetch_assoc())
	{	
		$id22 = $row1["id"]; 
		$rate = $row1["rate"]; 
		$qty  = $row1["qty"]; 
		$oid22 = $row1["order_id"]; 
		$pid22 = $row1["p_id"]; 
		
		$dt11 = $row1["payment_date"];
		$dt22 = date('Y-m-d', strtotime($dt11. ' + 7 days'));
		$today = date("Y-m-d");
			
			$tot = $rate * $qty;
			$pay = ($tot * 95) / 100;
			$com = ($tot * 5) / 100;
		
		if ($dt22 < $today ){
			
			
			require('db.php');		    
			$chk1= 0;
			   
				$sql21="Select * From seller_info Where username='$un24'";
				$result21 = $conn->query($sql21);
							
				if($row21 = $result21->fetch_assoc())
				{
					$bal = $row21["balance"];
					$newbal = $bal + $pay;
					
					$sql21="UPDATE seller_info SET balance=$newbal Where username='$un24'";
					$conn->query($sql21);
					
					$sql21="INSERT INTO transactions (username, amount, details, DRCR) values('$un24', $pay, 'Cr Amount (90%) for - ID - $id22. Order ID - $oid22. Product ID - $pid22. ', 'CR')";
					$conn->query($sql21);
					//echo "<br>..........kldsjfsd jflsjdlfjslfjsdjfd.................................. PAID - $dt11 - $dt22 ==== $tot - $pay - $com - 111";
					$chk1= 1;
				
				}
				
				
				$sql21="Select * From seller_info Where username='admin1@gmail.com'";
				$result21 = $conn->query($sql21);
							
				if($row21 = $result21->fetch_assoc())
				{
					$bal = $row21["balance"];
					$newbal = $bal + $com;
					
					$sql21="UPDATE seller_info SET balance=$newbal Where username='admin1@gmail.com'";
					$conn->query($sql21);
					
					$sql21="INSERT INTO transactions (username, amount, details, DRCR) values('admin1@gmail.com', $com, 'Credit Amount (10%) for - ID - $id22. Order ID - $oid22. Product ID - $pid22. ', 'CR')";
					$conn->query($sql21);
					//echo "<br>..........kldsjfsd jflsjdlfjslfjsdjfd.................................. PAID - $dt11 - $dt22 ==== $tot - $pay - $com - 222";
					$chk1= 2;
				}
			
			$sql21="UPDATE orders_detail SET payment_status='PAID' Where id=$id22";
			
			if ($conn->query($sql21) === TRUE) {
				
			} else {
			    echo "Error updating record: " . $conn->error;
			}
			
			
			
			//echo "<br>..........kldsjfsd jflsjdlfjslfjsdjfd.................................. PAID - $dt11 - $dt22 ==== $tot - $pay - $com";
			
			
			
			}
		
			//echo "<br>..........kldsjfsd jflsjdlfjslfjsdjfd.................................. WAIT - $dt11 - $dt22 == $tot - $pay - $com";
	}					
								
?>								



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Seller Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Seller Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $o_cnt; ?></h3>

                <p>Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="http://localhost/1_motorod/pages/admin/orders.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
		  
		  
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $s_cnt; ?><sup style="font-size: 20px"></sup></h3>

                <p>Shipping</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="http://localhost/1_motorod/pages/seller/shipping.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $d_cnt; ?></h3>

                <p>Delivered</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="http://localhost/1_motorod/pages/seller/delivered.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>5</h3>

                <p>Review *****</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-6 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Delivered
                </h3>
                
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 300px;">
                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>                         
                   </div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>                         
                  </div>  
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- Calendar -->
            <div class="card bg-gradient-success">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-bars"></i></button>
                    <div class="dropdown-menu float-right" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- TO DO List -->
            <div class="card">
             
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-6 connectedSortable">

           
            <!-- solid sales graph -->
            <div class="card bg-gradient-info">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-th mr-1"></i>
                  Sales Graph
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
                           data-fgColor="#39CCCC">

                    <div class="text-white">Mail-Orders</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                           data-fgColor="#39CCCC">

                    <div class="text-white">Online</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
                           data-fgColor="#39CCCC">

                    <div class="text-white">In-Store</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->

           
		     <!-- Map card -->
            <div class="card bg-gradient-primary">
              <div class="card-header border-0">
               
               
                <!-- /.card-tools -->
              </div>
              <div class="card-body">
                
              </div>
              <!-- /.card-body-->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                    <div class="text-white">Visitors</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                    <div class="text-white">Online</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                    <div class="text-white">Sales</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.card -->

		   
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  
  
  
  <footer class="main-footer">
    <strong>Copyright &copy; 2019 motorod.in.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
