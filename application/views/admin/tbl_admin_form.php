<div class='main'>
        <h2 style="margin-top:0px">Tbl_admin <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
                <label for="varchar">userName <?php echo form_error('userName') ?></label>
                <input type="text" class="form-control" name="userName" id="userName" placeholder="userName" value="<?php echo $userName; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">Password <?php echo form_error('Password') ?></label>
                <input type="text" class="form-control" name="Password" id="Password" placeholder="Password" value="<?php echo $Password; ?>" />
            </div>
	    <input type="hidden" name="ID" value="<?php echo $ID; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('admincontroller') ?>" class="btn btn-default">انصراف</a>
	</form>
    </div>