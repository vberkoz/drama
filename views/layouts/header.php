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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- DEFAULT CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="/assets/css/header.css">
    <link rel="stylesheet" href="/assets/css/header-media.css">
    <link rel="stylesheet" href="/assets/css/footer.css">
    <link rel="stylesheet" href="/assets/css/articles-list.css">
	<link rel="stylesheet" href="/assets/css/article.css">
	<link rel="stylesheet" href="/assets/css/repertoire.css">
	<link rel="stylesheet" href="/assets/css/spectacle.css">
	<link rel="stylesheet" href="/assets/css/workers.css">
	<link rel="stylesheet" href="/assets/css/worker.css">

	<!-- DEFAULT JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
		integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<style>
		.topnav {
			overflow: hidden;
			background-color: #290000;
		}

		.topnav a {
			float: left;
			display: block;
			color: #f2f2f2;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-size: 17px;
		}

		.topnav a:hover {
			background-color: #ddd;
			color: black;
		}

		.active {
			/* border-bottom: 1px #600 solid;
			font-weight: bold; */
  			background-color: #460000;
			color: #600;
		}

		.topnav .icon {
			display: none;
		}

		@media screen and (max-width: 600px) {
			.under-menu { display: none; }
			.topnav a:not(.active) {display: none;}
			.topnav a.icon {
				float: right;
				display: block;
			}
		}

		@media screen and (max-width: 600px) {
			.topnav.responsive {position: relative;}
			.topnav.responsive .icon {
				position: absolute;
				right: 0;
				top: 0;
			}
			.topnav.responsive a {
				float: none;
				display: block;
				text-align: left;
			}
		}
	</style>

    <script>
        function myFunction() {
            console.log('myFunction');
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
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
			<a href="/news" <?php echo (strpos($_SERVER['REQUEST_URI'], 'news') || strpos($_SERVER['REQUEST_URI'], 'article'))?'class="active"':null?>>Новини</a>
			<a href="#">Вакансії</a>
			<a href="http://tickets.dramtheater.cv.ua/ua/playbill/" target="_blank">Квитки</a>
			<a href="#">Контакти</a>
			<a class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
		</div>
	</div>
</div>