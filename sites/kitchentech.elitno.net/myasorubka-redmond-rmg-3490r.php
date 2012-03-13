<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("myasorubka-redmond-rmg-3490r.php","морепродукты в мультиварке");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("myasorubka-redmond-rmg-3490r.php", $nick, $comment);
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
		<title>морепродукты в мультиварке Мясорубка Redmond RMG-1201  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="морепродукты в мультиварке, сломалась мясорубка, сравнить пылесосы, видео приготовление в аэрогриле, binatone хлебопечка отзывы, грудка в пароварке, парогенератор пээ, чайник электрический bork, измельчитель сена, красноярск микроволновая печь, фритюрница philips, мультиварка мэджик пот, пылесос thomas genius s2, купить мультиварку в красноярске,  соковыжималка россошанка">
		<meta name="description" content="морепродукты в мультиварке Мощная, стильная и многофункциональная мясорубка Redmond RMG-1201. Конструкция о...">
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
						<a class="photo" href="photos/b61be34fe70b570a69e06c3fa76d4fff.jpeg" title="морепродукты в мультиварке Мясорубка Redmond RMG-1201"><img src="photos/b61be34fe70b570a69e06c3fa76d4fff.jpeg" alt="морепродукты в мультиварке Мясорубка Redmond RMG-1201" title="морепродукты в мультиварке Мясорубка Redmond RMG-1201 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/kofeynoe-zerno-v-belom-shokolade-melitta-60r.php"><img src="photos/25dcd96d6af309287cb8d754259182bf.png" alt="сломалась мясорубка Кофейное зерно в белом шоколаде Melitta" title="сломалась мясорубка Кофейное зерно в белом шоколаде Melitta"></a><h2>Кофейное зерно в белом шоколаде Melitta</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-atlanta-atn-900r.php"><img src="photos/fdaa728b5765994d8f9d4b5b1575efcd.jpeg" alt="сравнить пылесосы Блендер Atlanta АТН-333" title="сравнить пылесосы Блендер Atlanta АТН-333"></a><h2>Блендер Atlanta АТН-333</h2></li>
							<li><a href="http://kitchentech.elitno.net/kofemashina-nivona-nicr-caferomatica-36590r.php"><img src="photos/c26c66e7052b7c7adfb4026bf7ee1ec7.jpeg" alt="видео приготовление в аэрогриле Кофемашина Nivona NICR750 CafeRomatica" title="видео приготовление в аэрогриле Кофемашина Nivona NICR750 CafeRomatica"></a><h2>Кофемашина Nivona NICR750 CafeRomatica</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>морепродукты в мультиварке Мясорубка Redmond RMG-1201</h1>
						<div class="tb"><p>Цена: от <span class="price">3490</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19673.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Мощная, стильная и многофункциональная мясорубка Redmond RMG-1201. Конструкция оптимизирована для легкой очистки, а резиновые ножки для предотвращения скольжения мясорубки во время работы.</p><p>Характеристики:</p><ul type=disc><li>Напряжение питания: 220-240 В. Максимальная мощность: 1250 Вт <li>Максимальная мощность при блокировке вала – 1250 Вт <li>Насадка «Куббе» и приспособления для приготовления колбасы <li>Металлический лоток для продуктов. <li>Функция реверса. <li>Защита мотора от перегрузки. <li>Насадки разных диаметров <li>Цвета: бежевый, черный </li></ul><p><b>Производитель: США</b></p><p><b>Гарантия: 1 год</b></p> морепродукты в мультиварке</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/93a66ef135566c3ae659c72709d3515e.jpeg" alt="binatone хлебопечка отзывы Кофемашина Nivona NICR770 CafeRomatica" title="binatone хлебопечка отзывы Кофемашина Nivona NICR770 CafeRomatica"><div class="box" page="kofemashina-nivona-nicr-caferomatica-39590r"><span class="title">binatone хлебопечка отзывы Кофемашина Nivona NICR770 CafeRomatica</span><p>от <span class="price">39590</span> руб.</p></div></li>
						<li><img src="photos/0e305c07a6dd83a006dadb83e537663e.jpeg" alt="грудка в пароварке Кофемолка  ATH-272" title="грудка в пароварке Кофемолка  ATH-272"><div class="box" page="kofemolka-ath-600r"><span class="title">грудка в пароварке Кофемолка  ATH-272</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li><img src="photos/01c2ca770a8a823b21cf869aea4ab4ac.jpeg" alt="парогенератор пээ Кухонный комбайн Tefal Storeinn DO2081" title="парогенератор пээ Кухонный комбайн Tefal Storeinn DO2081"><div class="box" page="kuhonnyy-kombayn-tefal-storeinn-do-3370r"><span class="title">парогенератор пээ Кухонный комбайн Tefal Storeinn DO2081</span><p>от <span class="price">3370</span> руб.</p></div></li>
						<li><img src="photos/cba9fd30236faeadb264f6621c9544f6.jpeg" alt="чайник электрический bork Соковыжималка Maxima MJ-049 + блендер" title="чайник электрический bork Соковыжималка Maxima MJ-049 + блендер"><div class="box" page="sokovyzhimalka-maxima-mj-blender-2190r"><span class="title">чайник электрический bork Соковыжималка Maxima MJ-049 + блендер</span><p>от <span class="price">2190</span> руб.</p></div></li>
						<li class="large"><img src="photos/b563c2d22903c88ab1496d97329bc5bf.jpeg" alt="измельчитель сена Тостер Atlanta ATH-234" title="измельчитель сена Тостер Atlanta ATH-234"><div class="box" page="toster-atlanta-ath-690r"><span class="title">измельчитель сена Тостер Atlanta ATH-234</span><p>от <span class="price">690</span> руб.</p></div></li>
						<li class="large"><img src="photos/d816a9ba34d3c4cbee3c0f60a1fb92cf.jpeg" alt="красноярск микроволновая печь Чайник электрический Vitek VT-1158" title="красноярск микроволновая печь Чайник электрический Vitek VT-1158"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1770r"><span class="title">красноярск микроволновая печь Чайник электрический Vitek VT-1158</span><p>от <span class="price">1770</span> руб.</p></div></li>
						<li class="large"><img src="photos/9b828fe53dfca2c4781201b615fd512e.jpeg" alt="фритюрница philips Чайник электрический  Vitesse VS-137 1,7л бело-синий" title="фритюрница philips Чайник электрический  Vitesse VS-137 1,7л бело-синий"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-belosiniy-920r"><span class="title">фритюрница philips Чайник электрический  Vitesse VS-137 1,7л бело-синий</span><p>от <span class="price">920</span> руб.</p></div></li>
						<li><img src="photos/51ac41098d88811e7ab3241e4fa31a8c.jpeg" alt="мультиварка мэджик пот Аккумуляторы GP Batteries Rechargeable 1000 мАч 100AAAHC-UC2 PET-GAAA" title="мультиварка мэджик пот Аккумуляторы GP Batteries Rechargeable 1000 мАч 100AAAHC-UC2 PET-GAAA"><div class="box" page="akkumulyatory-gp-batteries-rechargeable-mach-aaahcuc-petgaaa-300r"><span class="title">мультиварка мэджик пот Аккумуляторы GP Batteries Rechargeable 1000 мАч 100AAAHC-UC2 PET-GAAA</span><p>от <span class="price">300</span> руб.</p></div></li>
						<li><img src="photos/94de14730b416ab6939a25c5af76e14e.jpeg" alt="пылесос thomas genius s2 Парогенератор Lelit PS11N" title="пылесос thomas genius s2 Парогенератор Lelit PS11N"><div class="box" page="parogenerator-lelit-psn-12000r"><span class="title">пылесос thomas genius s2 Парогенератор Lelit PS11N</span><p>от <span class="price">12000</span> руб.</p></div></li>
						<li><img src="photos/510105f381aa497ebe08b03499acd217.jpeg" alt="купить мультиварку в красноярске Пылесос Redmond RV-307" title="купить мультиварку в красноярске Пылесос Redmond RV-307"><div class="box" page="pylesos-redmond-rv-4490r"><span class="title">купить мультиварку в красноярске Пылесос Redmond RV-307</span><p>от <span class="price">4490</span> руб.</p></div></li>
						<li><img src="photos/39a5505798446240c306b0610cc8e434.jpeg" alt="сколько стоит моющий пылесос Пылесос Vitek VT-1834" title="сколько стоит моющий пылесос Пылесос Vitek VT-1834"><div class="box" page="pylesos-vitek-vt-5890r"><span class="title">сколько стоит моющий пылесос Пылесос Vitek VT-1834</span><p>от <span class="price">5890</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("myasorubka-redmond-rmg-3490r.php", 0, -4); if (file_exists("comments/myasorubka-redmond-rmg-3490r.php")) require_once "comments/myasorubka-redmond-rmg-3490r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="myasorubka-redmond-rmg-3490r.php" method="post" onsubmit="return checkForm(this)">
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