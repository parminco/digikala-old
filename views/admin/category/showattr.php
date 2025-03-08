<?php
$active='category';

require('views/admin/layoat.php');

$attr = $data['attr'];

$categoryInfo = $data['categoryInfo'];
$attrInfo = $data['attrInfo'];
//print_r($attrInfo);

?>
<style>
    a{
        color: #000;
    }
    a:hover{
        color: #595959;
    }
</style>
<div class="left">
    <p class="title">
        مدیریت ویژگی ها
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

    <a class="btn_green_small" href="admincategory/addattr/<?= $categoryInfo['id']; ?>/<?= $attrInfo['id']; ?>">
        افزودن
    </a>

    <a class="btn_red_small" onclick="submitForm();">
        حذف
    </a>
    <form method="post" action="admincategory/deleteattr/<?= $categoryInfo['id']; ?>/<?= $attrInfo['id']; ?>">
        <table class="list" cellspacing="0">
            <tr>
                <td>
                    ردیف
                </td>

                <td>
                    عنوان ویژگی
                </td>
                <?php
                if (!isset($attrInfo['id'])) {
                    ?>
                    <td>
                        مشاهده زیر ویژگی ها
                    </td>
                    <?php
                }
                ?>
                <td>
                    مقادیر پیش فرض
                </td>
                <td>
                    ویرایش
                </td>


                <td>
                    انتخاب
                </td>

            </tr>

            <?php
            foreach ($attr as $row) {
                ?>
                <tr>
                    <td>
                        <?= $row['id'] ?>
                    </td>

                    <td>
                        <?= $row['title'] ?>
                    </td>
                    <?php
                    if (!isset($attrInfo['id'])) {
                        ?>
                        <td>
                            <a href="admincategory/showattr/<?= $categoryInfo['id']; ?>/<?= $row['id'] ?>">
                                مشاهده
                            </a>
                        </td>

                        <?php
                    }
                    ?>

                    <td>
                        <a href="admincategory/attrval/<?= $row['id']?>">
                            مقادیر پیش فرض
                        </a>

                    </td>

                    <td>
                        <a href="admincategory/addattr/<?= $categoryInfo['id'] ?>/<?= $attrInfo['id'] ?>/<?= $row['id'] ?>">
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
