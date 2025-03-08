<?php

class search extends Controller
{

    function __construct()
    {

    }

    function index($categoryId)
    {

        $attr = $this->model->getAttr($categoryId);
        $attrRight = $this->model->getAttrRight($categoryId);
        $colors = $this->model->getColors();
        $data = [
            'attr' => $attr,
            'attrRight'=>$attrRight,
            'colors'=>$colors
        ];
        $this->view('serach/index', $data);
    }

    function doSearch()
    {

        $result=$this->model->doSearch($_POST);
        echo json_encode($result);

    }
}

?>

