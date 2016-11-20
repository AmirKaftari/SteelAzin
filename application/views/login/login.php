<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title>ورود به پرتال مدیریت تایم</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
     <!-- PAGE LEVEL STYLES -->
    <link rel="stylesheet" href="<?php echo base_url('assets/login/css/bootstrap.rtl.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/login/css/login.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/login/css/magic.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/login/css/parsley.css') ?>" />
    
    
     <!-- END PAGE LEVEL STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body >

   <!-- PAGE CONTENT --> 
    <div class="container">
    <div class="text-center">
        <img src="<?php echo base_url('assets/images/logo.png') ?>"  alt=" Logo" height="80" />
    </div>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            
            <form action="<?php echo site_url('Welcome/validate_user') ?>" method="post" class="form-signin parsley-validate" role="form">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                    <?php if(isset($msgError)) echo $msgError; else { ?> نام کاربری و رمز عبور خود را وارد نمایید
                    <?php } ?>           
                                                               
                </p>
                <input data-parsley-required-message="نام کاربری را وارد نمایید!" data-parsley-required="true"
                       name="UsernameOperator" id ="UsernameOperator" type="text" placeholder="نام کاربری" class="form-control"/>
                <input data-parsley-required="true" data-parsley-required-message="رمز عبور را وارد نمایید!"
                       name="PasswordOperator" id="PasswordOperator" type="password" placeholder="رمز عبور" class="form-control" />
                <button class="btn text-muted text-center btn-danger" type="submit">ورود اپراتور</button>
            </form>
        </div>

        <div id="signup" class="tab-pane ">
            
            <form action="<?php echo base_url('index.php/Welcome/validate_user') ?>" method="post" class="form-signin parsley-validate" role="form">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                    <?php if(isset($msgError)) echo $msgError; else { ?> نام کاربری و رمز عبور خود را وارد نمایید
                    <?php } ?>           
                                                               
                </p>
                <input data-parsley-required-message="نام کاربری را وارد نمایید!" data-parsley-required="true"
                       name="txtUserNameCustomerT" id ="txtUserNameCustomerT" type="text" placeholder="نام کاربری" class="form-control"/>
                <input data-parsley-required="true" data-parsley-required-message="رمز عبور را وارد نمایید!"
                       name="txtPassCustomerT" id="txtPassCustomerT" type="password" placeholder="رمز عبور" class="form-control" />
                <button class="btn text-muted text-center btn-danger" type="submit">ورود مشتری</button>
            </form>
        </div>
      
    </div>
    <div class="text-center">
        <ul class="list-inline">
            <li><a class="text-muted" href="#login" data-toggle="tab">ورود اپراتور</a></li>
            <li><a class="text-muted" href="#signup" data-toggle="tab">ورود مشتری</a></li>
        </ul>
    </div>


</div>

	  <!--END PAGE CONTENT -->  
	  
	   
	      
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="<?php echo base_url('assets/login/js/jquery-2.0.3.min.js') ?>"></script>
      <script src="<?php echo base_url('assets/login/js/bootstrap.rtl.js') ?>"></script>
      <script src="<?php echo base_url('assets/login/js/login.js') ?>"></script> 
      <script src="<?php echo base_url('assets/login/js/parsley.js'); ?>"></script>
      <script src="<?php echo base_url('assets/login/js/parsley.messages.fa.js'); ?>"></script>
      <script>
          $('.parsley-validate').parsley();
      </script>
      <!--END PAGE LEVEL SCRIPTS -->
      
</body>
    <!-- END BODY -->
</html>
