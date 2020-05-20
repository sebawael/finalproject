<?php
require ('includes/connect.php');
if(isset($_POST['update'])){
    $cname     =$_POST['customer_name'];
    $cemail     =$_POST['customer_email'];
    $cpassword =$_POST['customer_password'];
    $mobile    =$_POST['mobile'];
    $address   =$_POST['address'];

$query=" UPDATE customer SET customer_name     ='$cname',
                             customer_email    ='$cemail',
                             customer_password ='$cpassword',
                             mobile            ='$mobile',
                             address           ='$address'
                      where customer_id={$_GET['id']}    ";

$result=mysqli_query ($conn,$query);
header("Location:customer.php"); 
}

$query   ="select * from customer where customer_id={$_GET['id']}";
$result  =mysqli_query($conn,$query);
$customer=mysqli_fetch_assoc($result);

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
                                    <div class="card-header"><h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Customer</h4></div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Edit Customer</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="POST" >
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Customer name</label>
                                                <input  name="customer_name" type="text" value="<?php echo  $customer['customer_name']?>" class="form-control" >
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">customer email </label>
                                                <input  name="customer_email" type="email" value="<?php echo  $customer['customer_email']?>" class="form-control ">
                                            </div>
                                            
                                             <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">customer password</label>
                                                 <input  name="customer_password" type="password" value="<?php echo  $customer['customer_password']?>" class="form-control ">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">mobile</label>
                                                <input  name="mobile" type="tel" value="<?php echo $customer['mobile']?>" class="form-control" >
                                            </div>
                                             <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Address</label>
                                                <input  name="address" type="text" value="<?php echo  $customer['address']?>" class="form-control" >
                                            </div>
                                            <div>
                                                <button  type="submit" name="update" class="btn btn-lg btn-info ">update</button>
                                                    
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                          <!-- colum -->


                         
                    </div>
                </div>
            </div>
          </div>


<?php include ('includes/footer.php') ; ?>