<!--  ==========  -->
<!--  = Footer =  -->
<!--  ==========  -->
<?php
    load_library('Translate');
?>
<footer>
    <!--  ==========  -->
    <!--  = Upper footer =  -->
    <!--  ==========  -->
    <div class="foot-light">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <h2 class="pacifico">Steel azin shop &nbsp; <img src="<?php echo base_url();?>assets/images/webmarket.png" alt="Webmarket Cart" class="align-baseline" /></h2>
                    <p>این یک نوشته آزمایشی است. شما میتوانید این قسمت را با نوشته های دلخواه خود که مناسب این ناحیه باشند پر نمایید. ما این بخش را با نوشته هایی بی معنی پر کرده ایم.</p>
                </div>
                <div class="span4">

                </div>
                <div class="span4">
                    <div class="main-titles lined">
                        <h3 class="title"><span class="light">عضویت</span> در خبرنامه</h3>
                    </div>
                    <p>این بخشی از یک نوشتار آزمایشی صرفا برای پر کردن این ناحیه است.</p>
                    <!-- Begin MailChimp Signup Form -->
                    <div id="mc_embed_signup">
                        <form action="" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form form-inline" target="_blank" novalidate>
                            <div class="mc-field-group">
                                <input type="email" value="" placeholder="آدرس ایمیلتان را وارد کنید" name="EMAIL" class="required email" id="mce-EMAIL">
                                <input type="submit" value="ارسال" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary">
                            </div>
                            <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>

                        </form>
                    </div>
                    <!--End mc_embed_signup-->
                </div>
            </div>
        </div>
    </div> <!-- /upper footer -->

    <!--  ==========  -->
    <!--  = Middle footer =  -->
    <!--  ==========  -->
    <!-- /middle footer -->

    <!--  ==========  -->
    <!--  = Bottom Footer =  -->
    <!--  ==========  -->
    <div class="foot-last">
        <a href="#" id="toTheTop">
            <span class="icon-chevron-up"></span>
        </a>
        <div class="container">
            <div class="row">
                <div class="span6">
                    &copy; تمامی حقوق مادی و معنوی این پرتال مربوط به کارخانه استیل آذین می باشد.<a target="_blank" href="#"></a>.
                </div>

            </div>
        </div>
    </div> <!-- /bottom footer -->
</footer> <!-- /footer -->


<!--  ==========  -->
<!--  = Modal Windows =  -->
<!--  ==========  -->

<!--  = Login =  -->
<div id="loginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="loginModalLabel"><span class="light">ورود</span> به استیل آذین </h3>
    </div>
    <div class="modal-body">
        <form method="post" action="<?php echo base_url('Welcome/validate_user') ?>" class="parsley-validate">
            <div class="control-group">
                <div class="controls">
                    <input type="text" class="input-block-level" name="UserName"
                           data-parsley-required-message = "<?php echo Translate::RequireField ?>"
                           data-parsley-required="true"
                           id="inputEmail" placeholder="<?php echo Translate::UsernameAndEmail ?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="inputPassword">رمز عبور</label>
                <div class="controls">
                    <input type="password" data-parsley-required-message = "<?php echo Translate::RequireField ?>"
                           data-parsley-required="true"
                           class="input-block-level" name="Password" id="inputPassword" placeholder="رمز عبور">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <label class="checkbox">
                        <input type="checkbox">
                        مرا به خاطر بسپار
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary input-block-level bold higher">
                ورود
            </button>
        </form>
        <p class="center-align push-down-0">
            <a href="#" data-dismiss="modal">رمز عبورتان را فراموش کرده اید؟</a>
        </p>
    </div>
</div>

