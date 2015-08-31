<?php
session_start();
if($_SESSION['logged_in'] == TRUE){
	unset($_SESSION['logged_in']);
	session_destroy();
	echo "U have been logged out.";
	echo '<meta http-equiv="refresh" content="3; url=/gpio" />';
} else {
	echo "U need to be logged in to log out.";
	echo '<meta http-equiv="refresh" content="5; url=/gpio" />';
}

?>