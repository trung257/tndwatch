<?php 
   include "inc/header.php";
   include "inc/slider.php";
 ?>
<?php 
      $subtotal=0;
 ?>
<?php 
		if(isset($_GET['proid'])){
			$customer_id=Session::get('customer_id');
          $proid=$_GET['proid'];
           $delwlist=$product->del_wishlist($proid,$customer_id); // xóa sản phẩm yêu thích đúng với productid và đúng với người dùng đăng nhập
     }
 ?>
 <div class="main">
    <div class="content">
    	<div class="cartoption">		
			<div class="cartpage">
			    	<h2>Sản Phẩm Yêu Thích</h2>
			    	<?php 
  						// if(isset($update_quantity_cart)){
  						// 	echo $update_quantity_cart;
  						// }
			    	 ?>
			    	 <?php 
  						// if(isset($delcart)){
  						// 	echo $delcart;
  						// }
			    	 ?>
						<table class="tblone">
							<tr>
								<th width="10%">ID</th>
								<th width="20%">Sản Phẩm</th>
								<th width="20%">Hình Ảnh</th>
								<th width="15%">Giá</th>
								<th width="15%">Hoạt Động</th>
								
							</tr>
							<?php 
								$customer_id=Session::get('customer_id');
								$get_wishlist=$product->get_wishlist($customer_id);
								if($get_wishlist){

									$i=0;

									while ($result=$get_wishlist->fetch_assoc()) {
										$i++;
										# code...
									
							 ?>
							<tr>
								<td><?php echo $i?></td>
								<td><?php echo $result['productName']?></td>
								<td><img src="admin/uploads/<?php echo $result['image'] ?> " alt=""/></td>
								<td><?php echo $fm->format_currency($result['price'])." "."VNĐ" ?></td>
								
								
								<td>
									<a href="details.php?proid=<?php echo $result['productId'] ?>">Mua Hàng</a> ||
									<a href="?proid=<?php echo $result['productId'] ?>">Xóa</a>
								</td>
							</tr>
							<?php 
							      
								   }
								}
							 ?>

						</table>
	        
					</div>
					<div class="shopping">
						<div class="shopleft">
							<center>
								<a href="index.php"> <img src="images/shop.png" alt="" /></a>
								
							</center>
							
						</div>
						
					</div>
    	</div>  	
       <div class="clear"></div>
    </div>

<?php 
   include "inc/footer.php";  
 ?>

