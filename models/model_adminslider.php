<?php

class  model_adminslider extends model
{
    function __construct()
    {
        parent::__construct();
    }

    function getSlider()
    {
        $sql = 'select * from tbl_slider1 order by id desc ';
        $result = $this->doSelect($sql);
        return $result;
    }

    function addSlider($data, $files)
    {
        $title = $data['title'];;
        $link = $data['link'];;
        $file = $files['image'];


        $fileName = $file['name'];
        $fileSize = $file['size'];
        $fileTmp = $file['tmp_name'];
        $fileType = $file['type'];
        $fileError = $file['error'];
        $uploadOk = 1;
        $targetMain = 'public/images/slider/';
        $newName = time();

        if ($fileType != 'image/jpg' and $fileType != 'image/jpeg') {
            $uploadOk = 0;
        }
        if ($fileSize > 5242880) {
            $uploadOk = 0;
        }
        if ($uploadOk == 1) {
            $ext = pathinfo($fileName, PATHINFO_EXTENSION);
            $target = $targetMain . $newName . '.' . $ext;

            move_uploaded_file($fileTmp, $target);


            $this->create_thumbnail($target, $target, 890, 310);

            $newName = $newName . '.' . $ext;

            $sql = 'insert into tbl_slider1 (title,link,img) values (?,?,?)';
            $params = [$title, $link, $target];
            $this->doQuery($sql, $params);
        }


    }

    function deleteSlider($data)
    {
        $ids = $data['id'];
        foreach ($ids as $id) {
            $sql = 'select img from tbl_slider1 where id=?';
            $slider = $this->doSelect($sql, [$id]);
            unlink($slider[0]['img']);
        }

        $ids = implode(',', $ids);


        $sql = 'delete from tbl_slider1 where id in (' . $ids . ')';
        $this->doQuery($sql);

    }
}