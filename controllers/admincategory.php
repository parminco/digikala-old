<?php

class Admincategory extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $category = $this->model->showChildren(0);
        $data = ['category' => $category];
        $this->view('admin/category/index', $data);
    }

    function showchildren($idcategory = 0)
    {

        $categoryInfo = $this->model->categoryInfo($idcategory);
        $children = $this->model->showChildren($idcategory);
        $parents = $this->model->getParent($idcategory);
        $data = ['categoryInfo' => $categoryInfo, 'category' => $children, 'parents' => $parents];
        $this->view('admin/category/index', $data);

    }

    function addcategory($categoryId = 0, $edit = '')
    {
        if (isset($_POST['title'])) {
            $title = $_POST['title'];
            $parent = $_POST['parent'];
            $this->model->addCategory($title, $parent, $edit, $categoryId);
        }
        $category = $this->model->getCategory();
        $categoryInfo = $this->model->categoryInfo($categoryId);
        $data = ['category' => $category, 'parentId' => $categoryId, 'edit' => $edit, 'categoryInfo' => $categoryInfo];
        $this->view('admin/category/addcategory', $data);
    }

    function deletecategory($parentId = 0)
    {
        $ids = $_POST['id'];
        $this->model->deleteCategory($ids);
        header('location:' . URL . 'admincategory/showchildren/' . $parentId);
    }

    function showattr($categoryId, $attrId = 0)
    {
        $Attr = $this->model->getAttr($categoryId, $attrId);
        $categoryInfo = $this->model->categoryInfo($categoryId);
        $attrInfo = $this->model->attrInfo($attrId);
        $data = ['attr' => $Attr, 'categoryInfo' => $categoryInfo, 'attrInfo' => $attrInfo];
        $this->view('admin/category/showattr', $data);
    }

    function addAttr($categoryId, $parentId = 0, $editId = '')
    {

        if (isset($_POST['title'])) {
            $this->model->addAttr($_POST, $categoryId, $editId);
            header('location:' . URL . 'admincategory/showattr/' . $categoryId . '/' . $parentId);

        }
        $attr = $this->model->getAttr($categoryId, 0);
        $categoryInfo = $this->model->categoryInfo($categoryId);
        $editInfo = $this->model->attrInfo($editId);
        $data = ['attr' => $attr, 'categoryInfo' => $categoryInfo, 'parentId' => $parentId, 'editInfo' => $editInfo];
        $this->view('admin/category/addattr', $data);
    }

    function deleteattr($categoryId = '', $attrId = '')
    {
        $ids = $_POST['id'];
        $this->model->deleteAttr($ids);
        header('location:' . URL . 'admincategory/showattr/' . $categoryId . '/' . $attrId);

    }

    function attrval($attrId)
    {
        if (isset($_POST['submited'])) {
            $this->model->saveAttrVal($_POST,$attrId);
        }
        $result = $this->model->getAttrVal($attrId);
        $attrInfo = $this->model->attrInfo($attrId);
        $data = ['attrValues' => $result, 'attrInfo' => $attrInfo];

        $this->view('admin/category/attrval', $data);
    }
}

?>