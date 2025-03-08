<?php

class model_adminorder extends model
{
    function __construct()
    {
        parent::__construct();
    }

    function getOrders()
    {
        $sql = 'select * from tbl_order order by id desc';
        $result = $this->doSelect($sql);
        return $result;
    }

    function getOrderInfo($orderId)
    {
//
//        $sql = 'select tbl_order.* , tbl_pay_type.title as payTypeTitle
//        from tbl_order
//        left join tbl_pay_type
//        on tbl_order.pay_type=tbl_pay_type.id
//        where tbl_order.id=?';

        $sql = "select o.*,pay.title as payTypeTitle,post.title as postTypeTitle
        from tbl_order o
        left join tbl_pay_type pay on o.pay_type=pay.id
        left join tbl_post_type post on o.post_type=post.id
        where o.id=?";

        $result = $this->doSelect($sql, [$orderId], 1);
        return $result;
    }

    function editOrder($orderId, $data)
    {
        $address = $data['address'];
        $order_status = $data['order_status'];
        $pay_status = $data['pay_status'];
        $code_posti = $data['code_posti'];
        $tel = $data['tel'];

        $sql = 'update tbl_order set pay=?,status=?,address=?,code_posti=?,tel=? where id=?';
        $params = [$pay_status, $order_status, $address, $code_posti, $tel, $orderId];
        $this->doQuery($sql, $params);
        header('location:' . URL . 'adminorder/detail/' . $orderId);
    }

    function orderStatus()
    {
        $sql = 'select * from tbl_order_status';
        $result = $this->doSelect($sql);
        return $result;
    }

    function delete($ids)
    {
        $ids = join(',', $ids);

        $sql = 'delete from tbl_order  where id in(' . $ids . ')';
        $this->doQuery($sql);


    }


}

?>