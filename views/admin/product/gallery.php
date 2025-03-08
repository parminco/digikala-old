<?php
require('views/admin/layoat.php');

$gallery = $data['gallery'];
$productInfo = $data['productInfo'];

?>
<div class="left">
    <p class="title">
        <a>مدیریت گالری تصاویر</a>
    </p>

    <style>
        .row {
            font-size: 12pt;
            font-family: "2  Homa";
            float: right;
            margin-bottom: 20px;
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
        }
    </style>

    <form id="idgallery" action="adminproduct/gallery/<?= $productInfo['id']?>" method="post" enctype="multipart/form-data" style="margin-bottom: 20px">

        <div class="row">
            <span class="span_title" style="float: right;line-height: 19px;">
                    انتخاب تصویر:
            </span>
            <input type="file" name="image" style="float: right">

            <a onclick="submitForm2()" class="btn_green_small_new"  style="float: right">
                افزودن
            </a>

        </div>

    </form>


    <script>
        function submitForm2() {
            $('#idgallery').submit();
        }

        function submitForm3() {
            $('#gallerylist').submit();
        }
    </script>



    <a class="btn_red_small" onclick="submitForm3();" >
        حذف
    </a>

    <form id="gallerylist" method="post" action="adminproduct/deletegallery/<?= $productInfo['id']?>">
        <table class="list" cellspacing="0">
            <tr>
                <td>
                    ردیف
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
            foreach ($gallery as $row) {
                ?>
                <tr>
                    <td>
                        <?= $i ?>
                    </td>
                    <td>
                        <img src="public/images/products/<?= $row['idproduct'] ?>/gallery/small/<?= $row['img'] ?>">

                    </td>

                    <td>
                        <input type="checkbox" name="id[]" value="<?= $row['id']?>">
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
