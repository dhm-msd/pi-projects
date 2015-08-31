<?
if(array_key_exists("command", $_POST)){
	if($_POST['command'] === "get_all"){
		$output = shell_exec("python /var/www/gpio/status.py 1");
		echo $output;
	} else{ 
		$output = shell_exec("python /var/www/gpio/status.py");
		echo $output;
		echo "<br><br>";
	}
}
?>