<?php  
	class As
{
    private $__username;
    private $__password;
  
    function getUsername()
    {
        return 'Xin chào ' . $this->__username;
    }
  
    function setUsername($username)
    {
        $this->__username = $username;
    }
  
    function getPassword()
    {
        return $this->__password;
    }
  
    function setPassword($password)
    {
        $this->__password = md5($password.'ky_tu_muon_them');
    }
}

// Sử dụng
$a = new As();
  
$a->setUsername('TheHalfheart');
  
echo $a->getUsername().'<br>';
  
$a->setPassword('matkhau');
  
echo $a->getPassword();
?>