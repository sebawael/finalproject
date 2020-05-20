<?php
require ('includes/connect.php');
if (isset($_POST['submit'])) {
    $Product_name        =$_POST['pro_name'];
    $product_price       =$_POST['pro_price'];
    $product_describtion =$_POST['pro_desc'];
    $product_qty         =$_POST['PROQTY'];
    $catid               =$_POST['cat'];


    $image_name=$_FILES['pro_img']['name'];
    $tmp_name=$_FILES['pro_img']['tmp_name'];
    $path="uploads/";
    move_uploaded_file($tmp_name, $path.$image_name);

$query="UPDATE product set pro_name  ='$Product_name',
                           pro_price ='$product_price',
                           pro_desc  ='$product_describtion',
                           PROQTY    ='$product_qty';
                           pro_image ='$image_name',
                           cat_id    ='$catid' 
        where pro_id={$_GET['id']}";                   

mysqli_query ($conn,$query);
header("Location:manage_product.php");
}

$query="SELECT * from product inner join  category on category.cat_id=product.cat_id  where pro_id={$_GET['id']}";
$result=mysqli_query($conn,$query);
$product= mysqli_fetch_assoc($result);
?>


<?php include ('includes/header.php') ; ?>

 <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header"><h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Edit product</h4></div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">update product</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post"  enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Product name</label>
                                                <input  name="pro_name" type="text" value="<?php echo($product['pro_name']) ?>" class="form-control" >
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">product price</label>
                                                <input  name="pro_price" type="number" value="<?php echo($product['pro_price']) ?>" step="0.1" class="form-control">
                                             
                                            </div>
                                            
                                             <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">product describtion</label>
                                                 <input  name="pro_desc" type="text" value="<?php echo($product['pro_desc']) ?>" class="form-control cc-name valid">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">product QTY</label>
                                                 <input  name="PROQTY" type="text" value="<?php echo($product['PROQTY']) ?>" class="form-control cc-name valid">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">product image</label>
                                                <input  name="pro_img" type="file" class="form-control" value="<?php echo($product['pro_image']) ?>">
                                            </div>

                                             <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">category name</label>
                                                <select  class="form-control-lg form-control " value="<?php echo($product['cat_id']) ?>" name="cat">
                                                  
                                                    <?php
                                                    $query="SELECT * FROM category";
                                                    $result=mysqli_query($conn,$query);
                                                    while ($cat=mysqli_fetch_assoc($result))
                                                        { echo "<option value='{$cat['cat_id']}'> {$cat['cat_name']}</option>";}
                                                    ?>
                                               </select>
                                            </div>

                                            <div>
                                                <button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-info ">update</button>
                                                    
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                             
                    </div>
                </div>
            </div>
          </div> 

<?php include ('includes/footer.php') ; ?>