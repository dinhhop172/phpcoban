<?php
require_once '../helper/helper.php';

class CheckAdmin {
    private $email;
    private $pass;
    const EMAIL_ADMIN = 'vu@admin.com';
    const PASS_ADMIN = '12345678';

    const EMAIL_MEMBER = 'vu@member.com';
    const PASS_MEMBER = 'vu@member.com';

    public function __construct($credentials)
    {
        $this->email = $credentials['email'];
        $this->pass = $credentials['password'];
    }

    public function isAdmin()
    {
        if ($this->email == self::EMAIL_ADMIN && $this->pass == self::PASS_ADMIN) {
            return true;
        }
        return false;
    }

    public function isMember()
    {
        if ($this->email == self::EMAIL_MEMBER && $this->pass == self::EMAIL_MEMBER) {
            return true;
        }
        return false;
    }
}
?>