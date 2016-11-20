<?php
    require_once('includes/header_index.php');
    require_once('includes/slider_index.php');
?>
    <!--  ==========  -->
    <!--  = Main container =  -->
    <!--  ==========  -->
    <div class="container">
        <?php
            require_once('includes/three_banners.php');
            require_once('includes/product_featured.php');
        ?>
    </div> <!-- /container -->

    <!--  ==========  -->
    <!--  = New Products =  -->
    <!--  ==========  -->
    <div class="boxed-area blocks-spacer">
        <?php require_once('includes/new_product.php') ?>
    </div> <!-- /new products -->

    <!--  ==========  -->
    <!--  = Most Popular products =  -->
    <!--  ==========  -->
    <!--<div class="most-popular blocks-spacer">
        <?php /*require_once('includes/most_popular.php') */?>
    </div>--> <!-- /most popular -->

    <!--  ==========  -->
    <!--  = Lastest News =  -->
    <!--  ==========  -->
    <div class="darker-stripe blocks-spacer more-space latest-news with-shadows">
        <?php require_once('includes/last_news.php') ?>
    </div> <!-- /latest news -->

    <!--  ==========  -->
    <!--  = Brands Carousel =  -->
    <!--  ==========  -->

<?php
    require_once('includes/brands_index.php');
    require_once('includes/footer_index.php');
?>