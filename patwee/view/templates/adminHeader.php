<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>patwee.nl</title>	
	<script src="https://kit.fontawesome.com/427f2a21e8.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div id="container">
		<nav class="navbar navbar-expand-lg navbar-dark justify-content-end" style="height:40px; background-color:#252525;">
		<ul class="d-flex align-self-center ">
			<li class="navbar-brand align-self-center"><a href="<?= URL ?>home/klantenservice"><i class="fas fa-concierge-bell" style="color:#f0ad4e;"></i></i></a></li>
		</ul>
		</nav>
		<nav class="navbar navbar-expand-lg navbar-dark bg-warning sticky-top justify-content-between">
			<ul class="d-flex align-self-center">
				<img src="<?php echo URL ?>public/afbeeldingen/logo/patwee_logo_black.png?>" style="width:100px;">&nbsp;&nbsp;&nbsp;&nbsp;
				<li  class="navbar-brand align-self-center"><a href="<?= URL ?>home/index"><i class="fas fa-video" style="color:#252525;"></i></a></li>
				<li  class="navbar-brand align-self-center"><a href="<?= URL ?>bezoekers/index"><i class="fas fa-users" style="color:#252525;"></i></a></li>
				<li  class="navbar-brand align-self-center"><a href="<?= URL ?>snackbar/index"><i class="fas fa-hotdog"  style="color:#252525;"></i></a></li>
			</ul>
			<li  class="navbar-brand align-self-center float-right" style="margin-right: -1000px; font-size: 35px;"><a href="<?= URL ?>admin/create"><i class="fas fa-user-lock"  style="color:#252525;"></i></a></li>
