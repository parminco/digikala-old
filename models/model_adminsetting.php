<?php

class model_adminsetting extends model
{
    function __construct()
    {
        parent::__construct();
    }

    function saveSetting($data)
    {
        foreach ($data as $settingName => $value) {
            $sql = "update tbl_option set value=? where stting=?";
            $params = [$value, $settingName];
            $this->doQuery($sql, $params);
        }
    }
}


?>