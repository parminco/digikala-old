<script src="public/ckeditor/ckeditor.js"></script>
<?php
require('views/admin/layoat.php');

$productInfo = $data['productInfo'];

$edit = 0;

if (isset($productInfo['title'])) {
    $edit = 1;
}


?>

<div class="left">
    <p class="title">
        <?php
        if ($edit == 0) {
            ?>
            ایجاد محصول جدید

            <?php
        } else {
            ?>
            ویرایش محصول

            <?php
        }
        ?>
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
            width: 200px;
            height: 24px;
            border-radius: 3px;
            border: 1px solid #cccccc;
        }

        select {
            padding: 3px;
            height: 35px;
            width: 203px;
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
    </style>
    <form action="adminproduct/addproduct/<?= @$productInfo['id']; ?>" method="post" enctype="multipart/form-data">


        <div class="row">
            <span class="span_title">عنوان محصول:</span>
            <input type="text" name="title" value="<?= @$productInfo['title']; ?>">
        </div>

        <div class="row">
            <span class="span_title">
                دسته والد
            </span>
            <?php

            $category = $data['category'];
            $categoryId = @$productInfo['cat'];

            ?>
            <select name="categoryId">
                <option>
                    انتخاب کنید
                </option>
                <?php
                foreach ($category as $row) {
                    if ($row['id'] == $categoryId) {
                        $selected = 'selected';
                    } else {
                        $selected = '';
                    }
                    ?>
                    <option value="<?= $row['id']; ?>"<?= $selected; ?>>
                        <?= $row['title']; ?>
                    </option>
                    <?php
                }
                ?>

            </select>
        </div>

        <div class="row">
            <span class="span_title">قیمت:</span>
            <input type="text" name="price" value="<?= @$productInfo['price']; ?>">
        </div>

        <div class="row">
            <span class="span_title">تصویر:</span>
            <input type="file" name="image">
            <?php
            if (isset($productInfo['title'])) {
                ?>
                <div style="width: 220px;height: 220px;display: inline-block;float: left;
                        background:url(public/images/products/<?= $productInfo['id'] ?>/product_220.jpg)">
                </div>
                <?php
            }
            ?>

        </div>

        <div class="row">
            <span class="span_title">معرفی اجمالی:</span>
            <textarea class="editor1" id="editor1" name="introduction"><?= @$productInfo['introduction']; ?></textarea>
        </div>


        <div class="row">
            <span class="span_title">تعداد موجود:</span>
            <input type="text" name="teadad_mojood" value="<?= @$productInfo['teadad_mojood']; ?>">
        </div>


        <div class="row">
            <span class="span_title">میزان تخفیف(%):</span>
            <input type="text" name="discount" value="<?= @$productInfo['discount']; ?>">
        </div>

        <div class="row">
            <span class="span_title">
                انتخاب رنگ:
            </span>

            <?php

            $color = $data['color'];


            ?>
            <select autocomplete="off">
                <option>
                    انتخاب کنید
                </option>
                <?php


                foreach ($color as $row) {

                    ?>
                    <option onclick="addColor('<?= $row['title']; ?>',this,'<?= $row['id']; ?>','<?= $row['hex']; ?>');"
                            value="<?= $row['id']; ?>">
                        <?= $row['title']; ?>
                    </option>


                    <?php
                }
                ?>


            </select>

            <?php

            $colorsInfo = $productInfo['colorsInfo'];
            $colorsInfo = array_filter($colorsInfo);
            foreach ($colorsInfo as $row) {
                ?>
                <span style="background:<?= $row['hex'] ?>" class="span_item">
                    <input type="hidden" value="<?= $row['id'] ?>" name="color[]">
                    <?= $row['title'] ?>
                    <img src="public/images/close-icon.gif" onclick="removeItem(this);">
                </span>
                <?php
            }
            ?>

        </div>


        <div class="row">
            <span class="span_title">
                انتخاب گارانتی:
            </span>
            <select autocomplete="off">
                <option>
                    انتخاب کنید
                </option>
                <?php
                $garantee = $data['garantee'];

                foreach ($garantee as $row) {

                    ?>
                    <option onclick="addGarantee('<?= $row['title']; ?>',this,'<?= $row['id']; ?>');"
                            value="<?= $row['id']; ?>">
                        <?= $row['title']; ?>
                    </option>
                    <?php
                }
                ?>
            </select>
            <?php
            $garanteesInfo = $productInfo['garanteesInfo'];
            $garanteesInfo = array_filter($garanteesInfo);
            foreach ($garanteesInfo as $row) {
                ?>
                <span class="span_item">
                    <input type="hidden" name="garantee[]" value="<?= $row['id'] ?>">
                    <?= $row['title'] ?>
                    <img onclick="removeItem(this);" src="public/images/close-icon.gif">
                </span>
                <?php
            }
            ?>
        </div>

        <a class="btn_green_small" onclick="submitForm();">اجرای عملیات</a>

    </form>
</div>
</div>

<script>
    function addColor(colorName, tag, colorId, colorCod) {
        var $optionTag = $(tag);
        var spanTag = '<span style="background: ' + colorCod + '" class="span_item"><input type="hidden" name="color[]" value="' + colorId + '">' + colorName + '<img onclick="removeItem(this);" src="public/images/close-icon.gif"></span>';
        var divRow = $optionTag.parents('.row');
        divRow.append(spanTag);
    }

    function addGarantee(GaranteeName, tag, GaranteeId) {
        var $optionTag = $(tag);
        var spanTag = '<span style="background: ' + GaranteeName + '" class="span_item"><input type="hidden" name="garantee[]" value="' + GaranteeId + '">' + GaranteeName + '<img onclick="removeItem(this);" src="public/images/close-icon.gif"></span>';
        var divRow = $optionTag.parents('.row');
        divRow.append(spanTag);
    }


    function removeItem(tag) {
        var removeTag = $(tag);
        var spanItem = removeTag.parents('.span_item');
        spanItem.remove();
    }


    CKEDITOR.replace('editor1', {});
</script>