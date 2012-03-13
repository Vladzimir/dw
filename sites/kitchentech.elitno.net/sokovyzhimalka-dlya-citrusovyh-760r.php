<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("sokovyzhimalka-dlya-citrusovyh-760r.php","чайник электрический филипс");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("sokovyzhimalka-dlya-citrusovyh-760r.php", $nick, $comment);
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
		<title>чайник электрический филипс Соковыжималка для цитрусовых  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="чайник электрический филипс, турка для кофе купить, аппараты для педикюра с пылесосом, пакеты для пылесоса, маленькие мультиварки, мультиварка redmond 4504, мясорубки в санкт петербурге, микроволновая печь курица, микроволновые печи с духовкой, утюг tefal с парогенератором, хлебопечка ow 5004, кофеварка ровента инструкция, кофеварки домашние, солянка в мультиварке,  мультиварка кенвуд">
		<meta name="description" content="чайник электрический филипс Хотите наслаждаться вкусным натуральным соком, не прилагая  для этого особых уси...">
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
						<a class="photo" href="photos/60dff82992355ef436c4e763a78c1f99.jpeg" title="чайник электрический филипс Соковыжималка для цитрусовых"><img src="photos/60dff82992355ef436c4e763a78c1f99.jpeg" alt="чайник электрический филипс Соковыжималка для цитрусовых" title="чайник электрический филипс Соковыжималка для цитрусовых -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-russell-hobbs-desire-art-2990r.php"><img src="photos/8acd8b43677456777a29a4a8d53c0c0b.jpeg" alt="турка для кофе купить Блендер Russell Hobbs Desire, арт. 18510-56" title="турка для кофе купить Блендер Russell Hobbs Desire, арт. 18510-56"></a><h2>Блендер Russell Hobbs Desire, арт. 18510-56</h2></li>
							<li><a href="http://kitchentech.elitno.net/vspenivatel-melitta-cremio-chernyy-4155r.php"><img src="photos/4e6a1db3aa397f67ece5fe8079d3244b.jpeg" alt="аппараты для педикюра с пылесосом Вспениватель Melitta Cremio черный" title="аппараты для педикюра с пылесосом Вспениватель Melitta Cremio черный"></a><h2>Вспениватель Melitta Cremio черный</h2></li>
							<li><a href="http://kitchentech.elitno.net/myasorubka-braun-g-mn-wh-4980r.php"><img src="photos/2cdb40f493d1b8360833641d1048d5de.jpeg" alt="пакеты для пылесоса Мясорубка Braun G1300 MN WH" title="пакеты для пылесоса Мясорубка Braun G1300 MN WH"></a><h2>Мясорубка Braun G1300 MN WH</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>чайник электрический филипс Соковыжималка для цитрусовых</h1>
						<div class="tb"><p>Цена: от <span class="price">760</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_26306.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Хотите наслаждаться вкусным натуральным соком, не прилагая  для этого особых усилий? Отличное решение для этого – соковыжималка. Соковыжималка  для цитрусовых изготовлена из качественной нержавеющей стали, имеет ручной  привод и удобную конструкцию. Внешне соковыжималка представлена в приятном  серебристом цвете.</p> <p><strong>Характеристики:</strong></p> <ul type=disc>   <li>Для       цитрусовых;</li>   <li>Материал:       нержавеющая сталь;</li>   <li>Ручной       привод;</li>   <li>Цвет:       серебристый.</li> </ul> <p><strong>Производитель: Россия</strong></p> чайник электрический филипс</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/ab8e324f37683fb482e2239bd528b88e.jpeg" alt="маленькие мультиварки Мясорубка Redmond RMG-1203" title="маленькие мультиварки Мясорубка Redmond RMG-1203"><div class="box" page="myasorubka-redmond-rmg-4990r"><span class="title">маленькие мультиварки Мясорубка Redmond RMG-1203</span><p>от <span class="price">4990</span> руб.</p></div></li>
						<li><img src="photos/696c3eff6d4752e21e651f3d4b34c0a7.jpeg" alt="мультиварка redmond 4504 Мясорубка Redmond RMG-1204" title="мультиварка redmond 4504 Мясорубка Redmond RMG-1204"><div class="box" page="myasorubka-redmond-rmg-3290r"><span class="title">мультиварка redmond 4504 Мясорубка Redmond RMG-1204</span><p>от <span class="price">3290</span> руб.</p></div></li>
						<li><img src="photos/54c54bed2f103aac514687168a05cb1f.jpeg" alt="мясорубки в санкт петербурге Тостер Russell Hobbs Cottage Floral, арт. 18513-56" title="мясорубки в санкт петербурге Тостер Russell Hobbs Cottage Floral, арт. 18513-56"><div class="box" page="toster-russell-hobbs-cottage-floral-art-2790r"><span class="title">мясорубки в санкт петербурге Тостер Russell Hobbs Cottage Floral, арт. 18513-56</span><p>от <span class="price">2790</span> руб.</p></div></li>
						<li><img src="photos/512406297c427f82b1d1c5105c28994a.jpeg" alt="микроволновая печь курица Чайник электрический Moulinex BY5001 1,7 л" title="микроволновая печь курица Чайник электрический Moulinex BY5001 1,7 л"><div class="box" page="chaynik-elektricheskiy-moulinex-by-l-2060r"><span class="title">микроволновая печь курица Чайник электрический Moulinex BY5001 1,7 л</span><p>от <span class="price">2060</span> руб.</p></div></li>
						<li class="large"><img src="photos/06055c0461eed094ac9207cd105de4ec.jpeg" alt="микроволновые печи с духовкой Электрический чайник 1.5л белый Bodum Bistro 11138-913EURO" title="микроволновые печи с духовкой Электрический чайник 1.5л белый Bodum Bistro 11138-913EURO"><div class="box" page="elektricheskiy-chaynik-l-belyy-bodum-bistro-euro-2740r"><span class="title">микроволновые печи с духовкой Электрический чайник 1.5л белый Bodum Bistro 11138-913EURO</span><p>от <span class="price">2740</span> руб.</p></div></li>
						<li class="large"><img src="photos/7f879f1e565356e4de3c725635f57ee6.jpeg" alt="утюг tefal с парогенератором Зарядное устройство GP Batteries PB360GS-UE1" title="утюг tefal с парогенератором Зарядное устройство GP Batteries PB360GS-UE1"><div class="box" page="zaryadnoe-ustroystvo-gp-batteries-pbgsue-270r"><span class="title">утюг tefal с парогенератором Зарядное устройство GP Batteries PB360GS-UE1</span><p>от <span class="price">270</span> руб.</p></div></li>
						<li class="large"><img src="photos/7988dddbd843f4e2d125562952a86736.jpeg" alt="хлебопечка ow 5004 Паровая гладильная система TOBI" title="хлебопечка ow 5004 Паровая гладильная система TOBI"><div class="box" page="parovaya-gladilnaya-sistema-tobi-2500r"><span class="title">хлебопечка ow 5004 Паровая гладильная система TOBI</span><p>от <span class="price">2500</span> руб.</p></div></li>
						<li><img src="photos/b30a9264a94da2d2b2a0829021bb7fab.jpeg" alt="кофеварка ровента инструкция Экотестер СоЭкс (2 в 1: дозиметр радиации и нитрат тестер)" title="кофеварка ровента инструкция Экотестер СоЭкс (2 в 1: дозиметр радиации и нитрат тестер)"><div class="box" page="ekotester-soeks-v-dozimetr-radiacii-i-nitrat-tester-8600r"><span class="title">кофеварка ровента инструкция Экотестер СоЭкс (2 в 1: дозиметр радиации и нитрат тестер)</span><p>от <span class="price">8600</span> руб.</p></div></li>
						<li><img src="photos/f08bd4abc7ad4c0cc84da510e6f6c4d3.jpeg" alt="кофеварки домашние Фильтр для пылесоса Vitek VT-1858 (VT-1847) 1 шт." title="кофеварки домашние Фильтр для пылесоса Vitek VT-1858 (VT-1847) 1 шт."><div class="box" page="filtr-dlya-pylesosa-vitek-vt-vt-sht-215r"><span class="title">кофеварки домашние Фильтр для пылесоса Vitek VT-1858 (VT-1847) 1 шт.</span><p>от <span class="price">215</span> руб.</p></div></li>
						<li><img src="photos/39b908a415c11ffadfa5f63c6981b9e7.jpeg" alt="солянка в мультиварке Универсальная минитурбощетка в упаковке Dyson Mini Turbine Head Ir Cl Retail" title="солянка в мультиварке Универсальная минитурбощетка в упаковке Dyson Mini Turbine Head Ir Cl Retail"><div class="box" page="universalnaya-miniturboschetka-v-upakovke-dyson-mini-turbine-head-ir-cl-retail-2290r"><span class="title">солянка в мультиварке Универсальная минитурбощетка в упаковке Dyson Mini Turbine Head Ir Cl Retail</span><p>от <span class="price">2290</span> руб.</p></div></li>
						<li><img src="photos/787fcfe3b6052ac0b67b5602b473ad73.jpeg" alt="мультиварка panasonic магазин Пылесос моющий Thomas Twin T2 Aquafilter" title="мультиварка panasonic магазин Пылесос моющий Thomas Twin T2 Aquafilter"><div class="box" page="pylesos-moyuschiy-thomas-twin-t-aquafilter-18180r"><span class="title">мультиварка panasonic магазин Пылесос моющий Thomas Twin T2 Aquafilter</span><p>от <span class="price">18180</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("sokovyzhimalka-dlya-citrusovyh-760r.php", 0, -4); if (file_exists("comments/sokovyzhimalka-dlya-citrusovyh-760r.php")) require_once "comments/sokovyzhimalka-dlya-citrusovyh-760r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="sokovyzhimalka-dlya-citrusovyh-760r.php" method="post" onsubmit="return checkForm(this)">
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