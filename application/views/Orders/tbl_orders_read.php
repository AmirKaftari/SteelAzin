<div class='main'>
        <h2 style="margin-top:0px">Tbl_orders اطلاعات</h2>
        <table class="table">
	    <tr><td>Book_Code</td><td><?php echo $Book_Code; ?></td></tr>
	    <tr><td>Customer_Code</td><td><?php echo $Customer_Code; ?></td></tr>
	    <tr><td>Order_Count</td><td><?php echo $Order_Count; ?></td></tr>
	    <tr><td>Date_order</td><td><?php echo $Date_order; ?></td></tr>
	    <tr><td>Status</td><td><?php echo $Status; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('orderscontroller') ?>" class="btn btn-default">بازگشت</button></td></tr>
	</table>
    </div>