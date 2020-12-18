<?php
class ProductController extends AdminController
{
    private $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function list()
    {
        $data = $this->productModel->getAll();
        return $this->view('products/index', $data);
    }
}