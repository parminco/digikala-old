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
        background: #3ac82d;
        cursor: pointer;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
        text-align: center;
        font-size: 13pt;
        line-height: 37px;
        color: #fff;
        display: block;
        float: left;
        margin-left: 24px;
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
        margin-top: 20px;
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

    .error {
        border: 1px solid #f5c6cb;
        padding: .75rem 1.25rem;
        color: #721c24;
        border-radius: .25rem;
        background-color: #f8d7da;
        text-align: center;
        width: 600px;
        height: 26px;
        margin-top: 50px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 0px;
    }

    .errorSuccess {
        border: 1px solid #c3e6cb;
        padding: .75rem 1.25rem;
        color: # #155724;
        border-radius: .25rem;
        background-color: #d4edda;
        text-align: center;
        width: 600px;
        height: 26px;
        margin: 50px auto;
    }
</style>


<div id="main">
    <?php
    $success  = 'تغیر کلمه عبور با موفقیت انجام شد';
    if (@$_GET['error'] != '') {

        ?>

        <div class="<?php if ($_GET['error'] ==$success) {
            echo 'errorSuccess';
        } else {
            echo 'error';
        } ?>"><?= $_GET['error'] ?></div>

        <?php
    }
    ?>


    <div class="profile">
        <div class="row">
                  <span class="titr">
            ویرایش کلمع عبور
            </span>
        </div>
        <form action="panel/changepass" method="post">
            <div class="row"><span class="dash"></span></div>


            <div class="row">
                <span class="title">کلمه عبور فعلی:</span>
                <input name="pass_old" type="password" class="input">
            </div>
            <div class="row">
                <span class="title">کلمه عبور جدید:</span>
                <input name="pass_new" type="password" class="input">
            </div>
            <div class="row">
                <span class="title">تکرار کلمه عبور جدید:</span>
                <input name="pass_confirm" type="password" class="input">
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