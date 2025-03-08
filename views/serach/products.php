<style>
    #pagination {
        float: right;
        width: 100%;
        text-align: left;
    }

    #pagination .prev {
        line-height: 18px;
        font-size: 10pt;
        float: left;
        width: 60px;
        height: 20px;
        display: block;
        border: 1px solid #ccc;
        text-align: center;
        border-radius: 4px;
        box-shadow: 0 2px 2px rgba(0, 0, 0, .2);
        background: #f4f4f4;
        cursor: pointer
    }

    #pagination .next {
        line-height: 18px;
        font-size: 10pt;
        float: left;
        width: 60px;
        height: 20px;
        display: block;
        border: 1px solid #ccc;
        text-align: center;
        border-radius: 4px;
        box-shadow: 0 2px 2px rgba(0, 0, 0, .2);
        background: #f4f4f4;
        cursor: pointer !important;

    }

    #pagination ul {
        padding: 0;
        float: left
    }

    #pagination ul li {
        line-height: 19px;
        font-size: 10pt;
        float: left;
        width: 25px;
        height: 20px;
        display: block;
        border: 1px solid #ccc;
        text-align: center;
        box-shadow: 0 2px 2px rgba(0, 0, 0, .2);
        background: #f4f4f4;
        cursor: pointer;
        margin-right: 4px;
        margin-left: 4px;

    }

    #pagination ul li.active {

        color: #fff;;
        background: red;
    }

    #products {
        float: right;
        width: 100%;
        margin-top: 30px;
    }

    #products ul {
        padding: 0;
        width: 100%;
    }

    #products ul li {
        width: 200px;
        height: auto;
        float: right;
        margin-right: 10px;
        margin-bottom: 10px;
        padding: 5px;

    }

    #products ul li:hover {
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, .1);
        position: relative;
        top: -10px;
    }

    #products ul li a {
        display: block;
        height: 100%;
    }

    #products .colors {
        text-align: center;
    }

    #products .colors .color {
        display: inline-block;
        width: 14px;
        height: 14px;
        border: 1px solid #ccc;
        border-radius: 50%;
    }

    .text-center {
        text-align: center;
    }

    .gray {
        width: 55px;
        height: 9px;
        background: url("public/images/stars.png") 0 -9px repeat;
        margin: 0 auto;
        position: relative
    }

    .red {
        width: 50%;
        height: 9px;
        background: url("public/images/stars.png") repeat;
        position: absolute;
        top: 0;
        left: 0;
    }

    #products .title {
        font-size: 10.8pt;
        padding: 0 6px;
        text-align: center;
        color: #000;
    }

    .price_red {
        font-size: 11.8pt;
        color: red;
        text-decoration: line-through;
        margin: 0;
        text-align: center;
    }

    .price_green {
        font-size: 13.8pt;
        color: green;
        margin: 0;
        text-align: center;
    }

    .price {

        padding: 0 6px;
    }

    .display1 li {
        width: 100% !important;
    }

    .display1 .right {
        float: right;
        width: 217px;
    }

    .display1 .left {

        float: left;
        width: 660px;
    }

    .display1 .title {

        text-align: right !important;
        font-size: 14pt !important;
    }

    #products .description {
        height: 208px;
        display: none;
        font-size: 12pt;
    }

    .display1 .description {
        display: block !important;
    }

    #products li img {
        width: 95%;

    }

    .introductionPTag {
        font-size: 12pt;
        color: black;
        margin-bottom: 10px;
    }
</style>
<div id="pagination">


    <span class="prev" onclick="doSearch(current_page-1);">صفحه قبل</span>
    <ul>
        <li>1</li>
    </ul>
    <span class="next" onclick="doSearch(current_page+1);">صفحه بعد</span>

</div>


<div id="products" class="">
    <ul>
    </ul>
</div>

<script>
    function pagination(tag,page) {
        var liTag = $(tag);

        $('#pagination ul li').removeClass('active');
        liTag.addClass('active');

        doSearch(page);
    }

</script>