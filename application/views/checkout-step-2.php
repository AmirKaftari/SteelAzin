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
							    
						    <form action="<?php echo base_url('Indexcontroller/checkout_step_3') ?>" method="post" class="form-horizontal form-checkout parsley-validate">
                                <div class="control-group">
                                    <label class="control-label" for="firstName">تحویل گیرنده<span class="red-clr bold"> * </span></label>
                                    <div class="controls">
                                        <input data-parsley-required-message="درج این فیلد اجباری است!"  data-parsley-required="true" type="text" name="txtReceiver" id="txtReceiver" class="span4" >
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="telephone">شماره تماس همراه<span class="red-clr bold"> * </span></label>
                                    <div class="controls">
                                        <input type="tel" name="txtCellPhone" id="txtCellPhone" class="span4" data-parsley-required-message="درج این فیلد اجباری است!"  data-parsley-required="true">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="email">شماره تماس ثابت<span class="red-clr bold"> * </span></label>
                                    <div class="controls">
                                        <input type="text" name="txtPhone" id="txtPhone" class="span4" data-parsley-required-message="درج این فیلد اجباری است!"  data-parsley-required="true">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="country">استان<span class="red-clr bold"> * </span></label>
                                    <div class="controls">
                                        <select data-parsley-required-message="درج این فیلد اجباری است!"  data-parsley-required="true"
                                                name="_IDState" id="_IDState" class="form-control"
                                                onchange="selectCity(this.options[this.selectedIndex].value)">
                                            <option value="-1">انتخاب کنید</option>
                                            <?php
                                            foreach ($listState as $value): ?>
                                                <option value="<?php echo $value->id ?>"><?php echo $value->name ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="country">شهر<span class="red-clr bold"> * </span></label>
                                    <div class="controls">
                                        <select data-parsley-required-message="درج این فیلد اجباری است!"  data-parsley-required="true" name="city_dropdown" class="form-control chosen-select" id="city_dropdown">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="addr1">آدرس<span class="red-clr bold"> * </span></label>
                                    <div class="controls">
                                        <textarea name="txtAddress" cols="20" rows="10" data-parsley-required-message="درج این فیلد اجباری است!"  data-parsley-required="true"></textarea>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="zip">کد پستی<span class="red-clr bold"> * </span></label>
                                    <div class="controls">
                                        <input data-parsley-required-message="درج این فیلد اجباری است!"  data-parsley-required="true" type="text" name="txtZipCode" id="txtZipCode" class="span4" >
                                    </div>
                                </div>
                                <p class="right-align">
                                    در مرحله بعدی شما شیوه پرداخت را انتخاب میکنید &nbsp; &nbsp;
                                    <button type="submit" class="btn btn-primary higher bold">ادامه</button>
                                </p>

                            </form>
							
                            <hr />
						    

							    
							    
                    	</div>
                    </div>
                </div>
                
                
            </section> <!-- /main content -->
        
        </div>
    </div> <!-- /container -->
    </div> <!-- end of master-wrapper -->
<?php require_once('includes/footer_index.php'); ?>