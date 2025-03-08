<?php

class admindashbord extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $orderStat=$this->model->getStat();
        $data=['orderSata'=>$orderStat];
        $this->view('admin/dashbord/index',$data);
    }
}


?>


