<div class="row featured-items blocks-spacer">
    <div class="span12">

        <!--  ==========  -->
        <!--  = Title =  -->
        <!--  ==========  -->
        <div class="main-titles lined">
            <h2 class="title"><span class="light">محصولات</span> ویژه</h2>
            <div class="arrows">
                <a href="#" class="icon-chevron-right" id="featuredItemsRight"></a>
                <a href="#" class="icon-chevron-left" id="featuredItemsLeft"></a>
            </div>
        </div>
    </div>

    <div class="span12">
        <!--  ==========  -->
        <!--  = Carousel =  -->
        <!--  ==========  -->
        <div class="carouFredSel" data-autoplay="false" data-nav="featuredItems">
            <div class="slide">
                <div class="row">
                    <!--  ==========  -->
                    <!--  = Product =  -->
                    <!--  ==========  -->
                    <?php
                    $CI = &get_instance();
                    $CI->load->model('Productmodel');
                    $product_featured_List = instance('Productmodel','get_featured_list');

                    foreach ($product_featured_List as $product)
                    {
                    ?>
                    <div class="span4">
                        <div class="product">
                            <a style="text-decoration:none" href="<?php echo base_url('Indexcontroller/single_product/'.$product->ID) ?>">
                                <div class="product-img featured">
                                    <div class="picture">
                                        <img src="<?php echo base_url('uploads/new_products/'.$product->Photo);?>" alt="" width="518" height="358" />
                                        <div class="img-overlay">

                                        </div>
                                    </div>
                                </div>
                                <div class="main-titles">
                                    <h4 align="center" class="title"><?php echo $product->Title ?></h4>
                                    <h5 align="center" class="no-margin"><?php echo $product->Price ?></h5>
                                </div>
                            </a>
                        </div>
                    </div> <!-- /product -->
                    <?php } ?>

                </div>
            </div>
        </div> <!-- /carousel -->
    </div>

</div>