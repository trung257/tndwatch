<?php 
   include "inc/header.php";
   // include "inc/slider.php";
 ?>
<?php 
     // if(!isset($_GET['catid']) || $_GET['catid']==NULL){
     // 	echo "<script>window.location='404.php'</script>";
          
     // }
     // else{ 
     // 	$id=$_GET['catid'];
     // }
    
     

     
?>
 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<?php 
 				if($_SERVER['REQUEST_METHOD']=='POST'){

                      $tukhoa=$_POST['tukhoa'];

                      $search_product=$product->search_product($tukhoa);
                    }
 						# code...
 					
	      	 ?>
    		<div class="heading">
    		<h3 >Từ khóa tìm kiếm: <span style='color:red;font-size:23px;font-weight: bold'><?php echo  $tukhoa?></span></h3>
    		
    		</div>
    		
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
	      	<?php 
 				
 				if($search_product){
 					while ($result=$search_product->fetch_assoc()) {
 						# code...
 					
	      	 ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="details.php?proid=<?php echo $result['productId']?>"><img src="admin/uploads/<?php echo $result['image'] ?> " alt=""  width="212px" height="212px"/></a>
					 <p><?php echo $fm->textShorten($result['productName'],50) ?> </p>
					 <!-- <p><?php echo $fm->textShorten($result['product_desc'],50) ?></p> -->
					 <p><span class="price"><?php echo $fm->format_currency($result['price'])." "."VNĐ" ?></span></p>
				      <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']?>" class="details">Details</a></span></div>
				</div>
				<?php 
     				}

 				}else{
 					echo "<h3 style='color:red;font-size:23px;text-align:center'>PRODUCT NOT HAVE</h3>";
 				     }
 					
				 ?>
 				
			</div>

	
	
    </div>
 
<?php 
   include "inc/footer.php";  
 ?>