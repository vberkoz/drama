<!doctype html>
<html lang="uk">

<head>
    <title>Адміністрування</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html">
	<meta name="author" content="admin">

    <!-- FAVICO -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico" type="image/x-icon">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Playfair+Display|Playfair+Display+SC" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- DEFAULT CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- CUSTOM CSS -->
	<link rel="stylesheet" href="/assets/css/header-admin.css">
	
	<!-- DEFAULT JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
		integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- include summernote css/js -->
	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>

	<!-- CUSTOM JS -->
	<script src="/assets/js/menu.js"></script>
</head>

<body>
<div class="topnav" id="myTopnav">
	<div class="container">
		<a href="/admin/dashboard" <?php echo strpos($_SERVER['REQUEST_URI'], 'dashboard') ? 'class="active"' : null ?>>Статистика</a>
		<a href="/admin/articles/page-1" <?php echo (strpos($_SERVER['REQUEST_URI'], 'articles') || strpos($_SERVER['REQUEST_URI'], 'article'))?'class="active"':null?>>Статті</a>
		<a href="/admin/spectacles/page-1" <?php echo (strpos($_SERVER['REQUEST_URI'], 'spectacles') || strpos($_SERVER['REQUEST_URI'], 'spectacle'))?'class="active"':null?>>Вистави</a>
		<a href="/admin/images/page-1" <?php echo (strpos($_SERVER['REQUEST_URI'], 'images') || strpos($_SERVER['REQUEST_URI'], 'image'))?'class="active"':null?>>Зображення</a>
		<!-- <a href="/affiche/<?php echo strtolower(date("F")); ?>" <?php echo (strpos($_SERVER['REQUEST_URI'], 'affiche'))?'class="active"':null?>>Афіша</a>
		<a href="#">Театр</a>
		<a href="/workers/management" <?php echo (strpos($_SERVER['REQUEST_URI'], 'worker'))?'class="active"':null?>>Працівники</a>
		<a href="#">Фестиваль</a>
		<a href="#">Студія</a>
		<a href="#">Вакансії</a>
		<a href="#">Контакти</a> -->
		<a href="/user/logout">Вийти</a>
		<a class="icon" onclick="toggleMenu()"><i class="fa fa-bars"></i></a>
	</div>
</div>