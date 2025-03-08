<?php

class Adminorder extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $order = $this->model->getOrders();
        $data = ['order' => $order];
        $this->view('admin/order/index', $data);
    }

    function detail($orderId)
    {
        $orderStatus = $this->model->orderStatus();
        $OrderInfo = $this->model->getOrderInfo($orderId);
        $data = ['OrderInfo' => $OrderInfo, 'orderStatus' => $orderStatus];

        $this->view('admin/order/detail', $data);
    }

    function editorder($orderId)
    {

        $this->model->editOrder($orderId, $_POST);
    }

    function showfactor($orderId)
    {
        $orderInfo = $this->model->getOrderInfo($orderId);
        $data = ['orderInfo' => $orderInfo];
        $this->view('admin/order/factor', $data, 1, 1);
    }

    function delete()
    {
        $ids = $_POST['id'];
        $this->model->delete($ids);
        header('location:' . URL . 'adminorder/index');


    }

}

?>