<!--  = Register =  -->
<div id="registerModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="registerModalLabel"><span class="light">ثبت نام</span> در استیل آذین </h3>
    </div>
    <div class="modal-body">
        <form method="post" action="<?php echo base_url('Welcome/register') ?>" class="parsley-validate">
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="inputEmailRegister">ایمیل</label>
                <div class="controls">
                    <input type="text" data-parsley-required-message = "<?php echo Translate::RequireField ?>"
                           data-parsley-required="true"
                           class="input-block-level" name="inputEmailRegister"
                           id="inputEmailRegister" placeholder="نام کاربری یا پست الکترونیکی">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="inputPasswordRegister">رمز عبور</label>
                <div class="controls">
                    <input type="password" data-parsley-required-message = "<?php echo Translate::RequireField ?>"
                           data-parsley-required="true"
                           class="input-block-level" name="inputPasswordRegister" id="inputPasswordRegister" placeholder="گذرواژه">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="inputPasswordRegister">شماره موبایل</label>
                <div class="controls">
                    <input type="text" data-parsley-required-message = "<?php echo Translate::RequireField ?>"
                           data-parsley-required="true"
                           class="input-block-level" name="inputMobileRegister" id="inputMobileRegister" placeholder="شماره موبایل">
                </div>
            </div>

            <button type="submit" class="btn btn-danger input-block-level bold higher">
                ثبت نام
            </button>
        </form>
        <p class="center-align push-down-0">
            <a data-toggle="modal" role="button" href="#loginModal" data-dismiss="modal">قبلا ثبت نام کرده اید؟</a>
        </p>

    </div>
</div>


</div> <!-- end of master-wrapper -->



<!--  ==========  -->
<!--  = JavaScript =  -->
<!--  ==========  -->

<!--  = FB =  -->

<div id="fb-root"></div>

<!--  = jQuery - CDN with local fallback =  -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
    if (typeof jQuery == 'undefined') {
        document.write('<script src="<?php echo base_url();?>assets/js/jquery.min.js"><\/script>');
    }
</script>

<!--  = _ =  -->
<script src="<?php echo base_url();?>assets/js/underscore/underscore-min.js" type="text/javascript"></script>

<!--  = Bootstrap =  -->
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  = Slider Revolution =  -->
<script src="<?php echo base_url();?>assets/js/rs-plugin/pluginsources/jquery.themepunch.plugins.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>

<!--  = CarouFredSel =  -->
<script src="<?php echo base_url();?>assets/js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>

<!--  = jQuery UI =  -->
<script src="<?php echo base_url();?>assets/js/jquery-ui-1.10.3/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/jquery-ui-1.10.3/touch-fix.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/lightbox/js/lightbox.js" type="text/javascript"></script>

<!--  = Isotope =  -->
<script src="<?php echo base_url();?>assets/js/isotope/jquery.isotope.min.js" type="text/javascript"></script>

<!--  = Tour =  -->
<script src="<?php echo base_url();?>assets/js/bootstrap-tour/build/js/bootstrap-tour.min.js" type="text/javascript"></script>

<!--  = PrettyPhoto =  -->
<script src="<?php echo base_url();?>assets/js/prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript"></script>

<!--  = Google Maps API =  -->

<script type="text/javascript" src="<?php echo base_url();?>assets/js/goMap/js/jquery.gomap-1.3.2.min.js"></script>

<!--  = Custom JS =  -->
<script src="<?php echo base_url();?>assets/js/custom.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/my-custom.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url('') ?>assets/js/parsley.js"></script>
<script type="text/javascript" src="<?php echo base_url('') ?>assets/js/parsley.messages.fa.js"></script>

<script>
    $('.parsley-validate').parsley();
</script>

<script>

    $(document).ready(function()
    {
        $(".area").keyup(function()
        {
            var val1 = $("#txtWidth").val();
            var val2 = $("#txtHeight").val();
            $("#txtArea").val(val1 * val2);
            $("#txtAreaValue").val(val1 * val2);
            var area = $("#txtAreaValue").val();
            var price = $("#txtPrice").val();
            $("#txtCostValue").val(area * price);
            $("#txtCost").val(area * price);
        });
    });

</script>

</body>
</html>
