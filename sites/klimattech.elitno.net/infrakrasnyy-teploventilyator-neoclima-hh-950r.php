<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("infrakrasnyy-teploventilyator-neoclima-hh-950r.php","тепловентилятор мощность");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("infrakrasnyy-teploventilyator-neoclima-hh-950r.php", $nick, $comment);
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
		<title>тепловентилятор мощность Инфракрасный тепловентилятор Neoclima HH10  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="тепловентилятор мощность, тепловая пушка hintek, вентилятор охлаждения не выключается, интернет магазин вентиляторов, кондиционеры panasonic cs yw9mkd, метеостанции интернет магазин, установка кондиционеров харьков, газовые обогреватели для дома, осевой вентилятор купить, кондиционер liebert hiross, расчет мощности вентилятора, трубопровод кондиционера, электрокамины декоративные, отзывы о кондиционерах,  купить тен для водонагревателя">
		<meta name="description" content="тепловентилятор мощность Инфракрасный тепловентилятор Neoclima HH10 имеет механическое управление, три ст...">
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
						<a class="photo" href="photos/c35fa3f98dfe8950c7663d96b0b841fd.jpeg" title="тепловентилятор мощность Инфракрасный тепловентилятор Neoclima HH10"><img src="photos/c35fa3f98dfe8950c7663d96b0b841fd.jpeg" alt="тепловентилятор мощность Инфракрасный тепловентилятор Neoclima HH10" title="тепловентилятор мощность Инфракрасный тепловентилятор Neoclima HH10 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/radiator-maslyanyy-timberk-tor-bt-i-2200r.php"><img src="photos/3b3d62d33b746ad7a881bc361403117a.jpeg" alt="тепловая пушка hintek Радиатор масляный Timberk TOR 21.2009 BT I" title="тепловая пушка hintek Радиатор масляный Timberk TOR 21.2009 BT I"></a><h2>Радиатор масляный Timberk TOR 21.2009 BT I</h2></li>
							<li><a href="http://klimattech.elitno.net/radiator-maslyanyy-timberk-tor-bt-i-2640r.php"><img src="photos/99ef9ae4a4cd441d53abfd05029990cd.jpeg" alt="вентилятор охлаждения не выключается Радиатор масляный Timberk TOR 21.2512 BT I" title="вентилятор охлаждения не выключается Радиатор масляный Timberk TOR 21.2512 BT I"></a><h2>Радиатор масляный Timberk TOR 21.2512 BT I</h2></li>
							<li><a href="http://klimattech.elitno.net/obogrevatel-ny-la-2200r.php"><img src="photos/1e9bd820ceef4e4f379c2ef8bfec1484.jpeg" alt="интернет магазин вентиляторов Обогреватель NY 25LA" title="интернет магазин вентиляторов Обогреватель NY 25LA"></a><h2>Обогреватель NY 25LA</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>тепловентилятор мощность Инфракрасный тепловентилятор Neoclima HH10</h1>
						<div class="tb"><p>Цена: от <span class="price">950</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_16472.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Инфракрасный тепловентилятор </b><b>Neoclima HH10</b> имеет механическое управление, три степени мощности и экономное энергопотребление, так как имеет галогеновый нагревательный элемент, который к тому же отличается высокой износоустойчивостью. Прибор оснащен защитой от перегрева и от опрокидывания, которая автоматически отключает тепловентилятор в случае его падения.</p><p><b>Технические характеристики</b>:</p><ul type=\disc\><li>управление: механическое </li><li>напряжение: 220 В </li><li>тип нагревательного элемента: галоген </li><li>мощность: 0.4/0.8/1.2 кВт </li><li>защита от перегрева </li><li>защита от опрокидывания </li><li>экономичность </li><li>функция вращения </li><li>три степени мощности </li></ul><p><b>Гарантия</b>: 1 год</p><p><b>Производитель</b>: Neoclima</p><p><b>Страна</b>: Китай</p> тепловентилятор мощность</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/30e3747ae57d55f1cc069b2c64e38e68.jpeg" alt="кондиционеры panasonic cs yw9mkd Термометр цифровой автомобильный RST, арт. 02178" title="кондиционеры panasonic cs yw9mkd Термометр цифровой автомобильный RST, арт. 02178"><div class="box"><a href="http://klimattech.elitno.net/termometr-cifrovoy-avtomobilnyy-rst-art-580r.php"><h3 class="title">кондиционеры panasonic cs yw9mkd Термометр цифровой автомобильный RST, арт. 02178</h3><p>от <span class="price">580</span> руб.</p></a></div></li>
						<li><img src="photos/6ce8f25c21488d1ca444328673c0a09c.jpeg" alt="метеостанции интернет магазин Погодная цифровая барометрическая  станция с радиодатчиком RST  Meteo Link, арт. 02555" title="метеостанции интернет магазин Погодная цифровая барометрическая  станция с радиодатчиком RST  Meteo Link, арт. 02555"><div class="box" page="pogodnaya-cifrovaya-barometricheskaya-stanciya-s-radiodatchikom-rst-meteo-link-art-2230r"><span class="title">метеостанции интернет магазин Погодная цифровая барометрическая  станция с радиодатчиком RST  Meteo Link, арт. 02555</span><p>от <span class="price">2230</span> руб.</p></div></li>
						<li><img src="photos/b5e41c2a0d829fc1efe57e1e63ba0ab3.jpeg" alt="установка кондиционеров харьков Обогреватель Бархатный сезон «Карета»" title="установка кондиционеров харьков Обогреватель Бархатный сезон «Карета»"><div class="box" page="obogrevatel-barhatnyy-sezon-«kareta»-880r"><span class="title">установка кондиционеров харьков Обогреватель Бархатный сезон «Карета»</span><p>от <span class="price">880</span> руб.</p></div></li>
						<li><img src="photos/1678b72db68c6229f134eb565404d6f9.jpeg" alt="газовые обогреватели для дома Обогреватель Бархатный сезон «Свечи»" title="газовые обогреватели для дома Обогреватель Бархатный сезон «Свечи»"><div class="box" page="obogrevatel-barhatnyy-sezon-«svechi»-880r"><span class="title">газовые обогреватели для дома Обогреватель Бархатный сезон «Свечи»</span><p>от <span class="price">880</span> руб.</p></div></li>
						<li class="large"><img src="photos/c677cbdf547effa33ccd59c33757d17d.jpeg" alt="осевой вентилятор купить Тепловая завеса Ballu BHC-3.000 SB" title="осевой вентилятор купить Тепловая завеса Ballu BHC-3.000 SB"><div class="box" page="teplovaya-zavesa-ballu-bhc-sb-3260r"><span class="title">осевой вентилятор купить Тепловая завеса Ballu BHC-3.000 SB</span><p>от <span class="price">3260</span> руб.</p></div></li>
						<li class="large"><img src="photos/4bdbf4fd5e302cc8f1510bfa80efbb12.jpeg" alt="кондиционер liebert hiross Очиститель-ионизатор воздуха Атмос Про" title="кондиционер liebert hiross Очиститель-ионизатор воздуха Атмос Про"><div class="box" page="ochistitelionizator-vozduha-atmos-pro-3460r"><span class="title">кондиционер liebert hiross Очиститель-ионизатор воздуха Атмос Про</span><p>от <span class="price">3460</span> руб.</p></div></li>
						<li class="large"><img src="photos/d3af6b5dff48e9808505bf8b2af62c8c.jpeg" alt="расчет мощности вентилятора Ультразвуковой увлажнитель Boneco Air-O-Swiss U7146" title="расчет мощности вентилятора Ультразвуковой увлажнитель Boneco Air-O-Swiss U7146"><div class="box" page="ultrazvukovoy-uvlazhnitel-boneco-airoswiss-u-1950r"><span class="title">расчет мощности вентилятора Ультразвуковой увлажнитель Boneco Air-O-Swiss U7146</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li><img src="photos/e6b9ca667e9f6c268da3303164b15850.jpeg" alt="трубопровод кондиционера Увлажнитель воздуха ультразвуковой Vitek VT-1761" title="трубопровод кондиционера Увлажнитель воздуха ультразвуковой Vitek VT-1761"><div class="box" page="uvlazhnitel-vozduha-ultrazvukovoy-vitek-vt-2250r"><span class="title">трубопровод кондиционера Увлажнитель воздуха ультразвуковой Vitek VT-1761</span><p>от <span class="price">2250</span> руб.</p></div></li>
						<li><img src="photos/99871b59fb87db622a27f7be8ddc2ca0.jpeg" alt="электрокамины декоративные Ультразвуковой увлажнитель воздуха Neoclima NHL-700E (Сенсор)" title="электрокамины декоративные Ультразвуковой увлажнитель воздуха Neoclima NHL-700E (Сенсор)"><div class="box" page="ultrazvukovoy-uvlazhnitel-vozduha-neoclima-nhle-sensor-4600r"><span class="title">электрокамины декоративные Ультразвуковой увлажнитель воздуха Neoclima NHL-700E (Сенсор)</span><p>от <span class="price">4600</span> руб.</p></div></li>
						<li><img src="photos/28872bf4a200912283403ccfcdb3c796.jpeg" alt="отзывы о кондиционерах Увлажнитель Atlanta АТН-160" title="отзывы о кондиционерах Увлажнитель Atlanta АТН-160"><div class="box" page="uvlazhnitel-atlanta-atn-700r"><span class="title">отзывы о кондиционерах Увлажнитель Atlanta АТН-160</span><p>от <span class="price">700</span> руб.</p></div></li>
						<li><img src="photos/5c11708815961fee7eed3b7791a7e12a.jpeg" alt="установка инфракрасных обогревателей Electrolux  EFP W - 1250RC Электрокамин настенный" title="установка инфракрасных обогревателей Electrolux  EFP W - 1250RC Электрокамин настенный"><div class="box" page="electrolux-efp-w-rc-elektrokamin-nastennyy-16330r"><span class="title">установка инфракрасных обогревателей Electrolux  EFP W - 1250RC Электрокамин настенный</span><p>от <span class="price">16330</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("infrakrasnyy-teploventilyator-neoclima-hh-950r.php", 0, -4); if (file_exists("comments/infrakrasnyy-teploventilyator-neoclima-hh-950r.php")) require_once "comments/infrakrasnyy-teploventilyator-neoclima-hh-950r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="infrakrasnyy-teploventilyator-neoclima-hh-950r.php" method="post" onsubmit="return checkForm(this)">
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