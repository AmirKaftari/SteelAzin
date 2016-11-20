<div class='main'>
        <h2 style="margin-top:0px">Tbl_orders <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
                <label for="int">Book_Code <?php echo form_error('Book_Code') ?></label>
                <input type="text" class="form-control" name="Book_Code" id="Book_Code" placeholder="Book_Code" value="<?php echo $Book_Code; ?>" />
            </div>
	    <div class="form-group">
                <label for="int">Customer_Code <?php echo form_error('Customer_Code') ?></label>
                <input type="text" class="form-control" name="Customer_Code" id="Customer_Code" placeholder="Customer_Code" value="<?php echo $Customer_Code; ?>" />
            </div>
	    <div class="form-group">
                <label for="int">Order_Count <?php echo form_error('Order_Count') ?></label>
                <input type="text" class="form-control" name="Order_Count" id="Order_Count" placeholder="Order_Count" value="<?php echo $Order_Count; ?>" />
            </div>
	    <div class="form-group">
                <label for="date">Date_order <?php echo form_error('Date_order') ?></label>
                <input type="text" class="form-control" name="Date_order" id="Date_order" placeholder="Date_order" value="<?php echo $Date_order; ?>" />
            </div>
	    <div class="form-group">
                <label for="int">Status <?php echo form_error('Status') ?></label>
                <input type="text" class="form-control" name="Status" id="Status" placeholder="Status" value="<?php echo $Status; ?>" />
            </div>
	    <input type="hidden" name="ID" value="<?php echo $ID; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('orderscontroller') ?>" class="btn btn-default">انصراف</a>
	</form>
    </div>