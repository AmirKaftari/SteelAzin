<br>
<div class='main'>
        <h2 style="margin-top:0px">تنظیمات عمومی<?php echo ' --- '. $button ?></h2>
        <form action="<?php echo $action; ?>" method="post" class="parsley-validate">
		
	    <div class="form-group">
                <label for="int">هزینه موتور دستی<?php echo form_error('motorDasti') ?></label>
                <input  data-parsley-required-message="درج این فیلد اجباری است!"  data-parsley-required="true" 
					type="text" class="form-control" name="motorDasti" id="motorDasti"  value="<?php echo $motorDasti; ?>" />
        </div>
		
		<div class="form-group">
                <label for="int">هزینه موتور برقی<?php echo form_error('motorBarghi') ?></label>
                <input  data-parsley-required-message="درج این فیلد اجباری است!"  data-parsley-required="true" 
					type="text" class="form-control" name="motorBarghi" id="motorBarghi"  value="<?php echo $motorBarghi; ?>" />
        </div>
		
		<div class="form-group">
                <label for="int">هزینه پایه سقفی<?php echo form_error('payehSaghfi') ?></label>
                <input  data-parsley-required-message="درج این فیلد اجباری است!"  data-parsley-required="true" 
					type="text" class="form-control" name="payehSaghfi" id="payehSaghfi"  value="<?php echo $payehSaghfi; ?>" />
        </div>
		
		<div class="form-group">
                <label for="int">هزینه پایه دیواری<?php echo form_error('payehDivari') ?></label>
                <input  data-parsley-required-message="درج این فیلد اجباری است!"  data-parsley-required="true" 
					type="text" class="form-control" name="payehDivari" id="payehDivari"  value="<?php echo $payehDivari; ?>" />
        </div>
		
	    <div class="form-group">
                <label for="int">هزینه نصب<?php echo form_error('nasb') ?></label>
                <input  data-parsley-required-message="درج این فیلد اجباری است!"  data-parsley-required="true" 
					type="text" class="form-control" name="nasb" id="nasb"  value="<?php echo $nasb; ?>" />
        </div>
	
	    <input type="hidden" name="ID" value="<?php echo $ID; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('settingcontroller') ?>" class="btn btn-default">انصراف</a>
	</form>
    </div>