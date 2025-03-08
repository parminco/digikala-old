<?php

class adminslider extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        if (isset($_POST['title'])) {
            $this->model->addSlider($_POST, $_FILES);
        }
        $slider = $this->model->getSlider();
        $data = ['slider' => $slider];
        $this->view('admin/slider/index', $data);
    }

    function deleteslider()
    {
        if (isset($_POST['id'])) {
            $this->model->deleteSlider($_POST);
            header('location:' . URL . 'adminslider/index');
        } else {
            echo 'لطفا یک گزینه را انتخاب کنید';
        }


    }
}
