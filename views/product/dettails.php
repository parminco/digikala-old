<style>
    #dettails .right {

        width: 450px;
        float: right;
    }

    #dettails .share {
        float: left;
        width: 100%;
        padding: 20px 0;
    }

    #dettails .share i {
        background: url("public/images/slices.png") no-repeat;
        width: 20px;
        height: 20px;
        display: block;
        float: left;
        margin-left: 15px;
        margin-top: 5px;
    }

    #dettails .gallery {
        float: right;
        width: 100%;
        text-align: center;
    }

    #dettails .gallery ul {
        float: right;
        width: 100%;
        padding: 0;
        margin-top: 15px;
    }

    #dettails .gallery ul li {
        float: right;
        width: 80px;
        height: 80px;
        border: 1px solid #eee;
        margin-right: 6px;
        text-align: center;
        cursor: pointer
    }

    #dettails .gallery ul li img {
        margin-top: 8px;

    }

    #dettails .gallery ul li span {
        background: url(public/images/slices.png) no-repeat -562px -28px;
        width: 35px;
        height: 17px;
        display: block;
        margin-right: 23px;
        margin-top: 28px;

    }


</style>
<div id="dettails"
     style="background: #fff;box-shadow: 0 1px 3px #eee;float: right;width: 100%;border-radius: 4px;overflow: hidden;margin-top: 5px">

    <div class="right">
        <div class="share">
            <i class="social" style="background-position: -213px -187px;"></i>
            <i class="addtofavorit" style="background-position: -160px -187px;"></i>
        </div>


        <div class="gallery">
            <img id="zoomproduct" src="public/images/products/<?= $productInfo['id']; ?>/product_350.jpg"
                 data-zoom-image="public/images/products/<?= $productInfo['id']; ?>/product_zoom.jpg">

            <script>
                $('#zoomproduct').elevateZoom({
                    'zoomWindowOffetx': -800,
                    'zoomWindowOffety': -85,
                    'scrollZoom': true,
                    'easing': true,
                    'zoomWindowHeight': 500,
                    'lensFadeIn': true
                });

            </script>

            <ul>

                <li data-main-image="images/products/gallery/main/gallery1.jpg">
                    <span class="senoghte"></span>
                </li>

                <?php
                $gallery = $data['gallery'];
                foreach ($gallery as $row) {
                    if ($row['threed'] == 0) {
                        ?>
                        <li data-main-image="public/images/products/<?= $row['idproduct'] ?>/gallery/large/<?= $row['img'] ?>">
                            <img style="width: 60px"
                                 src="public/images/products/<?= $row['idproduct'] ?>/gallery/small/<?= $row['img'] ?>">
                        </li>


                        <?php
                    }
                }
                ?>
            </ul>
        </div>

    </div>


    <style>
        #dettails .left .title {

            font-family:  "2  Homa";
            font-size: 13pt;
            background: #eee;
            border-radius: 4px;
            padding: 8px;

        }

        #dettails .left {

            width: 700px;
            float: left;
            padding: 20px 0;
        }

        .left .stars {
            float: left;
            margin-left: 13px;
            margin-top: 2px;
        }

        .gray {
            width: 55px;
            height: 9px;
            background: url("public/images/stars.png") 0 -9px repeat;
            margin: 0 auto;
            position: relative
        }

        .red {
            width: 50%;
            height: 9px;
            background: url("public/images/stars.png") repeat;
            position: absolute;
            top: 0;
            left: 0;
        }

        .rate {
            float: left;
            font-size: 8.5pt;
            font-family:  "2  Homa";
            margin-top: 5px;

        }

        #dettails .left .right {

            width: 415px;
            float: right;
        }

        #dettails .left .right h4 {

            font-family:  "2  Homa";
            font-size: 9.9pt;
        }

        #dettails .left .left {

            width: 300px;
            float: left;
        }

        #dettails .colors {
            padding: 0;
            float: right;
            width: 100%;
            margin-bottom: 15px;
        }

        #dettails .colors li {

            width: 46px;
            height: 28px;
            float: right;
            border: 1px solid #ccc;
            margin-left: 6px;
            background: #eee;
            border-radius: 4px;
            overflow: hidden;
            font-size: 11pt;
            font-family:  "2  Homa";
            text-align: center;
            padding-right: 32px;
            position: relative;
        }

        #dettails .colors li .cricle {
            display: inline-block;
            width: 22px;
            height: 22px;
            border-radius: 50%;
            overflow: hidden;
            float: right;
            position: absolute;
            top: 2px;
            right: 9px;
            border: 1px solid #ccc;
            cursor: pointer;
        }

        #dettails .colors li .cricle.active::after {
            content: " ";
            width: 12px;
            height: 12px;
            position: absolute;
            right: 5px;
            top: 6px;
            background: url("public/images/slices.png") no-repeat -169px -83px;
            display: block;

        }

    </style>
    <div class="left">
        <div class="title">
            <?= $productInfo['title']; ?>

            <div class="stars text-center">

                <div class="gray">

                    <div class="red"></div>

                </div>
                <span class="rate">
                    50
                    رای
                    از
                    100
                    رای

                </span>
            </div>

        </div>
        <div class="right">
            <h4>انتخاب رنگ</h4>


            <ul class="colors">
                <?php
                $all_colors = $productInfo['all_colors'];
                foreach ($all_colors as $color) {
                    ?>
                    <li>
                        <span data-id="<?= $color['id'] ?>" ; class="cricle"
                              style="background: <?= $color['hex']; ?>"></span>
                        <?= $color['title']; ?>

                    </li>
                    <?php
                }
                ?>
            </ul>


            <style>
                #selectList {
                    width: 390px;
                    height: 37px;
                    border: 1px solid #ccc;
                    background: #eee;
                    position: relative;
                    text-align: center;
                    cursor: pointer;
                }

                #selectList::before {
                    content: " ";
                    width: 23px;
                    height: 23px;
                    display: block;
                    position: absolute;
                    background: url("public/images/slices.png") no-repeat -138px -79px;
                    top: 8px;
                    right: 9px;
                }

                #selectList::after {
                    content: " ";
                    width: 23px;
                    height: 17px;
                    display: block;
                    position: absolute;
                    background: url("public/images/slices.png") no-repeat -31px -461px;
                    top: 12px;
                    left: 9px;
                }

                #selectList span {
                    font-size: 12pt;
                    line-height: 37px;
                }

                #selectList ul {
                    padding: 0;
                    box-shadow: 0 2px 2px #cacaca;
                    display: none;
                    background: #edf4f4;
                    border: 1px solid #ccc;

                }

                #selectList ul li {
                    text-align: center;
                    font-family:  "2  Homa";
                    font-size: 11pt;
                    padding-bottom: 6px;
                    cursor: pointer;
                }

                #selectList ul li:hover {
                    background: #cdeeff
                }

            </style>
            <h4>انتخاب گارانتی</h4>
            <div id="selectList">


                <span class="yekan zmanattitle">انتخاب کنید</span>

                <ul>
                    <?php
                    $all_garantee = $productInfo['all_garantee'];

                    foreach ($all_garantee as $garantee) {
                        ?>
                        <li data-id="<?= $garantee['id']; ?>">

                            <?= $garantee['title'] ?>

                        </li>
                        <?php
                    }
                    ?>

                </ul>

            </div>


            <style>
                #price {
                    float: right;
                    width: 100%;
                    margin-top: 40px;
                }

                #price .discount {
                    width: 170px;
                    height: 22px;
                    display: block;
                    float: left;
                    margin-left: 70px;
                    margin-top: 5px;

                }

                .discount_right {
                    width: 50px;
                    height: 100%;
                    float: right;
                    display: block;
                    background: #ff0a33;
                    color: #fff;
                    font-family:  "2  Homa";
                    font-size: 11pt;
                    text-align: center;
                }

                .discount_left {
                    width: 120px;
                    height: 100%;
                    float: right;
                    display: block;
                    color: #fff;
                    background: #ff7677;
                    font-family:  "2  Homa";
                    font-size: 11pt;
                    text-align: center;
                }

            </style>
            <div id="price">
                <span class="yekan" style="font-size: 13pt">قیمت :  </span>
                <span class="yekan"
                      style="font-size: 15pt;text-decoration:line-through"><?= $productInfo['price']; ?></span>
                <span class="yekan" style="font-size: 13pt"> تومان </span>
                <span class="discount">
                        <span class="discount_right">تخفیف</span>
                        <span class="discount_left"><?= $productInfo['price_discount']; ?> تومان</span>

                    </span>
            </div>

            <style>

                #priceForYou {
                    float: right;
                    width: 100%;
                    margin-top: 25px;
                }

                #priceForYou span {
                    font-size: 13pt;
                    font-family:  "2  Homa";
                    margin: 0 5px;
                }

                #compar {
                    font-size: 13pt;
                    font-family:  "2  Homa";

                }

                .compar_btn {
                    width: 175px;
                    height: 40px;
                    display: block;
                    background: #42c5ff;
                    float: right;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    overflow: hidden;
                    margin-top: 20px;
                    cursor: pointer;
                    box-shadow: 0 3px 3px #ccc;
                    font-size: 14pt;
                    color: #000;
                    text-align: center;
                    line-height: 37px;
                }

                .addtocart_btn {
                    width: 222px;
                    height: 40px;
                    display: block;
                    background: #54de3e;
                    float: left;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    overflow: hidden;
                    margin-top: 20px;
                    cursor: pointer;
                    box-shadow: 0 3px 3px #ccc;
                    font-size: 14pt;
                    color: #000000;
                    text-align: center;
                    line-height: 37px;

                }

                .addtocart_btn i {
                    width: 53px;
                    height: 100%;
                    float: right;
                    display: block;
                    background: #50b721 url(public/images/slices.png) no-repeat -144px -412px;

                }

            </style>
            <div id="priceForYou">
                <span>قیمت برای شما</span>
                <span style="font-size: 16pt;color: #289207"><?= $productInfo['price_total']; ?></span>
                <span>تومان</span>

            </div>

            <div id="compar">

                <span class="yekan compar_btn">مقایــســه کــردن</span>

                <span class="yekan addtocart_btn" onclick="addToBasket(<?= $productInfo['id']; ?>)">
                        افــزودن به سـبد خرید
                        <i></i>
                    </span>

            </div>

            <script>


                var garantee_selected = '';

                function addToBasket(productId) {
                    var color = $('.colors').find('.cricle.active').attr('data-id');
                    console.log(color);

                    var url = '<?= URL ?> product/addtobasket/<?= $productInfo['id'];?>/'+color+'/'+garantee_selected;
                    var data = {};
                    $.post(url, data, function (msg) {
                        alert(msg);
                    })

                }
            </script>


            <style>
                #services-feature {

                    width: 710px;
                    height: 80px;
                    border-radius: 4px;
                    background: #fff;
                    margin: 8px 0;
                    overflow: hidden;
                    position: relative;
                    top: 15px;
                    border: 1px solid #eee;
                }

                #services-feature ul {
                    padding: 0;
                    height: 100%;

                }

                #services-feature ul li {

                    width: 142px;
                    float: right;
                    height: 100%;
                }

                #services-feature ul li a {
                    display: block;
                    height: 100%;
                    font-size: 10.7pt;
                    line-height: 72px;
                    padding: 0 10px;
                    cursor: pointer;
                }

                #services-feature ul li a i {
                    width: 24px;
                    height: 24px;
                    float: right;
                    display: inline-block;
                    margin-left: 10px;
                    margin-top: 24px;
                    background: url("public/images/slices.png");
                }


            </style>


            <div id="services-feature">

                <ul>
                    <li>
                        <a class="yekan">
                            <i style="background-position: -210px -473px"></i>
                            7 روز ضمانت بازگشت
                        </a>
                    </li>


                    <li>
                        <a class="yekan">
                            <i style="background-position: -263px -473px"></i>
                            پرداخت در محل
                        </a>
                    </li>

                    <li>
                        <a class="yekan">
                            <i style="background-position: -157px -473px"></i>
                            ضمانت اصل بودن کالا
                        </a>
                    </li>

                    <li>
                        <a class="yekan">
                            <i style="background-position:-326px -473px"></i>
                            تحویل اکسپرس
                        </a>
                    </li>

                    <li>
                        <a class="yekan">
                            <i style="background-position: -104px -473px"></i>
                            تضمین بهترین قیمت
                        </a>
                    </li>


                </ul>

            </div>
        </div>


        <div class="left"></div>


    </div>
</div>
<script>


    $('.colors li').click(function () {
        $('.cricle').removeClass('active');

        $('.cricle', this).toggleClass('active');

    })

    $('#selectList').click(function () {

        var ulTag = $('ul', this);
        ulTag.slideToggle(300);

    });


    $('#selectList ul li ').click(function () {
        var id = $(this).attr('data-id');
        garantee_selected=id;
        console.log(garantee_selected);
        var txt = $(this).text();

        $('#selectList .zmanattitle').text(txt);


    });
</script>