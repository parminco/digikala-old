<?php


class index extends Controller
{

    function __construct()
    {

    }

    function index()
    {
        $slider1= $this->model->getslider1();

        $slider2= $this->model->getslider2();
        $slider2_item=$slider2[0];
        $time_end=$slider2[1];

        $onlyDigiAmir= $this->model->onlyDigiAmir();
        $mostviewd= $this->model->mostviewd();
        $lastproduct= $this->model->lastproduct();

        $data=[$slider1,$slider2_item,$time_end,$onlyDigiAmir,$mostviewd,$lastproduct];

        $this->view('index/index',$data);



    }

}




?>