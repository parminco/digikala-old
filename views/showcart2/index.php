<script src="<?= URL ?>public/js/bootstrap.min.js"></script>
<script src="<?= URL ?>public/js//frotel/ostan.js"></script>
<script src="<?= URL ?>public/js//frotel/city.js"></script>
<script src="<?= URL ?>public/js/bootstrap-select.js"></script>
<link href="<?= URL ?>public/js/bootstrap-select.css" rel="stylesheet">
<link href="<?= URL ?>public/js/bootstrap.css" rel="stylesheet">
<script src="<?= URL ?>public/js/mahale.js"></script>

<div id="main"
     style="width: 1200px;margin:10px auto;background: #fff;padding: 6px;border-radius: 4px;overflow: hidden;  font-family: '2  Homa';">

    <style>

        .order-steps {

            padding-top: 41px;
            padding-right: 271px;
            padding-left: 20px;

        }

        .order-steps .dashed {
            float: right;
            margin-top: 11px;
            margin-left: 5px;
        }

        .order-steps .dashed span {

            width: 11px;
            height: 3px;
            background: #2badd0;
            display: block;
            float: right;
            margin-left: 3px;
        }

        .order-steps ul {
        }

        .order-steps ul li {
            position: relative;
            width: 180px;
            height: 2px;
            float: right;
        }

        .order-steps ul li .circle {
            width: 19px;
            height: 19px;
            border-radius: 50%;
            display: block;
            border: 3px solid #ccc;
            position: absolute;
        }

        .order-steps ul li.active .circle {
            border: 3px solid #2badd0;
            background: #2badd0 url("public/images/slices.png") -810px -476px;
        }

        .order-steps ul li .line {
            width: 128px;
            height: 2px;
            background: #ccc;
            display: block;
            position: absolute;
            right: 36px;
            top: 12px;

        }

        .order-steps ul li.active .line {

            background: #2badd0;

        }

        .order-steps ul li .title {
            font-size: 13pt;
            color: #7a2e47;
            position: absolute;
            right: -37px;
            top: 27px;
            width: 150px;
        }

        .order-steps ul li.active .title {

            color: #2badd0;

        }


    </style>
    <div class="order-steps">
        <div class="dashed">
            <span></span>
            <span></span>
            <span></span>
            <span></span>

        </div>
        <ul>

            <li class="active"><span class="circle"></span><span class="line"></span><span
                        class="title"/>ورود به دیجی امیر</span>
            </li>


            <li class=""><span class=" circle"></span><span class="line"></span><span
                        class="title">اطلاعات ارسال سفارش</span></li>


            <li><span class="circle"></span><span class="line"></span><span class="title">بازبینی سفارش</span>
            </li>

            <li><span class="circle"></span><span class="title">اطلاعات پرداخت</span>
            </li>


        </ul>

        <div class="dashed" style="position: relative;left: 142px;">
            <span></span>
            <span></span>
            <span></span>
            <span></span>

        </div>
    </div>

    <style>
        .head {
            float: right;
            width: 100%;
            padding-top: 100px;
        }

        .head h4 {
            font-size: 14pt;
            font-weight: normal;
            float: right;

        }

        .head span {
            width: 162px;
            height: 35px;
            background: #2badd0;
            margin-top: 6px;
        }

        .content {
            width: 100%;
            float: right;
            margin-top: 20px;
        }

        .content table {
            width: 100%;

        }

        table tr td {
            border: 1px solid #eee;
            padding: 5px;

        }

        table .circle {
            width: 15px;
            height: 15px;
            display: block;
            border-radius: 50%;
            border: 2px solid #ccc;
            position: relative;
            top: 0;
            left: -18px;
            cursor: pointer;

        }

        .girande {
            font-size: 13pt;

        }

        .edit {
            background: #22c1ef66 !important;
        }

        .edit i {

            background: url("public/images/slices.png") no-repeat -810px -443px;
            width: 19px;
            height: 19px;
            display: block;
            margin: auto;
            margin-top: -18px;
            cursor: pointer;
        }

        .remove {
            background: rgba(255, 0, 46, 0.3) !important;
        }

        .remove i {
            background: url("public/images/slices.png") no-repeat -811px -502px;
            width: 19px;
            height: 19px;
            display: block;
            margin: auto;
            margin-top: -18px;
            cursor: pointer;
        }

        table.active .circle {

            background: #2badd0;
            border: 1px solid #2f49a9;
            position: relative;
        }

        table.active tr:first-child td:first-child {

            background: #dff8ff;

        }

        table.active {

            border: 1px solid #76ff96;

        }

        table.active .circle::after {

            content: " ";
            display: block;
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #fff;
            position: absolute;
            top: 4px;
            left: 4px;
        }

        table.active .triangle {

            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 42px 42px 0;
            border-color: transparent #2badd0 transparent transparent;
            position: absolute;
            top: 0;
            right: 0
        }

    </style>

    <div class="head">

        <h4>انتخاب ادرس</h4>

        <span onclick="showWindow();" class="btn_btn btn_gray" style="margin-left: 0">افزودن آدرس جدید</span>


    </div>


    <div class="content">


        <?php
        $address = $data['address'];
        $first=1;
        foreach ($address as $row) {
            ?>
            <table data-id="<?= $row['id']; ?>" data-city="<?= $row["city"] ?>" class="table_address <?php if($first==1){echo 'active';} ?>"   cellspacing="0" >

                <tr>
                    <td class="select_address" style="cursor: pointer; width: 60px;position: relative" rowspan="3">
                        <span class="triangle"></span>

                        <span class="circle"></span>

                    </td>
                    <td class="girande" colspan="3"><?= $row['family'] ?></td>
                    <td style="width: 40px;padding: 0" rowspan="3">
                        <table cellspacing="0" style="width: 100%;height: 120px">

                            <tr>
                                <td onclick="editAddress(<?= $row['id']; ?>)" class="edit" style="border: 0;padding: 0">
                                    <i></i></td>
                            </tr>


                            <tr>
                                <td onclick="deleteAddress(<?=$row['id']?>)" class="remove" style="border: 0;padding: 0"><i></i></td>
                            </tr>

                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="width: 200px">استان :
                        <?= $row['ostan_name'] ?>
                    </td>
                    <td rowspan="2">
                        ادرس:
                        <?= $row['address'] ?>
                        <br>
                        کد پستی:
                        <?= $row['codeposti'] ?>
                    </td>
                    <td style="width: 200px;font-size: 10pt">شماره تماس اضطراری : <?= $row['mobile'] ?></td>
                </tr>


                <tr>
                    <td style="width: 200px">شهر :
                        <?= $row['city_name'] ?>
                    </td>
                    <td style="width: 200px;font-size:10pt">شماره تماس ثابت : <?= $row['tel'] ?></td>
                </tr>


            </table>

            <br>

            <?php
            $first=0;
        }
        ?>
    </div>


    <div class="send_types">

        <style>


            .send_types h4 {
                position: relative;

                font-weight: normal;
                font-size: 14pt;
            }

            .send_types {
                float: right;
                width: 100%;
                margin-top: 50px;
            }

            .send_types table {

                width: 100%;
                margin-bottom: 50px;
            }

        </style>
        <h4>انتخاب شیوه ارسال</h4>


        <?php
        $PostType = $data['PostType'];
        $first=1;
        foreach ($PostType as $row) {

            ?>
            <table data-id="<?= $row['id']; ?>" data-post-type="<?= $row['city']; ?>" class="table_post  <?php if($first==1){echo 'active';} ?>" cellspacing="0">


                <tr>
                    <td class="select_post" style="width: 60px;position: relative;cursor: pointer">

                        <span class="triangle"></span>
                        <span class="circle"></span>
                    </td>
                    <td style="width: 980px">
                        <img style="float: right;margin-top: 17px" src="public/images/post_48_icon.png ">

                        <div style="float: right;margin-right: 10px">

                            <p style="font-size: 12pt;margin: 12px 8px;">
                                <?= $row['title'] ?>
                            </p>


                            <p style="font-size: 10.5pt;margin: 12px 8px;color: #7f8a9c">

                                <?= $row['description'] ?>
                            </p>

                        </div>
                    </td>
                    <td>
                        <p style="text-align: center;margin-bottom: -16px;">هزینه ارسال</p>
                        <p style="text-align: center;color: #42c714;font-size: 15pt">
                            250,000
                        </p>


                        <p style="text-align: center;margin-top: -23px;"> تومان</p>
                    </td>
                </tr>
            </table>

            <?php
            $first=0;
        }

        ?>



        <div style="margin-top: 15px;float: right;width: 100%">
            <a  href="showcart3"  onclick="getPostPrice();" class="btn_btn"
                  style="float: left;display: block;background: #169ff6;margin-left:0;width: 160px">
                ذخیره و مرحله بعد
            </a>

        </div>
    </div>
