<?php

session_start(); 

//require user configuration and database connection parameters
require('assets/config.php');

error_reporting(E_ALL);

if (!isset($_SESSION['logged_in'])) {
    $_SESSION['logged_in'] = FALSE;
	$registered = TRUE;
}

//Check if the form is submitted

if ((isset($_POST["pass"])) && (isset($_POST["user"]))) {
	
	//Username and password has been submitted by the user
	//Receive and sanitize the submitted information
	$registered = TRUE;
	$user=$_POST["user"];
	$pass= $_POST["pass"];

	//validate username
	if (!($fetch = mysql_fetch_array( mysql_query("SELECT `username` FROM `users` WHERE `username`= '$user'")))) {
		$validationresults = 'wrongusername';
		//no records of username in database
		//user is not yet registered
		$registered=FALSE;
	}

	//Get correct hashed password based on given username stored in MySQL database
	if ($registered==TRUE) {
		//username is registered in database, now get the hashed password
		$result = mysql_query("SELECT `password` FROM `users` WHERE `username`='".$user."'");
		$row = mysql_fetch_array($result);
		$correctpassword = $row["password"];
	}
	if ($pass != $correctpassword){
		//user login validation fails
		$validationresults = 'wrongpass';
	}
	if ($pass == $correctpassword){
		//Finally store user unique signature in the session
		//and set logged_in to TRUE as well as start activity time
		$_SESSION['validationresults'] = 'normal';
		$_SESSION['logged_in'] = TRUE;
		$_SESSION['user'] = $user;
		$_SESSION['username'] = $user;				//$_SESSION['username'] handles the username cross pages.
		// Redirect the user to the requested page and not to index
	}
}

if (!$_SESSION['logged_in']): 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Command + Control Panel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="someone">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

	<link rel="shortcut icon" href="img/favicon.png">
  
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
</head>

<body style="overflow-x: hidden;">

	<div class="row clearfix" >
	
		<div class="col-md-12 column">
		
			<div id="login" style="margin-top: 100px;">
				
				<center>
					<img src="img/locker.png" /><br><br><br>
				</center>
				
				<div class="col-md-4 column" style="left: 50%; margin-left: -16%;  z-index: 1;">
					<div class="panel panel-primary" style="box-shadow: 0px 0px 40px gray">
					  <div class="panel-heading">
						<h3 class="panel-title"><span class="glyphicon glyphicon-lock"></span> Login Panel (Authentication)</h3>
					  </div>
					    <div class="panel-body" style="padding: 15px 15px 0px 15px;">
						
							<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="form-horizontal" role="form">
							  <div class="form-group">
								<div class="col-sm-12">
								  <input type="text" class="form-control" name="user" placeholder="Username">
								</div>
							  </div>
							  <div class="form-group">
								<div class="col-sm-12">
								  <input type="password" class="form-control" name="pass" placeholder="Password">
								</div>
							  </div>
						  
					    </div>
						
						<div class="panel-footer">
							
							<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-leaf"></span> Authorise Access</button>
							<button type="reset" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span> Reset</button>
							<?php 
							if (isset($validationresults)){
								echo $validationresults;
							}
							?>
							</form>
						</div>
						<br>
				</div>
				
				
			</div>
		
		</div>
		
	</div>
	
</body>
</html>
<?php
exit();
endif;
?>