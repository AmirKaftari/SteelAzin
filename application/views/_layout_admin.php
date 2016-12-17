<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD-->
<head>
   
     <meta charset="UTF-8" />
    <title>پرتال فروش کارخانه استیل آذین</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <?php require_once('includes/_header_panel.php') ?>
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    
    <!-- END PAGE LEVEL  STYLES -->
       <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    <script type="text/javascript">
        
         function getCheckedCheckboxesFor(checkboxName) 
             {
                var checkboxes = document.querySelectorAll('input[name="' + checkboxName + '"]:checked'), values = [];
                Array.prototype.forEach.call(checkboxes, function(el) 
                {
                    values.push(el.value);
                });
                    document.getElementById("AccessList").value = values;
                    return values;
             }
                          
    </script> 
    
</head>
    <!-- END  HEAD-->
    <!-- BEGIN BODY-->
<body class="padTop53 " >

     <!-- MAIN WRAPPER -->
    <div id="wrap">


         <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                    <a href="<?php echo base_url('customerT/dashboard') ?>" class="navbar-brand">
                        <img src="<?php echo base_url('') ?>assets/images/logo.png" alt="" height="30" />
                    </a>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-left">

                    <!-- MESSAGES SECTION -->
                    
                    <!--END MESSAGES SECTION -->

                    <!--TASK SECTION -->
                    
                    <!--END TASK SECTION -->

                    <!--ALERTS SECTION -->
                    
                    <!-- END ALERTS SECTION -->

                    <!--ADMIN SETTINGS SECTIONS -->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="icon-user"></i> مشاهده پروفایل </a>
                            </li>
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?php echo site_url('Welcome/logout'); ?>"><i class="icon-signout"></i> خروج </a>
                            </li>
                        </ul>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
       <div id="right">
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img width="100" height="80" onerror="this.src='<?php echo base_url('assets/images/unknown.png'); ?>'" class="media-object img-thumbnail user-img" alt="User Picture" src="<?php echo base_url('uploads'); echo "/" ; echo $this->session->userdata('pic_teacher') ?>" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"><?php echo 'اپراتور : ' .' '.$this->session->userdata('FullNameOperator'); ?></h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> آنلاین
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
                <li class="panel">
                    <a href="<?php echo base_url('Operator/Dashboard'); ?>" >
                        <i class="icon-table"></i> داشبورد
                    </a>                   
                </li>

                <li class="panel">
                    <a href="#" data-parent="#menu_product" data-toggle="collapse" class="accordion-toggle" data-target="#DDL_product">
                        <i class=" icon-columns"></i> مدیریت محصولات

                        <span class="pull-left">
                            <i class="icon-angle-right"></i>
                        </span>
                    </a>
                    <ul class="collapse" id="DDL_product">
                        <li><a href="<?php echo base_url('Productcontroller'); ?>"><i class="icon-angle-left"></i> لیست محصولات</a></li>
                        <li><a href="<?php echo base_url('Categorycontroller') ?>"><i class="icon-angle-left"></i> دسته بندی محصولات </a></li>
                    </ul>
                </li>

                <li class="panel">
                    <a href="#" data-parent="#menu_orders" data-toggle="collapse" class="accordion-toggle" data-target="#DDL_orders">
                        <i class=" icon-columns"></i> مدیریت سفارشات

                        <span class="pull-left">
                            <i class="icon-angle-right"></i>
                        </span>
                    </a>
                    <ul class="collapse" id="DDL_orders">
                        <li><a href="#"><i class="icon-angle-left"></i> سفارشات معلق </a></li>
                        <li><a href="#"><i class="icon-angle-left"></i> سفارشات ارسال شده </a></li>
                    </ul>
                </li>

                <li class="panel">
                    <a href="#" data-parent="#menu_contents" data-toggle="collapse" class="accordion-toggle" data-target="#DDL_contents">
                        <i class=" icon-columns"></i> مدیریت محتوا

                        <span class="pull-left">
                            <i class="icon-angle-right"></i>
                        </span>
                    </a>
                    <ul class="collapse" id="DDL_contents">
                        <li><a href="#"><i class="icon-angle-left"></i> اخبار </a></li>
                        <li><a href="#"><i class="icon-angle-left"></i> برندها</a></li>
                        <li><a href="#"><i class="icon-angle-left"></i> اسلایدر</a></li>
                        <li><a href="#"><i class="icon-angle-left"></i> صفحه تماس با ما </a></li>
                        <li><a href="#"><i class="icon-angle-left"></i> صفحه درباره ما </a></li>
                    </ul>
                </li>

                <li class="panel">
                    <a href="#" data-parent="#menu_reports" data-toggle="collapse" class="accordion-toggle" data-target="#DDL_reports">
                        <i class=" icon-columns"></i> گزارش گیری

                        <span class="pull-left">
                            <i class="icon-angle-right"></i>
                        </span>
                    </a>
                    <ul class="collapse" id="DDL_reports">
                        <li><a href="#"><i class="icon-angle-left"></i> گزارش گیری ماهانه </a></li>
                        <li><a href="#"><i class="icon-angle-left"></i> گزارش گیری سالانه </a></li>
                    </ul>
                </li>
        
            </ul>

        </div>
        <!--END MENU SECTION -->


        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height:auto">
                <div class="row">
                    <div class="col-lg-12">
                        
						<div > <?php echo $contents ?> </div>
                    </div>
                </div>

                
            </div>
        </div>
       <!--END PAGE CONTENT -->
          <!-- RIGHT STRIP  SECTION -->
       
         <!-- END RIGHT STRIP  SECTION -->

    </div>

     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <div id="footer">
        <p>کلیه حقوق سایت متعلق به <a href="http://www.behzadbook.ir">کارخانه استیل آذین</a> می باشد.</p>
    </div>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
    	<?php require_once('includes/_footer_panel.php') ?>
    <!-- END GLOBAL SCRIPTS -->
</body>
    <!-- END BODY-->
    
</html>
