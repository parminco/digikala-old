

<div class="sliderscroll" style="margin-top: 12px;float: right">

    <h3>پر بازدید ترین ها</h3>


    <div class="sliderscroll_content">
        <div class="sliderscroll_prev">
            <span class="prev" onclick="sliderscroll('right',this);"></span>
        </div>


        <div class="sliderscroll_main">
            <ul>

                <?Php
                $result=$data[4];
                foreach ($result as $row)
                {
                    ?>

                    <li>
                        <a  href="<?= URL ?>product/index/<?= $row['id']; ?>">
                            <img style="width: 150px" src="public/images/products/<?= $row['id'];?>/product_220.jpg">


                            <br>
                            <span class="yekan fontsm"><?= $row['title']; ?></span>

                            <br>
                            <span class="yekan price"><?=  $row['price'];?></span>
                        </a>
                    </li>
                <?php } ?>

            </ul>

        </div>


        <div class="sliderscroll_next">
            <span class="next" onclick="sliderscroll('left',this);"></span>
        </div>


    </div>

</div>
