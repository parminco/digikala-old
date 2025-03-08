<?php
require('views/admin/layoat.php');
$editInfo = $data['editInfo'];
$edit = '';
if (isset($editInfo['title'])) {
    $edit = 1;
}
//$attrInfo = $data['attrInfo'];
$categoryInfo = $data['categoryInfo'];
$parentId = $data['parentId'];

?>

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
    }

    option {
        padding: 3px;
        font-size: 10pt;
    }

</style>
<div class="left">
    <p class="title">
        <?php
        if ($edit == '') {
            ?>
            ایجاد ویژگی جدید
            <?php

        } else {
            ?>
            ویرایش ویژگی
            <?php
        }
        ?>

        (
        <a style="color: red" href="admincategory/showattr/<?= $categoryInfo['id']; ?>">


            دسته
            <?= $categoryInfo['title']; ?>

        </a>
        <?php
        if (isset($attrInfo['id'])) {
            ?>
            -
            <span style="color: red">

            ویژگی:
                <?= $attrInfo['title']; ?>


</span>
            <?php
        }
        ?>
        )

    </p>
    <form action="admincategory/addattr/<?= $categoryInfo['id']; ?>/<?= $data['parentId'] ?>/<?= $editInfo['id'] ?>"
          method="post">


        <div class="row">
            <span class="span_title">عنوان ویژگی:</span>
            <input type="text" name="title" value="<?php if ($edit == '') {
            } else {
                echo $editInfo['title'];
            } ?>">
        </div>

        <div class="row">
            <span class="span_title">
                ویژگی والد
            </span>
            <select name="parent">
                <option>
                    انتخاب کنید
                </option>
                <?php
                $attr = $data['attr'];
                $parentId = $data['parentId'];

                    $selectedId = $parentId;

                foreach ($attr as $row) {
                    if ($row['id'] == $selectedId) {
                        $x = 'selected';
                    } else {
                        $x = '';
                    }
                    ?>
                    <option value="<?= $row['id']; ?>" <?= $x; ?>>
                        <?= $row['title']; ?>
                    </option>
                    <?php
                }
                ?>
            </select>
        </div>

        <a class="btn_green_small" onclick="submitForm();">اجرای عملیات</a>

    </form>
</div>
</div>
