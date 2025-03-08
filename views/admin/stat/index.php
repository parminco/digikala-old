<?php
$active = 'stat';
require('views/admin/layoat.php');

?>
<style>
    .titlehed {
        border-bottom: 1px solid #ccc;
        margin-top: 0px;
        background: #d5ffd7;
        padding: 10px;
        box-shadow: 0 -2px 3px #ccc;
    }

    .row {
        width: 60%;
        float: right;
        margin: 20px 50px;
        vertical-align: middle;
    }

    span.title1 {
        font-size: 12pt;
        width: 33px;
        display: inline-block;
        float: right;
        line-height: 23px;
        margin-right: 15px;

    }

    .row select {
        float: right;
        margin-right: 3px;
        margin-left: 3px;
        font-family: '2  Homa';
        font-size: 9pt;
        min-width: 80px;
        border: 1px solid #ccc;
    }

    .btn {
        width: 150px;
        height: 38px;
        border-radius: 4px;
        background: green;
        cursor: pointer;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
        text-align: center;
        font-size: 13pt;
        line-height: 37px;
        color: #fff;
        display: inline-block;
        float: left;

    }
</style>
<div class="left">
    <p class="titlehed">
        <a>
            آمار و گزارشات
        </a>
    </p>


    <form method="post" action="adminstat/order">
        <div class="row">
            <span style="width: 100px !important;font-size: 18px" class="title1">تاریخ شروع :</span>
            <span class="title1">روز :</span>
            <select name="day_start">
                <?php
                for ($i = 1; $i < 32; $i++) {
                    ?>


                    <option value="<?= $i ?>">
                        <?= $i ?>
                    </option>

                <?php }
                ?>
            </select>

            <span class="title1">ماه :</span>
            <select name="month_start">
                <?php
                for ($i = 1; $i < 13; $i++) {
                    ?>


                    <option value="<?= $i ?>">
                        <?= $i ?>
                    </option>

                <?php }
                ?>

            </select>

            <span class="title1">سال :</span>
            <select name="year_start">
                <?php
                $emsal = model::jaliliDate('Y');
                for ($i = 1390; $i <= $emsal; $i++) {
                    ?>
                    <option value="<?= $i ?>">
                        <?= $i ?>
                    </option>
                    <?php
                }
                ?>
            </select>
        </div>

        <div class="row">
            <span style="width: 100px !important;font-size: 18px" class="title1">تاریخ پایان :</span>
            <span class="title1">روز :</span>
            <select name="day_end">
                <?php
                for ($i = 1; $i < 32; $i++) {
                    ?>


                    <option value="<?= $i ?>">
                        <?= $i ?>
                    </option>

                <?php }
                ?>

            </select>

            <span class="title1">ماه :</span>
            <select name="month_end">
                <?php
                for ($i = 1; $i < 13; $i++) {
                    ?>


                    <option value="<?= $i ?>">
                        <?= $i ?>
                    </option>

                <?php }
                ?>
            </select>

            <span class="title1">سال :</span>
            <select name="year_end">
                <?php
                $emsal = model::jaliliDate('Y');
                for ($i = 1390; $i <= $emsal; $i++) {
                    ?>
                    <option value="<?= $i ?>">
                        <?= $i ?>
                    </option>
                    <?php
                }
                ?>
            </select>
        </div>
        <div class="row">
            <span onclick="submitForm();" class="btn">گزارش گیری</span>
        </div>
    </form>
</div>
</div>

<script>
    function submitForm() {
        $('form').submit();
    }
</script>



