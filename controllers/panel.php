<?php


class Panel extends Controller
{
    public $checkLogin = '';

    function __construct()
    {
        Model::sessionInit();
        $this->checkLogin = Model::sessionGet('userId');
        if ($this->checkLogin == false) {
            header('location:' . URL . 'login');
        }
    }

    function index($activTab = 'message')
    {
        $Comment = $this->model->getCommnet();
        $UserInfo = $this->model->getUserInfo();
        $Stat = $this->model->getStat();
        $Message = $this->model->getMessage();
        $Order = $this->model->getOrder();
        $Folder = $this->model->getFolder();
        $Code = $this->model->getCode();

        $data = [
            'userInfo' => $UserInfo,
            'Stat' => $Stat,
            'Message' => $Message,
            'Order' => $Order,
            'Folder' => $Folder,
            'Commnet' => $Comment,
            'Code' => $Code,
            'activTab' => $activTab
        ];

        $this->view('panel/index', $data);

    }

    function getfavorit()
    {
        $folderId = $_POST['folderid'];
        $result = $this->model->getFavorit($folderId);
        echo json_encode($result);
    }

    function saveEdit()
    {
        $folderId = $_POST['folderId'];
        $newNam = $_POST['newNam'];
        $this->model->saveEdit($folderId, $newNam);
    }

    function deletefavorit()
    {
        $favoritId = $_POST['favoritId'];
        $this->model->deleteFavorit($favoritId);
    }

    function deletecomment($commentId)
    {

        $this->model->deleteComment($commentId);
    }

    function savecode()
    {
        $this->model->saveCode($_POST);
    }

    function code()
    {
        $Code = $this->model->getCode();
        echo json_encode($Code);
    }

    function profile()
    {
        $UserInfo = $this->model->getUserInfo();
        $data = [
            'UserInfo' => $UserInfo
        ];
        $this->view('panel/profile', $data);
    }

    function editprofile()
    {
        $this->model->editProFile($_POST);
        header('location:' . URL . 'panel/profile');
    }

    function changepass()
    {
        if (isset($_POST['pass_old'])) {
            $data = $_POST;
            $this->model->changePass($data);

        }
        $this->view('panel/changepass');
    }
}


?>