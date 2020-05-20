<?php
//CREAT
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



$query="INSERT into product(pro_name,pro_price,pro_desc,pro_image,cat_id)
values('$Product_name','$product_price','$product_describtion','$image_name',$catid) ";
mysqli_query($conn,$query);
}
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
                                    <div class="card-header"><h4 class="page-title text-truncate text-dark font-weight-medium mb-1">product</h4></div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Add product</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post"  enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Product name</label>
                                                <input  name="pro_name" type="text" class="form-control" >
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">product price</label>
                                                <input  name="pro_price" type="number" step="0.1" class="form-control">
                                             
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">product Desc</label>
                                                 <input  name="pro_desc" type="text" class="form-control cc-name valid">
                                            </div>
                                             <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">product Qty</label>
                                                 <input  name="PROQTY" type="text" class="form-control cc-name valid">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">product image</label>
                                                <input  name="pro_img" type="file" class="form-control" >
                                            </div>

                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">category name</label>
                                                <select  name="cat" class="form-control-lg form-control">
                                                    <option value="" >Choose category</option>
                                                    <?php
                                                    $query="SELECT * FROM category";
                                                    $result=mysqli_query($conn,$query);
                                                    while ($cat=mysqli_fetch_assoc($result))
                                                        { echo "<option value='{$cat['cat_id']}' > {$cat['cat_name']}</option>";}
                                                    ?>
                                                </select>
                                            </div>

                                            <br>
                                            <div>
                                                <button type="submit" name="submit" class="btn btn-lg btn-info ">save</button>
                                                    
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                              <!-- table -->
    
                     <div class="col-md-12">
                        <div class="card">
                 
                                                      <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead style="background-color: black;">
                                            <tr>
                                                <th>ID</th>
                                                <th>product name</th>
                                                <th>product price</th>
                                                <th>product describtion</th>
                                                <th>product image</th>
                                                <th>category name</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                     `   </thead>
                                        <tbody>
                                            <!-- READ -->
                                           <?php 
                                        $query="SELECT * from product inner join category ON category.cat_id=product.cat_id" ; 
                                        $result=mysqli_query($conn,$query) ;
                                        while($product=mysqli_fetch_assoc($result)){ 
                                        echo "<tr>";
                                        echo "<td>{$product['pro_id']}</td>";
                                        echo "<td>{$product['pro_name']}</td>";
                                        echo "<td>{$product['pro_price']}</td>";
                                        echo "<td>{$product['pro_desc']}</td>";
                                        echo"<td><img src='uploads/{$product['pro_image']}' width='50' hight='50'></td>"; 
                                        echo "<td>{$product['cat_name']}</td>";
                                        echo "<td><a href='edit_product.php?id={$product['pro_id']}' class='btn btn-info'> Edit</a></td>";
                                        echo "<td><a href='delete_product.php?id={$product['pro_id']}' class='btn btn-danger'>Delete</a></td>";
                                        echo "</tr>";}
                                            ?> 
                                            
                                           
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div> 
                        </div>
                           <!-- table --> 
                    </div>
                </div>
            </div>
          </div> 






<?php include ('includes/footer.php') ; ?>