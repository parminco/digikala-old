<?php
$active = 'slider';
require('views/admin/layoat.php');

$slider = $data['slider'];

?>
<style>
    .row {
        width: 100% !important;
        float: right !important;
        margin-top: 5px;

    }

    .title1 {
        display: block;
        float: right;
        margin-left: 10px;
        margin-right: 10px;
        margin-top: 4px;
        font-size: 8pt;
        font-family: 'IRYekan';
        width: 152px;
    }

    .input {
        width: 204px;
        border: 1px solid #ccc;
        height: 21px;
        padding: 3px;
    }

    .btn_green_small_new {
        background: #3cbd0d;
        border-radius: 4px;
        color: #FFF;
        float: left;
        font-size: 11pt;
        margin-bottom: -2px;
        padding: 2px 16px;
        text-align: center;
        margin-right: -63px;
        cursor: pointer;
        overflow: hidden;
        margin-top: -6px;
        position: relative;
        left: 63px;
        top: 6px;
        height: 30px;
        line-height: 29px;
    }

    .w300 {
        width: 300px;
    }
</style>
<div class="left">
    <p class="title">
        <a>مدیریت اسلایدشو</a>
    </p>


    <form id="addslider" action="adminslider/index" method="post" enctype="multipart/form-data">

        <div class="row">
            <span class="title1">عنوان:</span>
            <input type="text" name="title" class="input">
        </div>

        <div class="row">
            <span class="title1">آدرس لینک:</span>
            <input type="text" name="link" class="input">
        </div>

        <div class="row">
            <span class="title1">انتخاب تصویر:</span>
            <input type="file" name="image" class="input">
        </div>


    </form>

    <div class="row">
        <a onclick="submitForm1();" class="btn_green_small_new">
            افزودن
        </a>
        <a class="btn_red_small" onclick="submitForm2();">
            حذف
        </a>
    </div>


    <form id="list" method="post" action="adminslider/deleteslider/">
        <table class="list" cellspacing="0">
            <tr>
                <td>
                    عنوان
                </td>

                <td>
                    تصویر
                </td>

                <td>
                    انتخاب
                </td>


            </tr>

            <?php
            $i = 1;
            foreach ($slider as $row) {
                ?>
                <tr>
                    <td width="200">
                        <?= $row['title'] ?>
                    </td>
                    <td>
                        <img class="w300" src="<?= $row['img'] ?>">

                    </td>

                    <td>
                        <input type="checkbox" name="id[]" value="<?= $row['id'] ?>">
                    </td>

                </tr>

                <?php
                $i++;
            }

            ?>
        </table>
    </form>
</div>
</div>


<script>
    function submitForm1() {
        $('#addslider').submit();
    } function submitForm2() {
        $('#list').submit();
    }
</script>