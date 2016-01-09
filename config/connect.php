<?php
/**
 * AlQuran DB Connect File
 * @author Shahriar
 * @version 1.0.1
*/
 
 $con=@mysql_connect('localhost','dream71_qurandb','KxR~CPeq*m=%');
 if($con) {
	$db=@mysql_select_db('dream71_alquran');
	if(!$db)
	echo "DB error!";
 }
 else
	echo "Connection Error";
