<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("chaynik-elektricheskiy-vitek-vt-1030r.php","пирог в пароварке");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("chaynik-elektricheskiy-vitek-vt-1030r.php", $nick, $comment);
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
		<title>пирог в пароварке Чайник электрический Vitek VT-1114  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="пирог в пароварке, хлебопечка цены moulinex, рецепты для хлебопечки кенвуд, картофель во фритюрнице, купить кофеварку krups, мультиварка в новосибирске, пылесос lg с контейнером, приготовление теста в хлебопечке, что можно сделать из пылесоса, нож для мясорубки kenwood, кофемашина incanto de luxe, продажа мультиварок, кофеварка vitek 1513, утюг braun texstyle control,  утюг с парогенератором купить">
		<meta name="description" content="пирог в пароварке Чайник электрический Vitek VT-1114 на дисковой подставке со скрытым нагревательн...">
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
						<a class="photo" href="photos/47745aa09108a6bfabc67b839ea476bd.jpeg" title="пирог в пароварке Чайник электрический Vitek VT-1114"><img src="photos/47745aa09108a6bfabc67b839ea476bd.jpeg" alt="пирог в пароварке Чайник электрический Vitek VT-1114" title="пирог в пароварке Чайник электрический Vitek VT-1114 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/filtry-bumazhnye-h-sht-melitta-natura-155r.php"><img src="photos/8d1e6a9f68c28d6a1278058dcc2842f9.jpeg" alt="хлебопечка цены moulinex Фильтры бумажные 1х4 80 шт. Melitta Natura" title="хлебопечка цены moulinex Фильтры бумажные 1х4 80 шт. Melitta Natura"></a><h2>Фильтры бумажные 1х4 80 шт. Melitta Natura</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-braun-mr-spaghetti-2450r.php"><img src="photos/ae05bc52a7dd4b3b98e890b98083a84b.jpeg" alt="рецепты для хлебопечки кенвуд Блендер Braun MR-320 Spaghetti" title="рецепты для хлебопечки кенвуд Блендер Braun MR-320 Spaghetti"></a><h2>Блендер Braun MR-320 Spaghetti</h2></li>
							<li><a href="http://kitchentech.elitno.net/kofevarka-ath-560r.php"><img src="photos/d1b139f63086ad817c04622c294f1224.jpeg" alt="картофель во фритюрнице Кофеварка  ATH-278" title="картофель во фритюрнице Кофеварка  ATH-278"></a><h2>Кофеварка  ATH-278</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>пирог в пароварке Чайник электрический Vitek VT-1114</h1>
						<div class="tb"><p>Цена: от <span class="price">1030</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_8388.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Чайник электрический V</b><b>itek</b><b> VT-1114 </b>на дисковой подставке со скрытым нагревательным элементом, станет незаменимым помощником на вашей кухне. Модель выполнена в стильном пластиковом корпусе с индикатором уровня воды и обладает всем необходимым функционалом современных устройств, таким как: наличие съемного фильтра от накипи, система автооключения при закипании и защита от перегрева.</p><p><b>Технические характеристики:</b></p><p><b></b></p><ul><li>Мощность: 1850-2200Вт </li><li>Нагревательный элемент: Скрытый </li><li>Поворачивающийся корпус: 360° </li><li>Объем: 1,7л </li><li>Материал корпуса: пластик </li><li>Фильтр: съемный фильтр от накипи </li><li>Индикатор уровня воды: есть </li><li>Автоотключение при закипании воды: есть </li><li>Защита от перегрева: есть </li><li>Внутренняя подсветка шкалы уровня воды </li><li>Место для хранения шнура: есть</li></ul><p><b>Производитель:</b> Vitek.</p><p><b>Страна: </b>Россия.</p> пирог в пароварке</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/50077cb721bf68554cfd92d5a37bd83d.jpeg" alt="купить кофеварку krups Микроволновая печь Vitek VT-1686" title="купить кофеварку krups Микроволновая печь Vitek VT-1686"><div class="box" page="mikrovolnovaya-pech-vitek-vt-3250r"><span class="title">купить кофеварку krups Микроволновая печь Vitek VT-1686</span><p>от <span class="price">3250</span> руб.</p></div></li>
						<li><img src="photos/5a5674539caee9c3fc9dbe29847298d4.jpeg" alt="мультиварка в новосибирске Мясорубка электрическая Vitek VT-1671 белая" title="мультиварка в новосибирске Мясорубка электрическая Vitek VT-1671 белая"><div class="box" page="myasorubka-elektricheskaya-vitek-vt-belaya-3300r"><span class="title">мультиварка в новосибирске Мясорубка электрическая Vitek VT-1671 белая</span><p>от <span class="price">3300</span> руб.</p></div></li>
						<li><img src="photos/d78a5eb7926a57e3a6daeb54a8fc1659.jpeg" alt="пылесос lg с контейнером Соковыжималка Moulinex JU599A3E Juice Machine" title="пылесос lg с контейнером Соковыжималка Moulinex JU599A3E Juice Machine"><div class="box" page="sokovyzhimalka-moulinex-juae-juice-machine-4300r"><span class="title">пылесос lg с контейнером Соковыжималка Moulinex JU599A3E Juice Machine</span><p>от <span class="price">4300</span> руб.</p></div></li>
						<li><img src="photos/d22138cc84c807c5e3a9b5e6c25af3e9.jpeg" alt="приготовление теста в хлебопечке Сэндвич-тостер Redmond RSM-M1402" title="приготовление теста в хлебопечке Сэндвич-тостер Redmond RSM-M1402"><div class="box" page="sendvichtoster-redmond-rsmm-1090r"><span class="title">приготовление теста в хлебопечке Сэндвич-тостер Redmond RSM-M1402</span><p>от <span class="price">1090</span> руб.</p></div></li>
						<li class="large"><img src="photos/537c78beb6320fe2c86004c22681bdc6.jpeg" alt="что можно сделать из пылесоса Чайник электрический Maxima MК- M221 (1,5л)" title="что можно сделать из пылесоса Чайник электрический Maxima MК- M221 (1,5л)"><div class="box" page="chaynik-elektricheskiy-maxima-mk-m-l-760r"><span class="title">что можно сделать из пылесоса Чайник электрический Maxima MК- M221 (1,5л)</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li class="large"><img src="photos/4aa517f040bb8f7cdf25d41fea297b7f.jpeg" alt="нож для мясорубки kenwood Электрический чайник Atlanta АТН-781" title="нож для мясорубки kenwood Электрический чайник Atlanta АТН-781"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-1000r"><span class="title">нож для мясорубки kenwood Электрический чайник Atlanta АТН-781</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li class="large"><img src="photos/56eef2b8f5929fc5948323a8a5a2e051.jpeg" alt="кофемашина incanto de luxe Зарядное устройство GP Batteries PB25-BС2 + (2х270AAH)" title="кофемашина incanto de luxe Зарядное устройство GP Batteries PB25-BС2 + (2х270AAH)"><div class="box" page="zaryadnoe-ustroystvo-gp-batteries-pbbs-haah-1220r"><span class="title">кофемашина incanto de luxe Зарядное устройство GP Batteries PB25-BС2 + (2х270AAH)</span><p>от <span class="price">1220</span> руб.</p></div></li>
						<li><img src="photos/08f854ed7155a317d7f9ee53182183f6.jpeg" alt="продажа мультиварок Парогенератор Lelit PS21" title="продажа мультиварок Парогенератор Lelit PS21"><div class="box" page="parogenerator-lelit-ps-12650r-2"><span class="title">продажа мультиварок Парогенератор Lelit PS21</span><p>от <span class="price">12650</span> руб.</p></div></li>
						<li><img src="photos/565e52ebc108aee0062c9aab0f314cab.jpeg" alt="кофеварка vitek 1513 Парогенератор Lelit PG024N" title="кофеварка vitek 1513 Парогенератор Lelit PG024N"><div class="box" page="parogenerator-lelit-pgn-16700r"><span class="title">кофеварка vitek 1513 Парогенератор Lelit PG024N</span><p>от <span class="price">16700</span> руб.</p></div></li>
						<li><img src="photos/a9173acd4bbfab2975fc7d7fd7dd2bd2.jpeg" alt="утюг braun texstyle control Пылесос моющий Thomas Twin T1 Aquafilter" title="утюг braun texstyle control Пылесос моющий Thomas Twin T1 Aquafilter"><div class="box" page="pylesos-moyuschiy-thomas-twin-t-aquafilter-13080r"><span class="title">утюг braun texstyle control Пылесос моющий Thomas Twin T1 Aquafilter</span><p>от <span class="price">13080</span> руб.</p></div></li>
						<li><img src="photos/2bd3efe5f6abbadb315d0281a9a3d70f.jpeg" alt="куриные грудки в аэрогриле Пылесос Vitek VT-1810" title="куриные грудки в аэрогриле Пылесос Vitek VT-1810"><div class="box" page="pylesos-vitek-vt-2150r"><span class="title">куриные грудки в аэрогриле Пылесос Vitek VT-1810</span><p>от <span class="price">2150</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("chaynik-elektricheskiy-vitek-vt-1030r.php", 0, -4); if (file_exists("comments/chaynik-elektricheskiy-vitek-vt-1030r.php")) require_once "comments/chaynik-elektricheskiy-vitek-vt-1030r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="chaynik-elektricheskiy-vitek-vt-1030r.php" method="post" onsubmit="return checkForm(this)">
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