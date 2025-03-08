<?Php
$option=model::getoption();
?>
<style>
    footer {
        height: 300px;
        width: 100%;
        float: right;
        margin-top: 40px;
        margin-top: 2500px;
    }

    #footer_top {
        height: 45px;
        background: #6d717a no-repeat scroll 0 0;

    }

    #footer_bottom {
        height: 255px;
        background: #eceff1;
    }

    .main {

        width: 1200px;
        height: 100%;
        margin: 0 auto;
        font-family: "2  Homa";
    }

    #footer_top span {
        color: #fff;
        font-size: 14pt;

        line-height: 45px;
    }

    #footer_top i {
        width: 17px;
        height: 17px;
        display: inline-block;
        background: url("public/images/slices.png") no-repeat;
        line-height: 45px;
    }

    #footer_top ul {
        padding: 0;
        float: left;
        height: 100%;

    }

    #footer_top li {
        float: right;
        height: 100%;
        line-height: 45px;
        margin-left: 20px;
    }

    #footer_top li a {
        color: #fff;
    }


</style>
<footer>

    <div id="footer_top">
        <div class="main">
            <span> هفت روز هفته ، ۲۴ ساعت شبانه‌ روز پاسخگوی شما هستیم </span>

            <ul>
                <li>
                    <a class="yekan fontlg">
                        <?= $option['tel']; ?>
                        <i style="background-position: -399px -420px;"></i>
                    </a>
                </li>

                <li>
                    <a class="yekan fontlg">
                        سوالات متداول
                        <i style="background-position: -360px  -420px;"></i>
                    </a>
                </li>

                <li>
                    <a class="yekan fontlg">
                        <?= $option['email']; ?>
                        <i style="background-position: -320px  -420px;"></i>
                    </a>
                </li>

            </ul>

        </div>

    </div>

    <style>
        #footer_bottom .right {
            width: 220px;
            float: right;
            height: 100%;
        }

        #footer_bottom .center {
            width: 220px;
            float: right;
            height: 100%;
        }

        #footer_bottom .left {
            width: 590px;
            float: left;
            height: 100%;
        }

        #footer_bottom ul li {

            font-size: 13pt;
            margin-top: 12px;
            line-height: 32px;

        }

        #footer_bottom .title {

            font-size: 14pt;
            margin-top: 12px;
            line-height: 32px;
        }

        #footer_bottom .email input {
            width: 400px;
            height: 36px;
            border: 1px solid #ccc;

        }

        #footer_bottom .email .btn {
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

        footer .social {
            margin-top: 26px;
            float: left;
            width: 100%;
        }

        footer .social img {
            margin-left: 4px;
            float: left;
        }

        .social_button {
            width: 28px;
            height: 28px;
            float: right;
            display: block;
            background: url("public/images/slices.png");
            margin-left: 4px;
            margin-top: 11px;
        }

    </style>
    <div id="footer_bottom">

        <div class="main">
            <div class="right">

                <ul>
                    <li><a class="title">راهنمای خرید از دیجی‌کالا</a></li>
                    <li><a>نحوه ثبت سفارش</a></li>
                    <li><a>رویه ارسال سفارش</a></li>
                    <li><a>شیوه‌های پرداخت</a></li>
                </ul>

            </div>
            <div class="center">

                <ul>
                    <li><a class="title">خدمات راهنمایی مشتریان</a></li>
                    <li><a>نحوه ثبت سفارش</a></li>
                    <li><a>رویه ارسال سفارش</a></li>
                    <li><a>شیوه‌های پرداخت</a></li>
                </ul>

            </div>
            <div class="left">

                <p class="title yekan">از تخفیف‌ها و جدیدترین‌های دیجی‌کالا باخبر شوید:</p>

                <div class="email">

                    <input type="text" class="yekan fontmd" placeholder="لطفا ایمیل خود را وارد کنید ">
                    <span class="btn">ارسال</span>

                </div>

                <div class="social">

                    <a><img src="public/images/android_app_bg.png"></a>
                    <a><img src="public/images/ios_app_bg.png"></a>

                    <span style="background-position: -577px -621px" class="social_button"></span>
                    <span style="background-position: -618px  -621px" class="social_button"></span>
                    <span style="background-position: -536px -621px" class="social_button"></span>
                    <span style="background-position: -370px -621px" class="social_button"></span>

                </div>


            </div>

        </div>
    </div>
</footer>

</body>
</html>