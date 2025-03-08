<?php
$active = 'stat';
require('views/admin/layoat.php');

?>
<style>
    table.list {
        width: 95%;
    }

    .titlehed {
        border-bottom: 1px solid #ccc;
        margin-top: 0px;
        background: #d5ffd7;
        padding: 10px;
        box-shadow: 0 -2px 3px #ccc;
    }

    .row {
        width: 100%;
        float: right;
        margin: 20px 50px;
        vertical-align: middle;
    }

    span.title1 {
        font-size: 12pt;
        display: inline-block;
        float: right;
        line-height: 23px;
        margin: 10px;

    }

    .row select {
        float: right;
        margin-right: 3px;
        margin-left: 3px;
        font-family: '2  Homa';
        font-size: 9pt;
        min-width: 80px;
        border: 1px solid #ccc;
    }

    .btn {
        width: 150px;
        height: 38px;
        border-radius: 4px;
        background: green;
        cursor: pointer;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
        text-align: center;
        font-size: 13pt;
        line-height: 37px;
        color: #fff;
        display: inline-block;
        float: left;

    }
</style>
<div class="left">

    <?php
    $stat = $data['stat'];
    $result = $stat['result'];
    ?>
    <p class="titlehed">
        <a>
            آمار سفارشات در بازه

            <?= $stat['startDate']; ?>
            تا
            <?= $stat['endDate']; ?>
        </a>
    </p>


    <div class="row">
        <span class="title1">
            تعداد کل سفارشات:
            <?= sizeof($result); ?>
        </span>

        <span class="title1">
            تعداد سفارشات پرداخت شده:
            <?= $stat['order_paied']; ?>
        </span>

        <span class="title1">
            درصد سفارشات پرداخت شده:
            %
            <?php   if (sizeof($result)>0){echo $stat['order_paied'] / sizeof($result) * 100; } else echo 0;?>

        </span>

        <span class="title1">
            مبلغ کل فروش:

            <?= number_format($stat['amount']) ?>
            تومان
        </span>
    </div>

    <div class="row">
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
                    جزییات
                </td>


            </tr>

            <?php
            foreach ($result as $row) {
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
                </tr>

                <?php
            }
            ?>
        </table>
    </div>
</div>

<script>
    function submitForm() {
        $('form').submit();
    }
</script>



