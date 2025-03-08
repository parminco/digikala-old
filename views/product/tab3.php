<style>
    #commets_result {
        width: 510px;
        float: right;
    }

    #commets_send {
        width: 630px;
        float: right;
        margin-right: 30px;
    }

    .navbar .row {
        width: 100%;
        float: right;
    }

    .navbar .row .row .title {
        float: right;
        font-size: 11pt;
        width: 155px;
        display: block;

    }

    .navbar .row ul {

        padding: 0;
        height: 10px;
        float: left;
        margin-top: 8px;

    }

    .navbar .row ul li {
        width: 64px;
        height: 100%;
        float: right;
        background: #ccc;
        border-left: 1px solid #fff;
    }

    .navbar .row ul li span {
        height: 100%;
        display: block;
        background: #2badd0;
    }

    .navbar .row ul li span.full {
        width: 100%;
    }

    #commets_send a.btn {
        width: 160px;
        height: 43px;
        border-radius: 21px;
        background: #4abdba;
        display: block;
        float: left;
        margin-left: 64px;
        cursor: pointer;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
        text-align: center;
        font-size: 15pt;
        font-family: '2  Homa';
        line-height: 39px;
        color: #fff;
    }


</style>


<div id="commets_result" class="navbar">
    <?php

    $comment_params = $data[0];

    ?>


    <p style="font-size: 14pt;">
        نظرات کاربران به :

        <span style="font-size: 12pt;">گوشی ساسمونگ مدل xyz</span>

    </p>

    <?php
    foreach ($comment_params as $row) {
        ?>
        <div class="row">
            <span class="title"><?= $row['title']; ?></span>

            <ul>
                <li><span></span></li>
                <li><span></span></li>
                <li><span></span></li>
                <li><span></span></li>
                <li><span style="width: 40%"></span></li>

            </ul>

        </div>

        <?php
    }
    ?>

</div>

<div id="commets_send">
    <p style="font-size: 13pt">شما هم می‌توانید در مورد این کالا نظر بدهید</p>


    <p style="font-size: 11pt">برای ثبت نظر، لازم است ابتدا وارد حساب کاربری خود شوید.
        اگر این محصول را قبلا از دیجی‌کالا خریده باشید، نظر شما به عنوان مالک محصول ثبت خواهد شد.</p>


    <div>
        <a  href="addcomment/index/" class="btn">افزودن نــظــر جدید</a>
    </div>
</div>


<style>

    .horizental_row {
        height: 1px;
        margin: 15px;
        background: #ccc;

    }

    #comments {
        float: right;
        width: 98%;

    }

    #comments .comments {
        float: right;
        width: 100%;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .15);
        margin-bottom: 28px;
    }

    #comments .comments .comments_header {
        width: 100%;
        height: 65px;
        background: #57e3e0;
        font-size: 13pt;

    }

    #comments .comments .comments_header .right {
        float: right;

    }

    #comments .comments .comments_header .left {
        float: left;

    }

    #comments .comments .comments_header .right span {
        display: block;
        font-size: 13pt;

        padding: 1px 25px;

    }

    #comments .comments .comments_header .left span {
        display: block;
        font-size: 12pt;
        padding: 3px 15px;
        float: left;
        margin: 15px 8px;
    }

    #comments .comments .comments_header .left .like {
        width: 65px;
        height: 25px;
        background: #fff;
        border-radius: 4px;
        overflow: hidden;
        cursor: pointer;
    }

    #comments .comments .comments_header .left .like span {
        margin: 0;
        padding: 0;
    }

    #comments .comments .comments_header .left .dislike span {
        margin: 0;
        padding: 0;
    }

    #comments .comments .comments_header .left .dislike {
        width: 65px;
        height: 25px;
        background: #fff;
        border-radius: 4px;
        overflow: hidden;
        cursor: pointer;
    }

    #comments .comments .comments_header .left .like i {
        width: 20px;
        height: 20px;
        display: block;
        float: right;
        background: url("public/images/slices.png") no-repeat -305px -190px;
        margin: 4px 5px;
    }

    #comments .comments .comments_header .left .dislike i {
        width: 20px;
        height: 20px;
        display: block;
        float: right;
        background: url("public/images/slices.png") no-repeat -267px -193px;
        margin: 4px 5px;
    }


</style>

<div id="comments">
    <p style="font-size: 13pt">نظرات کاربران</p>
    <div class="horizental_row"></div>

    <?php
    $comments = $data[1];

    foreach ($comments as $row) {
        ?>

        <div id="comment<?=$row['id']?>" class="comments">


            <div class="comments_header">
                <div class="right">
                    <span class="name">امیر حسین نودهی</span>
                    <span class="date" style="font-size: 11pt"><?= $row['tarikh'] ?></span>
                </div>
                <div class="left">
                            <span class="dislike">
                                <i></i>
                                <span><?= $row['dislikecount'] ?></span>
                            </span>
                    <span class="like">
                                <i></i>
                                <span><?= $row['likecount'] ?></span>
                            </span>
                    <span>ایا این نظر  مفید بود؟</span>

                </div>

            </div>


            <style>
                #comments .comments .comments_content {
                    float: right;
                    width: 98%;
                    padding: 10px;

                }

                #comments .comments .comments_content .right {

                    float: right;
                    width: 450px;
                }

                #comments .comments .comments_content .left {

                    width: 745px;
                    float: left;
                    margin-left: -100px;

                }

                #comments .comments .comments_content .left .top {
                    font-size: 14pt;

                }

                #comments .comments .comments_content .left .center {
                    float: right;
                    width: 100%;

                }

                #comments .comments .comments_content .left .bottom {
                    font-size: 12pt;
                    float: right;
                    width: 100%;
                    margin-top: 15px;


                }

                .ghovat {
                    width: 280px;
                    float: right;
                    margin-right: 15px;

                    font-size: 11.5pt;
                }

                .zaaf {
                    width: 280px;
                    float: right;
                    margin-right: 15px;
                    font-size: 11.5pt;
                }
            </style>
            <div class="comments_content ">
                <div class="right">

                    <?php
                    $scores = unserialize($row['param']);
                    $number=5;
                    foreach ($comment_params as $param) {
                        $param_id = $param['id'];
                        $score = $scores[$param_id]

                        ?>

                        <div class="navbar">
                            <div class="row">
                                <span class="title"><?= $param['title'] ?></span>

                                <ul>


                                    <?php
                                    for ($i = 0; $i < $score; $i++) {
                                        ?>
                                        <li style="width: 50px;height: 95%;"><span></span></li>

                                        <?php
                                    }
                                    $score = (int) $score;
                                    $score=5-$score;
                                    for ($i = 0; $i < $score; $i++) {
                                        ?>

                                        <li style="width: 50px;height: 95%;"><span style="width: 0%"></span></li>

                                        <?php
                                    }
                                    ?>





                                </ul>

                            </div>
                        </div>
                        <?php
                    }
                    ?>


                </div>

                <div class="left">

                    <div class="top"><?= $row['title'] ?></div>
                    <div class="center">

                        <div class="ghovat">
                            <span style="color: green">نکات قوت</span>

                            <p><?= $row['posotive'] ?></p>
                        </div>

                        <div class="zaaf">
                            <span style="color: red">نقاط ضعف</span>
                            <p><?= $row['negative'] ?></p>
                        </div>

                    </div>
                    <div class="bottom"><?= $row['matn'] ?></div>
                </div>
            </div>

        </div>

        <?php
    }
    ?>
</div>

