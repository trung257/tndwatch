<?php 
   include "inc/header.php";
   // include "inc/slider.php";
 ?>
 <?php
    if(isset($_GET['orderid']) && $_GET['orderid']=='order'){
          $customer_id=Session::get('customer_id');
          $insertOrder=$ct->insertOrder($customer_id);
          	$delCart=$ct->del_all_data_cart(); // khi mà insert tất cả dữ liệu vào order rồi thi ta xóa sản phẩm trong giỏ hàng đi
          	header('Location:success.php');
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
 	h2.success_order{
 		text-align: center;
 		color: red;
 	}
 	p.success_note{
 		text-align: center;
 		padding: 8px;
 		font-size: 17px;
 	}
 </style>
 
 <div class="main">
    <div class="content">
    	<div class="section group">
	    	<h2 class="success_order">Đặt Hàng Thành Công</h2>
	    	<?php 
	    	$customer_id=Session::get('customer_id');
 				$get_amount=$ct->getAmountPrice($customer_id);  //getAmountPrice(): lay tong cong gia
 				if($get_amount){
 					$amount=0;
 					while ($result=$get_amount->fetch_assoc()) {
 						$price=$result['price'];
 						$amount+=$price;

 					}
 				}
	    	 ?>
	    	<p class="success_note">Cảm ơn bạn đã mua hàng trên trang web của chúng tôi <?php 
	    																				$vat=$amount *0.1 ; 
	    																				  $total=$vat+$amount;
	    																				  // echo "<span class='error'>$total  VNĐ</span>" ;
	    																				   
	    																		  ?></p>

	    	<p class="success_note">Chúng tôi sẽ liên lạc sớm nhất có thể. Quý khách vui lòng xem chi tiết đơn hàng đã đặt.<a href="orderdetails.php">Click here</a></p>
	    	<?php 

	    	 ?>
	    	

 	    </div>
 	</div>



	<?php 
   include "inc/footer.php";  

 ?>


