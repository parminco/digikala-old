<style>
    #main {
        width: 1200px;
        margin: 10px auto;
        background: #fff;
        padding: 5px;
        border-radius: 4px;
        overflow: hidden;
        font-family: '2  Homa';
    }

    .order-steps {

        padding-top: 41px;
        padding-right: 271px;
        padding-left: 20px;
        margin-bottom: 100px;
    }

    .order-steps .dashed {
        float: right;
        margin-top: 11px;
        margin-left: 5px;
    }

    .order-steps .dashed span {

        width: 11px;
        height: 3px;
        background: #2badd0;
        display: block;
        float: right;
        margin-left: 3px;
    }

    .order-steps ul {
    }

    .order-steps ul li {
        position: relative;
        width: 180px;
        height: 2px;
        float: right;
    }

    .order-steps ul li .circle {
        width: 19px;
        height: 19px;
        border-radius: 50%;
        display: block;
        border: 3px solid #ccc;
        position: absolute;
    }

    .order-steps ul li.active .circle {
        border: 3px solid #2badd0;
        background: #2badd0 url("public/images/slices.png") -810px -476px;
    }

    .order-steps ul li .line {
        width: 128px;
        height: 2px;
        background: #ccc;
        display: block;
        position: absolute;
        right: 36px;
        top: 12px;

    }

    .order-steps ul li.active .line {

        background: #2badd0;

    }

    .order-steps ul li .title {
        font-size: 13pt;
        color: #7a2e47;
        position: absolute;
        right: -37px;
        top: 27px;
        width: 150px;
    }

    .order-steps ul li.active .title {

        color: #2badd0;

    }

    .btn_final {
        width: 190px;
        height: 38px;
        border-radius: 4px;
        background: #48ddff;
        cursor: pointer;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
        text-align: center;
        font-size: 13pt;
        line-height: 37px;
        color: #642463;
        display: block;

        margin-right: 1012px;
    }

    #ErrorPayment {
        border: 1px solid #f5c6cb;
        padding: .75rem 1.25rem;
        color: #721c24;
        border-radius: .25rem;
        background-color: #f8d7da;
        text-align: center;
    }

    .btn {
        width: 155px;
        height: 38px;
        border-radius: 4px;
        background: rgba(22, 162, 29, 0.88);
        cursor: pointer;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
        text-align: center;
        font-size: 12pt;
        font-family: '2  Homa';
        line-height: 37px;
        color: #f6f9f6;
        display: block;
        float: left;
        margin: 13px;
    }

    .error {
        border: 1px solid #f5c6cb;
        padding: .75rem 1.25rem;
        color: #721c24;
        border-radius: .25rem;
        background-color: #f8d7da;
        text-align: center;
        width: 600px;
        height: 26px;
        margin: 50px auto;
    }

    #product, #addressInfo {
        width: 100%;
    }

    table tr:first-child td {
        background: #b1e09c;
    }

    table td {
        padding: 4px;
        font-size: 11.5pt;
        border-bottom: 1px solid #eee;
        border-left: 1px solid #eee;
    }

    table tr td:first-child {
        border-right: 1px solid #eee;
    }

    table tr:nth-child(even) td {
        background: #f2f4f2;
    }

    .titleHedar {
        font-size: 15pt;
        padding: 10px;
        border-bottom: 1px solid #cccccc;

    }
</style>


    <?php
    $active='order';
    $orderInfo = $data['OrderInfo'];

    $basket = unserialize($orderInfo['basket']);
    $time_sabt = $orderInfo['time_sabt'];
    $gozashte = time() - $time_sabt;
    $mohlat = mohlatPay * 3600;

    require('views/admin/layoat.php');

    ?>
