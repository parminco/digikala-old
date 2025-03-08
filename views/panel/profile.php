<script src="public/slider/jquery-ui.min.js"></script>
<script src="public/slider/slider.js"></script>
<link href="public/slider/style.css" rel="stylesheet">
<style>
    #main {
        width: 1200px;
        height: 1200px;
        margin: 10px auto !important;
        background: #fff;
        padding: 5px;
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
        display: block;
        float: left;
        margin-left: 50px;
    }

    span.titr {
        font-size: 15pt;
        width: 100%;
        display: block;

    }

    span.title {
        font-size: 12pt;
        width: 200px;
        display: block;
        float: right;

    }

    .row {
        width: 100%;
        margin-top: 20px;
        float: right;
    }

    .profile {
        width: 100%;
        float: right;
        margin-top: 50px;
        padding: 0 20px;
    }

    .input {
        border: 1px solid #ccc;
        width: 300px;
        height: 20px;
        font-family: '2  Homa';
        font-size: 11pt;
        padding: 5px;
    }

    .dash {
        border-top: 1px solid #ccc;
        width: 97%;
        display: block;
        float: right;
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

    .title1 {
        display: block;
        float: right;
        margin-left: 10px;
        margin-right: 10px;

    }

    .radio {
        float: right;
        margin-top: 10px;
        border: 1px solid #ccc;
    }

</style>


    <div id="main">
        <?php
        $Profile = $data['UserInfo'];
        ?>
        <div class="profile">
            <div class="row">
                  <span class="titr">
            ویرایش اطلاعات کاربری
            </span>
            </div>
            <form action="panel/editprofile" method="post">
            <div class="row"><span class="dash"></span></div>


            <div class="row">
                <span class="title">ایمیل:</span>
                <input name="email" type="email" class="input" value="<?= $Profile['email'] ?>">
            </div>
            <div class="row">
                <span class="title">نام و نام خانوادگی:</span>
                <input name="family" type="text" class="input" value="<?= $Profile['family'] ?>">
            </div>
            <div class="row">
                <span class="title">کد ملی:</span>
                <input name="code_meli" type="text" class="input" value="<?= $Profile['code_meli'] ?>">
            </div>
            <div class="row">
                <span class="title">شماره تلفن ثابت:</span>
                <input name="tel" type="text" class="input" value="<?= $Profile['tel'] ?>">
            </div>

            <div class="row">
                <span class="title">شماره همراه:</span>
                <input name="mobile" type="text" class="input" value="<?= $Profile['mobile'] ?>">
            </div>
            <div class="row">
                <?php
                $date = $Profile['tavalod'];;
                $arr_date = explode('/', $date);
                @$year = $arr_date[0];
                @$month = $arr_date[1];
                @$day = $arr_date[2];

                ?>
                <span class="title">تاریخ تولد:</span>
                <span class="title1">روز:</span>
                <select name="day">
                    <?php
                    for ($i = 1; $i < 32; $i++) {
                        ?>
                        <option value="<?= $i; ?>" <?php if ($i == $day) {
                            echo 'selected="selected"';
                        } ?>>
                            <?= $i; ?>
                        </option>
                        <?php
                    }
                    ?>

                </select>
                <span class="title1">ماه:</span>
                <select name="month">

                    <?php
                    for ($i = 1; $i < 13; $i++) {
                        ?>
                        <option value="<?= $i; ?>" <?php if ($i == $month) {
                            echo 'selected="selected"';
                        } ?>> <?= $i; ?> </option>
                        <?php
                    }
                    ?>
                </select>
                <span class="title1">سال:</span>
                <select name="year">
                    <?php
                    for ($i = 1330; $i <= Model::jaliliDate('Y'); $i++) {
                        ?>
                        <option value="<?= $i; ?>" <?php if ($i == $year) {
                            echo 'selected="selected"';
                        } ?>> <?= $i; ?> </option>
                        <?php
                    }
                    ?>
                </select>

            </div>

            <div class="row">
                <span class="title">محل سکونت</span>
                <textarea style="height: 150px" type="text" name="address" class="input"><?= $Profile['address'] ?> </textarea>
            </div>

            <div class="row">
                <span class="title">جنسیت:</span>

                <span class="title1">مرد</span>
                <input type="radio" name="jensiat" class="radio" value="1" <?php if ($Profile['jensiat'] == 1) {
                    echo 'checked="checked"';
                } ?>>

                <span class="title1">زن</span>
                <input type="radio" name="jensiat" class="radio" value="2" <?php if ($Profile['jensiat'] == 2) {
                    echo 'checked="checked"';
                } ?>>
            </div>

            <div class="row">
                <span class="title">دریافت خبرنامه:</span>
                <input type="checkbox"  name="khabarname" class="radio" value="1" <?php if ($Profile['khabarname'] == 1) {
                    echo 'checked="checked"';
                } ?>>
            </div>

            <div class="row">
                <span onclick="submitForm();" class="btn">ویراش</span>

            </div>
            </form>
        </div>
    </div>


<script>
    function submitForm() {

        $('form').submit();

    }
</script>