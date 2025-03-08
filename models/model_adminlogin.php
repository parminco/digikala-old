<?php

class model_adminlogin extends model
{
    function __construct()
    {
        parent::__construct();
    }
    function checkUser($form)
    {

        $email = $form['email'];
        $password = $form['password'];
        $params = [$email, $password];
        $sql = "select * from tbl_user where email=? and password=?";
        $result = $this->doSelect($sql, $params);

        model::sessionInit();
        Model::sessionSet('userId', $result[0]['id']);


        if (sizeof($result) > 0 and !empty($email) and !empty($password)) {
            echo ' user pass correct!';
        } else {
            echo ' user pass wrong!';
        }
    }
}

?>