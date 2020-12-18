<?php
$to      = 'dinhhop1702@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: keiradom296@gmail.com' . "\r\n" .
    'Reply-To: keiradom296@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?> 