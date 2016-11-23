<div class="container">

    <!--  ==========  -->
    <!--  = Title =  -->
    <!--  ==========  -->
    <div class="row">
        <div class="span12">
            <div class="main-titles lined">
                <h2 class="title"><span class="light">محصولات</span> جدید فروشگاه</h2>
            </div>
        </div>
    </div> <!-- /title -->

    <div class="row popup-products blocks-spacer">


        <!--  ==========  -->
        <!--  = Product =  -->
        <!--  ==========  -->
        <?php
            $CI = &get_instance();
            $CI->load->model('Productmodel');
            $productList = instance('Productmodel','get_all');

        foreach ($productList as $product)
        {
        ?>

        <div class="span3">
            <div class="product">
                 <a style="text-decoration:none" href="<?php echo base_url('Indexcontroller/single_product/'.$product->ID) ?>">
                    <div class="product-img">
                        <div>
                            <img src="<?php echo base_url('uploads/new_products/'.$product->Photo);?>" alt="" width="540" height="374" />
                        </div>
                    </div>
                    <div class="main-titles no-margin">
                        <h4 align="center" class="title"><?php echo $product->Title ?></h4>
                        <h5 align="center" class="no-margin"><?php echo $product->Price ?></h5>
                    </div>
    <!--                <p class="center-align desc">--><?php //echo $product->Discript  ?><!--</p>-->
                    <p class="center-align stars">
                        <span class="icon-star stars-clr"></span>
                        <span class="icon-star stars-clr"></span>
                        <span class="icon-star"></span>
                        <span class="icon-star"></span>
                        <span class="icon-star"></span>
                    </p>
                 </a>
            </div>
        </div> <!-- /product -->
        <?php } ?>

    </div>
</div>