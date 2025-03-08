<?php
$active = 'product';
require('views/admin/layoat.php');

$products = $data['product'];

?>
<div class="left">
    <p class="title">
        <a>مدیریت محصولات </a>
    </p>

    <a class="btn_green_small" href="adminproduct/addproduct">
    افزودن
    </a>

    <a class="btn_red_small" onclick="submitForm();" >
        حذف
    </a>
    <form method="post" action="adminproduct/deleteproduct">
        <table class="list" cellspacing="0">
            <tr>
                <td>
                    ردیف
                </td>

                <td>
                    عنوان
                </td>

                <td>
                    قیمت
                </td>

                <td>
                    تخفیف
                </td>

                <td>
                    ویرایش
                </td>

                <td>
                    نقد
                </td>


                <td>
                    ویژگی ها
                </td>

                <td>
                     گالری
                </td>

                <td>
                    انتخاب
                </td>

            </tr>

            <?php
            foreach ($products as $row) {
                ?>
                <tr>
                    <td>
                        <?= $row['id'] ?>
                    </td>

                    <td>
                        <?= $row['title'] ?>
                    </td>

                    <td>
                        <?= $row['price'] ?>
                    </td>

                    <td>
                        <?= $row['discount'] ?>
                    </td>

                    <td>
                        <a href="adminproduct/addproduct/<?= $row['id']; ?>">
                            <img src="public/images/icon_edit_16.png" class="view">
                        </a>
                    </td>

                    <td>
                        <a href="adminproduct/naghd/<?= $row['id']; ?>">
                      نقد و بررسی
                        </a>
                    </td>

                    <td>
                        <a href="adminproduct/attr/<?= $row['id']; ?>">
                      ویژگی ها
                        </a>
                    </td>

                    <td>
                        <a href="adminproduct/gallery/<?= $row['id']; ?>">
                     گالری
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
