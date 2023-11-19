<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php 
    include '../classes/category.php'; 
    include '../classes/brand.php'; 
    include '../classes/product.php';
 ?>
 <?php 
     $pd= new product();
     if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
            

             $insertProduct=$pd->insert_product($_POST,$_FILES);
     }
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Thêm mới sản phẩm</h2>
        <div class="block"> 
                 <?php 
                    if(isset($insertProduct)){
                       echo $insertProduct;
                    }
                 ?>                    
         <form action="productadd.php" method="post" enctype="multipart/form-data">
            <table class="form">
               
                <tr>
                    <td>
                        <label>Tên sản phẩm</label>
                    </td>
                    <td>
                        <input type="text" name="productName" placeholder="Nhập tên sản phẩm..." class="medium" />
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Danh Mục</label>
                    </td>
                    <td>
                        <select id="select" name="category">
                            <option>----Chọn Danh Mục----</option>
                                <?php 
                                    $cat= new category();

                                    $catlist=$cat->show_category(); // gọi hàm show_category(): để lấy hết cái danh mục ra
                                    if($catlist){
                                        while ($result=$catlist->fetch_assoc()) {
                                            # code...
                                     

                                 ?>
                            <option value="<?php echo $result['catId']?>"><?php echo $result['catName']?></option>
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
                            <option>----Chọn Thương Hiệu----</option>

                            <?php 
                                    $brand= new brand();

                                    $brandlist=$brand->show_brand(); // gọi hàm show_category(): để lấy hết cái danh mục ra
                                    if($brandlist){
                                        while ($result=$brandlist->fetch_assoc()) {
                                            # code...
                                     

                                 ?>
                            <option value="<?php echo $result['brandId']?>"><?php echo $result['brandName']?></option>
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
                        <textarea class="tinymce" name="product_desc"></textarea>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Giá</label>
                    </td>
                    <td>
                        <input type="text" name="price" placeholder="Nhập giá sản phẩm..." class="medium" />
                    </td>
                </tr>
            
                <tr>
                    <td>
                        <label>Hình Ảnh</label>
                    </td>
                    <td>
                        <input type="file" name="image"/>
                    </td>
                </tr>
				
				<tr>
                    <td>
                        <label>Trạng Thái</label>
                    </td>
                    <td>
                        <select id="select" name="type">
                            <!-- <option>C</option> -->
                            <option value="1">Nổi Bật</option>  <!-- nổi bật là =1 -->
                            <option value="0">Không Nổi Bật</option> <!-- Không nổi bật là =0 -->
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Số Hiệu Sản Phẩm</label>
                    </td>
                    <td>
                        <input type="text" name="sohieu" placeholder="Nhập số hiệu sản phẩm..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Xuất Xứ</label>
                    </td>
                    <td>
                        <input type="text" name="xuatxu" placeholder="Nhập xuất xứ..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Giới Tính</label>
                    </td>
                    <td>
                        <input type="text" name="gioitinh" placeholder="Nhập giới tính ..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Kính</label>
                    </td>
                    <td>
                        <input type="text" name="kinh" placeholder="Nhập kính sản phẩm..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Máy</label>
                    </td>
                    <td>
                        <input type="text" name="may" placeholder="Nhập máy sản phẩm..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Bảo Hành Quốc Tế</label>
                    </td>
                    <td>
                        <input type="text" name="bhquocte" placeholder="Nhập bảo hành quốc tế..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Bảo Hành Của Hãng</label>
                    </td>
                    <td>
                        <input type="text" name="bhcuahang" placeholder="Nhập bảo hành của hãng..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Đường Kính Mặt Số</label>
                    </td>
                    <td>
                        <input type="text" name="duongkinhmatso" placeholder="Nhập đường kính mặt số..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Bề Dày Mặt Số</label>
                    </td>
                    <td>
                        <input type="text" name="bedaymatso" placeholder="Nhập bề dày mặt số..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Niềng</label>
                    </td>
                    <td>
                        <input type="text" name="nieng" placeholder="Nhập niềng sản phẩm..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Dây Đeo</label>
                    </td>
                    <td>
                        <input type="text" name="daydeo" placeholder="Nhập dây đeo sản phẩm..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Màu Mặt Số</label>
                    </td>
                    <td>
                        <input type="text" name="maumatso" placeholder="Nhập màu mặt số sản phẩm..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Chống Nước</label>
                    </td>
                    <td>
                        <input type="text" name="chongnuoc" placeholder="Nhập chống nước sản phẩm..." class="medium" />
                    </td>
                </tr>
                 <tr>
                    <td>
                        <label>Chức Năng Khác</label>
                    </td>
                    <td>
                        <input type="text" name="khac"  class="medium" />
                    </td>
                </tr>





				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Lưu" />
                    </td>
                </tr>
            </table>
            </form>
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


