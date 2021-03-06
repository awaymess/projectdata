<!DOCTYPE html>
<html lang="en">
<?php include "connect.php";
session_start();
if (empty($_SESSION["cususer"])) {
    header("location: login1.php");
} 
$user=$_SESSION['cususer'];?>


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
          <a href="#" class="mx-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
        </div>
      </div>




      <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

        <div class="container">
          <div class="d-flex align-items-center">

            <div class="mx-auto">
              <nav class="site-navigation position-relative text-left" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mx-auto d-none pl-0 d-lg-block border-none">
                  <li><a href="index.php" class="nav-link text-left">Home</a></li>
                  <!-- <li><a href="about.html" class="nav-link text-left">About</a></li> -->
                  <!-- <li><a href="shop.php" class="nav-link text-left">Wines</a></li> -->
                  <li><a href="shop.php" class="nav-link text-left">Menu</a></li>
                  <li class="active"><a href="cart.php" class="nav-link text-left">Cart</a></li>
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

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <?php
            $stmt = $pdo->prepare("SELECT MAX(orders_id) FROM orders WHERE cususer = '$user' and status = '0'");
            $stmt->execute();
            $row = $stmt->fetch()
            ?>
            <?php { ?> 
              <h2 class="h3 mb-3 text-black font-heading-serif">Your Order : <?= $row["MAX(orders_id)"] ?></h2><?php } ?>

            <div class="p-3 p-lg-5 border">
              <table class="table site-block-order-table mb-5">
                <thead>
                  <th>Product</th>
                  <th>Total</th>
                </thead>

                <div class="row">
                  <?php
                  
                  $stmt = $pdo->prepare("SELECT * FROM orders WHERE cususer = '$user'and status = '0'");
                  $stmt->execute();
                  ?>
                  <?php while ($row = $stmt->fetch()) { ?>

                    <form action="confrim.php" method="post">
                      <tbody>
                        <tr>
                          
                          <td>
                          <?= $row["nameorder"] ?> <?= $row["typeorder"] ?> ???????????????????????????<?= $row["addonorder"] ?> ??????????????????????????????<?= $row["addonwiporder"] ?> ?????????<?= $row["sizeorder"] ?> <?= $row["priceorder"] ?>
                          </td>
                          <td><input type="hidden" name="totalor" value="<?= $row["totalor"] ?>" /><?= $row["totalor"] ?> Baht</td>

                        </tr>

                      <?php } ?>

                      <?php
                      $stmt = $pdo->prepare("SELECT sum(totalor) from orders WHERE cususer = '$user'and status = '0'");
                      $stmt->execute();
                      ?>
                      <?php while ($row = $stmt->fetch()) { ?>
                        <tr>
                          <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                          <td class="text-black font-weight-bold"><strong><?= $row["sum(totalor)"]  ?> Baht</strong></td>
                        </tr>
                      <?php } ?>

                      <input type="hidden" name="status" value="1">
                      </tbody>

              </table>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg btn-block" value="??????????????????" />
                <!-- <button class="btn btn-primary btn-lg btn-block" onclick="window.location='thankyou.html'">??????????????????</button> -->
              </div>
              </form>
              <button class="btn  btn-lg btn-block" onclick="history.back();">????????????</button>


            </div>
          </div>
        </div>
      </div>
    </div>




    <div class="footer">
      <div class="container">

        <div class="row">
          <div class="col-12 text-center">
            <div class="social-icons">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-youtube"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="copyright">
              <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>
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
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15" /></svg></div>

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