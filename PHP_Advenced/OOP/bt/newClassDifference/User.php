<?php
    include "UserModel.php";

    class User {

        protected $model;

        public function __construct()
        {
            $this->model = new UserModel();
        }

        public function getData() {
            $data = $this->model->getAll();
            return $data;
        }
    }

    $hello = new User();
    echo $hello->getData();
?>