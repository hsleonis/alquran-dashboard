<?php
/**
 * AlQuran Header
 * @author Shahriar
 * @version 1.0.1
*/
?>
<!DOCTYPE html>

<html lang="en">
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
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.0-rc.1/angular.min.js"></script>
	<script type="text/javascript" src="bin/js/ng-file-upload-shim.min.js"></script>
	<script type="text/javascript" src="bin/js/ng-file-upload.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.0-rc.1/angular-resource.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.0-rc.1/angular-route.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.0-rc.1/angular-cookies.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.0-rc.1/angular-sanitize.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.0-rc.1/angular-touch.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.0-rc.1/angular-animate.min.js"></script> 
	<script type="text/javascript" src="bin/js/base.js"></script>
	<script type="text/javascript" src="bin/js/jquery.js"></script>
</head>

<body>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="">
					<img src="bin/img/alquran.png" style="height: 50px;" /> AlQuran App Server
				</a>

				<div class="nav-collapse">
					<ul class="nav pull-right">
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-user"></i> Dream71.com <b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Settings</a>
								</li>
								<li>
									<a href="admin/logout">Logout</a>
								</li>
							</ul>
						</li>
					</ul>

					<form class="navbar-search pull-right">
						<input class="search-query" placeholder="Search" type="text">
					</form>
				</div><!--/.nav-collapse -->
			</div><!-- /container -->
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->
	
	<div class="subnavbar" data-ng-app="menu" data-ng-controller="shahriar">
		<div class="subnavbar-inner">
			<div class="container">
				<ul class="mainnav">
					<li data-ng-repeat="x in templates">
						<a ng-click="nav(x.url)" data-ng-href="#">
						<i class="{{x.icon}}"></i><span>{{x.name}}</span></a>
					</li>
				</ul>
			</div><!-- /container -->
		</div><!-- /subnavbar-inner -->
		<div class="slide-animate-container container">
		    <div class="slide-animate" data-ng-include="path"></div>
		</div>
	</div><!-- /subnavbar -->
	<!-- Main Container -->
	<div class="main">
	  <div class="main-inner">
	    <div class="container">
	      <div class="row">