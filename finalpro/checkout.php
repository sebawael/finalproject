<?php
require('cart.php');
if (!isset($_SESSION['customerid'])) {
header ("location:admin/customerlogin.php");}
  
 $str1="OG";   
$str2=date("Ymd");
$str3=$_SESSION['customerid'];
$str4 = rand(1,99);
$ordernum="$str1$str2$str3$str4";
$_SESSION['ordernumber']=$ordernum;
$customerid=$_SESSION['customerid'];   

     

     if(isset($_POST['submit'])){
        if (empty($_POST["phone"])) {
   $phone  = "use the same number in profile";
  } else {
    $phone =($_POST["phone"]);
  }
   
    if (empty($_POST["address"])) {
   $address  = "use the same address in profile";
   
  } else {
     
    $address =($_POST["address"]);
  }
   if (empty($_POST["ordernotes"])) {
  $ordernotes  = "no notes";
  } else {
    $ordernotes =($_POST["ordernotes"]);
  }
    


$query="insert into tableorder(phone,address,customer_id,ordernum,ordernotes,orderqty,totalprice,orderdate)
                values ('$phone','$address',$customerid,'$ordernum','$ordernotes',$num,$sum,'$str2')";
mysqli_query ($conn,$query);

 $max=count($_SESSION['order']);
        for($i=0;$i<$max;$i++){
       $key=$_SESSION['order'][$i]['productid'];
       $price=$_SESSION['order'][$i]['price']; 
       $q=$_SESSION['order'][$i]['qty'];    
$query="insert into orderdetails(ordernum,customer_id,pro_id,proprice,proqty)
                values ('$ordernum','$customerid','$key','$price','$q')";
mysqli_query ($conn,$query);}

header("Location:logout.php");

}

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani </title>
    <link rel="icon" href="ogani/img/logo.png" type="image/icon type">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="ogani/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="ogani/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="ogani/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="ogani/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="ogani/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="ogani/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="ogani/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="ogani/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

      <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="index/php"><img src="ogani/img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="shopping-cart.php"><i class="fa fa-shopping-bag"></i> <span><?php echo "$num";?></span></a></li>
            </ul>
            <div class="header__cart__price">item: <span><?php echo "$sum";?></span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="ogani/img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
          
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="admin/customerlogin.php"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="#">shop</a>
                    <ul class="header__menu__dropdown">
                      <?php
                $query="SELECT * from category";
                $result=mysqli_query($conn,$query);  while($catset=mysqli_fetch_assoc($result)){ echo "  <li><a href='shop.php?id={$catset['cat_id']}'>{$catset['cat_name']}</a></li> "; } ?></ul></li>
                
                
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> seba@gmail.com</li>
                <li>Free Shipping for all Order of JD 50</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i>seba@gmail.com</li>
                                <li>Free Shipping for all Order of JD 50</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="ogani/img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="login.php"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="index.php"><img src="ogani/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                           <li class="active"><a href="index.php">Home</a></li>

                     <li><a href="#">shop</a>
                    <ul class="header__menu__dropdown">
                      <?php
                      $query="SELECT * from category";
                      $result=mysqli_query($conn,$query);
                   while($catset=mysqli_fetch_assoc($result)){ echo "  <li><a href='shop.php?id={$catset['cat_id']}'>{$catset['cat_name']}</a></li> "; } ?></ul></li>
                      <li><a href="blog.php">Blog</a></li>
                      <li><a href="contact.php">Contact</a></li>
                    </ul>
               
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="shopping-cart.php"><i class="fa fa-shopping-bag"></i> <span><?php echo $num; ?></span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>JD <?php echo $sum; ?></span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->


    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All Categories</span>
                        </div>
                        <ul>
                   <?php
                 $query="SELECT * from category";
                      $result=mysqli_query($conn,$query);
                   while($catset=mysqli_fetch_assoc($result)){echo "  <li><a href='shop.php?id={$catset['cat_id']}'>{$catset['cat_name']}</a></li> "; }?>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+962 02.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="ogani/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="index.php">Home</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4>Billing Details</h4>
                <h6> Fill it only if you want  communicate with information that is different from your information we have ,<br>Note that this information will be used for this order only. </h6>
                <form action="" method="post">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    
                                </div>
                                
                            </div>
                            
                            <div class="checkout__input">
                                <p>Address<span></span></p>
                                <input type="text" name="address" placeholder="Street Address" class="checkout__input__add">
                               
                            </div>
                           
                           
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span></span></p>
                                        <input type="text" name="phone">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    
                                </div>
                            </div>
                            
                            
                            <div class="checkout__input">
                                <p>Order notes<span></span></p>
                                <input type="text" name="ordernotes"
                                    placeholder="Notes about your order, e.g. special notes for delivery.">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Your Order</h4>
                                <div class="checkout__order__products">Products <span>Total</span></div>
                                <ul><?php if (!empty($_SESSION['order'])){ 
                                 $max=count($_SESSION['order']);
                                 for($i=0;$i<$max;$i++){
                                 $key=$_SESSION['order'][$i]['productid'];
                                $query="SELECT * from product where pro_id=$key ";
                                $result=mysqli_query($conn,$query); 
                                while( $product=mysqli_fetch_assoc($result) ){
        
                                    
                                echo "<li> {$product['pro_name']} <span>{$_SESSION['order'][$i]['price']} JD</span></li>"; 
                                   }}} ?>
                                </ul>
                                <div class="checkout__order__subtotal">Subtotal <span><?php echo "$sum"; ?> JD</span></div>
                                <div class="checkout__order__total">Total <span><?php echo "$sum"; ?> JD</span></div>
                                
                                <button type="submit" name="submit" class="site-btn">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

<!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="index.php"><img src="ogani/img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 333 IRBID</li>
                            <li>Phone: +962 02.188.888</li>
                            <li>Email: seba@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="ogani/js/jquery-3.3.1.min.js"></script>
    <script src="ogani/js/bootstrap.min.js"></script>
    <script src="ogani/js/jquery.nice-select.min.js"></script>
    <script src="ogani/js/jquery-ui.min.js"></script>
    <script src="ogani/js/jquery.slicknav.js"></script>
    <script src="ogani/js/mixitup.min.js"></script>
    <script src="ogani/js/owl.carousel.min.js"></script>
    <script src="ogani/js/mainjj.js"></script>



</body>

</html>