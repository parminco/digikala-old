<?php

class model_showcart2 extends model
{

    function __construct()
    {
        parent::__construct();

//        session_start();
//        $check = Model::sessionGet2('userId');
//        if ($check != true) {
//            header('location:'.URL.'showcart1/');
//        }
    }

    function index()
    {

    }

    function addAddress($data, $editAddressId)
    {

        $family = $data['family'];
        $mobile = $data['mobile'];
        $tel = $data['tel'];
        $ostan = $data['state'];
        $city = $data['city'];
        $mahale = $data['mahale'];
        $codeposti = $data['codeposti'];
        $address = $data['address'];
        $ostan_name = $data['ostan_name'];
        $city_name = $data['city_name'];

        Model::sessionInit();
        $userId = Model::sessionGet('userId');

        if ($editAddressId == '') {
            $sql = 'insert into tbl_user_address (userid,family,mobile,tel,ostan,city,mahale,address,codeposti,ostan_name,city_name) 
            values (?,?,?,?,?,?,?,?,?,?,?)';
            $params = [$userId, $family, $mobile, $tel, $ostan, $city, $mahale, $address, $codeposti, $ostan_name, $city_name];
        } else {
            $sql = 'update  tbl_user_address set family=?,mobile=?,tel=?,ostan=?,city=?,mahale=?,address=?,codeposti=?,ostan_name=?,               city_name=? where id=?';
            $params = [$family, $mobile, $tel, $ostan, $city, $mahale, $address, $codeposti, $ostan_name, $city_name, $editAddressId];
        }
        $this->doQuery($sql, $params);

    }

    function getAddress()
    {
        Model::sessionInit();
        $userId = Model::sessionGet('userId');

        $sql = 'select * from tbl_user_address where userid=?';
        $params = [$userId];
        $result = $this->doSelect($sql, $params);

        return $result;

    }


    function getAddressInfo($addressId)
    {
        $sql = 'select * from tbl_user_address where  id=?';
        $params = [$addressId];
        $result = $this->doSelect($sql, $params, 1);
        return $result;

    }

    function getPostType()
    {

        $sql = 'select * from tbl_post_type';
        $result = $this->doSelect($sql);
        return $result;
    }


    function getPostPrice($data)
    {

        $addressId = $data['addressId'];

        $sql = "select * from tbl_user_address where id=?";
        $params = [$addressId];
        $result = $this->doSelect($sql, $params, 1);
        print_r($result);
        self::sessionInit();
        self::sessionSet('addressInfo', serialize($result));

//        $cityId = $data['cityId'];
//
//        $postPrice=$this->calculatePostPrice($cityId);
//
//        echo json_encode($postPrice);

    }

    function deleteAddress($id)
    {
        $sql = 'delete from tbl_user_address where id=?';
        $params = [$id];
        $this->doQuery($sql, $params);
    }


}












