<!DOCTYPE html>
<html lang="en">
<?php include "connect.php";
session_start();
if (empty($_SESSION["cususer"])) {
    header("location: login1.php");
} ?>

<head>
    <title>Coffee</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Cinzel:400,700|Montserrat:400,700|Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>



        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 text-center">
                        <a href="index.php" class="site-logo">
                            <img src="images/logo.png" alt="Image" class="img-fluid">
                        </a>
                    </div>
                    <a href="#" class="mx-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
                </div>
            </div>




            <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

                <div class="container">
                    <div class="d-flex align-items-center">

                        <div class="mx-auto">
                            <nav class="site-navigation position-relative text-left" role="navigation">
                                <ul class="site-menu main-menu js-clone-nav mx-auto d-none pl-0 d-lg-block border-none">
                                    <li class="active"><a href="index.php" class="nav-link text-left">Home</a></li>
                                    <!-- <li><a href="about.html" class="nav-link text-left">About</a></li> -->
                                    <!-- <li><a href="shop.php" class="nav-link text-left">Wines</a></li> -->
                                    <li><a href="shop.php" class="nav-link text-left">Menu</a></li>
                                    <li><a href="cart.php" class="nav-link text-left">Cart</a></li>
                                    <li><a href="myorder.php" class="nav-link text-left">My Order</a></li>
                                    <li><a href="contact.html" class="nav-link text-left">Contact</a></li>
                                    <li> | </li>
                                    <li><a href="logout.php" class="nav-link text-left">Logout</a></li>
                                    <li><a href="Login/index.php" class="nav-link text-left">Admin</a></li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>

            </div>

        </div>


        <div class="owl-carousel hero-slide owl-style">
            <div class="intro-section container" style="background-image: url('images/hero_1.jpg');">
                <div class="row justify-content-center text-center align-items-center">
                    <div class="col-md-8">
                        <!-- <span class="sub-title">Royal Wine</span>
                        <h1>Grape Wine</h1> -->
                        <h1>Welcome</h1>
                    </div>
                </div>
            </div>

            <div class="intro-section container" style="background-image: url('images/hero_2.jpg');">
                <div class="row justify-content-center text-center align-items-center">
                    <div class="col-md-8">
                        <!-- <span class="sub-title">Welcome</span> -->
                        <h1>Welcome</h1>
                    </div>
                </div>
            </div>

        </div>

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copyright">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- .site-wrap -->


    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/></svg></div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.mb.YTPlayer.min.js"></script>

    <script src="js/main.js"></script>

</body>

</html>