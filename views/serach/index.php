<style>
    #main {
        width: 1150px;
        margin: 10px auto;
        background: #fff;
        box-shadow: 0 1px 3px #eee;
        border-radius: 4px;
        overflow: hidden;
        padding: 25px;
        font-family: "2  Homa";
    }

    #content {
        width: 880px;
        float: left;
    }

    .horizental_row {
        height: 1px;
        margin: 15px;
        background: #ccc;

    }

    #main::after {
        content: "";
        clear: both;
        display: block
    }


</style>

<div id="main">
    <form id="form_search" action="search/doSearch" method="post">
        <?php
        require('sidebar.php');
        ?>


        <div id="content">

            <?php
            require('navigator.php');
            require('filter_top.php');
            require('serach.php');
            require('products.php');
            ?>

        </div>
    </form>
</div>
<script>

    var current_page = 1;

    function doSearch(page) {
        if (typeof page != 'undefined') {
            current_page = page;
        }
        else {
            current_page = 1;
        }
        if (current_page < 1) {
            current_page = 1;
        }
        var last_page = '';
        last_page = $('#pagination ul li:last').text();
        if (current_page > last_page) {
            current_page = last_page;
        }


        var data = $('#form_search').serializeArray();
        var exist = 0;
        if ($('.exist').hasClass('active') == true) {
            exist = 1;
        }


        data.push({'name': 'exist', 'value': exist});

        var keyword = $('#keyword').val();
        data.push({'name': 'keyword', 'value': keyword});


        data.push({'name': 'current_page', 'value': current_page});

        var Url = 'search/doSearch';

        $.post(Url, data, function (msg) {
            $('#products ul').html('');
            $.each(msg[0], function (index, val) {

                var item = '<li><a href="product/index/' + val['id'] + '"><div class="right"><div class="text-center" style="margin-top:8px "><img src="public/images/products/' + val['id'] + '/product_220.jpg"><div class="colors"><span class="color" style="background: #289207"></span><span class="color" style="background: #2a24f8"></span><span class="color" style=" background: #f20f59 "></span></div><div class="stars text-center"><div class="gray"><div class="red"></div></div></div></div></div><div class="left"><div class="title yekan">' + val['title'] + '</div><div class="description"><p class="introductionPTag">' + val['introduction'] + '</p></div><div class="price yekan"><p class="yekan price_red">تومان' + val['price'] + '</p><p class="yekan price_green">تومان' + ((val['price'] * val['discount']) / 100) + '</p></div></div></a></li>';

                $('#products ul').append(item);
            });

            var page_number = msg[1];

            var active = '';
            $('#pagination ul').html('');

            var i = '';
            var start=current_page-1;
            if (start<1)
            {
                start=1;
            }

            var end=current_page+3;
            if (end>page_number)
            {
                end=page_number;
            }
            for (i = start; i <= end; i++) {
                if (i == current_page) {
                    active = 'active';
                }
                else {
                    active = '';
                }
                $('#pagination ul').append('<li onclick="pagination(this,' + i + ');" class="' + active + '">' + i + '</li>');
            }


        }, 'json');


    }

    doSearch();
</script>