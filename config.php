<?php
error_reporting(E_ALL);

$username = "admin";
$password = "admin";
$hostname = "localhost";
$database = "command_and_control";

$dbhandle = mysql_connect($hostname, $username, $password)
 or die("Unable to connect to MySQL");
$selected = mysql_select_db($database,$dbhandle)
or die("Could not select $database");
?>