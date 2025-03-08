<!doctype html>
<html lang="en" dir="rtl">
<head>
    <base href="<?= URL ?>">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>فاکتور خرید</title>
</head>
<style>
    body {
        font-family: Tahoma;

    }

    table td {
        font-size: 12px;

    }

    .bordered {
        border: 1px solid #000;
    }

    .bordered-bottom {
        border-bottom: 1px solid #000 !important;
    }

    .bordered-top {
        border-top: 1px solid #000 !important;
    }

    .bordered-right {
        border-right: 1px solid #000 !important;
    }

    .bordered-left {
        border-left: 1px solid #000 !important;
    }

    .text-center {
        text-align: center;
    }

    .padding5 {
        padding: 5px;
    }

    #product td {
        border-left: 1px solid #000;
        border-bottom: 1px solid #000;
        padding: 5px;
    }

    #product tr:first-child td {
        border-top: 1px solid #000;
    }

    /*#product tr:last-child td {*/
    /*border-bottom: none;*/
    /*}*/

    #product td:last-child {
        border-left: none;
    }

    #details td {
        border-bottom: 1px solid #000;
    }

    #shopsign td {
        border-bottom: 1px solid #000;
    }
    #shopsign tr:first-child  {
        border-bottom: none;
    }
</style>
<?php
$orderInfo = $data['orderInfo'];
require('public/barcode/BarcodeGenerator.php');
require('public/barcode/BarcodeGeneratorHTML.php');
require('public/barcode/BarcodeGeneratorJPG.php');
require('public/barcode/BarcodeGeneratorPNG.php');
require('public/barcode/BarcodeGeneratorSVG.php');

$generator = new \Picqer\Barcode\BarcodeGeneratorPNG();
$barcode = $generator->getBarcode($orderInfo['id'], $generator::TYPE_CODE_128);
?>
<body>
<table class="bordered" width="500px" cellpadding="0" cellspacing="0" align="center">
    <tr>
        <td>
            <table style="width: 100%">
                <tr>
                    <td class="text-center" width="120px">
                        <img src="public/images/logo.png" width="100px" style="position: relative;top:3px">
                    </td>
                    <td class="text-center" style="font-weight: bold ;font-size: 13px">فروشگاه دیجی امیر</td>
                    <td class="text-center" width="140px">
                        <img src="data:image/png;base64,<?= base64_encode($barcode) ?>">
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td>
            <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="bordered-left bordered-top padding5" width="350px">
                        <p style="margin-top: 0">
                            نام گیرنده:
                            <?= $orderInfo['family'] ?>
                        </p>
                        <p>
                            ادرس:
                            <?= $orderInfo['address'] ?>
                        </p>
                    </td>
                    <td class="bordered-top padding5">
                        <p>
                            کد پستی:
                            <?= $orderInfo['code_posti'] ?>
                        </p>
                        <p>
                            موبایل:
                            <?= $orderInfo['mobile'] ?>
                        </p>
                        <p>
                            تلفن:
                            <?= $orderInfo['tel'] ?>
                        </p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>


    <tr>
        <td>
            <table id="product" width="100%" cellspacing="0" cellpadding="0">
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
                $basket = unserialize($orderInfo['basket']);
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
                            تومان
                        </td>

                        <td>
                            <?= number_format((($row['discount'] * $row['price']) / 100) * $row['tedad']) ?>
                            تومان
                        </td>
                    </tr>
                    <?php
                }
                ?>

            </table>
        </td>
    </tr>

    <tr>
        <td style="padding-top: 20px">
            <table id="details" cellspacing="0" cellpadding="0" width="100%">
                <tr>
                    <td class="padding5" width="300">
                        مبلغ کل پرداختی:
                        <?= number_format($orderInfo['amount']) ?>
                        تومان
                    </td>
                    <td class="padding5">
                        شیوه پرداخت:
                        <?=$orderInfo['payTypeTitle']?>
                    </td>
                </tr>

                <tr>
                    <td class="padding5" width="300">
                        شیوه ارسال:
                        <?=$orderInfo['postTypeTitle']?>
                    </td>
                    <td class="padding5">
                        هزینه ارسال:
                        <?= number_format($orderInfo['post_price']) ?>
                        تومان
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td style="padding-top: 20px">
            <table id="shopsing" cellspacing="0" cellpadding="0" width="100%">
                <tr>
                    <td class="padding5" style="text-align: left">
                        مهر فروشگاه
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

</body>
</html>