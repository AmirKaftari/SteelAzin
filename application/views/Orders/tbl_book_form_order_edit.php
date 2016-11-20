<br>
<div class='main'>
        <form action="<?php echo $action; ?>" method="post" class="parsley-validate">

        <div class="form-group">
                <label for="int">تعداد</label>
                <input data-parsley-required-message="درج این فیلد اجباری است!"  data-parsley-required="true" type="text"
                       class="form-control" name="Order_Count" id="Order_Count"  value="<?php echo $Order_Count ?>" />
        </div>
	    <input type="hidden" name="ID" value="<?php echo $ID; ?>" />
	    <input type="hidden" name="CustomerId" value="<?php echo $CustomerId; ?>" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	    <a href="<?php echo site_url('orderscontroller/list_order_of_custromer/'.$CustomerId) ?>" class="btn btn-default">انصراف</a>
	</form>
    </div>