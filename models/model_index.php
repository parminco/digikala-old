<?php

class model_index extends model
{

    function __construct()
    {
        parent::__construct();

    }

    function getslider1()
    {

        $sql = 'select * from tbl_slider1';
        $result = $this->doSelect($sql);
        /*
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
*/
        return $result;

    }

    function getSlider2()
    {


        $sql = 'select * from tbl_product where special=?';
        $values = [1];
        $result = $this->doSelect($sql, $values);


        foreach ($result as $key => $row) {


            $price_total = $this->clculatediscount($row['price'], $row['discount'])[1];

            $result[$key]['price_total'] = $price_total;

        }


        /* time_special فلیپ تایمر */
        $first_row = $result[0];
        $time_special = $first_row['time_special'];


        $option = self::getoption();
        $durtion_special = $option['time_special'];

        $time_end = $time_special + $durtion_special;
        date_default_timezone_set('Asia/Tehran');
        $date = date('F d,Y H:i:s', $time_end);


        return [$result, $date];

    }

    function onlyDigiAmir()
    {

        $sql = 'select * from tbl_product where onlydigiamir=1';
        $result = $this->doSelect($sql);
        return $result;
    }

    function mostviewd()
    {

        $sql = 'select * from tbl_option where stting="limit_slider" ';
        $result = $this->doSelect($sql, [], 1);
        $limit = $result['value'];


        $sql = 'select * from tbl_product order by viewd desc limit ' . $limit . ' ';
        $result = $this->doSelect($sql);
        return $result;
    }

    function lastproduct()
    {


        $option = self::getoption();
        $limit = $option['limit_slider'];


        $sql = 'select * from tbl_product order by id desc limit ' . $limit . ' ';
        $result = $this->doSelect($sql);
        return $result;
    }

}

?>