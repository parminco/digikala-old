<?php

class model_showcart extends model
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

    }


    function getBasket2()
    {

        $basketInfo=parent::getBasket();

        return $basketInfo ; // TODO: Change the autogenerated stub
    }

    function deleteBasket($productId)
    {
        $sql = 'delete from tbl_basket where id=?';
        $params = [$productId];
        $this->doQuery($sql, $params);

    }

    function updateBasket($data)
    {
        $tedad = $data['tedad'];
        $BasketRow = $data['BasketRow'];
        $sql = 'update tbl_basket set tedad=? where id=?';
        $params = [$tedad, $BasketRow];
        $this->doQuery($sql, $params);
    }

}












