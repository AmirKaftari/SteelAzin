<br>
<div class='main'>
        <h2 style="margin-top:0px">تنظیمات ارسال <?php echo ' بخش '. $button ?></h2>
        <form action="<?php echo $action; ?>" method="post" class="parsley-validate">
				
		<div class="form-group">
                <label class="control-label" for="country">نوع ارسال <?php echo form_error('Type') ?></label>
                <div class="controls">
                    <select data-parsley-required-message="درج این فیلد اجباری است!"  data-parsley-required="true" name="Type" class="form-control">
                        <option value="باربری">باربری</option>
                        <option value="پست">پست</option>
                    </select>
                </div>
        </div>
		
	
		<div class="control-group">
                <label class="control-label" for="country">استان<span class="red-clr bold"></span></label>
                <div class="controls">
					<select data-parsley-required-message="درج این فیلد اجباری است!"  data-parsley-required="true"
							name="_IDState" id="_IDState" class="form-control"
							onchange="selectCity(this.options[this.selectedIndex].value)">
							<option value="-1">انتخاب کنید</option>
								<?php
									foreach ($State as $value): ?>
										<option value="<?php echo $value->id ?>"><?php echo $value->name ?></option>
									 <?php endforeach ?>
					</select>
                </div>
        </div>
		
		 <div class="control-group">
            <label class="control-label" for="country">شهر<span class="red-clr bold"></span></label>
            <div class="controls">
                <select name="city_dropdown" class="form-control chosen-select" id="city_dropdown">
                    <option value=""></option>
                </select>
            </div>
        </div>
		
	    <input type="hidden" name="ID" value="<?php echo $ID; ?>" /> 
		<br>
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('sendsetting') ?>" class="btn btn-default">انصراف</a>
	</form>
    </div>