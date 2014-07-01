<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html>
<head>
	<title><?php echo $pageTitle ?></title>
	<meta charset='utf-8'>
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="icon" href="img/favicon.ico" type="image/x-icon" />
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/slimbox2.js"></script>
	<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" />
</head>
<body>		

		<!-- Header -->
		<header id="header">
				
				<div id="logo">
					<a href="index.php"><img src="img/logo.png" alt="Logo" /></a>
				</div>			

					<!-- Navigation -->
				<nav id="main-nav">
					<ul>
						<li id="current"><a href="index.php">Начало</a></li>
						<li><a href="jokes.php">Вицове</a></li>
						<li><a href="gallery.php">Галерия</a></li>
						<li><a href="news.php">Новини</a></li>
						<li><a href="about.php">За нас</a></li>
						<li><a href="http://softuni.bg" target="_blank">SoftUni</a></li>
					</ul>
				</nav>

				<div id="search">
	    			<form id="searchform" action="#" style="display:inline;" method="get">
						<input id="search-box" name="search" size="40" type="text" placeholder="Търсене"/>
						<input id="search-btn" value="Search" type="submit"/>
					</form>
				</div>				

		</header>