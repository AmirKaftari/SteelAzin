<br>
<div class='main'>
        <h2 style="margin-top:0px">بخش تنطیمات عمومی</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('settingcontroller/create'),'ایجاد', 'class="btn btn-primary"'); ?>
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
				<th style="text-align:center">موتور دستی</th>
				<th style="text-align:center">موتور برقی</th>
				<th style="text-align:center">پایه دیواری</th>
				<th style="text-align:center">پایه سقفی</th>
				<th style="text-align:center">نصب</th>
				<th style="text-align:center">عملیات</th>
            </tr><?php
            foreach ($settingcontroller_data as $settingcontroller)
            {
                ?>
                <tr>
					<td style="text-align:center"><?php echo ++$start ?></td>
					<td style="text-align:center"><?php echo $settingcontroller->motorDasti ?></td>
					<td style="text-align:center"><?php echo $settingcontroller->motorBarghi ?></td>
					<td style="text-align:center"><?php echo $settingcontroller->payehSaghfi ?></td>
					<td style="text-align:center"><?php echo $settingcontroller->payehDivari ?></td>
					<td style="text-align:center"><?php echo $settingcontroller->nasb ?></td>
				
					<td style="text-align:center">
						<?php 
						echo anchor(site_url('settingcontroller/update/'.$settingcontroller->ID),'ویرایش'); 
						echo ' | '; 
						echo anchor(site_url('settingcontroller/delete/'.$settingcontroller->ID),'حذف','onclick="javasciprt: return confirm(\'آیا مطمئن هستید؟\')"'); 
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