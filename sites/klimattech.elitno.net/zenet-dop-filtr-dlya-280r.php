<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("zenet-dop-filtr-dlya-280r.php","предохранитель вентилятора печки");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("zenet-dop-filtr-dlya-280r.php", $nick, $comment);
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
		<title>предохранитель вентилятора печки ZENET Доп. фильтр для 2516/2720/2728  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="предохранитель вентилятора печки, газовый водонагреватель оазис, скачать dvd конвектор, датчик включения вентилятора 2109, водонагреватели att, муфта привода вентилятора, самые лучшие кондиционеры, монтаж кондиционера заказчика, vanguard тепловая пушка, электрокамины декоративные, дизельная тепловая пушка master, монтаж и продажа кондиционеров, видео конвектор movavi, компьютерный вентилятор,  замена тена в водонагревателе">
		<meta name="description" content="предохранитель вентилятора печки Характеристики:    Тип:       сменный картридж;   Назначение:       для очистки ...">
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
						<a class="photo" href="photos/d0d6142b9db6d6cb4ffb5a6023288c8b.png" title="предохранитель вентилятора печки ZENET Доп. фильтр для 2516/2720/2728"><img src="photos/d0d6142b9db6d6cb4ffb5a6023288c8b.png" alt="предохранитель вентилятора печки ZENET Доп. фильтр для 2516/2720/2728" title="предохранитель вентилятора печки ZENET Доп. фильтр для 2516/2720/2728 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/konvektor-timberk-tece-e-2750r.php"><img src="photos/d5f7183bbf44508345cc80372aab5df3.jpeg" alt="газовый водонагреватель оазис Конвектор Timberk TEC.E1 E 1500" title="газовый водонагреватель оазис Конвектор Timberk TEC.E1 E 1500"></a><h2>Конвектор Timberk TEC.E1 E 1500</h2></li>
							<li><a href="http://klimattech.elitno.net/kondicioner-ballu-bsgh-24180r.php"><img src="photos/2599294d2213c14ab14e0ed6c32724a2.jpeg" alt="скачать dvd конвектор Кондиционер Ballu BSG-18H" title="скачать dvd конвектор Кондиционер Ballu BSG-18H"></a><h2>Кондиционер Ballu BSG-18H</h2></li>
							<li><a href="http://klimattech.elitno.net/radiator-maslyanyy-timberk-tor-hb-i-2640r.php"><img src="photos/6a5a186e2015259e98897a7fbd644ae5.jpeg" alt="датчик включения вентилятора 2109 Радиатор масляный Timberk TOR 21.2512 HB I" title="датчик включения вентилятора 2109 Радиатор масляный Timberk TOR 21.2512 HB I"></a><h2>Радиатор масляный Timberk TOR 21.2512 HB I</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>предохранитель вентилятора печки ZENET Доп. фильтр для 2516/2720/2728</h1>
						<div class="tb"><p>Цена: от <span class="price">280</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_26091.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><strong>Характеристики:</strong></p> <ul type=disc>   <li>Тип:       сменный картридж;</li>   <li>Назначение:       для очистки и смягчения воды;</li>   <li>Предотвращает       отложение солей на внутренней поверхности увлажнителя;</li>   <li>Предназначен       для моделей: 2516/2720/2728.</li> </ul> <p><strong>Производитель:</strong><strong> ZENET (Германия)</strong></p> <strong>Изготовитель:  Китай</strong> предохранитель вентилятора печки</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/d177a5c37d485059f7f1413434f7f7ff.jpeg" alt="водонагреватели att Погодная станция Классика - тepмoмeтp, бapoмeтp ПогодникЪ, арт. 07391" title="водонагреватели att Погодная станция Классика - тepмoмeтp, бapoмeтp ПогодникЪ, арт. 07391"><div class="box" page="pogodnaya-stanciya-klassika-tepmometp-bapometp-pogodnik-art-1470r"><span class="title">водонагреватели att Погодная станция Классика - тepмoмeтp, бapoмeтp ПогодникЪ, арт. 07391</span><p>от <span class="price">1470</span> руб.</p></div></li>
						<li><img src="photos/eaa9d36d06605b97c43cac0412f52c2b.jpeg" alt="муфта привода вентилятора Барометр  Футбольный мяч RST, арт. 07873" title="муфта привода вентилятора Барометр  Футбольный мяч RST, арт. 07873"><div class="box" page="barometr-futbolnyy-myach-rst-art-1750r"><span class="title">муфта привода вентилятора Барометр  Футбольный мяч RST, арт. 07873</span><p>от <span class="price">1750</span> руб.</p></div></li>
						<li><img src="photos/dc588af274ff42d1adeb63b74d58b910.jpeg" alt="самые лучшие кондиционеры Термометр цифровой автомобильный RST, арт. 02177" title="самые лучшие кондиционеры Термометр цифровой автомобильный RST, арт. 02177"><div class="box" page="termometr-cifrovoy-avtomobilnyy-rst-art-460r"><span class="title">самые лучшие кондиционеры Термометр цифровой автомобильный RST, арт. 02177</span><p>от <span class="price">460</span> руб.</p></div></li>
						<li><img src="photos/ab919beb2a8fc47869d21aaee94c925b.jpeg" alt="монтаж кондиционера заказчика NEOCLIMA FH-03 Тепловентиляторы" title="монтаж кондиционера заказчика NEOCLIMA FH-03 Тепловентиляторы"><div class="box" page="neoclima-fh-teploventilyatory-550r"><span class="title">монтаж кондиционера заказчика NEOCLIMA FH-03 Тепловентиляторы</span><p>от <span class="price">550</span> руб.</p></div></li>
						<li class="large"><img src="photos/66bc8545418b36ff4f9e041b54df6f3a.jpeg" alt="vanguard тепловая пушка Увлажнитель воздуха ультразвуковой Ballu UHB-900M" title="vanguard тепловая пушка Увлажнитель воздуха ультразвуковой Ballu UHB-900M"><div class="box" page="uvlazhnitel-vozduha-ultrazvukovoy-ballu-uhbm-5070r"><span class="title">vanguard тепловая пушка Увлажнитель воздуха ультразвуковой Ballu UHB-900M</span><p>от <span class="price">5070</span> руб.</p></div></li>
						<li class="large"><img src="photos/99871b59fb87db622a27f7be8ddc2ca0.jpeg" alt="электрокамины декоративные Ультразвуковой увлажнитель воздуха Neoclima NHL-700E (Сенсор)" title="электрокамины декоративные Ультразвуковой увлажнитель воздуха Neoclima NHL-700E (Сенсор)"><div class="box" page="ultrazvukovoy-uvlazhnitel-vozduha-neoclima-nhle-sensor-4600r"><span class="title">электрокамины декоративные Ультразвуковой увлажнитель воздуха Neoclima NHL-700E (Сенсор)</span><p>от <span class="price">4600</span> руб.</p></div></li>
						<li class="large"><img src="photos/6717523299564a2dda008816d75d984b.jpeg" alt="дизельная тепловая пушка master Увлажнитель ZENET 2610A" title="дизельная тепловая пушка master Увлажнитель ZENET 2610A"><div class="box" page="uvlazhnitel-zenet-a-2450r"><span class="title">дизельная тепловая пушка master Увлажнитель ZENET 2610A</span><p>от <span class="price">2450</span> руб.</p></div></li>
						<li><img src="photos/3b7c235a560eb472fba5d62c43866c03.jpeg" alt="монтаж и продажа кондиционеров Увлажнитель воздуха ультразвуковой Boneco AOS U650" title="монтаж и продажа кондиционеров Увлажнитель воздуха ультразвуковой Boneco AOS U650"><div class="box" page="uvlazhnitel-vozduha-ultrazvukovoy-boneco-aos-u-8000r"><span class="title">монтаж и продажа кондиционеров Увлажнитель воздуха ультразвуковой Boneco AOS U650</span><p>от <span class="price">8000</span> руб.</p></div></li>
						<li><img src="photos/344f068a3cddce171f547a26cf89a0f9.jpeg" alt="видео конвектор movavi Мойка воздуха Boneco 1355N" title="видео конвектор movavi Мойка воздуха Boneco 1355N"><div class="box" page="moyka-vozduha-boneco-n-9300r"><span class="title">видео конвектор movavi Мойка воздуха Boneco 1355N</span><p>от <span class="price">9300</span> руб.</p></div></li>
						<li><img src="photos/62815d3e6c27c4697dc9916bb41ef3b3.jpeg" alt="компьютерный вентилятор Мойка воздуха Boneco Air-O-Swiss 2055D" title="компьютерный вентилятор Мойка воздуха Boneco Air-O-Swiss 2055D"><div class="box" page="moyka-vozduha-boneco-airoswiss-d-15750r"><span class="title">компьютерный вентилятор Мойка воздуха Boneco Air-O-Swiss 2055D</span><p>от <span class="price">15750</span> руб.</p></div></li>
						<li><img src="photos/ef9e7c5df7ec21b4f4f06558964e3c1a.jpeg" alt="купить инверторный кондиционер Электрогрелка для ног  Beurer FW20" title="купить инверторный кондиционер Электрогрелка для ног  Beurer FW20"><div class="box" page="elektrogrelka-dlya-nog-beurer-fw-1800r"><span class="title">купить инверторный кондиционер Электрогрелка для ног  Beurer FW20</span><p>от <span class="price">1800</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("zenet-dop-filtr-dlya-280r.php", 0, -4); if (file_exists("comments/zenet-dop-filtr-dlya-280r.php")) require_once "comments/zenet-dop-filtr-dlya-280r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="zenet-dop-filtr-dlya-280r.php" method="post" onsubmit="return checkForm(this)">
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