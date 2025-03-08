
<style>
    .sliderscroll {
        height: 310px;
        width: 1200px;
        box-shbadow: 0 5px 3px rgba(0, 0, 0, .3);
        margin-top: 20px;
        background: #fff;
        border-radius: 4px;
        overflow: hidden;
        float: right;
    }

    .sliderscroll h3 {
        height: 35px;
       font-family: '2  Homa';
        font-size: 13pt;
        background: #f7f9fa;
        padding-right: 10px;
        padding-top: 10px;
        margin: 0;
        font-weight: normal;
    }

    .sliderscroll_content {
        height: 265px;

    }

    .sliderscroll_prev, .sliderscroll_next {

        width: 55px;
        height: 100%;
        float: right;
    }

    .sliderscroll_main {

        width: 1090px;
        height: 100%;
        float: right;
        overflow: hidden;
    }

    .sliderscroll_prev .prev {
        margin-top: 95px;
        width: 20px;
        height: 29px;
        background: url(public/images/slices.png) no-repeat;
        display: block;
        background-position: -850px -683px;
        margin-right: 12px;
        position: relative;
        cursor: pointer;
    }

    .sliderscroll_next .next {
        margin-top: 95px;
        width: 20px;
        height: 29px;
        background: url(public/images/slices.png) no-repeat;
        display: block;
        background-position: -809px -683px;
        margin-left: 12px;
        position: relative;
        cursor: pointer;

    }

    .sliderscroll .sliderscroll_main ul {

        padding: 0;
        height: 100%;

    }

    .sliderscroll .sliderscroll_main ul li {
        width: 218px;
        height: 100%;
        padding: 0;
        float: right;
    }

    .sliderscroll .sliderscroll_main ul li a {
        height: 100%;
        display: block;
        cursor: pointer;
        text-align: center;
    }

    .sliderscroll .sliderscroll_main ul li a p {

        text-align: center;

    }

    .sliderscroll .price {

        font-size: 15pt;
        color: green;
    }

</style>

<div class="sliderscroll">

    <h3>فقط در دیجی کالا</h3>


    <div class="sliderscroll_content">
        <div class="sliderscroll_prev">
            <span class="prev" onclick="sliderscroll('right',this);"></span>
        </div>


        <div class="sliderscroll_main">
            <ul>

               <?php
               $onlyDigiAmir=$data['onlyDigiAmir'];
               foreach ($onlyDigiAmir as $row) {
                   ?>
                   <li>
                       <a>
                           <img style="width: 150px"  src="public/images/products/<?= $row['id'];?>/product_220.jpg">

                           <img src="public/images/exclusive-blue.png">
                           <br>
                           <span class="yekan fontsm"><?= $row['title'];?></span>

                           <br>
                           <span class="yekan price"><?= $row['price'];?></span>
                       </a>
                   </li>
                   <?php
               }
                ?>


            </ul>

        </div>


        <div class="sliderscroll_next">
            <span class="next" onclick="sliderscroll('left',this);"></span>
        </div>


    </div>

</div>

<script>
    function sliderscroll(direction, tag) {

        var span_tag = $(tag);
        var slidersscrollTag = span_tag.parents('.sliderscroll');
        var slidersscrollUl = slidersscrollTag.find('.sliderscroll_main ul');
        var slidersscrollItems = slidersscrollUl.find('li');
        var slidersscrollItemsNumbers = slidersscrollItems.length;
        var slidersscrollNumbers = Math.ceil(slidersscrollItemsNumbers / 5);
        var maxNegativiMargin = -(slidersscrollNumbers - 1) * 1090;
        slidersscrollUl.css('width', slidersscrollItemsNumbers * 218);

        var marginRightNew;
        var marginRightOLd = slidersscrollUl.css('margin-right');
        marginRightOLd = parseFloat(marginRightOLd);

        if (direction == 'left') {

            marginRightNew = marginRightOLd - 1090;

        }
        if (direction == 'right') {

            marginRightNew = marginRightOLd + 1090;


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


</script>