<div id="main" style="width: 1200px;margin:10px auto;  ">

    <style>


        .box {

            font-family:  "2  Homa";
            font-size: 11pt !important;
            box-shadow: 0 3px 4px #000;

        }

        .box {
            border-radius: 4px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .box .header {
            height: 40px;
            background: #34768f;
            color: #fff;
            font-size: 12pt;
            padding: 7px;
            line-height: 41px;

        }

        .box .content {

            background: #ffffff;
        }

        .box .content table {
            width: 100%;
        }

        .box .content table td {
            padding: 10px;
        }

        .box .content table td .title {

            color: #2289a5;
        }

        .box .content table td .value {


        }
        a{
            cursor: pointer;
        }
    </style>

    <?php
    require ('user_profile.php');
    require ('gozaresh.php');
    require ('tab.php');



    ?>






</div>
<script>



    function showDetailsTr(tag) {
        var imgtag = $(tag);


        var src = imgtag.attr('src');
        if (src == 'public/images/orderdetailsclose.png') {
            imgtag.attr('src', 'public/images/orderdetailsopen.png');
        } else {
            imgtag.attr('src', 'public/images/orderdetailsclose.png');
        }


        var parentTr = imgtag.parents('tr');
        parentTr.next().fadeToggle(100);

    }


    $('#tab li').click(function () {

        $('#tab li').removeClass('active');
        $(this).addClass('active');
        $('#tabchilds section').fadeOut(0);
        var index = $(this).index();
        $('#tabchilds section').eq(index).fadeIn(200);


    });
</script>

