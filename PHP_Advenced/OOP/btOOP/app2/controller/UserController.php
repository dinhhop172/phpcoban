<?php

require_once '../model/UserModel.php';

class UserController {

    private  $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }
    public function actionList()
    {
        return $this->userModel->getAll();
    }

    public function detail($id)
    {
        return $this->userModel->detail($id);
    }
}
?>