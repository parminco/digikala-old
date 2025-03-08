<?php

class admincomment extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $comment = $this->model->getComment();
        $data = ['comment' => $comment];
        $this->view('admin/comment/index', $data);
    }

    function confirm()
    {
        if (isset($_POST['id'])) {
            $this->model->confirm($_POST);
        } else {
            echo 'لطفا یک گزینه را انتخاب کنید';
        }
    }

    function unconfirm()
    {

        if (isset($_POST['id'])) {
            $this->model->unConfirm($_POST);
        } else {
            echo 'لطفا یک گزینه را انتخاب کنید';
        }
    }

    function delete()
    {
        if (isset($_POST['id'])) {
            $ids = $_POST['id'];
            $this->model->delete($ids);
        } else {
            echo 'لطفا یک گزینه را انتخاب کنید';
        }
    }
}

?>

