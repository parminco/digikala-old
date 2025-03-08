<style>
    .morama {
        width: 42px;
        height: 3px;
        position: relative;
        float: right;
        background: #fff;
        z-index: 2;
        font-family: '2  Homa';

    }

    .description p {
        font-size: 13pt;
        font-family: 'IRANSans';
    }
</style>
<div class="morama" style=" top: 29px; right: 33px;"></div>
<div class="morama" style=" top: 84px;right: -9px;"></div>
<div class="morama" style="top: 139px;right: -53px;"></div>
<div class="morama" style="top: 195px;right: -96px"></div>


<div class="itemcontainer">

    <?php

    $naghd = $data[0];
    // print_r($naghd);

    foreach ($naghd as $row) {
        ?>

        <div class="item">


            <h4>

                <i></i>
                <span>
<?= $row['title']; ?>
</span>
                <div class="description">
                    <p><?= $row['description']; ?></p>

                </div>
            </h4>


        </div>


        <?php
    }
    ?>
</div>


<script>
    $('.itemcontainer .item h4').click(function () {
        var item = $(this).parents('.item');
        $(this).toggleClass('active');
        $('.description', item).slideToggle(200);

    });
</script>