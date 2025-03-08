<?php

class Payment
{

    private $zarinpalMerchantID = zarinpalMerchantID;
    private $CallbackURL = CallbackURL;

    function __construct()
    {
        require('public/nusoap/nusoap.php');
    }

    function zarinpalRequest($Amount, $Description, $Email, $Mobile)
    {
        $client = new nusoap_client(zarinpalWebAdress, 'wsdl');
        $client->soap_defencoding = 'UTF-8';

        $params = [
            'MerchantID' => $this->zarinpalMerchantID,
            'Amount' => $Amount,
            'Description' => $Description,
            'Email' => $Email,
            'Mobile' => $Mobile,
            'CallbackURL' => CallbackURL,
        ];

        $result = $client->call('PaymentRequest', $params);


        $zarinpalErrors = [];
        $Status = $result['Status'];

        $Authority = '';


        $ErrorArray=unserialize(zarinpalErrors);

        if ($Status != 100) {
            $Error = $ErrorArray[$Status];
        }
        if ($Status == 100) {
            $Authority = $result['Authority'];
        }

        $array = ['Status' => $Status, 'Authority' => $Authority,'Error'=>$Error];
        return $array;

    }


    function zarinpalVrefy($Amount, $Authority)
    {
        $client = new nusoap_client(zarinpalWebAdress, 'wsdl');
        $client->soap_defencoding = 'UTF-8';

        $result = $client->call('PaymentVrefication', [
            'MerchantID' => $this->zarinpalMerchantID,
            'Amount' => $Amount,
            'Authority' => $Authority,

        ]);
        $zarinpalErrors = [];
        $Status = $result['Status'];
        $Error = '';
        $RefID = '';
        if ($Status != 100) {
            $ErrorArray = unserialize(zarinpalErrors);
            $Error=$ErrorArray[$Status];

        }
        if ($Status == 100) {
            $RefID = $result['RefID'];
        }

        $array = ['Status' => $Status, 'Error' => $Error, 'RefID' => $RefID];
        return $array;
    }

}

?>