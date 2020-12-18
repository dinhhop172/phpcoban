<?php
require_once 'model/UserModel1.php';
require_once 'AdminController1.php';

class UserController1 extends AdminController1 {
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

    private $userModel;

    public function  __construct()
    {
        $this->userModel = new UserModel1();
    }

    public function actionList()
    {
        $data = $this->userModel->getAll();
        return $this->view('users/index', $data);
    }
}