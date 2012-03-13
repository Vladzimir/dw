<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("ulichnyy-gazovyy-obogrevatel-itm-sunny-23800r.php","конвектор или радиатор");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("ulichnyy-gazovyy-obogrevatel-itm-sunny-23800r.php", $nick, $comment);
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
		<title>конвектор или радиатор Уличный газовый обогреватель ITM Sunny 04  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="конвектор или радиатор, электро конвекторы отопления, вентиляторы для сушилок, scarlett инфракрасный обогреватель, водонагреватель electrolux ewh 50 centurio, монтаж и продажа кондиционеров, датчик температуры включения вентилятора, газовые обогреватели гии, как отключить вентилятор, обогреватели ветерок, кондиционер daikin инструкция, установка для заправки кондиционеров, заправка кондиционера цена, замена тена в водонагревателе,  компьютерный вентилятор">
		<meta name="description" content="конвектор или радиатор Газовый обогреватель от ITM серии Sunny 04 выполнен из нержавеющей стали и имеет...">
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
						<a class="photo" href="photos/f08421488a7bd6f20d3e09733f279f3d.jpeg" title="конвектор или радиатор Уличный газовый обогреватель ITM Sunny 04"><img src="photos/f08421488a7bd6f20d3e09733f279f3d.jpeg" alt="конвектор или радиатор Уличный газовый обогреватель ITM Sunny 04" title="конвектор или радиатор Уличный газовый обогреватель ITM Sunny 04 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/korotkovolnovyy-infrakrasnyy-obogrevatel-aeg-haustehnik-ir-premium-14500r.php"><img src="photos/c74e47e23d5ccda64c2ecf3f0a77dc13.jpeg" alt="электро конвекторы отопления Коротковолновый инфракрасный обогреватель AEG Haustehnik IR Premium 2000" title="электро конвекторы отопления Коротковолновый инфракрасный обогреватель AEG Haustehnik IR Premium 2000"></a><h2>Коротковолновый инфракрасный обогреватель AEG Haustehnik IR Premium 2000</h2></li>
							<li><a href="http://klimattech.elitno.net/konvektor-timberk-tec-mec-r-in-2960r.php"><img src="photos/2d71b2ffae7090c23fb721cd6e754cd8.jpeg" alt="вентиляторы для сушилок Конвектор Timberk TEC MEC R12.20 IN" title="вентиляторы для сушилок Конвектор Timberk TEC MEC R12.20 IN"></a><h2>Конвектор Timberk TEC MEC R12.20 IN</h2></li>
							<li><a href="http://klimattech.elitno.net/konvektor-elektricheskiy-timberk-tecps-le-2250r.php"><img src="photos/760071ee7145929fec75dc82c8e21e40.jpeg" alt="scarlett инфракрасный обогреватель Конвектор электрический Timberk TEC.PS2 LE" title="scarlett инфракрасный обогреватель Конвектор электрический Timberk TEC.PS2 LE"></a><h2>Конвектор электрический Timberk TEC.PS2 LE</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>конвектор или радиатор Уличный газовый обогреватель ITM Sunny 04</h1>
						<div class="tb"><p>Цена: от <span class="price">23800</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_16348.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Газовый обогреватель от ITM серии <b>Sunny 04</b> выполнен из нержавеющей стали и имеет современный эргономичный дизайн. Модель можно использовать для создания комфортной температуры в уличных кафе, на открытых верандах и в других подобных местах.</p><p>Устройство охватывает площадь до 28 м<sup>2</sup> в диаметре 6 метров вокруг себя. Среди его достоинств также можно отметить наличие пьезорозжига и плавной регулировкой мощности. Для работы обогревателя необходим газовый баллон на 27л, заправленный пропаном.</p><p><b>Особенности:</b></p><ul type=disc><li>Корпус: окрашенный металл <li>Газовый шланг: есть <li>Камера сгорания: нерж. сталь <li>Редуктор: есть <li>Пьезорозжиг: есть <li>Регулировка мощности: есть <li>При уличной температуре воздуха +10°С обогреватель способен обеспечить ощущаемую температуру до + 25°С вокруг себя <li>Необходим стандартный 27 литровый бытовой газовый баллон, заправленный пропаном</li></ul><p><b>Характеристики:</b></p><ul type=disc><li>Тип: инфракрасный газовый нагреватель <li>Производительность: 5-12 кВт <li>Расход газа: 0,35-0,85 кг/час <li>Топливо: сжиженный баллонный газ (пропан) <li>Объем газового баллона: 27 л <li>Размеры (ДхШхВ): отражатель 95 см/основание 80 см/высота 22,5 см <li>Вес: 17 кг </li></ul><p><b>Производитель:</b> ITM.</p><p><b>Страна:</b> Италия.</p><p><b>Гарантия:</b> 1 год.</p> конвектор или радиатор</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/e1065c959ee5e044b7f65dfc9d025d14.jpeg" alt="водонагреватель electrolux ewh 50 centurio Гигрометр Boneco (механ.) 7057" title="водонагреватель electrolux ewh 50 centurio Гигрометр Boneco (механ.) 7057"><div class="box" page="gigrometr-boneco-mehan-220r"><span class="title">водонагреватель electrolux ewh 50 centurio Гигрометр Boneco (механ.) 7057</span><p>от <span class="price">220</span> руб.</p></div></li>
						<li><img src="photos/84d53e881ff01839a6cd783e68cc4672.jpeg" alt="монтаж и продажа кондиционеров Тепловентилятор настенный Timberk TFH W200.NN" title="монтаж и продажа кондиционеров Тепловентилятор настенный Timberk TFH W200.NN"><div class="box" page="teploventilyator-nastennyy-timberk-tfh-wnn-1850r"><span class="title">монтаж и продажа кондиционеров Тепловентилятор настенный Timberk TFH W200.NN</span><p>от <span class="price">1850</span> руб.</p></div></li>
						<li><img src="photos/d91d9d3ad2e81814b03a2fc1dcb09a05.jpeg" alt="датчик температуры включения вентилятора Тепловентилятор электрический напольный Timberk TFH T20FSN.SQ" title="датчик температуры включения вентилятора Тепловентилятор электрический напольный Timberk TFH T20FSN.SQ"><div class="box" page="teploventilyator-elektricheskiy-napolnyy-timberk-tfh-tfsnsq-1890r"><span class="title">датчик температуры включения вентилятора Тепловентилятор электрический напольный Timberk TFH T20FSN.SQ</span><p>от <span class="price">1890</span> руб.</p></div></li>
						<li><img src="photos/792201d3e2f79a8dc6ba14e6ea302138.jpeg" alt="газовые обогреватели гии Климатический комплекс Boneco Air-O-Swiss 2071" title="газовые обогреватели гии Климатический комплекс Boneco Air-O-Swiss 2071"><div class="box" page="klimaticheskiy-kompleks-boneco-airoswiss-18300r"><span class="title">газовые обогреватели гии Климатический комплекс Boneco Air-O-Swiss 2071</span><p>от <span class="price">18300</span> руб.</p></div></li>
						<li class="large"><img src="photos/8ed3b3f7fabf8b6c841acf2dff5bea4a.jpeg" alt="как отключить вентилятор Комбайн воздуха ZENET BS-188AE-CW" title="как отключить вентилятор Комбайн воздуха ZENET BS-188AE-CW"><div class="box" page="kombayn-vozduha-zenet-bsaecw-8950r"><span class="title">как отключить вентилятор Комбайн воздуха ZENET BS-188AE-CW</span><p>от <span class="price">8950</span> руб.</p></div></li>
						<li class="large"><img src="photos/70ff9e86256306e32dffb6a5f1466008.jpeg" alt="обогреватели ветерок Очиститель-увлажнитель воздуха Атмос Аква-800" title="обогреватели ветерок Очиститель-увлажнитель воздуха Атмос Аква-800"><div class="box" page="ochistiteluvlazhnitel-vozduha-atmos-akva-1950r"><span class="title">обогреватели ветерок Очиститель-увлажнитель воздуха Атмос Аква-800</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li class="large"><img src="photos/d29c59aaa8ad70bf5ff7debb5b3ff7d5.jpeg" alt="кондиционер daikin инструкция Очиститель воздуха Ballu AP-430 F7" title="кондиционер daikin инструкция Очиститель воздуха Ballu AP-430 F7"><div class="box" page="ochistitel-vozduha-ballu-ap-f-7950r"><span class="title">кондиционер daikin инструкция Очиститель воздуха Ballu AP-430 F7</span><p>от <span class="price">7950</span> руб.</p></div></li>
						<li><img src="photos/fc4528fada09a576c10fd01202d9b5c1.jpeg" alt="установка для заправки кондиционеров Увлажнитель воздуха ультразвуковой Атмос 2728" title="установка для заправки кондиционеров Увлажнитель воздуха ультразвуковой Атмос 2728"><div class="box" page="uvlazhnitel-vozduha-ultrazvukovoy-atmos-5900r"><span class="title">установка для заправки кондиционеров Увлажнитель воздуха ультразвуковой Атмос 2728</span><p>от <span class="price">5900</span> руб.</p></div></li>
						<li><img src="photos/e7e905bc6a32503c02bab2534a7c54ae.jpeg" alt="заправка кондиционера цена Электрический жилет ИНКОР размером 40х70 см (мощность 60Вт)" title="заправка кондиционера цена Электрический жилет ИНКОР размером 40х70 см (мощность 60Вт)"><div class="box" page="elektricheskiy-zhilet-inkor-razmerom-h-sm-moschnost-vt-900r"><span class="title">заправка кондиционера цена Электрический жилет ИНКОР размером 40х70 см (мощность 60Вт)</span><p>от <span class="price">900</span> руб.</p></div></li>
						<li><img src="photos/ee214e8a486337315ca1c1084cd1f3dd.jpeg" alt="замена тена в водонагревателе Камин Комплект Dimplex Mozart Black DELUXE" title="замена тена в водонагревателе Камин Комплект Dimplex Mozart Black DELUXE"><div class="box" page="kamin-komplekt-dimplex-mozart-black-deluxe-22223r"><span class="title">замена тена в водонагревателе Камин Комплект Dimplex Mozart Black DELUXE</span><p>от <span class="price">22223</span> руб.</p></div></li>
						<li><img src="photos/2bd1980a72871036d26bc3eed4104d46.jpeg" alt="водонагреватели baxi Камин Комплект Dimplex Milan CFP 3873C" title="водонагреватели baxi Камин Комплект Dimplex Milan CFP 3873C"><div class="box" page="kamin-komplekt-dimplex-milan-cfp-c-26605r"><span class="title">водонагреватели baxi Камин Комплект Dimplex Milan CFP 3873C</span><p>от <span class="price">26605</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("ulichnyy-gazovyy-obogrevatel-itm-sunny-23800r.php", 0, -4); if (file_exists("comments/ulichnyy-gazovyy-obogrevatel-itm-sunny-23800r.php")) require_once "comments/ulichnyy-gazovyy-obogrevatel-itm-sunny-23800r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="ulichnyy-gazovyy-obogrevatel-itm-sunny-23800r.php" method="post" onsubmit="return checkForm(this)">
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