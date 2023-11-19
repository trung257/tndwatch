<?php 
		include_once'helpers/format.php'; 
 ?>
	<div class="header_bottom">
		<div class="header_bottom_left">
			<div class="section group">
				<?php 
 					$getlastestDell=$product->getlastestDell(); // casio
 					if($getlastestDell){
 						while ($resultdell=$getlastestDell->fetch_assoc()) {
 							# code...
 					
 				?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php?proid=<?php echo $resultdell['productId']?>"> <img src="admin/uploads/<?php echo $resultdell['image'] ?> " alt=""/></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>casio</h2>

						<p><?php echo $fm->textShorten($resultdell['productName'],50) ?></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $resultdell['productId']?>">Buy Product</a></span></div>
				   </div>
			   </div>
			   <?php 

					}
				}
			    ?>		
			    	<!--  -->
			    <?php 
 					$getlastestSamSung=$product->getlastestSamSung(); // ghi trong class product
 					if($getlastestSamSung){
 						while ($resultSS=$getlastestSamSung->fetch_assoc()) {
 							# code...
 					
 				?>	
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						  <a href="details.php?proid=<?php echo $resultSS['productId']?>"><img src="admin/uploads/<?php echo $resultSS['image'] ?> " alt=""/></a>
					</div>
					<div class="text list_2_of_1">
						  <h2>citizen</h2>
						  <p><?php echo $fm->textShorten($resultSS['productName'],50) ?></p>
						  <div class="button"><span><a href="details.php?proid=<?php echo $resultSS['productId']?>">Buy Product</a></span></div>
					</div>
				</div>
				  <?php 

						}
					}
			    ?>	
			</div>
			<div class="section group">
				<?php 
 					$getlastestApple=$product->getlastestApple(); // bulova
 					if($getlastestApple){
 						while ($resultAP=$getlastestApple->fetch_assoc()) {
 							# code...
 					
 				?>	
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php?proid=<?php echo $resultAP['productId']?>"> <img src="admin/uploads/<?php echo $resultAP['image'] ?> " alt=""/></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>bulova</h2>
						<p><?php echo $fm->textShorten($resultAP['productName'],50) ?></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $resultAP['productId']?>">Buy Product</a></span></div>
				   </div>
			   </div>	
			   		 <?php 

						}
					}
			    ?>	
			    <!--  -->
			    <?php 
 					$getlastestOppo=$product->getlastestOppo(); // seiko
 					if($getlastestOppo){
 						while ($resultOP=$getlastestOppo->fetch_assoc()) {
 							# code...
 					
 				?>	
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						  <a href="details.php?proid=<?php echo $resultOP['productId']?>"><img src="admin/uploads/<?php echo $resultOP['image'] ?> " alt=""/></a>
					</div>
					<div class="text list_2_of_1">
						  <h2>seiko</h2>
						  <p><?php echo $fm->textShorten($resultOP['productName'],50) ?></p>
						  <div class="button"><span><a href="details.php?proid=<?php echo $resultOP['productId']?>">Buy Product</a></span></div>
					</div>
				</div>
				 <?php 

						}
					}
			    ?>	
			</div>
		  <div class="clear"></div>
		</div>
			 <div class="header_bottom_right_images">
		   <!-- FlexSlider -->
             
			<section class="slider">
				  <div class="flexslider">
					<ul class="slides">
						<?php 
							$get_slider=$product->show_slider();
							if($get_slider){
								while ($result_slider=$get_slider->fetch_assoc()) {
									# code...
								
						 ?>
						<li><img src="admin/uploads/<?php echo $result_slider['slider_image'] ?> " alt="<?php echo $result_slider['sliderName'] ?>"/></li>
						<?php 
							   }

							}
						 ?>
						
				    </ul>
				  </div>
	      	</section>
<!-- FlexSlider -->
	    </div>
	  <div class="clear"></div>
  </div>	
