<?php  require_once('includes/header_index.php'); ?>
<div class="darker-stripe">
    <div class="container">
        <div class="row">
            <div class="span12">

            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="push-up blocks-spacer">
        <div class="row">

            <!--  ==========  -->
            <!--  = Sidebar =  -->
            <!--  ==========  -->
            <aside class="span3 left-sidebar" id="tourStep1">
                <div class="sidebar-item sidebar-filters" id="sidebarFilters">

                    <!--  ==========  -->
                    <!--  = Sidebar Title =  -->
                    <!--  ==========  -->
                    <div class="underlined">
                        <h3><span class="light">بر اساس فیلتر</span> خرید کنید</h3>
                    </div>

                    <!--  ==========  -->
                    <!--  = Categories =  -->
                    <!--  ==========  -->
                    <div class="accordion-group" id="tourStep2">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" href="#filterOne">دسته بندی ها <b class="caret"></b></a>
                        </div>
                        <div id="filterOne" class="accordion-body collapse in">
                            <div class="accordion-inner">
                                <!--<a href="#" data-target=".filter--accessories" class="selectable"><i class="box"></i> تست </a>
                                <a href="#" data-target=".filter--bags, .filter--hats" class="selectable"><i class="box"></i>تست</a>
                                <a href="#" data-target=".filter--polo-shirts" class="selectable"><i class="box"></i>تست</a>
                                <a href="#" data-target=".filter--shirts" class="selectable"><i class="box"></i>تست</a>
                                <a href="#" data-target=".filter--shoes, .filter--boots, .filter--trainers" class="selectable"><i class="box"></i>تست</a>
                                <a href="#" data-target=".filter--shorts" class="selectable"><i class="box"></i>تست</a>
                                <a href="#" data-target=".filter--suits, .filter--blazers" class="selectable"><i class="box"></i>تست</a>
                                <a href="#" data-target=".filter--sunglasses" class="selectable"><i class="box"></i>تست</a>
                                <a href="#" data-target=".filter--swimwear" class="selectable"><i class="box"></i>تست</a>
                                <a href="#" data-target=".filter--trousers, .filter--chinos" class="selectable"><i class="box"></i>تست</a>
                                <a href="#" data-target=".filter--t-shirts, .filter--vests" class="selectable"><i class="box"></i>تست</a>
                                <a href="#" data-target=".filter--bags" class="selectable"><i class="box"></i>تست</a>
                                <a href="#" data-target=".filter--underwear, .filter--socks" class="selectable"><i class="box"></i>تست</a>-->
                                <?php foreach($subCategory->result() as $category): ?>
                                    <a href="#" data-target="<?php echo '.'.$category->ID ?>" class="selectable"><i class="box"></i>
                                        <?php echo $category->Title ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div> <!-- /categories -->

                    <!--  ==========  -->
                    <!--  = Prices slider =  -->
                    <!--  ==========  -->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" href="#filterPrices">قیمت <b class="caret"></b></a>
                        </div>
                        <div id="filterPrices" class="accordion-body in collapse">
                            <div class="accordion-inner with-slider">
                                <div class="jqueryui-slider-container">
                                    <div id="pricesRange"></div>
                                </div>
                                <input type="text" data-initial="432" class="max-val" disabled />
                                <input type="text" data-initial="99" class="min-val pull-right" disabled />
                            </div>
                        </div>
                    </div> <!-- /prices slider -->

                    <!--  ==========  -->
                    <!--  = Size filter =  -->
                    <!--  ==========  -->
                    <div class="accordion-group" id="tourStep3">
                        <div class="accordion-heading">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" href="#filterTwo">وضعیت در انبار<b class="caret"></b></a>
                        </div>
                        <div id="filterTwo" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <a href="#" data-target="Is" data-type="size" class="selectable detailed"><i class="box"></i>موجود</a>
                            </div>
                        </div>
                    </div> <!-- /size filter -->

                    <!--  ==========  -->
                    <!--  = Color filter =  -->
                    <!--  ==========  -->
                    <!--<div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" href="#filterThree">رنگ <b class="caret"></b></a>
                        </div>
                        <div id="filterThree" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <a href="#" data-target="red" data-type="color" class="selectable detailed"><i class="box"></i> قرمز</a>
                                <a href="#" data-target="green" data-type="color" class="selectable detailed"><i class="box"></i> سبز</a>
                                <a href="#" data-target="blue" data-type="color" class="selectable detailed"><i class="box"></i> آبی</a>
                                <a href="#" data-target="pink" data-type="color" class="selectable detailed"><i class="box"></i> صورتی</a>
                                <a href="#" data-target="purple" data-type="color" class="selectable detailed"><i class="box"></i> بنفش</a>
                                <a href="#" data-target="orange" data-type="color" class="selectable detailed"><i class="box"></i> نارنجی</a>

                            </div>
                        </div>
                    </div>--> <!-- /color filter -->

                    <!--  ==========  -->
                    <!--  = Brand filter =  -->
                    <!--  ==========  -->
                    <!--<div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" href="#filterFour">برند <b class="caret"></b></a>
                        </div>
                        <div id="filterFour" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <a href="#" data-target="s-oliver" data-type="brand" class="selectable detailed"><i class="box"></i>تست</a>
                                <a href="#" data-target="nike" data-type="brand" class="selectable detailed"><i class="box"></i> تست</a>

                            </div>
                        </div>
                    </div>--> <!-- /brand filter -->

                    <a href="#" class="remove-filter" id="removeFilters"><span class="icon-ban-circle"></span> حذف همه فیلتر ها</a>

                </div>
            </aside> <!-- /sidebar -->

            <!--  ==========  -->
            <!--  = Main content =  -->
            <!--  ==========  -->
            <section class="span9">

                <!--  ==========  -->
                <!--  = Title =  -->
                <!--  ==========  -->
               <!-- <div class="underlined push-down-20">
                    <div class="row">
                        <div class="span5">
                            <h3><span class="light">همه</span> محصولات</h3>
                        </div>
                        <div class="span4">
                            <div class="form-inline sorting-by" id="tourStep4">
                                <label for="isotopeSorting" class="black-clr">چینش :</label>
                                <select id="isotopeSorting" class="span3">
                                    <option value='{"sortBy":"price", "sortAscending":"true"}'>بر اساس قیمت (کم به زیاد) &uarr;</option>
                                    <option value='{"sortBy":"price", "sortAscending":"false"}'>بر اساس قیمت (زیاد به کم) &darr;</option>
                                    <option value='{"sortBy":"name", "sortAscending":"true"}'>بر اساس نام (صعودی) &uarr;</option>
                                    <option value='{"sortBy":"name", "sortAscending":"false"}'>بر اساس نام (نزولی) &darr;</option>
                                    <option value='{"sortBy":"popularity", "sortAscending":"true"}'>بر اساس محبوبیت (کم به زیاد) &uarr;</option>
                                    <option value='{"sortBy":"popularity", "sortAscending":"false"}'>بر اساس محبوبیت (زیاد به کم) &darr;</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>--> <!-- /title -->

                <!--  ==========  -->
                <!--  = Products =  -->
                <!--  ==========  -->
                <div class="row popup-products">
                    <div id="isotopeContainer" class="isotope-container">

                        <!--  ==========  -->
                        <!--  = Single Product =  -->
                        <!--  ==========  -->
                        <?php
                        foreach ($productList as $product)
                        {
                            if($product->Stock != 0)
                            {
                                $stateStock = 'Is';
                            }
                            else
                            {
                                $stateStock = 'NotIs';
                            }

                            ?>
                            <div class="span3 <?php echo $product->subCategory ?>" data-price="<?php echo $product->Price ?>" data-popularity="2" data-size="<?php echo $stateStock ?>" data-color="pink" data-brand="adidas">
                                <div class="product">
                                    <a style="text-decoration:none" href="<?php echo base_url('Indexcontroller/single_product/'.$product->ID) ?>">
                                        <div class="product-img">
                                            <div >
                                                <img width="540" height="374" alt="" src="<?php echo base_url('uploads/new_products/'.$product->Photo);?>" />
                                            </div>
                                        </div>
                                        <div class="main-titles no-margin">
                                            <h4 class="title">
                                                <?php
                                                if(!is_null($product->Discount))
                                                {
                                                    echo '<span class="striked">'. $product->Price.' تومان '.'</span>';
                                                    echo '<span class="red-clr">'.$product->Discount.' تومان'.'</span>';
                                                }
                                                else
                                                {
                                                    echo $product->Price.' تومان ';
                                                }

                                                ?>
                                            </h4>
                                            <h5 class="no-margin isotope--title">
                                                <?php echo $product->Title ?>
                                                <span class="stock">
                                                <?php
                                                    if($product->Stock != 0)
                                                    {
                                                    ?>
                                                    <span class="btn btn-success">موجود</span>
                                                     <?php
                                                    }
                                                    else
                                                    { ?>
                                                     <span class="btn btn-danger">اتمام موجودی</span>
                                                    <?php
                                                    } ?>

                                                 </span>
                                            </h5>

                                        </div>
                                    </a>
                                </div>
                            </div> <!-- /single product -->
                        <?php } ?>
                    </div>
                </div>
                <hr />
            </section> <!-- /main content -->
        </div>
    </div>
</div> <!-- /container -->
<?php require_once('includes/footer_index.php'); ?>

    