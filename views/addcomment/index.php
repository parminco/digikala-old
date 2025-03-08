<script src="public/slider/jquery-ui.min.js"></script>
<script src="public/slider/slider.js"></script>
<link href="public/slider/style.css" rel="stylesheet">
<style>
    #main {
        width: 1200px;
        height: 1200px;
        margin: 10px auto !important;
        background: #fff;
        padding: 5px;
        border-radius: 4px;
        overflow: hidden;
        font-family: '2  Homa';
    }

    .btn {
        width: 190px;
        height: 38px;
        border-radius: 4px;
        background: #40db31;
        cursor: pointer;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
        text-align: center;
        font-size: 13pt;
        line-height: 37px;
        color: #000;
        display: block;
    }

    #main > form > .right {
        width: 350px;
        float: right;
        margin-top: 30px;
    }

    #main > form > .right img {
        width: 350px;
        height: 350px;
    }

    #main > form > .left {
        width: 815px;
        float: left;
        margin-top: 30px;
    }

    span.titr {
        font-size: 15pt;
        width: 100%;
        display: block;

    }

    span.title {
        font-size: 12pt;
        width: 100%;
        display: block;

    }

    .left .right {
        width: 350px;
        float: right;
        margin-top: 20px;
    }

    .left .left {
        width: 350px;
        float: right;
        margin-top: 20px;
        margin-right: 20px;
    }

    .row {
        width: 100%;
        margin-top: 20px;
        float: right;
    }

    .comment {
        width: 100%;
        float: right;
        margin-top: 50px;
        padding: 0 20px;
    }

    .input {
        border: 1px solid #ccc;
        width: 300px;
        height: 20px;
        font-family: '2  Homa';
        font-size: 11pt;
        padding: 5px;
    }

    .comment textarea {
        width: 90%;
        height: 200px;
    }

    .dash {
        border-top: 1px solid #ccc;
        width: 97%;
        display: block;
        float: right;
    }

    p {

        font-size: 11pt;
    }
</style>


<div id="main">
    <?php
    $productInfo = $data['productInfo'];

    ?>
    <form method="post" action="addcomment/savecomment/<?= $productInfo['id'] ?>">
        <div class="right">
            <img src="public/images/products/1/product_350.jpg">
            <span style="text-align: center" class="title">گوشی موبایل شیائومی مدلHC4500</span>
        </div>

        <div class="left">
            <span class="titr">امتیاز شما به این محصول</span>
            <?php
            $commentInfo=[];
            $commentInfo = $data['commentInfo'];
            $comment_result = unserialize($commentInfo['param']);

            $params = $data['params'];
            $number = sizeof($params);
            $right = ceil($number / 2);
            $left = $number - $right;

            $params_right = array_slice($params, 0, $right);
            $params_left = array_slice($params, $right, $left);
            ?>
            <div class="right">

                <?php
                foreach ($params_right as $row) {
                    ?>
                    <div class="row">
                        <p><?= $row['title'] ?></p>
                        <input data-val="<?php

                        if (isset( $comment_result[1]))
                        {
                            echo $comment_result[$row['id']];
                        }
                        else {
                            echo '3';
                        }
                       ?>" name="param<?= $row['id'] ?>" value="<?php
                        if (isset( $comment_result[1]))
                        {
                            echo $comment_result[$row['id']];
                        }
                        else {
                            echo '3';
                        }
                        ?>"
                               type="hidden"
                               class="flat-slider">
                    </div>
                <?php } ?>


            </div>

            <div class="left">
                <?php
                foreach ($params_left as $row) {
                    ?>
                    <div class="row">
                        <p><?= $row['title'] ?></p>
                        <input data-val="<?php
                        if (isset( $comment_result[1]))
                        {
                            echo $comment_result[$row['id']];
                        }
                        else {
                            echo '3';
                        }
                        ?>" name="param<?= $row['id'] ?>" value="<?php
                        if (isset( $comment_result[1]))
                        {
                            echo $comment_result[$row['id']];
                        }
                        else {
                            echo '3';
                        }
                        ?> "
                               type="hidden" class="flat-slider">
                    </div>
                <?php } ?>

            </div>
        </div>


        <div class="comment">

            <div class="row"><span class="dash"></span></div>

            <div class="row">
            <span class="titr">
                دیگران را با نوشتن نقد، بررسی و نظرات خود، برای انتخاب این محصول راهنمایی کنید.
            </span>
            </div>

            <div class="row">
                <span class="title"> عنوان نقد و بررسی:</span>
                <input name="title" type="text" class="input" value="<?= @$commentInfo['title']; ?>">
            </div>
            <div class="row">
                <span class="title">نقاط قوت:</span>
                <input name="posotive" type="text" class="input" value="<?= @$commentInfo['posotive']; ?>">
            </div>
            <div class="row">
                <span class="title">نقاط ضعف:</span>
                <input name="negative" type="text" class="input" value="<?= @$commentInfo['negative']; ?>">
            </div>
            <div class="row">
                <span class="title">متن نظر:</span>
                <textarea name="comment" type="text" class="input"><?= @$commentInfo['matn']; ?></textarea>
            </div>
            <div class="row">
                <span onclick="submitForm();" class="btn">ثبت نظر</span>

            </div>

        </div>
    </form>

</div>

<script>
    function submitForm() {
        $('form').submit();
    }

    $('.flat-slider').flatslider({
        min: 1,
        max: 5,
        step: 1,
        value: 3,
        range: 'min',
        disabled: false
    });
</script>