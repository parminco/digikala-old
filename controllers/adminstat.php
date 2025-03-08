<?php

class adminstat extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view('admin/stat/index');
    }

    function order()
    {
        $stat = $this->model->order($_POST);
        $x=['stat'=>$stat];
        $this->view('admin/stat/order',$x);

    }
}


?>