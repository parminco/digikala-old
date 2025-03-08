<?php

class model_showcart4 extends model
{

    function __construct()
    {
        parent::__construct();
    }


    function checkCode($code)
    {
        $sql = 'select *from tbl_code where code=? and used=0';
        $result = $this->doSelect($sql, [$code]);

        if (sizeof($result) > 0) {
            return $result[0]['darsad'];
        } else {
            return 0;
        }


    }

    function calculateTotlaPrice($code)
    {

        $basketInfo = $this->getBasket();
        $basketPrice = $basketInfo[1];
        $basketDiscount = $basketInfo[2];
        $postPrice = 3000;


        $chcke = $this->checkCode($code);
        $codeDiscount = 0;
        if ($chcke != 0) {
            $codeDiscount = ($chcke * $basketPrice) / 100;
        }
        $priceTotal = $basketPrice - $basketDiscount + $postPrice - $codeDiscount;
        $priceTotal = ceil($priceTotal);
        return number_format($priceTotal);

    }

    function saveOrder($data)
    {
        self::sessionInit();
        $addressInfo = self::sessionGet('addressInfo');
        $addressInfo = unserialize($addressInfo);
        $family = $addressInfo['family'];
        $ostan = $addressInfo['ostan_name'];
        $city = $addressInfo['city_name'];
        $mobile = $addressInfo['mobile'];
        $tel = $addressInfo['tel'];
        $codeposti = $addressInfo['codeposti'];
        $address = $addressInfo['address'];

        $basketInfo = $this->getBasket();
        $basket = $basketInfo[0];
        $basket = serialize($basket);
        $basketPrice = $basketInfo[1];
        $basketDiscount = $basketInfo[2];

        $postType = 1;
        $postPrice = 3000;
        $code = $data['code'];
        $darsadDiacount = $this->checkCode($code);

        $amountDiscount = ($darsadDiacount * $basketPrice) / 100;
        $priceTotal = $basketPrice - $basketDiscount + $postPrice - $amountDiscount;
        $userId = self::sessionGet('userId');

        $payType = $data['paytype'];
        $beforepy = '';
        $Description = 'خرید از دیجی امیر';
        if ($payType == 1) {
            $Payment = new Payment();
            $result = $Payment->zarinpalRequest($priceTotal, $Description, 'UserEmail@Mail.Com', $mobile);
            $Status = $result['Status'];
            $Authority = $result['Authority'];
            $beforepy = $Authority;
        }
        $time = time();

        $sql = 'insert into tbl_order (family,ostan,city,code_posti,mobile,tel,address,basket,amount,post_type,
        post_price,userId,status,beforepay,pay_type,time_sabt) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
        $params = [$family, $ostan, $city, $codeposti, $mobile, $tel, $address, $basket, $priceTotal, $postType, $postPrice, $userId, 1, $beforepy, $payType, $time];
        $this->doQuery($sql, $params);


        if ($payType == 1) {

            if ($Status == 100) {
                header('location: https://www.zarinpal.com/pg/StartPay/' . $Authority);
            } else {
                header('location:' . URL . 'showcart4/index/' . $Status);

            }

        }


        if ($payType == 3) {

            $sql = 'select *  from tbl_order order by id desc limit 1';
            $result = $this->doSelect($sql, [], 1);
            header('location:' . URL . 'checkout/index/' . $result['id']);


        }

    }
}