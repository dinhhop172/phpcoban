<?php
require_once 'model/ProductModel1.php';
require_once 'AdminController1.php';

class ProductController1 extends AdminController1 {
//    private $userModel;
//
//    public function __construct()
//    {
//        $this->userModel = new UserModel();
//    }
//
//    public  function actionList()
//    {
//        $data = $this->userModel->getAll();
//        return $this->view('users/index', $data);
//    }

    private $productModel;

    public function  __construct()
    {
        $this->productModel = new ProductModel1();
    }

    public function actionList()
    {
        $data = $this->productModel->getAll();
        return $this->view('products/index', $data);
    }
}