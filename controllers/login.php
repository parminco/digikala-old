<?php

class Login extends Controller
{

    function __construct()
    {

    }

    function index()
    {

        $this->view('login/index','','',1);
    }

    function checkuser()
    {

        $form = $_POST;
        $this->model->checkUser($form);
        $check = Model::sessionGet('userId');
        if ($check == false) {
            header('location:' . URL . 'login');
        } else {
            header('location:' . URL . 'panel');
        }


    }
}

?>

