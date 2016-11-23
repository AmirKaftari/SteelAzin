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
                    		    	        <h1><span class="light">تاييد</span> و پرداخت</h1>
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
                    		    	<div class="step done">
                    		    	    <div class="step-badge"><i class="icon-ok"></i></div>
                    		    	    <a href="checkout-step-3.html">شيوه پرداخت</a>
                    		    	</div>
                    		    	<div class="step active">
                    		    	    <div class="step-badge">4</div>
                    		    	    تاييد و پرداخت
                    		    	</div>
                    		    </div>
                    		</div> <!-- /steps -->
                    		
                    		<!--  ==========  -->
							<!--  = Selected Items =  -->
							<!--  ==========  -->
							<table class="table table-items">
							    <thead>
							    	<tr>
							    		<th colspan="2">آيتم</th>
							    		<th><div class="align-center">تعداد</div></th>
							    		<th><div class="align-right">قيمت</div></th>
							    	</tr>
							    </thead>
							    <tbody>
							         
							        <tr>
							        	<td class="image"><img src="<?php echo base_url('uploads/new_products/'.$this->session->userdata('Pic')) ?>" alt="" width="124" height="124" /></td>
							        	<td class="desc"><?php echo $this->session->userdata('Title'); ?></td>
							        	<td class="qty">
											<?php
												if(!is_null($this->session->userdata('new_count')))
													echo $this->session->userdata('new_count');
												else
													echo $this->session->userdata('Count');
											?>
										</td>
							        	<td class="price">
											<?php
												if(!is_null($this->session->userdata('new_price')))
													echo $this->session->userdata('new_price').' تومان ';
												else
													echo $this->session->userdata('Price').' تومان ';
											?>
							        	</td>
							        </tr>
							         
									<tr>
							        	<td colspan="2" rowspan="2">
							        	    &nbsp;
							        	</td>
							        	<td class="stronger">نوع ارسال : </td>
							        	<td class="stronger">
											<div class="controls">
												<label><input type="radio" name="optradio"> پست معمولی </label>
											</div>
											<div class="controls">
												<label><input type="radio" name="optradio"> پست پیشتاز </label>
											</div>
										</td>
							        </tr>
							        <tr>
							        	<td class="stronger">جمع کل :</td>
							        	<td class="stronger">
											<div class="size-16 align-right">
												<?php
												if(!is_null($this->session->userdata('new_price')))
													echo $this->session->userdata('new_price').' تومان ';
												else
													echo $this->session->userdata('Price').' تومان ';
												?>
											</div></td>
							        </tr>
							    </tbody>
							</table>
							
							<p class="right-align">
							    <a href="#" class="btn btn-primary higher bold">ثبت سفارش</a>
							</p>
                    	</div>
                    </div>
                </div>
                
                
            </section> <!-- /main content -->
        
        </div>
    </div> <!-- /container -->
    </div> <!-- end of master-wrapper -->
<?php require_once('includes/footer_index.php'); ?>