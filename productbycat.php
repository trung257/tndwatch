<?php 
   include "inc/header.php";
   include "inc/slider.php";
 ?>
<?php 
     if(!isset($_GET['catid']) || $_GET['catid']==NULL){
     	echo "<script>window.location='404.php'</script>";
          
     }
     else{
     	$id=$_GET['catid'];
     }

    
     

     // if($_SERVER['REQUEST_METHOD']=='POST'){

     //         $catName=$_POST['catName'];

     //         $updateCat=$cat->update_category($catName,$id);
     // }
?>
 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<?php 
 				$name_cat=$cat->get_name_by_cart($id);
 				if($name_cat){
 					while ($result_name=$name_cat->fetch_assoc()) {
 						# code...
 					
	      	 ?>
    		<div class="heading">
    		<h3 >Danh Mục :<span style='color:red;font-size:23px;font-weight: bold'><?php echo  $result_name['catName']?></span></h3>
    		
    		</div>
    		<?php 
     				}

 				}
 		    ?>

    		<div class="clear"></div>
    	</div>
	      <div class="section group">
	      	<?php 
 				$productbycat=$cat->get_product_by_cart($id);
 				if($productbycat){
 					while ($result=$productbycat->fetch_assoc()) {
 						# code...
 					
	      	 ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="details.php?proid=<?php echo $result['productId']?>"><img src="admin/uploads/<?php echo $result['image'] ?> " alt=""  width="212px" height="212px"/></a>
					 <p><?php echo $fm->textShorten($result['productName'],50) ?> </p>
					 
					 <p><span class="price"><?php echo $fm->format_currency($result['price'])." "."VNĐ" ?></span></p>
				      <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']?>" class="details">Mua Hàng </a></span></div>
				</div>
				<?php 
     				}

 				}else{
 					echo "<h3 style='color:red;font-size:23px;text-align:center'>CATEGORY NOT HAVE</h3>";
 				     }
 					
				 ?>
 				
			</div>

	        <!-- <p>phan trang</p> -->
            


	
    </div>
 
<?php 
   include "inc/footer.php";  
 ?>