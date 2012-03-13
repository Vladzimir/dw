<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("toster-russell-hobbs-mono-art-1690r.php","хлебопечка супра 150");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("toster-russell-hobbs-mono-art-1690r.php", $nick, $comment);
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
		<title>хлебопечка супра 150 Тостер Russell Hobbs Mono, арт. 18535-56  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="хлебопечка супра 150, купить водяной пылесос, пылесос samsung sc 4326, портативный дозиметр, мясорубки харьков, мультиварка minute cook, джем в хлебопечке, аэрогриль hotter economy, пылесос томас твин т1, каша на воде в мультиварке, хлебопечка германия, нож для мясорубки kenwood, кофемашина incanto de luxe, борк мешки для пылесоса,  дорогая мультиварка">
		<meta name="description" content="хлебопечка супра 150 Тостер Mono,  мощностью 930 Вт, выполнен из черного пластика черно-белого цвета....">
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
						<a class="photo" href="photos/f1de3ed8b30a0103d37ce7f82bba78f6.jpeg" title="хлебопечка супра 150 Тостер Russell Hobbs Mono, арт. 18535-56"><img src="photos/f1de3ed8b30a0103d37ce7f82bba78f6.jpeg" alt="хлебопечка супра 150 Тостер Russell Hobbs Mono, арт. 18535-56" title="хлебопечка супра 150 Тостер Russell Hobbs Mono, арт. 18535-56 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-snake-n-take-900r.php"><img src="photos/3a6f8f5bcd6b4c656110981eb9f3285b.jpeg" alt="купить водяной пылесос Блендер Snake n Take" title="купить водяной пылесос Блендер Snake n Take"></a><h2>Блендер Snake n Take</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-maxima-mhb-1090r.php"><img src="photos/c18872267b9c6c7f4de2b2c0d2d5e8a8.jpeg" alt="пылесос samsung sc 4326 Блендер Maxima MHB-0229" title="пылесос samsung sc 4326 Блендер Maxima MHB-0229"></a><h2>Блендер Maxima MHB-0229</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikser-atlanta-ath-480r.php"><img src="photos/ac8f90b072b89e29e700b07839541017.jpeg" alt="портативный дозиметр Миксер Atlanta ATH-293" title="портативный дозиметр Миксер Atlanta ATH-293"></a><h2>Миксер Atlanta ATH-293</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>хлебопечка супра 150 Тостер Russell Hobbs Mono, арт. 18535-56</h1>
						<div class="tb"><p>Цена: от <span class="price">1690</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_21517.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Тостер Mono,  мощностью 930 Вт, выполнен из черного пластика черно-белого цвета. Механическое  управление предусматривает регулировку степени поджаривания тостов. В целях  безопасности корпус термоизолирован. Предусмотрены функции размораживания и  подогрева. Поддон для крошек упрощает очистку устройства.</p><p><strong>Характеристики:</strong></p><ul><li>Мощность: 930 Вт;</li><li>Количество отделений: 2;</li><li>Количество тостов: 2;</li><li>Тип управления: механическое;</li><li>Регулировка степени поджаривания;</li><li>Кнопка отмены;</li><li>Функция размораживания;</li><li>Функция подогрева;</li><li>Термоизолированный корпус;</li><li>\Экстра-подъём\ для маленьких ломтиков  хлеба;</li><li>Решётка для подогрева булочек;</li><li>Поддон для крошек;</li><li>Материал корпуса: пластик;</li><li>Отсек для сетевого шнура.</li></ul><p><strong>Производитель:</strong><strong>Russell</strong><strong>Hobbs (Англия)</strong></p> хлебопечка супра 150</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/05f47eec13377fe47738b812da236937.jpeg" alt="мясорубки харьков Пароварка Vitek VT-1551" title="мясорубки харьков Пароварка Vitek VT-1551"><div class="box"><a href="http://kitchentech.elitno.net/parovarka-vitek-vt-1780r.php"><h3 class="title">мясорубки харьков Пароварка Vitek VT-1551</h3><p>от <span class="price">1780</span> руб.</p></a></div></li>
						<li><img src="photos/96ffa32e5276885766eccd4b00ddf567.jpeg" alt="мультиварка minute cook Соковыжималка цитрусовая дизайнерская Zauber X-860" title="мультиварка minute cook Соковыжималка цитрусовая дизайнерская Zauber X-860"><div class="box" page="sokovyzhimalka-citrusovaya-dizaynerskaya-zauber-x-1550r"><span class="title">мультиварка minute cook Соковыжималка цитрусовая дизайнерская Zauber X-860</span><p>от <span class="price">1550</span> руб.</p></div></li>
						<li><img src="photos/395739893470046928b7502ebf2a09eb.jpeg" alt="джем в хлебопечке Электрическая соковыжималка черная Bodum BISTRO 11149-01EURO" title="джем в хлебопечке Электрическая соковыжималка черная Bodum BISTRO 11149-01EURO"><div class="box" page="elektricheskaya-sokovyzhimalka-chernaya-bodum-bistro-euro-3340r"><span class="title">джем в хлебопечке Электрическая соковыжималка черная Bodum BISTRO 11149-01EURO</span><p>от <span class="price">3340</span> руб.</p></div></li>
						<li><img src="photos/31a34f17d596d6c34798e2946dbbde29.jpeg" alt="аэрогриль hotter economy Чайник электрический Vitek VT-1140 красный" title="аэрогриль hotter economy Чайник электрический Vitek VT-1140 красный"><div class="box" page="chaynik-elektricheskiy-vitek-vt-krasnyy-1790r"><span class="title">аэрогриль hotter economy Чайник электрический Vitek VT-1140 красный</span><p>от <span class="price">1790</span> руб.</p></div></li>
						<li class="large"><img src="photos/58caa49e2e5c4bf06cfbf9dcdde29448.jpeg" alt="пылесос томас твин т1 Чайник электрический Vitek VT-1142" title="пылесос томас твин т1 Чайник электрический Vitek VT-1142"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1950r"><span class="title">пылесос томас твин т1 Чайник электрический Vitek VT-1142</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li class="large"><img src="photos/480398a0d650a7b1a9641ca193d5ca18.jpeg" alt="каша на воде в мультиварке Чайник электрический Vitek VT-1156 1,7 л" title="каша на воде в мультиварке Чайник электрический Vitek VT-1156 1,7 л"><div class="box" page="chaynik-elektricheskiy-vitek-vt-l-2350r"><span class="title">каша на воде в мультиварке Чайник электрический Vitek VT-1156 1,7 л</span><p>от <span class="price">2350</span> руб.</p></div></li>
						<li class="large"><img src="photos/b3fae48615963478f00e0c05f3baa485.jpeg" alt="хлебопечка германия Электрический чайник  Zauber R-380" title="хлебопечка германия Электрический чайник  Zauber R-380"><div class="box" page="elektricheskiy-chaynik-zauber-r-1830r"><span class="title">хлебопечка германия Электрический чайник  Zauber R-380</span><p>от <span class="price">1830</span> руб.</p></div></li>
						<li><img src="photos/4aa517f040bb8f7cdf25d41fea297b7f.jpeg" alt="нож для мясорубки kenwood Электрический чайник Atlanta АТН-781" title="нож для мясорубки kenwood Электрический чайник Atlanta АТН-781"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-1000r"><span class="title">нож для мясорубки kenwood Электрический чайник Atlanta АТН-781</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li><img src="photos/56eef2b8f5929fc5948323a8a5a2e051.jpeg" alt="кофемашина incanto de luxe Зарядное устройство GP Batteries PB25-BС2 + (2х270AAH)" title="кофемашина incanto de luxe Зарядное устройство GP Batteries PB25-BС2 + (2х270AAH)"><div class="box" page="zaryadnoe-ustroystvo-gp-batteries-pbbs-haah-1220r"><span class="title">кофемашина incanto de luxe Зарядное устройство GP Batteries PB25-BС2 + (2х270AAH)</span><p>от <span class="price">1220</span> руб.</p></div></li>
						<li><img src="photos/6d6e50224259e87ee797b3ec79edf80e.jpeg" alt="борк мешки для пылесоса Плоская универсальная насадка в упаковке Dyson Flat Out Head Retail NP" title="борк мешки для пылесоса Плоская универсальная насадка в упаковке Dyson Flat Out Head Retail NP"><div class="box" page="ploskaya-universalnaya-nasadka-v-upakovke-dyson-flat-out-head-retail-np-2190r"><span class="title">борк мешки для пылесоса Плоская универсальная насадка в упаковке Dyson Flat Out Head Retail NP</span><p>от <span class="price">2190</span> руб.</p></div></li>
						<li><img src="photos/08939404bc185a897cf2a335ea28842f.jpeg" alt="пылесос вертикальный Пылесос Redmond RV-308" title="пылесос вертикальный Пылесос Redmond RV-308"><div class="box" page="pylesos-redmond-rv-7990r"><span class="title">пылесос вертикальный Пылесос Redmond RV-308</span><p>от <span class="price">7990</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("toster-russell-hobbs-mono-art-1690r.php", 0, -4); if (file_exists("comments/toster-russell-hobbs-mono-art-1690r.php")) require_once "comments/toster-russell-hobbs-mono-art-1690r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="toster-russell-hobbs-mono-art-1690r.php" method="post" onsubmit="return checkForm(this)">
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