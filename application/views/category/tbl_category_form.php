<br>
<div class='main'>
        <h2 style="margin-top:0px"><?php echo $button ?> دسته بندی </h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
                <label for="varchar">عنوان <?php echo form_error('Title') ?></label>
                <input type="text" class="form-control" name="Title" id="Title" placeholder="عنوانی برای محصول انتخاب کنید" value="<?php echo $Title; ?>" />
        </div>

        <div class="form-group">
                <label class="control-label">مادر</label>
                <div class="controls">
                    <select data-parsley-required-message="درج این فیلد اجباری است!"  data-parsley-required="true" name="categoryParent" class="form-control">
                        <option value="<?php if(isset($CategoryId) && $CategoryId != 0) echo $CategoryId ;?>">
                            <?php if(isset($CategoryTitle) && $CategoryId != 0) echo $CategoryTitle; else echo 'هیچکدام'?>
                        </option>
                        <?php
                        foreach ($categoryList as $category)
                        {
                            ?>
                            <option value="<?php echo $category->ID ?>"><?php echo $category->Title ?></option>
                        <?php
                        } ?>
                    </select>
                </div>
        </div>

	    <input type="hidden" name="ID" value="<?php echo $ID; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('categorycontroller') ?>" class="btn btn-default">انصراف</a>
	</form>
    </div>