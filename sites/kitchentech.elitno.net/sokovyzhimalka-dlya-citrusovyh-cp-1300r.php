<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("sokovyzhimalka-dlya-citrusovyh-cp-1300r.php","ультразвуковой парогенератор");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("sokovyzhimalka-dlya-citrusovyh-cp-1300r.php", $nick, $comment);
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
		<title>ультразвуковой парогенератор Соковыжималка для цитрусовых 304-CP  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="ультразвуковой парогенератор, мотор пылесоса самсунг, где купить пароварку, пакеты для пылесоса, утюг с парогенератором philips, рецепты для мультиварки viconte, продам хлебопечку, пылесос bork v500, купить пылесос зелмер, кофеварка интернет магазин, нож для мясорубки kenwood, соковыжималка tefal отзывы, аэрогриль vitesse vs 408, центральный пылесос,  возможности блендера">
		<meta name="description" content="ультразвуковой парогенератор Хотите наслаждаться вкусным натуральным соком, не прилагая  для этого особых уси...">
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
						<a class="photo" href="photos/ba4426ec9ff105596978c39d5f7ff4de.jpeg" title="ультразвуковой парогенератор Соковыжималка для цитрусовых 304-CP"><img src="photos/ba4426ec9ff105596978c39d5f7ff4de.jpeg" alt="ультразвуковой парогенератор Соковыжималка для цитрусовых 304-CP" title="ультразвуковой парогенератор Соковыжималка для цитрусовых 304-CP -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/elektroplitka-maxima-mes-550r.php"><img src="photos/99f24579a4151d885006823a70346b26.jpeg" alt="мотор пылесоса самсунг Электроплитка Maxima MES-0152-1" title="мотор пылесоса самсунг Электроплитка Maxima MES-0152-1"></a><h2>Электроплитка Maxima MES-0152-1</h2></li>
							<li><a href="http://kitchentech.elitno.net/myasorubka-elektricheskaya-tefal-le-hachoir-me-5100r.php"><img src="photos/1a39977506779af8e80d3d2045a86d6b.jpeg" alt="где купить пароварку Мясорубка электрическая Tefal Le Hachoir ME7001" title="где купить пароварку Мясорубка электрическая Tefal Le Hachoir ME7001"></a><h2>Мясорубка электрическая Tefal Le Hachoir ME7001</h2></li>
							<li><a href="http://kitchentech.elitno.net/myasorubka-braun-g-mn-wh-4980r.php"><img src="photos/2cdb40f493d1b8360833641d1048d5de.jpeg" alt="пакеты для пылесоса Мясорубка Braun G1300 MN WH" title="пакеты для пылесоса Мясорубка Braun G1300 MN WH"></a><h2>Мясорубка Braun G1300 MN WH</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>ультразвуковой парогенератор Соковыжималка для цитрусовых 304-CP</h1>
						<div class="tb"><p>Цена: от <span class="price">1300</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_26307.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Хотите наслаждаться вкусным натуральным соком, не прилагая  для этого особых усилий? Отличное решение для этого – соковыжималка. Соковыжималка  для цитрусовых изготовлена из качественной нержавеющей стали, имеет удобную и  простую конструкцию. Внешне соковыжималка представлена в приятном серебристом  цвете.</p> <p><strong>Характеристики:</strong></p> <ul type=disc>   <li>Для       цитрусовых;</li>   <li>Материал:       нержавеющая сталь;</li>   <li>Цвет:       серебристый.</li> </ul> <p><strong>Производитель: Россия</strong></p> ультразвуковой парогенератор</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/a5a669656630312240d0cb17c653dfea.jpeg" alt="утюг с парогенератором philips Соковыжималка Maxima MJ-059" title="утюг с парогенератором philips Соковыжималка Maxima MJ-059"><div class="box" page="sokovyzhimalka-maxima-mj-1090r"><span class="title">утюг с парогенератором philips Соковыжималка Maxima MJ-059</span><p>от <span class="price">1090</span> руб.</p></div></li>
						<li><img src="photos/602afbefdc154f32c668e628ed57301c.jpeg" alt="рецепты для мультиварки viconte Соковыжималка Maxima MJ-M903" title="рецепты для мультиварки viconte Соковыжималка Maxima MJ-M903"><div class="box" page="sokovyzhimalka-maxima-mjm-1850r"><span class="title">рецепты для мультиварки viconte Соковыжималка Maxima MJ-M903</span><p>от <span class="price">1850</span> руб.</p></div></li>
						<li><img src="photos/357a4e7af6a4eca2e30275a2d5d14351.jpeg" alt="продам хлебопечку Чайник электрический Binatone CEJ-1744 White" title="продам хлебопечку Чайник электрический Binatone CEJ-1744 White"><div class="box" page="chaynik-elektricheskiy-binatone-cej-white-880r"><span class="title">продам хлебопечку Чайник электрический Binatone CEJ-1744 White</span><p>от <span class="price">880</span> руб.</p></div></li>
						<li><img src="photos/aad075f22e1967e01f21286f7d5da33a.jpeg" alt="пылесос bork v500 Чайник Vitek VT-1161 с керамическим корпусом" title="пылесос bork v500 Чайник Vitek VT-1161 с керамическим корпусом"><div class="box" page="chaynik-vitek-vt-s-keramicheskim-korpusom-3450r"><span class="title">пылесос bork v500 Чайник Vitek VT-1161 с керамическим корпусом</span><p>от <span class="price">3450</span> руб.</p></div></li>
						<li class="large"><img src="photos/67898b31f2a00b51820f96bc789fed43.jpeg" alt="купить пылесос зелмер Чайник электрический Maxima MК- M281" title="купить пылесос зелмер Чайник электрический Maxima MК- M281"><div class="box" page="chaynik-elektricheskiy-maxima-mk-m-760r"><span class="title">купить пылесос зелмер Чайник электрический Maxima MК- M281</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li class="large"><img src="photos/2e4cd4da907bfa0983f22c5ac1875ffe.jpeg" alt="кофеварка интернет магазин Электрический чайник Atlanta АТН-663" title="кофеварка интернет магазин Электрический чайник Atlanta АТН-663"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-720r"><span class="title">кофеварка интернет магазин Электрический чайник Atlanta АТН-663</span><p>от <span class="price">720</span> руб.</p></div></li>
						<li class="large"><img src="photos/4aa517f040bb8f7cdf25d41fea297b7f.jpeg" alt="нож для мясорубки kenwood Электрический чайник Atlanta АТН-781" title="нож для мясорубки kenwood Электрический чайник Atlanta АТН-781"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-1000r"><span class="title">нож для мясорубки kenwood Электрический чайник Atlanta АТН-781</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li><img src="photos/93023d88a25f41b8fefb8504a248a750.jpeg" alt="соковыжималка tefal отзывы Пылесос Vitek VT-1814" title="соковыжималка tefal отзывы Пылесос Vitek VT-1814"><div class="box" page="pylesos-vitek-vt-2200r"><span class="title">соковыжималка tefal отзывы Пылесос Vitek VT-1814</span><p>от <span class="price">2200</span> руб.</p></div></li>
						<li><img src="photos/2fefc92a511ec2a4cec4d67efd9d8253.jpeg" alt="аэрогриль vitesse vs 408 Пылесос Thomas Genius S1 Eco Aquafilter" title="аэрогриль vitesse vs 408 Пылесос Thomas Genius S1 Eco Aquafilter"><div class="box" page="pylesos-thomas-genius-s-eco-aquafilter-9660r"><span class="title">аэрогриль vitesse vs 408 Пылесос Thomas Genius S1 Eco Aquafilter</span><p>от <span class="price">9660</span> руб.</p></div></li>
						<li><img src="photos/e1389eb03e943fe040843f1f9d6c693c.jpeg" alt="центральный пылесос Утюг Vitek VT-1251 синий" title="центральный пылесос Утюг Vitek VT-1251 синий"><div class="box" page="utyug-vitek-vt-siniy-1500r"><span class="title">центральный пылесос Утюг Vitek VT-1251 синий</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li><img src="photos/7850ec1f7f17c681ccafb6a0e80e0aff.jpeg" alt="микроволновая печь vitek Утюг паровой Tefal Aquaspeed Ultracord FV5250" title="микроволновая печь vitek Утюг паровой Tefal Aquaspeed Ultracord FV5250"><div class="box" page="utyug-parovoy-tefal-aquaspeed-ultracord-fv-2490r"><span class="title">микроволновая печь vitek Утюг паровой Tefal Aquaspeed Ultracord FV5250</span><p>от <span class="price">2490</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("sokovyzhimalka-dlya-citrusovyh-cp-1300r.php", 0, -4); if (file_exists("comments/sokovyzhimalka-dlya-citrusovyh-cp-1300r.php")) require_once "comments/sokovyzhimalka-dlya-citrusovyh-cp-1300r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="sokovyzhimalka-dlya-citrusovyh-cp-1300r.php" method="post" onsubmit="return checkForm(this)">
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