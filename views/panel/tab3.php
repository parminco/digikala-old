<style>
    .favorits ul {

        padding: 10px;
        background: #eee;
        border: 1px dashed;
        width: 96%;
        float: right;

    }

    .favorits ul li {
        width: 280px;
        height: 50px;
        margin-right: 20px;
        float: right;

    }

    .favorits ul li a {
        display: block;
        height: 100%;
        position: relative;
        line-height: 46px;
        cursor: pointer;
    }

    .favorits ul li.active a {
        background: #fff;
        border: 1px solid #ccc;

    }

    .favorits ul li a:hover {
        background: #fff;
        border: 1px solid #ccc;

    }

    .active {
        background: #fff;
        border: 1px solid #ccc;

    }

    .favorits ul li a .folder {
        vertical-align: middle;

    }

    .favorits ul li a span {
        font-family: '2  Homa';
        font-size: 11.3pt;
        margin-right: 7px;

    }

    .favorits ul li a .edit {
        position: absolute;
        top: 7px;
        left: 15px;
        display: none;
        cursor: pointer;

    }

    .folderInput {
        border: 1px solid #ccc;
        width: 172px;
        height: 13px;
        padding: 5px;
        font-family: '2  Homa';
    }

    .btnSave {
        background: #0f0;
        border-radius: 2px;
        bottom: 1px;
        color: #000;
        cursor: pointer;
        display: block;
        left: 1px;
        padding: 0 3px;
        position: absolute;
        text-align: center;
        display: none;
        width: 31px;
        height: 19px;
        line-height: 18px;
        font-size: 10pt;
    }

</style>
<section class="favorits" style="display: none">
    <ul>
        <li onclick="getFavorit(0,this)">
            <a>
                <img class="folder" src="public/images/folder_documents_all.png">
                <span>همه پوشه ها</span>
            </a>
        </li>
        <?php
        $Folder = $data['Folder'];
        foreach ($Folder as $row) {
            ?>
            <li onclick="getFavorit(<?= $row['id'] ?>,this)">
                <a>
                    <img class="folder" src="public/images/folder_documents_all.png">
                    <span class="title"><?= $row['title'] ?></span>
                    <img onclick="startEdit(this);" class="edit"
                         src="public/images/icon_edit_16.png">
                    <span class="btnSave" onclick="saveEdit(<?= $row['id'] ?>,this);">ذخیره</span>
                </a>
            </li>
        <?php } ?>
    </ul>

    <style>

        .favorits .item {
            float: right;
            width: 98%;
            margin-top: 10px;
            border: 1px dotted;

        }

        .favorits .item .right {
            float: right;

        }

        .favorits .item .right img {

            width: 110px;
            height: 110px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-top: 10px;
            margin-right: 5px;

        }

        .favorits .item .left {

            float: right;
            margin-right: 20px;
            width: 1010px;

        }

        .favorits .item .left h4 {

            font-size: 14pt;
            font-weight: normal;
            font-family: '2  Homa';
            margin: 0;
            position: relative;
            margin-top: 10px;
            margin-right: 5px;
        }

        .favorits .item .left h4 .edit {

            position: absolute;
            top: -2px;
            left: 0px;
            cursor: pointer;
        }

        .favorits .item .left h4 .delete {

            position: absolute;
            top: -2px;
            left: -23px;
            cursor: pointer;
        }

        .favorits .item .left .description {

            font-size: 12pt;
            font-weight: normal;
            font-family: '2  Homa';
            margin: 0;
            margin-top: 10px;
            position: relative;
        }


    </style>


    <div class="items">

    </div>

</section>


<script>


    $('.favorits li .edit').click(function (e) {
        e.stopPropagation();
    });
    $('.favorits li .btnSave').click(function (e) {
        e.stopPropagation();
    });

    function startEdit(tag) {
        var imgTag = $(tag);
        var liTag = imgTag.parents('li');
        liTag.find('.btnSave').fadeIn(200);
        var spanTitle = liTag.find('.title');
        var title = spanTitle.text();
        var inputTag = '<input class="folderInput" type="text" value="' + title + '">';
        spanTitle.html(inputTag);

        // spanTitle.append(title);

        $('.favorits li input').click(function (e) {
            e.stopPropagation();
        });

    }

    function saveEdit(folderId, tag) {

        var spanTag = $(tag);
        var liTag = spanTag.parents('li');
        var inputTag = liTag.find('.title input');
        var newName = inputTag.val();

        var Url = 'panel/saveEdit/';
        var data = {'folderId': folderId, 'newNam': newName};
        $.post(Url, data, function (msg) {
            liTag.find('.title').html(newName);
            liTag.find('.btnSave').fadeOut(200);
        });
    }


    function deletefavorit(favoritId, tag) {

        var item = $(tag).parents('.item');
        var Url = 'panel/deletefavorit/';
        var data = {'favoritId': favoritId};
        $.post(Url, data, function (msg) {
            item.remove();
        });
    }

    function getFavorit(FolderId, tag) {
        var liTag = $(tag);
        $('.favorits li').removeClass('active');
        liTag.addClass('active');


        var url = 'panel/getfavorit/';
        var data = {'folderid': FolderId};
        $('.items').html('');
        $.post(url, data, function (msg) {
            $.each(msg, function (index, val) {
                var item = '<div class="item"><div class="right"><img src="public/images/products/' + val['idproduct'] + '/product_220.jpg"></div><div class="left"><h4>' + val['productTitle'] + '<img class="edit" src="public/images/Edit.gif"><img onclick="deletefavorit(' + val['id'] + ',this)" class="delete" src="public/images/Delete.gif"></h4></div></div>';
                console.log(item);
                $('.items').append(item);
            });
        }, 'json');
    }


    $('.favorits ul li a').hover(function () {
        $('.edit', this).fadeIn(0);
    }, function () {
        $('.edit', this).fadeOut(0);
    });


</script>