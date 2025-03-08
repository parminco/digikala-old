<?php
$active = 'product';
require('views/admin/layoat.php');

$attr = $data['attr'];
$productInfo = $data['productInfo'];

?>

<div class="left">
    <p class="title">
        ویژگی ها محصول :
        <span style="color: red">

            (<?= $productInfo['title']; ?>)
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

        select {
            padding: 3px;
            height: 35px;
            width: 350px;
            border: 1px solid #cccccc;
        }

        option {
            padding: 3px;
            font-size: 10pt;
        }

        textarea {
            width: 500px;
            border: 1px solid #cccccc;
            height: 250px;
            vertical-align: top;
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

        .span_item img {
            width: 17px;
            position: absolute;
            right: 0px;
            top: 0px;
            cursor: pointer
        }
        a.viwe{
            color: black;
        }
        a.viwe:hover{
            color: #595959;
        }
    </style>
    <form action="" method="post" enctype="multipart/form-data">

        <input type="hidden" name="submited">
        <?php

        foreach ($attr as $row) {
            ?>
            <div class="row">
                <span class="span_title"><?= $row['title'] ?></span>


                <select autocomplete="off" name="value<?=$row['id']?>">
                    <?php
                    $values = $row['values'];
                    foreach ($values as $val) {
                        if ($row['idval'] == $val['id']) {
                            $selected = 'selected';
                        } else {
                            $selected = '';
                        }
                        ?>

                        <option value=" <?= $val['id'] ?>" <?php if ($selected == 'selected') {
                            echo 'selected="selected"';
                        } ?>>
                            <?= $val['val'] ?>
                        </option>

                        <?php
                    }
                    ?>

                </select>
                <a class="viwe" href="admincategory/attrval/<?=$row['id']?>">مشاهده مقادیر پیش فرض</a>
                <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
            </div>

            <?php

        } ?>

        <a class="btn_green_small" onclick="submitForm();">اجرای عملیات</a>

    </form>
</div>
</div>

