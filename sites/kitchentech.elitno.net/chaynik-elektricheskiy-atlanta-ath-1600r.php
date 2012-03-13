<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("chaynik-elektricheskiy-atlanta-ath-1600r.php","кофемашина nespresso krups");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("chaynik-elektricheskiy-atlanta-ath-1600r.php", $nick, $comment);
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
		<title>кофемашина nespresso krups Чайник электрический Atlanta ATH-751  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="кофемашина nespresso krups, кофеварка френч пресс, пароварка на газу, соковыжималка для моркови, пылесос для ногтей, приготовление теста в хлебопечке, мультиварка redmond 4504, мясорубки в санкт петербурге, пылесос для сбора стружки, кофеварка espresso, пароварки в минске, рецепты для мультиварки cuckoo, баклажаны в пароварке, сосиски в мультиварке,  трубка для пылесоса">
		<meta name="description" content="кофемашина nespresso krups Набор белого цвета из электрического чайника Atlanta ATH-751 объемом 1,2 литра, ...">
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
						<a class="photo" href="photos/b6d12be4b9eb96a31c69e83c45163c6c.jpeg" title="кофемашина nespresso krups Чайник электрический Atlanta ATH-751"><img src="photos/b6d12be4b9eb96a31c69e83c45163c6c.jpeg" alt="кофемашина nespresso krups Чайник электрический Atlanta ATH-751" title="кофемашина nespresso krups Чайник электрический Atlanta ATH-751 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/kuhonnyy-kombayn-redmond-rfp-5390r.php"><img src="photos/eeb9eab6db603b9616a92fc025537c6c.jpeg" alt="кофеварка френч пресс Кухонный комбайн Redmond  RFP-3903" title="кофеварка френч пресс Кухонный комбайн Redmond  RFP-3903"></a><h2>Кухонный комбайн Redmond  RFP-3903</h2></li>
							<li><a href="http://kitchentech.elitno.net/ruchnoy-blender-russell-hobbs-desire-art-1290r.php"><img src="photos/1872b2cfd6b28fbd32d0f1258c786690.jpeg" alt="пароварка на газу Ручной блендер Russell Hobbs Desire, арт. 18508-56" title="пароварка на газу Ручной блендер Russell Hobbs Desire, арт. 18508-56"></a><h2>Ручной блендер Russell Hobbs Desire, арт. 18508-56</h2></li>
							<li><a href="http://kitchentech.elitno.net/kuhonnyy-kombayn-ath-680r.php"><img src="photos/6e844ec2051132de84c89f71f9ba6d6a.jpeg" alt="соковыжималка для моркови Кухонный комбайн ATH-360" title="соковыжималка для моркови Кухонный комбайн ATH-360"></a><h2>Кухонный комбайн ATH-360</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>кофемашина nespresso krups Чайник электрический Atlanta ATH-751</h1>
						<div class="tb"><p>Цена: от <span class="price">1600</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18117.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Набор белого цвета из электрического чайника Atlanta ATH-751 объемом 1,2 литра, мощностью 1220 Вт и чайника для заваривания из термостойкого стекла. Электрический чайник имеет дисковой нагреватель из нержавеющей стали и фильтр от накипи. Абсолютно безопасен: выключается при закипании и не включается при отсутствии воды. Заварной керамический чайник имеет функцию подогрева.</p><p><b>Характеристики:</b></p><ul type=disc><li>В комплекте: электрический чайник и заварной чайник <li>Объем: 1,2 л <li>Мощность: 1220 Вт <li>Нагревательный элемент: дисковой нагреватель <li>Блокировка включения без воды <li>Автоматическое выключение </li></ul><p><b>Производитель: Китай</b></p> кофемашина nespresso krups</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/45055ec55f153a8a82f9cf1191933a0c.jpeg" alt="пылесос для ногтей Эспрессо-кофемашина Melitta Caffeo Lounge White (4.0008.67)" title="пылесос для ногтей Эспрессо-кофемашина Melitta Caffeo Lounge White (4.0008.67)"><div class="box" page="espressokofemashina-melitta-caffeo-lounge-white-45500r"><span class="title">пылесос для ногтей Эспрессо-кофемашина Melitta Caffeo Lounge White (4.0008.67)</span><p>от <span class="price">45500</span> руб.</p></div></li>
						<li><img src="photos/46d0cfd29014c8ec4bfb9c09c292bb23.jpeg" alt="приготовление теста в хлебопечке Автоматическая кофемашина Melitta CAFFEO CI, черная" title="приготовление теста в хлебопечке Автоматическая кофемашина Melitta CAFFEO CI, черная"><div class="box" page="avtomaticheskaya-kofemashina-melitta-caffeo-ci-chernaya-65999r"><span class="title">приготовление теста в хлебопечке Автоматическая кофемашина Melitta CAFFEO CI, черная</span><p>от <span class="price">65999</span> руб.</p></div></li>
						<li><img src="photos/696c3eff6d4752e21e651f3d4b34c0a7.jpeg" alt="мультиварка redmond 4504 Мясорубка Redmond RMG-1204" title="мультиварка redmond 4504 Мясорубка Redmond RMG-1204"><div class="box" page="myasorubka-redmond-rmg-3290r"><span class="title">мультиварка redmond 4504 Мясорубка Redmond RMG-1204</span><p>от <span class="price">3290</span> руб.</p></div></li>
						<li><img src="photos/54c54bed2f103aac514687168a05cb1f.jpeg" alt="мясорубки в санкт петербурге Тостер Russell Hobbs Cottage Floral, арт. 18513-56" title="мясорубки в санкт петербурге Тостер Russell Hobbs Cottage Floral, арт. 18513-56"><div class="box" page="toster-russell-hobbs-cottage-floral-art-2790r"><span class="title">мясорубки в санкт петербурге Тостер Russell Hobbs Cottage Floral, арт. 18513-56</span><p>от <span class="price">2790</span> руб.</p></div></li>
						<li class="large"><img src="photos/25bac4b45e0e97c9b045c0e23eb08977.jpeg" alt="пылесос для сбора стружки Хлебопечка Binatone BM-2169 Black с функцией «Домашний пекарь»" title="пылесос для сбора стружки Хлебопечка Binatone BM-2169 Black с функцией «Домашний пекарь»"><div class="box" page="hlebopechka-binatone-bm-black-s-funkciey-«domashniy-pekar»-4500r"><span class="title">пылесос для сбора стружки Хлебопечка Binatone BM-2169 Black с функцией «Домашний пекарь»</span><p>от <span class="price">4500</span> руб.</p></div></li>
						<li class="large"><img src="photos/ab2f5443010f5db248e8ed93f21ddbdb.jpeg" alt="кофеварка espresso Чайник электрический Binatone CEJ-3300 T Magic Thermo White Blue" title="кофеварка espresso Чайник электрический Binatone CEJ-3300 T Magic Thermo White Blue"><div class="box" page="chaynik-elektricheskiy-binatone-cej-t-magic-thermo-white-blue-1300r"><span class="title">кофеварка espresso Чайник электрический Binatone CEJ-3300 T Magic Thermo White Blue</span><p>от <span class="price">1300</span> руб.</p></div></li>
						<li class="large"><img src="photos/70e82a3bba6b14786d891ffcea703881.jpeg" alt="пароварки в минске Электрический чайник Atlanta АТН-611" title="пароварки в минске Электрический чайник Atlanta АТН-611"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-700r"><span class="title">пароварки в минске Электрический чайник Atlanta АТН-611</span><p>от <span class="price">700</span> руб.</p></div></li>
						<li><img src="photos/5b880c439b70bdcfe7580a48a2aa9fb4.jpeg" alt="рецепты для мультиварки cuckoo Melitta Enjoy Aqua Чайник" title="рецепты для мультиварки cuckoo Melitta Enjoy Aqua Чайник"><div class="box" page="melitta-enjoy-aqua-chaynik-0r"><span class="title">рецепты для мультиварки cuckoo Melitta Enjoy Aqua Чайник</span><p>от <span class="price">0</span> руб.</p></div></li>
						<li><img src="photos/916a75c3d4cbc8ec64d3ba505b733ba5.jpeg" alt="баклажаны в пароварке Воздушный фильтр Redmond  HEPA-фильтр RV-312" title="баклажаны в пароварке Воздушный фильтр Redmond  HEPA-фильтр RV-312"><div class="box" page="vozdushnyy-filtr-redmond-hepafiltr-rv-390r"><span class="title">баклажаны в пароварке Воздушный фильтр Redmond  HEPA-фильтр RV-312</span><p>от <span class="price">390</span> руб.</p></div></li>
						<li><img src="photos/9e96bced898e611bddc3653f39cf1ccf.jpeg" alt="сосиски в мультиварке Пылесос KARCHER WD 3.300 M EU-I" title="сосиски в мультиварке Пылесос KARCHER WD 3.300 M EU-I"><div class="box" page="pylesos-karcher-wd-m-eui-4490r"><span class="title">сосиски в мультиварке Пылесос KARCHER WD 3.300 M EU-I</span><p>от <span class="price">4490</span> руб.</p></div></li>
						<li><img src="photos/265e30ba27b80acc7dc11e5947b9e36a.jpeg" alt="аэрогриль lentel d101b Пылесос Vitek VT-1813 красный" title="аэрогриль lentel d101b Пылесос Vitek VT-1813 красный"><div class="box" page="pylesos-vitek-vt-krasnyy-2450r"><span class="title">аэрогриль lentel d101b Пылесос Vitek VT-1813 красный</span><p>от <span class="price">2450</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("chaynik-elektricheskiy-atlanta-ath-1600r.php", 0, -4); if (file_exists("comments/chaynik-elektricheskiy-atlanta-ath-1600r.php")) require_once "comments/chaynik-elektricheskiy-atlanta-ath-1600r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="chaynik-elektricheskiy-atlanta-ath-1600r.php" method="post" onsubmit="return checkForm(this)">
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