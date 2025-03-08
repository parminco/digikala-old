<?php
$active = 'category';
require('views/admin/layoat.php');
$attrvalues = $data['attrValues'];
$attrInfo = $data['attrInfo'];
?>

<div class="left">
    <p class="title">
        مقادیر پیش فرض ویژگی :
        <span style="color: red">

            (<?= $attrInfo['title'] ?>)
        </span>
    </p>


    <style>
        .row {
            width: 100%;
            float: right;
            margin-top: 5px;
        }

        .span_title {
            display: inline-block;
            width: 150px;
            font-size: 13pt;
        }

        input {
            width: 500px;
            height: 24px;
            border-radius: 3px;
            border: 1px solid #cccccc;
        }

        .span_item {
            background: #ff4785;
            display: inline-block;
            font-size: 12.5pt;
            padding: 7px 22px;
            position: relative;
            text-align: center;
            color: #cccccc;
            border: 1px solid #cccccc;
            height: 21px;
            margin-right: 2px;
        }


    </style>
    <form action="admincategory/attrval/<?= $attrInfo['id'] ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="submited">
        <?php
        foreach ($attrvalues as $val) { ?>

            <div class="row">
                <span class="span_title">مقدار ویژگی:</span>
                <input type="text" name="attrval-<?= $val['id'] ?>" value="<?= $val['val'] ?>">

            </div>

        <?php }
        ?>


        <?php
        $size = sizeof($attrvalues);
        for ($i = 1; $i < 10 - $size; $i++) { ?>

            <div class="row">
                <span class="span_title">مقدار ویژگی:</span>
                <input type="text" name="attrvalnew[]">

            </div>

        <?php }
        ?>

        <a class="btn_green_small" onclick="submitForm();">اجرای عملیات</a>

    </form>
</div>
</div>

