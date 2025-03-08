<?php

class Controller
{
    function __construct()
    {

    }

    function view($viweUrl, $data = [], $noIncludeHeader = '', $noIncludeFooter = '')
    {
        if ($noIncludeHeader == '') {
            require('header.php');
        }

        require('views/' . $viweUrl . '.php');

        if ($noIncludeFooter == '') {
            require('footer.php');
        }


    }

    function model($modelUrl)
    {

        require('models/model_' . $modelUrl . '.php');
        $classname = 'model_' . $modelUrl;
        $this->model = new  $classname;

    }

}

?>