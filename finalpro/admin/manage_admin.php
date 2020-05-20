<?php
require ('includes/connect.php');
if(isset($_POST['submit'])){
    $email=$_POST['admin_email'];
    $password=$_POST['admin_password'];
    $fullname=$_POST['fullname'];
   


$query="insert into admin(admin_email,admin_password,fullname)
values ('$email','$password','$fullname')";
mysqli_query ($conn,$query);
}

?>
<?php include ('includes/header.php') ; ?>
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Create Admin</h4>
                        
                    </div>
                    
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container">

           <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header"></div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Add Admin</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post" >
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Admin_email</label>
                                                <input  name="admin_email" type="email" class="form-control" >
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">admin_password</label>
                                                <input  name="admin_password" type="password" class="form-control cc-name valid"> 
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">admin fullname</label><input  name="fullname" type="text" class="form-control"> 
                                            </div>
                                               
                                          
                                            <div>
                                                <button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-info ">
                                                   save
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                      
                        <!-- table -->




                  <div class="col-12">
                        <div class="card">
                           <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead style="background-color: black;">
                                            <tr>
                                                <th>ID</th>
                                                <th>Emaile</th>
                                               <th>password</th>
                                                <th>Full name</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                    <tbody>
                                           <?php 
                                        $query="select * from admin" ; 
                                        $result=mysqli_query($conn,$query) ;
                                        while($admin=mysqli_fetch_assoc($result)){ 
                                        echo "<tr>";
                                        echo "<td>{$admin['admin_id']}</td>";
                                        echo "<td>{$admin['admin_email']}</td>";
                                        echo "<td>{$admin['admin_password']}</td>";
                                        echo "<td>{$admin['fullname']}</td>";
                                        echo "<td><a href='edit_admin.php?id={$admin['admin_id']}' class='btn btn-info'> Edit</a></td>";
                                        echo "<td><a href='delete_admin.php?id={$admin['admin_id']}' class='btn btn-danger'>Delete</a></td>";
                                        echo "</tr>";
                                         }

                                         ?> 
                                            
                                           
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>




    
                    

          <?php include ('includes/footer.php'); ?>