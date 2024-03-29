<?php

class UserController extends AdminController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }
    public function hello()
    {
        echo $this->userModel->sayHi();
    }

    public function actionList()
    {
        $data = $this->userModel->getAll();
        return $this->view('users/index', $data);
    }
}