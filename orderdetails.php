<?php 
   include "inc/header.php";
   include "inc/slider.php";
 ?>
<?php 
      $subtotal=0;

 ?>
 <?php 
    // $filepath=realpath(dirname(__FILE__));
    //  include_once ($filepath.'/../classes/cart.php');
    //  include_once ($filepath.'/../helpers/format.php');
 ?>
 <?php 
 	 // if(isset($_GET['cartid'])){
   //        $cartid=$_GET['cartid'];
   //         $delcart=$ct->del_product_cart($cartid);
   //   }

   //  if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
   //           $cartId=$_POST['cartId'];
   //    		 $quantity=$_POST['quantity'];
   //           $update_quantity_cart=$ct->update_quantity_cart($quantity,$cartId);
   //   }
  ?>
  <?php 
	  		$login_check=Session::get('customer_login');
  					if($login_check==false){
  						// header('Location:login.php');// bằng cách nào đó người dùng ko đăng nhập mà vẫn vào được trang profile này .Thì như vậy t cho quay về trang login.php
  						 echo "<script type='text/javascript'>window.location.href = 'login.php'</script>";  
  					}

  		$ct= new cart();

  		if(isset($_GET['confirmid'])){
          $id=$_GET['confirmid'];
          $time=$_GET['time'];
           $price=$_GET['price'];
          $shifted_confirm=$ct->shifted_confirm($id,$time,$price);
     }
  					
?>
 <div class="main"> 
    <div class="content">
    	<div class="cartoption">		
			<div class="cartpage">
			    	<h2>Các Đơn Hàng Của Bạn</h2>
			    	
						<table class="tblone">
							<tr>
								<th width="10%">ID</th>
								<th width="20%">Sản Phẩm</th>
								<th width="10%">Hình Ảnh</th>
								<th width="15%">Giá</th>
								<th width="25%">Số Lượng</th>
								<th width="10%">Ngày Đặt Hàng</th>
								<th width="10%">Trạng Thái</th> <!-- tình trang của sản phẩm đang được admin xử lý -->
								<th width="10%">Hoạt Động</th>
							</tr>
							<?php 
							   $customer_id=Session::get('customer_id');
								$get_cart_ordered=$ct->get_cart_ordered($customer_id);
								if($get_cart_ordered){

									
									$i=0;

									while ($result=$get_cart_ordered->fetch_assoc()) {
										$i++;
									
							 ?>
							<tr>
								<td><?php echo $i?></td>
								<td><?php echo $result['productName']?></td>
								<td><img src="admin/uploads/<?php echo $result['image'] ?> " alt=""/></td>
								<td><?php echo $fm->format_currency($result['price'])." "."VNĐ" ?></td>
								<td>
								
									<?php echo $result['quantity']?>
								</td>
								<td><?php echo $fm->formatDate($result['date_order'])?></td>
								<td>
									
									<?php 
 										if($result['status']==0){
 											echo "Đang xử lý";
 										}
 										elseif($result['status']==1){
 											
									 ?>
									 <span>Chờ xác nhận</span>
									    
									 <?php 
									  	}elseif($result['status']==2){

									  			echo "Đã nhận hàng";
									  		}
									 ?>

								</td>
								<?php 
									if($result['status']==0)
									{
 								?>
 								   <td><?php echo "N/A";?> </td><!--  nếu tình trang chưa xử lý thì ko có ẩn hoặc xóa -->
 								<?php 
									}
									elseif($result['status']=='1'){
								?>	
								     <td><a href="?confirmid=<?php echo $customer_id ?>&price=<?php echo $result['price'] ?>&time=<?php echo $result['date_order']?>">Xác nhận</a> </td>
								<?php 
									}else{
								?>
								    <td><?php echo "Đã nhận hàng"; ?></td> <!-- nếu tình trạng đã xử lý rồi thì có thể xóa sp đi -->
								 <?php 
									    }
								 ?>
									
 								   
									
								
								
							</tr>
							<?php }

							       // $subtotal+=$total;
								   								}
							 ?>
							
							
							
						</table>
						            <?php 
									  // $check_cart=$ct->check_cart();
									  // if($check_cart){
									  	
								  		
								   ?>
						
					</div>
					<div class="shopping">
						<div class="shopleft">
							<a href="index.php"> <img src="images/shop.png" alt="" /></a>
						</div>
						<!-- <div class="shopright">
							<a href="payment.php"> <img src="images/check.png" alt="" /></a>
						</div> -->
					</div>
    	</div>  	
       <div class="clear"></div>
    </div>

<?php 
   include "inc/footer.php";  
 ?>

