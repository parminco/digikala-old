<?php

class model_panel extends model
{
    private $userId;

    function __construct()
    {
        parent::__construct();
        $this->userId = model::sessionGet('userId');
    }

    function getUserInfo()
    {
        $userId = $this->userId;
        $sql = 'select * from tbl_user where id=?';
        $result = $this->doSelect($sql, [$userId], 1);
        return $result;
    }

    function getStat()
    {
        $Stat = [];
        $userId = $this->userId;
        $sql = 'select * from tbl_order where userid=?';
        $result = $this->doSelect($sql, [$userId]);
        $Stat['order_number'] = sizeof($result);

        $sql = 'select * from tbl_order where userid=? and status=1';
        $result = $this->doSelect($sql, [$userId]);
        $Stat['order_taeed_number'] = sizeof($result);

        $sql = 'select * from tbl_order where userid=? and status=2';
        $result = $this->doSelect($sql, [$userId]);
        $Stat['order_pardazesh_number'] = sizeof($result);

        $sql = 'select * from tbl_comment where user=?';
        $result = $this->doSelect($sql, [$userId]);
        $Stat['comment_number'] = sizeof($result);

        $sql = 'select * from tbl_message where userId=? and status=0';
        $result = $this->doSelect($sql, [$userId]);
        $Stat['message_number'] = sizeof($result);

        return $Stat;
    }

    function getMessage()
    {
        $userId = $this->userId;
        $sql = 'select * from tbl_message where userId=?';
        $result = $this->doSelect($sql, [$userId]);
        foreach ($result as $row) {
            $sql = 'update tbl_message set status=1 where id=?';
            $this->doQuery($sql, [$row['id']]);
        }

        return $result;
    }

    function getOrder()
    {
        $userId = $this->userId;
        $sql = 'select tbl_order.*,tbl_order_status.title
        from tbl_order
        left join tbl_order_status
        on tbl_order_status.id=tbl_order.status
        where userId=?';
        $result = $this->doSelect($sql, [$userId]);
        return $result;
    }

    function getFolder()
    {
        $userId = $this->userId;
        $sql = 'select * from tbl_favorit where userid=? and parent=0';
        $result = $this->doSelect($sql, [$userId]);
        return $result;
    }

    function getFavorit($FolderId)
    {
        $userid = $this->userId;
        if ($FolderId != 0) {
            $sql = 'select tbl_favorit.*,tbl_product.title as productTitle
            from tbl_favorit
            left join tbl_product
            on tbl_favorit.idproduct=tbl_product.id
            where userid=? and parent=?';


        } else if ($FolderId == 0) {
            $sql = 'select tbl_favorit.*,tbl_product.title as productTitle
            from tbl_favorit
            left join tbl_product
            on tbl_favorit.idproduct=tbl_product.id
            where userid=? and parent!=?';


        }
        $params = [$userid, $FolderId];
        $resulet = $this->doSelect($sql, $params);
        return $resulet;
    }

    function saveEdit($id, $newNam)
    {
        $sql = 'update tbl_favorit set title=? where id=?';
        $params = [$newNam, $id];
        $this->doQuery($sql, $params);
    }

    function deleteFavorit($favoritId)
    {
        $sql = 'delete from tbl_favorit where id=?';
        $this->doQuery($sql, [$favoritId]);
    }

    function getCommnet()
    {
        $userId = $this->userId;
        $sql = 'select tbl_comment.*,tbl_product.title as productTitle 
        from tbl_comment
        left join tbl_product
        on tbl_comment.idproduct=tbl_product.id
        where user=?';

        $result = $this->doSelect($sql, [$userId]);
        return $result;
    }

    function deleteComment($commentId)
    {
        $sql = 'delete from tbl_comment where id=?';
        $this->doQuery($sql, [$commentId]);
    }

