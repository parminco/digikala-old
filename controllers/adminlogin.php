<?php

class adminlogin extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view('admin/login/index', '', '', 1);
    }

    function checkuser()
    {

        $form = $_POST;
        $this->model->checkUser($form);
        $check = Model::sessionGet('userId');
        if ($check == false) {
            header('location:' . URL . 'adminlogin');
        } else {
            header('location:' . URL . 'admindashbord/index');
        }


    }
}

?>