<link rel="stylesheet" href="assets\css\fontiran.css">
<link rel="stylesheet" href="assets\vendors\css\base\bootstrap.min.css">
<link rel="stylesheet" href="assets\vendors\css\base\seenboard-1.0.css">
<style>
    .head .btn {
        width: 190px;
        height: 38px;
        border-radius: 4px;
        background: #48ddff;
        cursor: pointer;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
        text-align: center;
        font-size: 13pt;
        font-family: "2  Homa";
        line-height: 37px;
        color: #000;
        display: block;
        margin-top: -55px;
        margin-right: 1006px;
        margin-bottom: 20px;
    }

    .head {

    }

    .head h4 {
        padding: 0;
        padding-right: 18px;
        font-size: 14pt;
        font-weight: normal;
        font-family: "2  Homa";

    }

    .content {
        float: right;
        width: 100%;
    }

    .content table {

        width: 100%;
        font-family: "2  Homa";
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
        margin-top: 20px;

    }

    .content table td .left p {
        margin: 5px 0;

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
        position: relative;
        z-index: 10;

    }

    .selectList ul li {
        text-align: center;
        font-family: "2  Homa";
        font-size: 11pt;
        padding-bottom: 6px;
        cursor: pointer;
    }

    .selectList ul li:hover {
        background: #cdeeff
    }

    .content table .price {
        font-size: 16pt;
        color: #52a310;
        text-align: center;

    }

    .content table .tuman {
        font-size: 12pt;
        color: #a32a53;
        text-align: center;

    }

    .content table .remove_td {
        background: #ff92ac;
        text-align: center;
    }

    .content table .remove_icon {
        width: 15px;
        height: 15px;
        display: block;
        background: url("public/images/slices.png") no-repeat -812px -507px;
        cursor: pointer;
        margin-left: -9px;

    }

    #final_price {

        width: 600px;
        float: left;
        font-family: "2  Homa";
        margin-top: 100px;
        border: 1px solid #5faba3;
        padding: 10px;
    }

    #total_price {

        border-bottom: 1px solid #5faba3;
        float: right;
        width: 100%;
    }

    .total_price1 {
        float: right;
        color: #524e54;
        font-size: 13pt;
        line-height: 38px;
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
        font-size: 12pt;
        margin-right: 10px;
        line-height: 39px
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
        font-size: 12pt;
        font-family: "2  Homa";
        line-height: 37px;
        color: #000;
        display: block;
        margin-right: 1006px;

    }
</style>


