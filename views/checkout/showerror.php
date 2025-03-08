<?php

$Error = $data['Error'];
$Orderid = $data['Orderid'];

?>
<style>
    #main {
        width: 1200px;
        height: 500px !important;
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
        margin: -32px auto;
    }

    .error {
        border: 1px solid  #f5c6cb;
        padding: .75rem 1.25rem;
        color: #721c24;
        border-radius: .25rem;
        background-color:#f8d7da;
        text-align: center;
        width: 400px;
        height: 26px;
        margin: 50px auto;
    }
    }
</style>
<div id="main">


    <p class="error"><?=$Error?></p>
    <a class="btn" href="checkout/index/<?=$Orderid?>">بازگشت</a>
</div>

