<form action="showcart4/saveorder" method="post">

    <div id="main"
         style="width: 1200px;margin:10px auto;background: #fff;padding: 5px;border-radius: 4px;overflow: hidden;font-family: '2  Homa'">
        <style>
            .head .btn {
                width: 155px;
                height: 38px;
                border-radius: 4px;
                background: rgba(22, 162, 29, 0.88);
                cursor: pointer;
                box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
                text-align: center;
                font-size: 13pt;
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
                font-size: 14pt;
                font-weight: normal;

            }

            .content {
                float: right;
                width: 100%;
            }

            .content table {

                width: 100%;
                float: right;
                font-size: 13pt;

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


                <li class="active"><span class="circle"></span><span class="line"></span><span
                            class="title">بازبینی سفارش</span>
                </li>

                <li><span class="circle"></span><span class="title">اطلاعات پرداخت</span>
                </li>


            </ul>

            <div class="dashed" style="position: relative;left: 142px;">
                <span></span>
                <span></span>
                <span></span>
                <span></span>

            </div>
        </div>

        <?php
        $Status = $data['Status'];
        if ($Status != '') {
        ?>
            <div id="ErrorPayment">
                <?php
                $Status = $data['Status'];
                $ErrorArray = unserialize(zarinpalErrors);
                $Error = $ErrorArray[$Status];

                    echo $Error;

                ?>
            </div>
        <?php
        }
        ?>

        <div class="head">

            <h4>کد تخفیف</h4>
            <span onclick="submitForm();" class="btn_final">ادامه خرید</span>
        </div>

        <style>
            .disconut_cod {

                width: 100%;
                float: right;
                margin-top: 20px;
                font-size: 12pt;
                border: 1px solid #2badd0;
                box-shadow: inset 0 -2px 2px #7f8a9c;
                color: #606060;
            }

            .disconut_cod input {

                width: 180px;
                height: 27px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            .disconut_cod td {

                padding: 10px;
            }

            .disconut_cod span.btn_final {

                margin-top: 0;
                margin-right: 0;
                width: 150px;
                float: right;
                height: 32px;
                background: deepskyblue;
                color: #ffffff;
            }

        </style>

        <table class="disconut_cod" cellspacing="0">
            <tr>
                <td>با ثبت کد تخفیف، مبلغ کد تخفیف از “ مبلغ قابل پرداخت ” کسر می‌شودبا ثبت کد تخفیف، مبلغ کد تخفیف از “
                    مبلغ قابل پرداخت ” کسر می‌شود.
                </td>
                <td>
                    <input id="code" name="code" type="text">
                </td>

                <td>
                    <span class="btn_final" onclick="checkCode();">ثبت کد تخفیف</span>

                </td>
            </tr>
        </table>


        <div class="head">

            <h4>کارت هدیه</h4>

        </div>

        <table class="disconut_cod" cellspacing="0">
            <tr>
                <td>
                    با ثبت کد کارت هدیه، مبلغ کارت هدیه از “مبلغ قابل پرداخت” کسر می‌شود.با ثبت کد کارت هدیه، مبلغ کارت
                    هدی
                    قابل پرداخت” کسر می‌شود.
                </td>
                <td>
                    <input type="text">
                </td>

                <td>
                    <span class="btn_final">ثبت کارت هدیه </span>

                </td>
            </tr>
        </table>


        <table class="disconut_cod" cellspacing="0">
            <tr style="background:  #e1fff1 ">
                <td style="width: 1000px">
                    مبلغ کل قابل پرداخت :
                </td>
                <td style="text-align: center">
                <span id="totalPrice">

                </span>
                    تومان
                </td>


            </tr>
        </table>


        <style>

            .pardakht_type {

                float: right;
                width: 100%;
                font-size: 12pt;
                margin-bottom: 30px;
            }

            .pardakht_type.active tr:first-child td:first-child {

                background: #dff8ff;

            }

            .pardakht_type.active {

                border: 1px solid #76ff96;

            }

            .pardakht_type.active .circle::after {

                content: " ";
                display: block;
                width: 7px;
                height: 7px;
                border-radius: 50%;
                background: #fff;
                position: absolute;
                top: 4px;
                left: 4px;
            }

            .pardakht_type tr td {
                border: 1px solid #eee;
                padding: 10px;

            }

            .pardakht_type .circle {
                width: 15px;
                height: 15px;
                display: block;
                border-radius: 50%;
                border: 2px solid #eee !important;
                position: relative;
                top: 0;
                left: -18px;
                cursor: pointer;

            }

            .circle.active {
                background: #fe195e;
                border: 2px solid #cdd4d5 !important;

            }

            .circle.active::after {
                background: #fff none repeat scroll 0 0;
                border-radius: 100%;
                content: " ";
                display: block;
                position: absolute;

            }

            .circle_container input[type=radio] {
                display: none;
            }
        </style>
        <div class="head">

            <h4>شیوه پرداخت</h4>

        </div>

        <table class="active pardakht_type" cellspacing="0">

            <tr>
                <td style="width: 60px;position: relative" rowspan="3">
                </td>


                <td class="girande" colspan="3">
                    انتخاب شیوه پرداخت
                    <br>


                    <div style="float: right">
                        <div class="circle_container">
                            <span style="top: 5px;left: 3px;float: right" class="circle"></span>
                            <input type="radio" name="paytype" value="1">
                            <span style="float: right">درگاه زرین پال </span>

                        </div>

                    </div>


                    <div style="float: right;margin-right: 30px">
                        <div class="circle_container">
                            <span style="top: 5px;left: 3px;float: right" class="circle"></span>
                            <span style="float: right">درگاه سامان </span>
                            <input type="radio" name="paytype" value="2">
                        </div>
                    </div>

                </td>
            </tr>
        </table>


        <table class="pardakht_type" cellspacing="0">

            <tr>
                <td style="width: 60px;position: relative" rowspan="3">

                    <div class="circle_container">
                        <span class="circle"></span>
                        <input type="radio" name="paytype" value="3">
                    </div>
                </td>
                <td class="girande" colspan="3">
                    کارت به کارت
                    <br>
                    کارت هدیه کلیک سایت . اگر مایل هستید از کد تخفیف دیجی کالا استفاده کنید، کافیست کد آن را وارد کرده و
                    با
                    انتخاب دکمه ثبت مبلغ آن از هزینه قابل پرداخت شما کسر می‌شود
                </td>
            </tr>
        </table>


        <table class=" pardakht_type" cellspacing="0">

            <tr>
                <td style="width: 60px;position: relative" rowspan="3">

                    <div class="circle_container">
                        <span class="circle"></span>
                        <input type="radio" name="paytype" value="4">
                    </div>

                </td>
                <td class="girande" colspan="3">
                    واریز به حساب
                    <br>
                    واریز به حساب شما می توانید وجه سفارش خود را از طریق مراجعه به شعب بانک به حساب شرکت فن آوازه واریز
                    کرده
                    و تا حداکثر 24 ساعت پس از سفارش اطلاعات آن را ثبت نمایید
                </td>
            </tr>
        </table>

        <div style="margin-top: 15px;float: right;width: 100%">
            <span onclick="submitForm()" class="btn_final">ادامه خرید</span>
        </div>
    </div>

    <script>
        function submitForm() {
            $('form').submit();
        }
    </script>

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
            font-size: 13pt;
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
            font-size: 13pt;
            line-height: 37px;
            color: #f6f9f6;
            position: relative;
            top: -60px;
            left: -39px;
            display: block;
            float: left;
            margin-left: 67px;
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


    <script>

        $('.circle').click(function () {
            var parentDiv = $(this).parent('div');
            $('input[name=paytype]').attr('checked', false);
            parentDiv.find('input[name=paytype]').attr('checked', true);
        });

        $('.circle').click(function () {
            $('.circle').removeClass('active');
            $(this).addClass('active');
        });

        function calculateTotlaPrice() {
            var code = $('#code').val();

            var url = 'showcart4/calculatetotlaprice/';
            var data = {'code': code};
            $.post(url, data, function (msg) {
                $('#totalPrice').text(msg);
            });
        }

        calculateTotlaPrice();

        function checkCode() {
            var code = $('#code').val();
            var url = 'showcart4/checkcode/' + code;
            var data = {};
            $.post(url, data, function (msg) {
                if (msg[0] != 0) {
                    $('#code').addClass('green').removeClass('red');
                } else {
                    $('#code').addClass('red').removeClass('green');
                }
                $('#totalPrice').text(msg[1]);
            }, 'json');
        }
    </script>

</form>