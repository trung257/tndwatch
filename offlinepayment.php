<?php 
   include "inc/header.php";
   // include "inc/slider.php";
 ?>
 <?php
    if(isset($_GET['orderid']) && $_GET['orderid']=='order'){
          $customer_id=Session::get('customer_id');
          $insertOrder=$ct->insertOrder($customer_id);
          	$delCart=$ct->del_all_data_cart(); // khi mà insert tất cả dữ liệu vào order rồi thi ta xóa sản phẩm trong giỏ hàng đi
          	// header('Location:success.php');
          	 echo "<script type='text/javascript'>window.location.href = 'success.php'</script>";
     }


     // if(!isset($_GET['orderid']) || $_GET['orderid']==NULL){
     // 	 echo "<script>window.location='404.php'</script>";     
     // }
     // else{
     // 	 $id=$_GET['orderid'];
     // }

     //  if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
            
     //  		 $quantity=$_POST['quantity'];
     //         $AddtoCart=$ct->add_to_cart($quantity,$id);
     // }
 
 ?>
 <?php 
 	$subtotal=0;
  ?>
 <style>
 	.box_left{
 		width: 50%;
 		border: 1px solid #666;
 		float: left;
 		padding: 10px
 	}
 	.box_right{
 		width: 45%;
 		border: 1px solid #666;
 		float: right;
 		padding: 10px
 	}
 	.submit_order:hover{
 		padding: 10px 70px;
 		border: none;
 		background: red;
 		font-size: 25px;
 		color: #fff;
 		border-radius: 5%;
 		cursor: pointer;
 	}
 	.submit_order{
 		padding: 10px 70px;
 		border: none;
 		background: gray;
 		font-size: 25px;
 		color: white;
 		border-radius: 5%;
 		cursor: pointer;
 	}
 	.suahoso{
		    border: 1px solid red;
    padding: 10px;
    background: white;
	}
 </style>

 <form action="" method="post">
 <div class="main">
    <div class="content">
    	<div class="section group">
	    	<div class="heading">
	    		 	<h3>Thanh Toán offline</h3>
	    	</div>
	    		
	    	<div class="clear"></div>	
	    	<div class="box_left">
	    		<!-- Trái:chứa thông tin của giỏ hàng -->
	    		<div class="cartpage">
			    	<!-- <h2>Your Cart</h2> -->
			    	<?php 
  						// if(isset($update_quantity_cart)){
  						// 	echo $update_quantity_cart;
  						// }
			    	 ?>
			    	 <?php 
  						if(isset($delcart)){
  							echo $delcart;
  						}
			    	 ?>
						<table class="tblone">
							<tr>
								<th width="5%">ID</th>
								<th width="15%">Sản Phẩm</th>
								<th width="10%">Hình Ảnh</th>
								<th width="15%">Giá</th>
								<th width="25%">Số Lượng</th>
								<th width="20%">Thành Tiền</th>
								<!-- <th width="10%">Action</th> -->
							</tr>
							<?php 
								$get_product_cart=$ct->get_product_cart();
								if($get_product_cart){

									// $subtotal=0;
									$i=0;

									while ($result=$get_product_cart->fetch_assoc()) {
										$i++;
									
							 ?>
							<tr>
								<td><?php echo $i?></td>
								<td><?php echo $result['productName']?></td>
								<td><img src="admin/uploads/<?php echo $result['image'] ?> " alt=""/></td>
								<td><?php echo $fm->format_currency($result['price']) ?></td>
								<td>
									<!-- <form action="" method="post">
										
										<input type="hidden" name="cartId" value="<?php echo $result['cartId']?>" />   
										<input type="number" name="quantity" value="<?php echo $result['quantity']?>" min="1"/>
										<input type="submit" name="submit" value="Update"/>
									</form> -->
									<?php echo $result['quantity']?>
								</td>
								<td>
								      <!-- Tong gia -->
								      <?php 
								      		 $total=$result['price']*$result['quantity'];
								      		echo $fm->format_currency($total);
								       ?>								     

								</td>
								<!-- <td><a href="?cartid=<?php echo $result['cartId'] ?>">Xóa</a></td> -->
							</tr>
							<?php 
							       $subtotal+=$total;
								   }
								}
							 ?>
							
							
							
						</table>
						            <?php 
									  $check_cart=$ct->check_cart();
									  if($check_cart){
									  	
								  		
								   ?>
						<table style="float:right;text-align:left;" width="40%">
							<tr>
								<th>Tổng Phụ : </th>
								<td>
									<?php 
									  
									  echo $fm->format_currency($subtotal)." "."VNĐ"; //tổng giá của các total
									  Session::set('sum',$subtotal);

								    ?>
								 	
								 </td>
							</tr>
							<tr>
								<th>VAT : </th>
								<td>10% (<?php echo $fm->format_currency($vat=$subtotal*0.1)." "."VNĐ"; ?>) </td>  <!-- 10% thue -->
							</tr>
							<tr>
								<th>Tổng Cộng :</th>
								<td>
									<?php 
										$vat=$subtotal*0.1;
										$gtotal=$subtotal+$vat;
										 echo $fm->format_currency($gtotal)." "."VNĐ";
									 ?> 
								</td>
							</tr>
					   </table>
							        <?php 
							        	}else{

							        		echo "<h3 style='color:red;font-size:18px;text-align:center;font-weight:bold'>GIỎ HÀNG CỦA BẠN RỖNG</h3>";
							        	}
							         ?>
					</div>
	    	</div>
	    	<div class="box_right">
	    		<!-- Phải: chứa thông tin của người dùng đăng nhập -->
	    		<?php 
	    		    $id=Session::get('customer_id');

	    			$get_customers=$cs->show_customer($id);
	    			if($get_customers){
	    				while ($result=$get_customers->fetch_assoc()) {
	    					# code...
	    				
	    		 ?>
	    		<table class="tblone">
	    			<tr>
	    				<td>Tên</td>
	    				<td>:</td>
	    				<td> <?php echo $result['name']?> </td>
	    			</tr>
	    			<tr>
	    				<td>Thành Phố</td>
	    				<td>:</td>
	    				<td><?php echo $result['city']?></td>
	    			</tr>
	    			<tr>
	    				<td>Số Điện Thoại</td>
	    				<td>:</td>
	    				<td><?php echo $result['phone']?></td>
	    			</tr>
	    			<tr>
	    				<td>Quốc Gia</td>
	    				<td>:</td>
	    				<td><?php echo $result['country']?></td>
	    			</tr>
	    			<tr>
	    				<td>Zipcode</td>
	    				<td>:</td>
	    				<td><?php echo $result['zipcode']?></td>
	    			</tr>
	    			<tr>
	    				<td>Email</td>
	    				<td>:</td>
	    				<td><?php echo $result['email']?></td>
	    			</tr>
	    			<tr>
	    				<td>Địa Chỉ</td>
	    				<td>:</td>
	    				<td><?php echo $result['address']?></td>
	    			</tr>
	    			<tr>
	    				<td colspan="3"><a href="editprofile.php" class="suahoso">Sửa Hồ Sơ</a></td>
	    				
	    			</tr>
	    			<?php 
		    				}

		    			}
	    			 ?>
	    		</table>
	    	</div>
 		</div>
 		<br>
 		<center>
 		   <a href="?orderid=order" class="submit_order">Đặt Hàng</a>
 		</center>  

 	</div>
 </form>

	<?php 
   include "inc/footer.php";  

 ?>


