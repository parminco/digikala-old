<?php

Class Checkout extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index($orderId = '')
    {
        if (isset($_GET['Authority'])) {
            $result = $this->model->zarinpalCheckout($_GET);
            $data = ['orderInfo' => $result];
        } else if (isset($orderId)) {
            $result = $this->model->getOrderInfo($orderId);
            $data = ['orderInfo' => $result];
        }

        $this->view('checkout/index', $data);
    }

    function payonline($orderId)
    {
        $this->model->payOnline($orderId);

    }

//    function showerror()
//    {
//        $Error = $_GET['error'];
//        $Orderid = $_GET['orderid'];
//        $data = ['Error' => $Error, 'Orderid' => $Orderid];
//        $this->view('checkout/showerror', $data);
//    }
//
//    function creditcard($orderId)
//    {
//        if (isset($_POST['day'])) {
//            $this->model->updateCreditCart($_POST,$orderId);
//        }
//        $orderInfo = $this->model->getOrderInfo($orderId);
//        $data = ['orderInfo' => $orderInfo];
//        $this->view('checkout/creditcard', $data);
//    }

}

?>