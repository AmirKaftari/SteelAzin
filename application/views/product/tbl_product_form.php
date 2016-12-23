<br>
<div class='main'>
        <h2 style="margin-top:0px"></h2>
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" class="parsley-validate">
	    <div class="form-group">
                <label for="int">کد محصول <?php echo form_error('Code') ?></label>
                <input type="text" class="form-control" name="Code" id="Code"  value="<?php echo $Code; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">عنوان محصول <?php echo form_error('Title') ?></label>
                <input type="text" class="form-control" name="Title" id="Title" value="<?php echo $Title; ?>" />
        </div>

        <div class="form-group">
            <label class="control-label" for="country">دسته بندی</label>
            <div class="controls">
                <select data-parsley-required-message="درج این فیلد اجباری است!"  data-parsley-required="true" name="Category"
                        id="Category" class="form-control" onchange="selectSubCategory(this.options[this.selectedIndex].value)">
                    <option value="<?php if(isset($CategoryId) && $CategoryId != 0) echo $CategoryId; else echo -1 ;?>">
                    <?php if(isset($CategoryTitle) && $CategoryId != 0) echo $CategoryTitle; else echo 'انتخاب کنید' ?>
                    </option>
                    <?php
                    foreach ($categoryList as $category)
                    {
                    ?>
                    <option value="<?php echo $category->ID ?>"><?php echo $category->Title ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="form-group">
                <label class="control-label" for="country">زیرمجموعه دسته بندی</label>
                <div class="controls">
                    <select data-parsley-required-message="درج این فیلد اجباری است!"  data-parsley-required="true" name="subCategory" class="form-control" id="subCategory">
                        <?php
                        if(count($subCategory > 0) && isset($subCategory))
                        { ?>
                            <option value="<?php echo $subCategory->ID ?>"><?php echo $subCategory->Title ?></option>
                        <?php
                        }
                        else
                        {
                        ?>
                        <option value=""></option>
                        <?php } ?>
                    </select>
                </div>
        </div>

	    <div class="form-group">
                <label for="int">قیمت <?php echo form_error('Price') ?></label>
                <input type="text" class="form-control" name="Price" id="Price"value="<?php echo $Price; ?>" />
        </div>

        <div class="form-group">
                <label for="int"> تخفیف <?php echo form_error('Discount') ?></label>
                <input type="text" class="form-control" name="Discount" id="Discount"value="<?php echo $Discount; ?>" />
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
                <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?php echo base_url('uploads/new_products/'.$Photo); ?>" alt="" /></div>
                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                    <div>
                        <span class="btn btn-file btn-primary"><span class="fileupload-new">انتخاب عکس</span><span class="fileupload-exists">تغییر</span><input name="Pic" type="file" /></span>
                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">حذف</a>
                    </div>
                </div>
        </div>

        <div class="form-group">
              <label >تصاویر مرتبط</label>
              <input name="relatedPics[]" multiple type="file" />
        </div>


	    <input type="hidden" name="ID" value="<?php echo $ID; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('productcontroller') ?>" class="btn btn-default">انصراف</a>
	</form>
    </div>