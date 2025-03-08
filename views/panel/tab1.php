<section style="display:<?php if ($activTab=='message'){ echo 'block'; }?> ">
    <table cellspacing="0">
        <tr>
            <td>ردیف</td>
            <td>کد</td>
            <td>تاریخ</td>
            <td>عنوان</td>
            <td>متن</td>
            <td>وضعیت</td>
        </tr>
        <?php
        $Message = $data['Message'];
        $i = 1;
        foreach ($Message as $row) {

            ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $row['id'] ?></td>
                <td><?= $row['date'] ?></td>
                <td><?= $row['title'] ?></td>
                <td><?= $row['matn'] ?></td>
                <td>
                    <?php
                    if ($row['status'] == 0) {
                        echo 'خوانده نشده';
                    } else if ($row['status'] == 1) {
                        echo 'خوانده شده';
                    }
                    ?>

                </td>
            </tr>
            <?php
            $i++;
        }
        ?>
    </table>


</section>