</div>


<style>


    .btn_btn {
        width: 110px;
        height: 37px;
        border-radius: 4px;
        background: rgba(0, 0, 255, .5);
        display: block;
        float: left;
        margin-left: 67px;
        cursor: pointer;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
        text-align: center;
        font-size: 13pt;
        line-height: 33px;
        color: #fff;

    }


</style>


<script>

    
    function deleteAddress(id) {
        var url='showcart2/deleteaddress/'+id;
        var data={};
        $.post(url,data,function (msg) {
            window.location='showcart2/index';
        });

    }

    function getPostPrice() {
        var url = 'showcart2/getpostprice/';
        var tableActive= $('.table_address.active');
        var cityId =tableActive.attr('data-city');
        var addressId =tableActive.attr('data-id');
        // alert(addressId);

        var postId = $('.table_post.active').attr('data-post-type');
        var data = {'cityId': cityId, 'addressId': addressId};
        $.post(url, data, function (msg) {

        });


    }


    $('.select_address').click(function () {

        $('.table_address').removeClass('active');
        $(this).parents('table').addClass('active');

    });

    $('.select_post').click(function () {

        $('.table_post').removeClass('active');
        $(this).parents('table').addClass('active');

    });


    editAddressId = '';

    function editAddress(addressId) {

        editAddressId = addressId;
        var url = 'showcart2/editaddress/' + addressId;
        var data = {};

        $.post(url, data, function (msg) {
            console.log(msg);

            $('input[name=family]').val(msg['family']);
            $('input[name=mobile]').val(msg['mobile']);
            $('input[name=tel]').val(msg['tel']);
            $('textarea[name=address]').val(msg['address']);
            $('input[name=codeposti]').val(msg['codeposti']);


            var state = msg['ostan'];
            var city = msg['city'];

            $('.state option').each(function (index) {

                var value_ostan = $(this).val();
                if (value_ostan == state) {
                    $(this).attr('selected', 'selected');
                    ldMenu(value_ostan, 'city');
                    $('.selectpicker').selectpicker('refresh');
                }

            });

            $('.city option').each(function (index) {
                var city_value = $(this).val();
                if (city_value == city) {

                    $(this).attr('selected', 'selected');
                    $('.selectpicker').selectpicker('refresh');
                }
            });


            $('#add_address').fadeIn(200);
            $('#dark').fadeIn(200);
        }, 'json');
    }


    function refreshaddress() {

        var url = 'showcart2/refreshaddress/';
        var data = {};

        $.post(url, data, function (msg) {
            var addressInfo = msg[0];
            console.log(msg);
            //createAddressList(addressInfo);
        }, 'json');

    }


</script>


<?php
require('addaddress.php');
?>
