<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$out = exec("python /var/www/gpio/goDown.py");
echo $out;
?>
