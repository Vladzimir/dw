<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("blender-maxima-mhb-1290r.php","блендер поларис");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("blender-maxima-mhb-1290r.php", $nick, $comment);
		}
		else
		{
			$error = "class=\"error\"";
		}
	}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>блендер поларис Блендер Maxima MHB-0329  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="блендер поларис, похудеть с пароваркой, пылесос для ногтей, приготовление теста в хлебопечке, картофель микроволновая печь, блендер philips hr 1617, пароварка тефаль цена, хлебопечка мистери, термопот toshiba, какие лучше микроволновые печи, сколько стоит фритюрница, hyla пылесос цена, кофеварка vitek 1513, магазин запчастей для мясорубок,  аэрогриль vitesse vs 408">
		<meta name="description" content="блендер поларис Блендер оснащен механической системой управления и функцией  турборежима. Пять в...">
		<link type="text/css" rel="stylesheet" href="css/styles.css">
		<link type="text/css" rel="stylesheet" href="css/lightbox.css">

		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/lightbox.min.js"></script>
		<script type="text/javascript" src="js/validator.js"></script>
		<script type="text/javascript" src="lib/lib.js"></script>
		<script type="text/javascript">
			$(function(){$('a.photo').lightBox();});

			$(document).ready(function(){
				$(".see-also ul li").hover(
				function(){$(this).children(".box").toggle();},
				function(){$(this).children(".box").toggle();})
			});
		</script>
	</head>
	<body>
		<!-- [CONTAINER] -->
		<div class="container">
			<!-- [HEADER] -->
			<?php require_once "header.php"; ?>			<!-- [END OF HEADER] -->
			<!-- [CONTENT] -->
			<div class="content">
				<div class="product">
					<div class="ls">
						<a class="photo" href="photos/6dd18dbc3abd740bf749993f0923000d.jpeg" title="блендер поларис Блендер Maxima MHB-0329"><img src="photos/6dd18dbc3abd740bf749993f0923000d.jpeg" alt="блендер поларис Блендер Maxima MHB-0329" title="блендер поларис Блендер Maxima MHB-0329 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/kofeynoe-zerno-v-gorkom-shokolade-melitta-60r.php"><img src="photos/fb507058255502712acd55f26151d977.png" alt="похудеть с пароваркой Кофейное зерно в горьком шоколаде Melitta" title="похудеть с пароваркой Кофейное зерно в горьком шоколаде Melitta"></a><h2>Кофейное зерно в горьком шоколаде Melitta</h2></li>
							<li><a href="http://kitchentech.elitno.net/espressokofemashina-melitta-caffeo-lounge-white-45500r.php"><img src="photos/45055ec55f153a8a82f9cf1191933a0c.jpeg" alt="пылесос для ногтей Эспрессо-кофемашина Melitta Caffeo Lounge White (4.0008.67)" title="пылесос для ногтей Эспрессо-кофемашина Melitta Caffeo Lounge White (4.0008.67)"></a><h2>Эспрессо-кофемашина Melitta Caffeo Lounge White (4.0008.67)</h2></li>
							<li><a href="http://kitchentech.elitno.net/avtomaticheskaya-kofemashina-melitta-caffeo-ci-chernaya-65999r.php"><img src="photos/46d0cfd29014c8ec4bfb9c09c292bb23.jpeg" alt="приготовление теста в хлебопечке Автоматическая кофемашина Melitta CAFFEO CI, черная" title="приготовление теста в хлебопечке Автоматическая кофемашина Melitta CAFFEO CI, черная"></a><h2>Автоматическая кофемашина Melitta CAFFEO CI, черная</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>блендер поларис Блендер Maxima MHB-0329</h1>
						<div class="tb"><p>Цена: от <span class="price">1290</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_20480.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Блендер оснащен механической системой управления и функцией  турборежима. Пять возможных скоростей работы. В комплекте идет измельчитель,  мерный стаканчик и венчик для взбивания. Корпус блендера выполнен из светлого  пластика, а материал погружной части из металла.</p><p><br><strong>Характеристики:</strong></p><ul><li>Тип: погружной;</li><li>Мощность: до 500Вт;</li><li>Тип: погружной;</li><li>5 скорости;</li><li>До 19000 оборотов;</li><li>Измельчитель;</li><li>Мерный стаканчик;</li><li>Корпус:  пластик;</li><li>Погружная часть: металл.</li></ul><p><strong>Производитель:</strong><strong> Maxima (Китай)</strong><br><strong>Изготовитель: Китай</strong></p><strong>Гарантия:  12 месяцев</strong> блендер поларис</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/127a383548663b9c155664559c9c2000.jpeg" alt="картофель микроволновая печь Кофемолка Vitesse VS-272" title="картофель микроволновая печь Кофемолка Vitesse VS-272"><div class="box" page="kofemolka-vitesse-vs-1980r"><span class="title">картофель микроволновая печь Кофемолка Vitesse VS-272</span><p>от <span class="price">1980</span> руб.</p></div></li>
						<li><img src="photos/c4c3375bd5e900bb92cb2c5b9021e247.jpeg" alt="блендер philips hr 1617 Термопот  Redmond RTP-M801" title="блендер philips hr 1617 Термопот  Redmond RTP-M801"><div class="box" page="termopot-redmond-rtpm-3290r"><span class="title">блендер philips hr 1617 Термопот  Redmond RTP-M801</span><p>от <span class="price">3290</span> руб.</p></div></li>
						<li><img src="photos/fd3d354d6633b81b504bbc499f3c5989.jpeg" alt="пароварка тефаль цена Чайник электрический Vitek VT-1139 желтый" title="пароварка тефаль цена Чайник электрический Vitek VT-1139 желтый"><div class="box" page="chaynik-elektricheskiy-vitek-vt-zheltyy-1120r"><span class="title">пароварка тефаль цена Чайник электрический Vitek VT-1139 желтый</span><p>от <span class="price">1120</span> руб.</p></div></li>
						<li><img src="photos/aa004256b858fb51c2e43e9faff2b9a8.jpeg" alt="хлебопечка мистери Чайник электрический Maxima MК-113" title="хлебопечка мистери Чайник электрический Maxima MК-113"><div class="box" page="chaynik-elektricheskiy-maxima-mk-760r-3"><span class="title">хлебопечка мистери Чайник электрический Maxima MК-113</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li class="large"><img src="photos/403a4b4ef798c09cf151962161efdcea.jpeg" alt="термопот toshiba Электрический чайник металлический ATLANTA ATH-784, зеленый" title="термопот toshiba Электрический чайник металлический ATLANTA ATH-784, зеленый"><div class="box" page="elektricheskiy-chaynik-metallicheskiy-atlanta-ath-zelenyy-880r"><span class="title">термопот toshiba Электрический чайник металлический ATLANTA ATH-784, зеленый</span><p>от <span class="price">880</span> руб.</p></div></li>
						<li class="large"><img src="photos/27a529eb06db7d79aab6d5d214852413.jpeg" alt="какие лучше микроволновые печи Minamoto R03 (AAA)" title="какие лучше микроволновые печи Minamoto R03 (AAA)"><div class="box" page="minamoto-r-aaa-4r"><span class="title">какие лучше микроволновые печи Minamoto R03 (AAA)</span><p>от <span class="price">4</span> руб.</p></div></li>
						<li class="large"><img src="photos/49901359ef2b43e118be22a24f1caa05.jpeg" alt="сколько стоит фритюрница Minamoto R6 (AA)" title="сколько стоит фритюрница Minamoto R6 (AA)"><div class="box" page="minamoto-r-aa-3r"><span class="title">сколько стоит фритюрница Minamoto R6 (AA)</span><p>от <span class="price">3</span> руб.</p></div></li>
						<li><img src="photos/d50a3dd0a5055f1b90b2cf35609b3ff0.jpeg" alt="hyla пылесос цена Нитрат-тестер (нитратомер) СоЭкС" title="hyla пылесос цена Нитрат-тестер (нитратомер) СоЭкС"><div class="box" page="nitrattester-nitratomer-soeks-5290r"><span class="title">hyla пылесос цена Нитрат-тестер (нитратомер) СоЭкС</span><p>от <span class="price">5290</span> руб.</p></div></li>
						<li><img src="photos/565e52ebc108aee0062c9aab0f314cab.jpeg" alt="кофеварка vitek 1513 Парогенератор Lelit PG024N" title="кофеварка vitek 1513 Парогенератор Lelit PG024N"><div class="box" page="parogenerator-lelit-pgn-16700r"><span class="title">кофеварка vitek 1513 Парогенератор Lelit PG024N</span><p>от <span class="price">16700</span> руб.</p></div></li>
						<li><img src="photos/ed6cccd8ae597a978fe91c415f9d06d3.jpeg" alt="магазин запчастей для мясорубок Фильтры для пылесоса Vitek VT-1855 (VT-1825)" title="магазин запчастей для мясорубок Фильтры для пылесоса Vitek VT-1855 (VT-1825)"><div class="box" page="filtry-dlya-pylesosa-vitek-vt-vt-135r"><span class="title">магазин запчастей для мясорубок Фильтры для пылесоса Vitek VT-1855 (VT-1825)</span><p>от <span class="price">135</span> руб.</p></div></li>
						<li><img src="photos/a24b7e04e12ea5cc75354fc2b5ebd18d.jpeg" alt="фильтры для моющего пылесоса Пылесос Vitek VT-1809 черный" title="фильтры для моющего пылесоса Пылесос Vitek VT-1809 черный"><div class="box" page="pylesos-vitek-vt-chernyy-2600r"><span class="title">фильтры для моющего пылесоса Пылесос Vitek VT-1809 черный</span><p>от <span class="price">2600</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("blender-maxima-mhb-1290r.php", 0, -4); if (file_exists("comments/blender-maxima-mhb-1290r.php")) require_once "comments/blender-maxima-mhb-1290r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="blender-maxima-mhb-1290r.php" method="post" onsubmit="return checkForm(this)">
						<p><textarea name="comment" placeholder="Ваше сообщение здесь"></textarea></p>
						<p><input type="text" name="author" placeholder="*Имя"><input type="text" name="captcha" placeholder="*Код" <?php if(isset($error)) echo "$error"; ?>><img class="captcha" src="captcha.php" alt=""><input type="submit"></p>
					</form>
				</div>
			</div>
			<!-- [END OF CONTENT] -->

			<!-- [FOOTER] -->
			 <?php require_once "footer.php"; ?>			<!-- [END OF FOOTER] -->
		</div>
		<!-- [END OF CONTAINTER] -->
	</body>
</html>