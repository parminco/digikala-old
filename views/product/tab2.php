<style>
    .section_fanni {
    }

    .section_fanni h4 {
        font-size: 14pt;
        font-family: yekan;
        float: right;
        width: 100%;
    }

    .section_fanni row {
        width: 100%;
        float: right;
    }

    .section_fanni .row .right {
        width: 255px;
        float: right;
        background: #d0d0d0;
        font-family: '2  Homa';
        font-size: 14pt;
        border-radius: 4px;
        height: 45px;
        overflow: hidden;
        line-height: 38px;
        padding-right: 14px;
        margin-right: 10px;
        margin-left: 10px;
        margin-bottom: 10px;
    }

    .section_fanni .row .left {
        width: 840px;
        float: right;
        background: #57e3e0;
        font-family: yekan;
        font-size: 14pt;
        border-radius: 4px;
        height: 45px;
        overflow: hidden;
        line-height: 38px;
        padding-right: 14px;
        margin-bottom: 10px;
    }

</style>

<?php
$fanni = $data[0];

foreach ($fanni as $attr_parent) {
    $childern = $attr_parent['childern'];
    ?>

    <h4>
        <?= $attr_parent['title']; ?>
    </h4>

    <?php


    foreach ($childern as $child) {
        ?>

        <div class="row">

            <div class="right"><?= $child['title']; ?></div>
            <div class="left">
                <?php
                if ($child['value'] == '') {
                    echo '...';
                }
                else {
                   echo $child['value'];
                }
                ?>


                           </div>


        </div>

        <?php
    }

}

?>