<?php
$active = 'order';
require('views/admin/layoat.php');

$order = $data['order'];

?>
<div class="left">
    <p class="title">
        <a>مدیریت سفارشات </a>
    </p>


    <a class="btn_red_small" onclick="submitForm();">
        حذف
    </a>
    <form method="post" action="adminorder/delete">
        <table class="list" cellspacing="0">
            <tr>
                <td>
                    ردیف
                </td>
                <td>
                    تاریخ
                </td>

                <td>
                    تحویل گیرنده
                </td>

                <td>
                    مبلغ کل
                </td>

                <td>
                    استان
                </td>

                <td>
                    شهر
                </td>

                <td>
                    جزئیات
                </td>


                <td>
                    انتخاب
                </td>

            </tr>

            <?php
            foreach ($order as $row) {
                ?>
                <tr>
                    <td>
                        <?= $row['id'] ?>
                    </td>

                    <td>
                        <?= $row['tarikh'] ?>
                    </td>

                    <td>
                        <?= $row['family'] ?>
                    </td>

                    <td>
                        <?= number_format($row['amount']) ?>
                    </td>

                    <td>
                        <?= $row['ostan'] ?>
                    </td>

                    <td>
                        <?= $row['city'] ?>
                    </td>

                    <td>
                        <a href="adminorder/detail/<?= $row['id']; ?>">
                            <img src="public/images/icon_edit_16.png" class="view">
                        </a>
                    </td>


                    <td>
                        <input type="checkbox" name="id[]" value="<?= $row['id']; ?>">
                    </td>
                </tr>

                <?php
            }
            ?>
        </table>
    </form>
</div>
</div>