<div class="left">
    <a href="adminorder/showfactor/<?= $orderInfo['id'] ?>" class="btn">مشاهده فاکتور</a>
    <form method="post" action="adminorder/editorder/<?= $orderInfo['id']; ?>">

        <p class="titleHedar">جزئیات سفارش کد:
            <?= $orderInfo['id'] ?>
        </p>

        <?php
        if ($gozashte > $mohlat) {
            ?>
            <p class="error">این سفارش منقضی شده است.حداکثر مهلت پرداخت, برار
                <?= mohlatPay ?>
                ساعت است</p>
            <?php
        }
        ?>
        <table id="product" cellpadding="0">
            <tr>
                <td>
                    نام محصول
                </td>

                <td>
                    رنگ
                </td>

                <td>
                    گارانتی
                </td>

                <td>
                    تعداد
                </td>

                <td>
                    قیمت
                </td>

                <td>
                    تخفیف
                </td>


            </tr>

            <?php

            foreach ($basket as $row) {
                ?>
                <tr>
                    <td>
                        <?= $row['title'] ?>
                    </td>

                    <td>
                        <?= $row['colorTitle'] ?>
                    </td>

                    <td>
                        <?= $row['garanteeTitle'] ?>
                    </td>

                    <td>
                        <?= $row['tedad'] ?>
                    </td>

                    <td>
                        <?= number_format($row['price'] * $row['tedad']); ?>
                    </td>

                    <td>
                        <?= number_format((($row['discount'] * $row['price']) / 100) * $row['tedad']) ?>
                    </td>
                </tr>
                <?php
            }
            ?>

        </table>

        <style>
            .row2 {
                background: #d9f4ec;
                padding: 15px 4pt;
                font-size: 12pt;
                margin-top: 15px;
                margin-bottom: 15px;
                width: 98%;
                padding-left: 12pt !important;
            }

            input {
                border: 1px solid #cccccc;
            }

            select {
                font-family: '2  Homa';
            }
        </style>

        <div class="row2">
            <p>
                وضعیت پرداخت:
                <select name="pay_status">
                    <option value="0" <?php if ($orderInfo['pay'] == 0) {
                        echo 'selected="selected"';
                    } ?>>
                        در انتظار پرداخت
                    </option>
                    <option value="1" <?php if ($orderInfo['pay'] == 1) {
                        echo 'selected="selected"';
                    } ?>>
                        پرداخت شده
                    </option>
                </select>


            </p>


            <p>


                وضعیت سفارش:
                <select name="order_status">
                    <?php
                    $orderStatus = $data['orderStatus'];
                    foreach ($orderStatus as $Status) {
                        ?>
                        <option value="<?= $Status['id'] ?>"
                            <?php if ($Status['id'] == $orderInfo['status']) {
                                echo 'selected="selected"';
                            } ?>>
                            <?= $Status['title'] ?>
                        </option>
                    <?php }
                    ?>
                </select>


            </p>

            <p>
                نوع ارسال:
                <?= $orderInfo['postTypeTitle'] ?>
            </p>

            <p>
                شیوه پرداخت:
                <?= $orderInfo['payTypeTitle'] ?>
                (
                <?php
                $date = $orderInfo['pay_year'] . '/' . $orderInfo['pay_month'] . '/' . $orderInfo['pay_day'];
                $time = $orderInfo['pay_hour'] . ':' . $orderInfo['pay_minute'];
                echo $time . ' - ' . $date;
                ?>
                )
            </p>

            <p>

                <?php
                echo 'شماره کارت: ' . $orderInfo['pay_card'] . ' - نام بانک: ' . $orderInfo['pay_bank_name'];
                ?>

            </p>


            <p>
                شماره خرید:
                <?php
                echo $orderInfo['beforepay']
                ?>
            </p>

            <?php

            if ($orderInfo['pay'] == 0 and $gozashte <= $mohlat) {
                ?>
                <p style="display: inline-block">


                    <a class="btn" href="checkout/payonline/<?= $orderInfo['id'] ?>">
                        پرداخت آنلاین
                    </a>

                    <a class="btn" href="checkout/creditcard/<?= $orderInfo['id'] ?>">
                        پرداخت با کارت
                    </a>


                </p>

                <?php
            }
            ?>
        </div>


        <table id="addressInfo" cellpadding="0">

            <tr>

                <td>
                    گیرنده
                </td>

                <td>
                    آدرس
                </td>

                <td>
                    شهر
                </td>

                <td>
                    کدپستی
                </td>

                <td>
                    موبایل
                </td>

                <td>
                    تلفن ثابت
                </td>

            </tr>
            <tr>

                <td style="width: 70px">
                    <?= $orderInfo['family'] ?>
                </td>

                <td>
                    <input name="address" class="input" type="text" value="<?= $orderInfo['address'] ?>">
                </td>

                <td>
                    <?= $orderInfo['city'] ?>
                </td>

                <td>
                    <input name="code_posti" class="input" type="text" value="<?= $orderInfo['code_posti'] ?>">

                </td>

                <td>
                    <?= $orderInfo['mobile'] ?>
                </td>

                <td>
                    <input name="tel" class="input" type="text" value="<?= $orderInfo['tel'] ?>">

                </td>

            </tr>

        </table>


        <span class="btn" onclick="submitForm();">ذخیره اطلاعات</span>

    </form>
</div>
</div>


<script>
    function submitForm() {
        $('form').submit();
    }
</script>