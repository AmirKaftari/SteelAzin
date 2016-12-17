<br>
<div class='main'>
        <h2 style="margin-top:0px">دسته بندی محصولات</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('categorycontroller/create'),'ایجاد', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <form action="<?php echo site_url('categorycontroller/search'); ?>" class="form-inline" method="post">
                    <input name="keyword" class="form-control" value="<?php echo $keyword; ?>" />
                    <?php 
                    if ($keyword <> '')
                    {
                        ?>
                        <a href="<?php echo site_url('categorycontroller'); ?>" class="btn btn-default">انصراف</a>
                        <?php
                    }
                    ?>
                    <input type="submit" value="جستجو" class="btn btn-primary" />
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th style="text-align:center">ردیف</th>
                <th style="text-align:center">عنوان</th>
                <th style="text-align:center">مادر</th>
                <th style="text-align:center">عملیات</th>
            </tr><?php
            foreach ($categorycontroller_data as $categorycontroller)
            {
                ?>
                <tr>
			<td style="text-align:center"><?php echo ++$start ?></td>
			<td style="text-align:center"><?php echo $categorycontroller->Title ?></td>
			<td style="text-align:center">
                <?php
                    if($categorycontroller->parentId == 0)
                        echo '------';
                    else
                    {
                        $parentCategory = instance('categorymodel','get_by_id',$categorycontroller->parentId);
                        echo $parentCategory->Title;
                    }
                ?>
            </td>
			<td style="text-align:center">
				<?php
				echo anchor(site_url('categorycontroller/update/'.$categorycontroller->ID),'ویرایش'); 
				echo ' | '; 
				echo anchor(site_url('categorycontroller/delete/'.$categorycontroller->ID),'حذف','onclick="javasciprt: return confirm(\'آیا مطمئن هستید؟\')"'); 
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