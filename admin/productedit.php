<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php 
    include '../classes/category.php';
    include '../classes/brand.php';
    include '../classes/product.php'; 
    
 ?>
 <?php 
     $pd= new product();

      if(isset($_GET['productid']) && $_GET['productid']!=NULL){
          $id=$_GET['productid'];
     }
     if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
            
             $updateProduct=$pd->update_product($_POST,$_FILES,$id);
     }
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Sửa sản phẩm</h2>
        <div class="block"> 
                 <?php 
                    if(isset($updateProduct)){
                       echo $updateProduct;
                    }
                 ?>     
                 <?php 

                    $get_product_by_id=$pd->getproductbyId($id);
                    if($get_product_by_id){
                        while ($result_product=$get_product_by_id->fetch_assoc()) {
                            # code...
                   
                  ?>               
         <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
               
                <tr>
                    <td>
                        <label>Tên sản phẩm</label>
                    </td>
                    <td>
                        <input type="text" name="productName"  class="medium" value="<?php echo $result_product['productName'] ?>" />
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Danh Mục</label>
                    </td>
                    <td>
                        <select id="select" name="category">
                            <!-- <option>----Chọn Danh Mục----</option> -->
                                <?php 
                                    $cat= new category();

                                    $catlist=$cat->show_category(); // gọi hàm show_category(): để lấy hết cái danh mục ra
                                    if($catlist){
                                        while ($result=$catlist->fetch_assoc()) {
                                            # code...
                                     

                                 ?>
                            <option 

                                <?php 
                                    if($result['catId']==$result_product['catId']){
                                        echo 'selected';
                                    }
                                 ?>
                            value="<?php echo $result['catId']?>"><?php echo $result['catName']?></option>
                                <?php 

                                       }

                                    }
                                 ?>
                           
                        </select>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Thương Hiệu</label>
                    </td>
                    <td>
                        <select id="select" name="brand">
                            <!-- <option>----Chọn Thương Hiệu----</option> -->

                            <?php 
                                    $brand= new brand();

                                    $brandlist=$brand->show_brand(); // gọi hàm show_category(): để lấy hết cái danh mục ra
                                    if($brandlist){
                                        while ($result=$brandlist->fetch_assoc()) {
                                            # code...
                                     

                                 ?>
                            <option
                                 <?php 
                                    if($result['brandId']==$result_product['brandId']){
                                        echo 'selected';
                                    }
                                 ?>
                             value="<?php echo $result['brandId']?>"><?php echo $result['brandName']?></option>
                                <?php 

                                       }

                                    }
                                 ?>
                            
                        </select>
                    </td>
                </tr>
				
				 <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Mô Tả</label>
                    </td>
                    <td>
                        <textarea class="tinymce" name="product_desc"><?php echo $result_product['product_desc']?></textarea>
                    </td>
                </tr>
				        <tr>
                    <td>
                        <label>Giá</label>
                    </td>
                    <td>
                        <input type="text" name="price"  class="medium" value="<?php echo $result_product['price']?>" />
                    </td>
                </tr>
            
                <tr>
                    <td>
                        <label>Hình Ảnh</label>
                    </td>
                    <td>
                        <img src="uploads/<?php echo $result_product['image']?>" width="100px"><br>
                        <input type="file" name="image"/>
                    </td>
                </tr>
				
				<tr>
                    <td>
                        <label>Trạng Thái</label>
                    </td>
                    <td>
                        <select id="select" name="type">
                            <!-- <option>Select Type</option> -->
                            <?php 
                                if($result_product['type']==0){


                             ?>
                            <option  value="1">Nổi bật</option>  <!-- nổi bật là =1 -->
                            <option  selected value="0">Không nổi bật</option> <!-- Không nổi bật là =0 -->
                            <?php 

                                }// end if
                                else{

                             ?>
                               <option  selected value="1">Nổi bật</option>  <!-- nổi bật là =1 -->
                               <option   value="0">Không nổi bật</option> <!-- Không nổi bật là =0 -->

                             <?php 
                                }
                              ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Số Hiệu Sản Phẩm</label>
                    </td>
                    <td>
                        <input type="text" name="sohieu"  class="medium" value="<?php echo $result_product['sohieusanpham']?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Xuất Xứ</label>
                    </td>
                    <td>
                        <input type="text" name="xuatxu"  class="medium" value="<?php echo $result_product['xuatxu']?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Giới Tính</label>
                    </td>
                    <td>
                        <input type="text" name="gioitinh"  class="medium" value="<?php echo $result_product['gioitinh']?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Kính</label>
                    </td>
                    <td>
                        <input type="text" name="kinh"  class="medium" value="<?php echo $result_product['kinh']?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Máy</label>
                    </td>
                    <td>
                        <input type="text" name="may"  class="medium" value="<?php echo $result_product['may']?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Bảo Hành Quốc Tế</label>
                    </td>
                    <td>
                        <input type="text" name="bhquocte"  class="medium" value="<?php echo $result_product['baohanhquocte']?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Bảo Hành Của Hãng</label>
                    </td>
                    <td>
                        <input type="text" name="bhcuahang"  class="medium" value="<?php echo $result_product['baohanhcuahang']?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Đường Kính Mặt Số</label>
                    </td>
                    <td>
                        <input type="text" name="duongkinhmatso"  class="medium" value="<?php echo $result_product['duongkinhmatso']?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Bề Dày Mặt Số</label>
                    </td>
                    <td>
                        <input type="text" name="bedaymatso"  class="medium" value="<?php echo $result_product['bedaymatso']?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Niềng</label>
                    </td>
                    <td>
                        <input type="text" name="nieng"  class="medium" value="<?php echo $result_product['nieng']?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Dây Đeo</label>
                    </td>
                    <td>
                        <input type="text" name="daydeo"  class="medium" value="<?php echo $result_product['daydeo']?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Màu Mặt Số</label>
                    </td>
                    <td>
                        <input type="text" name="maumatso"  class="medium" value="<?php echo $result_product['maumatso']?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Chống Nước</label>
                    </td>
                    <td>
                        <input type="text" name="chongnuoc"  class="medium" value="<?php echo $result_product['chongnuoc']?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Chức Năng Khác</label>
                    </td>
                    <td>
                        <input type="text" name="khac"  class="medium" value="<?php echo $result_product['chucnangkhac']?>" />
                    </td>
                </tr>


				        <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="Update" />
                    </td>
                </tr>
            </table>
            </form>
            <?php 
                     }

                    }

             ?>
        </div>
    </div>
</div>
<!-- Load TinyMCE -->
<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>
<!-- Load TinyMCE -->
<?php include 'inc/footer.php';?>


