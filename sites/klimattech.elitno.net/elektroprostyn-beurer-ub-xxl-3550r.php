<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("elektroprostyn-beurer-ub-xxl-3550r.php","кондиционер для собак");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("elektroprostyn-beurer-ub-xxl-3550r.php", $nick, $comment);
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
		<title>кондиционер для собак Электропростынь Beurer UB66 XXL  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="кондиционер для собак, холодильный вентилятор, скачать dvd конвектор, водонагреватель накопительный 100, водонагреватели аристон 100, вентилятор печки шевроле нива, стоимость монтажа кондиционера, газовые обогреватели для дома, как отключить кондиционер, тепловентиляторы general, отзывы о кондиционерах, вентилятор ваз 21102, куплю кондиционер lg, сервисный центр кондиционеров,  водонагреватели в новосибирске">
		<meta name="description" content="кондиционер для собак На двуспальную электрическую простыню Beurer UB66 XXL в холодные времена года на...">
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
						<a class="photo" href="photos/e5d5736b1cf5d0f507d0fcef99fde190.jpeg" title="кондиционер для собак Электропростынь Beurer UB66 XXL"><img src="photos/e5d5736b1cf5d0f507d0fcef99fde190.jpeg" alt="кондиционер для собак Электропростынь Beurer UB66 XXL" title="кондиционер для собак Электропростынь Beurer UB66 XXL -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/kondicioner-mobilnyy-timberk-ac-tim-h-p-27300r.php"><img src="photos/3b0b3a04248aa9404f4791e383647212.jpeg" alt="холодильный вентилятор Кондиционер мобильный Timberk AC TIM 12H P1" title="холодильный вентилятор Кондиционер мобильный Timberk AC TIM 12H P1"></a><h2>Кондиционер мобильный Timberk AC TIM 12H P1</h2></li>
							<li><a href="http://klimattech.elitno.net/kondicioner-ballu-bsgh-24180r.php"><img src="photos/2599294d2213c14ab14e0ed6c32724a2.jpeg" alt="скачать dvd конвектор Кондиционер Ballu BSG-18H" title="скачать dvd конвектор Кондиционер Ballu BSG-18H"></a><h2>Кондиционер Ballu BSG-18H</h2></li>
							<li><a href="http://klimattech.elitno.net/maslyanyy-radiator-timberk-tor-rr-2480r.php"><img src="photos/79514781a11ae1df868b3cf1ab95da61.jpeg" alt="водонагреватель накопительный 100 Масляный радиатор Timberk TOR 31.2309 RR" title="водонагреватель накопительный 100 Масляный радиатор Timberk TOR 31.2309 RR"></a><h2>Масляный радиатор Timberk TOR 31.2309 RR</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>кондиционер для собак Электропростынь Beurer UB66 XXL</h1>
						<div class="tb"><p>Цена: от <span class="price">3550</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_827.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>На двуспальную <strong>электрическую простыню Beurer UB66 XXL</strong> в холодные времена года наложена двойная нагрузка – она согревает двоих человек. Кроме этого вы можете регулировать зоны тепла. Это актуально, например, при желании согреть только ноги или при застуженной спине. Три температурных режима <strong>простыни Beurer UB66 XXL </strong>позволяют выбирать оптимальный режим, который отталкивается от температуры человеческого тела. Кроме того, она не требует особого ухода, благодаря съемному питающему кабелю ее можно стирать в стиральной машине.</p><p><strong>Особенности: </strong></p><ul type=disc><li>3 температурных режима, отдельно для каждой половины <li>Материал – флис <li>Индикатор сети <li>Машинная стирка, <li>BSS-система защиты Beurer </li></ul><p><b>Техническая характеристика:</b></p><ul type=disc><li>Съемный сетевой кабель 2х60 Ватт <li>Размер (двуспальная) 150х140 см</li></ul><p><strong>В комплект входит: </strong>основное устройство, инструкция</p><p><strong>Производитель:</strong> Beurer (Германия)</p><p><strong>Гарантия: </strong>1 год</p> кондиционер для собак</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/bc1daaf95eee8347567dc4da1715dd67.jpeg" alt="водонагреватели аристон 100 Масляный обогреватель  Atlanta АТН-2002" title="водонагреватели аристон 100 Масляный обогреватель  Atlanta АТН-2002"><div class="box" page="maslyanyy-obogrevatel-atlanta-atn-1920r"><span class="title">водонагреватели аристон 100 Масляный обогреватель  Atlanta АТН-2002</span><p>от <span class="price">1920</span> руб.</p></div></li>
						<li><img src="photos/61545de486a23a298d9b80e7b1e02ec9.jpeg" alt="вентилятор печки шевроле нива Термометр рамный RST 01588" title="вентилятор печки шевроле нива Термометр рамный RST 01588"><div class="box" page="termometr-ramnyy-rst-555r"><span class="title">вентилятор печки шевроле нива Термометр рамный RST 01588</span><p>от <span class="price">555</span> руб.</p></div></li>
						<li><img src="photos/046459716f1e2eb91fd049e2bc31557f.jpeg" alt="стоимость монтажа кондиционера Обогреватель Бархатный сезон «Канделябр»" title="стоимость монтажа кондиционера Обогреватель Бархатный сезон «Канделябр»"><div class="box" page="obogrevatel-barhatnyy-sezon-«kandelyabr»-880r"><span class="title">стоимость монтажа кондиционера Обогреватель Бархатный сезон «Канделябр»</span><p>от <span class="price">880</span> руб.</p></div></li>
						<li><img src="photos/1678b72db68c6229f134eb565404d6f9.jpeg" alt="газовые обогреватели для дома Обогреватель Бархатный сезон «Свечи»" title="газовые обогреватели для дома Обогреватель Бархатный сезон «Свечи»"><div class="box" page="obogrevatel-barhatnyy-sezon-«svechi»-880r"><span class="title">газовые обогреватели для дома Обогреватель Бархатный сезон «Свечи»</span><p>от <span class="price">880</span> руб.</p></div></li>
						<li class="large"><img src="photos/fb71fae84286fa13a81ea955b641c318.jpeg" alt="как отключить кондиционер Очиститель-увлажнитель воздуха Атмос Аква-1800" title="как отключить кондиционер Очиститель-увлажнитель воздуха Атмос Аква-1800"><div class="box" page="ochistiteluvlazhnitel-vozduha-atmos-akva-3790r"><span class="title">как отключить кондиционер Очиститель-увлажнитель воздуха Атмос Аква-1800</span><p>от <span class="price">3790</span> руб.</p></div></li>
						<li class="large"><img src="photos/78cf450aaf518a285299c3f675bf935d.jpeg" alt="тепловентиляторы general Очиститель воздуха многофункциональный Атмос Макси-112" title="тепловентиляторы general Очиститель воздуха многофункциональный Атмос Макси-112"><div class="box" page="ochistitel-vozduha-mnogofunkcionalnyy-atmos-maksi-11350r"><span class="title">тепловентиляторы general Очиститель воздуха многофункциональный Атмос Макси-112</span><p>от <span class="price">11350</span> руб.</p></div></li>
						<li class="large"><img src="photos/2415c05e4acf4aa843d9dc13c0afc174.jpeg" alt="отзывы о кондиционерах Очиститель воздуха Атмос Вент 1003" title="отзывы о кондиционерах Очиститель воздуха Атмос Вент 1003"><div class="box" page="ochistitel-vozduha-atmos-vent-4590r"><span class="title">отзывы о кондиционерах Очиститель воздуха Атмос Вент 1003</span><p>от <span class="price">4590</span> руб.</p></div></li>
						<li><img src="photos/13c365abeb3c53f68e792acf11131b89.jpeg" alt="вентилятор ваз 21102 Мойка воздуха Electrolux EHAW 6515" title="вентилятор ваз 21102 Мойка воздуха Electrolux EHAW 6515"><div class="box" page="moyka-vozduha-electrolux-ehaw-12750r"><span class="title">вентилятор ваз 21102 Мойка воздуха Electrolux EHAW 6515</span><p>от <span class="price">12750</span> руб.</p></div></li>
						<li><img src="photos/b4d60a1b9f36ab7cab1be4d322ed6539.jpeg" alt="куплю кондиционер lg Ультразвуковой увлажнитель Boneco Air-O-Swiss U600" title="куплю кондиционер lg Ультразвуковой увлажнитель Boneco Air-O-Swiss U600"><div class="box" page="ultrazvukovoy-uvlazhnitel-boneco-airoswiss-u-6330r"><span class="title">куплю кондиционер lg Ультразвуковой увлажнитель Boneco Air-O-Swiss U600</span><p>от <span class="price">6330</span> руб.</p></div></li>
						<li><img src="photos/395c26d925753d52d47567573a219548.jpeg" alt="сервисный центр кондиционеров Камин Комплект Dimplex Toronto угл+фронт CFP3902BW" title="сервисный центр кондиционеров Камин Комплект Dimplex Toronto угл+фронт CFP3902BW"><div class="box" page="kamin-komplekt-dimplex-toronto-uglfront-cfpbw-29109r"><span class="title">сервисный центр кондиционеров Камин Комплект Dimplex Toronto угл+фронт CFP3902BW</span><p>от <span class="price">29109</span> руб.</p></div></li>
						<li><img src="photos/72bc50c1d64423e85ecfe64af3ba880f.jpeg" alt="как подобрать вентилятор Камин Классический очаг Dimplex Horton Black" title="как подобрать вентилятор Камин Классический очаг Dimplex Horton Black"><div class="box" page="kamin-klassicheskiy-ochag-dimplex-horton-black-17685r"><span class="title">как подобрать вентилятор Камин Классический очаг Dimplex Horton Black</span><p>от <span class="price">17685</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("elektroprostyn-beurer-ub-xxl-3550r.php", 0, -4); if (file_exists("comments/elektroprostyn-beurer-ub-xxl-3550r.php")) require_once "comments/elektroprostyn-beurer-ub-xxl-3550r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="elektroprostyn-beurer-ub-xxl-3550r.php" method="post" onsubmit="return checkForm(this)">
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