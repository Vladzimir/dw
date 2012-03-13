<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("infrakrasnyy-teploventilyator-neoclima-hh-1300r.php","тепловентиляторы тепломаш");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("infrakrasnyy-teploventilyator-neoclima-hh-1300r.php", $nick, $comment);
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
		<title>тепловентиляторы тепломаш Инфракрасный тепловентилятор Neoclima HH07  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="тепловентиляторы тепломаш, центральные кондиционеры wolf, проточный водонагреватель атмор, контроль скорости вентиляторов, кондиционер для стирки, тепловентилятор пушка, инструкция дизельная тепловая пушка, режим обогрева кондиционер, потребление кондиционера, обогреватели ветерок, отзывы о кондиционерах, маркировка вентиляторов, электросхема тепловентилятора, вентилятор радиальный цена,  питание вентиляторов компьютера">
		<meta name="description" content="тепловентиляторы тепломаш Инфракрасный тепловентилятор Neoclima HH07 имеет современный изящный дизайн, кот...">
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
						<a class="photo" href="photos/b382763055f961e6e914865557944b55.jpeg" title="тепловентиляторы тепломаш Инфракрасный тепловентилятор Neoclima HH07"><img src="photos/b382763055f961e6e914865557944b55.jpeg" alt="тепловентиляторы тепломаш Инфракрасный тепловентилятор Neoclima HH07" title="тепловентиляторы тепломаш Инфракрасный тепловентилятор Neoclima HH07 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/neoclima-nozhki-na-kolesikah-240r.php"><img src="photos/0b364f87831da5b1b0340083d6502d32.jpeg" alt="центральные кондиционеры wolf NEOCLIMA ножки на колесиках" title="центральные кондиционеры wolf NEOCLIMA ножки на колесиках"></a><h2>NEOCLIMA ножки на колесиках</h2></li>
							<li><a href="http://klimattech.elitno.net/konvektor-timberk-tecps-m-3050r.php"><img src="photos/cdcaff9b41da40fa5a745416f7f2c71e.jpeg" alt="проточный водонагреватель атмор Конвектор Timberk TEC.PS2 M 2000" title="проточный водонагреватель атмор Конвектор Timberk TEC.PS2 M 2000"></a><h2>Конвектор Timberk TEC.PS2 M 2000</h2></li>
							<li><a href="http://klimattech.elitno.net/timberk-tms-wfs-para-nozhek-dlya-konvektorov-220r.php"><img src="photos/2480d6ec249e444ae527505f26bb1915.jpeg" alt="контроль скорости вентиляторов Timberk TMS 06.WFS Пара ножек для конвекторов" title="контроль скорости вентиляторов Timberk TMS 06.WFS Пара ножек для конвекторов"></a><h2>Timberk TMS 06.WFS Пара ножек для конвекторов</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>тепловентиляторы тепломаш Инфракрасный тепловентилятор Neoclima HH07</h1>
						<div class="tb"><p>Цена: от <span class="price">1300</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_16477.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Инфракрасный тепловентилятор </b><b>Neoclima HH07</b> имеет современный изящный дизайн, который гармонично впишется в любой интерьер. У прибора три степени мощности, галогеновый нагревательный элемент, надежная защита от перегрева и опрокидывания, которая поможет избежать пожароопасных ситуаций. К прибору прилагается пульт дистанционного управления. </p><p><b>Технические характеристики</b>:</p><ul type=\disc\><li>управление: электронное </li><li>тип нагревательного элемента: галоген </li><li>мощность: 0.4/0.8/1.2 кВт </li><li>пульт ДУ </li><li>изящный дизайн </li><li>защита от перегрева и опрокидывания </li><li>функция вращения </li><li>три степени мощности</li></ul><p><b>Гарантия</b>: 1 год</p><p><b>Производитель</b>: Neoclima</p><p><b>Страна</b>: Китай</p> тепловентиляторы тепломаш</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/df83a32478b53e9d4c8710306a81f907.jpeg" alt="кондиционер для стирки Кондиционер сплит-система Timberk AC TIM 07H S1" title="кондиционер для стирки Кондиционер сплит-система Timberk AC TIM 07H S1"><div class="box" page="kondicioner-splitsistema-timberk-ac-tim-h-s-12460r"><span class="title">кондиционер для стирки Кондиционер сплит-система Timberk AC TIM 07H S1</span><p>от <span class="price">12460</span> руб.</p></div></li>
						<li><img src="photos/dc9cdb3ca26e6d0a713ef0ea01e0f300.jpeg" alt="тепловентилятор пушка Метеостанция Meteolight 877" title="тепловентилятор пушка Метеостанция Meteolight 877"><div class="box" page="meteostanciya-meteolight-6530r"><span class="title">тепловентилятор пушка Метеостанция Meteolight 877</span><p>от <span class="price">6530</span> руб.</p></div></li>
						<li><img src="photos/f634f9440cee6909c6f8e41c5623b071.jpeg" alt="инструкция дизельная тепловая пушка Проекционная погодная станция RST 32711" title="инструкция дизельная тепловая пушка Проекционная погодная станция RST 32711"><div class="box" page="proekcionnaya-pogodnaya-stanciya-rst-2240r"><span class="title">инструкция дизельная тепловая пушка Проекционная погодная станция RST 32711</span><p>от <span class="price">2240</span> руб.</p></div></li>
						<li><img src="photos/0fada83330f8f908ee7f1c8b4ca94373.jpeg" alt="режим обогрева кондиционер Комплект фильтров для очистителя воздуха Атмос-Вент-1103" title="режим обогрева кондиционер Комплект фильтров для очистителя воздуха Атмос-Вент-1103"><div class="box" page="komplekt-filtrov-dlya-ochistitelya-vozduha-atmosvent-360r"><span class="title">режим обогрева кондиционер Комплект фильтров для очистителя воздуха Атмос-Вент-1103</span><p>от <span class="price">360</span> руб.</p></div></li>
						<li class="large"><img src="photos/3e107257dc07d447862012397052efed.jpeg" alt="потребление кондиционера Комплект фильтров для очистителя воздуха Атмос-Макси-200" title="потребление кондиционера Комплект фильтров для очистителя воздуха Атмос-Макси-200"><div class="box" page="komplekt-filtrov-dlya-ochistitelya-vozduha-atmosmaksi-1650r"><span class="title">потребление кондиционера Комплект фильтров для очистителя воздуха Атмос-Макси-200</span><p>от <span class="price">1650</span> руб.</p></div></li>
						<li class="large"><img src="photos/70ff9e86256306e32dffb6a5f1466008.jpeg" alt="обогреватели ветерок Очиститель-увлажнитель воздуха Атмос Аква-800" title="обогреватели ветерок Очиститель-увлажнитель воздуха Атмос Аква-800"><div class="box" page="ochistiteluvlazhnitel-vozduha-atmos-akva-1950r"><span class="title">обогреватели ветерок Очиститель-увлажнитель воздуха Атмос Аква-800</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li class="large"><img src="photos/2415c05e4acf4aa843d9dc13c0afc174.jpeg" alt="отзывы о кондиционерах Очиститель воздуха Атмос Вент 1003" title="отзывы о кондиционерах Очиститель воздуха Атмос Вент 1003"><div class="box" page="ochistitel-vozduha-atmos-vent-4590r"><span class="title">отзывы о кондиционерах Очиститель воздуха Атмос Вент 1003</span><p>от <span class="price">4590</span> руб.</p></div></li>
						<li><img src="photos/f7b651727c936b973e40b0fd646bb983.jpeg" alt="маркировка вентиляторов Воздухоочиститель Redmond RAC-3703" title="маркировка вентиляторов Воздухоочиститель Redmond RAC-3703"><div class="box" page="vozduhoochistitel-redmond-rac-8990r"><span class="title">маркировка вентиляторов Воздухоочиститель Redmond RAC-3703</span><p>от <span class="price">8990</span> руб.</p></div></li>
						<li><img src="photos/9f4b604d4597cda63c396ad6fe9ea881.jpeg" alt="электросхема тепловентилятора Ультразвуковой увлажнитель воздуха Neoclima NHL-712M (Механика)" title="электросхема тепловентилятора Ультразвуковой увлажнитель воздуха Neoclima NHL-712M (Механика)"><div class="box" page="ultrazvukovoy-uvlazhnitel-vozduha-neoclima-nhlm-mehanika-3700r"><span class="title">электросхема тепловентилятора Ультразвуковой увлажнитель воздуха Neoclima NHL-712M (Механика)</span><p>от <span class="price">3700</span> руб.</p></div></li>
						<li><img src="photos/b117424fdb1286034c7adae3701e4ea7.jpeg" alt="вентилятор радиальный цена Увлажнитель ZENET JSS-13301A" title="вентилятор радиальный цена Увлажнитель ZENET JSS-13301A"><div class="box" page="uvlazhnitel-zenet-jssa-2280r"><span class="title">вентилятор радиальный цена Увлажнитель ZENET JSS-13301A</span><p>от <span class="price">2280</span> руб.</p></div></li>
						<li><img src="photos/a375443dbb5aa0b728946d58d3993ab9.jpeg" alt="кондиционер орехово зуево Timberk TMS 07.HD1 Увлажнитель воздуха и полотенцесушитель" title="кондиционер орехово зуево Timberk TMS 07.HD1 Увлажнитель воздуха и полотенцесушитель"><div class="box" page="timberk-tms-hd-uvlazhnitel-vozduha-i-polotencesushitel-220r"><span class="title">кондиционер орехово зуево Timberk TMS 07.HD1 Увлажнитель воздуха и полотенцесушитель</span><p>от <span class="price">220</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("infrakrasnyy-teploventilyator-neoclima-hh-1300r.php", 0, -4); if (file_exists("comments/infrakrasnyy-teploventilyator-neoclima-hh-1300r.php")) require_once "comments/infrakrasnyy-teploventilyator-neoclima-hh-1300r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="infrakrasnyy-teploventilyator-neoclima-hh-1300r.php" method="post" onsubmit="return checkForm(this)">
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