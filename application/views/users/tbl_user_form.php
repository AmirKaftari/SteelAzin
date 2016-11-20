<div class='main'>
        <h2 style="margin-top:0px">Tbl_user <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
                <label for="int">Fullname <?php echo form_error('Fullname') ?></label>
                <input type="text" class="form-control" name="Fullname" id="Fullname" placeholder="Fullname" value="<?php echo $Fullname; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">Name <?php echo form_error('Name') ?></label>
                <input type="text" class="form-control" name="Name" id="Name" placeholder="Name" value="<?php echo $Name; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">Lastname <?php echo form_error('Lastname') ?></label>
                <input type="text" class="form-control" name="Lastname" id="Lastname" placeholder="Lastname" value="<?php echo $Lastname; ?>" />
            </div>
	    <div class="form-group">
                <label for="date">Birthday <?php echo form_error('Birthday') ?></label>
                <input type="text" class="form-control" name="Birthday" id="Birthday" placeholder="Birthday" value="<?php echo $Birthday; ?>" />
            </div>
	    <div class="form-group">
                <label for="int">Gender <?php echo form_error('Gender') ?></label>
                <input type="text" class="form-control" name="Gender" id="Gender" placeholder="Gender" value="<?php echo $Gender; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">Nationalcode <?php echo form_error('Nationalcode') ?></label>
                <input type="text" class="form-control" name="Nationalcode" id="Nationalcode" placeholder="Nationalcode" value="<?php echo $Nationalcode; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">IdentityNumber <?php echo form_error('IdentityNumber') ?></label>
                <input type="text" class="form-control" name="IdentityNumber" id="IdentityNumber" placeholder="IdentityNumber" value="<?php echo $IdentityNumber; ?>" />
            </div>
	    <div class="form-group">
                <label for="int">State <?php echo form_error('State') ?></label>
                <input type="text" class="form-control" name="State" id="State" placeholder="State" value="<?php echo $State; ?>" />
            </div>
	    <div class="form-group">
                <label for="int">City <?php echo form_error('City') ?></label>
                <input type="text" class="form-control" name="City" id="City" placeholder="City" value="<?php echo $City; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">District <?php echo form_error('District') ?></label>
                <input type="text" class="form-control" name="District" id="District" placeholder="District" value="<?php echo $District; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">Phone <?php echo form_error('Phone') ?></label>
                <input type="text" class="form-control" name="Phone" id="Phone" placeholder="Phone" value="<?php echo $Phone; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">CellPhone <?php echo form_error('CellPhone') ?></label>
                <input type="text" class="form-control" name="CellPhone" id="CellPhone" placeholder="CellPhone" value="<?php echo $CellPhone; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">CodePost <?php echo form_error('CodePost') ?></label>
                <input type="text" class="form-control" name="CodePost" id="CodePost" placeholder="CodePost" value="<?php echo $CodePost; ?>" />
            </div>
	    <div class="form-group">
                <label for="Address">Address <?php echo form_error('Address') ?></label>
                <textarea class="form-control" rows="3" name="Address" id="Address" placeholder="Address"><?php echo $Address; ?></textarea>
            </div>
	    <div class="form-group">
                <label for="varchar">Username <?php echo form_error('Username') ?></label>
                <input type="text" class="form-control" name="Username" id="Username" placeholder="Username" value="<?php echo $Username; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">Password <?php echo form_error('Password') ?></label>
                <input type="text" class="form-control" name="Password" id="Password" placeholder="Password" value="<?php echo $Password; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">Email <?php echo form_error('Email') ?></label>
                <input type="text" class="form-control" name="Email" id="Email" placeholder="Email" value="<?php echo $Email; ?>" />
            </div>
	    <input type="hidden" name="ID" value="<?php echo $ID; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('usercontroller') ?>" class="btn btn-default">انصراف</a>
	</form>
    </div>