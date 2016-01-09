<?php
	/**
	 * AlQuran Logout File
	 * @author Shahriar
	 * @version 1.0.1
	*/
	
	session_start();
	session_destroy();
	header('location: ../login');
	