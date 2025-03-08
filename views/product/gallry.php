<style>

    #product_gallry {

        width: 900px;
        height: 600px;
        position: fixed;
        background: #fff;
        top: 30px;
        left: 231px;
        z-index: 5;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 0 3px 3px black;
        display: none;
    }

    #dark {

        position: fixed;
        background: rgba(0, 0, 0, .30);
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 4;
        display: none;
    }

    #product_gallry p {

        font-family: yekan;
        font-size: 14pt;
        padding: 8px;
        margin: 0;
        background: #4fdcef;
        position: relative;
    }

    #product_gallry p .close {
        width: 28px;
        height: 28px;
        background: url("public/images/slices.png") no-repeat #ffffff -134px -123px;
        position: absolute;
        display: block;
        left: 20px;
        top: 9px;
        border-radius: 50%;
        cursor: pointer;
    }

    #product_gallry .right {
        width: 700px;
        height: 548px;
        float: right;
        position: relative;
        top: 50px;
        text-align: center;

    }

    #product_gallry .left {
        width: 199px;
        height: 548px;
        height: 100%;
        float: left;
        border-right: 1px solid #ccc;

    }

    #product_gallry .left ul {
        padding: 0;
        width: 100%;

    }

    #product_gallry .left ul li {
        width: 100%;
        height: 130px !important;
        text-align: center;
        margin-top: 10px;
        margin-bottom: 5px;
        border-bottom: 1px solid #ccc;
        cursor: pointer;
        opacity: .6;

    }

    #product_gallry .left ul li.active {
        opacity: 1 !important;

    }

    #product_gallry .left ul li img {
        max-height: 100%;
        max-width: 100%;

    }

    #product_gallry .right .item {

        display: none;
    }

    .icon3d {

        width: 45px;
        height: 44px;
        background: url("public/images/slices.png") no-repeat -363px -117px;
        display: block;
        position: absolute;
        left: 4px;
        bottom: 4px;
    }
</style>


<div id="product_gallry">
    <p>
        <?= $productInfo['title']; ?>
        <span class="close"></span>
    </p>


    <div class="right">

        <canvas id="cv" width="420px" height="320px" style="position: relative;margin: auto;right: 10px"></canvas>

        <img class="mainimage" src="">


    </div>
    <div class="left">
        <ul>

            <?php
            $gallery = $data['gallery'];
            foreach ($gallery as $row) {
                if ($row['threed'] == 1) {
                    ?>
                    <li data-main-image="" style="position: relative;">
                        <img src="public/images/products/<?= $row['idproduct'] ?>/gallery/small/<?= $row['img'] ?>">
                        <span class="icon3d"></span>
                    </li>
                    <?php
                } else {
                    ?>
                    <li data-main-image="public/images/products/<?= $row['idproduct'] ?>/gallery/large/<?= $row['img'] ?>">
                        <img src="public/images/products/<?= $row['idproduct'] ?>/gallery/small/<?= $row['img'] ?>">
                    </li>
                    <?php
                }
            }
            ?>
        </ul>

    </div>

</div>


<div id="dark"></div>


<script>

    var canvasTag = document.getElementById('cv');
    var viewer = new JSC3D.Viewer(canvasTag, {

        SceneUrl: 'public/images/products/<?= $productInfo['id'] ?>/3d/bmw.obj',
        InitRotationX: -100,
        InitRotationY: -100,
        InitRotationZ: 0,
        RenderMode: 'texturesmooth'
    });
    viewer.init();
    viewer.update();
</script>

<script>

    var productGallery = $('#product_gallry');
    var productGalleryItems = productGallery.find('.item');

    function showGallry(imageUrl, index) {


        productGalleryThumbail.removeClass('active')

        productGalleryThumbail.eq(index).addClass('active');
        if (imageUrl.length > 0) {
            productGallery.find('.mainimage').attr('src', imageUrl);
            $('#cv').fadeOut(0);
            $('.mainimage').fadeIn(100);
        } else {
            $('.mainimage').fadeOut(0);
            $('#cv').fadeIn(100);
        }
    }

    var productGalleryThumbail = productGallery.find('.left ul li');

    productGalleryThumbail.click(function () {


        var index = $(this).index();
        var mainImageUrl = $(this).attr('data-main-image');
        showGallry(mainImageUrl, index);
    });


    productGallery.find('.close').click(function () {

        productGallery.fadeOut(200);
        $('#dark').fadeOut(200);

    });

    $('.gallery ul li').click(function () {


        $('#dark').fadeIn(200);
        productGallery.fadeIn(200);
        var index = $(this).index();
        if (index < 0) {
            index = 0;
        }

        var mainImageUrl = $(this).attr('data-main-image');
        showGallry(mainImageUrl, index);

    });


    $("#product_gallry .left").mCustomScrollbar({
        setWidth: false,
        setHeight: false,
        setTop: 0,
        setLeft: 0,
        axis: "y",
        scrollbarPosition: "inside",
        scrollInertia: 950,
        autoDraggerLength: true,
        autoHideScrollbar: false,
        autoExpandScrollbar: false,
        alwaysShowScrollbar: 0,
        snapAmount: null,
        snapOffset: 0,
        mouseWheel: {
            enable: true,
            scrollAmount: "auto",
            axis: "y",
            preventDefault: false,
            deltaFactor: "auto",
            normalizeDelta: false,
            invert: false,
            disableOver: ["select", "option", "keygen", "datalist", "textarea"]
        },
        scrollButtons: {
            enable: true,
            scrollType: "stepless",
            scrollAmount: "auto"
        },
        keyboard: {
            enable: true,
            scrollType: "stepless",
            scrollAmount: "auto"
        },
        contentTouchScroll: 25,
        advanced: {
            autoExpandHorizontalScroll: false,
            autoScrollOnFocus: "input,textarea,select,button,datalist,keygen,a[tabindex],area,object,[contenteditable='true']",
            updateOnContentResize: true,
            updateOnImageLoad: true,
            updateOnSelectorChange: false,
            releaseDraggableSelectors: false
        },
        theme: "3d-dark",

        callbacks: {
            onInit: false,
            onScrollStart: false,
            onScroll: false,
            onTotalScroll: false,
            onTotalScrollBack: false,
            whileScrolling: false,
            onTotalScrollOffset: 0,
            onTotalScrollBackOffset: 0,
            alwaysTriggerOffsets: true,
            onOverflowY: false,
            onOverflowX: false,
            onOverflowYNone: false,
            onOverflowXNone: false
        },
        live: false,
        liveSelector: null

    });

</script>
