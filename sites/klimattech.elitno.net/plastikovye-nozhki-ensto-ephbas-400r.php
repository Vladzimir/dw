<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("plastikovye-nozhki-ensto-ephbas-400r.php","нагревательный элемент конвектора");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("plastikovye-nozhki-ensto-ephbas-400r.php", $nick, $comment);
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
		<title>нагревательный элемент конвектора Пластиковые ножки Ensto EPHBAS1  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="нагревательный элемент конвектора, скорость вентилятора видеокарты, скачать бесплатно программу конвектор, электрокамины в интернете, кондиционер свежий воздух, сдвоенные вентиляторы, водонагреватели термекс неисправности, водонагреватели аристон 200, ленор кондиционер для белья, дизельная тепловая пушка master, чери амулет кондиционер, расчет мощности вентилятора, напольный тепловентилятор, кондиционер для серверной,  где купить тепловую пушку">
		<meta name="description" content="нагревательный элемент конвектора Пластиковые ножки Ensto EPHBAS1 предназначены для напольной установки конвекторо...">
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
						<a class="photo" href="photos/fe7102f397a7d18b0f5c13253f05e801.jpeg" title="нагревательный элемент конвектора Пластиковые ножки Ensto EPHBAS1"><img src="photos/fe7102f397a7d18b0f5c13253f05e801.jpeg" alt="нагревательный элемент конвектора Пластиковые ножки Ensto EPHBAS1" title="нагревательный элемент конвектора Пластиковые ножки Ensto EPHBAS1 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-neoclima-ewh-3750r.php"><img src="photos/aeb291a43491375be6474e281a07e1e2.jpeg" alt="скорость вентилятора видеокарты Водонагреватель Neoclima EWH 25" title="скорость вентилятора видеокарты Водонагреватель Neoclima EWH 25"></a><h2>Водонагреватель Neoclima EWH 25</h2></li>
							<li><a href="http://klimattech.elitno.net/konvektor-timberk-tece-m-2350r.php"><img src="photos/a75c50ad525182139543049fd53156a7.jpeg" alt="скачать бесплатно программу конвектор Конвектор Timberk TEC.E1 M 1500" title="скачать бесплатно программу конвектор Конвектор Timberk TEC.E1 M 1500"></a><h2>Конвектор Timberk TEC.E1 M 1500</h2></li>
							<li><a href="http://klimattech.elitno.net/radiator-maslyanyy-timberk-tor-mg-i-2000r.php"><img src="photos/491cee8378c9fb19c43cd73f2da43fe9.jpeg" alt="электрокамины в интернете Радиатор масляный Timberk TOR 21.1507 MG I" title="электрокамины в интернете Радиатор масляный Timberk TOR 21.1507 MG I"></a><h2>Радиатор масляный Timberk TOR 21.1507 MG I</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>нагревательный элемент конвектора Пластиковые ножки Ensto EPHBAS1</h1>
						<div class="tb"><p>Цена: от <span class="price">400</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_16394.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Пластиковые ножки E</b><b>nsto EPHBAS1</b> предназначены для напольной установки конвекторов, имеющих данную опцию. Отличаются устойчивостью, крепостью и надежностью. Ножки окрашены в белый цвет. </p><p><b>Производитель</b>: Ensto</p><p><b>Страна</b>: Финляндия</p> нагревательный элемент конвектора</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/3eeda3242ec91559c0efb8195ed63fc0.jpeg" alt="кондиционер свежий воздух Масляный радиатор Timberk TOR 31.1807 RR" title="кондиционер свежий воздух Масляный радиатор Timberk TOR 31.1807 RR"><div class="box" page="maslyanyy-radiator-timberk-tor-rr-2180r-2"><span class="title">кондиционер свежий воздух Масляный радиатор Timberk TOR 31.1807 RR</span><p>от <span class="price">2180</span> руб.</p></div></li>
						<li><img src="photos/c2de30b57a5c75c5b9251fcabe80c0c9.jpeg" alt="сдвоенные вентиляторы Обогреватель NY 20LF" title="сдвоенные вентиляторы Обогреватель NY 20LF"><div class="box" page="obogrevatel-ny-lf-1950r-2"><span class="title">сдвоенные вентиляторы Обогреватель NY 20LF</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li><img src="photos/6dfe798b3326bf9977da25b7994dc82f.jpeg" alt="водонагреватели термекс неисправности Барометр Морской  Погодникъ, арт. 07295" title="водонагреватели термекс неисправности Барометр Морской  Погодникъ, арт. 07295"><div class="box" page="barometr-morskoy-pogodnik-art-1390r"><span class="title">водонагреватели термекс неисправности Барометр Морской  Погодникъ, арт. 07295</span><p>от <span class="price">1390</span> руб.</p></div></li>
						<li><img src="photos/99f5f4572be3577df15f74d4b197b54c.jpeg" alt="водонагреватели аристон 200 Цифровой термометр с радиодатчиком в стиле iPhone 4 RST 02251" title="водонагреватели аристон 200 Цифровой термометр с радиодатчиком в стиле iPhone 4 RST 02251"><div class="box" page="cifrovoy-termometr-s-radiodatchikom-v-stile-iphone-rst-1250r"><span class="title">водонагреватели аристон 200 Цифровой термометр с радиодатчиком в стиле iPhone 4 RST 02251</span><p>от <span class="price">1250</span> руб.</p></div></li>
						<li class="large"><img src="photos/9b04ef8c5762d78ff90223509686854b.jpeg" alt="ленор кондиционер для белья Погодная цифровая барометрическая станция RST Meteo Link, арт. 02552" title="ленор кондиционер для белья Погодная цифровая барометрическая станция RST Meteo Link, арт. 02552"><div class="box" page="pogodnaya-cifrovaya-barometricheskaya-stanciya-rst-meteo-link-art-1835r"><span class="title">ленор кондиционер для белья Погодная цифровая барометрическая станция RST Meteo Link, арт. 02552</span><p>от <span class="price">1835</span> руб.</p></div></li>
						<li class="large"><img src="photos/b1e761d740cae58b4b6393acdd9fb6d7.jpeg" alt="дизельная тепловая пушка master Проекционная погодная станция RST 32712" title="дизельная тепловая пушка master Проекционная погодная станция RST 32712"><div class="box" page="proekcionnaya-pogodnaya-stanciya-rst-2310r"><span class="title">дизельная тепловая пушка master Проекционная погодная станция RST 32712</span><p>от <span class="price">2310</span> руб.</p></div></li>
						<li class="large"><img src="photos/8e7e2ef66391373433daf7ee0f28f072.jpeg" alt="чери амулет кондиционер Очиститель воздуха Ballu AP-410 F7 Очиститель воздуха" title="чери амулет кондиционер Очиститель воздуха Ballu AP-410 F7 Очиститель воздуха"><div class="box" page="ochistitel-vozduha-ballu-ap-f-ochistitel-vozduha-4650r"><span class="title">чери амулет кондиционер Очиститель воздуха Ballu AP-410 F7 Очиститель воздуха</span><p>от <span class="price">4650</span> руб.</p></div></li>
						<li><img src="photos/d3af6b5dff48e9808505bf8b2af62c8c.jpeg" alt="расчет мощности вентилятора Ультразвуковой увлажнитель Boneco Air-O-Swiss U7146" title="расчет мощности вентилятора Ультразвуковой увлажнитель Boneco Air-O-Swiss U7146"><div class="box" page="ultrazvukovoy-uvlazhnitel-boneco-airoswiss-u-1950r"><span class="title">расчет мощности вентилятора Ультразвуковой увлажнитель Boneco Air-O-Swiss U7146</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li><img src="photos/ed20b32445a2986dff602bce8017d840.jpeg" alt="напольный тепловентилятор Увлажнитель воздуха Redmond RHF-3302" title="напольный тепловентилятор Увлажнитель воздуха Redmond RHF-3302"><div class="box" page="uvlazhnitel-vozduha-redmond-rhf-1990r"><span class="title">напольный тепловентилятор Увлажнитель воздуха Redmond RHF-3302</span><p>от <span class="price">1990</span> руб.</p></div></li>
						<li><img src="photos/771e29e896f7ce0ffaac8f209d3a2130.jpeg" alt="кондиционер для серверной Электрогрелка Microlife FH 80" title="кондиционер для серверной Электрогрелка Microlife FH 80"><div class="box" page="elektrogrelka-microlife-fh-1240r"><span class="title">кондиционер для серверной Электрогрелка Microlife FH 80</span><p>от <span class="price">1240</span> руб.</p></div></li>
						<li><img src="photos/cba623b151c2cc395aeabb1dde5e459f.jpeg" alt="кондиционер поло седан Камин Классический очаг Dimplex Truscott Black" title="кондиционер поло седан Камин Классический очаг Dimplex Truscott Black"><div class="box" page="kamin-klassicheskiy-ochag-dimplex-truscott-black-13772r"><span class="title">кондиционер поло седан Камин Классический очаг Dimplex Truscott Black</span><p>от <span class="price">13772</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("plastikovye-nozhki-ensto-ephbas-400r.php", 0, -4); if (file_exists("comments/plastikovye-nozhki-ensto-ephbas-400r.php")) require_once "comments/plastikovye-nozhki-ensto-ephbas-400r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="plastikovye-nozhki-ensto-ephbas-400r.php" method="post" onsubmit="return checkForm(this)">
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