<style>
    select {
        font-family: "2  Homa";
        border: 1px solid #ccc;
        width: 100px;
        height: 25px;
        padding: 0 5px;
    }

    .filter_top {
        padding: 0;
        float: right;
        width: 100%;
        margin-top: 15px;
    }

    .filter_top > li {
        width: 140px;
        height: 23px;
        float: right;
        font-size: 10pt;
        background: #eee;
        border-radius: 3px;
        border: 1px solid #ccc;
        margin-left: 10px;
        padding-right: 4px;
        margin-bottom: 3px;
        position: relative;
        cursor: pointer;
    }

    .filter_top li img {
        width: 9px;
        margin: -1px 22px;
    }

    .filter_top li .options {
        display: none;
        width: 155px;
        height: 205px;
        background: #fff;
        box-shadow: -4px 4px 3px rgba(0, 0, 0, .2);
        border-right: 1px solid #ccc;
        position: absolute;
        border-radius: 4px;
        top: 24px;
        right: -1px;
        z-index: 2;
        overflow-y: auto;
        overflow-x: hidden;
    }

    .filter_top li .options li {
        line-height: 19px;
        padding-right: 12px;
        cursor: pointer;
    }

    .filter_top .options .square {

        width: 10px;
        height: 10px;
        background: url("public/images/spritefiltercontrols.png") no-repeat -58px -154px;
        display: inline-block;
        position: relative;
        top: 3px;
        margin-left: 2px;
    }

    .square_hover {
        background: url("public/images/spritefiltercontrols.png") no-repeat -58px -205px !important;
    }

    .square_selected {
        background: url("public/images/spritefiltercontrols.png") no-repeat -58px -256px !important;
    }

    #filter_selected i {
        width: 18px;
        height: 18px;
        background: url("public/images/spritefiltercontrols.png") no-repeat -54px -380px;
        display: inline-block;
        position: relative;
        top: 7px;
        margin-left: 5px;
        margin-right: 10px;
        cursor: pointer;
    }

    .filter_selected_span {
        background: #eee;
        font-size: 10pt;
        border-radius: 2px;
        margin-left: 10px;
        box-shadow: 1px 1px 3px rgba(0, 0, 0, .19);
        font-family: "2  Homa";
        padding: 0 5px;
    }

</style>

<div id="filter_selected">
</div>
<ul class="filter_top">
    <?php
    $attr = $data['attr'];
    foreach ($attr as $row) {
        ?>
        <li class="yekan">
            <span class="title"><?= $row['title'] ?></span>
            <img src="public/images/back.png">
            <div class="options">
                <ul style="padding-right: 0;padding-top: 10px;">

                    <li data-id="0" class="yekan">
                        <span class="square"></span> نمایش همه
                    </li>
                    <div class="horizental_row"></div>
                    <?php
                    $values = $row['values'];
                    foreach ($values as $val) {

                        ?>

                        <li data-id="<?=$val['id']?>" data-idattr="<?=$row['id']?>" class="yekan">
                            <span class="square"></span>
                            <?=$val['val']?>

                        </li>
                    <?php }
                    ?>
                </ul>
            </div>
        </li>
        <?php
    }
    ?>

</ul>
<div class="horizental_row" style="float: right;width: 96%;"></div>


<script>


    var filters = $('.filter_top > li');
    filters.hover(function () {

        $('.options', this).slideDown(200);

    }, function () {

        $('.options', this).slideUp(200);

    });


    var items = $('.filter_top .options li');
    items.hover(function () {
        $('.square', this).addClass('square_hover');

    }, function () {

        $('.square', this).removeClass('square_hover');

    });

    items.click(function () {
        var title = $(this).parents('li').find('.title').text();
        var value = $(this).text();
        var id = $(this).attr('data-id');
        var idAttr = $(this).attr('data-idattr');
        var filter_selected = $('#filter_selected');
        var filter_selected_span = filter_selected.find('span[data-id=' + id + ']');
        var len = filter_selected_span.length;

        if (len > 0) {
            filter_selected_span.remove();
        } else {
            var span = '<span data-id="' + id + '"  class="filter_selected_span">' + title + ':' + value + '<i class="remov_filter" onclick="removeSelcted(this)"></i><input type="hidden" name="attr-'+idAttr+'[]" value="'+id+'"></span>';
            filter_selected.append(span);


        }

        $('.square', this).toggleClass('square_selected');
        doSearch();
    });

    function removeSelcted(tag) {

        var span_tag = $(tag).parent('span');
        span_tag.remove();
        var id = span_tag.attr('data-id');
        $('.options li[data-id=' + id + ']').find('.square').removeClass('square_selected');

        doSearch();

    }

</script>


