<?php
$active = 'setting';

require('views/admin/layoat.php');


?>
<script src="public/js/jscolor/jscolor.js"></script>
<style>
    .row {
        width: 100% !important;
        float: right !important;
        margin-top: 5px;

    }

    .title1 {
        display: block;
        float: right;
        margin-left: 10px;
        margin-right: 10px;
        margin-top: 4px;
        font-size: 8pt;
        font-family: 'IRYekan';
        width: 152px;
    }
    .BtnGreen {
        background: #36be2b;
        border-radius: 4px;
        box-shadow: 1px 1px 3px #ccc;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        height: 27px;
        line-height: 27px;
        text-align: center;
        width: 42px;
        font-size: 7.5pt;
        font-family: 'IRYekan';
    }

    .input {
        width: 204px;
        border: 1px solid #ccc;
        height: 21px;
        padding: 3px;
    }

</style>
<div class="left">
    <p class="title">
        <a>تنظیمات سایت</a>
    </p>

    <?php
    $option = Model::getoption();
    ?>

    <form method="post" action="adminsetting/savesetting">
        <div class="row">
            <span class="title1">تعداد محصولات در اسلایدر ها:</span>
            <input type="text" name="limit_slider" value="<?= $option['limit_slider'] ?>" class="input">
        </div>

        <div class="row">
            <span class="title1">شماره های تماس:</span>
            <input type="text" name="tel" value="<?= $option['tel'] ?>" class="input">
        </div>

        <div class="row">
            <span class="title1"> ایمیل ارتباط با ما:</span>
            <input type="text" name="email" value="<?= $option['email'] ?>" class="input">
        </div>

        <div class="row">
            <span class="title1">مهلت پرداخت(ساعت):</span>
            <input type="text" name="mohlatPay" value="<?= $option['mohlatPay'] ?>" class="input">
        </div>

        <div class="row">
            <span class="title1"> روت سایت: </span>
            <input type="text" name="root" value="<?= $option['root'] ?>" class="input">
        </div>

        <div class="row">
            <span class="title1"> کد درگاه زرین پال: </span>
            <input type="text" name="zarinpalMID" value="<?= $option['zarinpalMID'] ?>" class="input">
        </div>

        <div class="row">
            <span class="title1"> رنگ بدنه: </span>
            <input id="color1" type="text" name="body_color" value="<?= $option['body_color'] ?>" class="input jscolor">
            <span class="BtnGreen" onclick="document.getElementById('color1').jscolor.show();">انتخاب</span>
        </div>

        <div class="row">
            <span class="title1"> رنگ منو: </span>
            <input id="color2" type="text" name="menu_color" value="<?= $option['menu_color'] ?>" class="input jscolor">
            <span class="BtnGreen" onclick="document.getElementById('color2').jscolor.show();">انتخاب</span>
        </div>
    </form>

    <a class="btn_red_small" onclick="submitForm();">
        اجرای عملیات
    </a>
</div>
</div>

