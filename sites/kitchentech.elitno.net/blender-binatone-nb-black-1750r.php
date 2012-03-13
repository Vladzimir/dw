<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("blender-binatone-nb-black-1750r.php","тесто для хлеба в хлебопечке");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("blender-binatone-nb-black-1750r.php", $nick, $comment);
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
		<title>тесто для хлеба в хлебопечке Блендер Binatone NB-7703 Black  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="тесто для хлеба в хлебопечке, сервисный центр пылесосов, рецепт индейки в мультиварке, купить утюг для волос, измельчитель сена, кофеварка via veneto, маленькие соковыжималки, тостер philips hd, фритюрница philips, пылесос автомобильный купить, измельчитель kenwood, panasonic блендер, фильтр для пылесоса самсунг, держатель для пылесоса,  картофельное пюре в блендере">
		<meta name="description" content="тесто для хлеба в хлебопечке Блендер Binatone NB-7703 Black всегда пригодится в хозяйстве. Прибор обладает мо...">
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
						<a class="photo" href="photos/33b7a9c07b1ba187d5807d0b266c7389.jpeg" title="тесто для хлеба в хлебопечке Блендер Binatone NB-7703 Black"><img src="photos/33b7a9c07b1ba187d5807d0b266c7389.jpeg" alt="тесто для хлеба в хлебопечке Блендер Binatone NB-7703 Black" title="тесто для хлеба в хлебопечке Блендер Binatone NB-7703 Black -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-atlanta-atn-550r.php"><img src="photos/7911abad6905c53ed2ad855d9cc4e2e1.jpeg" alt="сервисный центр пылесосов Блендер Atlanta АТН-338" title="сервисный центр пылесосов Блендер Atlanta АТН-338"></a><h2>Блендер Atlanta АТН-338</h2></li>
							<li><a href="http://kitchentech.elitno.net/zauber-kofemolka-x-850r.php"><img src="photos/1c87b1da99c709915f1f2bf9d89b2035.jpeg" alt="рецепт индейки в мультиварке Zauber Кофемолка  X-470" title="рецепт индейки в мультиварке Zauber Кофемолка  X-470"></a><h2>Zauber Кофемолка  X-470</h2></li>
							<li><a href="http://kitchentech.elitno.net/kofemolka-vitesse-vs-1100r.php"><img src="photos/3bdb5a7ebf59a397ed1b6263ffa77483.jpeg" alt="купить утюг для волос Кофемолка Vitesse VS-271" title="купить утюг для волос Кофемолка Vitesse VS-271"></a><h2>Кофемолка Vitesse VS-271</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>тесто для хлеба в хлебопечке Блендер Binatone NB-7703 Black</h1>
						<div class="tb"><p>Цена: от <span class="price">1750</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_6827.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Блендер </b><b>Binatone </b><b>NB-7703 </b><b>Black </b>всегда пригодится в хозяйстве. Прибор обладает мощностью 500 Вт, вместимость – 1,5 литра. Среди преимуществ: лезвия, изготовленные из нержавеющей стали, герметичная крышка, 3 скорости, импульсный режим, возможность добавления ингредиентов в процессе работы. Компания Binatone - один из ведущих мировых производителей мелкой и средней бытовой техники, представляющий широкий ассортимент различных товаров для дома и офиса. Продукция фирмы отличается высоким качеством, оригинальным дизайном и интересными цветовыми решениями.</p><p><b>Характеристики:</b></p><ul type=disc><li>Мощность: 500 Вт; <li>Объем: 1,5 л; <li>Лезвия из нержавеющей стали; <li>3 скорости работы; <li>Импульсный режим; <li>Возможность добавления ингредиентов во время работы; <li>Герметичная крышка; <li>Механизм защитной блокировки; <li>Место для хранения шнура; <li>Цвет: черный; <li>Вес: 2,7 кг.</li></ul><p><b>Производитель: </b>Binatone.</p> тесто для хлеба в хлебопечке</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/b563c2d22903c88ab1496d97329bc5bf.jpeg" alt="измельчитель сена Тостер Atlanta ATH-234" title="измельчитель сена Тостер Atlanta ATH-234"><div class="box" page="toster-atlanta-ath-690r"><span class="title">измельчитель сена Тостер Atlanta ATH-234</span><p>от <span class="price">690</span> руб.</p></div></li>
						<li><img src="photos/99e95702b63a74224f733264159dce15.jpeg" alt="кофеварка via veneto Тостер Redmond RT-402" title="кофеварка via veneto Тостер Redmond RT-402"><div class="box" page="toster-redmond-rt-2490r"><span class="title">кофеварка via veneto Тостер Redmond RT-402</span><p>от <span class="price">2490</span> руб.</p></div></li>
						<li><img src="photos/fe37fe3249ac15c2c7299f94675336f3.jpeg" alt="маленькие соковыжималки Тостер черный Bodum BISTRO 10709-01EURO" title="маленькие соковыжималки Тостер черный Bodum BISTRO 10709-01EURO"><div class="box" page="toster-chernyy-bodum-bistro-euro-3660r"><span class="title">маленькие соковыжималки Тостер черный Bodum BISTRO 10709-01EURO</span><p>от <span class="price">3660</span> руб.</p></div></li>
						<li><img src="photos/0e0d48622ca21267b7347abd2a6edbfa.jpeg" alt="тостер philips hd Redmond RK-M120D Чайник электрический" title="тостер philips hd Redmond RK-M120D Чайник электрический"><div class="box" page="redmond-rkmd-chaynik-elektricheskiy-4950r"><span class="title">тостер philips hd Redmond RK-M120D Чайник электрический</span><p>от <span class="price">4950</span> руб.</p></div></li>
						<li class="large"><img src="photos/9b828fe53dfca2c4781201b615fd512e.jpeg" alt="фритюрница philips Чайник электрический  Vitesse VS-137 1,7л бело-синий" title="фритюрница philips Чайник электрический  Vitesse VS-137 1,7л бело-синий"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-belosiniy-920r"><span class="title">фритюрница philips Чайник электрический  Vitesse VS-137 1,7л бело-синий</span><p>от <span class="price">920</span> руб.</p></div></li>
						<li class="large"><img src="photos/b2f5222e6fab12eeb526363895bfe319.jpeg" alt="пылесос автомобильный купить Чайник электрический  Vitesse VS-138 1,7л" title="пылесос автомобильный купить Чайник электрический  Vitesse VS-138 1,7л"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-950r"><span class="title">пылесос автомобильный купить Чайник электрический  Vitesse VS-138 1,7л</span><p>от <span class="price">950</span> руб.</p></div></li>
						<li class="large"><img src="photos/d221c08cbc7532258ec107ff315e3516.jpeg" alt="измельчитель kenwood Персональный дозиметр ДКГ-03Д «Грач» (аттестован в МЧС России)" title="измельчитель kenwood Персональный дозиметр ДКГ-03Д «Грач» (аттестован в МЧС России)"><div class="box" page="personalnyy-dozimetr-dkgd-«grach»-attestovan-v-mchs-rossii-20500r"><span class="title">измельчитель kenwood Персональный дозиметр ДКГ-03Д «Грач» (аттестован в МЧС России)</span><p>от <span class="price">20500</span> руб.</p></div></li>
						<li><img src="photos/a72d69a17b01ae0c39e3992b04fd72d5.jpeg" alt="panasonic блендер Сопло для пенной чистки Karcher (упаковка 0,6 л)" title="panasonic блендер Сопло для пенной чистки Karcher (упаковка 0,6 л)"><div class="box" page="soplo-dlya-pennoy-chistki-karcher-upakovka-l-750r"><span class="title">panasonic блендер Сопло для пенной чистки Karcher (упаковка 0,6 л)</span><p>от <span class="price">750</span> руб.</p></div></li>
						<li><img src="photos/db8d0d28b1b05f19385269d855039f58.jpeg" alt="фильтр для пылесоса самсунг Пылесос с аквафильтром Vitek VT-1833" title="фильтр для пылесоса самсунг Пылесос с аквафильтром Vitek VT-1833"><div class="box" page="pylesos-s-akvafiltrom-vitek-vt-5580r"><span class="title">фильтр для пылесоса самсунг Пылесос с аквафильтром Vitek VT-1833</span><p>от <span class="price">5580</span> руб.</p></div></li>
						<li><img src="photos/d9b92094264662e2a4b171c525a4ead7.jpeg" alt="держатель для пылесоса Пылесос Thomas Biovac 1620 C Aquafilter" title="держатель для пылесоса Пылесос Thomas Biovac 1620 C Aquafilter"><div class="box" page="pylesos-thomas-biovac-c-aquafilter-8430r"><span class="title">держатель для пылесоса Пылесос Thomas Biovac 1620 C Aquafilter</span><p>от <span class="price">8430</span> руб.</p></div></li>
						<li><img src="photos/80654612b51c4afe89f637d443e9b883.jpeg" alt="бесплатные рецепты для пароварки Утюг Vitek VT-1201" title="бесплатные рецепты для пароварки Утюг Vitek VT-1201"><div class="box" page="utyug-vitek-vt-1000r"><span class="title">бесплатные рецепты для пароварки Утюг Vitek VT-1201</span><p>от <span class="price">1000</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("blender-binatone-nb-black-1750r.php", 0, -4); if (file_exists("comments/blender-binatone-nb-black-1750r.php")) require_once "comments/blender-binatone-nb-black-1750r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="blender-binatone-nb-black-1750r.php" method="post" onsubmit="return checkForm(this)">
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