<div id="main" style="width: 1200px;margin:10px auto;background: #fff;padding: 5px;border-radius: 4px;overflow: hidden">
    <?php

    $basket = $data['basket'];
    if (sizeof($basket) > 0) {

        ?>
        <div class="head">

            <h4>سبد خرید شما در دیجی امیر </h4>
            <a href="showcart1" class="btn">خرید خود را نهایی کنید</a>
        </div>

        <div class="content">
            <table cellspacing="0">
                <thead>
                <tr>
                    <td>شرح محصول</td>
                    <td>تعداد</td>
                    <td>قیمت واحد</td>
                    <td style="border: 0!important;">قیمت کل</td>
                    <td></td>
                </tr>
                </thead>

                <tbody>
                <?php
                foreach ($basket as $row) {
                    ?>

                    <div id="modal-centere<?= $row['BasketRow']?>" class="modal fade show" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 style="margin: 0;" class="modal-title">هشدار</h4>
                                    <button type="button" class="close" data-dismiss="modal">
                                        <span aria-hidden="true">×</span>
                                        <span class="sr-only">بستن</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        آیا مایل به حذف این کالا هستید؟
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-shadow" data-dismiss="modal">بستن</button>
                                    <button type="button" class="btn btn-danger" onclick="removBasket(<?= $row['BasketRow']?>)">حذف</button>
                                </div>
                            </div>
                        </div>
                        <div></div></div>

                    <tr>
                        <td>

                            <div class="right">
                                <img src="public/images/products/<?= $row['id'] ?>/product_220.jpg"
                                     style="width: 150px">
                            </div>

                            <div class="left">
                                <p><?= $row['title'] ?></p>
                                <p><?= $row['colorTitle'] ?></p>
                                <p><?= $row['garanteeTitle'] ?></p>
                            </div>

                        </td>

                        <td>
                            <div class="selectList">
                                <span class="yekan zmanattitle"><?= $row['tedad'] ?></span>
                                <ul style="z-index: <?= $row['idproduct'] ?>!important;">
                                    <?php
                                    for ($i = 1; $i < 10; $i++) {
                                        ?>
                                        <li onclick="updateBasket(<?=$i?>,<?= $row['BasketRow'] ?>);"> <?= $i ?></li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </td>

                        <td>
                            <div class="price"><?= number_format($row['price']) ?></div>
                            <div class="tuman">تومان</div>
                        </td>

                        <td>
                            <div class="price"><?= number_format($row['price'] * $row['tedad']) ?></div>
                            <div class="tuman">تومان</div>
                        </td>

                        <td class="remove_td">
                            <i class="remove_icon" data-toggle="modal" data-target="#modal-centere<?= $row['BasketRow']?>"></i>
                        </td>
                    </tr>


                    <?php
                }
                ?>
                </tbody>

            </table>

        </div>


        <div id="final_price">
            <div id="total_price">

                <span class="total_price1">جمع کل خرید شما:</span>

                <span class="total_price2">
                 <?= number_format(@$data['priceTotal']) ?>
            </span>

                <span class="total_price3">تومان</span>

            </div>

            <div id="pardakht_price">

                <span class="total_price1">مبلغ قابل پرداخت:</span>

                <span class="total_price2"><?= number_format(@$data['priceTotal']) ?></span>

                <span class="total_price3">تومان</span>
            </div>

        </div>

        <div style="float: right;margin-top: 20px">
            <a href="showcart1" class="btn_final">خرید خود را نهایی کنید </a>
        </div>
        <?php
    } else {
        ?>

        <div class="content" style="height: 500px; text-align: center;font-family: '2  Homa';">
            <img src="public/images/BasketEmpty.png" width="200px" height="150px" style="margin-top: 100px">
            <p style="text-align: center;font-size: 15pt;margin: 2px"> سبد خرید شما خالی است! </p>
            <p style="text-align: center;font-size: 12pt;margin: 2px"> می‌توانید برای مشاهده محصولات بیشتر به صفحات زیر
                بروید </p>
            <a href="showcart1" style="color: #12b4cd;font-size: 16px;margin-left: 28px;">
                تخفیف‌ها و پیشنهادها
            </a>
            <a href="showcart1" style="color: #12b4cd;font-size: 16px;margin-left: -1px;"> محصولات پرفروش روز </a>
        </div>
        <?php
    }
    ?>

</div>


</body>

</html>

<script>


    function updateBasket(tedad, BasketRow) {

        var url = 'showcart/updatebasket/';
        var data = {'BasketRow': BasketRow, 'tedad': tedad};

        $.post(url, data, function (msg) {
            var basket = msg[0];
            var priceTotalall = msg[1];
            createBasketList(basket, priceTotalall);
        }, 'json');
        location.reload(true);
    }

    function createBasketList(basket, priceTotalall) {

        $('table tbody tr').remove();
        $.each(basket, function (index, value) {

            var id = value['id'];
            var title = value['title'];
            var tedad = value['tedad'];
            var price = value['price'];
            var basketRow = value['basketRow'];
            var color = value['colorTitle'];
            var garantee = value['garanteeTitle'];

            var trTag = '<tr><td><div class="right"><img src="public/images/products/' + id + '/product_220.jpg"></div><div class="left"><p>' + title + '</p><p>' + color + '</p><p>' + garantee + '</p></div></td><td><div class="selectlist"><span class="yekan zamanattitle">' + tedad + '</span><ul><?php for ($i = 1; $i < 10; $i++) { ?><li onclick="updateBasket(<?= $i ?>,' + basketRow + ')"><?= $i ?></li><?php } ?></ul></div></td><td><span class="price">' + price + '</span><span class="tuman">تومان</span></td><td><span class="price">' + price * tedad + '</span><span class="tuman">تومان</span></td><td class="remove_td" onclick="removeBasket(' + basketRow + ')"><i class="remove_icon"></i></td></tr>';

            $('table tbody').append(trTag);

        });

        $('.total_price2').text(priceTotalall);

        $('.selectList').click(function () {

            var ulTag = $('ul', this);
            ulTag.slideToggle(300);

        });

    }


    function removBasket(productId) {
        var url = 'showcart/deletebasket/' + productId;
        var data = {};

        $.post(url, data, function (msg) {

            var basket = msg[0];
            var priceTotalall = msg[1];
            createBasketList(basket, priceTotalall);

        }, 'json');
        location.reload(true);
    }


    $('.selectList').click(function () {

        var ulTag = $('ul', this);
        ulTag.slideToggle(300);

    });


    $('.selectList ul li ').click(function () {

        var txt = $(this).text();

        $('.selectList .zmanattitle').text(txt);


    });


</script>
<!-- End Auto Close Modal -->
<!-- Begin Vendor Js -->
<script src="assets\vendors\js\base\jquery.min.js"></script>
<script src="assets\vendors\js\base\core.min.js"></script>
<!-- End Vendor Js -->
<!-- Begin Page Vendor Js -->
<script src="assets\vendors\js\nicescroll\nicescroll.min.js"></script>
<script src="assets\vendors\js\app\app.min.js"></script>