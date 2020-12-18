<?php 
// Kiểm tra định dạng email
function is_email($str) {
    return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/", $str)) ? FALSE : TRUE;
}
print_r( is_email('dd@gmail.com'));
 ?>