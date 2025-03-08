<style>
    #slider2 {
        width: 890px;
        height: 304px;
        overflow: hidden;
        margin-top: 8px;
        background: #fff;
        border-radius: 4px;
        box-shbadow: 0 5px 3px rgba(0, 0, 0, .3);
        position: relative;
    }

    #slider2_content {
        display: block;
        height: 100%;
    }

    #slider2_content {
        width: 705px;
        float: right;
        height: 100%;
        background: url("public/images/slider2_bg.jpg") no-repeat;

    }

    #slider2 a #slider2_content_left img {

        width: 220px;
        margin-right: 46px;
    }

    #slider2_navigator {
        width: 184px;
        border-right: 1px solid #eee;
        float: left;
        height: 100%;
        background: #eee
    }

    #slider2_navigator ul li {
        height: 38px;
    }

    #slider2_navigator ul {
        padding: 0;
    }

    #slider2_navigator ul li a {
        height: 100%;
        display: block;
        width: 100%;
        text-align: center;
        font-family: yekan;
        font-size: 11pt;
        line-height: 38px;
    }

    .slider2_content_right {
        width: 400px;
        float: right;
        height: 100%;
    }

    .slider2_content_left {
        width: 305px;
        float: left;
        height: 100%;
    }

    .slider2_content_right .title {
        color: red;
        font-size: 13pt;
        font-family: yekan;
        padding-right: 33px;
        margin-top: 38px;
    }

    .slider2_content_right .price_info {

        height: 35px;
        margin-right: 25px;
        border-radius: 4px;
        overflow: hidden;
    }

    .price_info_old {
        width: 75px;
        height: 100%;
        float: right;
        background: #ccc;
        text-align: center;
        color: red;
        line-height: 32px;
    }

    .price_info {
        position: relative;

    }

    .price_info_old::before {
        content: " ";
        position: absolute;
        left: -12px;
        top: 8px;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 8px 12px 8px 0;
        border-color: transparent #eee transparent transparent;
        z-index: 3;

    }

    .price_info_old::after {
        content: " ";
        position: absolute;
        right: 2px;
        top: 16px;
        width: 19%;
        height: 0px;
        border-bottom: 2px solid #000;
        transform: rotate(-23deg);

    }

    .price_info_new {

        height: 100%;
        width: 155px;
        float: right;
        background: red;
        margin-right: 2px;
        position: relative;
        text-align: center;
        color: #fff;
        line-height: 32px;

    }

    .price_info_old::before {
        content: " ";

        position: absolute;
        right: 77px;
        top: 8px;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 8px 12px 8px 0;
        border-color: transparent #fff transparent transparent;
        z-index: 2;
    }

    .slider2_content_right .ptagstyle {
        width: 100%;
        float: right;
        margin: 1px;
        padding-right: 30px;

    }


    .flipTimer {
        position: absolute;
        top: 190px;
        right: -130px;
        transform: scale(.3);
    }

    .flipTimer, .flipTimer div {
        direction: ltr !important;
    }

    .slider2_finished {
        width: 705px;
        height: 100%;
        position: absolute;
        right: -276px;
        top: 82px;
        background: url("public/images/Finished.png") no-repeat;
        text-align: center;
        display: none;
        z-index: 2;

    }

    #slider2_navigator .active {
        background: #f20f59;
        color: #fff;
        position: relative;
    }

    #slider2_navigator li {
        cursor: pointer;

    }

    #slider2_navigator .active::after {

        content: " ";
        position: absolute;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 19px 0 19px 17px;
        border-color: transparent transparent transparent #f20f5b;
        right: -17px;
        top: 0px;

    }


</style>

<div id="slider2">

          <div class="flipTimer">
            <div class="hours"></div>
            <div class="minutes"></div>
            <div class="seconds"></div>

    </div>

    <div class="slider2_finished">


    </div>

    <div id="slider2_content">

        <?php
        $slider2 = $data[1];
        $date_end=$data[2];
        foreach ($slider2 as $row) {
            ?>

            <a class="item" href="<?= URL ?>product/index/<?= $row['id']; ?>">
                <div class="slider2_content_right">
                    <P class="title">جشنواره سال نو</P>

                    <div class="price_info">

                        <div class="price_info_old yekan fontlg"><?= $row['price']; ?></div>


                        <div class="price_info_new yekan fontlg">

                            <?= $row['price_total']; ?>
                            تومان</div>


                    </div>
                    <p class="yekan fontsm ptagstyle">توان : 21 وات</p>

                    <p class="yekan fontsm  ptagstyle"> مقاوم در برار اب</p>
                </div>


                <div class="slider2_content_left">
                    <p class="yekan" style="font-size: 15pt;text-align: center"><?= $row['title']; ?></p>

                    <img src="public/images/products/<?= $row['id'];?>/product_220.jpg">

                </div>
            </a>
            <?php
        }
        ?>


    </div>

    <div id="slider2_navigator">

        <ul>

            <?php
            $slider2 = $data[1];
            foreach ($slider2 as $row) {
                ?>
            <li>
                <a>
                  <?= $row['title']; ?>
                </a>
            </li>

            <?php
                }
            ?>


        </ul>

    </div>


</div>


<script>

    $('.flipTimer').flipTimer({

        direction: 'down',
        date: '<?php echo $date_end; ?>',
        callback: function () {
            $('.slider2_content_right').css('opacity', .4);
            $('.slider2_content_left').css('opacity', .4);
            $(".slider2_finished").fadeIn(200);
        }
    });



    var sliderTag2 = $('#slider2');
    var sliderItem2 = sliderTag2.find('.item');
    var numItem2 = sliderItem2.length;
    var nextSlide2 = 1;
    var timeOut2 = 5000;
    var sliderNavigators2 = sliderTag2.find("#slider2_navigator ul li");

    function slider2() {
        if (nextSlide2 > numItem2) {
            nextSlide2 = 1;
        }

        if (nextSlide2 < 1) {
            nextSlide2 = numItem2;
        }
        sliderItem2.hide();
        sliderItem2.eq(nextSlide2 - 1).fadeIn(100);
        sliderNavigators2.removeClass('active');
        sliderNavigators2.eq(nextSlide2 - 1).addClass('active');
        nextSlide2++;

    }

    slider2();
    var slider_Interval2 = setInterval(slider2, timeOut2);

    sliderTag2.mouseleave(function () {
        clearInterval(slider_Interval2);
        slider_Interval2 = setInterval(slider2, timeOut2);

    });


    function goToSlid2(index) {
        nextSlide2 = index;
        slider2();

    }

    $('#slider2 #slider2_navigator li').click(function () {
        clearInterval(slider_Interval2);
        var index = $(this).index();
        goToSlid2(index + 1);

    });



</script>