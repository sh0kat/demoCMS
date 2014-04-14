<?php
require_once 'conn.php';
$email= 'sonialouder@gmail.com';
$domain = strstr($email, '@');
echo $domain; // prints @gmail.com

?>
