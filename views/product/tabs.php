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
        font-family: '2  Homa';
        border-left: 1px solid #ccc;
        position: relative;
        padding-right: 37px;

    }

    #tab li::before {

        background: url("public/images/slices.png") no-repeat;
        width: 30px;
        height: 26px;
        content: " ";
        display: block;
        position: absolute;
        right: 6px;
        top: 13px;

    }

    #tab .naghd::before {
        background-position: -105px -266px;
    }

    #tab .fanni::before {
        background-position: -315px -266px;
    }

    #tab .nazar::before {
        background-position: -261px -266px;
    }

    #tab .soal::before {
        background-position: -210px -266px;
    }

    #tab .naghd.active::before {
        background-position: -105px -308px;
    }

    #tab .fanni.active::before {
        background-position: -315px -308px;
    }

    #tab .nazar.active::before {
        background-position: -261px -308px;
    }

    #tab .soal.active::before {
        background-position: -210px -308px;
    }

    #tab li.active {
        background: #c3f1ff;
        border-bottom: 1px solid #000;
        box-shadow: 0 -2px 4px rgba(0, 0, 0, .2);

    }

    .itemcontainer .item .description {

        display: none;
    }

</style>

<ul id="tab">
    <li class="naghd active">نقد و بررسی تخصصی</li>
    <li class="fanni">مشخصات فنی</li>
    <li class="nazar"> نظرات کاربران</li>
    <li class="soal">پرسش و پاسخ</li>
</ul>


<style>

    #tabchilds {
        width: 1200px;
        float: right;
        border-bottom-right-radius: 4px;
        border-bottom-left-radius: 4px;
        overflow: hidden;
        background: #fff;

    }

    #tabchilds section {
        padding: 10px;
        font-size: 14pt;
        display: none;
        float: right;
        width: 100%;

    }

    #tabchilds section:first-child {
        display: block;
    }

    #tabchilds .item {

        padding: 7px;
    }

    #tabchilds .item h4 {
        font-size: 15.5pt;
        font-family: '2  Homa';
        margin: 5px;
        position: relative;
        padding-right: 40px;
        cursor: pointer;
    }

    #tabchilds .item h4 span {
        z-index: 2;
        position: relative;
        background: #ffffff;
    }

    #tabchilds .item h4::after {
        content: " ";
        width: 100%;
        height: 1px;
        background: #eee;
        position: absolute;
        top: 17px;
        left: 0;
    }

    #tabchilds .item h4 i {
        background: url("public/images/slices.png") no-repeat -258px -614px;
        width: 31px;
        height: 56px;
        display: block;
        position: absolute;
        right: -28px;

    }

    #tabchilds .item h4.active i {
        background: url("public/images/slices.png") no-repeat -207px -614px;
        right: -29px;

    }

    #tabchilds .item:first-child h4 i {

        background: url("public/images/slices.png") no-repeat -153px -615px;
        width: 31px;
        height: 44px;
        display: block;
        position: absolute;
        right: -28px;
        top: -16px;
    }

    #tabchilds .item:first-child h4.active i {

        background: url("public/images/slices.png") no-repeat -100px -615px;
        right: -30px;
    }

    #tabchilds .item:last-child h4 i {

        background: url("public/images/slices.png") no-repeat -313px -615px;
        width: 31px;
        height: 44px;
        display: block;
        position: absolute;
        right: -29px;
        top: 9px;
    }

    #tabchilds .item:last-child h4.active i {

        background: url("public/images/slices.png") no-repeat -207px -614px;
        right: -29px;

    }

    .itemcontainer {
        margin-right: 20px;
        border-right: 3px solid #f0f1f2;
    }

    .morama {
        width: 42px;
        height: 3px;
        position: relative;
        float: right;
        background: #fff;
        z-index: 2;

    }


</style>
<div id="tabchilds">

    <section>

    </section>

    <section class="section_fanni">


    </section>

    <section>


    </section>

    <section id="questions">

    </section>


</div>


<script>


    $('#tab li').click(function () {
        changeTab($(this));
    });

    function changeTab(tag) {
        $('#tab li').removeClass('active');
        tag.addClass('active');
        $('#tabchilds section').fadeOut(0);

        var index = tag.index();
        var select_section = $('#tabchilds section').eq(index)
        var url = '<?= URL ?> product/tab/<?= $productInfo['id'];?>/<?= $productInfo['cat'];?>';
        var data = {'id': index};
        $.post(url, data, function (msg) {

            select_section.html(msg);
        })

        select_section.fadeIn(200);
    }

    $('.<?= $data['activeTab']?> ').trigger('click');


</script>