<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("myasorubka-atlanta-ath-2150r.php","кухонный комбайн видео");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("myasorubka-atlanta-ath-2150r.php", $nick, $comment);
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
		<title>кухонный комбайн видео Мясорубка  Atlanta ATH-373  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="кухонный комбайн видео, микроволновые печи gorenje, binatone хлебопечка отзывы, приготовление теста в хлебопечке, рецепт пиццы в хлебопечке, где купить пароварку, хлебопечка мулинекс 3101, вафельница орешек 4, блендер металлический, мультиварка супра инструкция, кофеварка в киеве, бытовые микроволновые печи, лучшие рецепты для мультиварки, мясорубка the chemodan clan,  блендер vita mix">
		<meta name="description" content="кухонный комбайн видео Электрическая мясорубка Atlanta ATH-373 в современном дизайне с системой реверса...">
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
						<a class="photo" href="photos/78e004a504b51dca5b370513a73854ac.jpeg" title="кухонный комбайн видео Мясорубка  Atlanta ATH-373"><img src="photos/78e004a504b51dca5b370513a73854ac.jpeg" alt="кухонный комбайн видео Мясорубка  Atlanta ATH-373" title="кухонный комбайн видео Мясорубка  Atlanta ATH-373 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blenderkuhonnyy-kombayn-braun-mr-patis-fp-k-hc-5750r.php"><img src="photos/71cf139444313d5f31f36765a5ef5edf.jpeg" alt="микроволновые печи gorenje Блендер-кухонный комбайн Braun MR-570 Patis FP K HC" title="микроволновые печи gorenje Блендер-кухонный комбайн Braun MR-570 Patis FP K HC"></a><h2>Блендер-кухонный комбайн Braun MR-570 Patis FP K HC</h2></li>
							<li><a href="http://kitchentech.elitno.net/kofemashina-nivona-nicr-caferomatica-39590r.php"><img src="photos/93a66ef135566c3ae659c72709d3515e.jpeg" alt="binatone хлебопечка отзывы Кофемашина Nivona NICR770 CafeRomatica" title="binatone хлебопечка отзывы Кофемашина Nivona NICR770 CafeRomatica"></a><h2>Кофемашина Nivona NICR770 CafeRomatica</h2></li>
							<li><a href="http://kitchentech.elitno.net/avtomaticheskaya-kofemashina-melitta-caffeo-ci-chernaya-65999r.php"><img src="photos/46d0cfd29014c8ec4bfb9c09c292bb23.jpeg" alt="приготовление теста в хлебопечке Автоматическая кофемашина Melitta CAFFEO CI, черная" title="приготовление теста в хлебопечке Автоматическая кофемашина Melitta CAFFEO CI, черная"></a><h2>Автоматическая кофемашина Melitta CAFFEO CI, черная</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>кухонный комбайн видео Мясорубка  Atlanta ATH-373</h1>
						<div class="tb"><p>Цена: от <span class="price">2150</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19615.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Электрическая мясорубка Atlanta ATH-373 в современном дизайне с системой реверса мощностью 1000 Вт. Встроенная система реверса позволяет проворачивать шнек (спираль, прокручивающая фарш) в обратном направлении, благодаря чему вы легко сможете избавиться от намотавшихся жил, без необходимости разбора мясорубки. В комплекте идет 2 насадки и рецепты приготовления кебе. Корпус имеет гигиеническое покрытие. </p><p><strong>Характеристики:</strong></p><ul type=disc><li>Стильный дизайн <li>Максимальная мощность 1000 Вт <li>Напряжение питания 230 В, 50 Гц <li>Реверс <li>Корпус с гигиеничным покрытием <li>Высокая производительность <li>В комплекте Atlanta ATH-373 необходимые дополнительные насадки и рецепты приготовления кебе </li></ul><p><strong>Производитель: США</strong></p> кухонный комбайн видео</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/7182cc256e7e3343e3aec4d550f1f314.jpeg" alt="рецепт пиццы в хлебопечке Электрическая кофемолка Bodum BISTRO 10903-913EURO белая" title="рецепт пиццы в хлебопечке Электрическая кофемолка Bodum BISTRO 10903-913EURO белая"><div class="box" page="elektricheskaya-kofemolka-bodum-bistro-euro-belaya-5730r"><span class="title">рецепт пиццы в хлебопечке Электрическая кофемолка Bodum BISTRO 10903-913EURO белая</span><p>от <span class="price">5730</span> руб.</p></div></li>
						<li><img src="photos/1a39977506779af8e80d3d2045a86d6b.jpeg" alt="где купить пароварку Мясорубка электрическая Tefal Le Hachoir ME7001" title="где купить пароварку Мясорубка электрическая Tefal Le Hachoir ME7001"><div class="box" page="myasorubka-elektricheskaya-tefal-le-hachoir-me-5100r"><span class="title">где купить пароварку Мясорубка электрическая Tefal Le Hachoir ME7001</span><p>от <span class="price">5100</span> руб.</p></div></li>
						<li><img src="photos/7903c21b4883d9e9c99d0a478392fee7.jpeg" alt="хлебопечка мулинекс 3101 Соковыжималка  Redmond RJ-M906" title="хлебопечка мулинекс 3101 Соковыжималка  Redmond RJ-M906"><div class="box" page="sokovyzhimalka-redmond-rjm-4990r"><span class="title">хлебопечка мулинекс 3101 Соковыжималка  Redmond RJ-M906</span><p>от <span class="price">4990</span> руб.</p></div></li>
						<li><img src="photos/d7869500a03daf3749520ba97157adc1.jpeg" alt="вафельница орешек 4 Хлебопечка Moulinex OW310130 Uno" title="вафельница орешек 4 Хлебопечка Moulinex OW310130 Uno"><div class="box" page="hlebopechka-moulinex-ow-uno-4990r"><span class="title">вафельница орешек 4 Хлебопечка Moulinex OW310130 Uno</span><p>от <span class="price">4990</span> руб.</p></div></li>
						<li class="large"><img src="photos/f2d6d870289f867bca2e3ea0f8531c8e.jpeg" alt="блендер металлический Электрический чайник  Zauber Z-350" title="блендер металлический Электрический чайник  Zauber Z-350"><div class="box" page="elektricheskiy-chaynik-zauber-z-1600r"><span class="title">блендер металлический Электрический чайник  Zauber Z-350</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li class="large"><img src="photos/5a34cc2772e0feae9df6932b7f043259.jpeg" alt="мультиварка супра инструкция Чайник электрический Atlanta ATH-758" title="мультиварка супра инструкция Чайник электрический Atlanta ATH-758"><div class="box" page="chaynik-elektricheskiy-atlanta-ath-940r"><span class="title">мультиварка супра инструкция Чайник электрический Atlanta ATH-758</span><p>от <span class="price">940</span> руб.</p></div></li>
						<li class="large"><img src="photos/ef5f34c264e9ba8f2acfacd6c8c1863a.jpeg" alt="кофеварка в киеве Чайник дисковый керамический 1,7л, голубые цветы Zauber ECO-330" title="кофеварка в киеве Чайник дисковый керамический 1,7л, голубые цветы Zauber ECO-330"><div class="box" page="chaynik-diskovyy-keramicheskiy-l-golubye-cvety-zauber-eco-1760r"><span class="title">кофеварка в киеве Чайник дисковый керамический 1,7л, голубые цветы Zauber ECO-330</span><p>от <span class="price">1760</span> руб.</p></div></li>
						<li><img src="photos/4fcdbef1e4068bc4641fdad47e086ca6.jpeg" alt="бытовые микроволновые печи Парогенератор Maxima MSC-2001" title="бытовые микроволновые печи Парогенератор Maxima MSC-2001"><div class="box" page="parogenerator-maxima-msc-1650r"><span class="title">бытовые микроволновые печи Парогенератор Maxima MSC-2001</span><p>от <span class="price">1650</span> руб.</p></div></li>
						<li><img src="photos/bf71bbc1609948054c42cfa52f5f228d.jpeg" alt="лучшие рецепты для мультиварки Набор мешков-пылесборников 50 (790-012) для Thomas" title="лучшие рецепты для мультиварки Набор мешков-пылесборников 50 (790-012) для Thomas"><div class="box" page="nabor-meshkovpylesbornikov-dlya-thomas-1100r"><span class="title">лучшие рецепты для мультиварки Набор мешков-пылесборников 50 (790-012) для Thomas</span><p>от <span class="price">1100</span> руб.</p></div></li>
						<li><img src="photos/4cf080cddf806d93288abd396c7938d4.jpeg" alt="мясорубка the chemodan clan Комплект насадок Dyson Tool Kit Retail" title="мясорубка the chemodan clan Комплект насадок Dyson Tool Kit Retail"><div class="box" page="komplekt-nasadok-dyson-tool-kit-retail-2490r"><span class="title">мясорубка the chemodan clan Комплект насадок Dyson Tool Kit Retail</span><p>от <span class="price">2490</span> руб.</p></div></li>
						<li><img src="photos/dcfd8cc55439cd877d074c0e060c75d4.jpeg" alt="качество пылесосов Пылесос Vitek VT-1809 красный" title="качество пылесосов Пылесос Vitek VT-1809 красный"><div class="box" page="pylesos-vitek-vt-krasnyy-2600r"><span class="title">качество пылесосов Пылесос Vitek VT-1809 красный</span><p>от <span class="price">2600</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("myasorubka-atlanta-ath-2150r.php", 0, -4); if (file_exists("comments/myasorubka-atlanta-ath-2150r.php")) require_once "comments/myasorubka-atlanta-ath-2150r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="myasorubka-atlanta-ath-2150r.php" method="post" onsubmit="return checkForm(this)">
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