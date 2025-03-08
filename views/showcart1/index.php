
<div id="main"
     style="width: 1200px;margin:10px auto;background: #fff;padding: 6px;border-radius: 4px;overflow: hidden;height: 500px;font-family:'2  Homa'">


    <style>

        .order-steps {

            padding-top: 41px;
            padding-right: 271px;
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
            top: 12px;

        }

        .order-steps ul li.active .line {

            background: #2badd0;

        }

        .order-steps ul li .title {
            font-size: 13pt;
            color: #e80751;
            position: absolute;
            right: -37px;
            top: 27px;
            width: 150px;
        }

        .order-steps ul li.active .title {

            color: #2badd0;

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

            <li><span class="circle"></span><span class="line"></span><span
                    class="title"/>ورود به دیجی امیر</span>
            </li>


            <li><span class="circle"></span><span class="line"></span><span
                    class="title">اطلاعات ارسال سفارش</span></li>


            <li><span class="circle"></span><span class="line"></span><span class="title">بازبینی سفارش</span>
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


    <style>

        .content {
            width: 100%;
            float: right;
            margin-top: 100px;
        }

        .content .right {
            width: 540px;
            float: right;
            text-align: center;

        }

        .content .right i {
            width: 48px;
            height: 54px;
            display: block;
            background: url("public/images/slices.png") no-repeat -795px -19px;
            margin: auto;
        }

        .content .right a {
            width: 161px;
            height: 38px;
            background: #4985ff;
            float: none;
            margin-right: 188px;
            margin-top: 40px;

        }

        .content .left {
            width: 540px;
            float: right;
            margin-right: 30px;
        }

        .content .left i {
            width: 48px;
            height: 54px;
            display: block;
            background: url("public/images/slices.png") no-repeat -795px -90px;
            margin: auto;
        }

        .content .left a {
            width: 161px;
            height: 38px;
            background: #3cbd0d;
            float: none;
            margin-right: 188px;
            margin-top: 40px;
        }


    </style>
    <div class="content">
        <div class="right">
            <i></i>

            <p style="font-size: 13pt;text-align: center !important;">عضو دیجی امیر هستید؟</p>

            <p style="font-size: 12pt;text-align: center !important;">جهت تکمیل خرید وارد شوید</p>

            <a href="login" class="btn">ورود به دیجی امیر </a>

        </div>


        <div class="left">
            <i></i>

            <p style="font-size: 13pt;text-align: center !important;">تازه وارد هستید؟</p>

            <p style="font-size: 12pt;text-align: center !important;">جهت تکمیل خرید ثبت نام کنید</p>

            <a class="btn">ثبت نام در دیجی امیر </a>

        </div>

    </div>
</div>


<style>
    footer {
        height: 300px;
        width: 100%;
        float: right;
        margin-top: 40px;

    }

    #footer_top {
        height: 45px;
        background: #6d717a no-repeat scroll 0 0;

    }

    #footer_bottom {
        height: 255px;
        background: #f7f8fa no-repeat scroll 0 0;
    }

    .main {

        width: 1200px;
        height: 100%;
        margin: 0 auto;
    }

    #footer_top span {
        color: #fff;
        font-size: 14pt;
        font-family: "2  Homa";
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
            font-family: '2 Homa';
            font-size: 13pt;
            margin-top: 12px;
            line-height: 32px;

        }

        #footer_bottom .title {
            font-family: '2 Homa';
            font-size: 16pt;
            margin-top: 12px;
            line-height: 32px;
        }

        #footer_bottom .email input {
            width: 400px;
            height: 36px;
            border: 1px solid #ccc;

        }

        .btn {
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
            background: url("images/slices.png");
            margin-left: 4px;
            margin-top: 11px;

        }

    </style>

