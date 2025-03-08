<style>
    #tab {
        width: 1200px;
        float: right;
        margin-top: 20px;
        padding: 0;
        display: block;
        background: #f5f6f7;
        border-top-right-radius: 4px;
        border-top-left-radius: 4px;
        overflow: hidden;
        cursor: pointer;
    }

    #tab li {
        float: right;
        padding: 9px;
        font-size: 12pt;
        font-family: "2  Homa";
        font-size: 11pt;
        border-left: 1px solid #ccc;
        position: relative;
        padding-right: 14px;

    }

    #tab li::before {

        background: url("public/images/slices.png") no-repeat;
        width: 30px;
        height: 26px;
        content: " ";
        display: block;
        position: absolute;
        right: 6px;
        top: 18px;

    }

    #tab li.active {
        background: #34768f;
        border-bottom: 1px solid #000;
        box-shadow: 0 -2px 4px rgba(0, 0, 0, .2);
        color: #ffffff;

    }

    .itemcontainer .item .description {

        display: none;
    }

    table .details {
        display: none;
    }

    .message {
        background-color: red;
        width: 25px;
        border-radius: 50%;
        height: 25px;
        display: inline-block;
        line-height: 24px;
        text-align: center;
        color: #fff;
        font-size: 10pt;
    }
</style>
<?php
$activTab=$data['activTab'];
$Message = $data['Message'];
$NotSeen = 0;
foreach ($Message as $row) {
    if ($row['status'] == 0) {
        $NotSeen += 1;
    }
}

?>
<ul id="tab">

    <li class=" <?php if ($activTab=='message'){ echo 'active'; }?>">
        پیغام های من
        <?php
        if ($NotSeen > 0) { ?>
            <span class="message"><?= $NotSeen ?></span>
        <?php } ?>
    </li>

    <li>سفارشات من</li>

    <li>لیست موردعلاقه</li>

    <li> نقدهای من</li>

    <li>نظرات من</li>

    <li class="<?php if ($data['activTab']=='digibon'){ echo 'active'; }?>">دیجی بن های من</li>
</ul>

<div id="tabchilds">

    <?php

    require('tab1.php');
    require('tab2.php');
    require('tab3.php');
    require('tab4.php');
    require('tab5.php');
    require('tab6.php');

    ?>


    <style>

        #tabchilds {
            width: 1200px;
            float: right;

            overflow: hidden;
            background: #fff;

            border-bottom-right-radius: 4px;
            border-bottom-left-radius: 4px;

        }

        #tabchilds section {
            padding: 10px;
            font-family: yekan;
            font-size: 14pt;
            display: none;
            float: right;
            width: 100%;

        }

        #tabchilds section:first-child {
            /*display: block;*/
        }

        #tabchilds section > table {
            width: 98%;
        }

        #tabchilds section > table td {
            text-align: center;
            padding: 4px;
            border-left: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
        }

        #tabchilds section > table tr {

            background: #d2fff0;
            font-size: 11.7pt;
            font-family: '2  Homa';

        }

        #tabchilds section > table tr:first-child {

            background: #34768f;
            color: #ffffff;
            font-size: 11.7pt;
            font-family: '2  Homa';

        }

        #tabchilds section > table .subtable {
            box-shadow: 0 0 5px #ccc;
            background: #fff;
            padding: 10px;
            border-radius: 4px;
            overflow: hidden;
        }

        #tabchilds section > table .subtable table {
            width: 100%;

        }

        #tabchilds section > table .subtable > table tr {
            background: #cafffa !important;

        }

        #tabchilds section > table .subtable > table tr td:first-child {
            border-right: 1px solid #ccc;

        }

        #tabchilds section > table .subtable > table tr:first-child {
            background: #ffdef0 !important;
            color: #000;
            font-size: 11pt;

        }

        h4.title {
            font-size: 13pt;
            font-family: '2  Homa';
            background: #ffdef0;
            margin: 10px 0;
            font-weight: normal;
            padding-right: 10px;
        }

        .myorders .subtable .more {
            margin-top: 100px;
        }

        .myorders .subtable .more table {

            width: 100%;
        }

        .myorders .subtable .more table tr {
            background: #fff !important;
            color: #000 !important;
            font-size: 10.4pt !important;

        }

        .myorders .subtable .more table tr td {
            width: 33%;

        }

        .myorders .subtable .more table tr td:last-child {
            border-left: none !important;

        }
    </style>

</div>
