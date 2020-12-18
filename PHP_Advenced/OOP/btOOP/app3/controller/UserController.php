<?php

require_once '../model/UserModel.php';
require_once '../filters/UserFilter.php';
require_once 'HelperController.php';
require_once '.php';

class UserController extends  AdminController {

    private $userModel;
    private $filter;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->filter = new UserFilter();
    }
    // lay list user
    public function actionList()
    {
        $data = $this->userModel->getAll();
        return $this->render('users/index', $data);
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