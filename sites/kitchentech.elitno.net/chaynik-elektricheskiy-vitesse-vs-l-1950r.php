<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("chaynik-elektricheskiy-vitesse-vs-l-1950r.php","вафельница cloer");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("chaynik-elektricheskiy-vitesse-vs-l-1950r.php", $nick, $comment);
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
		<title>вафельница cloer Чайник электрический  Vitesse VS-110 1,7л  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="вафельница cloer, купить мультиварку в москве, язык в аэрогриле, продам мультиварку, кофемашины jura отзывы, рецепты для хлебопечки с сыром, отзывы мультиварка kromax, где купить утюг, аэрогриль форум, блендер philips hr 1617, мультиварка описание, сколько стоит пылесос, daewoo микроволновая печь инструкция, panasonic блендер,  мясорубка moulinex 2051">
		<meta name="description" content="вафельница cloer Красивый и функциональный электрический чайник Vitesse VS-110 подсветкой  легко ...">
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
						<a class="photo" href="photos/b36e4518839f5476ba18891a0416843e.jpeg" title="вафельница cloer Чайник электрический  Vitesse VS-110 1,7л"><img src="photos/b36e4518839f5476ba18891a0416843e.jpeg" alt="вафельница cloer Чайник электрический  Vitesse VS-110 1,7л" title="вафельница cloer Чайник электрический  Vitesse VS-110 1,7л -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-braun-mr-omlette-2340r.php"><img src="photos/668c9122471ae31724b2b2dffa8eafbb.jpeg" alt="купить мультиварку в москве Блендер Braun MR-320 Omlette" title="купить мультиварку в москве Блендер Braun MR-320 Omlette"></a><h2>Блендер Braun MR-320 Omlette</h2></li>
							<li><a href="http://kitchentech.elitno.net/espressokofemashina-melitta-caffeo-solo-pure-white-28530r.php"><img src="photos/eb4618ce7491ec77cbaa3b4b7dd675cb.jpeg" alt="язык в аэрогриле Эспрессо-кофемашина Melitta Caffeo Solo Pure White (4.0009.91)" title="язык в аэрогриле Эспрессо-кофемашина Melitta Caffeo Solo Pure White (4.0009.91)"></a><h2>Эспрессо-кофемашина Melitta Caffeo Solo Pure White (4.0009.91)</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikser-atlanta-ath-530r.php"><img src="photos/35ee696c1c92edfebad75db4602c2861.jpeg" alt="продам мультиварку Миксер Atlanta ATH-283" title="продам мультиварку Миксер Atlanta ATH-283"></a><h2>Миксер Atlanta ATH-283</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>вафельница cloer Чайник электрический  Vitesse VS-110 1,7л</h1>
						<div class="tb"><p>Цена: от <span class="price">1950</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19607.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Красивый и функциональный электрический чайник Vitesse VS-110 подсветкой  легко вскипятит 1,7 литра воды за пару минут, а специальный фильтр защитит от  накипи. Дополнительными плюсами являются автоматическая блокировка включения  без воды и удобное хранение шнура.<br></p><p><strong>Характеристики:</strong></p><ul type=\disc\><li>Объем: 1.7 л;</li><li>Мощность:  2000 Вт;</li><li>Тип  нагревательного элемента: закрытая спираль (центральный контакт);</li><li>Материал корпуса: металл;</li><li>Блокировка включения без воды;</li><li>Фильтр;</li><li>Индикатор уровня воды;</li><li>Подсветка воды при работе;</li><li>Отсек для шнура.</li></ul><p><strong>Производитель: КНР</strong><br><strong>Гарантия: 1 год</strong></p> вафельница cloer</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/09b400ad2ab5ec6d74c116d61dc967fc.jpeg" alt="кофемашины jura отзывы Миксер Russell Hobbs Allure, арт. 18275-56" title="кофемашины jura отзывы Миксер Russell Hobbs Allure, арт. 18275-56"><div class="box"><a href="http://kitchentech.elitno.net/mikser-russell-hobbs-allure-art-2990r.php"><h3 class="title">кофемашины jura отзывы Миксер Russell Hobbs Allure, арт. 18275-56</h3><p>от <span class="price">2990</span> руб.</p></a></div></li>
						<li><img src="photos/f522dce957deccc1ec8ad4658577e80b.jpeg" alt="рецепты для хлебопечки с сыром Мультиварка Moulinex MK700330" title="рецепты для хлебопечки с сыром Мультиварка Moulinex MK700330"><div class="box" page="multivarka-moulinex-mk-4170r"><span class="title">рецепты для хлебопечки с сыром Мультиварка Moulinex MK700330</span><p>от <span class="price">4170</span> руб.</p></div></li>
						<li><img src="photos/6fe5b4190ebaf728c4d5f2d1788f453b.jpeg" alt="отзывы мультиварка kromax Мясорубка электрическая Vitek VT-1670" title="отзывы мультиварка kromax Мясорубка электрическая Vitek VT-1670"><div class="box" page="myasorubka-elektricheskaya-vitek-vt-2950r"><span class="title">отзывы мультиварка kromax Мясорубка электрическая Vitek VT-1670</span><p>от <span class="price">2950</span> руб.</p></div></li>
						<li><img src="photos/96e6df28f6faf8e98beab83007c46a57.jpeg" alt="где купить утюг Мясорубка электрическая Vitek VT-1673" title="где купить утюг Мясорубка электрическая Vitek VT-1673"><div class="box" page="myasorubka-elektricheskaya-vitek-vt-3000r"><span class="title">где купить утюг Мясорубка электрическая Vitek VT-1673</span><p>от <span class="price">3000</span> руб.</p></div></li>
						<li class="large"><img src="photos/8c0aa6f2022172974ae917a715c05f94.jpeg" alt="аэрогриль форум Пароварка Vitek VT-1550N SR" title="аэрогриль форум Пароварка Vitek VT-1550N SR"><div class="box" page="parovarka-vitek-vtn-sr-2200r"><span class="title">аэрогриль форум Пароварка Vitek VT-1550N SR</span><p>от <span class="price">2200</span> руб.</p></div></li>
						<li class="large"><img src="photos/c4c3375bd5e900bb92cb2c5b9021e247.jpeg" alt="блендер philips hr 1617 Термопот  Redmond RTP-M801" title="блендер philips hr 1617 Термопот  Redmond RTP-M801"><div class="box" page="termopot-redmond-rtpm-3290r"><span class="title">блендер philips hr 1617 Термопот  Redmond RTP-M801</span><p>от <span class="price">3290</span> руб.</p></div></li>
						<li class="large"><img src="photos/01e798cd02e35629810cab1b511976bc.jpeg" alt="мультиварка описание Чайник электрический Tefal Reminisce KI201540 1,7 л" title="мультиварка описание Чайник электрический Tefal Reminisce KI201540 1,7 л"><div class="box" page="chaynik-elektricheskiy-tefal-reminisce-ki-l-2370r"><span class="title">мультиварка описание Чайник электрический Tefal Reminisce KI201540 1,7 л</span><p>от <span class="price">2370</span> руб.</p></div></li>
						<li><img src="photos/463a93164abee7f214102b8fe77a244c.jpeg" alt="сколько стоит пылесос Чайник электрический Atlanta ATH-690" title="сколько стоит пылесос Чайник электрический Atlanta ATH-690"><div class="box" page="chaynik-elektricheskiy-atlanta-ath-1280r"><span class="title">сколько стоит пылесос Чайник электрический Atlanta ATH-690</span><p>от <span class="price">1280</span> руб.</p></div></li>
						<li><img src="photos/0acc9f01a71196d6ab7726b81327e74c.jpeg" alt="daewoo микроволновая печь инструкция Электрический чайник Atlanta АТН-717" title="daewoo микроволновая печь инструкция Электрический чайник Atlanta АТН-717"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-390r"><span class="title">daewoo микроволновая печь инструкция Электрический чайник Atlanta АТН-717</span><p>от <span class="price">390</span> руб.</p></div></li>
						<li><img src="photos/a72d69a17b01ae0c39e3992b04fd72d5.jpeg" alt="panasonic блендер Сопло для пенной чистки Karcher (упаковка 0,6 л)" title="panasonic блендер Сопло для пенной чистки Karcher (упаковка 0,6 л)"><div class="box" page="soplo-dlya-pennoy-chistki-karcher-upakovka-l-750r"><span class="title">panasonic блендер Сопло для пенной чистки Karcher (упаковка 0,6 л)</span><p>от <span class="price">750</span> руб.</p></div></li>
						<li><img src="photos/ed6cccd8ae597a978fe91c415f9d06d3.jpeg" alt="магазин запчастей для мясорубок Фильтры для пылесоса Vitek VT-1855 (VT-1825)" title="магазин запчастей для мясорубок Фильтры для пылесоса Vitek VT-1855 (VT-1825)"><div class="box" page="filtry-dlya-pylesosa-vitek-vt-vt-135r"><span class="title">магазин запчастей для мясорубок Фильтры для пылесоса Vitek VT-1855 (VT-1825)</span><p>от <span class="price">135</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("chaynik-elektricheskiy-vitesse-vs-l-1950r.php", 0, -4); if (file_exists("comments/chaynik-elektricheskiy-vitesse-vs-l-1950r.php")) require_once "comments/chaynik-elektricheskiy-vitesse-vs-l-1950r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="chaynik-elektricheskiy-vitesse-vs-l-1950r.php" method="post" onsubmit="return checkForm(this)">
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