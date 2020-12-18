<?php
class OrderController extends AdminController
{
    private $orderModel;

    public function __construct()
    {
        $this->orderModel = new OrderModel();
    }
    public function list()
    {
        $data = $this->orderModel->getAll();
        return $this->view('orders/index', $data);
    }
}