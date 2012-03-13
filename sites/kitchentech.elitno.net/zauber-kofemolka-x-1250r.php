<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("zauber-kofemolka-x-1250r.php","мясорубка бош 1550");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("zauber-kofemolka-x-1250r.php", $nick, $comment);
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
		<title>мясорубка бош 1550 Zauber Кофемолка  X-480  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="мясорубка бош 1550, как пользоваться вафельницей, курица во фритюрнице, кофемашины jura отзывы, блендер металлический, мясорубка белвар отзывы, кофемашины оптом, термопот toshiba, рецепты для мультиварки cuckoo, бытовой утюг, купить капельную кофеварку, работа парогенератора, пылесос bosch 82425, пылесос компрессор отзывы,  хлебопечка клатроник">
		<meta name="description" content="мясорубка бош 1550 Классическая кофемолка X-480, от шведской компании Zauber, работающая на основе ...">
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
						<a class="photo" href="photos/13e215c432e654a40129e4a1cdc305f1.jpeg" title="мясорубка бош 1550 Zauber Кофемолка  X-480"><img src="photos/13e215c432e654a40129e4a1cdc305f1.jpeg" alt="мясорубка бош 1550 Zauber Кофемолка  X-480" title="мясорубка бош 1550 Zauber Кофемолка  X-480 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-vitek-vt-serebryanyy-2400r.php"><img src="photos/2caf3fc3f7ad4efe2ed9f3361ac8a098.jpeg" alt="как пользоваться вафельницей Блендер Vitek VT-1465 серебряный" title="как пользоваться вафельницей Блендер Vitek VT-1465 серебряный"></a><h2>Блендер Vitek VT-1465 серебряный</h2></li>
							<li><a href="http://kitchentech.elitno.net/kuhonnyy-kombayn-vitek-vt-2750r.php"><img src="photos/d3bcfc3d08cc302406de89eb814d0d80.jpeg" alt="курица во фритюрнице Кухонный комбайн Vitek VT-1622" title="курица во фритюрнице Кухонный комбайн Vitek VT-1622"></a><h2>Кухонный комбайн Vitek VT-1622</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikser-russell-hobbs-allure-art-2990r.php"><img src="photos/09b400ad2ab5ec6d74c116d61dc967fc.jpeg" alt="кофемашины jura отзывы Миксер Russell Hobbs Allure, арт. 18275-56" title="кофемашины jura отзывы Миксер Russell Hobbs Allure, арт. 18275-56"></a><h2>Миксер Russell Hobbs Allure, арт. 18275-56</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>мясорубка бош 1550 Zauber Кофемолка  X-480</h1>
						<div class="tb"><p>Цена: от <span class="price">1250</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_17424.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Классическая кофемолка X-480, от шведской компании Zauber, работающая на основе ротационного ножа. Обладает высокой скоростью помола и повышенной шумоизоляцией. Шнур электропитания удобно регулируется, а герметичная крышка сохраняет запах кофе. Поверхности соприкосновения с пищей выполнены из пищевой гигиенической стали Food-Friend</p><p><b>Технические характеристики:</b></p><ul type=disc><li>Потребляемая мощность: 150 Ватт <li>Система помола: ротационный нож <li>Вместимость: 40 г <li>Регулировка степени помола: нет <li>Приспособление для намотки шнура: есть <li>Особенности: Повышенная шумоизоляция, пищевая гигиеническая сталь Food-Friend <li>Гарантия: 25 мес. </li></ul><p><b>Производитель: Швеция</b></p> мясорубка бош 1550</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/f2d6d870289f867bca2e3ea0f8531c8e.jpeg" alt="блендер металлический Электрический чайник  Zauber Z-350" title="блендер металлический Электрический чайник  Zauber Z-350"><div class="box" page="elektricheskiy-chaynik-zauber-z-1600r"><span class="title">блендер металлический Электрический чайник  Zauber Z-350</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li><img src="photos/10b8ffb3398d2d300d11c2e37221e09e.jpeg" alt="мясорубка белвар отзывы Чайник электрический Maxima МК-G114" title="мясорубка белвар отзывы Чайник электрический Maxima МК-G114"><div class="box" page="chaynik-elektricheskiy-maxima-mkg-990r"><span class="title">мясорубка белвар отзывы Чайник электрический Maxima МК-G114</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li><img src="photos/78965fa03e391297ff5141e1ed5d2961.jpeg" alt="кофемашины оптом Электрический чайник Atlanta АТН-721" title="кофемашины оптом Электрический чайник Atlanta АТН-721"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-400r"><span class="title">кофемашины оптом Электрический чайник Atlanta АТН-721</span><p>от <span class="price">400</span> руб.</p></div></li>
						<li><img src="photos/403a4b4ef798c09cf151962161efdcea.jpeg" alt="термопот toshiba Электрический чайник металлический ATLANTA ATH-784, зеленый" title="термопот toshiba Электрический чайник металлический ATLANTA ATH-784, зеленый"><div class="box" page="elektricheskiy-chaynik-metallicheskiy-atlanta-ath-zelenyy-880r"><span class="title">термопот toshiba Электрический чайник металлический ATLANTA ATH-784, зеленый</span><p>от <span class="price">880</span> руб.</p></div></li>
						<li class="large"><img src="photos/5b880c439b70bdcfe7580a48a2aa9fb4.jpeg" alt="рецепты для мультиварки cuckoo Melitta Enjoy Aqua Чайник" title="рецепты для мультиварки cuckoo Melitta Enjoy Aqua Чайник"><div class="box" page="melitta-enjoy-aqua-chaynik-0r"><span class="title">рецепты для мультиварки cuckoo Melitta Enjoy Aqua Чайник</span><p>от <span class="price">0</span> руб.</p></div></li>
						<li class="large"><img src="photos/100a2bcb8188ff9463a9e3368c849858.jpeg" alt="бытовой утюг Набор для уборки в автомобиле Dyson Car Cleaning Kit" title="бытовой утюг Набор для уборки в автомобиле Dyson Car Cleaning Kit"><div class="box" page="nabor-dlya-uborki-v-avtomobile-dyson-car-cleaning-kit-2790r"><span class="title">бытовой утюг Набор для уборки в автомобиле Dyson Car Cleaning Kit</span><p>от <span class="price">2790</span> руб.</p></div></li>
						<li class="large"><img src="photos/f7d34d9031a1da8552cb5d880691212c.jpeg" alt="купить капельную кофеварку Пылесос Redmond RV-312" title="купить капельную кофеварку Пылесос Redmond RV-312"><div class="box" page="pylesos-redmond-rv-8990r"><span class="title">купить капельную кофеварку Пылесос Redmond RV-312</span><p>от <span class="price">8990</span> руб.</p></div></li>
						<li><img src="photos/1075d3353fd91819c5405594beb1237b.jpeg" alt="работа парогенератора Пылесос Dyson motorhead DC 23" title="работа парогенератора Пылесос Dyson motorhead DC 23"><div class="box" page="pylesos-dyson-motorhead-dc-36990r"><span class="title">работа парогенератора Пылесос Dyson motorhead DC 23</span><p>от <span class="price">36990</span> руб.</p></div></li>
						<li><img src="photos/53cb90a2ebb4ca3e913558aa9650be1d.jpeg" alt="пылесос bosch 82425 Пылесос Thomas Inox 1520 Plus" title="пылесос bosch 82425 Пылесос Thomas Inox 1520 Plus"><div class="box" page="pylesos-thomas-inox-plus-4730r"><span class="title">пылесос bosch 82425 Пылесос Thomas Inox 1520 Plus</span><p>от <span class="price">4730</span> руб.</p></div></li>
						<li><img src="photos/28ebbb0322a7eac61313d0d41391d394.jpeg" alt="пылесос компрессор отзывы Пылесос с аквафильтром Vitek VT-1832 синий" title="пылесос компрессор отзывы Пылесос с аквафильтром Vitek VT-1832 синий"><div class="box" page="pylesos-s-akvafiltrom-vitek-vt-siniy-6900r"><span class="title">пылесос компрессор отзывы Пылесос с аквафильтром Vitek VT-1832 синий</span><p>от <span class="price">6900</span> руб.</p></div></li>
						<li><img src="photos/b5afd7c51355e06ff913b79a852afc55.jpeg" alt="пылесос с электрощеткой Утюг Binatone SI-4040 Blue" title="пылесос с электрощеткой Утюг Binatone SI-4040 Blue"><div class="box" page="utyug-binatone-si-blue-1600r"><span class="title">пылесос с электрощеткой Утюг Binatone SI-4040 Blue</span><p>от <span class="price">1600</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("zauber-kofemolka-x-1250r.php", 0, -4); if (file_exists("comments/zauber-kofemolka-x-1250r.php")) require_once "comments/zauber-kofemolka-x-1250r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="zauber-kofemolka-x-1250r.php" method="post" onsubmit="return checkForm(this)">
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