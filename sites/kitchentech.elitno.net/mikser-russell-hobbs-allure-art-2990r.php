<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("mikser-russell-hobbs-allure-art-2990r.php","работа моющего пылесоса");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("mikser-russell-hobbs-allure-art-2990r.php", $nick, $comment);
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
		<title>работа моющего пылесоса Миксер Russell Hobbs Allure, арт. 18275-56  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="работа моющего пылесоса, кофеварка philips отзывы, вафельница киев, стоимость миксера, кухонный комбайн фото, пельмени в мультиварке на пару, утюг philips 4420, аэрогриль hotter 1037, мультиварка киев купить, daewoo микроволновая печь инструкция, взбить блендером яйца, купить блендер braun mr 6550, сравнение блендеров, купить мультиварку в красноярске,  печенье через мясорубку рецепт">
		<meta name="description" content="работа моющего пылесоса Миксер Allure,  мощностью 350 Вт, выполнен из металла, что обеспечивает надежнос...">
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
						<a class="photo" href="photos/09b400ad2ab5ec6d74c116d61dc967fc.jpeg" title="работа моющего пылесоса Миксер Russell Hobbs Allure, арт. 18275-56"><img src="photos/09b400ad2ab5ec6d74c116d61dc967fc.jpeg" alt="работа моющего пылесоса Миксер Russell Hobbs Allure, арт. 18275-56" title="работа моющего пылесоса Миксер Russell Hobbs Allure, арт. 18275-56 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-pogruzhnoy-moulinex-ddd-3050r.php"><img src="photos/88431db04944e702f33c054454f31139.jpeg" alt="кофеварка philips отзывы Блендер погружной Moulinex DD407D72" title="кофеварка philips отзывы Блендер погружной Moulinex DD407D72"></a><h2>Блендер погружной Moulinex DD407D72</h2></li>
							<li><a href="http://kitchentech.elitno.net/kofemashina-nivona-nicr-caferomatica-63790r.php"><img src="photos/7bf6714fb23984d0a15fec9274d53078.jpeg" alt="вафельница киев Кофемашина Nivona NICR830 CafeRomatica" title="вафельница киев Кофемашина Nivona NICR830 CafeRomatica"></a><h2>Кофемашина Nivona NICR830 CafeRomatica</h2></li>
							<li><a href="http://kitchentech.elitno.net/kofemolka-nivona-nicg-cafegrano-4490r.php"><img src="photos/696246935af3c686fbf13206e4f5dbc0.jpeg" alt="стоимость миксера Кофемолка Nivona NICG120 CafeGrano" title="стоимость миксера Кофемолка Nivona NICG120 CafeGrano"></a><h2>Кофемолка Nivona NICG120 CafeGrano</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>работа моющего пылесоса Миксер Russell Hobbs Allure, арт. 18275-56</h1>
						<div class="tb"><p>Цена: от <span class="price">2990</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_21520.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Миксер Allure,  мощностью 350 Вт, выполнен из металла, что обеспечивает надежность и  долговечность устройства. Миксер работает в режиме шести скоростей, есть режим  турбо. В комплекте две насадки (венчик для взбивания и крики для теста).  Управление сенсорное, удобный ЖК-дисплей. Цифровой таймер.</p><p><strong>Характеристики:</strong></p><ul><li>Тип: ручной;</li><li>Мощность: 350 Вт;</li><li>Число скоростей: 6;</li><li>Турбо режим;</li><li>Количество насадок: 2;</li><li>Венчик для взбивания;</li><li>Крюки для теста;</li><li>Материал корпуса: металл;</li><li>Кнопка отсоединения насадок;</li><li>Цифровой таймер;</li><li>Сенсорное управление;</li><li>ЖК-дисплей.</li></ul><p><strong>Производитель:</strong><strong>Russell</strong><strong>Hobbs (Англия)</strong></p> работа моющего пылесоса</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/a778f38f56b1abc67bee8e49c9772547.jpeg" alt="кухонный комбайн фото Микроволновая печь Vitek VT-1691" title="кухонный комбайн фото Микроволновая печь Vitek VT-1691"><div class="box" page="mikrovolnovaya-pech-vitek-vt-2750r"><span class="title">кухонный комбайн фото Микроволновая печь Vitek VT-1691</span><p>от <span class="price">2750</span> руб.</p></div></li>
						<li><img src="photos/7b810f6db4d02163ddaea09283048313.jpeg" alt="пельмени в мультиварке на пару Электрический миксер Bodum BISTRO 11151-913EURO белый" title="пельмени в мультиварке на пару Электрический миксер Bodum BISTRO 11151-913EURO белый"><div class="box" page="elektricheskiy-mikser-bodum-bistro-euro-belyy-2740r"><span class="title">пельмени в мультиварке на пару Электрический миксер Bodum BISTRO 11151-913EURO белый</span><p>от <span class="price">2740</span> руб.</p></div></li>
						<li><img src="photos/8e06126566eae5ed349414b3b9cfd8ea.jpeg" alt="утюг philips 4420 Мультиварка Maruchi RB-FC46" title="утюг philips 4420 Мультиварка Maruchi RB-FC46"><div class="box" page="multivarka-maruchi-rbfc-2500r"><span class="title">утюг philips 4420 Мультиварка Maruchi RB-FC46</span><p>от <span class="price">2500</span> руб.</p></div></li>
						<li><img src="photos/e9322568d654cf02152dc451f13376f9.jpeg" alt="аэрогриль hotter 1037 Чайник электрический  Vitesse VS-113 1,5л красный" title="аэрогриль hotter 1037 Чайник электрический  Vitesse VS-113 1,5л красный"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-krasnyy-1950r"><span class="title">аэрогриль hotter 1037 Чайник электрический  Vitesse VS-113 1,5л красный</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li class="large"><img src="photos/1b3cfce3fc4c2602ab4206bda1961e7d.jpeg" alt="мультиварка киев купить Чайник электрический  Vitesse VS-136 2л бело-лазурный" title="мультиварка киев купить Чайник электрический  Vitesse VS-136 2л бело-лазурный"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-belolazurnyy-920r"><span class="title">мультиварка киев купить Чайник электрический  Vitesse VS-136 2л бело-лазурный</span><p>от <span class="price">920</span> руб.</p></div></li>
						<li class="large"><img src="photos/0acc9f01a71196d6ab7726b81327e74c.jpeg" alt="daewoo микроволновая печь инструкция Электрический чайник Atlanta АТН-717" title="daewoo микроволновая печь инструкция Электрический чайник Atlanta АТН-717"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-390r"><span class="title">daewoo микроволновая печь инструкция Электрический чайник Atlanta АТН-717</span><p>от <span class="price">390</span> руб.</p></div></li>
						<li class="large"><img src="photos/a42c720a2044c4a70ca880342e1aa3f1.jpeg" alt="взбить блендером яйца Чайник дисковый керамический 1,7л, розовые цветы Zauber ECO-350" title="взбить блендером яйца Чайник дисковый керамический 1,7л, розовые цветы Zauber ECO-350"><div class="box" page="chaynik-diskovyy-keramicheskiy-l-rozovye-cvety-zauber-eco-1750r"><span class="title">взбить блендером яйца Чайник дисковый керамический 1,7л, розовые цветы Zauber ECO-350</span><p>от <span class="price">1750</span> руб.</p></div></li>
						<li><img src="photos/df7a2601f4d7471689f34a2d1cbcf14f.jpeg" alt="купить блендер braun mr 6550 Электрический чайник 1,5л зеленый Bodum BISTRO 11138-565EURO" title="купить блендер braun mr 6550 Электрический чайник 1,5л зеленый Bodum BISTRO 11138-565EURO"><div class="box" page="elektricheskiy-chaynik-l-zelenyy-bodum-bistro-euro-2740r"><span class="title">купить блендер braun mr 6550 Электрический чайник 1,5л зеленый Bodum BISTRO 11138-565EURO</span><p>от <span class="price">2740</span> руб.</p></div></li>
						<li><img src="photos/41efedb38089aeb46a210ce7ff30eedc.jpeg" alt="сравнение блендеров Детектор жучков BugHunter Professional BH-01" title="сравнение блендеров Детектор жучков BugHunter Professional BH-01"><div class="box" page="detektor-zhuchkov-bughunter-professional-bh-7990r"><span class="title">сравнение блендеров Детектор жучков BugHunter Professional BH-01</span><p>от <span class="price">7990</span> руб.</p></div></li>
						<li><img src="photos/510105f381aa497ebe08b03499acd217.jpeg" alt="купить мультиварку в красноярске Пылесос Redmond RV-307" title="купить мультиварку в красноярске Пылесос Redmond RV-307"><div class="box" page="pylesos-redmond-rv-4490r"><span class="title">купить мультиварку в красноярске Пылесос Redmond RV-307</span><p>от <span class="price">4490</span> руб.</p></div></li>
						<li><img src="photos/c760072d30fa7e68aaaf26403c36f72a.jpeg" alt="соковыжималка сатурн Пылесос Thomas Genius S2 Aquafilter" title="соковыжималка сатурн Пылесос Thomas Genius S2 Aquafilter"><div class="box" page="pylesos-thomas-genius-s-aquafilter-10840r"><span class="title">соковыжималка сатурн Пылесос Thomas Genius S2 Aquafilter</span><p>от <span class="price">10840</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("mikser-russell-hobbs-allure-art-2990r.php", 0, -4); if (file_exists("comments/mikser-russell-hobbs-allure-art-2990r.php")) require_once "comments/mikser-russell-hobbs-allure-art-2990r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="mikser-russell-hobbs-allure-art-2990r.php" method="post" onsubmit="return checkForm(this)">
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