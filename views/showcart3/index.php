<div id="main"
     style="font-family: '2  Homa';width: 1200px;margin:10px auto;background: #fff;padding: 5px;border-radius: 4px;overflow: hidden">


    <style>
        .head .btn {
            width: 155px;
            height: 38px;
            border-radius: 4px;
            background: rgba(22, 162, 29, 0.88);
            cursor: pointer;
            box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
            text-align: center;
            font-size: 12pt;
            font-family: '2  Homa'
            line-height: 37px;
            color: #f6f9f6;
            position: relative;
            top: -60px;
            left: -39px;
        }

        .head {
            float: right;
            width: 100%;
        }

        .head h4 {
            padding: 0;
            padding-right: 18px;
            font-size: 13pt;
            font-weight: normal;
            font-family: '2  Homa'

        }

        .content {
            float: right;
            width: 100%;
        }

        .content table {

            width: 100%;
            font-family: '2  Homa'
            float: right;
            font-size: 12pt;

        }

        .content table td {

            border-left: 1px solid #ccc;
            margin-left: 2px;
            padding-right: 15px;
            border-bottom: 1px solid #ccc;

        }

        .content table tr:first-child {
            height: 60px;
            text-align: center;

        }

        .content table tr:first-child {

            background: #eaeced;
            font-size: 14pt;

        }

        .content table td .right {

            float: right;

        }

        .content table td .left {

            float: right;
            margin-right: 25px;

        }

        .content table td .left p {
            margin: 5px 0;

        }

    </style>


    <style>

        .order-steps {

            padding-top: 41px;
            padding-right: 271px;
            padding-left: 20px;
            font-family: '2  Homa'
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
            top: 11px;

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

        .selectList {
            width: 78px;
            height: 37px;
            border: 1px solid #ccc;
            background: #eee;
            position: relative;
            text-align: center;
            cursor: pointer;
            position: relative;
            top: -16px;
            left: -42px;

        }

        .selectList::after {
            content: " ";
            width: 23px;
            height: 17px;
            display: block;
            position: absolute;
            background: url("public/images/slices.png") no-repeat -31px -461px;
            top: 12px;
            left: 9px;
        }

        .selectList span {
            font-size: 12pt;
            line-height: 37px;
        }

        .selectList ul {
            padding: 0;
            box-shadow: 0 2px 2px #cacaca;
            display: none;
            background: #edf4f4;
            border: 1px solid #ccc;

        }

        .selectList ul li {
            text-align: center;
            font-family: '2  Homa'
            font-size: 11pt;
            padding-bottom: 6px;
            cursor: pointer;
        }

        .selectList ul li:hover {
            background: #cdeeff
        }

        .content table .price {
            font-size: 15pt;
            color: #52a310;
            text-align: center;

        }

        .content table .tuman {
            font-size: 13pt;
            color: #a32a53;
            text-align: center;

        }

        .content table .edit_td {
            background: #61fffa;
            text-align: center;
        }

        .content table .edit_icon {
            width: 19px;
            height: 23px;
            display: block;
            background: url("public/images/slices.png") no-repeat -810px -410px;
            cursor: pointer;
            margin-left: -10px;
        }


    </style>
    <div class="order-steps">
        <div class="dashed">
            <span></span>
            <span></span>
            <span></span>
            <span></span>

        </div>
        <ul>

            <li class="active"><span class="circle"></span><span class="line"></span><span
                        class="title"/>ورود به دیجی امیر</span>
            </li>


            <li class="active"><span class="circle"></span><span class="line"></span><span
                        class="title">اطلاعات ارسال سفارش</span></li>


            <li class=" "><span class="circle"></span><span class="line"></span><span
                        class="title">بازبینی سفارش</span>
            </li>

            <li class=""><span class="circle"></span><span class="title">اطلاعات پرداخت</span>
            </li>


        </ul>

        <div class="dashed" style="position: relative;left: 142px;">
            <span></span>
            <span></span>
            <span></span>
            <span></span>

        </div>
    </div>


    <div class="head">

        <h4>سبد خرید شما در دیحی کالا </h4>
        <a href="showcart4" class="btn">ادامه خرید</a>
    </div>

    <div class="content">
        <table cellspacing="0">

            <tr>
                <td>شرح محصول</td>
                <td>تعداد</td>
                <td>قیمت واحد</td>
                <td style="border: 0!important;">قیمت کل</td>
                <td></td>
            </tr>
            <?php
            $basketInfo = $data['basketInfo'];
            $basket = $basketInfo[0];
            $postPrice=3000;

            foreach ($basket as $row) {
                ?>
                <tr>


                    <td>

                        <div class="right">
                            <img src="public/images/products/<?= $row['id'] ?>/product_220.jpg" style="width: 150px">
                        </div>

                        <div class="left">
                            <p>
                                <?= $row['title']; ?>
                            </p>

                            <p>
                                <?= $row['colorTitle']; ?>
                            </p>

                            <p>
                                <?= $row['garanteeTitle']; ?>
                            </p>
                        </div>


                    </td>


                    <td style="text-align: center">
                        <span class=""><?= $row['tedad'] ?></span>
                    </td>
                    <td style="text-align: center">
                        <span class="price"><?= number_format($row['price']) ?></span>
                        <span class="tuman">تومان</span>


                    </td>

                    <td style="text-align: center">

                        <span class="price">
                            <?= number_format($row['price'] * $row['tedad']) ?>
                        </span>
                        <span class="tuman">تومان</span>

                        <br>

                        <span class="tuman" style="color: black">تخفیف:</span>
                        <span class="price" style="color: red">
                            <?= number_format($row['discountTotal']) ?>
                        </span>
                        <span class="tuman" style="color: black">تومان</span>

                    </td>

                    <td class="edit_td">
                        <a href="showcart" title="برگشت به سبد خرید">
                            <i class="edit_icon"></i>
                        </a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>

    </div>

    <style>
        #final_price {

            width: 600px;
            float: left;
            font-family: '2  Homa';
            margin-top: 100px;
            border: 1px solid #5faba3;
            padding: 10px;
        }

        #total_price, #send_price, #discount_price {

            border-bottom: 1px solid #5faba3;
            float: right;
            width: 100%;
        }

        .total_price1 {
            float: right;
            color: #524e54;
            font-size: 13pt;
            margin-right: 10px;
        }

        .total_price2 {
            float: right;
            color: #5dab41;
            font-size: 16pt;
            margin-right: 330px;
        }

        .total_price3 {
            float: right;
            color: #524e54;
            font-size: 13pt;
            margin-right: 10px;
        }

        #pardakht_price {

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
            font-family: '2  Homa'
            line-height: 37px;
            color: #642463;
            display: block;

            margin-right: 1012px;
        }
    </style>

    <div id="final_price" style="text-align: center">
        <div id="total_price">

            <span class="total_price1">جمع کل خرید شما:</span>
            <!-- number_format=1,534,664,778   joda konande adad -->
            <span class="total_price2"><?php echo number_format($basketInfo[1]); ?></span>

            <span class="total_price3">تومان</span>

        </div>


        <div id="send_price">

            <span class="total_price1">هزینه ارسال,بیمه:</span>

            <span class="total_price2">3,000</span>

            <span class="total_price3">تومان</span>

        </div>


        <div id="discount_price">

            <span class="total_price1">جمع کل مبلغ تخفیف:</span>

            <span class="total_price2" style="margin-right: 318px"><?= number_format($basketInfo[2]) ?></span>

            <span class="total_price3">تومان</span>

        </div>


        <div id="pardakht_price">

            <span class="total_price1">مبلغ قابل پرداخت:</span>

            <span class="total_price2">
                <?= $pricTotal = number_format($basketInfo[1] + $postPrice - $basketInfo[2]); ?>
            </span>

            <span class="total_price3">تومان</span>
        </div>

    </div>


    <div class="head">
        <h4>اطلاعات ارسال سفارش</h4>
    </div>


    <style>
        .reviwe_send_info {
            width: 100%;
            margin-top: 30px;
            float: right;
            font-family: '2  Homa'
            font-size: 11pt;
            border-radius: 4px;
            overflow: hidden;
        }

        .reviwe_send_info tr {
            background: #d9f8ff;
        }

        .reviwe_send_info td {
            border-right: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
            padding: 10px;
            border-radius: 4px;
            overflow: hidden;
        }

        .reviwe_send_info tr:first-child td {
            border-top: 1px solid #ccc;

        }

        .reviwe_send_info tr td:last-child {
            border-left: 1px solid #ccc;

        }

        .reviwe_send_info i {
            display: block;
            width: 38px;
            height: 29px;
            background: url("public/images/slices.png") no-repeat;
        }

    </style>
    <table cellspacing="0" class="reviwe_send_info">

        <?php
        $addressInfo = $data['addressInfo'];
        ?>
        <tr>

            <td style="width: 45px">

                <i style="background-position: -800px -202px"></i>

            </td>

            <td>
                 این سفارش توسط کاربر:
                <span style="color: red"><?= $addressInfo['family'] ?></span>
                ثبت گردیده است
                و به ادرس
                (<span style="color: red"><?= $addressInfo['address'] ?></span>)
                با شماره تماس
                <span style="color: red"><?= $addressInfo['mobile'] ?></span>
                تحویل می گردد
            </td>
        </tr>


        <tr>

            <td style="width: 45px">

                <i style="background-position:-801px -244px"></i>
            </td>

            <td>پست پیشتاز (بین ۱ تا ۴ روز کاری)تاخیر در ارسال: آماده ارسال هزینه ارسال: 3000</td>
        </tr>

    </table>

    <div style="margin-top: 15px;float: right;width: 100%;">
        <a class="btn_final" href="showcart2" style="background: #cccccc">
            ویرایش
        </a>
    </div>

    <div  style="margin-top: 15px;float: right;width: 100%">
        <a  href="showcart4" class="btn_final">ادامه خرید</a>
    </div>


</div>




<style>


    .btn_btn {
        width: 110px;
        height: 37px;
        border-radius: 4px;
        background: rgba(0, 0, 255, .5);
        display: block;
        float: left;
        margin-left: 67px;
        cursor: pointer;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
        text-align: center;
        font-size: 12pt;
        font-family: '2  Homa'
        line-height: 33px;
        color: #fff;

    }

    .head .btn {
        width: 155px;
        height: 38px;
        border-radius: 4px;
        background: rgba(22, 162, 29, 0.88);
        cursor: pointer;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
        text-align: center;
        font-size: 12pt;
        font-family: '2  Homa'
        line-height: 37px;
        color: #f6f9f6;
        position: relative;
        top: -60px;
        left: -39px;
        display: block;
        float: left;
        margin-left: 67px;
    }
</style>

