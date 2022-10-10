<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Seller | Withdrawl</title>
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

<?php

require('db.php');
$un24 =  $_SESSION["uname"];		
$sql1="SELECT * FROM seller_info Where username='$un24' " ;
$result1 = $conn->query($sql1);
$bal1 = 0;
if($row1 = $result1->fetch_assoc())
{
  	
	$bal1=$row1['balance'];
}
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Withdrawl Cash.</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Withdrawl</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

           
       
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                Balance Rs.<b> <?php echo $bal1; ?></b>
              </div><!-- /.card-header -->
              <div class="card-body" style="background-color: #eee;">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                     
					  
 	<?php 
						
						
						
if(isset($_POST['withdrawls']))   
{

	$withdrawls = $_POST['withdrawls'];
	$email = $_POST['email'];
	$account_name = $_POST['account_name'];
	$account_no = $_POST['account_no'];
	$bank_name = $_POST['bank_name'];
	$ifsc = $_POST['ifsc'];
	$branch_name = $_POST['branch_name'];
   										
	if ($withdrawls > $bal1)
	{
		?>
	   
	   <div data-form-alert="true">
                <div  data-form-alert-success="true">Sorry, Insuficiant Balance!</div><br><br><br><br><br><br><br><br><br><br>
            </div>
	   <?php
	}								
	else
	{
					
								
					require('db.php');
					$un24 =  $_SESSION["uname"];			
					
					$newbal = $bal1 - $withdrawls;
					
										
					$sql21="INSERT INTO transactions (username, amount, details, DRCR, status1) values('$un24', $withdrawls, 'Withdraw Rs. $withdrawls ', 'DR', 'Pending')";
					//echo "<br>$sql21<br>";
					
					
					if ($conn->query($sql21) === TRUE) {
					
					 	require('db.php');
						
						$sql21="UPDATE seller_info SET balance=$newbal Where username='$un24'";
						//echo "<br>$sql21<br>";
						$conn->query($sql21);
							        
					 	$sql="Update seller_info SET account_name='$account_name', account_no='$account_no',bank_name='$bank_name',ifsc='$ifsc',branch_name='$branch_name' Where username='$email' " ;
					 	//echo "<br>$sql<br>";
						$conn->query($sql);
					
				   		?>
				   
					   <div data-form-alert="true">
	                            <div  data-form-alert-success="true">Withdrawl Request Sent Successfully..!</div><br><br><br><br><br><br><br><br><br><br>
	                        </div>
					   <?php
					} else {
						?>
						<div data-form-alert="true">
	                            <div  data-form-alert-warning="true">Some Error. Fail to send withdrawl request..!</div><br><br><br><br><br><br><br>
	                        </div>
						<?php
						
				    	//echo "Error Inserting record: " . $conn->error;
					}

						
					$conn->close();
	}
}
else
{
						
					
						
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
					$balance = $row["balance"] ;
					
					$account_name = $row["account_name"] ;
					$account_no = $row["account_no"] ;
					
					$bank_name = $row["bank_name"] ;
					$ifsc = $row["ifsc"];
					$branch_name = $row["branch_name"];
					
					
				  	}
						?>
                        
                        <form action="#" method="post" data-form-title="Signup Seller">
                            Amount To Withdrawl
							<div class="form-group">
                                <input type="number" class="form-control" name="withdrawls" required="" placeholder="" data-form-field="Phone">
                            </div>
							
							<input type="hidden" class="form-control" name="email"   value = "<?php echo $email; ?>" >
                            Email
							<div class="form-group">
                                <input type="email" class="form-control" name="email1" required=""  value = "<?php echo $email; ?>" placeholder="Email/Username*" disabled="">
                            </div>
                            Account Name *
                            <div class="form-group">
                                <input type="text" class="form-control" name="account_name" required="" placeholder=""   value = "<?php echo $account_name; ?>"data-form-field="Name">
                            </div>
							Account Number *
                            <div class="form-group">
                                <input type="text" class="form-control" name="account_no" required="" placeholder="" value = "<?php echo $account_no; ?>" data-form-field="Name">
                            </div>
							Bank Name *
                            <div class="form-group">
                                <input type="text" class="form-control" name="bank_name" required="" placeholder="" value = "<?php echo $bank_name; ?>" data-form-field="Name">
                            </div>
							IFSC *
                            <div class="form-group">
                                <input type="tel" class="form-control" name="ifsc" required="" placeholder="" value = "<?php echo $ifsc; ?>" data-form-field="Phone">
                            </div>							
							Branch Name
							<div class="form-group">
                                <input type="text" class="form-control" name="branch_name" required="" placeholder="" value = "<?php echo $branch_name; ?>"data-form-field="Phone">
                            </div>
							
							
							
                            <button type="submit" class="btn btn-info">Send Withdrawl Request</button>
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
