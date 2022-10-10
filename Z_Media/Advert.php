Sponsered
	<?php
			
			$conn=new mysqli("localhost","root","","media");
			
			if($conn-> connect_error)
			{
				die("connection failed:".$conn->connect_error);	
			}
			
			
			$sql="SELECT * FROM advertisement ORDER BY aid DESC" ;
			
			$result = $conn->query($sql);

			
			 while($row = $result->fetch_assoc())
			  {
			  	$aid=$row['AID'];
			  	$tit=$row['AdTitle'];
				$det=$row['AdDetails'];				
				$img=$row['AdImage'];
				$url=$row['AdURL'];
			
				
				
			  	?>
			  	
				<div class="media">
				<a href="<?php echo $url; ?>" target="_blank">
				 <img src="<?php echo $img; ?>" width="150px" class="media-object" alt='' />
					
						<h4 class="media-heading">
							<?php echo $tit; ?>
						</h4>
						</a>		
						<p><?php echo $det; ?></p>
					   	
						
					
				</div>
		    	
				
				<?php
				
				}
				
				$conn->close();

			

?>