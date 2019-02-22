<!doctype html>
<html lang="uk">

<head>
    <title><?php echo $title . " - "; ?>Чернівецький академічний обласний Український музично-драматичний театр ім. Ольги Кобилянської</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html">
	<meta name="author" content="admin">

    <!-- FAVICO -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico" type="image/x-icon">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Playfair+Display|Playfair+Display+SC" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<?php include ROOT . '/views/layouts/css.php'; ?>
	<?php include ROOT . '/views/layouts/js.php'; ?>
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
					<a href="/" class="logo-page"><img src="/assets/images/logo.png"></a>
				</div>
			</div>
		</div>
	</div>

	<div class="topnav" id="myTopnav">
		<div class="container">
			<a href="/affiche/<?php echo strtolower(date("F")); ?>" <?php echo (strpos($_SERVER['REQUEST_URI'], 'affiche'))?'class="active"':null?>>Афіша</a>
			<a href="#">Театр</a></li>
			<a href="/workers/management" <?php echo (strpos($_SERVER['REQUEST_URI'], 'worker'))?'class="active"':null?>>Працівники</a>
			<a href="/repertoire/general" <?php echo (strpos($_SERVER['REQUEST_URI'], 'repertoire') || strpos($_SERVER['REQUEST_URI'], 'spectacle'))?'class="active"':null?>>Репертуар</a>
			<a href="#">Фестиваль</a>
			<a href="#">Студія</a>
			<a href="/articles" <?php echo (strpos($_SERVER['REQUEST_URI'], 'articles') || strpos($_SERVER['REQUEST_URI'], 'article'))?'class="active"':null?>>Новини</a>
			<a href="#">Вакансії</a>
			<a href="http://tickets.dramtheater.cv.ua/ua/playbill/" target="_blank">Квитки</a>
			<a href="#">Контакти</a>
			<a class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
		</div>
	</div>
</div>