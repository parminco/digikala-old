<style>
    #main {
        width: 1200px;
        height: 500px !important;
        margin: 10px auto !important;
        background: #fff;
        padding: 15px;
        border-radius: 4px;
        overflow: hidden;
        font-family: '2  Homa';
    }

    .btn {
        width: 190px;
        height: 38px;
        border-radius: 4px;
        background: #40db31;
        cursor: pointer;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
        text-align: center;
        font-size: 13pt;
        line-height: 37px;
        color: #000;
        display: inline-block;
        margin: 20px auto;
    }

    .error {
        border: 1px solid #db2865;
        padding: .75rem 1.25rem;
        color: #000;
        border-radius: .25rem;
        background-color: #db2865;
        text-align: center;
        width: 400px;
        height: 26px;
        margin: 50px auto;
    }

    }
    .row2 {
        width: 100% !important;
        float: right !important;
        margin-top: 10px;
        margin-bottom: 10px;
        font-size: 10pt;
    }

    .row2 .title {
        display: block;
        float: right;
        margin-left: 10px;
        margin-right: 10px;

    }

    .row2 select {
        float: right;
        margin-right: 3px;
        margin-left: 3px;
        font-family: '2  Homa';
        font-size: 9pt;
        min-width: 80px;
        border: 1px solid #ccc;
    }

    h3 {
        font-family: 'IRYekan';
        font-size: 12pt;
        border-bottom: 1px solid #cccccc;
    }

    .row2 input[type=text] {
        width: 200px;
        font-size: 10.5pt;
        border: 1px solid #ccc;
        height: 20px;
        padding: 4px;
    }

    .w120 {
        width: 120px;
    }
</style>
<?php
$orderInfo = $data ['orderInfo'];
?>
<div id="main">

    <form action="checkout/creditcard/<?= $orderInfo['id'] ?>" method="post">
        <div class="row2" style="width: 100%;float: right;margin-top: 10px;">
            <h3>
                اطلاعات واریز کارت به کارت
            </h3>
        </div>

        <div class="row2" style="width: 100%;float: right; margin-bottom: 10px;">
            <span class="title  w120">تاریخ واریز</span>
            <span class="title">روز:</span>
            <select name="day">
                <?php
                for ($i = 1; $i < 32; $i++) {
                    ?>
                    <option value="<?= $i; ?>"><?= $i; ?></option>
                    <?php
                }
                ?>
            </select>
            <span class="title">ماه:</span>
            <select name="month">

                <?php
                for ($i = 1; $i < 13; $i++) {
                    ?>
                    <option value="<?= $i; ?>"> <?= $i; ?> </option>
                    <?php
                }
                ?>
            </select>
            <span class="title">سال:</span>
            <select name="year">
                <option value="1399">1399</option>
                <option value="1400">1400</option>
            </select>

        </div>


        <div class="row2" style="width: 100%;float: right; margin-bottom: 10px">
            <span class="title w120">شماره کارت:</span>
            <input name="creditcard" type="text">
        </div>

        <div class="row2" style="width: 100%;float: right; margin-bottom: 10px">
            <span class="title w120">نام بانک صادر کننده:</span>
            <input name="bank" type="text">
        </div>

        <div class="row2" style="width: 100%;float: right; margin-bottom: 10px">
            <span class="title w120">زمان واریز:</span>
            <span class="title">ساعت:</span>
            <select name="hour">
                <?php
                for ($i = 0; $i < 24; $i++) {
                    ?>
                    <option value="<?= $i; ?>">
                        <?php if ($i == 0) {
                            echo '00';
                        } else {
                            echo $i;
                        } ?>
                    </option>
                    <?php
                }
                ?>
            </select>
            <span class="title">دقیقه:</span>
            <select name="minute">

                <?php
                for ($i = 1; $i < 60; $i++) {
                    ?>
                    <option value="<?= $i; ?>"> <?= $i; ?> </option>
                    <?php
                }
                ?>
            </select>
        </div>
        <div class="row2" style="width: 100%;float: right; margin-bottom: 10px">
            <a class="btn" onclick="submitForm();">ثبت اطلاعات</a>
        </div>
    </form>

    <script>
        function submitForm() {
            $('form').submit();
        }
    </script>

</div>














