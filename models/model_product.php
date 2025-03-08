<?php

class model_product extends model
{
    function __construct()
    {

        parent::__construct();

    }

    function productInfo($id)
    {
        $sql = 'select * from tbl_product where id=?';

        $result = $this->doSelect($sql, [$id], 1);

        $price = $result['price'];
        $discount = $result['discount'];
        $price_calculate = $this->clculatediscount($price, $discount);
        $result['price_discount'] = $price_calculate[0];
        $result['price_total'] = $price_calculate[1];

        /* فلیپ تایمر  */
        $first_row = $result;
        $time_special = $first_row['time_special'];

        $option = self::getoption();
        $durtion_special = $option['time_special'];

        $time_end = $time_special + $durtion_special;
        date_default_timezone_set('Asia/Tehran');
        $date = date('F d,Y H:i:s', $time_end);

        $result['date_special'] = $date;


        $colors = $result['colors'];
        $colors = explode(',', $colors);
        $colors = array_filter($colors);

        $all_colors = [];

        foreach ($colors as $color) {
            $colorInfo = $this->colorInfo($color);
            array_push($all_colors, $colorInfo);
        }

        $result['all_colors'] = $all_colors;

        /* -----------------------------------------------------------*/
        $garantee = $result['garantee'];
        $garantee = explode(',', $garantee);
        $garantee = array_filter($garantee);

        $all_garantee = [];

        foreach ($garantee as $id) {
            $garanteeInfo = $this->garanteeInfo($id);
            array_push($all_garantee, $garanteeInfo);
        }

        $result['all_garantee'] = $all_garantee;
        return $result;

    }

    function colorInfo($id)
    {
        $sql = 'select * from tbl_colors where id=?';
        $result = $this->doSelect($sql, [$id], 1);
        return $result;

    }


    function garanteeInfo($id)
    {
        $sql = 'select * from tbl_garantee where id=?';
        $result = $this->doSelect($sql, [$id], 1);
        return $result;

    }

    function onlyDigiAmir()
    {

        $sql = 'select * from tbl_product where onlydigiamir=1';
        $result = $this->doSelect($sql);
        return $result;
    }


    function naghd($id)
    {

        $sql = 'select * from tbl_naghd where idproduct=?';
        $result = $this->doSelect($sql, [$id]);
        return $result;
    }

    function fanni($idcategory, $idproduct)
    {
        $sql = 'select * from tbl_attr where idcategory=? and parent=0 ';
        $params = [$idcategory];
        $result = $this->doSelect($sql, $params);

        foreach ($result as $key => $row) {
            $sql2 = 'select tbl_attr.title,tbl_product_attr.value from tbl_attr LEFT JOIN tbl_product_attr ON tbl_attr.id=tbl_product_attr.idattr and tbl_product_attr.idproduct=? where tbl_attr.parent=? ';
            $params = [$idproduct, $row['id']];
            $result2 = $this->doSelect($sql2, $params);

            $result[$key]['childern'] = $result2;
        }

        // print_r($result);
        return $result;
    }


    function comment_param($idcategory, $idproduct)
    {
        $sql = 'select * from tbl_comment_param where idcategory=?';
        $x = [$idcategory];
        $result = $this->doSelect($sql, $x);

        $sql = 'select * from tbl_comment where idproduct=?';
        $res = $this->doSelect($sql, [$idproduct]);
        $scors_total = [];

        foreach ($res as $row) {
            $params_score = $row['param'];
            $params_score = unserialize($params_score);
            foreach ($params_score as $key => $val) {
                $param_id = $key;
                $score = $val;
                // echo $score;
                if (!isset($scors_total[$param_id])) {
                    $scors_total[$param_id] = [0];

                }

                // $scors_total[$param_id] = $scors_total[$param_id] + $score;
            }
        }


        return $result;
    }

    function getComment($idproduct)
    {
        $sql = 'select * from tbl_comment where idproduct=?';
        $data = [$idproduct];
        $result = $this->doSelect($sql, $data);


        return $result;
    }

    function getquestions($idproduct)
    {

        $sql = "select * from tbl_question where idproduct=? and parent=0";

        $questions = $this->doSelect($sql, array($idproduct));

        $sql = "select * from tbl_question where parent!=0";
        $all_answers = $this->doSelect($sql);
        $all_answers_new = array();

        foreach ($all_answers as $answer) {
            $parent = $question_id = $answer['parent'];
            $all_answers_new[$question_id] = $answer;
        }


        return array($questions, $all_answers_new);
    }

    function getGallery($idproduct)
    {
        $sql = 'select * from tbl_gallery where idproduct=? order by threed desc ';
        $result = $this->doSelect($sql, [$idproduct]);
        return $result;
    }

    function addToBasket($productId,$color,$garantee)
    {

        echo $cookie = self::getBasketCookie();
        $sql = 'select * from tbl_basket where cookie=? and idproduct=? and color=? and garantee=?';
        $params = [$cookie, $productId,$color,$garantee];
        $result = $this->doSelect($sql, $params);
        if (isset($result[0])) {
            $sql = 'update tbl_basket set tedad=tedad+1 where cookie=? and idproduct=? and color=? and garantee=?';

        } else {
            $sql = 'insert into tbl_basket (cookie,idproduct,tedad,color,garantee) values (?,?,1,?,?)';

        }
        $params = [$cookie, $productId,$color,$garantee];
        $this->doQuery($sql, $params);
    }
}

?>