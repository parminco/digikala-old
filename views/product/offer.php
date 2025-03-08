
<style>
    .flipTimer {
        position: absolute;
        top: -19px;
        left: -161px;
        transform: scale(.3);
    }

    .flipTimer, .flipTimer div {
        direction: ltr !important;
    }

    #offer {
        height: 60px;
        background: #fff5f5 url("public/images/amazing-offer.png") no-repeat 97% center;
        position: relative;

    }

    #offer .discount {
        width: 200px;
        height: 28px;
        display: block;
        position: absolute;
        top: 17px;
        left: 240px;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 0 3px 3px #000;
    }

    #offer .discount .right {
        width: 125px;
        height: 100%;
        float: right;
        display: block;
        background: red;
        text-align: center;
        line-height: 23px;

    }

    #offer .discount .left {
        width: 75px;
        height: 100%;
        float: right;
        display: block;
        background: #fa42cd;
        float: right;
        text-align: center;
        line-height: 28px;
    }

    #offer .discount .right .number {
        font-size: 16pt;
        color: #fff;

    }

    #offer .discount .right .tuman {
        font-size: 10pt;
        color: #fff;
        display: inline-block;
        width: 33px;
    }

    #offer .discount .left span {
        font-size: 14pt;
        color: #fff;
        width: 33px;
    }

</style>

<div id="offer" style="z-index: -1">
        <span class="discount">
           <span class="right yekan">
               <span class="number yekan"> <?= number_format($productInfo['price_discount']); ?></span>

               <span class="tuman yekan">تومان</span>

           </span>
           <span class="left yekan">
               <span>تخفیف</span>
           </span>


        </span>
    <div class="flipTimer">
        <div class="hours"></div>
        <div class="minutes"></div>
        <div class="seconds"></div>

    </div>
</div>

<script>


    $('.flipTimer').flipTimer({

        direction: 'down',
        date: ' <?= $productInfo['date_special'];?>',
        callback: function () {
            $('.slider2_content_right').css('opacity', .4);
            $('.slider2_content_left').css('opacity', .4);
            $(".slider2_finished").fadeIn(200);
        }
    });

</script>