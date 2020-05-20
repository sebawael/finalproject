<?php
session_start();
require ('includes/connect.php'); 
if (isset($_POST['submit1'])) {

 $email=$_POST['email'];
 $password=$_POST['password'];
 $query="SELECT * from customer where customer_email='$email'  AND customer_password='$password' ";
 $result=mysqli_query($conn,$query);
 $customerset= mysqli_fetch_assoc($result);
 if ($customerset['customer_id']) {
    $_SESSION['customerid']=$customerset['customer_id'];
    header ("location:../checkout.php");}
    else
      {  $error= "user not found"; }
    }



    if (isset($_POST['submit2'])) {
     $cname=$_POST['fullname'];
     $cemail=$_POST['email'];
     $cpassword=$_POST['password'];
     $mobile=$_POST['mobile'];
     $address=$_POST['address'];

     $query="insert into customer(customer_name,customer_email,customer_password,mobile,address)
     values ('$cname','$cemail','$cpassword','$mobile','$address')";
     mysqli_query ($conn,$query);
     header ("location:customerlogin.php");}



     ?>



<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <title>Ogani </title>
    <link rel="icon" href="../ogani/img/logo.png" type="image/icon type"></title>
    <!-- Custom CSS -->
    <link href="src/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
            style="background:url(src/assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box row">
                <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(../img/shopping.jpg">
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <div class="text-center">
                            <img src="src/assets/images/big/icon.png" alt="wrapkit">
                        </div>
                        <h2 class="mt-3 text-center">Sign In</h2>
                        <p class="text-center">Enter your email address and password to access </p>
                        <form  method="post" action="">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" >Email</label>
                                        <input class="form-control" id="uname" type="text"
                                            placeholder="enter your username" name="email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" >Password</label>
                                        <input class="form-control" id="pwd" type="password"
                                            placeholder="enter your password" name="password">
                                    </div>
                                </div>
                                <?php if (isset($error)) {
                                    
                                   echo "<div class='alert  btn-large btn-danger'>$error</div>";
                                } ?>

                                <div class="col-lg-12 text-center">
                                    <button type="submit1" class="btn btn-block btn-dark" name="submit1">Sign In</button>
                                </div>
                                <div class="col-lg-12 text-center mt-5">
                                    Don't have an account? <a data-toggle="modal" href="#addnewcustomer" class="text-danger">Sign Up</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="src/assets/libs/jquery/dist/jquery.min.js "></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="src/assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="src/assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $(".preloader ").fadeOut();
    </script>

     <!-- add new customer -->
          <div class="modal " id="addnewcustomer" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticModalLabel">New Customer</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- form -->

                    <form method="post" action="" > 
                        <div class="modal-body">
                       
                            <div class="form-group">
                                <label  class="control-label mb-1">full name</label>
                                <input type="text" name="fullname" id="fullname"   class="form-control" >
                            </div>
                            <div class="form-group">
                                <label  class="control-label mb-1">Email</label>
                                <input type="email" name="email" id="email"   class="form-control" >
                            </div>

                            <div class="form-group">
                                <label  class="control-label mb-1">Password</label>
                                <input type="password" name="password" id="password"   class="form-control" >
                            </div>
                            <div class="form-group">
                                <label  class="control-label mb-1">mobile</label>
                                <input type="text" name="mobile" id="mobile"   class="form-control" >
                            </div>
                              <div class="form-group">
                                <label  class="control-label mb-1">address</label>
                                <input type="text" name="address" id="address"   class="form-control" >
                            </div>



                    

                            <div class="modal-footer">     
                                <button type="button"  class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                                <button type="submit"  name="submit2" class="btn btn-secondary ">sign up</button>
                            </div>
                        </div>
                    </form>   

                </div>
            </div>
        </div>
        <!-- end add new customer -->
</body>

</html>