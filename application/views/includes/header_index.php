<!DOCTYPE html>
<!--[if lt IE 8]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>فروشگاه محصولات استیل آذین</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ProteusThemes">

    <!--  Google Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Pacifico|Open+Sans:400,700,400italic,700italic&amp;subset=latin,latin-ext,greek' rel='stylesheet' type='text/css'>

    <!-- Twitter Bootstrap -->
    <link href="<?php echo base_url();?>assets/stylesheets/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/stylesheets/responsive.css" rel="stylesheet">
    <!-- Slider Revolution -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/js/rs-plugin/css/settings.css" type="text/css"/>
    <!-- jQuery UI -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/js/jquery-ui-1.10.3/css/smoothness/jquery-ui-1.10.3.custom.min.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/lightbox/css/lightbox.css" type="text/css"/>
    <!-- PrettyPhoto -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/js/prettyphoto/css/prettyPhoto.css" type="text/css"/>
    <!-- main styles -->
    <link href="<?php echo base_url();?>assets/stylesheets/main.css" rel="stylesheet">

    <!-- Modernizr -->
    <script src="<?php echo base_url();?>assets/js/modernizr.custom.56918.js"></script>

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>assets/images/apple-touch/144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>assets/images/apple-touch/114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>assets/images/apple-touch/72.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>assets/images/apple-touch/57.png">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/apple-touch/57.png">
</head>


<body class="">

<div class="master-wrapper">

    <!--  ==========  -->
    <!--  = Header =  -->
    <!--  ==========  -->
    <header id="header">
        <div class="container">
            <div class="row">

                <!--  ==========  -->
                <!--  = Logo =  -->
                <!--  ==========  -->
                <div class="span7">
                    <a class="brand" href="<?php echo base_url();?>">
                        <img src="<?php echo base_url();?>assets/images/logo.png" alt="Webmarket Logo" width="48" height="48" />
                        <span class="pacifico">Steel Azin Shop</span>
                        <span class="tagline">فروشگاه محصولات استیل آذین</span>
                    </a>
                </div>

                <!--  ==========  -->
                <!--  = Social Icons =  -->
                <!--  ==========  -->
                <div class="span5">
                    <div class="topmost-line">

                    </div>
                    <div class="top-right">
                        <div class="icons">
                            <a href="http://www.facebook.com/ProteusNet"><span class="zocial-facebook"></span></a>
                            <a href="skype:primozcigler?call"><span class="zocial-skype"></span></a>
                            <a href="https://twitter.com/proteusnetcom"><span class="zocial-twitter"></span></a>
                            <a href="http://eepurl.com/xFPYD"><span class="zocial-rss"></span></a>
                            <a href="#"><span class="zocial-wordpress"></span></a>
                            <a href="#"><span class="zocial-android"></span></a>
                            <a href="#"><span class="zocial-html5"></span></a>
                            <a href="#"><span class="zocial-windows"></span></a>
                            <a href="#"><span class="zocial-apple"></span></a>
                        </div>
                        <div class="register">

                            <?php
                                $valid_user = $this->session->userdata('Username');
                                if(!is_null($valid_user) && $valid_user != '')
                                    echo '<a href="#">خوش آمدید</a>';
                            else
                            {
                            ?>
                            <a href="#loginModal" role="button" data-toggle="modal">ورود</a> یا
                            <a href="#registerModal" role="button" data-toggle="modal">ثبت نام</a>
                            <?php } ?>
                        </div>
                    </div>
                </div> <!-- /social icons -->
            </div>
        </div>
    </header>

    <!--  ==========  -->
    <!--  = Main Menu / navbar =  -->
    <!--  ==========  -->
    <div class="navbar navbar-static-top" id="stickyNavbar">
        <div class="navbar-inner">
            <div class="container">
                <div class="row">
                    <div class="span9">
                        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!--  ==========  -->
                        <!--  = Menu =  -->
                        <!--  ==========  -->
                        <div class="nav-collapse collapse">
                            <ul class="nav" id="mainNavigation">
                                <li class="dropdown active">
                                    <a href="<?php echo base_url(); ?>"> خانه <b></b> </a>

                                </li>

                                <li class="dropdown">
                                    <a href="<?php  ?>" class="dropdown-toggle"> فروشگاه <b class="caret"></b> </a>
                                    <ul class="dropdown-menu">
                                        <?php
                                        $categoryList = instance('Categorymodel','get_parent');
                                        foreach($categoryList as $category): ?>
                                            <li><a href="<?php echo base_url('Indexcontroller/shop/'.$category->ID)?>"><?php echo $category->Title ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                                <li><a href="#">گالری تصاویر پرده و دکوراسیون</a></li>
                                <li><a href="#">درباره ما</a></li>
                                <li><a href="#">تماس با ما</a></li>
                            </ul>

                            <!--  ==========  -->
                            <!--  = Search form =  -->
                            <!--  ==========  -->
<!--                            <form class="navbar-form pull-right" action="#" method="get">-->
<!--                                <button type="submit"><span class="icon-search"></span></button>-->
<!--                                <input type="text" class="span1" name="search" id="navSearchInput">-->
<!--                            </form>-->
                        </div><!-- /.nav-collapse -->
                    </div>

                    <!--  ==========  -->
                    <!--  = Cart =  -->
                    <!--  ==========  -->
                    <div class="span3">
                        <div class="cart-container" id="cartContainer">
                            <div class="cart">
                                <p class="items">سبد خرید <span class="dark-clr">(3)</span></p>
                                <p class="dark-clr hidden-tablet"></p>
                                <a href="checkout-step-1.html" class="btn btn-danger">
                                     <span class="icon icons-cart"></span>
                                    <i class="icon-shopping-cart"></i>
                                </a>
                            </div>
                            <!--<div class="open-panel">

                                <div class="item-in-cart clearfix">
                                    <div class="image">
                                        <img src="<?php /*echo base_url();*/?>assets/images/dummy/cart-items/cart-item-1.jpg" width="124" height="124" alt="cart item" />
                                    </div>
                                    <div class="desc">
                                        <strong><a href="product.html">کلاه زمستانی</a></strong>
                                <span class="light-clr qty">
                                    تعداد : 1
                                    &nbsp;
                                    <a href="#" class="icon-remove-sign" title="Remove Item"></a>
                                </span>
                                    </div>
                                    <div class="price">
                                        <strong>$4957</strong>
                                    </div>
                                </div>

                                <div class="summary">
                                    <div class="line">
                                        <div class="row-fluid">
                                            <div class="span6">$4.99</div>
                                            <div class="span6 align-right">هزینه ارسال :</div>
                                        </div>
                                    </div>
                                    <div class="line">
                                        <div class="row-fluid">
                                            <div class="span6">$357.81</div>
                                            <div class="span6 align-right size-16">جمع کل :</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="proceed">
                                    <a href="checkout-step-1.html" class="btn btn-danger pull-right bold higher">تصویه حساب <i class="icon-shopping-cart"></i></a>
                                    <small>هزینه ارسال بر اساس منطقه جغرافیایی محاسبه میشود. <a href="#">اطلاعات بیشتر</a></small>
                                </div>
                            </div>-->
                        </div>
                    </div> <!-- /cart -->
                </div>
            </div>
        </div>
    </div> <!-- /main menu -->