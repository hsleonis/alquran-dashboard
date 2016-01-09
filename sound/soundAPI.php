<?php
/**
 * AlQuran Audio API
 * @author Shahriar
 * @version 1.0.1
*/

	define('ABSPATH', 'aideoStream');
	require_once('leoStream.php');
	
	$file=$_GET['sura_no'];
	// Run streaming audio
	$stream = new leoStream("../sound/".$file.".mp3");
	$stream->start();
	exit;