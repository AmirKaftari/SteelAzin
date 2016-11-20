<?php  require_once('includes/header_index.php'); ?>
    <div class="darker-stripe">

    </div>
    <!--  ==========  -->
    <!--  = Main container =  -->
    <!--  ==========  -->
    <div class="container">
        <div class="push-up top-equal blocks-spacer">
            
            <!--  ==========  -->
            <!--  = Product =  -->
            <!--  ==========  -->
            <div class="row blocks-spacer">
                
                <!--  ==========  -->
                <!--  = Preview Images =  -->
                <!--  ==========  -->
                <div class="span5">
                    <div class="product-preview">
                        <div class="picture">
                            <img src="<?php echo base_url('uploads/new_products/'.$single_product->Photo) ?>" alt="" width="940" height="940" id="mainPreviewImg" />
                        </div>
                        <div class="thumbs clearfix">
                            <div class="thumb active">
                                <a href="#mainPreviewImg"><img src="<?php echo base_url('uploads/new_products/'.$single_product->Photo) ?>" alt="" width="940" height="940" /></a>
                            </div>
                            <div class="thumb">
                                <a href="#mainPreviewImg"><img src="<?php echo base_url('uploads/new_products/'.$single_product->Photo) ?>" alt="" width="940" height="940" /></a>
                            </div>
                            <div class="thumb">
                                <a href="#mainPreviewImg"><img src="<?php echo base_url('uploads/new_products/'.$single_product->Photo) ?>" alt="" width="940" height="940" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--  ==========  -->
                <!--  = Title and short desc =  -->
                <!--  ==========  -->
                <div class="span7">
                    <div class="product-title">
                        <h1 class="name"><span class="light"><?php echo $single_product->Title; ?></span></h1>
                        <div class="meta">
                            <span class="tag"><?php echo $single_product->Price.' '.'تومان' ?></span>
                            <span class="stock">
                                <span class="btn btn-success">موجود</span> 
<!--                                <span class="btn btn-danger">اتمام موجودی</span>-->
<!--                                <span class="btn btn-warning">تماس بگیرید</span>-->
                            </span>
                        </div>
                    </div>
                    <div class="product-description">
                        <p><?php echo $single_product->Discript;  ?></p>
                        <hr />
                        
                        <!--  ==========  -->
                        <!--  = Add to cart form =  -->
                        <!--  ==========  -->
                        <form method="post" action="<?php echo base_url('Indexcontroller/start_buy') ?>" class="form  clearfix">
                            <div class="numbered">
                            	<input type="text" name="txtCount" value="1" class="tiny-size" />
                            	<span class="clickable add-one icon-plus-sign-alt"></span>
                            	<span class="clickable remove-one icon-minus-sign-alt"></span>
                            </div>
                            &nbsp;
                            <select name="txtColor" class="span2">
                                <option value="-1">انتخاب رنگ</option>
                                <option value="blue">آبی</option>
                                <option value="orange">نارنجی</option>
                                <option value="black">مشکی</option>
                            </select>
                            &nbsp;
                            <input data-parsley-required-message="درج این فیلد اجباری است!"  data-parsley-required="true" type="text"
                                       name="txtWidth" id="txtWidth" class="area form-control" placeholder="عرض به سانتی متر">
                            &nbsp;
                            <input data-parsley-required-message="درج این فیلد اجباری است!"  data-parsley-required="true" type="text"
                                   name="txtHeight" id="txtHeight" class="area form-control" placeholder="طول به سانتی متر">
                            &nbsp;
                            <input data-parsley-required-message="درج این فیلد اجباری است!"  data-parsley-required="true" type="text"
                                   name="txtArea" disabled="disabled" id="txtArea" class=" form-control" placeholder="مساحت">
                            <input type="hidden" name="txtAreaValue" id="txtAreaValue">
                            <input type="hidden" name="txtTitle" id="txtTitle" value="<?php echo $single_product->Title; ?>">
                            <input type="hidden" name="txtPicUrl" id="txtPicUrl" value="<?php echo $single_product->Photo ?>">
                            <input type="hidden" name="txtPrice" id="txtPrice" value="<?php echo $single_product->Price ?>">
                            &nbsp;
                            <input type="checkbox" name="txtNasb" value="1"> درخواست نصب
                            <button class="btn btn-danger pull-right"><i class="icon-shopping-cart"></i> اضافه به سبد خرید</button>
                        </form>
                        
                        <hr />
                    </div>
                </div>
            </div>
            
            <!--  ==========  -->
            <!--  = Tabs with more info =  -->
            <!--  ==========  -->
            <div class="row">
                <div class="span12">
                    <ul id="myTab" class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab-1" data-toggle="tab">جزئیات</a>
                        </li>
                        <li>
                            <a href="#tab-2" data-toggle="tab">جدول اندازه</a>
                        </li>
                        <li>
                            <a href="#tab-3" data-toggle="tab">نظرات</a>
                        </li>
                        <li>
                            <a href="#tab-4" data-toggle="tab">جزئیات ارسال</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="fade in tab-pane active" id="tab-1">
                            <?php echo $single_product->Detail; ?>
                        </div>
                        <div class="fade tab-pane" id="tab-2">

                        </div>
                        <div class="fade tab-pane" id="tab-3">

                        </div>
                        <div class="fade tab-pane" id="tab-4">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /container -->
    
    <!--  ==========  -->
    <!--  = Related Products =  -->
    <!--  ==========  -->
    <div class="boxed-area no-bottom">
        <div class="container">
            
            <!--  ==========  -->
            <!--  = Title =  -->
            <!--  ==========  -->
            <div class="row">
                <div class="span12">
                    <div class="main-titles lined">
                    	<h2 class="title"><span class="light">محصولات</span> مرتبط</h2>
                    </div>
                </div>
            </div>
            
            <!--  ==========  -->
            <!--  = Related products =  -->
            <!--  ==========  -->
            <div class="row popup-products">
                 
                    
                <!--  ==========  -->
                <!--  = Products =  -->
                <!--  ==========  -->
            	<div class="span3">
            	    <div class="product">
            	        <div class="product-img">
                            <div class="picture">
                                <img src="images/dummy/products/product-1.jpg" alt="" width="540" height="374" />
                                <div class="img-overlay">
                                    <a href="#" class="btn more btn-primary">توضیحات بیشتر</a>
                                    <a href="#" class="btn buy btn-danger">اضافه به سبد خرید</a>
                                </div>
                            </div>
                        </div>
                        <div class="main-titles no-margin">
                            <h4 class="title"><span class="striked">90000 تومان</span> <span class="red-clr">80000 تومان</span></h4>
                            <h5 class="no-margin">آدیداس کانورس</h5>
                        </div>
                        <p class="desc">توضیحاتی که در مورد محصول لازم است را در اینجا مینویسید</p>
                        <p class="center-align stars">
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star"></span>
                        </p>
            	    </div>
            	</div> <!-- /product -->

            </div>
        </div>
    </div>
<?php
    require_once('includes/footer_index.php');
?>