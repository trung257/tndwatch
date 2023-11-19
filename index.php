<?php 
   include "inc/header.php";
   include "inc/slider.php";
 ?>
 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    			<h3>Luxury Products</h3>
    		</div> 
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
	      		<?php 
	      			$product_feathered=$product->getproduct_feathered();
	      			if($product_feathered){
	      				while($result=$product_feathered->fetch_assoc()){

	      		 ?>
				
				<div class=" images_1_of_4">
					 <a href="details.php?proid=<?php echo $result['productId']?>"><img src="admin/uploads/<?php echo $result['image'] ?> " alt="" ></a>
					 <p><?php echo $fm->textShorten($result['productName'],50) ?> </p>
					 <!-- <p><?php echo $fm->textShorten($result['product_desc'],50) ?> </p>   -->
					 <!-- minh tiep tuc dung ham textShorten để lấy giới hạn kí tự -->
					 <!-- <p><span class="price"><?php echo $result['price']." VND" ?></span></p> -->
					 <p><span class="price"><?php echo $fm->format_currency($result['price'])." "."VNĐ" ?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']?>" class="details">Buy Product</a></span></div>
				</div>
				<?php 
						}
	      			}
				 ?>
			</div>
			<div class="content_bottom">
    		<div class="heading">
    		<h3>New Arrived Products</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
				<?php 
	      			$product_new=$product->getproduct_new();
	      			if($product_new){
	      				while($result_new=$product_new->fetch_assoc()){

	      		 ?>
				<div class=" images_1_of_4">
					 <a href="details.php?proid=<?php echo $result_new['productId']?>"><img src="admin/uploads/<?php echo $result_new['image'] ?> " alt=""width="212px" height="212px"/></a>
					 <p><?php echo $fm->textShorten($result_new['productName'],50) ?> </p>
					 <!-- <p><?php echo $fm->textShorten($result_new['product_desc'],50) ?> </p>   -->
					 <!-- minh tiep tuc dung ham textShorten để lấy giới hạn kí tự -->
					  <p><span class="price"><?php echo $fm->format_currency($result_new['price'])." "."VNĐ" ?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result_new['productId']?>" class="details">Buy Product</a></span></div>
				</div>
				<?php 
						}
	      			}
				 ?>
			</div>
			<!-- thử làm phân trang -->
			

    </div>

<?php 
   include "inc/footer.php";  
 ?>
