<?php 
				
		
			$sku = ($_POST['sku']);
			$title = ($_POST['title']);
			$price = ($_POST['price']);
			$brand = ($_POST['brand']);
			$cat = ($_POST['category']);
			$key = ($_POST['keyward']);
			$des = ($_POST['desc']);
			
								
							require('db.php');
		    //																																										                                  t_cat, product_desc, product_keywords, product_image, img2, img3, img4
				$sql="INSERT INTO products(SKU, product_title, product_price, product_brand, product_cat, product_desc, product_keywords, product_image, img2, img3, img4) Values('$sku','$title','$price','$brand','$cat','$des',' ','noimg.png','noimg.png','noimg.png','noimg.png') " ;
			//$sql="INSERT INTO seller_info('username', 'password', 'store_name' ) Values('$email','$pass','$snm')" ;

				if ($conn->query($sql) === TRUE) {
					
					$last_id = $conn->insert_id;
					session_start();
					$_SESSION["pidIMG"] = $last_id ;
				    header('Location: Seller.ProductImg.php');
					
				} else {
					?>
					<div data-form-alert="true">
                            <div data-form-alert-warning="true">Some Error when creating product!<a href='Seller.ProductAdd.php'> Back To Products </a></div><br><br><br><br><br><br><br>
                        </div>
						<?php
						
				    echo "Error Inserting record: " . $conn->error;
				}

						
				$conn->close();

					
						
						?>