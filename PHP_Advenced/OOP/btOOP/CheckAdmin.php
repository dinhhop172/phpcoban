<?php
    class CheckAdmin {
        private $role;
        const ROLE_ADMIN = 2;
        const ROLE_MEMBER = 1;

        public function __construct($role) 
        {
            $this->role = $role;
        }

        private function getRole() 
        {
            return $this->role;
        }

        private function isMember() 
        {
            if($this->getRole() == self::ROLE_MEMBER)
            {
                return true;
            }
            return false;
        }

        private function isAdmin() 
        {
            if($this->getRole() == self::ROLE_ADMIN)
            {
                return true;
            }
            return false;
        }

        public function checkRole()
        {
            if($this->isMember()) return "day la member";
            if($this->isAdmin()) return "day la admin";
            return "khong xac dinh";
            // var_dump(self::ROLE_ADMIN);
        }
    }
    $role = isset($_POST['name']) ? $_POST['name'] : "";
    $hung = new CheckAdmin($role);
    echo $hung -> checkRole();
    var_dump($role);

?>