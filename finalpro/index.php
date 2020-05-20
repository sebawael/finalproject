<?php
 require('cart.php'); ?>
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
            <a href="#"><img src="ogani/img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span><?php echo "$num";?></span></a></li>
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
                                <a href="admin/customerlogin.php"><i class="fa fa-user"></i> Login</a>
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
                $result=mysqli_query($conn,$query);  while($catset=mysqli_fetch_assoc($result)){ echo "  <li><a href='shop.php?id={$catset['cat_id']}'>{$catset['cat_name']}</a></li> "; } ?></ul></li>
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
    <section class="hero">
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
                $result=mysqli_query($conn,$query);  while($catset=mysqli_fetch_assoc($result)){echo "  <li><a href='shop.php?id={$catset['cat_id']}'>{$catset['cat_name']}</a></li> "; }?>
                            
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
                    <div class="hero__item set-bg" data-setbg="ogani/img/hero/banner.jpg">
                        <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="index.php" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    

                      <?php
                $query="SELECT * from category";
                $result=mysqli_query($conn,$query);  
                while($cat=mysqli_fetch_assoc($result)){ 
                 echo" <div class='col-lg-3'>" ;

                    echo "    <div class='categories__item set-bg' data-setbg='admin/uploads/{$cat['cat_image']}'> 
                          <h5><a href='shop.php?id={$cat['cat_id']}'>{$cat['cat_name']}</a></h5> ";
                       echo" </div></div> ";

                        } ?>
                    
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

 


    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                           
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                
    <?php
                $query="SELECT * from product";
                $result=mysqli_query($conn,$query);  
                while($product=mysqli_fetch_assoc($result)){
                if ($product['PROQTY']>20) {
                     
                  ?>
               
              
               <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                               
               <div class="featured__item">
                <?php echo"  <div class='featured__item__pic set-bg' data-setbg='admin/uploads/{$product['pro_image']}'> "; ?>
                            <ul class="featured__item__pic__hover">
                                <li><a href="single-product-details.php?id=<?php echo  $product['pro_id'];?>"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">


                            <h6><a href="single-product-details.php?id=<?php echo  $product['pro_id'];?>"></a><?php echo $product['pro_name']; ?> </h6>

                            <h5><?php echo  $product['pro_price'];?> JD</h5>
                     </div>
                    </div>
                </div><?php } }?>
                
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

  

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="ogani/img/blog/blog-1.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                            </ul>
                            <h5><a href="blog.php">Cooking tips make cooking simple</a></h5>
                            <p>We've compiled this list of tips to make every time in the kitchen a successful one. !</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="ogani/img/blog/blog-2.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                            </ul>
                            <h5><a href="blog.php">6 ways to prepare breakfast .</a></h5>
                            <p>Breakfast Ideas For When You Have Guests Over</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="ogani/img/blog/blog-3.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                            </ul>
                            <h5><a href="blog.php"> Benefits of Citrus Fruit</a></h5>
                            <p>They excellent sources of antioxidants, vitamins, and nutrients
                                        quaerat </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

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