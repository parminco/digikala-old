<?php

class model_admincomment extends model
{
    function __construct()
    {
        parent::__construct();
    }

    function getComment()
    {
        $sql = 'select * from tbl_comment';
        $result = $this->doSelect($sql);
        return $result;
    }

    function updateComment($data)
    {
        $ids = implode(',', $data['id']);
        foreach ($data['id'] as $id) {
            $sql = 'update  tbl_comment set title=?,matn=?,posotive=?,negative=? where id=?';
            $params = [$data['titlt' . $id], $data['matn' . $id], $data['posotive' . $id], $data['negative' . $id], $id];
            $this->doQuery($sql, $params);
        }


    }

    function confirm($data)
    {

            $this->updateComment($data);
            $ids = implode(',', $data['id']);
            $sql = 'update tbl_comment set confirm=1 where id in (' . $ids . ')';
            $this->doQuery($sql);
            header('location:' . URL . 'admincomment/index');


    }

    function unConfirm($data)
    {
        $this->updateComment($data);
        $ids = implode(',', $data['id']);
        $sql = 'update tbl_comment set confirm=0 where id in (' . $ids . ')';
        $this->doQuery($sql);
        header('location:' . URL . 'admincomment/index');
    }

    function delete($ids)
    {
        $ids = implode(',', $ids);
        $sql = 'delete from tbl_comment where id in (' . $ids . ')';
        $this->doQuery($sql);
        header('location:' . URL . 'admincomment/index');




    }
}

?>

