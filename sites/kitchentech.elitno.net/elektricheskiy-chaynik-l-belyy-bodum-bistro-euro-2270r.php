<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("elektricheskiy-chaynik-l-belyy-bodum-bistro-euro-2270r.php","блендер максима");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("elektricheskiy-chaynik-l-belyy-bodum-bistro-euro-2270r.php", $nick, $comment);
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
		<title>блендер максима Электрический чайник 1л белый Bodum BISTRO 11154-913EURO  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="блендер максима, блендер philips hr1615, рецепты для хлебопечки sd 2500, промышленный пылесос цена, блендер в одессе, аэрогриль hotter economy, моющий пылесос для дома, творожник в мультиварке, десерты в блендере, испечь черный хлеб в хлебопечке, мультиварка мэджик пот, кофемашина incanto de luxe, сколько стоит фритюрница, какая мощность у пылесоса,  соковыжималка сатурн">
		<meta name="description" content="блендер максима Незаменимым предметом на любой кухне является, без сомнений,  современный и удоб...">
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
						<a class="photo" href="photos/8944f8fffe785f4fd9884d354ff925ed.jpeg" title="блендер максима Электрический чайник 1л белый Bodum BISTRO 11154-913EURO"><img src="photos/8944f8fffe785f4fd9884d354ff925ed.jpeg" alt="блендер максима Электрический чайник 1л белый Bodum BISTRO 11154-913EURO" title="блендер максима Электрический чайник 1л белый Bodum BISTRO 11154-913EURO -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-braun-mr-cc-4920r.php"><img src="photos/0c50b7e39e50ca19abd7fa5476ddc943.jpeg" alt="блендер philips hr1615 Блендер Braun MR-730 CC" title="блендер philips hr1615 Блендер Braun MR-730 CC"></a><h2>Блендер Braun MR-730 CC</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-maxima-mhb-1190r.php"><img src="photos/84ca91dc781f0bf5092809f8f5c5bf57.jpeg" alt="рецепты для хлебопечки sd 2500 Блендер Maxima MHB-0529" title="рецепты для хлебопечки sd 2500 Блендер Maxima MHB-0529"></a><h2>Блендер Maxima MHB-0529</h2></li>
							<li><a href="http://kitchentech.elitno.net/yogurtnica-moulinex-jc-1650r.php"><img src="photos/5b5325f46d1563794a5b9b1bbec3af49.jpeg" alt="промышленный пылесос цена Йогуртница Moulinex JC1" title="промышленный пылесос цена Йогуртница Moulinex JC1"></a><h2>Йогуртница Moulinex JC1</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>блендер максима Электрический чайник 1л белый Bodum BISTRO 11154-913EURO</h1>
						<div class="tb"><p>Цена: от <span class="price">2270</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_26399.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Незаменимым предметом на любой кухне является, без сомнений,  современный и удобный в использовании электрический чайник. Электрический  чайник BISTRO 11154-913EURO от швейцарской компании Bodum обладает не только отличными  техническими характеристиками, но и привлекательным дизайном. Чайник Bodum BISTRO 11154-913EURO имеет оптимальный объем  (1 литр),  специальный съемный фильтр, индикатор уровня воды, а также функцию  автовыключения при закипании. Внешне данная модель выполнена в элегантном белом  цвете, что позволит ей легко вписаться в интерьер вашей кухни.  </p> <p><strong>Характеристики:</strong></p> <ul type=disc>   <li>Тип:       электрический;</li>   <li>Объем       1 л;</li>   <li>Материал       корпуса: пластик;</li>   <li>Мощность:       2200 Вт;</li>   <li>Нагревательный       элемент: дисковый нагреватель (скрытый);</li>   <li>Автовыключение       при закипании;</li>   <li>Съемный       фильтр;</li>   <li>Индикатор       уровня воды;</li>   <li>Блокировка       включения без воды;</li>   <li>Цвет:       белый.</li> </ul> <p><strong>Производитель: Bodum  (Швейцария)</strong></p> блендер максима</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/64a1e17046b7c97f3413bb1bcacb4f30.jpeg" alt="блендер в одессе Чайник экспресс Binatone EEJ-1555 White" title="блендер в одессе Чайник экспресс Binatone EEJ-1555 White"><div class="box" page="chaynik-ekspress-binatone-eej-white-2600r"><span class="title">блендер в одессе Чайник экспресс Binatone EEJ-1555 White</span><p>от <span class="price">2600</span> руб.</p></div></li>
						<li><img src="photos/31a34f17d596d6c34798e2946dbbde29.jpeg" alt="аэрогриль hotter economy Чайник электрический Vitek VT-1140 красный" title="аэрогриль hotter economy Чайник электрический Vitek VT-1140 красный"><div class="box" page="chaynik-elektricheskiy-vitek-vt-krasnyy-1790r"><span class="title">аэрогриль hotter economy Чайник электрический Vitek VT-1140 красный</span><p>от <span class="price">1790</span> руб.</p></div></li>
						<li><img src="photos/b6d12be4b9eb96a31c69e83c45163c6c.jpeg" alt="моющий пылесос для дома Чайник электрический Atlanta ATH-751" title="моющий пылесос для дома Чайник электрический Atlanta ATH-751"><div class="box" page="chaynik-elektricheskiy-atlanta-ath-1600r"><span class="title">моющий пылесос для дома Чайник электрический Atlanta ATH-751</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li><img src="photos/737a030606bea9ae62642592848f785a.jpeg" alt="творожник в мультиварке Электрический чайник Atlanta АТН-650" title="творожник в мультиварке Электрический чайник Atlanta АТН-650"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-750r-2"><span class="title">творожник в мультиварке Электрический чайник Atlanta АТН-650</span><p>от <span class="price">750</span> руб.</p></div></li>
						<li class="large"><img src="photos/133af075f6993e048350b753f5c2c798.jpeg" alt="десерты в блендере Электрический чайник Atlanta АТН-727" title="десерты в блендере Электрический чайник Atlanta АТН-727"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-400r-2"><span class="title">десерты в блендере Электрический чайник Atlanta АТН-727</span><p>от <span class="price">400</span> руб.</p></div></li>
						<li class="large"><img src="photos/388c2880498e546d8fcebc787f1cf894.jpeg" alt="испечь черный хлеб в хлебопечке Электрический чайник 1л черный Bodum BISTRO 11154-01EURO" title="испечь черный хлеб в хлебопечке Электрический чайник 1л черный Bodum BISTRO 11154-01EURO"><div class="box" page="elektricheskiy-chaynik-l-chernyy-bodum-bistro-euro-2270r"><span class="title">испечь черный хлеб в хлебопечке Электрический чайник 1л черный Bodum BISTRO 11154-01EURO</span><p>от <span class="price">2270</span> руб.</p></div></li>
						<li class="large"><img src="photos/51ac41098d88811e7ab3241e4fa31a8c.jpeg" alt="мультиварка мэджик пот Аккумуляторы GP Batteries Rechargeable 1000 мАч 100AAAHC-UC2 PET-GAAA" title="мультиварка мэджик пот Аккумуляторы GP Batteries Rechargeable 1000 мАч 100AAAHC-UC2 PET-GAAA"><div class="box" page="akkumulyatory-gp-batteries-rechargeable-mach-aaahcuc-petgaaa-300r"><span class="title">мультиварка мэджик пот Аккумуляторы GP Batteries Rechargeable 1000 мАч 100AAAHC-UC2 PET-GAAA</span><p>от <span class="price">300</span> руб.</p></div></li>
						<li><img src="photos/56eef2b8f5929fc5948323a8a5a2e051.jpeg" alt="кофемашина incanto de luxe Зарядное устройство GP Batteries PB25-BС2 + (2х270AAH)" title="кофемашина incanto de luxe Зарядное устройство GP Batteries PB25-BС2 + (2х270AAH)"><div class="box" page="zaryadnoe-ustroystvo-gp-batteries-pbbs-haah-1220r"><span class="title">кофемашина incanto de luxe Зарядное устройство GP Batteries PB25-BС2 + (2х270AAH)</span><p>от <span class="price">1220</span> руб.</p></div></li>
						<li><img src="photos/49901359ef2b43e118be22a24f1caa05.jpeg" alt="сколько стоит фритюрница Minamoto R6 (AA)" title="сколько стоит фритюрница Minamoto R6 (AA)"><div class="box" page="minamoto-r-aa-3r"><span class="title">сколько стоит фритюрница Minamoto R6 (AA)</span><p>от <span class="price">3</span> руб.</p></div></li>
						<li><img src="photos/eb7760a68b0b3e85f39c2160100a5731.jpeg" alt="какая мощность у пылесоса Моющий концентрат Thomas Profloor 1 л (2 шт) 790-008" title="какая мощность у пылесоса Моющий концентрат Thomas Profloor 1 л (2 шт) 790-008"><div class="box" page="moyuschiy-koncentrat-thomas-profloor-l-sht-700r"><span class="title">какая мощность у пылесоса Моющий концентрат Thomas Profloor 1 л (2 шт) 790-008</span><p>от <span class="price">700</span> руб.</p></div></li>
						<li><img src="photos/af4db2e11d74fd9a3df56b0b95fb949a.jpeg" alt="микроволновая печь bork Пылесос моющий Thomas Hygiene T2" title="микроволновая печь bork Пылесос моющий Thomas Hygiene T2"><div class="box" page="pylesos-moyuschiy-thomas-hygiene-t-15900r"><span class="title">микроволновая печь bork Пылесос моющий Thomas Hygiene T2</span><p>от <span class="price">15900</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("elektricheskiy-chaynik-l-belyy-bodum-bistro-euro-2270r.php", 0, -4); if (file_exists("comments/elektricheskiy-chaynik-l-belyy-bodum-bistro-euro-2270r.php")) require_once "comments/elektricheskiy-chaynik-l-belyy-bodum-bistro-euro-2270r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="elektricheskiy-chaynik-l-belyy-bodum-bistro-euro-2270r.php" method="post" onsubmit="return checkForm(this)">
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