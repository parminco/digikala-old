<?php

class model_showcart1 extends model
{

    function __construct()
    {
        parent::__construct();
        session_start();
        $check = Model::sessionGet('userId');
        if ($check != false) {
            header('location:'.URL.'showcart2/');
        }
    }

    function index()
    {

    }


}