    function getCode()
    {
        $userId = $this->userId;
        $sql = 'select *from tbl_code where userid=?';
        $result = $this->doSelect($sql, [$userId]);
        $today_date = self::jaliliDate();

        foreach ($result as $key => $row) {
            $sql = 'select * from tbl_order where code=? and userId=?';
            $orders = $this->doSelect($sql, [$row['code'], $userId]);
            $result[$key]['orders'] = $orders;


            $date_end = $row['tarikh_end'];
            $today = new DateTime($today_date);
            $expire = new DateTime($date_end);
            $status = '';


            if ($expire->format('Y-m-d') >= $today->format('Y-m-d')) {
                $status = 'معتبر';
            } else {
                $status = 'منقضی شده';
            }
            $result[$key]['status'] = $status;


        }
        return $result;
    }

    function saveCode($data)
    {
        $error = [
            1 => 'لطفا فیلد را با دقت پر کنید',
            2 => 'کد تخفیف با موفقیت ثبت شد',
            3 => 'از این کد قبلا استفاده شده است',
            4 => 'چنین کُدی اصلا وجود ندارد'
        ];
        $userId = $this->userId;
        $code = $data['code'];

        if (!empty($code)) {
            $sql = 'select * from tbl_code where code=?';
            $result = $this->doSelect($sql, [$code], 1);

            $userIdFild = $result['userId'];
            $codeFild = $result['code'];
            if ($userIdFild == 0 and $codeFild == $code) {
                $sql = 'update  tbl_code set userId=?  where code=?';
                $status = $this->doQuery($sql, [$userId, $code]);

                if ($status == true) {
//                    echo 'کد تخفیف با موفقیت ثبت شد';
                    echo '2';

                }
            } elseif ($userIdFild = !0 and $codeFild == $code) {
//                echo 'از این کد قبلا استفاده شده است';
                echo '3';
            } elseif ($codeFild != $code) {
                echo '4';
//                echo 'چنین کُدی اصلا وجود ندارد';
            }
        } else {
//            echo 'لطفا فیلد را با دقت پر کنید';
            echo '1';
        }
    }

    function editProfile($data)
    {

        $email = $data['email'];
        $family = $data['family'];
        $code_meli = $data['code_meli'];
        $tel = $data['tel'];
        $mobile = $data['mobile'];
        $day = $data['day'];
        $month = $data['month'];
        $year = $data['year'];
        $address = $data['address'];
        $jensiat = @$data['jensiat'];
        $khabarname = @$data['khabarname'];

        $tavalod = $year . '/' . $month . '/' . $day;
        $userId = $this->userId;

        $sql = 'update tbl_user set email=?,family=?,code_meli=?,tel=?,mobile=?,tavalod=?,address=?,jensiat=?,khabarname=? where id=?';
        $params = [$email, $family, $code_meli, $tel, $mobile, $tavalod, $address, $jensiat, $khabarname, $userId];
        $this->doQuery($sql, $params);


    }

    function changePass($data)
    {
        $userId = $this->userId;
        $pass_old = $data['pass_old'];
        $pass_new = $data['pass_new'];
        $pass_cofirm = $data['pass_confirm'];

        $sql = 'select password from tbl_user where id=?';
        $userInfo = $this->getUserInfo();
        $password = $userInfo['password'];
        $error = '';

        if (!empty($pass_old) and !empty($pass_new) and !empty($pass_cofirm)) {

            if ($password == $pass_old) {
                if ($pass_new == $pass_cofirm) {
                    $sql = 'update tbl_user set password=? where id=?';
                    $status = $this->doQuery($sql, [$pass_new, $userId]);
                    if ($status == 'true') {

                        $error = 'تغیر کلمه عبور با موفقیت انجام شد';
                    } else {
                        $error = 'خطایی در سمت سرور رخ داده است لطفا بعدا امتحان کنید';
                    }

                } else {

                    $error = 'تکرار کلمه عبور نادرست است';
                }
            } else {

                $error = 'پسورد فعلی نادرست است';
            }
        } else {
            $error = 'لطفا اطلاعات را وارد کنید';
        }
        header('location:' . URL . 'panel/changepass?error=' . $error);

    }

}











