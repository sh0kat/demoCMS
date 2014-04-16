<?php
function redirect($url) {
if (!headers_sent()) {
header('Location: http://' . $_SERVER['HTTP_HOST']) ;
} else {
die('Could not redirect; Headers already sent (output).');
}
}
?>