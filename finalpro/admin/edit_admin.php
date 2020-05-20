<?php
require ('includes/connect.php');
if(isset($_POST['submit'])){
    $email=$_POST['admin_email'];
    $password=$_POST['admin_password'];
    $fullname=$_POST['fullname'];
   

$query="UPDATE admin set    admin_email    ='$email',
                            admin_password ='$password',
                            fullname       ='$fullname'
                    where admin_id={$_GET['id']}";                   

mysqli_query ($conn,$query);
header("Location:manage_admin.php");

}

$query="select * from admin where admin_id={$_GET['id']}";
$result=mysqli_query($conn,$query);
$admin= mysqli_fetch_assoc($result);

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
                                    <div class="card-header"><h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Edit Admin</h4></div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">update Admin</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post" >
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Admin_email</label>
                                                <input  name="admin_email" type="text" value="<?php echo($admin['admin_email']) ?>" class="form-control" >
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Admin_password </label>
                                                <input  name="admin_password" type="password" value="<?php echo($admin['admin_password']) ?>" class="form-control">
                                             
                                            </div>
                                            
                                             <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">fullname</label>
                                                 <input  name="fullname" type="text" value="<?php echo($admin['fullname']) ?>" class="form-control cc-name valid">
                                            </div>
                                           
                                            <div>
                                                <button  type="submit" name="submit" class="btn btn-lg btn-info ">update</button>
                                                    
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