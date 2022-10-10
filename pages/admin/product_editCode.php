<?php 
				
		
			$pid = $_POST['pid'];
			//$sku = ($_POST['sku']);
			$title = ($_POST['title']);
			$price = ($_POST['price']);
			$brand = ($_POST['brand']);
			$cat = ($_POST['category']);
			$key = ($_POST['keyward']);
			$des = ($_POST['desc']);
			$wei = ($_POST['weight']);
			$com = ($_POST['compatible']);
			
								
							require('db.php');
		    //																																										                                  t_cat, product_desc, product_keywords, product_image, img2, img3, img4
			
				$sql="UPDATE products SET product_title='$title', product_price=$price, product_brand=$brand, product_keywords='$key', weight=$wei, compatible='$com' Where product_id=$pid " ;
				$conn->query($sql);
				//$sql="UPDATE products SET product_desc='$des' Where product_id=$pid " ;
				//$conn->query($sql);
				
			//$sql="INSERT INTO seller_info('username', 'password', 'store_name' ) Values('$email','$pass','$snm')" ;

				if ($conn->query($sql) === TRUE) {
					session_start();
					$_SESSION["pidIMG"] = $pid;
					header('Location: product_Img.php');
					
				} else {
					?>
					<div data-form-alert="true">
                            <div data-form-alert-warning="true">Some Error when creating product! </a></div><br><br><br><br><br><br><br>
                        </div>
						<?php
						
				    echo "Error Inserting record: " . $conn->error;
				}

						
				$conn->close();

					
						
						?>