<?php
/**
 * AlQuran Login File
 * @author Shahriar
 * @version 1.0.1
*/
	
	session_start();
	if(isset($_SESSION['logged'])) header('location: index?page=dashboard');
	
	if(isset($_POST['login'])){
		require('config/connect.php');
		require('config/db.php');
		$user=md5($_POST['username']);
		$pass=md5($_POST['password']);
		$found=sql_data("q_admin","uname='".$user."' and upass='".$pass."'");
		
		if($found){
			date_default_timezone_set('Asia/Dhaka');
			$args=array(
				'ulogin' => date('d/m/Y h:i:s')." ".$_SERVER['REMOTE_ADDR']
			);
			$chk=update_data('q_admin', $args, "uname='".$user."'");
			if($chk) {
				$_SESSION['logged']=1;
				header('location: index?page=dashboard');
			}
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="content-type">
		<meta charset="utf-8">
	
		<title>AlQuran App | Admin Panel</title>
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"	name="viewport">
		<meta content="yes" name="apple-mobile-web-app-capable">
		<link href="bin/css/bootstrap.css" rel="stylesheet">
		<link href="bin/css/bootstrap-responsive.css" rel="stylesheet">
		<link href="bin/css/css.css" rel="stylesheet">
		<link href="bin/css/font-awesome.css" rel="stylesheet">
		<link href="bin/css/style.css" rel="stylesheet">
		<link href="bin/css/dashboard.css" rel="stylesheet">
		<link href="bin/css/top-bar.css" rel="stylesheet" type="text/css">
	</head>
	<body style="background: #252C33;">
		<div class="account-container">
			<div class="content clearfix">
				<form action="" method="post">
					<div class="login-div">
						<img src="bin/img/alquran.png"/>
					</div> 
					<h1>AlQuran App Login</h1>
		
					<div class="login-fields">
						<p>Please provide your details</p>
		
						<div class="field">
							<label for="username">Username</label> <input class="login username-field" id="username" name="username" placeholder="Username" type="text" value="">
						</div><!-- /field -->
		
						<div class="field">
							<label for="password">Password:</label> <input class="login password-field" id="password" name="password" placeholder="Password" type="password" value="">
						</div><!-- /password -->
					</div><!-- /login-fields -->
		
					<div class="login-actions">
						<span class="login-checkbox"><input class="field login-checkbox" id="Field" name="field" tabindex="4" type="checkbox" value="First Choice"> <label class="choice" for="Field">Keep me signed in</label></span>
						<button class="button btn btn-success btn-large" name="login">Sign In</button>
					</div><!-- .actions -->
				</form>
			</div><!-- /content -->
		</div>
	</body>
</html>