
<style>

    #sidbar_right {

        width: 290px;
        float: right;
        height: 200px;
    }

    #digikala_tv li a {

        position: relative;
        display: block;
        position: relative;
    }

    #digikala_tv li a .image {
        width: 100%;
        height: 160px;
        border-radius: 4px;
    }

    #digikala_tv li a::before {

        content: " ";
        width: 100%;
        height: 160px;
        background: rgba(0, 0, 0, 0.3);
        display: block;
        position: absolute;
        border-radius: 4px;

    }

    #digikala_tv li {
        margin-bottom: 12px;
    }

    #digikala_tv li .cricle {
        transition: all 1s ease;
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: block;
        background: rgba(255, 255, 255, 0.3);
        position: absolute;
        top: 50px;
        left: 0;
        right: 0;
        margin: auto;
        text-align: center
    }

    #digikala_tv li:hover .cricle {
        background: rgba(255, 255, 255, .5) !important;
    }

    #digikala_tv li .play_icon {
        margin: auto;
        margin-top: 23px;

    }

    #sidbar_right_ul li img {
        width: 290px;
        height: 265px;

    }

    #sidbar_right_ul li img {
        height: 265px;
        border-radius: 4px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, .3);
        overflow: hidden;
        margin-bottom: 12px;

    }

    #last_news_sidbar {

        width: 290px;
        background: #fff;
        margin-top: 1px;
        border-radius: 4px;
        overflow: hidden;
    }

    #last_news_sidbar h3 {
        background: #f7f9fa;
        height: 40px;
        color: #7f8a9c;
        padding-right: 10px;
        line-height: 36px;
        margin: 0;

    }

    #last_news_sidbar ul li a {
        padding: 10px;
        display: block;
        float: right;
    }

    #last_news_sidbar .col_right {

        float: right;
    }

    #last_news_sidbar .col_left {

        float: right;
        width: 170px;
        padding-right: 13px;
    }

    #last_news_sidbar p {
        margin: 0;
    }

    #last_news_sidbar .col_right img {
        border-radius: 50%;
    }
</style>


<div id="sidbar_right">
    <img src="public/images/Euro2016-290.52.jpg" style="margin: 10px 0;border-radius: 4px">

    <ul id="digikala_tv" style="padding: 0; ">
        <li>
            <a>
                <img class="image" src="public/images/TV_100.jpg">
                <span class="cricle">
                        <img src="public/images/play.png" class="play_icon">
                    </span>
            </a>
        </li>

        <li>
            <a>
                <img class="image" src="public/images/Motorola_Moto_360_1_Min_Intro.jpg">
                <span class="cricle">
                        <img src="public/images/play.png" class="play_icon">
                    </span>
            </a>
        </li>
    </ul>


    <ul id="sidbar_right_ul" style="padding: 0; ">
        <li>
            <a>
                <img src="public/images/li1.jpg">

            </a>
        </li>

        <li>
            <a>
                <img src="public/images/li2.jpg">

            </a>
        </li>

        <li>
            <a>
                <img src="public/images/li3.jpg">

            </a>
        </li>
    </ul>

    <div id="last_news_sidbar">

        <h3 class="yekan fontsm">تازه ترین خبرها</h3>

        <ul style="padding: 0;">
            <li>
                <a>
                    <div class="col_right">
                        <img src="public/images/SanDisk_Headquarters_Milpitas-60x60.jpg" width="70px" height="70px">
                    </div>

                    <div class="col_left">
                        <p class="yekan fontsm">کارت حافظه های 256 گیگابایتی سن دیسک معرفی شدند</p>

                        <p class="yekan" style="font-size: 9pt;color: #8c98ac">سه شنبه 23 مرداد 97</p>
                    </div>
                </a>
            </li>

            <li>
                <a>
                    <div class="col_right">
                        <img src="public/images/iPhone7-headphone-3-60x60.jpg" width="70px" height="70px">
                    </div>

                    <div class="col_left">
                        <p class="yekan fontsm">اولین تصاویر از ایفون 7 با پورت ... لو رفت</p>

                        <p class="yekan" style="font-size: 9pt;color: #8c98ac">سه شنبه 23 مرداد 97</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
