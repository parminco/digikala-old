<?php
$model = new Model;
$options = Model::getoption();

define('URL', 'http://127.0.0.1/DigiAmirMVC/');
define('zarinpalMerchantID', 'f0a107a8-eb7c-11e5-8af1-005056a205be');
define('CallbackURL', 'http://digiamir/checkout');
define('zarinpalWebAdress', 'https://www.zarinpal.com/pg/services/WebGate/wsdl');


define('mohlatPay', $options['mohlatPay']);
define('menu_color', $options['menu_color']);
define('body_color', $options['body_color']);


$zarinpalErrors = [

    '-1' => 'اطلاعات ارسال شده ناقص شده است',
    '-2' => 'IP یا مرچنت کد صحیح نیست',
    '-3' => 'سطح تایید پذیرنده کمتر از نقره ای است',
    '-10' => 'خطا'

];
define('zarinpalErrors', serialize($zarinpalErrors))


?>