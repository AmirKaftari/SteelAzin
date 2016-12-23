<br>
<div class='main'>
        <h2 style="margin-top:0px">تنظیمات ارسال</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('sendsetting/create'),'ایجاد', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th style="text-align:center">ردیف</th>
				<th style="text-align:center">نوع ارسال</th>
				<th style="text-align:center">استان</th>
				<th style="text-align:center">شهرستان</th>
				<th style="text-align:center">عملیات</th>
            </tr><?php
            foreach ($sendsetting_data as $sendsetting)
            {
                ?>
                <tr>
					<td style="text-align:center"><?php echo ++$start ?></td>
					<td style="text-align:center">
                        <?php
                            echo $sendsetting->Type;
                        ?>
                    </td>
					<td style="text-align:center">
                        <?php
                            $state_info = instance('Provincemodel','get_by_id',$sendsetting->State);
                            echo $state_info->name;
                        ?>
                    </td>
					<td style="text-align:center">
                        <?php
                            $city_info = instance('Citymodel','get_by_id',$sendsetting->City);
                            echo $city_info->name;
                        ?>
                    </td>
					<td style="text-align:center">
						<?php 
						echo anchor(site_url('sendsetting/update/'.$sendsetting->ID),'ویرایش'); 
						echo ' | '; 
						echo anchor(site_url('sendsetting/delete/'.$sendsetting->ID),'حذف','onclick="javasciprt: return confirm(\'آیا مطمئن هستید؟\')"'); 
						?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">تعداد رکوردها : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </div>