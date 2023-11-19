<?php 
   include "inc/header.php";
   include "inc/slider.php";
 ?>
<?php 
      $subtotal=0;
 ?>
 <?php 
 	 if(isset($_GET['cartid'])){
          $cartid=$_GET['cartid'];
           $delcart=$ct->del_product_cart($cartid);
     }

    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
             $cartId=$_POST['cartId'];
      		 $quantity=$_POST['quantity'];
             $update_quantity_cart=$ct->update_quantity_cart($quantity,$cartId);
     }
  ?>
  <?php 
     // sửa chức năng thêm sản phẩm vào giỏ hàng và giá tiền của nó sẽ tự động up lên trên header
      // chứ không cần vào trang cart.php .Ấn load lại thì mới hiện giá tiền
    if(!isset($_GET['id'])){
    	echo "<meta http-equiv='refresh' content='0;URL=?id=live' >";
    }
   ?>
 <div class="main">
    <div class="content">
    	<div class="cartoption">		
			<div class="cartpage">
			    	<h2>Giỏ Hàng Của Bạn</h2>
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
								<th width="20%">Sản Phẩm</th>
								<th width="10%">Hình Ảnh</th>
								<th width="15%">Giá</th>
								<th width="25%">Số Lượng</th>
								<th width="20%">Thành Tiền</th>
								<th width="10%">Hoạt Động</th>
							</tr>
							<?php 
								$get_product_cart=$ct->get_product_cart();
								if($get_product_cart){

									// $subtotal=0;

									while ($result=$get_product_cart->fetch_assoc()) {
										# code...
									
							 ?>
							<tr>
								<td><?php echo $result['productName']?></td>
								<td><img src="admin/uploads/<?php echo $result['image'] ?> " alt=""/></td>
								<td><?php echo $fm->format_currency($result['price']) ?></td>
								<td>
									<form action="" method="post">
										<!-- theem no de thuc hien cho cong viec update so luong trong gio hang -->
										<input type="hidden" name="cartId" value="<?php echo $result['cartId']?>" />   
										<input type="number" name="quantity" value="<?php echo $result['quantity']?>" min="1"/>
										<input type="submit" name="submit" value="Update"/>
									</form>
								</td>
								<td>
								      <!-- Tong gia -->
								      <?php 
								      		 $total=$result['price']*$result['quantity'];
								      		 echo $fm->format_currency($total);
								       ?>								     

								</td>
								<td><a href="?cartid=<?php echo $result['cartId'] ?>">Xóa</a></td>
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
								<th>Tổng Phụ: </th>
								<td>
									<?php 
									  
									  echo $fm->format_currency($subtotal)." "."VNĐ"; //tổng giá của các total
									  Session::set('sum',$subtotal);

								    ?>
								 	
								 </td>
							</tr>
							<tr>
								<th>VAT : </th>
								<td>10% (<?php echo $fm->format_currency($vat=$subtotal*0.1)." "."VNĐ"; ?>)</td>  <!-- 10% thue -->
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
					<div class="shopping">
						<div class="shopleft">
							<a href="index.php"> <img src="images/shop.png" alt="" /></a>
						</div>
						<div class="shopright">
							<a href="payment.php"> <img src="images/check.png" alt="" /></a>
						</div>
					</div>
    	</div>  	
       <div class="clear"></div>
    </div>

<?php 
   include "inc/footer.php";  
 ?>

