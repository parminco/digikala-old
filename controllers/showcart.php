<?php

class Showcart extends Controller
{

    function __construct()
    {

    }

    function index()
    {

        $basketInfo = $this->model->getBasket();
        $basket = $basketInfo[0];
        $priceTotalall = $basketInfo[1];

        $data = ['basket' => $basket, 'priceTotal' => $priceTotalall];
        $this->view('showcart/index', $data);
    }

    function deletebasket($productId)
    {
        $this->model->deleteBasket($productId);
        $basketInfo = $this->model->getBasket();
        echo json_encode($basketInfo);
    }

    function updatebasket()
    {
        $this->model->updatebasket($_POST);
        $basketInfo = $this->model->getBasket();
        echo json_encode($basketInfo);
    }


}

?>

