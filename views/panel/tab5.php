<section>

    <table cellspacing="0">


        <tr>

            <td>ردیف</td>
            <td>تاریخ</td>
            <td>کالا</td>
            <td>می پسندم</td>
            <td>مشاهده</td>
            <td>ویرایش</td>
            <td>حذف</td>

        </tr>

        <?php
        $Commnet = $data['Commnet'];

        $i = 1;
        foreach ($Commnet as $row) { ?>

            <tr>

                <td><?= $i ?></td>
                <td><?= $row['tarikh'] ?></td>
                <td><?= $row['productTitle'] ?></td>
                <td><?= $row['likecount'] ?></td>
                <td><a href="product/index/<?= $row['idproduct'] ?>/nazar#comment<?= $row['id'] ?>"><img
                                src="public/images/View.gif"></a></td>
                <td><a href="addcomment/index/<?= $row['idproduct'] ?>"><img src="public/images/Edit.gif"></a></td>
                <td style="cursor: pointer" onclick="deleteComment(<?= $row['id'] ?>,this)"><img
                            src="public/images/Delete.gif"></td>

            </tr>

        <?php }
        $i++;
        ?>
    </table>

</section>

<script>
    function deleteComment(commentId, tag) {
        var imgTag = $(tag);
        var parentTag = imgTag.parents('tr');
        var Url = 'panel/deletecomment/' + commentId;
        var data = {};

        $.post(Url, data, function (msg) {
            parentTag.remove();
        });
    }
</script>