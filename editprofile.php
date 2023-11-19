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
 		 $id=Session::get('customer_id');

      if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['save'])){
           
             $UpdateCustomer=$cs->update_customer($_POST,$id);
     }
 ?>
 <?php 
	  		$login_check=Session::get('customer_login');
  					if($login_check==false){
  						header('Location:login.php');// bằng cách nào đó người dùng ko đăng nhập mà vẫn vào được trang profile này .Thì như vậy t cho quay về trang login.php
  					}
  					
?>

 <div class="main">
    <div class="content">
    	<div class="section group">
    		<div class="content_top">
	    		<div class="heading">
	    		 <h3> Cập Nhật Thông Tin Khách Hàng</h3>
	    		</div>
	    		<div class="clear"></div>
    	    </div>
	    	<form action="" method="post">
	    		<table class="tblone">
	    			<tr>
	    				
	    					<?php
	    						if(isset($UpdateCustomer)){
	    							echo '<td colspan="2">'.$UpdateCustomer.'</td>';
	    						}
	    					?>
	    				
	    			</tr>
	    			<?php 
		    		    $id=Session::get('customer_id');

		    			$get_customers=$cs->show_customer($id);
		    			if($get_customers){
		    				while ($result=$get_customers->fetch_assoc()) {
		    					# code...
		    				
	    		    ?>
	    			<tr>
	    				<td>Tên Khách Hàng</td>
	    				<td>:</td>
	    				<td><input type="text" name="name" value="<?php echo $result['name']?>" size=50 ></td>
	    				
	    			</tr>
	    			<tr>
	    				<td>Thành Phố</td>
	    				<td>:</td>
	    				<td><input type="text" name="city" value="<?php echo $result['city']?>" size=50></td>
	    				
	    			</tr>
	    			<tr>
	    				<td>Số Điện Thoại</td>
	    				<td>:</td>
	    				<td><input type="text" name="phone" value="<?php echo $result['phone']?>" size=50 ></td>
	    				
	    			</tr>
	    			<tr>
	    				<td>Quốc Gia</td>
	    				<td>:</td>
	    				<td><input type="text" name="country" value="<?php echo $result['country']?>" size=50 ></td>
	    				
	    			</tr>
	    			<tr>
	    				<td>Zipcode</td>
	    				<td>:</td>
	    				<td><input type="text" name="zipcode" value="<?php echo $result['zipcode']?>" size=50 ></td>
	    				
	    			</tr>
	    			<tr>
	    				<td>Email</td>
	    				<td>:</td>
	    				<td><input type="text" name="email" value="<?php echo $result['email']?>" size=50></td>
	    				
	    			</tr>
	    			<tr>
	    				<td>Địa Chỉ</td>
	    				<td>:</td>
	    				<td><input type="text" name="address" value="<?php echo $result['address']?>"size=50 ></td>
	    				
	    			</tr>
	    			<tr>
	    				<td colspan="3">
	    					<input type="submit" name="save" value="Lưu" class="grey save" >
 						</td>
	    				
	    			</tr>
	    			<?php 
		    				}

		    			}
	    			 ?>
	    		</table>
	    	</form>	
 		</div>

 		
 	</div>

	<?php 
   include "inc/footer.php";  
 ?>


