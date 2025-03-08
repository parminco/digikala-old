<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?= URL ?>">
    <meta charset="UTF-8">
    <title>
        فروشگاه اینترنتی امیر دیجی
    </title>
    <script src="public/js/jquery-3.3.1.min.js"></script>
    <script src="public/js/jquery.flipTimer.js"></script>
    <link href="public/css/flipTimer.css" rel="stylesheet">


</head>

<style>
    body {
        margin: 0;
        background: #<?= body_color ?>;
        direction: rtl;
    }

    nav {
        box-shadow: 1px 3px 4px;
        -webkit-box-shadow: 1px 3px 4px;
        -moz-box-shadow: 1px 3px 4px;
    }

    ul {
        margin: 0;
    }

    li {
        list-style: none;
        cursor: pointer
    }

    #menu_top > ul {
        position: relative;
        padding: 0;
    }

    #menu_top > ul > li {
        float: right;
        height: 40px;
    }

    #menu_top > ul > li > a {
        padding: 0 10px;
        height: 40px;
        display: block;
        line-height: 40px
    }

    #menu_top > ul > li > ul {
        position: absolute;
        right: 0;
        background: #fff;
        width: 1200px;
        padding: 0;
        box-shadow: 0px 3px 4px;
        display: none;
    }

    #menu_top > ul > li > ul > li {
        float: right
    }

    #menu_top > ul > li > ul > li > a {
        padding: 5px 10px;
        display: block
    }

    .menu_down_icon {
        background: url(public/images/arrow.png);
        display: block;
        float: left;
        height: 12px;
        margin-right: 10px;
        margin-top: 15px;
        width: 12px;

    }

    .top_menu3_col {
        width: 299px;
        height: 100%;
        border-left: 1px solid #eee;
        float: right;
    }

    .top_menu3_col_ul li {

        padding-right: 15px;

    }

    .top_menu3_col_ul .Level3 {

        padding-right: 5px;
        color: #3d45ea;

    }

    .submenu3 {
        display: none;
        width: 1200px;
        height: 300px;
        background: #fff;
        border-top: 1px solid #eee;
        position: absolute;
        right: 0;
        z-index: 3;
    }

    .activ_menu {
        box-shadow: 0 -2px 4px #bbb8cb;
    }

    .activ_menu > a {
        color: #ff431c

    }

    #menu_top a {
        cursor: pointer
    }

    #menu_top_nav {
        width: 100%;
        height: 40px;
        background: #<?= menu_color ?>;
        border-top: 1px solid #ededed;
        box-shadow: 0 3px 4px;
    }

    a, p, span, div, li, ul {
        text-align: right;
        direction: rtl

    }

    a {
        text-decoration: none
    }

    @font-face {
        font-family: 'yekan';
        src: ('public/fonts/yekan.ttf') format('truetype'),
    url('public/fonts/yekan.eot?#iefix') format('embedded-ontype');

    }

    .yekan {
        font-family: "2  Homa";
    }

    .yekan2 {
        font-family: "IRYekan";
        font-size: 10pt;
    }

    .fontsm {
        font-size: 12.3pt;
        font-family: "2  Homa";
    }

    .fontmd {
        font-size: 12.3pt;
        font-family: "2  Homa";
    }

    .fontlg {
        font-size: 13.3pt;
        font-family: "2  Homa";
    }
</style>
<body>

