<?php

class Showcart3 extends Controller
{
    function __construct()
    {
    }

    function index()
    {
        model::sessionInit();
        $addressInfo = model::sessionGet('addressInfo');
        $addressInfo = unserialize($addressInfo);

        $basketInfo = $this->model->getBasketReViwe();
        $data=['basketInfo'=>$basketInfo,'addressInfo'=>$addressInfo];
        $this->view('showcart3/index',$data);


    }
}

?>