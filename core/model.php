<?php

class model
{

    public static $conn = '';

    function __construct()
    {

        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'digiamir_mvc';
        $attr = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

        self::$conn = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname, $username, $password, $attr);
        self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if (function_exists('jdate') == false) {
            require('public/jdf/jdf.php');
        }
    }

    public static function getoption()
    {
        $sql = 'select * from tbl_option';
        // $options=self::doSelect($sql);
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        $options = $stmt->fetchAll();
 
        $option_new = [];
        foreach ($options as $option) {
            $setting = $option['stting'];
            $value = $option['value'];

            $option_new[$setting] = $value;
        }
        return $option_new;
    }

    function clculatediscount($price, $discount)
    {

        $pric_discount = ($discount * $price) / 100;
        $price_total = $price - $pric_discount;
        return [$pric_discount, $price_total];

    }

    function doSelect($sql, $valuse = [], $fetch = '', $fetchStyle = PDO::FETCH_ASSOC)
    {

        $stm = self::$conn->prepare($sql);
        foreach ($valuse as $key => $value) {

            $stm->bindValue($key + 1, $value);
        }


        $stm->execute();


        if ($fetch == '') {
            $result = $stm->fetchAll($fetchStyle);
        } else {

            $result = $stm->fetch($fetchStyle);
        }

        return $result;
    }

    function doQuery($sql, $valuse = [])
    {

        $stm = self::$conn->prepare($sql);
        foreach ($valuse as $key => $value) {

            $stm->bindValue($key + 1, $value);
        }
        if ($stm->execute()) {
            return 'true';
        }


    }

    function create_thumbnail($file, $pathToSave = '', $w, $h = '', $crop = FALSE)
    {

        $new_height = $h;

        list($width, $height) = getimagesize($file);

        $r = $width / $height;

        if ($crop) {
            if ($width > $height) {
                $width = ceil($width - ($width * abs($r - $w / $h)));
            } else {
                $height = ceil($height - ($height * abs($r - $w / $h)));
            }
            $newwidth = $w;
            $newheight = $h;
        } else {
            if ($w / $h > $r) {
                $newwidth = $h * $r;
                $newheight = $h;
            } else {
                $newheight = $w / $r;
                $newwidth = $w;
            }
        }

        $what = getimagesize($file);

        switch (strtolower($what['mime'])) {
            case 'image/png':
                $src = imagecreatefrompng($file);

                break;
            case 'image/jpeg':
                $src = imagecreatefromjpeg($file);
                break;
            case 'image/gif':
                $src = imagecreatefromgif($file);
                break;
            default:
                //die();
        }

        if ($new_height != '') {
            $newheight = $new_height;
        }

        $dst = imagecreatetruecolor($newwidth, $newheight);//the new image
        imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);//az function

        imagejpeg($dst, $pathToSave, 95);//pish farz in tabe 75 darsad quality ast

        return $dst;


    }


    function sessionInit()
    {
        session_start();
    }

    public static function sessionSet($name, $value)
    {
        $_SESSION[$name] = $value;
    }

    public static function sessionGet($name)
    {
        if (isset($_SESSION[$name])) {
            return $_SESSION[$name];
        } else {
            return false;
        }
    }

    public static function sessionGet2($name)
    {
        if (isset($_SESSION[$name])) {
            return true;

        } else {
            return false;
        }
    }

    public static function getBasketCookie()
    {

        if (isset($_COOKIE['basket'])) {
            $cookie = $_COOKIE['basket'];

        } else {

            $expire = time() + 7 * 24 * 3600;
            $value = time();
            setcookie('basket', $value, $expire, '/');
            $cookie = $value;
        }

        return $cookie;
    }


    function getBasket()
    {

        $sql = "SELECT b.tedad,b.id as BasketRow,p.*,c.title as colorTitle,g.title as garanteeTitle
        FROM tbl_basket b
        LEFT JOIN tbl_product p ON b.idproduct=p.id
        LEFT JOIN tbl_colors c ON b.color=c.id
        LEFT JOIN tbl_garantee g ON b.garantee=g.id
        where cookie=?";

        $cookie = self::getBasketCookie();
        $params = [$cookie];
        $result = $this->doSelect($sql, $params);

        $discountTotalAll = 0;
        foreach ($result as $key => $row) {
            $discount = ($row['discount'] * $row['price']) / 100;
            $discountTotal = $row['tedad'] * $discount;
            $discountTotalAll += $discountTotal;
            $result[$key]['discountTotal'] = $discountTotal;

        }


        $priceTotalall = [];
        foreach ($result as $row) {
            $price = $row['price'];
            $tedad = $row['tedad'];
            $priceTotal = $price * $tedad;
            $priceTotalall = intval($priceTotalall) + intval($priceTotal);

        }

        return [$result, $priceTotalall, $discountTotalAll];
    }

    public static function jaliliDate($format = 'Y-n-j')
    {

        $date = jdate($format);
        return $date;
    }

    public static function jaliliToMiladi($jalili, $format = '/')
    {
        $jalili = explode('/', $jalili);
        $Year = @$jalili[0];
        $Month = @$jalili[1];
        $Day = @$jalili[2];

        $date = jalali_to_gregorian($Year, $Month, $Day);
        $date = implode($format, $date);

        $date = new  DateTime($date);
        $date = $date->format('Y/m/d');
        return $date;
    }

    public static function MiladiTojalili($miladi, $format = '/')
    {
        $miladi = explode('/', $miladi);
        $Year = $miladi[0];
        $Month = $miladi[1];
        $Day = $miladi[2];

        $date = gregorian_to_jalali($Year, $Month, $Day);
        $date = implode($format, $date);


        return $date;
    }

    function getMenu($parentId = 0)
    {
        $sql = 'select * from tbl_category where parent=?';
        $result = $this->doSelect($sql, [$parentId]);

        foreach ($result as $row) {

            $children = $this->getMenu($row['id']);
            if(@sizeof($children) > 0) {
                $row['children']=$children;
            }
            @$data[]=$row;
        }
        return @$data;

    }
}

?>
















