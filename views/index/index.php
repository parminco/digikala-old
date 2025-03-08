<div id="main" style="width: 1200px ;margin: 10px auto">

    <div id="banner_top" style="width: 100%;height: 138px">

        <img src="public/images/banner.jpg" width="100%" style="border-radius: 4px">

    </div>


    <?php

            require ('sidbar_right.php');
    ?>


        <style>
            #barands_sidbar a {
                display: block;
                width: 135px;
                height: 95px;
                background: #fff;
                float: right;
                margin-left: 10px;
                margin-top: 12px;
                border-radius: 4px;
                overflow: hidden;
                box-shadow: 1px 4px 4px rgba(0, 0, 0, .5);

            }

            #barands_sidbar a img {

                width: 100%;
                height: 100%;
            }

            #barands_sidbar a:nth-child(even) {
                float: left;
                margin-left: 0;

            }
            .fontsm{
                color: black;
            }

        </style>
        <div id="barands_sidbar">

            <a>
                <img src="public/images/x.vision.png">
            </a>

            <a>
                <img src="public/images/lenovo.png">
            </a>

            <a>
                <img src="public/images/nivea.png">
            </a>

            <a>
                <img src="public/images/adata.png">
            </a>

            <a>
                <img src="public/images/oral-b.png">
            </a>

            <a>
                <img src="public/images/d-link.png">
            </a>

            <a>
                <img src="public/images/samsung-brand.jpg">
            </a>

            <a>
                <img src="public/images/asus.png">
            </a>

            <a>
                <img src="public/images/lg.png">
            </a>

            <a>
                <img src="public/images/panasonic.png">
            </a>


        </div>
    </div>

    <style>


        #slider {
            height: 310px;
            margin-top: 12px;
            border-radius: 4px;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0, 0, 0, .3);
            background: #fff;

        }

        #slider_img {
            height: 260px;
        }

        #slider_img img {
            height: 260px;
            width: 100%;
        }

        #slider_img a {
            display: none;
        }

        #slider_navigator {
            height: 50px;
            background: rgba(0, 0, 0, .6);
        }

        #slider #prev {
            width: 19px;
            height: 33px;
            display: block;
            position: absolute;
            top: 130px;
            right: 15px;
            background: url(public/images/arrow_slider.png) no-repeat;
            background-position: 0 -33px;
            cursor: pointer;
            z-index: 2;
        }

        #slider #next {

            width: 19px;
            height: 33px;
            display: block;
            position: absolute;
            top: 130px;
            left: 15px;
            background: url(public/images/arrow_slider.png) no-repeat;
            cursor: pointer;
            z-index: 2;
        }

        #slider #slider_navigator ul {

            height: 100%;
            padding: 0;
        }

        #slider #slider_navigator ul li {
            width: 178px;
            height: 100%;
            float: right;

        }

        #slider #slider_navigator ul li a {
            display: block;
            height: 100%;
            width: 100%;
            text-align: center;
            color: #fff;
            line-height: 46px;
            cursor: pointer;

        }

        #slider #slider_navigator .active > a {
            background: #fff;
            color: #000;
            position: relative;
        }

        #slider #slider_navigator .active > a::after {
            position: absolute;
            content: " ";
            top: -13px;
            right: 0;
            left: 0;
            margin: 0 auto;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 12.5px 13px 12.5px;
            border-color: transparent transparent #ffffff transparent;

        }


    </style>

    <div id="content" style="width: 890px;float: left;height: 200px">
        <?php
            require('slider1.php');
            require('services_feature.php');
            require('slider2.php');
            require('onlyclicksite.php');
            require('direct_access.php');
            require('most_viwed.php');
            require('most_saled.php');
            require('last_products.php');



        ?>





    </div>
</div>


<script>


    function sliderscroll(direction, tag) {

        var span_tag = $(tag);
        var slidersscrollTag = span_tag.parents('.sliderscroll');
        var slidersscrollUl = slidersscrollTag.find('.sliderscroll_main ul');
        var slidersscrollItems = slidersscrollUl.find('li');
        var slidersscrollItemsNumbers = slidersscrollItems.length;
        var slidersscrollNumbers = Math.ceil(slidersscrollItemsNumbers / 4);
        var maxNegativiMargin = -(slidersscrollNumbers - 1) * 780;
        slidersscrollUl.css('width', slidersscrollItemsNumbers * 195);

        var marginRightNew;
        var marginRightOLd = slidersscrollUl.css('margin-right');
        marginRightOLd = parseFloat(marginRightOLd);

        if (direction == 'left') {

            marginRightNew = marginRightOLd - 780;

        }
        if (direction == 'right') {

            marginRightNew = marginRightOLd + 780;


        }
        if (marginRightNew < maxNegativiMargin) {
            marginRightNew = 0;
        }
        if (marginRightNew > 0) {
            marginRightNew = maxNegativiMargin;
        }
        slidersscrollUl.animate({'marginRight': marginRightNew}, 1000);
    }

    $('.next').click(function () {
        sliderscroll('left');


    });

    $('.prev').click(function () {
        sliderscroll('right');


    });



    var sliderTag = $('#slider');
    var sliderItem = sliderTag.find('.item');
    var numItem = sliderItem.length;
    var nextSlide = 1;
    var timeOut = 5000;
    var sliderNavigators = sliderTag.find("#slider_navigator ul li");

    function slider() {
        if (nextSlide > numItem) {
            nextSlide = 1;
        }

        if (nextSlide < 1) {
            nextSlide = numItem;
        }
        sliderItem.hide();
        sliderItem.eq(nextSlide - 1).fadeIn(100);
        sliderNavigators.removeClass('active');
        sliderNavigators.eq(nextSlide - 1).addClass('active');
        nextSlide++;

    }

    slider();
    var slider_Interval = setInterval(slider, timeOut);

    sliderTag.mouseleave(function () {
        clearInterval(slider_Interval);
        slider_Interval = setInterval(slider, timeOut);

    });

    function goTonext() {
        slider();
    }

    $('#slider #next').click(function () {
        clearInterval(slider_Interval);
        goTonext()
    })

    function goToprev() {
        nextSlide = nextSlide - 2;
        slider();
    }

    $('#slider #prev').click(function () {
        clearInterval(slider_Interval);
        goToprev();
    })

    function goToSlid(index) {
        nextSlide = index;
        slider();

    }

    $('#slider #slider_navigator li').hover(function () {
        clearInterval(slider_Interval);
        var index = $(this).index();
        goToSlid(index + 1);

    }, function () {

    });


    /*slider 1  balai */




</script>

