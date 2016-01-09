<?php
/**
 * AlQuran Login file
 * @author Shahriar
 * @version 1.0.1
*/
	session_start();
	if(!isset($_SESSION['logged'])) header('location: login');
	
	require_once('config/function.php');
	require_once('config/connect.php');
	require_once('config/db.php');
	
	require_once('admin/header.php');
	if(!url_valid()){
		//require_once('admin/'.$_GET['page'].'.php');
		//require_once('admin/404.php');
	}
	require_once('admin/footer.php');