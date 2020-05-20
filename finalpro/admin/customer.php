<?php
require ('includes/connect.php');
if(isset($_POST['submit'])){
    $cname=$_POST['customer_name'];
    $cemail=$_POST['customer_email'];
    $cpassword=$_POST['customer_password'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
   


$query="insert into customer(customer_name,customer_email,customer_password,mobile,address)
values ('$cname','$cemail','$cpassword','$mobile','$address')";
mysqli_query ($conn,$query);
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
                                    <div class="card-header"><h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Create Customer</h4></div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Add Customer</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="POST" >
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Customer name</label>
                                                <input  name="customer_name" type="text" class="form-control" >
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">customer email </label>
                                                <input  name="customer_email" type="email" class="form-control ">
                                            </div>
                                            
                                             <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">customer password</label>
                                                 <input  name="customer_password" type="password" class="form-control ">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">mobile</label>
                                                <input  name="mobile" type="tel" class="form-control" >
                                            </div>
                                             <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Address</label>
                                                <input  name="address" type="text" class="form-control" >
                                            </div>
                                            <div>
                                                <button  type="submit" name="submit" class="btn btn-lg btn-info ">save</button>
                                                    
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                          <!-- colum -->


                         <!-- table -->
    
                     <div class="col-md-12">
                     <div class="card" >
                                                      <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead style="background-color: black;">
                                            <tr>
                                                <th>Customer ID</th>
                                                <th>customer name</th>
                                                <th>Customer Emaile</th>
                                                <th>Customer password</th> 
                                                <th>mobile</th>
                                                <th>Address</th>
                                                <th>Edit</th>
                                                <th>Delete</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php 
                                        $query="select * from customer" ; 
                                        $result=mysqli_query($conn,$query) ;
                                        while($customer=mysqli_fetch_assoc($result)){ 
                                        echo "<tr>";
                                        echo "<td>{$customer['customer_id']}</td>";
                                        echo "<td>{$customer['customer_name']}</td>";
                                        echo "<td>{$customer['customer_email']}</td>";
                                        echo "<td>{$customer['customer_password']}</td>";
                                        echo "<td>{$customer['mobile']}</td>";
                                         echo "<td>{$customer['address']}</td>";
                                        echo "<td><a href='edit_customer.php?id={$customer['customer_id']}' class='btn btn-info'> Edit</a></td>";
                                        echo "<td><a href='delete_customer.php?id={$customer['customer_id']}' class='btn btn-danger'>Delete</a></td>";
                                        echo "</tr>";
                                         }

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