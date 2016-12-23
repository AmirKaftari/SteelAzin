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
                    		    	        <h1><span class="light">بازبینی</span> سبد خرید</h1>
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
                    		    	<div class="step active">
                    		    	    <div class="step-badge">1</div>
                    		    	    سبد خرید
                    		    	</div>
                    		    	<div class="step">
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
							<!--  = Selected Items =  -->
							<!--  ==========  -->
							<form action="<?php echo base_url('Indexcontroller/checkout_step_2') ?>" method="post" class="form-horizontal form-checkout parsley-validate">
							<table class="table table-items">
							    <thead>
							    	<tr>
							    		<th colspan="2">محصول</th>
										<th><div class="align-right">سمت زنجیر</div></th>
										<th><div class="align-right">نوع پایه</div></th>
										<th><div class="align-right">نوع موتور</div></th>
							    		<th><div class="align-center">تعداد</div></th>
							    		<th><div class="align-right">قیمت</div></th>
							    	</tr>
							    </thead>
							    <tbody>
							         
							        <tr>
							        	<td class="image"><img src="<?php echo base_url('uploads/new_products/'.$Pic) ?>" alt="" width="124" height="124" /></td>
							        	<td class="desc"><?php echo $Title; ?>&nbsp; <a title="Remove Item" class="icon-remove-sign" href="#"></a></td>
										<td class="price">
											<?php if($Zanjir = 'right') echo 'راست';else echo 'چپ' ?>
										</td>

										<td class="price">
											<?php if($Paye == 'Saghfi') echo 'سقفی'  ; else 'دیواری'   ?>
										</td>

										<td class="price">
											<?php if($Motor == 'Dasti') echo 'دستی'  ; else 'برقی'?>
										</td>

										<td class="qty">
							        	    <input name="txtNewCount" id="txtNewCount" type="text" class="tiny-size" value="<?php echo $Count; ?>" />
					            	    </td>
							        	<td class="price">
											<?php echo $Price; ?>
							        	</td>

							        </tr>
							    </tbody>
							</table>
							<p class="right-align">
									در مرحله بعدی شما آدرس ارسال را انتخاب خواهید کرد. &nbsp; &nbsp;
								<button type="submit" class="btn btn-primary higher bold"> ادامه </button>
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
    