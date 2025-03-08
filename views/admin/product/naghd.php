<?php
require('views/admin/layoat.php');

$naghd = $data['naghd'];
$productInfo = $data['productInfo'];


?>
<div class="left">
    <p class="title">
        <a>مدیریت نقد و بررسی</a>
        <span style="color: red">

            (<?= $productInfo['title'];?>)
        </span>
    </p>

    <a class="btn_green_small" href="adminproduct/addnaghd/<?= $productInfo['id']?>">
        افزودن
    </a>


    <a class="btn_red_small" onclick="submitForm();" >
        حذف
    </a>
    <form method="post" action="adminproduct/deletenaghd/<?=$productInfo['id']?>">
        <table class="list" cellspacing="0">
            <tr>

                <td>
                    عنوان
                </td>

                <td>
                    ویرایش
                </td>

                <td>
                    انتخاب
                </td>

            </tr>

            <?php
            foreach ($naghd as $row) {
                ?>
                <tr>

                    <td>
                        <?= $row['title'] ?>
                    </td>


                    <td>
                        <a href="adminproduct/addnaghd/<?= $row['idproduct']; ?>/<?= $row['id']; ?>">
                            <img src="public/images/icon_edit_16.png" class="view">
                        </a>
                    </td>



                    <td>
                        <input type="checkbox" name="id[]" value="<?= $row['id']; ?>">
                    </td>
                </tr>

                <?php
            }
            ?>
        </table>
    </form>
</div>
</div>
