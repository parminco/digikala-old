<style>


    .order-steps {

        padding-top: 53px;
        padding-right: 126px;
        padding-left: 20px;

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
        top: 15px;

    }

    .order-steps ul li.active .line {

        background: #2badd0;

    }

    .order-steps ul li .title {
        font-size: 13pt;
        color: #7a2e47;
        position: absolute;
        right: -24px;
        top: 27px;
        width: 100px;
    }

    .order-steps ul li.active .title {

        color: #2badd0;

    }

    a.pardakht:hover {
        color: #2622db !important;
    }


</style>
<section class="myorders">

    <table cellspacing="0">
        <tr>
            <td>ردیف</td>
            <td>کد</td>
            <td>تاریخ</td>
            <td>مبلغ</td>
            <td>وضعیت</td>
            <td>عملیات پرداخت</td>
            <td>نوع</td>
            <td>جزییات</td>
        </tr>
        <?php
        $Order = $data['Order'];
        $i = 1;
        foreach ($Order as $row) {
            $status = $row['status'];
            ?>

            <tr>
                <td><?= $i ?></td>
                <td><?= $row['id'] ?></td>
                <td><?= $row['date'] ?></td>
                <td><?= number_format($row['amount']) ?></td>
                <td><?= $row['title'] ?></td>
                <td>
                    <a class="pardakht" style="color: black" href="checkout/index/<?= $row['id'] ?>">پرداخت</a>
                </td>
                <td style="font-family:Tahoma ">-</td>
                <td>

                    <img onclick="showDetailsTr(this)" style="margin-top: 6px;cursor: pointer"
                         src="public/images/orderdetailsopen.png">

                </td>
            </tr>


            <tr class="details">

                <td colspan="8">

                    <div class="subtable">

                        <table cellspacing="0">

                            <tr>

                                <td>کالا</td>
                                <td>تعداد</td>
                                <td>قیمت واحد</td>
                                <td>قیمت کل</td>
                                <td>تخفیف کل</td>
                                <td>مبلغ کل</td>

                            </tr>

                            <?php
                            $basket = unserialize($row['basket']);
                            foreach ($basket as $row2) {
                                $price = $row2['price'];
                                $tedad = $row2['tedad'];
                                $price_all = $price * $tedad;
                                $discount = $row2['discount'];
                                $discount_amount = ($discount * $price_all) / 100;
                                $price_total = $price_all - $discount_amount;
                                ?>
                                <tr>

                                    <td><?= $row2['title'] ?></td>
                                    <td><?= $row2['tedad'] ?></td>
                                    <td><?= number_format($row2['price']) ?></td>
                                    <td><?= number_format($price_all) ?></td>
                                    <td><?= number_format($discount_amount) ?></td>
                                    <td><?= $price_total ?></td>

                                </tr>
                                <?php
                            }
                            ?>
                        </table>

                        <h4 class="title">رهگیری سفارش</h4>

                        <div class="order-steps">
                            <div class="dashed">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>

                            </div>
                            <ul>


                                <li class="<?php if ($status >= 2) {
                                    echo 'active';
                                } ?>">
                                    <span class="circle"></span>
                                    <span class="line"></span>
                                    <span class="title">تایید سفارش</span>
                                </li>


                                <li class="<?php if ($status >= 4) {
                                    echo 'active';
                                } ?>">
                                    <span class="circle"></span>
                                    <span class="line"></span>
                                    <span class="title">پـــرداخـــت</span></li>


                                <li class="<?php if ($status >= 5) {
                                    echo 'active';
                                } ?>">
                                    <span class="circle">
                                    </span><span class="line"></span>
                                    <span class="title">پردازش انبار</span>
                                </li>


                                <li class="<?php if ($status >= 6) {
                                    echo 'active';
                                } ?>">
                                    <span class="circle"></span>
                                    <span class="line"></span>
                                    <span class="title">اماده ارسال</span>
                                </li>

                                <li class="<?php if ($status >= 7) {
                                    echo 'active';
                                } ?> " style="width: 40px">
                                    <span class="circle"></span>
                                    <span class="title">تحویل شده</span>
                                </li>

                            </ul>

                            <div class="dashed">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>

                            </div>


                            <div class="more">
                                <table>


                                    <tr>

                                        <td>
                                            روش ارسال:
                                            <?php
                                            if ($row['post_type'] == 1) {
                                                echo 'پیشتاز';
                                            }
                                            elseif ($row['post_type'] == 2) {
                                                echo 'سفارشی';
                                            }
                                            ?>
                                        </td>
                                        <td> زمان ارسال:...</td>
                                        <td>کد مرسوله:
                                        <?= $row['barcode']?>
                                        </td>

                                    </tr>


                                    <tr>
                                        <td>
                                        <?=$row['address']?>
                                        </td>
                                        <td>
                                            تحیول گیرنده:
                                        <?=$row['family']?>
                                        </td>
                                        <td>
                                            شماره تماس :
                                            <?=$row['tel']?>
                                            -
                                            <?=$row['mobile']?>
                                        </td>

                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </td>
            </tr>

            <?php

            $i++;
        }
        ?>
    </table>

</section>
