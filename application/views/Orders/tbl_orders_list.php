</br>
<div class='main'>
        <div class="row" style="margin-bottom: 10px">

            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <form action="<?php if(isset($id_customer)) $id = $id_customer;else $id = null; echo site_url('Orderscontroller/search/'.$id); ?>" class="form-inline parsley-validate" method="post">
                    <span class="input-group-addon">از تاریخ</i></span>
                    <input data-parsley-required-message="درج تاریخ اجباری است!"  data-parsley-required="true"
                           id="betweenDateFrom" name="betweenDateFrom" class="form-control" value="<?php if(isset($dateFrom)) echo $dateFrom; ?>" />
                    
                    <input data-parsley-required-message="درج تاریخ اجباری است!"  data-parsley-required="true"
                           id="betweenDateTo" name="betweenDateTo" class="form-control" value="<?php if(isset($dateTo)) echo $dateTo; ?>" />
                    <span class="input-group-addon">تا تاریخ</i></span>
                    <input type="submit" value="جستجو" class="btn btn-primary" />
                </form>
            </div>

        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr >
                <th style="text-align:center">عنوان کتاب</th>
                <th style="text-align:center">تعداد</th>
                <th style="text-align:center">تاریخ سفارش</th>
                <th style="text-align:center">وضعیت</th>
                <th style="text-align:center">جز‍ییات</th>
            </tr><?php
            foreach ($orderscontroller_data as $orderscontroller)
            {
                ?>
                <tr>
                    <td style="text-align:center">
                        <?php
                            $CI = &get_instance();
                            $CI->load->model('Bookmodel');
                            $info_book = $CI->Bookmodel->get_by_id($orderscontroller->Book_Code);
                            echo $info_book->Tiltle;
                        ?>
                    </td>
                    <td style="text-align:center"><?php echo $orderscontroller->Order_Count ?></td>
                    <td style="text-align:center"><?php echo $orderscontroller->Date_order ?></td>
                    <td style="text-align:center">
                        <?php
                            if($orderscontroller->Status == 0)
                                echo 'در انتظار تایید نهایی شما';
                            elseif($orderscontroller->Status == 1)
                                echo 'در انتظار تایید اپراتور';
                            elseif($orderscontroller->Status == 2)
                                echo 'تایید شد';
                            elseif($orderscontroller->Status == 3)
                                echo 'عدم تایید';
                        ?>
                    </td>
                    <td style="text-align:center">
                        <?php
                            if($orderscontroller->Status == 0)
                            {
                                echo anchor(site_url('orderscontroller/confirm_order_by_customer/'.$orderscontroller->ID.'/'.$id_customer),'تایید نهایی');
                                echo ' | ';
                                echo anchor(site_url('orderscontroller/order_edit/'.$orderscontroller->ID),'ویرایش');
                                echo ' | ';
                                echo anchor(site_url('orderscontroller/delete/'.$orderscontroller->ID.'/'.$id_customer),'حذف','onclick="javasciprt: return confirm(\'آیا مطمئن هستید؟\')"');
                            }
                            else
                            {
                                echo 'تایید شده';
                            }

                        ?>
                    </td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">

        </div>
    </div>