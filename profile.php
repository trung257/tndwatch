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
  						header('Location:login.php');// bằng cách nào đó người dùng ko đăng nhập mà vẫn vào được trang profile này .Thì như vậy t cho quay về trang login.php
  					} 
  					
?>
<style>
	.suahoso{
		border: 1px solid red;
		padding: 10px;
		background: white;
	}
</style>
 <div class="main">
    <div class="content">
    	<div class="section group">
    		<div class="content_top">
	    		<div class="heading">
	    		 <h3>Thông Tin Khách Hàng</h3>
	    		</div>
	    		<div class="clear"></div>
    	    </div>
	    		<?php 
	    		    $id=Session::get('customer_id');

	    			$get_customers=$cs->show_customer($id);
	    			if($get_customers){
	    				while ($result=$get_customers->fetch_assoc()) {
	    					# code...
	    				
	    		 ?>
	    		<table class="tblone">
	    			<tr>
	    				<td>Tên Khách Hàng</td>
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

	<?php 
   include "inc/footer.php";  
 ?>


