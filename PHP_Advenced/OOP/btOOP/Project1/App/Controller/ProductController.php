<?php

class ProductController extends AdminController
{
    private $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }
//    public function hello()
//    {
//        echo self::sayHi();
//    }

    public function actionList()
    {
        $data = $this->productModel->getAll();
        return $this->view('products/index', $data);
    }
}