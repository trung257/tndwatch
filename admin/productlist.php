<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php 
    include '../classes/category.php';
    include '../classes/brand.php';
    include '../classes/product.php';

    include_once'../helpers/format.php'; 
 ?>
 <?php 
    $pd= new product();				
    $fm= new Format();
     if(isset($_GET['delproductid']) && $_GET['delproductid']!=NULL){
          $id=$_GET['delproductid'];

           $delpro=$pd->del_product($id);
     }
  ?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Danh sách sản phẩm</h2>
        <div class="block">  
        	 <?php 
                    if(isset($delpro)){
                       echo $delpro;
                    }
                 ?>       
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>No.</th>
					<th>Tên Sản Phẩm</th>
					<th>Giá</th>
					<th>Hình Ảnh</th>
					<th>Danh Mục</th> <!-- danh muc -->
					<th>Thương Hiệu</th>  <!-- thuong hieu -->
					<th>Mô Tả</th>
					<th>Trạng Thái</th>
					<th>Hoạt Động</th>

				</tr>
			</thead>
			<tbody>
				<?php 
 					
 					$pdList=$pd->show_product();
 					if($pdList){
 						$i=0;
 						while ($result=$pdList->fetch_assoc()) {
 							$i++;
 						
				 ?>
				<tr class="odd gradeX">
					<td><?php echo $i?></td> 
					<!-- <td><?php echo $result['productId']?></td> -->
					<td><?php echo $result['productName']?></td>
					<td><?php echo $fm->format_currency($result['price'])." VNĐ" ?></td>
					<td> <img src="uploads/<?php echo $result['image']?>" width="70px"></td>
					<td><?php echo $result['catName']?></td>
					<td><?php echo $result['brandName']?></td>
					<td>
						<?php echo $fm->textShorten($result['product_desc'],50) ?>
							
					</td>

					<td>
						<?php 
						   if($result['type']==0){
						   	 echo "Không nổi bật";
						   }
						   else
						   	echo "Nổi bật";

					    ?>
						
					</td>
					<!-- <td class="center"> 4</td> -->
					<td><a href="productedit.php?productid=<?php echo $result['productId'] ?>">Sửa</a> || <a onclick="return confirm('Bạn có thực sự muốn xóa ?')" href="?delproductid=<?php echo $result['productId'] ?>">Xóa</a></td>
				</tr>
				<?php 


 						}
 					}
				 ?>
				
				
			</tbody>
		</table>

       </div>
       			
    </div>

</div>

<script type="text/javascript">
    $(document).ready(function () {
        setupLeftMenu();
        $('.datatable').dataTable();
		setSidebarHeight();
    });
</script>
<?php include 'inc/footer.php';?>
