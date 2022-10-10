<?php 
				
		
			
			$cid= ($_REQUEST['cid']);
			
			
			require('db.php');
					
			$sql1="SELECT * FROM products Where product_cat=$cid" ;
						
			$result1 = $conn->query($sql1);

				$s=0;		
				if($row1 = $result1->fetch_assoc())
				{
						
				}	
				else
				{
					
								
				require('db.php');
			    
				$sql="Delete From products Where product_cat=$cid " ;
				
					if ($conn->query($sql) === TRUE) {
						
						$last_id = $conn->insert_id;
						
						
					} else {
						?>
						<div data-form-alert="true">
	                            <div data-form-alert-warning="true">Some Error when creating product!<a href='Seller.ProductAdd.php'> Back To Products </a></div><br><br><br><br><br><br><br>
	                        </div>
							<?php
							
					    echo "Error Inserting record: " . $conn->error;
					}

				}						
				$conn->close();

			 //   header('Location: category.php');
						
						
						?>