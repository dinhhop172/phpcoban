<?php

require_once '../model/ProductModel.php';
require_once '../filters/UserFilter.php';
require_once 'HelperController.php';
require_once 'AdminController.php';

class ProductController extends AdminController {

    private $productModel;
    private $filter;

    public function __construct()
    {
        $this->productModel = new ProductModel();
        $this->filter = new UserFilter();
    }
    // lay list user
    public function actionList()
    {
        $data = $this->productModel->getAll();
        return $this->view('products/index', $data);
    }
    // lay thong tin 1 user
    public function detail($id)
    {
        return $this->userModel->detail($id);
    }
    // them 1 user
    public function store()
    {
        return HelperController::success();
    }
    // lay phan tu user dau tien
    public function first()
    {
        // $this->filter->apply($this->actionList());
        // phuong thuc nay, hoat dong doc lap. nen dung static
        HelperController::$className = 'UserController';

        return HelperController::render();
        // render();
        // return 1;
    }
}
?>