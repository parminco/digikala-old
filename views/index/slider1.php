<div id="slider" style="position: relative">


    <span id="prev"></span>

    <span id="next"></span>


    <div id="slider_img">

        <?php
        $slider1 = $data[0];
        foreach ($slider1 as $slider) {

            ?>

            <a class="item" href="<?= $slider['link']; ?>">
                <img src="<?= $slider['img']; ?>">
            </a>

            <?php
        }
        ?>


    </div>
    <div id="slider_navigator">

        <ul>
            <?php
            $slider1 = $data[0];
            foreach ($slider1 as $slider) {

                ?>
                <li class="">
                    <a class="yekan fontsm">
                       <?= $slider['title']?>
                    </a>
                </li>

                <?php
            }
            ?>




        </ul>


    </div>
</div>
