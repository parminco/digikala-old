<?php
require('views/admin/layoat.php');
$edit = $data['edit'];
$categoryInfo = $data['categoryInfo'];

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
            ایجاد دسته جدید
            <?php

        } else {
            ?>
            ویرایش دسته
            <?php
        }
        ?>
    </p>
    <form action="admincategory/addcategory/<?=$categoryInfo['id'];?>/<?=$edit;?>" method="post">


        <div class="row">
            <span class="span_title">عنوان دسته:</span>
            <input type="text" name="title" value="<?php if ($edit==''){}else{echo $categoryInfo['title'];}  ?>">
        </div>

        <div class="row">
            <span class="span_title">
                دسته والد
            </span>
            <select name="parent">
                <option>
                    انتخاب کنید
                </option>
                <?php
                $category = $data['category'];
                $parentId = $data['parentId'];
                if ($edit == '') {
                    $selectedId = $parentId;
                } else {
                    $selectedId=$categoryInfo['parent'];
                }

                foreach ($category as $row) {
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
