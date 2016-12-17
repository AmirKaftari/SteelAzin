<br>
<div class='main'>
        <h2 style="margin-top:0px"></h2>
        <form action="<?php echo $action; ?>" method="post" class="parsley-validate">
	    <div class="form-group">
                <label for="varchar">عنوان محصول <?php echo form_error('Title') ?></label>
                <input type="text" class="form-control" name="Title" id="Title" value="<?php echo $Title; ?>" />
        </div>

        <div class="form-group">
                <label for="int"> موجودی در انبار <?php echo form_error('Stock') ?></label>
                <input type="text" class="form-control" name="Stock" id="Stock"value="<?php echo $Stock; ?>" />
        </div>

	    <input type="hidden" name="ID" value="<?php echo $ID; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('productcontroller') ?>" class="btn btn-default">انصراف</a>
	</form>
    </div>