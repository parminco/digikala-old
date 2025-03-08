<style>
    .sliderscroll {
        height: 310px;
        width: 890px;
        box-shbadow: 0 5px 3px rgba(0, 0, 0, .3);
        margin-top: 10px;
        background: #fff;
        border-radius: 4px;
        overflow: hidden;
    }

    .sliderscroll h3 {
        height: 35px;
        font-family: '2  Homa';
        font-size: 12pt;
        background: #f7f9fa;
        padding-right: 10px;
        padding-top: 5px;
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

        width: 780px;
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
        width: 195px;
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

                $result=$data[3];
                foreach ($result as $row) {

                    ?>
                    <li>
                        <a  href="<?= URL ?>product/index/<?= $row['id']; ?>">
                            <img style="width: 150px"  src="public/images/products/<?= $row['id'];?>/product_220.jpg">

                            <img src="public/images/exclusive-blue.png">
                            <br>
                            <span class="yekan fontsm"><?= $row['title']; ?> </span>

                            <br>
                            <span class="yekan price"><?= $row['price']; ?></span>
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
