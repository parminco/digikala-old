<style>


    #adddigibon {
        padding: 10px;
        background: #eee;
        border: 1px dotted #ccc;
        width: 96%;
        padding-bottom: 20px;
        height: 51px;

    }

    #adddigibon span {
        font-size: 11.8pt;
        font-family: '2  Homa';
        vertical-align: middle;

    }

    #adddigibon input {

        width: 300px;
        height: 29px;
        border-radius: 4px;
        border: 1px solid #ccc;

    }

    #adddigibon img {
        position: relative;
        top: 9px;
        cursor: pointer;

    }

    .digibon .sub {
        box-shadow: 0 0 5px inset #ccc;

    }

    .digibon .sub table {
        width: 100%;
        margin-top: 20px;

    }

    .digibon .sub table tr:first-child {
        background: #d74063 !important;

    }

    .sefid {
        background: #fff !important;
        display: none;
    }

    .error {
        display: block;
        width: 100%;
        float: right;
        height: 20px;
    }

    .red {
        border-color: #fe195e !important;
        box-shadow: 0 1px 5px 1px #fe195e;
    }

    .green {
        border-color: #5cb85c !important;
        box-shadow: 0 1px 5px 1px #5cb85c;
    }

</style>

<section class="digibon" style="display:<?php if ($activTab=='digibon'){ echo 'block'; }?> ">
    <div id="adddigibon">

        <span> دریافت کد دیجی بن</span>
        <input id="code" type="text" name="code" class="code" onclick="setTimeout(removeClass, 7000);">
        <img src="public/images/SaveVoucher.gif" onclick="saveCode();">
        <div class="errorDiv"></div>
    </div>


    <table style="margin-top:40px" cellspacing="0" id="digibon">


        <tr>

            <td>ردیف</td>
            <td>کد</td>
            <td>شرح</td>
            <td>تاریخ ثبت</td>
            <td>تاریخ انقضا</td>
            <td>اعتبار اولیه</td>
            <td>اعتبار مصرفی</td>
            <td>مانده</td>
            <td>وضعیت</td>
            <td>جزییات</td>

        </tr>

        <?php
        $Code = $data['Code'];
        $i = 1;
        foreach ($Code

        as $row) { ?>


            <tr>

                <td><?= $i ?></td>
                <td><?= $row['code'] ?></td>
                <td>بن تخفیف</td>
                <td><?= $row['tarikh_sabt'] ?></td>
                <td><?= $row['tarikh_end'] ?></td>
                <td><?= $row['max'] ?></td>
                <td><?= $row['used'] ?></td>
                <td><?= $row['max'] - $row['used'] ?></td>
                <td><?= $row['status'] ?></td>
                <td>
                    <img class=" showDetails" onclick="showDetailsTr(this)" style="margin-top:5px; "
                         src="public/images/orderdetailsopen.png">

                </td>
            </tr>


            <tr class="sefid">
                <td colspan="11">
                    <div class="sub">
                        <table cellspacing="0">


                            <tr>
                                <td>سفارش</td>
                                <td>نوع</td>
                                <td>تاریخ</td>

                            </tr>

                            <?php
                            $orders = $row['orders'];
                            foreach ($orders as $row2) {
                                ?>
                                <tr>
                                    <td><?= $row2['id'] ?></td>
                                    <td>خرید</td>
                                    <td>
                                        <?= $row2['pay_year'] . '/' . $row2['pay_month'] . '/' . $row2['pay_day'] ?>
                                    </td>
                                </tr>

                                <?php
                            }
                            ?>
    </table>

    </div>
    </td>
    </tr>

    <?php

    }
    $i++;
    ?>
    </table>


</section>
<script>

    function saveCode() {
        alert('1');
        var code = $('.code').val();
        var errorDiv = $('.errorDiv');

        var Url = 'panel/savecode/';
        var data = {'code': code};
        $.post(Url, data, function (msg) {


            if (msg == 1) {
                errorDiv.html('<span style="color: red" onclick="setTimeout(removeSpan,7000);" class="error span_error ">لطفا فیلد را با دقت پر کنید</span>');
                $('#code').addClass('red').removeClass('green');
                $('#code').trigger('click');
                $('.span_error').trigger('click');
                $('.span_error').trigger('click');
            } else if (msg == 2) {
                errorDiv.html('<span style="color: green" onclick="setTimeout(removeSpan,7000);"  class="error span_error">کد تخفیف با موفقیت ثبت شد</span>');
                $('#code').addClass('green').removeClass('red');
                $('#code').trigger('click');
                $('.span_error').trigger('click');
                window.location='panel/index/digibon/;
            } else if (msg == 3) {
                errorDiv.html('<span  style="color: red" onclick="setTimeout(removeSpan,7000);" class="error span_error">از این کد قبلا استفاده شده است</span>');
                $('#code').addClass('red').removeClass('green');
                $('#code').trigger('click');
                $('.span_error').trigger('click');
            }
            else if (msg == 4) {
                errorDiv.html('<span  style="color: red" onclick="setTimeout(removeSpan,7000);" class="error span_error">چنین کُدی اصلا وجود ندارد</span>');
                $('#code').addClass('red').removeClass('green');
                $('#code').trigger('click');
                $('.span_error').trigger('click');
                $('.span_error').trigger('click');
            }


        });
    }

    function removeClass() {
        $('#code').removeClass('green');
        $('#code').removeClass('red');

    }

    function removeSpan() {
        var tag = $('.span_error');
        tag.remove();
    }

</script>