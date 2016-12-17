<br>
<div class='main'>
        <h2 style="margin-top:0px">لیست محصولات</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('productcontroller/create'),'اضافه کردن محصول', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <form action="<?php echo site_url('productcontroller/search'); ?>" class="form-inline" method="post">
                    <input name="keyword" class="form-control" value="<?php echo $keyword; ?>" />
                    <?php 
                    if ($keyword <> '')
                    {
                        ?>
                        <a href="<?php echo site_url('productcontroller'); ?>" class="btn btn-default">انصراف</a>
                        <?php
                    }
                    ?>
                    <input type="submit" value="جستجو" class="btn btn-primary" />
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>ردیف</th>
                <th>کد محصول</th>
                <th>عنوان محصول</th>
                <th>قیمت</th>
                <th>توضیح</th>
                <th>تصویر</th>
                <th>عملیات</th>
            </tr><?php
            foreach ($productcontroller_data as $productcontroller)
            {
                ?>
                <tr>
			<td><?php echo ++$start ?></td>
			<td><?php echo $productcontroller->Code ?></td>
			<td><?php echo $productcontroller->Title ?></td>
			<td><?php echo $productcontroller->Price ?></td>
			<td><?php echo $productcontroller->Discript ?></td>
            <td><?php
                $image_path = base_url('uploads/new_products').'/'.$productcontroller->Photo;
                echo '<img height="60" width="60" src="'.$image_path.'"/>' ?>
            </td>
			<td style="text-align:center">
				<?php
				echo anchor(site_url('productcontroller/update/'.$productcontroller->ID),'ویرایش'); 
				echo ' | ';
				echo anchor(site_url('productcontroller/delete/'.$productcontroller->ID),'حذف','onclick="javasciprt: return confirm(\'آیا مطمئن هستید؟\')"'); 
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