<style>
    #search {
        position: relative;
        width: 100%;
        float: right;
    }

    #search input {
        width: 330px;
        height: 17px;
        border: 1px solid #cbcbcb;
    }

    #search .exist {

        margin-right: 31px;
        position: relative;
        top: 6px;
        cursor: pointer;

    }

    #search .exist_back {
        background: url("public/images/btnchecked.png") no-repeat;
        display: inline-block;
        height: 21px;
        width: 40px;
    }

    #search .exist.active .exist_back {
        background-position: -40px 0;
    }

    #search .exist.active .exist_yesno {
        background-position: 0 0;
    }

    #search .exist_yesno {
        background: url("public/images/yesno.png") 0 -21px no-repeat;
        height: 21px;
        width: 30px;
        position: absolute;
        left: 4px;
        top: -1px;
    }

    .display_type {
        float: left;
    }

    .type1, .type2 {
        width: 24px;
        height: 24px;
        background: url("public/images/displaytype.png") no-repeat;
        display: block;
        float: left;
        cursor: pointer;

    }

    .type1.active {

        background-position: -24px 0;
    }

    .type2.active {

        background-position: 0 -24px;
    }

    .type1 {
        background-position: -24px -24px
    }

    div {
        font-family: '2  Homa';
    }

    #keyword_search {
        position: absolute;
        right: 314px;
        top: 8px;
        cursor: pointer;
    }
</style>
<div id="search">
    <input id="keyword" type="text">
    <img onclick="doSearch();" id="keyword_search" src="public/images/search2.png">

    <span class="exist">

                <span class="exist_back"></span>
                <span class="exist_yesno"></span>
                </span>
    <span class="yekan" style="font-size: 11pt;margin-right: 7px">فقط نمایش کالاهای موجود</span>


    <span class="display_type">
               <span class="yekan" style="font-size: 11pt;margin-left:14px">
                   نوع نمایش
               </span>
                <span class="type2 active"></span>
                <span class="type1"></span>

                </span>
</div>


<style>
    #sort {
        float: right;
        width: 100%;
        margin-top: 10px
    }

</style>

<div id="sort">

    <span class="yekan" style="font-size: 10.7pt">مرتب سازی براساس</span>
    <select name="orderType1" onchange="doSearch();">
        <option value="1">قیمت</option>
        <option value="2">پربازدید ترین</option>
        <option value="3">جدید ترین ها</option>
        <option value="4">پیشنهادویژه</option>
        <option value="5">پرفروش ترین</option>
    </select>

    <select name="orderType2" onchange="doSearch();">
        <option value="1">صعودی</option>
        <option value="2">نزولی</option>
    </select>

    <span class="yekan" style="font-size: 10.7pt">تعدا نمایش</span>

    <select id="limit"  name="limit" onchange="doSearch()">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
</div>
<script>

    $('.exist').click(function () {

        $(this).toggleClass('active');
        if ($(this).hasClass('active')) {
            $('.exist_yesno', this).animate({'left': '14px'}, 300);
        } else {
            $('.exist_yesno', this).animate({'left': '4px'}, 300);
        }
        doSearch();
    });


    $('.type1').click(function () {
        $('#products').addClass('display1');
        $(this).addClass('active');
        $('.type2').removeClass('active');

    });

    $('.type2').click(function () {
        $('#products').removeClass('display1')
        $(this).addClass('active');
        $('.type1').removeClass('active');
    });


</script>