<?php


class product extends Controller
{

    function __construct()
    {

    }

    function index($id,$activeTab='naghd')
    {
        $productInfo = $this->model->productInfo($id);
        $onlyDigiAmir = $this->model->onlyDigiAmir();
        $gallery = $this->model->getGallery($id);

        $data = ['productInfo' => $productInfo, 'onlyDigiAmir' => $onlyDigiAmir, 'gallery' => $gallery,'activeTab'=>$activeTab];
        $this->view('product/index', $data);


    }

    function tab($id, $idcategory)
    {
        $number = $_POST['id'];
        if ($number == 0) {
            $naghd = $this->model->naghd($id);
            $data = [$naghd];
            $this->view('product/tab1', $data, 1, 1);
        }

        if ($number == 1) {
            $fanni = $this->model->fanni($idcategory, $id);
            $data = [$fanni];
            $this->view('product/tab2', $data, 1, 1);
        }

        if ($number == 2) {

            $comment_param = $this->model->comment_param($idcategory, $id);
            $comment = $this->model->getComment($id);

            $data = [$comment_param, $comment];
            $this->view('product/tab3', $data, 1, 1);
        }
        if ($number == 3) {
            $getQuestions = $this->model->getQuestions($id);
            $questions = $getQuestions[0];
            $answers = $getQuestions[1];
            $data = array($questions, $answers);
            $this->view('product/tab4', $data, 1, 1);
        }


    }

    function addtobasket($productId,$color='',$garantee='')
    {
        $this->model->addToBasket($productId,$color,$garantee);
    }


}

?>