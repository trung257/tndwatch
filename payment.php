<?php 
   include "inc/header.php";
   // include "inc/slider.php";
 ?>
 <?php
    // if(isset($_GET['productid']) && $_GET['productid']!=NULL){
    //       $id=$_GET['productid'];
    //  }

     // if(!isset($_GET['proid']) || $_GET['proid']==NULL){
     // 	 echo "<script>window.location='404.php'</script>";     
     // }
     // else{
     // 	 $id=$_GET['proid'];
     // }

     //  if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
            
     //  		 $quantity=$_POST['quantity'];
     //         $AddtoCart=$ct->add_to_cart($quantity,$id);
     // }
 ?>
 <?php 
	  		$login_check=Session::get('customer_login');
  					if($login_check==false){
  						// header('Location:login.php');
  						echo "<script type='text/javascript'>window.location.href = 'login.php'</script>";  
  						// bằng cách nào đó người dùng ko đăng nhập mà vẫn vào được trang profile này .Thì như vậy t cho quay về trang login.php
  					}
  					
?>
<style>
	
	h3.payment{
		text-align: center;
		font-size: 20px;
		font-weight: bold;
		text-decoration: underline;
	}
	.warpper_method{

		text-align: center;
		width: 550px;
		margin: 0 auto;
		border: 1px solid #666;
		padding:20px;
		background: cornsilk;
	}
	.warpper_method a{
		padding: 10px;
		background: red;
		color: #fff;
	}
		.warpper_method a:hover{
		padding: 10px;
		background: #fff;
		color: red;
		border: 1px solid red;
	}
	.warpper_method h3{
		margin-bottom: 20px;
	}
</style>
 <div class="main">
    <div class="content">
    	<div class="section group">
    		<div class="content_top">
	    		<div class="heading">
	    		 	<h3>Phương Thức Thanh Toán</h3>
	    		</div>
	    		
	    		<div class="clear"></div>

	    		<div class="warpper_method">
		    		<h3 class="payment">Chọn Phương Thức Thanh Toán Của Bạn</h3>
		    		<!-- offlinepayment:thanh toán theo kiểu đặt vào giỏ hàng: vidu: như đặt hàng vào trang admin -->
		    	    <a href="offlinepayment.php">Offline Payment</a> 
		    		<a href="vnpay_php/vnpay_pay.php">Online Payment</a> 
		    		 <!-- onlinepayment:trả tiên qua cổng thanh toán trực tuyền như ngân lượng.,.. -->
		    		 	<br> <br> <br>
		    		 <a href="cart.php" style="background: gray"><< Previous </a>
	    		</div>
    	    </div>
	    		
 		</div>
 		
 	</div>

	<?php 
   include "inc/footer.php";  
 ?>


