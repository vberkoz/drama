<!doctype html>
<html lang="uk">

<head>
    <title><?php echo $title . " - "; ?>Чернівецький академічний обласний Український музично-драматичний театр ім. Ольги Кобилянської</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html">
	<meta name="author" content="admin">

    <!-- FAVICO -->
    <link rel="shortcut icon" href="/template/images/favicon.ico" type="image/x-icon">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Playfair+Display|Playfair+Display+SC" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- DEFAULT CSS -->
    <link rel="stylesheet" href="/template/css/hamburgers.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="/template/css/header.css">
    <link rel="stylesheet" href="/template/css/header-media.css">
    <link rel="stylesheet" href="/template/css/footer.css">
    <link rel="stylesheet" href="/template/css/articles-list.css">
	<link rel="stylesheet" href="/template/css/articles.css">
	<link rel="stylesheet" href="/template/css/repertoire.css">
	<link rel="stylesheet" href="/template/css/spectacle.css">
	<link rel="stylesheet" href="/template/css/workers.css">
	<link rel="stylesheet" href="/template/css/worker.css">
</head>

<body>
<div class="top-line-menu">
	<div class="under-menu">
		<div class="container">
			<div class="row">
				<div class="col-xs-4">
					<div class="title-text"><p>Чернівецький академічний обласний<br>український музично-драматичний театр<br>імені Ольги Кобилянської</p></div>
					<div class="title-text-mobile"><p>Чернівецький академічний обласний український музично-драматичний театр імені Ольги Кобилянської</p></div>
				</div>
				<div class="col-xs-4 soc-container">
					<div class="right-top-block">
						<ul class="soc-list">
							<li><a href="https://www.twitter.com/dramtheater1905" target="_blank" style="color: #fff;"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
							<li><a href="https://instagram.com/dramtheater1905" target="_blank" style="color: #fff;"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></li>
							<li><a href="http://www.facebook.com/dramtheater" target="_blank" style="color: #fff;"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-xs-4 logo">
					<a href="/" class="logo-page"><img src="/template/images/logo.png"></a>
				</div>
			</div>
		</div>
	</div>

	<div class="menu">
		<div class="container">
			<div class="row">
				<div class="col-md-12" style="text-align: right;">
					<div class="hamburger hamburger--arrowalt hidden-lg hidden-md hidden-sm">
					    <div class="hamburger-box">
					    	<div class="hamburger-inner"></div>
					    </div>
					</div>
					<nav>
						<ul>
							<li class="left-li menu-item"><a href="/affiche/<?php echo strtolower(date("F")); ?>" <?php echo (strpos($_SERVER['REQUEST_URI'], 'affiche'))?'class="active"':null?>>Афіша</a></li>
							<li class="left-li menu-item"><a href="#">Театр</a></li>
							<li class="left-li menu-item"><a href="/workers/management" <?php echo (strpos($_SERVER['REQUEST_URI'], 'worker'))?'class="active"':null?>>Працівники</a></li>
							<li class="left-li menu-item"><a href="/repertoire/general" <?php echo (strpos($_SERVER['REQUEST_URI'], 'repertoire') || strpos($_SERVER['REQUEST_URI'], 'spectacle'))?'class="active"':null?>>Репертуар</a></li>
							<li class="left-li menu-item"><a href="#">Фестиваль</a></li>
							<li class="right-li menu-item"><a href="#">Студія</a></li>
							<li class="right-li menu-item"><a href="/news" <?php echo (strpos($_SERVER['REQUEST_URI'], 'news') || strpos($_SERVER['REQUEST_URI'], 'article'))?'class="active"':null?>>Новини</a></li>
							<li class="right-li menu-item"><a href="#">Вакансії</a></li>
							<li class="right-li menu-item"><a href="http://tickets.dramtheater.cv.ua/ua/playbill/">Квитки</a></li>
							<li class="right-li menu-item"><a href="#">Контакти</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>