<header style="background: #ffffff">
    <div id="header" style="width: 1200px;height: 100px;margin: 0 auto;padding-top:13px ">
        <div id="header_right" style="width: 720px;height: 100px; float: right">

            <div id="header_right_top" style="height: 40px">
             <span style="width: 20px;height: 20px;background: url(public/images/lock.png);display: block;
             float:right"></span>
                <a class="fontsm" href="<?= URL; ?>login" style="float:right;margin-right: 10px;">فروشگاه اینترنتی دیجی
                    کالا,,وارد
                    شوید</a>

                <span style="width: 20px;height: 20px;background: url(public/images/signup.png);display: block;
             float:right;margin-right:20px"></span>
                <a class="fontsm" href="<?= URL; ?>regester" style="float:right;margin-right:10px">ثبت نام کنید</a>
            </div>


            <div id="header_right_bottom" style="height: 50px;">
                <a href="showcart">
                    <div id="basket_top"
                         style="width: 190px;height: 40px;float: right;border-radius: 4px;overflow: hidden;cursor: pointer">
                        <div id="basket_top_rihgt" style="width: 54px;height: 100%;background: #38cb81
                 url(public/images/basket.png) no-repeat center;float: right "></div>
                        <div id="basket_top_left"
                             style="width: 96px;height: 100%;background: #1ab142;float:right;padding: 0 20px;line-height: 35px">
                            <span class="fontsm" style="color: #fff;">سبد خرید</span>
                            <span style="text-align:center;width: 25px;height: 25px;background: #ccc;display:block;float:left;border-radius: 100%;margin-top: 7px;line-height:25px ">0</span>
                        </div>
                </a>

            </div>
            <div id="search_top"
                 style="width: 480px;height: 40px;float: right;margin-right:20px;position: relative">

                <input type="text" class="fontsm"
                       style="width:480px;height: 32px!important;margin-top: 2px;border: 1px solid #b1bbbf;padding-right:10px;color: #565b5e;"
                       placeholder="محصول,دسته یا برند مورد نظر خود را سرچ کنید...">
                <span style="width: 42px;height: 36px;background: #746f76 url(public/images/search.png) no-repeat center;                          display: block;position: absolute;left: -12px;top: 2px;"></span>
            </div>
        </div>

    </div>


    <div id="header_left" style="float: left">
        <a href="index">
            <img src="public/images/logo.png" width="250px">
        </a>
    </div>
    </div>
</header>


<nav id="menu_top_nav">

    <div id="menu_top" style="width: 1200px;height: 40px;margin: auto;">

        <ul><!--Level1-->
            <?php
            $model = new model();
            $Menu = $model->getMenu();

            foreach ($Menu as $Level1) {
                ?>

                <li data-time="<?= $Level1['id'] ?>">
                    <a class="yekan">
                        <?= $Level1['title'] ?>
                        <span class="menu_down_icon"></span>
                    </a>

                    <ul><!--Level2-->

                        <?php
                        @$children1 = $Level1['children'];
                        if (isset($Level1['children'])) {
                            foreach ($children1 as $Level2) {
                                ?>
                                <li>
                                    <a data-time="<?= $Level2['id'] ?>" class="yekan2">
                                        <?= $Level2['title'] ?>
                                    </a>
                                    <div class="submenu3"><!--Level3-->


                                        <ul style="padding-right: 10px" class="top_menu3_col yekan top_menu3_col_ul">
                                            <?php
                                            if (isset($Level2['children']))
                                            {
                                            @$children2 = $Level2['children'];
                                            $i = 1;
                                            foreach ($children2

                                            as $Level3)
                                            {

                                            if ($i % 10 == 0){
                                            ?>

                                        </ul>
                                        <ul style="padding-right: 10px" class="top_menu3_col yekan2 top_menu3_col_ul">
                                            <?php
                                            }
                                            ?>
                                            <li class="Level3"><?= $Level3['title'] ?></li>


                                            <!--Level4-->
                                            <?php
                                            $i++;
                                            if (isset($Level3['children']))
                                            {
                                            @$children3 = $Level3['children'];
                                            foreach ($children3 as $Level4) {

                                            if ($i % 10 == 0){
                                            ?>

                                        </ul>
                                        <ul style="padding-right: 10px" class="top_menu3_col yekan top_menu3_col_ul">
                                            <?php
                                            }

                                            ?>

                                            <li><?= $Level4['title'] ?></li>

                                            <?php
                                            $i++;

                                            }
                                            }

                                            }
                                            }
                                            ?>


                                        </ul>


                                        <img src="public/images/mobil.png" width="350" height="325"
                                             style="position: absolute;left: 2px;bottom: 2px;z-index: 3;">

                                    </div>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </li>
                <?php
            }
            ?>

        </ul>

    </div>
</nav>

<script>

    var timer = {};
    $('#menu_top li').hover(function () {
        var tag = $(this);
        var timerAttr = tag.attr('data-time');
        clearTimeout(timer[timerAttr]);
        tag.addClass('activ_menu');
        timer[timerAttr] = setTimeout(function () {
            $('> ul', tag).fadeIn(0);
            $('> .submenu3', tag).fadeIn(0);
        }, 500)


    }, function () {
        var tag = $(this);
        var timerAttr = tag.attr('data-time');
        clearTimeout(timer[timerAttr]);
        tag.removeClass('activ_menu');
        timer[timerAttr] = setTimeout(function () {
            $('> ul', tag).fadeOut(0);
            $('> .submenu3', tag).fadeOut(0);
        }, 600)
    })

</script>