<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

if(array_key_exists('pinNum', $_POST)){
	$pinNum = $_POST['pinNum'];
	$out = exec("python /var/www/gpio/trigger.py ".$pinNum);
	echo $out;
} else {
	echo "no-pin-selected";
}
?>