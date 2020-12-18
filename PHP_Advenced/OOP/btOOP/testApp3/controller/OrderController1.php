<?php

require_once 'model/OrderModel1.php';
require_once 'AdminController1.php';

//use app\model\UserModel as UserModel;

class OrderController1 extends AdminController1 {

    private $orderModel;

    public function __construct()
    {
        $this->orderModel = new OrderModel1();
    }
    // lay list user
    public function actionList()
    {
        $data = $this->orderModel->getAll();
        return $this->view('orders/index', $data);
    }
    // lay thong tin 1 user
    public function detail($id)
    {
        return $this->orderModel->detail($id);
    }
    // them 1 user
    // lay phan tu user dau tien
}
?>