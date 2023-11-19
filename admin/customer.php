 <?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>


 <?php 
    $filepath=realpath(dirname(__FILE__));
     include_once ($filepath.'/../classes/customer.php');
     include_once ($filepath.'/../helpers/format.php');
 ?>
<?php 
     if(!isset($_GET['customerid']) || $_GET['customerid']==NULL){
          echo "<script>window.location='inbox.php'</script>";
     }
     else{
     	$id=$_GET['customerid'];

     }
    
     $cs= new customer();
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Sửa danh mục</h2>

               <div class="block copyblock"> 
                 
                 <?php 
                    $get_customer=$cs->show_customer($id);
                    if($get_customer){
                        while ($result=$get_customer->fetch_assoc()) {
                        
                 
                  ?>
                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                        	<td>Tên Khách Hàng</td>
                        	<td>:</td>
                            <td>
                                <input type="text" readonly class="medium" name="catName" value="<?php echo $result['name']?>" />
                            </td>
                        </tr>
                        <tr>
                        	<td>Địa Chỉ</td>
                        	<td>:</td>
                            <td>
                                <input type="text" readonly class="medium" name="catName" value="<?php echo $result['address']?>" />
                            </td>
                        </tr>
                        <tr>
                        	<td>Thành Phố</td>
                        	<td>:</td>
                            <td>
                                <input type="text" readonly class="medium" name="catName" value="<?php echo $result['city']?>" />
                            </td>
                        </tr>
                        <tr>
                        	<td>Quốc Gia</td>
                        	<td>:</td>
                            <td>
                                <input type="text" readonly class="medium" name="catName" value="<?php echo $result['country']?>" />
                            </td>
                        </tr>
                         <tr>
                        	<td>Zip code</td>
                        	<td>:</td>
                            <td>
                                <input type="text" readonly class="medium" name="catName" value="<?php echo $result['zipcode']?>" />
                            </td>
                        </tr>
						 <tr>
                        	<td>Số Điện Thoại</td>
                        	<td>:</td>
                            <td>
                                <input type="text" readonly class="medium" name="catName" value="<?php echo $result['phone']?>" />
                            </td>
                        </tr>
                         <tr>
                        	<td>Email</td>
                        	<td>:</td>
                            <td>
                                <input type="text" readonly class="medium" name="catName" value="<?php echo $result['email']?>" />
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
<?php include 'inc/footer.php';?>