<?php

class Showcart2 extends Controller
{
    function __construct()
    {


    }

    function index()
    {
        $address = $this->model->getAddress();
        $PostType = $this->model->getPostType();
        $data = ['address' => $address,'PostType'=>$PostType];
        $this->view('showcart2/index', $data);
    }

    function refreshaddress()
    {
        $addressInfo = $this->model->getAddress();
        echo json_encode($addressInfo);
    }

    function addaddress($editAddressId = '')
    {

        $this->model->addAddress($_POST, $editAddressId);

    }

    function editaddress($addressId)
    {
        $addressInfo = $this->model->getAddressInfo($addressId);
        echo json_encode($addressInfo);
    }

    function getpostprice(){
        $data=$_POST;
        $this->model->getPostPrice($data);
    }

    function deleteaddress($id)
    {
        $this->model->deleteAddress($id);
    }

}

?>