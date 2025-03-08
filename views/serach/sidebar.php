<style>

    #sidebar {
        width: 250px;
        border: 1px solid #ccc;
        height: 500px;
        float: right;
    }

    #sidebar p {

        height: 30px;
        background: #666;
        color: #fff;
        padding-top: 5px;
        padding-right: 5px;
        margin: 0;
        font-size: 12pt;
        line-height: 23px;
    }

    #sidebar .arrow {

        background: url("public/images/subcatarrow.png") no-repeat;
        display: block;
        width: 20px;
        height: 11px;
        float: left;
        margin-left: 12px;
        margin-top: 7px;
    }

    #sidebar ul {
        font-family: yekan;
        font-size: 11pt;
        padding-right: 20px;
    }

    .filter_ul {
        padding-right: 5px;
    }

    .filter_ul li {
        font-family: '2  Homa';
        font-size: 10.2pt;
        position: relative;
    }

    .filter_ul .title {
        font-size: 13.5pt;
    }

    .check_lable {
        width: 16px !important;
        height: 16px;
        display: block;
        position: absolute;
        top: 4px;
        right: 2px;
        border: 1px solid #c8c8c8;
        border-radius: 4px;
        overflow: hidden;
        background: url("public/images/a-checkbox-medium-sprite.png") no-repeat scroll -2px -2px;

    }

    .check_lable.checked {
        background: url("public/images/a-checkbox-medium-sprite.png") no-repeat scroll -2px -32px;
        z-index: 1 !important;
        position: absolute;
    }

    .check_input {
        width: 0;
        height: 0;
        z-index: 2 !important;
        position: relative;
        opacity: 0;
        cursor: pointer;
        margin-left: 9px;
    }

    .product_color {

        margin-left: 4px;
        width: 7px;
        height: 15px;
        display: inline-block;
        position: relative;
        top: 4px;
    }

    .margin {
        margin-top: 4px;
        font-family: '2  Homa';

    }
    .colorsSpan {
        border: 1px solid #cccc;
        width: 15px;
        height: 15px;
        border-radius: 50%;
        overflow: hidden;
    }
</style>

<div id="sidebar">

    <p>
        <span class="arrow"></span> گوشی موبایل
    </p>

    <ul style="margin-top: 15px;">
        <li class="margin">
            کالای دیجیتال
            <ul>
                <li class="margin">
                    موبایل
                    <ul>
                        <li class="margin">
                            گوشی موبایل
                        </li>
                    </ul>

                </li>
            </ul>
        </li>

    </ul>

    <div class="horizental_row"></div>


    <?php
    $filterRight = $data['attrRight'];

    foreach ($filterRight as $attr) {
        ?>
        <ul class="filter_ul">

            <li class="title">
                بر اساس
                (
                <?= $attr['title'] ?>
                )
            </li>

            <?php
            $attrValuse = $attr['values'];
            foreach ($attrValuse as $val) {
                ?>
                <li><label class="check_lable"></label>
                    <input name="attr-<?= $attr['id'] ?>[]" value="<?= $val['id'] ?>" type="checkbox"
                           class="check_input">
                    <?= $val['val'] ?>
                </li>


                <?php


            }
            ?>
        </ul>

        <div class="horizental_row"></div>
        <?php
    }
    ?>

    <ul class="filter_ul">
        <li class="title">بر اساس رنگ</li>
        <?php
        $colors=$data['colors'];
        foreach ($colors as $color)
        {
            ?>
        <li>
            <label class="check_lable"></label>
            <input name="colorSelected[]" value="<?= $color['id']?>" type="checkbox" class="check_input">
            <span class="product_color colorsSpan"  style=";background-color:<?= $color['hex']; ?>"></span>
           <?=$color['title']?>
        </li>
        <?php

        }
        ?>
    </ul>


    <script>
        $('.check_input').click(function () {
            if ($(this).is(':checked')) {

                $(this).parents('li').find('.check_lable').addClass('checked');
            } else {
                $(this).parents('li').find('.check_lable').removeClass('checked');
            }
            doSearch();
        })

    </script>


</div>
