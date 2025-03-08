


<div id="main" style="width: 1200px;margin: 10px auto;height: 500px;background: #fff;box-shadow: 0 1px 3px #eee;border-radius: 4px;overflow: hidden">


    <style>
        .header {
            height: 160px;
            background: #fafcfc;
            text-align: center;
            padding-top: 15px
        }

        .header i {
            width: 65px;
            height: 52px;
            background: url("public/images/slices.png") no-repeat -870px -81px;
            display: block;
            margin: auto
        }

        .header .left, .header .right {
            width: 50%;
            float: right;

        }

        .header .left {
            width: 40%;
            line-height: 52px;
            padding-top: 49px;
        }

        .header .right {
            padding-top: 31px;
            padding-right: 40px
        }

        .header input {
            width: 250px;
            height: 30px;
            border: 1px solid #dedede;
        }

        .header label {
            font-family: yekan;
            font-size: 10.5pt;
            display: inline-block;
            width: 130px;
        }

        .header .right > div {
            margin-top: 25px;
            font-size: 10.5pt;
            font-family: yekan;
        }

        .header .btn {
            width: 110px;
            height: 37px;
            border-radius: 4px;
            background: rgba(0, 255, 0, .9);
            display: block;
            float: right;
            margin-right: 263px;
            cursor: pointer;
            box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
            text-align: center;
            font-size: 13pt;
            font-family: yekan;
            line-height: 33px;
            color: #000;
        }

        .check_lable {
            width: 15px !important;
            height: 15px;
            display: block;
            position: absolute;
            top: 1px;
            right: 2px;
            border: 1px solid #c8c8c8;
            border-radius: 4px;
            overflow: hidden;


        }

        .check_lable.checked{
            background: url("public/images/slices.png") #1bbcd9 no-repeat  -193px -81px;
            z-index: 1 !important;
            position: absolute;
        }

        .check_div {
            position: relative;
        }

        .check_div .check_input {


            width: 0;
            height: 0;
            z-index: 2 !important;
            position: relative;
            opacity: 0;
            cursor: pointer;
            margin-left: 30px;
        }
    </style>

    <div class="header">
        <i></i>
        <h2 class="yekan">به دیجی کالا بپیوندید</h2>

        <div class="right">
            <div>
                <label>پست الکترونیکی</label>
                <input class="yekan fontsm " type="text"
                       placeholder="                                                   Email">

            </div>
            <div>
                <label>کلمه عبور</label>
                <input class="yekan fontsm " type="password"
                       placeholder="                                             Password">

            </div>

            <div class="check_div">
                <label class="check_lable"></label>
                <input type="checkbox"  class="check_input">
                قوانین را مطالعه کرده ام و موافق هستم

            </div>

            <div class="check_div">
                <label class="check_lable"></label>
                <input type="checkbox" class="check_input">
                خبرنامه را برای من ارسال کن

            </div>
            <div>
                <span class="btn">ثبت نام</span>
            </div>

        </div>

        <script>
            $('.check_input').click(function () {
                if($(this).is(':checked')){

                    $(this).parents('.check_div').find('.check_lable').addClass('checked');
                }
                else {
                    $(this).parents('.check_div').find('.check_lable').removeClass('checked');
                }

            })

        </script>

        <style>
            .header .left ul {
                padding: 0;

            }

            .header .left li {
                font-family: yekan;
                font-size: 11.6pt;

            }

            .header .left li i {
                width: 27px;
                height: 27px;
                display: inline-block;
                background: url("public/images/slices.png") no-repeat;
                position: relative;
                top: 11px;
                margin-left: 21px;

            }

        </style>
        <div class="left">
            <ul>

                <li>
                    <i style="background-position:-980px -330px "> </i>
                    سریع تر و ساده تر خرید کنید
                </li>

                <li>
                    <i style="background-position:-980px -241px "></i>
                    لیست علاقه مندی ها خود را بسازید و تغییرات ان ر دنبال کنید
                </li>

                <li>
                    <i style="background-position:-980px -285px "></i>
                    به سادگی سوابق و خرید وفعالیت ها خود را مدیریت کنید

                </li>

            </ul>

        </div>

    </div>


</div>


<script>


    var timer = {};
    $('#menu_top li').hover(function () {
        var tag = $(this);
        var timerAttr = tag.attr('data-time');
        clearTimeout(timer[timerAttr]);
        tag.addClass('activ_menu');
        timer[timerAttr] = setTimeout(function () {
            $('> ul', tag).fadeIn(0);
            $('> .submenu3', tag).fadeIn(0);
        }, 500)


    }, function () {
        var tag = $(this);
        var timerAttr = tag.attr('data-time');
        clearTimeout(timer[timerAttr]);
        tag.removeClass('activ_menu');
        timer[timerAttr] = setTimeout(function () {
            $('> ul', tag).fadeOut(0);
            $('> .submenu3', tag).fadeOut(0);
        }, 600)
    })

</script>



</body>
</html>