<?php
$active = 'comment';

require('views/admin/layoat.php');

$comment = $data['comment'];

?>
<style>
    .row {
        width: 230px;
        float: left;
    }

    .selectTag {
        width: 120px;
        height: 33px;
        border: 1px solid #ccc;
        padding: 5px;

    }
    .input{
        width: 130px;
        border: 1px solid #ccc;
    }

</style>
<div class="left">
    <p class="title">
        <a>مدیریت نظرها </a>
    </p>
    <div class="row">
        <select name="action" class="selectTag">
            <option value="1">تایید</option>
            <option value="2">عدم تایید</option>
            <option value="3">حذف</option>
        </select>
        <a class="btn_red_small" onclick="submitFormMulti();">
            اجرای عملیات
        </a>
    </div>

    <script>
        function submitFormMulti() {
            var actionSelect = $('.selectTag option:selected').val();
            var action = '';
            if (actionSelect == 1) {
                action = 'admincomment/confirm';
            }
            if (actionSelect == 2) {
                action = 'admincomment/unconfirm';
            }
            if (actionSelect == 3) {
                action = 'admincomment/delete';
            }
            var form = $('form');

            form.attr('action', action);
            form.submit();

        }

    </script>

    <form method="post" action="">
        <table class="list" cellspacing="0" width="100%">
            <tr>
                <td>
                    ردیف
                </td>
                <td>
                    تاریخ
                </td>

                <td>
                    عنوان
                </td>

                <td>
                    نقاط قوت
                </td>

                <td>
                    نقاط ضعف
                </td>

                <td>
                    متن نظر
                </td>

                <td>وضعیت</td>


                <td>
                    انتخاب
                </td>

            </tr>

            <?php
            $i = 1;
            foreach ($comment as $row) {
                ?>
                <tr>
                    <td>
                        <?= $i; ?>
                    </td>

                    <td>
                        <?= $row['tarikh'] ?>
                    </td>

                    <td>
                        <input class="input" type="text" name="title<?= $row['id'] ?>" value="<?= $row['title'] ?>">
                    </td>

                    <td>
                        <input class="input" type="text" name="posotive<?= $row['id'] ?>" value="<?= $row['posotive'] ?>">
                    </td>

                    <td>
                        <input class="input" type="text" name="negative<?= $row['id'] ?>" value="<?= $row['negative'] ?>">
                    </td>

                    <td>
                        <textarea class="input" name="matn<?= $row['id'] ?>"><?= $row['matn'] ?></textarea>
                    </td>
                    <td>
                        <?php if($row['confirm']==0){echo 'در انتظار تایید';} elseif($row['confirm']==1){echo 'تایید شده';}?>
                    </td>


                    <td>
                        <input type="checkbox" name="id[]" value="<?= $row['id']; ?>">
                    </td>
                </tr>

                <?php
                $i++;
            }

            ?>
        </table>
    </form>
</div>
</div>

