<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$out = shell_exec("python goUp.py");
echo $out;
?>
