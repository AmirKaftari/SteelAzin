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
                    		    	        <h1><span class="light">آدرس ارسال و</span> پرداخت</h1>
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
                    		    	    <a href="checkout-step-1.html">سبد خرید</a>
                    		    	</div>
                    		    	<div class="step active">
                    		    	    <div class="step-badge">2</div>
                    		    	اطلاعات ارسال
                    		    	</div>
                    		    	<div class="step">
                                        <div class="step-badge">3</div>
                                        شیوه پرداخت
                                    </div>
                    		    	<div class="step">
                    		    	    <div class="step-badge">4</div>
                    		    	    تایید و پرداخت
                    		    	</div>
                    		    </div>
                    		</div> <!-- /steps -->
                    		
						    <!--  ==========  -->
							<!--  = Shipping addr form =  -->
							<!--  ==========  -->
							    
						    <form action="#" method="post" class="form-horizontal form-checkout">
                                <div class="control-group">
                                    <label class="control-label" for="firstName">تحویل گیرنده<span class="red-clr bold">*</span></label>
                                    <div class="controls">
                                        <input type="text" id="firstName" class="span4" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="telephone">شماره تماس همراه<span class="red-clr bold">*</span></label>
                                    <div class="controls">
                                        <input type="tel" id="telephone" class="span4" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="email">شماره تماس ثابت<span class="red-clr bold">*</span></label>
                                    <div class="controls">
                                        <input type="email" id="email" class="span4" required>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="country">استان<span class="red-clr bold">*</span></label>
                                    <div class="controls">
                                        <select id="country" class="as-span4"></select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="country">شهر<span class="red-clr bold">*</span></label>
                                    <div class="controls">
                                        <select id="country" class="as-span4"></select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="addr1">آدرس<span class="red-clr bold">*</span></label>
                                    <div class="controls">
                                        <input type="text" id="addr1" class="span4" required>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="zip">کد پستی<span class="red-clr bold">*</span></label>
                                    <div class="controls">
                                        <input type="text" id="zip" class="span4" >
                                    </div>
                                </div>

                            </form>
							
                            <hr />
						    
						    <p class="right-align">
						        در مرحله بعدی شما شیوه پرداخت را انتخاب میکنید &nbsp; &nbsp;
						        <a href="checkout-step-3.html " class="btn btn-primary higher bold">ادامه</a>
						    </p>
							    
							    
                    	</div>
                    </div>
                </div>
                
                
            </section> <!-- /main content -->
        
        </div>
    </div> <!-- /container -->
    </div> <!-- end of master-wrapper -->
<?php require_once('includes/footer_index.php'); ?>