<?php
$active = 'category';
require('views/admin/layoat.php');

$category = $data['category'];
$categoryInfo = [];
if (isset($data['categoryInfo'])) {
    $categoryInfo = $data['categoryInfo'];
}

$parents = [];
if (isset($data['parents'])) {
    $parents = $data['parents'];
    $parents = array_reverse($parents);
}


?>

<div class="left">
    <p class="title">
        مدیریت دسته ها
        (<?php
        foreach ($parents as $row) {
            ?>
            <a href="admincategory/showchildren/ <?= $row['id'] ?>">
                <?= $row['title'] ?>
                -
            </a>
            <?php
        }
        ?>
        <a href="admincategory/<?php if (isset($categoryInfo['title'])) {
            echo 'showchildren/' . $categoryInfo['id'];
        } else {
            echo 'index';
        } ?>">

            <?php
            if (isset($categoryInfo['title'])) {
                echo $categoryInfo['title'];
            } else {
                echo 'دسته های اصلی';
            }
            ?>

        </a>
        )
    </p>

    <a class="btn_green_small" href="admincategory/addcategory/<?= @$categoryInfo['id'] ?>">
        افزودن
    </a>

    <a class="btn_red_small" onclick="submitForm();">
        حذف
    </a>
    <form method="post" action="admincategory/deletecategory/<?= @$categoryInfo['id'] ?>">
        <table class="list" cellspacing="0">
            <tr>
                <td>
                    ردیف
                </td>

                <td>
                    عنوان دسته
                </td>

                <td>
                    مشاهده زیر دسته
                </td>

                <td>
                    ویرایش
                </td>

                <td>
                    ویژگی ها
                </td>


                <td>
                    انتخاب
                </td>

            </tr>

            <?php
            foreach ($category as $row) {
                ?>
                <tr>
                    <td>
                        <?= $row['id'] ?>
                    </td>

                    <td>
                        <?= $row['title'] ?>
                    </td>

                    <td>
                        <a href="admincategory/showchildren/<?= $row['id']; ?>">
                            <img src="public/images/view_icon.png" class="view">
                        </a>
                    </td>


                    <td>
                        <a href="admincategory/addcategory/<?= $row['id']; ?>/edit">
                            <img src="public/images/icon_edit_16.png" class="view">
                        </a>
                    </td>

                    <td>
                        <a href="admincategory/showattr/<?= $row['id']; ?>">
                            مشاهده
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
