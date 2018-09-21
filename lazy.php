<!DOCTYPE html>
<html lang="en">



<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Title Page-->
    <title>Photos</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap4/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link rel="icon" href="images/icon/umber-thumb.jpg">
    <link href="css/theme.css" rel="stylesheet" media="all">
    <link href="css/switcher.css" rel="stylesheet" media="all">
      <script src="vendor/jquery-3.2.1.min.js"></script>
        <script src="js/jquery.lazy.min.js"></script>
        <script type="text/javascript">
             $(function() {
        $('.lazy').lazy({
          effect: "fadeIn",
          effectTime: 5000,
          threshold: 0
        });
    });
        </script>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop header-1 d-none d-lg-block">
            <div class="container-fluid">
                <div class="section__content section__content--w1760">
                    <div class="row no-gutters header__content">
                        <div class="col-md-5">
                            
                        </div>
                        <div class="col-md-2 logo-wrap">
                            <a href="index.php">
                                <img src="images/icon/logo-black.png" alt="Umber" />
                            </a>
                        </div>
                        <div class="col-md-5 navheader-wrap">
                            <nav class="nav-header">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item has-mega">
                                        <a href="index.php">Home</a>
                                        
                                    </li>
                                    
                                    <li class="list-inline-item has-dropdown">
                                        <a href="#">Blog</a>
                                     
                                    </li>
                                    
                                    <li class="list-inline-item has-dropdown">
                                        <a href="contact.php">Contact</a>
                                      
                                    </li>
                                </ul>
                            </nav>
                            
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILER-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid clearfix">
                    <a class="logo" href="index.php">
                        <img src="images/icon/logo-black.png" alt="Umber" />
                    </a>
                    <button class="hamburger hamburger--slider float-right" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-dropdown">
                            <a href="index.php">Home</a>
                          
                        </li>
                       
                        <li class="has-dropdown">
                            <a href="#">Blog</a>
                            
                        </li>
                      
                       
                        <li class="has-dropdown">
                            <a href="contact.php">Contact</a>
                            
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    <div class="container">
    <div class="row">
    <?php
    // set folder path
    $path = "gallery/testing/";

    // count no. of images in dir
    $cnt = count(glob($path . "*.{jpg,png,jpeg}", GLOB_BRACE));

    if ($cnt > 0) {
        $fp = opendir($path);
        while ($image = readdir($fp)) {
            $ext = pathinfo($image, PATHINFO_EXTENSION);
            $allowed_ext = ['jpg', 'png','jpeg'];
            if (in_array($ext, $allowed_ext)) {
                $image_path = $path . $image; ?>
            <div class="col-md-4" style="margin-top: 10px">
                <a href="image.php?image_path=<?php echo $image_path; ?>">
                <img class="lazy"  data-src="<?php echo $image_path; ?>" alt="" /></a>
            </div>
            <?php
          }
        }
        closedir($fp);
    } else {
        echo "Sorry! No images available!";
    }
    ?>
</div>
</div>
   <!-- FOOTER-->
        <footer class="footer footer--dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer__logo">
                            <a href="index.php">
                                <img src="images/icon/logo-white.png" alt="Umber" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer__social">
                            <a href="#">
                                <i class="zmdi zmdi-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="zmdi zmdi-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="zmdi zmdi-twitter"></i>
                            </a>
                            <a class="mr-0" href="#">
                                <i class="zmdi zmdi-dribbble"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer__copyright">© 2018 All Rights Reserved</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END FOOTER-->
        
    </div>

    <!-- Jquery JS-->
  
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap4/popper.min.js"></script>
    <script src="vendor/bootstrap4/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/animejs/anime.min.js"></script>
    <script src="vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>



</html>
<!-- end document-->