<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
  
  
    <title><?php echo $title; ?></title>
 <meta name="title" content="<?php echo $title; ?>">
<meta name="description" content="<?php echo $meta; ?>">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="">
<meta property="og:title" content="<?php echo $title; ?>">
<meta property="og:description" content="<?php echo $meta; ?>">
<meta property="og:image" content="">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="">
<meta property="twitter:title" content="<?php echo $title; ?>">
<meta property="twitter:description" content="<?php echo $meta; ?>">
<meta property="twitter:image" content="">


    <!-- favicon start -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/images/favicon/site.webmanifest">
        <!-- favicon End -->

    <?php 
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = basename($_SERVER['PHP_SELF'], ".php");

?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="assets/images/favicon.ico" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/iconfont.min.css">
    <link rel="stylesheet" href="assets/css/vendor/helper.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Modernizr JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <div id="main-wrapper">

        <!--Header section start-->
        <header class="header header-transparent header-sticky  d-lg-block d-none">
            <div class="header-deafult-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                            <!--Logo Area Start-->
                            <div class="logo-area">
                                <a href="index.php"><img src="assets/images/logo.png" alt=""></a>
                            </div>
                            <!--Logo Area End-->
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 d-none d-lg-block col-12">
                            <!--Header Menu Area Start-->
                            <div class="header-menu-area text-center">
                                <nav class="main-menu">
                                    <ul>
                                        <li><a href="index.php">Home</a> </li>
                                        <li><a href="about.php">About</a> </li>
                                        <li><a href="#">Products</a> </li>
                                       
                                        
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a href="login-register.php">Logout</a> </li>
                                    </ul>
                                </nav>
                            </div>
                            <!--Header Menu Area End-->
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                            <!--Header Search And Mini Cart Area Start-->
                            <div class="header-search-cart-area">
                                <ul>
                                    <li><a class="header-search-toggle" href="tel:+917895973478"><i class="fa fa-phone"></i></a></li>
                                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/mehultyagi_007"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company/mehul"><i class="fa fa-linkedin"></i></a></li>
                                 
                                    <li><a href="https://wa.me/7895973478"><i class="fa fa-whatsapp"></i></a></li>
                                </ul>
                            </div>
                            <!--Header Search And Mini Cart Area End-->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--Header section end-->

        <!--Header Mobile section start-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-bottom menu-right">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="header-mobile-navigation d-block d-lg-none">
                                <div class="row align-items-center">
                                    <div class="col-8 col-md-8">
                                        <div class="header-logo">
                                            <a href="index.php">
                                                <img src="assets/images/logo.png" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-4">
                                        <div class="mobile-navigation text-left">
                                            <div class="header-icon-wrapper">
                                                <ul class="icon-list">
                                                   
                                                    <li>
                                                        <a href="javascript:void(0)" class="mobile-menu-icon" id="mobile-menu-trigger"><i class="fa fa-bars"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Mobile Menu start-->
                    <div class="row">
                        <div class="col-12 d-flex d-lg-none">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                    <!--Mobile Menu end-->

                </div>
            </div>
        </header>
        <!--Header Mobile section end-->

        <!-- Offcanvas Menu Start -->
        <div class="offcanvas-mobile-menu d-block d-lg-none" id="offcanvas-mobile-menu">
            <a href="javascript:void(0)" class="offcanvas-menu-close" id="offcanvas-menu-close-trigger">
                <i class="fa fa-times"></i>
            </a>

            <div class="offcanvas-wrapper">

                <div class="offcanvas-inner-content">
                    <div class="offcanvas-mobile-search-area">
                    <div class="header-logo">
                                          
                                                <img src="assets/images/logo.png" class="img-thumbnail" alt="">
                                    
                                        </div>
                    </div>
                    <nav class="offcanvas-navigation">
                        <ul>
                            <li class="menu-item-has-children"><a href="#"></a>
                              
                            </li>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            
                            <li class="menu-item-has-children"><a href="#">Products</a>
                                <ul class="submenu2">
                                    <li class="menu-item-has-children"><a href="#">Plywood</a>
                                        <ul class="submenu2">
                                            <li><a href="bwr-plywood.php">BWR Plywood</a></li>
                                            <li><a href="bwp-plywood">BWP Plywood</a></li>
                                            <li><a href="mr-plywood">MR Plywood</a></li>
                                            <li><a href="plywood.php">Explore All</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blockboards.php">Blockboards</a></li>
                                    <li><a href="flushdoors.php">Flushdoors</a></li>
                                    <li><a href="veneers.php">Veneers</a></li>
                                   

                                </ul>
                            </li>
                           
                            <li class="menu-item-has-children"><a href="contact.php">Contact</a>
                            </li>

                        </ul>
                    </nav>

                  

                    <div class="offcanvas-widget-area">
                        <div class="off-canvas-contact-widget">
                            <div class="header-contact-info">
                                <ul class="header-contact-info-list">
                                    <li><i class="ion-android-phone-portrait"></i> <a href="tel:+918126000000"> Call Us At <br> +918126000000</a></li>
                                    <li><i class="ion-android-mail"></i> <a href="mailto:hello@lecoreply.com">hello@lecoreply.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Off Canvas Widget Social Start-->
                        <div class="off-canvas-widget-social">
                            <a href="https://www.facebook.com/Lecore-Plywood-104700612156796" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.linkedin.com/company/lecore-plywo/" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                            <a href="https://www.instagram.com/lecoreply" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="https://wa.me/918126000000" title="whatsapp"><i class="fa fa-whatsapp"></i></a>
                        </div>
                        <!--Off Canvas Widget Social End-->
                    </div>
                </div>
            </div>

        </div>
        <!-- Offcanvas Menu End -->

        <!-- main-search start -->
        <div class="main-search-active">
            <div class="sidebar-search-icon">
                <button class="search-close"><i class="fa fa-times"></i></button>
            </div>
            <div class="sidebar-search-input">
                <form action="#">
                    <div class="form-search">
                        <input id="search" class="input-text" value="" placeholder="" type="search">
                        <button>
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
                <p class="form-description">Hit enter to search or ESC to close</p>
            </div>
        </div>
        <!-- main-search start -->

    