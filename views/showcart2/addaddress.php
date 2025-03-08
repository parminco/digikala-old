<style>
    #add_address {

        width: 900px;
        height: 600px;
        position: fixed;
        background: #fff;
        top: 30px;
        left: 231px;
        z-index: 5;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 0 3px 3px black;
        display: none;
        font-family: "2  Homa";
    }

    #dark {

        position: fixed;
        background: rgba(0, 0, 0, .30);
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 4;
        display: none;
    }

    #add_address p {

        font-size: 14pt;
        padding: 8px;
        margin: 0;
        background: #4fdcef;
        position: relative;
    }

    #add_address p .closes {
        width: 28px;
        height: 28px;
        background: url("public/images/slices.png") no-repeat #ffffff -134px -123px;
        position: absolute;
        display: block;
        left: 20px;
        top: 9px;
        border-radius: 50%;
        cursor: pointer;
    }

    .row {
        width: 92%;
        float: right;
        padding: 9px 38px;
    }

    .row .right {
        width: 225px;
        float: right;
    }

    .row .right title {

        font-size: 11.5pt;

    }

    .row .left {

        float: right;
    }

    .row .left input {

        width: 260px;
        height: 28px;
        border: 1px solid #e4e4e4;
        border-radius: 4px;
        position: relative;

    }

    .row .left textarea {

        width: 260px;
        height: 100px;
        border: 1px solid #e4e4e4;
        border-radius: 4px;
        position: relative;

    }

    .row .btn_address {
        width: 162px;
        height: 35px;
        background: #32c316;
        margin-top: 6px;
        position: relative;
        left: -666px;
        top: 43px;
    }


</style>

<form id="addaddress" action="showcrt2/addaddress" method="post">
    <div id="add_address">
        <p>
            افزودن ادرس جدید

            <span class="closes"></span>

        </p>

        <div class="row" style="margin-top: 30px">

            <div class="right">

                <span class="title">نام و نام خانوادگی تحویل گیرنده:</span>
            </div>

            <div class="left">

                <input name="family">
            </div>

        </div>


        <div class="row">

            <div class="right">

                <span class="title">شماره همراه: </span>
            </div>

            <div class="left">

                <input name="mobile">
            </div>

        </div>


        <div class="row">

            <div class="right">

                <span class="title">شماره ثابت: </span>
            </div>

            <div class="left">

                <input name="tel">
            </div>

        </div>


        <div class="row">


            <div class="right">

                <span class="title"> استان/شهر: </span>
            </div>

            <div class="left">

                <select id="ostan" name="state" class="selectpicker state " data-live-search="true">

                    <option value="">
                        انتخاب استان
                    </option>


                </select>


                <span class="shahr">
                <select id="city" name="city" class="selectpicker city" data-live-search="true">
                    <option value="">
                        انتخاب شهر
                    </option>
                </select>
            </span>
            </div>

        </div>

        <div class="row">
            <div class="right">
            <span class="title">
محله:
            </span>
            </div>
            <div class="left">

            <span class="mahale">
                <select name="mahale" class="selectpicker" data-live-search="true">
                    <option value="">
                        محله خود را انتخاب کنید
                    </option>
                </select>
            </span>

            </div>
        </div>
        <div class="row">

            <div class="right">

                <span class="title"> ادرس : </span>
            </div>

            <div class="left">

                <textarea name="address"></textarea>
            </div>

        </div>


        <div class="row">

            <div class="right">

                <span class="title"> کد پستی: </span>
            </div>

            <div class="left">

                <input name="codeposti">
            </div>

        </div>


        <div class="row">

            <div class="right">

            </div>

            <div class="left">

                <span onclick="submitForm();" class="btn_btn btn_address">ذخیره اطلاعات و بازگشت</span>
            </div>

        </div>


    </div>
</form>

<div id="dark"></div>


<script>

    function submitForm() {

        var url = 'showcart2/addaddress/' + editAddressId;
        var data = $('#addaddress').serializeArray();

        var ostan_name = $('#ostan option:selected').text();
        var city_name = $('#city option:selected').text();

        data.push({'name': 'ostan_name', 'value': ostan_name});
        data.push({'name': 'city_name', 'value': city_name});
        console.log(data);

        $.post(url, data, function (msg) {
            window.location='showcart2';
        });

    }

    loadOstan('ostan');

    $("#ostan").change(function () {
        var i = $(this).find('option:selected').val();
        ldMenu(i, 'city');
        $('.selectpicker').selectpicker('refresh');
    });


    $('.closes').click(function () {

        $('#add_address').fadeOut(200);
        $('#dark').fadeOut(200);
    });


    function showWindow() {
        editAddressId = '';
        $('#add_address').fadeIn(200);
        $('#dark').fadeIn(200);
        $('#addaddress').trigger('reset');

    }


</script>