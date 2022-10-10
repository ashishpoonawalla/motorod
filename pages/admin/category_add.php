<?php 
				
		
			
			$tit = ($_POST['title']);
			$cat = ($_POST['cat']);
			
			
			
			
			
								
			require('db.php');
		    
			$sql="INSERT INTO categories(cat_title, main_cat) Values('$tit', $cat) " ;
			
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

						
				$conn->close();

			  //  header('Location: category.php');
						
						
						?>