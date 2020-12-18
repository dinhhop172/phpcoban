<?php
    // class CheckAdmin {
    //     private $role;
    //     const ROLE_ADMIN = 2;
    //     const ROLE_MEMBER = 1;

    //     public function __construct($role) 
    //     {
    //         $this->role = $role;
    //     }

    //     private function getRole() 
    //     {
    //         return $this->role;
    //     }

    //     private function isMember() 
    //     {
    //         if($this->getRole() == self::ROLE_MEMBER)
    //         {
    //             return true;
    //         }
    //         return false;
    //     }

    //     private function isAdmin() 
    //     {
    //         if($this->getRole() == self::ROLE_ADMIN)
    //         {
    //             return true;
    //         }
    //         return false;
    //     }

    //     public function checkRole()
    //     {
    //         if($this->isMember()) return "day la member";
    //         if($this->isAdmin()) return "day la admin";
    //         return "khong xac dinh";
    //         // var_dump(self::ROLE_ADMIN);
    //     }
    // }
    // $role = isset($_POST['name']) ? $_POST['name'] : "";
    // $hung = new CheckAdmin($role);
    // echo $hung -> checkRole();
    // var_dump($role);


    class CheckAdmin {
        private $name;
        private $password;

        public function __construct($name, $password)
        {
            $this->name = $name;
            $this->password = $password;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getPassword() 
        {
            return $this->password;
        }

        // private function isMember() 
        // {
        //     if($this->getName() !== 'vu@gmail.com')
        //     {
        //         return true;
        //     }
        //     if($this->getPassword() !== '1234')
        //     {
        //         return true;
        //     }
        //     return false;
        // }

        // private function isAdmin() 
        // {
        //     if($this->getName() == 'vu@gmail.com')
        //     {
        //         return true;
        //     }
        //     if($this->getPassword() == '1234')
        //     {
        //         return true;
        //     }
        //     return false;
        // }

        // public function checkRole()
        // {
        //     if($this->isMember()) return "Day la member";
        //     if($this->isAdmin()) return "Day la admin";
        //     return "Khong xac dinh";
        // }
    }
    // $username = isset($_POST['name']) ? $_POST['name'] : '';
    // $password = isset($_POST['password']) ? $_POST['password'] : '';
    // $person1 = new CheckAdmin($username, $password);
    // echo $person1->checkRole();
?>