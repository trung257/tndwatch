<?php
include "inc/header.php";
?>
<?php
if(isset($_GET['proid']) && $_GET['proid']!=NULL){
      $id=$_GET['proid'];
 }

if (!isset($_GET['proid']) || $_GET['proid'] == NULL) {
    echo "<script>window.location='404.php'</script>";
} else {
    $id = $_GET['proid'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $quantity = $_POST['quantity'];
    $AddtoCart = $ct->add_to_cart($quantity, $id);
}
$customer_id = Session::get('customer_id');
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['compare'])) {

    $productid = $_POST['productid'];
    $insertCompare = $product->insertCompare($productid, $customer_id);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['wishlist'])) {

    $productid = $_POST['productid'];
    $insertWishlist = $product->insertWishlist($productid, $customer_id);
}
?>

<div class="main">
    <div class="content">
        <div class="details">
            <div class="details__left">
                <?php
                $get_product_details = $product->get_details($id);
                if ($get_product_details) {
                    while ($result_details = $get_product_details->fetch_assoc()) {
                ?>
                <div class="details__image">
                    <div>
                        <img src="admin/uploads/<?php echo $result_details['image'] ?> " alt="" />
                    </div>
                    <div class="details__info">
                        <h2><?php echo $result_details['productName']; ?> </h2>
                        <p><?php echo $fm->textShorten($result_details['product_desc'], 500) ?> </p> <!-- lay ra 300 ki tu	 -->
                        <div class="details__info--name">
                            <p>Giá : <span><?php echo $fm->format_currency($result_details['price']) . " " . "VNĐ" ?></span></p>
                            <p>Danh Mục: <span><?php echo $result_details['catName']; ?></span></p>
                            <p>Thương Hiệu:<span><?php echo $result_details['brandName']; ?></span></p>
                            <div class="details__buy">
                                <form action="" method="post">
                                    <input type="number" class="buyfield" name="quantity" value="1" min="1" />
                                    <input type="submit" class="buysubmit" name="submit" value="Thêm Vào Giỏ" />
                                </form>
                                <?php
                                if (isset($AddtoCart)) {
                                    // echo "<span style='color:red;font-size:18px'>Sản phẩm này đã được thêm vào giỏ hàng rồi</span>";
                                    echo $AddtoCart;
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="add-cart">
                        <form action="" method="post">
						<input type="hidden" class="buysubmit" name="productid" value="<?php echo $result_details['productId'] ?>"/>
						<?php
                            $login_check = Session::get('customer_login');
                            if ($login_check) {
                                // echo '<input type="submit" class="buysubmit" name="compare" value="Compare Product"/>'.' ';
                            } else {
                                echo '';
                            }
                        ?>
					    <br>
						<?php
                        if (isset($insertCompare)) {
                            echo $insertCompare;
                        }
                        ?>
					    </form>
                        <!-- Save to WishList -->
                        <form action="" method="post">
                            <input type="hidden" class="buysubmit" name="productid" value="<?php echo $result_details['productId'] ?>" />
                            <?php
                                $login_check = Session::get('customer_login');
                                if ($login_check) {
                                    echo '<input type="submit" class="buysubmit" name="wishlist" value="Yêu Thích"/>';
                                } else {
                                echo '';
                            }
                            ?>
                            <br>
                            <?php
                                if (isset($insertWishlist)) {
                                    echo $insertWishlist;
                                }
                            ?>
                        </form>
                    </div>
                </div>
                <div class="product_desc">
                    <h3>Mô tả</h3>
                    <table>
                        <tr>
                            <td>Thương Hiệu</td>
                            <td><?=$result_details['brandName']?></td>
                        </tr>
                        <tr>
                            <td>Số Hiệu Sản Phẩm</td>
                            <td><?=$result_details['sohieusanpham']?></td>
                        </tr>
                        <tr>
                            <td>Xuất Xứ</td>
                            <td><<?=$result_details['xuatxu']?>/td>
                        </tr>
                        <tr>
                            <td>Giới Tính</td>
                            <td><?=$result_details['gioitinh']?></td>
                        </tr>
                        <tr>
                            <td>Kính</td>
                            <td><?=$result_details['kinh']?></td>
                        </tr>
                        <tr>
                            <td>Máy</td>
                            <td><?=$result_details['may']?></td>
                        </tr>
                        <tr>
                            <td>Bảo Hành Quốc Tế</td>
                            <td><?=$result_details['baohanhquocte']?></td>
                        </tr>
                        <tr>
                            <td>Bảo Hành Tại Chúng Tôi</td>
                            <td><?=$result_details['baohanhcuahang']?></td>
                        </tr>
                        <tr>
                            <td>Đường Kính Mặt Số</td>
                            <td><?=$result_details['duongkinhmatso']?></td>
                        </tr>
                        <tr>
                            <td>Bề Dày Mặt Số</td>
                            <td><?=$result_details['bedaymatso']?></td>
                        </tr>
                        <tr>
                            <td>Niềng</td>
                            <td><?=$result_details['nieng']?></td>
                        </tr>
                        <tr>
                            <td>Dây Đeo</td>
                            <td><?=$result_details['daydeo']?></td>
                        </tr>
                        <tr>
                            <td>Màu Mặt Số</td>
                            <td><?=$result_details['maumatso']?></td>
                        </tr>
                        <tr>
                            <td>Chống nước</td>
                            <td><?=$result_details['chongnuoc']?></td>
                        </tr>
                        <tr>
                            <td>Chức năng</td>
                            <td><?=$result_details['chucnangkhac']?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="details__right">
                <div class="right_sidebar">
                    <div class=" span_3_of_1">
                        <h2>Danh Mục Sản Phẩm</h2>
                        <ul>
                            <?php
                            $getall_category = $cat->show_category_frontend(); // lấy lại cái hàm show_category() mà mình đã tạo trước đó
                            if ($getall_category) {
                                while ($result_allcat = $getall_category->fetch_assoc()) {
                                    # code...

                            ?>
                                    <li><a href="productbycat.php?catid=<?php echo $result_allcat['catId'] ?>"><?php echo $result_allcat['catName'] ?></a></li>
                            <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                    <div class=" span_3_of_1">
                        <h2>Thương Hiệu Sản Phẩm</h2>
                        <ul>
                            <?php
                            $getall_brand = $brand->show_brand_frontend(); // lấy lại cái hàm show_category() mà mình đã tạo trước đó
                            if ($getall_brand) {
                                while ($result_allbrand = $getall_brand->fetch_assoc()) {
                                    # code...
                            ?>
                                    <li>
                                        <a href="productbybrand.php?brandid=<?php echo $result_allbrand['brandId'] ?>"><?php echo $result_allbrand['brandName'] ?></a>
                                    </li>
                            <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="clear"></div>

    </div>
</div>

</div>
<?php
                    }
                }
?>

</div>
</div>

<?php
include "inc/footer.php";
?>