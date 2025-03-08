<div class="main" style=" margin-top: 10px;width: 1200px;padding: 10px;  background: white">

    <style>
        .main::after {
            content: " ";
            clear: both;
            display: block;
        }

        .main {
            font-size: 11pt;
            font-family: "2  Homa";
        }

        .right {
            width: 240px;
            border: 1px solid #cccccc;
            float: right;
            padding: 10px;
            background-color: #ffffff;

        }

        .left {
            width: 900px;
            height: 100%;
            box-shadow: 1px 1px 3px #cccccc;
            float: left;
            padding: 10px;

        }

        .right ul {
            padding: 0;
            margin: 0;
        }

        .right ul li a {
            display: block;
            padding: 10px;
            border-bottom: 1px dashed #cccccc;
            cursor: pointer;
            color: black;

        }

        .right ul li a:hover {
            background-color: #84ffff;
        }

        .right ul li a.active {
            background-color: #84ffff;
        }

        .title {
            border-bottom: 1px solid #ccc;
            margin-top: 0px;
            background: #d5ffd7;
            padding: 10px;
            box-shadow: 0 -2px 3px #ccc;
        }

        table.list {
            width: 100%;
        }

        table.list td {
            padding: 5px;
            font-size: 12pt;
            border: 1px solid #eeeeee;
            font-family: Tahoma;
        }

        .btn_green_small {
            background: #3cbd0d;
            border-radius: 4px;
            color: #FFF;
            float: left;
            font-size: 11pt;
            margin-bottom: 3px;
            padding: 4px 15px;
            text-align: center;
            margin-right: 5px;
            cursor: pointer;
            overflow: hidden;
        }

        .btn_red_small {
            background: #ff0000;
            border-radius: 4px;
            color: #FFF;
            float: left;
            font-size: 11pt;
            margin-bottom: 3px;
            padding: 4px 15px;
            text-align: center;
            cursor: pointer;
            overflow: hidden;
        }

        .icon {
            position: relative;
            right: -5px;
            top: 6px;
            width: 19px;
        }
    </style>

    <div class="right">
        <ul>
            <li>
                <a class=" <?php if ($active == 'dashbord') {
                    echo 'active';
                } ?>"  href="admindashbord/index">

                    داشبورد
                </a>
            </li>
            <li>
                <a class=" <?php if ($active == 'category') {
                    echo 'active';
                } ?>"  href="admincategory/index">
                    <img class="icon" src="public/images/circle.png">
                    مدیرت دسته ها
                </a>
            </li>
            <li>
                <a class=" <?php if ($active == 'product') {
                    echo 'active';
                } ?>" href="adminproduct/index">
                    <img class="icon" src="public/images/circle.png">
                    مدیریت محصولات
                </a>
            </li>
            <li>
                <a class=" <?php if ($active == 'order') {
                    echo 'active';
                } ?>" href="adminorder/index">
                    <img class="icon" src="public/images/circle.png">
                    مدیریت سفارشات
                </a>
            </li>

            <li>
                <a class=" <?php if ($active == 'stat') {
                    echo 'active';
                } ?>" href="adminstat/index">
                    <img class="icon" src="public/images/circle.png">
                  آمار و گزارشات
                </a>
            </li>

            <li>
                <a class=" <?php if ($active == 'comment') {
                    echo 'active';
                } ?>" href="admincomment/index">
                    <img class="icon" src="public/images/circle.png">
نظرات
                </a>
            </li>

            <li>
                <a class=" <?php if ($active == 'setting') {
                    echo 'active';
                } ?>" href="adminsetting/index">
                    <img class="icon" src="public/images/circle.png">
                    تنظیمات
                </a>
            </li>

            <li>
                <a class=" <?php if ($active == 'slider') {
                    echo 'active';
                } ?>" href="adminslider/index">
                    <img class="icon" src="public/images/circle.png">
                    مدیریت اسلایدشو
                </a>
            </li>

        </ul>
    </div>
    <script>
        function submitForm() {
            $('form').submit();
        }
    </script>