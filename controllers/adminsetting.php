<?php

class adminsetting extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view('admin/setting/index');
    }

    function savesetting()
    {
        if (isset($_POST['limit_slider'])) {
            $this->model->saveSetting($_POST);
        }
        header('location:'.URL.'adminsetting/index');
    }
}

?>