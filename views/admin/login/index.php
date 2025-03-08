<style>
    #main {
        width: 1200px;
        margin: 10px auto;
        height: 440px;
        background: #fff;
        box-shadow: 0 1px 3px #eee;
        border-radius: 4px;
        overflow: hidden;
        font-family: '2  Homa';

    }


    .header {
        height: 160px;
        background: #fafcfc;
        text-align: center;
        padding-top: 15px;

    }

    .header i {
        width: 65px;
        height: 52px;
        background: url("public/images/slices.png") no-repeat -870px -81px;
        display: block;
        margin: auto
    }
    .right {
        padding-top: 31px;
        padding-right: 40px;
        margin-right: 300px;
    }

    input {
        width: 250px;
        height: 30px;
        border: 1px solid #dedede;
    }

    label {
        font-size: 11pt;
        display: inline-block;
        width: 130px;
        margin-bottom: 20px;
    }


    .header .btn {
        width: 110px;
        height: 37px;
        border-radius: 4px;
        background: #1bbcd9;
        display: block;
        float: right;
        cursor: pointer;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
        text-align: center;
        font-size: 11pt;
        line-height: 33px;
        color: #fff;
        margin-right: 198px;
        margin-top: 12px;
    }


</style>

<div id="main">

    <div class="header">
        <i></i>
        <p class="yekan"style="text-align: center">ورود به پنل مدیریت</p>

        <div class="right">
            <form action="adminlogin/checkuser" method="post">
                <div>
                    <label>پست الکترونیکی:</label>
                    <input name="email" class="yekan fontsm " type="text" placeholder="Email">

                </div>
                <div>
                    <label>کلمه عبور:</label>
                    <input name="password" class="yekan fontsm " type="password" placeholder=" Password">

                </div>

                <div>
                    <span onclick="submitForm()" class="btn">ورود</span>
                </div>

            </form>

        </div>


    </div>

</div>

<script>
    function submitForm() {
        $('form').submit();
    }
</script>