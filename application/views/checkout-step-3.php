<?php  require_once('includes/header_index.php'); ?>
  <body class=" checkout-page">
    <div class="master-wrapper">
        <div class="container">
            <div class="row">

                <!--  ==========  -->
                <!--  = Main content =  -->
                <!--  ==========  -->
                <section class="span12">

                    <div class="checkout-container">
                        <div class="row">
                            <div class="span10 offset1">

                                <!--  ==========  -->
                                <!--  = Header =  -->
                                <!--  ==========  -->
                                <header>
                                    <div class="row">
                                        <div class="span2">

                                        </div>
                                        <div class="span6">
                                            <div class="center-align">
                                                <h1><span class="light">انتخاب</span> شيوه پرداخت</h1>
                                            </div>
                                        </div>
                                        <div class="span2">
                                            <div class="right-align">

                                            </div>
                                        </div>
                                    </div>
                                </header>

                                <!--  ==========  -->
                                <!--  = Steps =  -->
                                <!--  ==========  -->
                                <div class="checkout-steps">
                                    <div class="clearfix">
                                        <div class="step done">
                                            <div class="step-badge"><i class="icon-ok"></i></div>
                                            <a href="checkout-step-1.html">سبد خريد</a>
                                        </div>
                                        <div class="step done">
                                            <div class="step-badge"><i class="icon-ok"></i></div>
                                            <a href="checkout-step-2.html">آدرس ارسال</a>
                                        </div>
                                        <div class="step active">
                                            <div class="step-badge">3</div>
                                            شيوه پرداخت
                                        </div>
                                        <div class="step">
                                            <div class="step-badge">4</div>
                                            تاييد و پرداخت
                                        </div>
                                    </div>
                                </div> <!-- /steps -->

                                <!--  ==========  -->
                                <!--  = Payment =  -->
                                <!--  ==========  -->
                                <span class="btn btn-danger circle pull-left"><i class="icon-chevron-down"></i></span>
                                <div class="shifted-left-45 clearfix">
                                    <form action="<?php echo base_url('Indexcontroller/checkout_step_4') ?>" method="post" class="form-horizontal form-checkout">
                                        <div class="control-group">
                                            <div class="controls">
                                                <label><input type="radio" name="optradio"> پرداخت حضوری </label>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <div class="controls">
                                                <label><input type="radio" name="optradio"> پرداخت اینترنتی </label>
                                            </div>
                                        </div>
                                        <p class="right-align">
                                            در مرحله بعدي شما قادر هستيد سفارشتان را بازبيني کرده و آن را تاييد کنيد &nbsp; &nbsp;
                                            <button type="submit" class="btn btn-primary higher bold">ادامه</button>
                                        </p>
                                    </form>
                                </div>

                                <hr />

                            </div>
                        </div>
                    </div>
                </section> <!-- /main content -->
            </div>
        </div> <!-- /container -->
    </div> <!-- end of master-wrapper -->
<?php require_once('includes/footer_index.php'); ?>