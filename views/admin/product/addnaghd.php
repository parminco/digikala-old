<script src="public/ckeditor/ckeditor.js"></script>
<?php
require('views/admin/layoat.php');

$productInfo = $data['productInfo'];
$naghdInfo = $data['naghdInfo'];

$edit = 0;

if (isset($naghdInfo['title'])){
    $edit=1;
}

?>

<div class="left">
    <p class="title">
        <?php
        if ($edit == 0) {
            ?>
            افزودن نقد وبررسی

            <?php
        } else {
            ?>
            ویرایش نقدوبررسی

            <?php
        }
        ?>
        <span style="color: red">

            (<?= $productInfo['title'];?>)
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
    <form action="adminproduct/addnaghd/<?=@$productInfo['id'];?>/<?=@$naghdInfo['id'];?>" method="post" enctype="multipart/form-data">


        <div class="row">
            <span class="span_title">عنوان نقد و بررسی:</span>
            <input type="text" name="title" value="<?=@$naghdInfo['title'];?>">
        </div>

        <div class="row">
            <span class="span_title">توضیحات</span>
            <textarea  class="editor1" id="editor1" name="description"><?=@$naghdInfo['description'];?></textarea>

        </div>
<script>
    CKEDITOR.replace('editor1',{});
</script>


        <a class="btn_green_small" onclick="submitForm();">اجرای عملیات</a>

    </form>
</div>
</div>

