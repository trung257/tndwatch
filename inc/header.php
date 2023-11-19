<?php 
    include'lib/session.php';
    Session::init();
      
 ?>
 <?php 
  
     include'lib/database.php';
     include'helpers/format.php';
     spl_autoload_register(function($className){
     	include_once "classes/".$className.".php"; // chu y "SPL" chu khong phai "SQL"
     });
     	 
     
      $db= new Database();
	  $fm= new Format(); 
	  $ct= new cart();
	  $us= new user();
	  $cat= new category();
	  $brand= new brand();
	   $cs= new customer();
	  $product= new product();
 ?>
<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
?>
<!DOCTYPE HTML>
<head>
<title>T & D Watch</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/jquerymain.js"></script> 
<script src="js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/nav.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script> 
<script type="text/javascript" src="js/nav-hover.js"></script>
<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script type="text/javascript">
  $(document).ready(function($){
    $('#dc_mega-menu-orange').dcMegaMenu({rowItems:'4',speed:'fast',effect:'fade'});
  });
</script>
<style>
	
	.grid_1_of_4{
	margin: 1% 1% 1% 0%;
	/*cho menu*/
	
}
    #sticky{
		height:48px;
		width: 1316px;
		position: relative;
		z-index: 99999;
	}
</style>
</head>
<body>
  <div class="wrap">
		<div class="header_top">
			<div class="logo">
				 <a href="index.php"><img src="images/logo_final.png" alt="" /></a> 
			</div>
			  <div class="header_top_right">
			    <div class="search_box">
				    <form action="search.php" method="post">
				    	<input type="text" placeholder="Search product..." name="tukhoa">
				    	<input type="submit" value="Search" name="search_product">
				    </form>
			    </div>
			    <div class="shopping_cart">
					<div class="cart">
						<a href="cart.php" title="View my shopping cart" rel="nofollow">
							<i class="cart_icon fa-solid fa-cart-shopping"></i>
								<span class="cart_title">Cart</span>
								<span class="no_product">
								  <?php 
									  $check_cart=$ct->check_cart();
									  if($check_cart){
									  	$sum=Session::get("sum");
									  		echo $fm->format_currency($sum).' đ';
									  		// trong php : dấu ngoặc đơn thì chỉ lấy tên của cái biến đó
									  		// dấu ngoặc kép thì hiển thị giá trị của cái biến đó
									  }
									  else{
									  	 echo "Empty";
									  }
								  		
								   ?>
								  
								  
							    </span>
							</a>
						</div>
			      </div>
			      <?php 
				      	if(isset($_GET['customer_id'])){
				      		$customer_id=$_GET['customer_id'];
				      		// nếu tồn tại customer_id : cũng là khi ấn logout đấy thì ta sẽ hủy cái phiên làm việc đó đi
				      		$delCart=$ct->del_all_data_cart();
				      		$delCompare=$ct->del_compare($customer_id); // xóa tất cả các sản phẩm so sánh dựa vào customer_id khi mà ta login
				      		Session::destroy();
				      		// hủy tất cả các session đang hiện có :Bao gồm cả session của giỏ hàng
				      	}
			       ?>
		   <div class="login">
		   		<?php 
  					$login_check=Session::get('customer_login');
  					if($login_check==false){
  						// Khi người dùng chưa đăng nhập
  						echo " <a href='login.php'>Login</a>";
  					}
  					else{
  						// Khi người dùng đã đăng nhập thành công rồi
  						echo '<a href="?customer_id='.Session::get('customer_id').' ">Logout</a>';
  					}
		   		 ?>
		   	   
		   	</div>
		 <div class="clear"></div>
	 </div>
	 <div class="clear"></div>
 </div>
<div class="menu" id="sticky">
	<ul id="dc_mega-menu-orange" class="dc_mm-orange">
	  <li><a href="index.php">Home</a></li>

	  <li>
	  	  <a href="">Categories</a> 
	  	  <ul>
				<?php 
					$getall_category=$cat->show_category_frontend(); // lấy lại cái hàm show_category() mà mình đã tạo trước đó
					if($getall_category){
						while ($result_allcat=$getall_category->fetch_assoc()) {
							# code...
					
				 ?>
		      			<li>
		      				<a href="productbycat.php?catid=<?php echo $result_allcat['catId'] ?>"><?php echo $result_allcat['catName']?></a>
		      			</li>
		         <?php 
		      	       }

					}
		         ?>
		      
			</ul>
	  	</li>
	  <li>
	  	<a href="">Brands</a>
	  	<ul>
				<?php 
					$getall_brand=$brand->show_brand_frontend(); // lấy lại cái hàm show_category() mà mình đã tạo trước đó
					if($getall_brand){
						while ($result_allbrand=$getall_brand->fetch_assoc()) {
							# code...
					
				 ?>
		      			<li>
		      				<a href="productbybrand.php?brandid=<?php echo $result_allbrand['brandId'] ?>"><?php echo $result_allbrand['brandName']?></a>
		      			</li>
		         <?php 
		      	       }

					}
		         ?>
		      
			</ul>

	  </li>


	  <?php 
	  		$login_check=Session::get('customer_login');
  					if($login_check==false){
  						echo "";
  					}
  					else{
  						// nếu người dùng có đăng nhập .Thì ta mới cho hiện menu Profile
  						echo ' <li><a href="profile.php">Thông Tin</a> </li> ';
  						   // thông tin người mua hàng đã đăng nhập 

  					}
	   ?>
	    <?php 
	   		$login_check=Session::get('customer_login');
  					if($login_check){
  						echo '<li><a href="wishList.php">Yêu Thích</a> </li>';
  					} 
	    ?> 
	  <li><a href="cart.php">Cart</a></li>
	  <?php 
	      $customer_id=Session::get('customer_id');
	  	  $check_order=$ct->check_order($customer_id);
	  	  if($check_order==true){
	  	  	echo '<li><a href="orderdetails.php">Đơn Hàng</a> </li>';
	  	  }
	  	  else{
	  	  	echo "";
	  	  }
	   ?>
	   <!--  <?php 
	   		$login_check=Session::get('customer_login');
  					if($login_check){
  						echo '<li><a href="compare.php">Compare</a> </li>';
  					} 
	    ?> --> 
	   
	   
	  
	  <li><a href="contact.php">Contact</a> </li>
	  <div class="clear"></div>
	</ul>
</div>