

<script src="public/js/scroll/jquery.mCustomScrollbar.js"></script>
<script src="public/js/scroll/jquery.mousewheel.js"></script>
<link href="public/js/scroll/jquery.mCustomScrollbar.css" rel="stylesheet">


<script src="public/3d/jsc3d.js"></script>
<script src="public/3d/jsc3d.touch.js"></script>
<script src="public/3d/jsc3d.webgl.js"></script>




<div id="main" style="width: 1200px;margin: 10px auto;font-family:  '2  Homa'!important;">

    <?php
    $productInfo=$data['productInfo'];
    if ($productInfo['special']==1) {
        require('offer.php');
    }
    require ('dettails.php');
    require ('introduction.php');
    require ('onlydigiamir.php');
    require ('tabs.php');


    ?>


</div>


<?php
require ('gallry.php');
?>
