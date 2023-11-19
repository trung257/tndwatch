
<?php 
   include "inc/header.php";
   // include "inc/slider.php";
 ?>
 <?php 
     // dang ky
     if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){           
             $insertCustomer=$cs->insert_customer($_POST);
     }
?>

 <?php 
     // dang nhap
     if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['login'])){
            $login_Customer=$cs->login_customer($_POST);
     } 
?>
<?php 
  	$login_check=Session::get('customer_login');
	if($login_check){
		// nếu đúng có tồn tại customer_login .Thì khi chung ta ấn button login sẽ đến trang order.php
		// 
		header('Location:index.php');
		
	}
	
 ?>
 <div class="main">
    <div class="content">
    	 <div class="login_panel">
        	<h3>Khách Hàng Hiện Tại</h3>
        	<!-- <p>Sign in with the form below.</p> -->
        	<?php 
        		if(isset($login_Customer)){
    					echo $login_Customer;
    				}
        	 ?>
        	<form action="" method="post" >
                	<input  type="text" name="email" class="field" placeholder="Enter email..." >
                    <input  type="password" name="password" class="field"  placeholder="Enter password...">
                
                 <p class="note">Nếu bạn quên mật khẩu, chỉ cần nhập email của bạn vào <a href="#">here</a></p>
                    <div class="buttons"><div><input type="submit" name="login" class="grey" value="Đăng Nhập"></div></div>
             </form>
          </div>
          <!-- dang ky -->
          <?php 

           ?>
    	<div class="register_account">
    		<h3>Đăng Ký Tài Khoản</h3>
    		<?php 
    				if(isset($insertCustomer)){
    					echo $insertCustomer;
    				}
    		 ?>
    		<form action="" method="post">
		   			 <table>
		   				<tbody>
						<tr>
						<td>
							<div>
							<input type="text" name="name" placeholder="Enter Name..." >
							</div>
							
							<div>
							   <input type="text" name="city" placeholder="City" >
							</div>
							
							<div>
								<input type="text" name="zipcode" placeholder="Zip-Code" >
							</div>
							<div>
								<input type="text" name="email" placeholder="E-Mail">
							</div>
		    			 </td>
		    			<td>
						<div>
							<input type="text" name="address" placeholder="Address">
						</div>
		    		<div>
						<!-- <select id="country" name="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">Select a Country</option>         
							<option value="hcm">TP.Hồ Chí Minh</option>
							<option value="hn">TP.Hà Nội</option>
							<option value="nd">TP.Nam Định</option>
							<option value="dn">TP.Đà Nẵng</option>
							

		                 </select> -->
		                 <input type="text" name="country" placeholder="Country">
				 </div>		        
	
		           <div>
		          <input type="text" name="phone" placeholder="Phone">
		          </div>
				  
				  <div>
					<input type="text" name="password" placeholder="Password">
				</div>
		    	</td>
		    </tr> 
		    </tbody></table> 
		   <div class="search"><div> <input type="submit" name="submit" class="grey" value="Đăng Ký"> </div></div>
		    <!-- <p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a>.</p> -->
		    <div class="clear"></div>
		    </form>
    	</div>  	
       <div class="clear"></div>
    </div>


<?php 
   include "inc/footer.php";  
 ?>

