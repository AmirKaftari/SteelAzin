<br>
<div class='main'>
        <h2 style="margin-top:0px"></h2>
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
	    <div class="form-group">
                <label for="int">کد محصول <?php echo form_error('Code') ?></label>
                <input type="text" class="form-control" name="Code" id="Code"  value="<?php echo $Code; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">عنوان محصول <?php echo form_error('Title') ?></label>
                <input type="text" class="form-control" name="Title" id="Title" value="<?php echo $Title; ?>" />
            </div>
	    <div class="form-group">
                <label for="int">قیمت <?php echo form_error('Price') ?></label>
                <input type="text" class="form-control" name="Price" id="Price"value="<?php echo $Price; ?>" />
        </div>
        <div class="form-group">
                <label for="int"> موجودی در انبار <?php echo form_error('Stock') ?></label>
                <input type="text" class="form-control" name="Stock" id="Stock"value="<?php echo $Stock; ?>" />
        </div>
	    <div class="form-group">
                <label for="Discript">توضیح <?php echo form_error('Discript') ?></label>
                <textarea class="form-control" rows="3" name="Discript" id="Discript" ><?php echo $Discript; ?></textarea>
        </div>
        <div class="form-group">
                <label for="Discript"> جزئیات بیشتر  <?php echo form_error('Detail') ?></label>
                <textarea class="form-control" rows="3" name="Detail" id="Detail" ><?php echo $Detail; ?></textarea>
        </div>

        <div class="form-group">
                <input <?php if($Special) echo 'checked' ?> type="checkbox" name="Special" value="1"> قرارگیری در بخش محصولات ویژه
        </div>

        <div class="form-group">
                <label >تصویر</label>
                <input name="Pic" type="file" />
        </div>


	    <input type="hidden" name="ID" value="<?php echo $ID; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('productcontroller') ?>" class="btn btn-default">انصراف</a>
	</form>
    </div>