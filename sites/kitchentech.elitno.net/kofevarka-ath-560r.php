<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("kofevarka-ath-560r.php","соковыжималка philips hr 1858");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("kofevarka-ath-560r.php", $nick, $comment);
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
		<title>соковыжималка philips hr 1858 Кофеварка  ATH-278  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="соковыжималка philips hr 1858, кофеварка delonghi eco 310, кухонный комбайн фото, куриные грудки в мультиварке, мясорубки харьков, рисование утюгом, сравнить пароварки, каша на воде в мультиварке, принцип микроволновой печи, bamix блендер отзывы, кофеварка интернет магазин, пылесос циклонного типа, пароварка газовая купить, мультиварка скороварка moulinex,  уха в мультиварке">
		<meta name="description" content="соковыжималка philips hr 1858 Недорогая кофемолка Atlanta АТН-278 черного цвета с ротационным ножом вместимост...">
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
						<a class="photo" href="photos/d1b139f63086ad817c04622c294f1224.jpeg" title="соковыжималка philips hr 1858 Кофеварка  ATH-278"><img src="photos/d1b139f63086ad817c04622c294f1224.jpeg" alt="соковыжималка philips hr 1858 Кофеварка  ATH-278" title="соковыжималка philips hr 1858 Кофеварка  ATH-278 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-braun-mx-2400r.php"><img src="photos/c875beb952f9d6580895bee02e6ce554.jpeg" alt="кофеварка delonghi eco 310 Блендер Braun MX-2000" title="кофеварка delonghi eco 310 Блендер Braun MX-2000"></a><h2>Блендер Braun MX-2000</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikrovolnovaya-pech-vitek-vt-2750r.php"><img src="photos/a778f38f56b1abc67bee8e49c9772547.jpeg" alt="кухонный комбайн фото Микроволновая печь Vitek VT-1691" title="кухонный комбайн фото Микроволновая печь Vitek VT-1691"></a><h2>Микроволновая печь Vitek VT-1691</h2></li>
							<li><a href="http://kitchentech.elitno.net/multivarka-redmond-rmcm-4990r.php"><img src="photos/47aa32b114cfa34725d4752f07527890.jpeg" alt="куриные грудки в мультиварке Мультиварка Redmond RMC-M4502" title="куриные грудки в мультиварке Мультиварка Redmond RMC-M4502"></a><h2>Мультиварка Redmond RMC-M4502</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>соковыжималка philips hr 1858 Кофеварка  ATH-278</h1>
						<div class="tb"><p>Цена: от <span class="price">560</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19601.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Недорогая кофемолка Atlanta АТН-278 черного цвета с ротационным ножом вместимостью 75 грамм и мощностью 180 Вт. Для безопасности кофемолка имеет блокировку включения при снятой крышке и приспособление для намотки шнура.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Вместимость: 75 грамм <li>Мощность: 180 Вт <li>Система помола: ротационный нож </li></ul><p><strong>Производитель: США</strong></p> соковыжималка philips hr 1858</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/05f47eec13377fe47738b812da236937.jpeg" alt="мясорубки харьков Пароварка Vitek VT-1551" title="мясорубки харьков Пароварка Vitek VT-1551"><div class="box"><a href="http://kitchentech.elitno.net/parovarka-vitek-vt-1780r.php"><h3 class="title">мясорубки харьков Пароварка Vitek VT-1551</h3><p>от <span class="price">1780</span> руб.</p></a></div></li>
						<li><img src="photos/1f7b9f216facd163cc074eb10bad1faf.jpeg" alt="рисование утюгом Соковыжималка Moulinex BKA1" title="рисование утюгом Соковыжималка Moulinex BKA1"><div class="box" page="sokovyzhimalka-moulinex-bka-2400r"><span class="title">рисование утюгом Соковыжималка Moulinex BKA1</span><p>от <span class="price">2400</span> руб.</p></div></li>
						<li><img src="photos/a5a944903050174bbca074a40d4e65fa.jpeg" alt="сравнить пароварки Соковыжималка Atlanta ATH-325" title="сравнить пароварки Соковыжималка Atlanta ATH-325"><div class="box" page="sokovyzhimalka-atlanta-ath-520r"><span class="title">сравнить пароварки Соковыжималка Atlanta ATH-325</span><p>от <span class="price">520</span> руб.</p></div></li>
						<li><img src="photos/480398a0d650a7b1a9641ca193d5ca18.jpeg" alt="каша на воде в мультиварке Чайник электрический Vitek VT-1156 1,7 л" title="каша на воде в мультиварке Чайник электрический Vitek VT-1156 1,7 л"><div class="box" page="chaynik-elektricheskiy-vitek-vt-l-2350r"><span class="title">каша на воде в мультиварке Чайник электрический Vitek VT-1156 1,7 л</span><p>от <span class="price">2350</span> руб.</p></div></li>
						<li class="large"><img src="photos/3db103a42b99a0a770887670f28f5ba2.jpeg" alt="принцип микроволновой печи Чайник электрический Moulinex BY5101 1,5 л" title="принцип микроволновой печи Чайник электрический Moulinex BY5101 1,5 л"><div class="box" page="chaynik-elektricheskiy-moulinex-by-l-1950r"><span class="title">принцип микроволновой печи Чайник электрический Moulinex BY5101 1,5 л</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li class="large"><img src="photos/795752aa9995ffddbd65e841f9d26c51.jpeg" alt="bamix блендер отзывы Чайник электрический  Vitesse VS-139 1,7л" title="bamix блендер отзывы Чайник электрический  Vitesse VS-139 1,7л"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-1820r"><span class="title">bamix блендер отзывы Чайник электрический  Vitesse VS-139 1,7л</span><p>от <span class="price">1820</span> руб.</p></div></li>
						<li class="large"><img src="photos/2e4cd4da907bfa0983f22c5ac1875ffe.jpeg" alt="кофеварка интернет магазин Электрический чайник Atlanta АТН-663" title="кофеварка интернет магазин Электрический чайник Atlanta АТН-663"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-720r"><span class="title">кофеварка интернет магазин Электрический чайник Atlanta АТН-663</span><p>от <span class="price">720</span> руб.</p></div></li>
						<li><img src="photos/0207c29eb474672a9dc7b75c9efd4bab.jpeg" alt="пылесос циклонного типа Чайник дисковый керамический 1,7л, голубые цветы Zauber ECO-360" title="пылесос циклонного типа Чайник дисковый керамический 1,7л, голубые цветы Zauber ECO-360"><div class="box" page="chaynik-diskovyy-keramicheskiy-l-golubye-cvety-zauber-eco-1760r-2"><span class="title">пылесос циклонного типа Чайник дисковый керамический 1,7л, голубые цветы Zauber ECO-360</span><p>от <span class="price">1760</span> руб.</p></div></li>
						<li><img src="photos/e754a7b0b0a20443433494bbd5f5ba8d.jpeg" alt="пароварка газовая купить Пылесборник Vitek VT-1851 5шт." title="пароварка газовая купить Пылесборник Vitek VT-1851 5шт."><div class="box" page="pylesbornik-vitek-vt-sht-190r"><span class="title">пароварка газовая купить Пылесборник Vitek VT-1851 5шт.</span><p>от <span class="price">190</span> руб.</p></div></li>
						<li><img src="photos/96ed77acce770bf04afcf29723d61326.jpeg" alt="мультиварка скороварка moulinex Бумажные фильтры-мешки 300 (787-102) для Thomas" title="мультиварка скороварка moulinex Бумажные фильтры-мешки 300 (787-102) для Thomas"><div class="box" page="bumazhnye-filtrymeshki-dlya-thomas-1000r-2"><span class="title">мультиварка скороварка moulinex Бумажные фильтры-мешки 300 (787-102) для Thomas</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li><img src="photos/eae88ed8d5eeac95cd1245092b541388.jpeg" alt="семга в мультиварке Бумажные фильтры-мешки 350 (787-104) для Thomas" title="семга в мультиварке Бумажные фильтры-мешки 350 (787-104) для Thomas"><div class="box" page="bumazhnye-filtrymeshki-dlya-thomas-1000r-3"><span class="title">семга в мультиварке Бумажные фильтры-мешки 350 (787-104) для Thomas</span><p>от <span class="price">1000</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("kofevarka-ath-560r.php", 0, -4); if (file_exists("comments/kofevarka-ath-560r.php")) require_once "comments/kofevarka-ath-560r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="kofevarka-ath-560r.php" method="post" onsubmit="return checkForm(this)">
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