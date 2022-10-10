<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Invoice</title>
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
            <h1>Order Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Order Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
 
        <div class="row">
          <div class="col-12">
            <!--
			<div class="callout callout-info">
              <h5><i class="fas fa-info"></i> Note:</h5>
              This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
            </div>
			-->



            <!-- Main content -->
			
<?php 

if(isset($_POST["id11"])){
	$idx = $_POST["id11"];
	$dtx = $_POST["date1"];
	echo "$idx - $dtx";
	require('db.php');			
			
			
	$sql8="UPDATE orders_detail SET payment_date='$dtx', payment_status='WAIT' WHERE id=$idx " ;			
	$result = $conn->query($sql8);
	
}

//--------------------------------
	$var = $_REQUEST['var'];
	$un25 =  $_SESSION["sname"];
	
	require('db.php');
	$sql3="SELECT * FROM seller_info Where username='$un25'" ;
									
		$result3 = $conn->query($sql3);

		if($row3 = $result3->fetch_assoc())
		{
		  	$store=$row3['store_name'];
			$gst=$row3['gst_num'];
			$gst=$row3['gst_num'];
			$add=$row3['address'];
			$pho=$row3['phone'];
			$city=$row3['city']." - ".$row3['pin'];
		}
		
		
		
		
		
		
?>
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> <?php echo $store; ?>
                    <small class="float-right"></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
			  
			  
              <div class="row invoice-info">
              
			  <!--
			    <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong><?php echo $store; ?></strong><br>
                    <?php echo $add; ?><br>
                    <?php echo $city; ?><br>
                    Phone: <?php echo $pho; ?><br>
                    Email: <?php echo $un25; ?>
                  </address>
                </div>
				-->
                <!-- /.col -->


<?php 
	
	require('db.php');
	$sql4="SELECT * FROM orders Where order_id=$var" ;
									
		$result4 = $conn->query($sql4);
		$uid = "";
		if($row4 = $result4->fetch_assoc())
		{
			$uid=$row4['user_id'];
			$sta=$row4['order_status'];
		  	$dt1=$row4['date1'];	
			$abc = explode(" ",$dt1);
			$dt2 = 	$abc[0];						
			$pmd=$row4['payment_mod'];
			$pst=$row4['payment_status'];
			
		
			
		}
		
		
		require('db.php');
		$sql5="SELECT * FROM user_info Where user_id=$uid" ;
									
		$result5 = $conn->query($sql5);
		
		if($row5 = $result5->fetch_assoc())
		{
			
		  	$unm=$row5['first_name']." ".$row5['last_name'];
			$add=$row5['address'];
			$city=$row5['city']." - ".$row5['pin'];
			$pho=$row5['mobile'];			
			$eml=$row5['email'];
			
			
		}
		
		
		
?>			  
		

                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong><?php echo $unm; ?></strong><br>
                    <?php echo $add; ?><br>
                    <?php echo $city; ?><br>
                    Phone: <?php echo $pho; ?><br>
                    Email: <?php echo $eml; ?>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  
                  <b>Order ID:</b> <?php echo $var; ?><br>
                  <b>Date:</b> <?php echo $dt2; ?><br>
                  <b>Payment Mode</b> <?php echo $pmd; ?>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->



              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>Code</th>
                      <th>Product</th>
                      <th>Qty</th>
                      <th>Amount</th>
					  <th>Store</th>
					  <th>Payment</th>
                    </tr>
                    </thead>
                    <tbody>
					
					
<?php
			require('db.php');			
			
			//$sql="SELECT * FROM orders_detail WHERE username='$un25' AND order_id=$var " ;			
			$sql="SELECT * FROM orders_detail WHERE order_id=$var " ;			
			$result = $conn->query($sql);
			$total=0;
			$sn=0;
			while($row = $result->fetch_assoc())
			{
				$sn++;
				
				$id = $row["id"];
				$p1 = $row["p_id"];
				$q1 = $row["qty"];
				$pri1 = $row["rate"];
				$store1 = $row["username"];
				$pay1 = $row["payment_status"];
				$paydt = $row["payment_date"];
				
				$sql1="SELECT * FROM products Where product_id=$p1 " ;
			
				$result1 = $conn->query($sql1);


			 	if($row1 = $result1->fetch_assoc())
			  	{
			  		$pid1=$row1['product_id'];
			  		$img1=$row1['product_image'];
					$tit1=$row1['product_title'];
					//$pri1=$row1['product_price'];

					$amt = $q1 * $pri1;
					
				    //----------------------------------------------------
					
					//require('db.php');
					$store9="";
					$sql9="SELECT * FROM seller_info Where username='$store1'" ;
									
					$result9 = $conn->query($sql9);

					if($row9 = $result9->fetch_assoc())
					{
					  	$store9=$row9['store_name'];
					}
				?>
			
					
					
					
					
					
                    <tr>
                      <td><?php echo $sn; ?></td>
                      <td><?php echo $pid1; ?></td>
					  <!-- <figure class="mbr-figure mbr-figure--adapted mbr-figure--caption-inside-bottom mbr-figure--full-width"><img src="../../assets/images/<?php echo $img1; ?>" style="height:60px;" class="mbr-figure__img"></figure></td> -->
                      <td><?php echo $tit1; ?></td>
                      <td><?php echo $q1; ?></td>
                      <td><?php echo $pri1; ?></td>
                      <td><?php echo "$store1"; ?></td>
					  	<td>
					  					  
					  <?php 
					  		if ($pay1 == "NO"){
								
							
					  			echo "<a href='order_details.php?var=$var&id=$id'>Not Paid</a>";
								
								
								 	
									if(isset($_REQUEST["id"])){
										$idd = $_REQUEST["id"];
										if($idd == $id){
											?>
											<form action="#" method="POST">
												<input type="hidden" name="id11" value="<?php echo $id; ?>" >
												<input type="date" name="date1" required="" >
												<input type="submit" value="Paid">
											</form>
											<?php
										}
											
										
									}
								} else {
									echo "$pay1 - $paydt";
								}	
								 ?>	
						</td>
                    </tr>
                    
					
					
					<?php
				}
				$total += $amt;
				
			}
			
			$ttt = number_format($total,2);
			
			?>		
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead"><br><br><br></p>
				  <!--
                  <img src="../../dist/img/credit/visa.png" alt="Visa">
                  <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
                  <img src="../../dist/img/credit/american-express.png" alt="American Express">
                  <img src="../../dist/img/credit/paypal2.png" alt="Paypal">
				-->
                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                                        
                  </p>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead"></p>


                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td><?php echo $ttt; ?></td>
                      </tr>
                      <tr>
                        <th>Tax (0%)</th>
                        <td>0.00</td>
                      </tr>
                      <tr>
                        <th>Shipping:</th>
                        <td>0.00</td>
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <td><?php echo $ttt; ?></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <!-- <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a> -->
                  
				  
				  <!--
				  <button type="button" class="btn btn-success float-right"><i class="fa fa-truck"></i>
				  <a style="color: #fff;"href="order_shipping.php?var=<?php echo $var; ?>">Send To Shipping</a>
                  </button>
				  
				  -->
                  <!--
				  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
				  -->
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
	
	
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer no-print">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.1
    </div>
    <strong>Copyright &copy; 2019 motorod.in.</strong> All rights reserved.
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
