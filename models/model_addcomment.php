<?php

class model_addcomment extends model
{
    function __construct()
    {
        parent::__construct();
    }

    function productInfo($productId)
    {
        $sql = 'select * from tbl_product where id=?';
        $result = $this->doSelect($sql, [$productId], 1);
        return $result;
    }

    function getParam($productId)
    {
        $productInfo = $this->productInfo($productId);
        $categoryId = $productInfo['cat'];
        $sql = 'select * from tbl_comment_param where idcategory=?';
        $result = $this->doSelect($sql, [$categoryId]);
        return $result;
    }


    function saveComment($data, $productId)
    {
        $comment_params = $this->getParam($productId);
        $param_result = [];
        foreach ($comment_params as $row) {
            $paramId = $row['id'];
            $value = $data['param' . $paramId];
            $param_result[$paramId] = $value;
        }

        $param_result = serialize($param_result);
        $title = $data['title'];
        $posotive = $data['posotive'];
        $negative = $data['negative'];
        $comment = $data['comment'];

        self::sessionInit();
        $userId = self::sessionGet('userId');


        $sql = 'select * from tbl_comment where user =? and idproduct=?';
        $data = [$userId, $productId];
        $result = $this->doSelect($sql, $data);
        if (isset($result[0])) {
            $commentId = $result[0]['id'];
            $sql = 'update  tbl_comment set title=?,matn=?,posotive=?,negative=?,param=? where id=?';
            $params = [$title, $comment, $posotive, $negative, $param_result,$commentId];
            $this->doQuery($sql, $params);
        }//update
        else {
            $sql = 'insert into tbl_comment(title,matn,posotive,negative,idproduct,param,user) values (?,?,?,?,?,?,?)';
            $params = [$title, $comment, $posotive, $negative, $productId, $param_result, $userId];
            $this->doQuery($sql, $params);
        }//insert


//         $commentId = parent::$conn->lastInsertId();
//        header('location:'.URL.'addcomment/index/'.$productId.'/'.$commentId);
        header('location:' . URL . 'addcomment/index/' . $productId);
    }

    function commentInfo($productId)
    {
        self::sessionInit();
        $userId = self::sessionGet('userId');
        $sql = 'select * from tbl_comment where idproduct=? and user=?';
        $data = [$productId, $userId];
        $result = $this->doSelect($sql, $data, 1);
        return $result;
    }

}

?>