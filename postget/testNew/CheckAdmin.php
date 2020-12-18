<?php 
class CheckAdmin {
    private $email;
    private $pass;
    const EMAIL_ADMIN = 'vu@admin.com';
    const PASS_ADMIN = '12345678';

    const EMAIL_MEMBER = 'vu@member.com';
    const PASS_MEMBER = 'vu@member.com';

    public function __construct($credentials)
    {
        // $this->email = $credentials['email'];
        // $this->pass = $credentials['password'];
        var_dump($credentials);
    }
}
?>