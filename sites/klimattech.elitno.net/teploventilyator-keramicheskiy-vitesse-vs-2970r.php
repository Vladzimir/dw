<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("teploventilyator-keramicheskiy-vitesse-vs-2970r.php","тепловентилятор макар");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("teploventilyator-keramicheskiy-vitesse-vs-2970r.php", $nick, $comment);
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
		<title>тепловентилятор макар Тепловентилятор керамический Vitesse VS-881  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="тепловентилятор макар, комплектация кондиционера, кондиционер для стирки, кондиционер калина купить, silent канальный вентилятор, маркировка вентиляторов, датчик температуры включения вентилятора, видео конвектор скачать торрент, регулятор оборотов вентилятора, кондиционер daikin инструкция, купить инверторный кондиционер, инструкция дизельная тепловая пушка, производители тепловых пушек, газовый конвектор принцип работы,  ремонт электрических водонагревателей">
		<meta name="description" content="тепловентилятор макар Стильный керамический тепловентилятор Vitesse VS-881 с  электронным дисплеем и п...">
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
						<a class="photo" href="photos/db962f688bccf711071d0d6ec827ae46.jpeg" title="тепловентилятор макар Тепловентилятор керамический Vitesse VS-881"><img src="photos/db962f688bccf711071d0d6ec827ae46.jpeg" alt="тепловентилятор макар Тепловентилятор керамический Vitesse VS-881" title="тепловентилятор макар Тепловентилятор керамический Vitesse VS-881 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/karbonovyy-obogrevatel-mega-max-mh-r-2950r.php"><img src="photos/99ed66418716ef7bad7c268317c699d0.jpeg" alt="комплектация кондиционера Карбоновый обогреватель Mega Max MH 9100R" title="комплектация кондиционера Карбоновый обогреватель Mega Max MH 9100R"></a><h2>Карбоновый обогреватель Mega Max MH 9100R</h2></li>
							<li><a href="http://klimattech.elitno.net/maslyanyy-radiator-timberk-tor-er-i-1890r.php"><img src="photos/e2e13802c527e7b1f21c89052f28c59e.jpeg" alt="кондиционер для стирки Масляный радиатор Timberk  TOR 21.1206 ER I" title="кондиционер для стирки Масляный радиатор Timberk  TOR 21.1206 ER I"></a><h2>Масляный радиатор Timberk  TOR 21.1206 ER I</h2></li>
							<li><a href="http://klimattech.elitno.net/assistant-ah-meteostanciya-2100r.php"><img src="photos/8083c71208f25517314b09f05cf4c1a4.jpeg" alt="кондиционер калина купить Assistant AH-1990 Метеостанция" title="кондиционер калина купить Assistant AH-1990 Метеостанция"></a><h2>Assistant AH-1990 Метеостанция</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>тепловентилятор макар Тепловентилятор керамический Vitesse VS-881</h1>
						<div class="tb"><p>Цена: от <span class="price">2970</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19727.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Стильный керамический тепловентилятор Vitesse VS-881 с  электронным дисплеем и пультом управления. Мощность модели – 1800Вт, оснащен  регулировкой температуры, таймером, вентиляцией без нагрева, удобной ручкой для  переноса, исключительно безопасен: автоматически отключается при перегреве или  опрокидывании.</p><p><strong>Характеристики:</strong></p><ul type=\disc\><li>Уровни  мощности 1800/900 Вт;</li><li>Регулировка  мощности;</li><li>Тип  нагревательного элемента: керамический нагреватель;</li><li>Вентилятор;</li><li>Вентиляция без нагрева;</li><li>Поворот корпуса, угол поворота 90°;</li><li>Управление:</li><ul type=\circle\><li>дисплей;</li><li>пульт  ДУ;</li></ul><li>Регулировка  температуры;</li><li>Выключатель со световым индикатором;</li><li>Таймер:  7.5 ч;</li><li>Вариант  монтажа: напольный;</li><li>Отключение  при перегреве;</li><li>Отключение  при опрокидывании;</li></ul><p><strong>Производитель: КНР</strong><br><strong>Гарантия: 1 год</strong></p> тепловентилятор макар</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/b5fd51a19760d14477030f4e11efdd42.jpeg" alt="silent канальный вентилятор Инфракрасный тепловентилятор Neoclima HH11 A" title="silent канальный вентилятор Инфракрасный тепловентилятор Neoclima HH11 A"><div class="box" page="infrakrasnyy-teploventilyator-neoclima-hh-a-1500r"><span class="title">silent канальный вентилятор Инфракрасный тепловентилятор Neoclima HH11 A</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li><img src="photos/069f9035158c301188c327ecd3113c46.jpeg" alt="маркировка вентиляторов Тепловентилятор электрический напольный Timberk TFH T20FSH.LX" title="маркировка вентиляторов Тепловентилятор электрический напольный Timberk TFH T20FSH.LX"><div class="box" page="teploventilyator-elektricheskiy-napolnyy-timberk-tfh-tfshlx-3120r"><span class="title">маркировка вентиляторов Тепловентилятор электрический напольный Timberk TFH T20FSH.LX</span><p>от <span class="price">3120</span> руб.</p></div></li>
						<li><img src="photos/d91d9d3ad2e81814b03a2fc1dcb09a05.jpeg" alt="датчик температуры включения вентилятора Тепловентилятор электрический напольный Timberk TFH T20FSN.SQ" title="датчик температуры включения вентилятора Тепловентилятор электрический напольный Timberk TFH T20FSN.SQ"><div class="box" page="teploventilyator-elektricheskiy-napolnyy-timberk-tfh-tfsnsq-1890r"><span class="title">датчик температуры включения вентилятора Тепловентилятор электрический напольный Timberk TFH T20FSN.SQ</span><p>от <span class="price">1890</span> руб.</p></div></li>
						<li><img src="photos/9ede98e92ae59e358c17a02074f2f610.jpeg" alt="видео конвектор скачать торрент Картридж с ионно-обменной смолой Neoclima LIF 007" title="видео конвектор скачать торрент Картридж с ионно-обменной смолой Neoclima LIF 007"><div class="box" page="kartridzh-s-ionnoobmennoy-smoloy-neoclima-lif-280r"><span class="title">видео конвектор скачать торрент Картридж с ионно-обменной смолой Neoclima LIF 007</span><p>от <span class="price">280</span> руб.</p></div></li>
						<li class="large"><img src="photos/074272158896d057ebc207b2af80ccbd.jpeg" alt="регулятор оборотов вентилятора Очиститель воздуха Ballu AP-420 F7" title="регулятор оборотов вентилятора Очиститель воздуха Ballu AP-420 F7"><div class="box" page="ochistitel-vozduha-ballu-ap-f-6450r-2"><span class="title">регулятор оборотов вентилятора Очиститель воздуха Ballu AP-420 F7</span><p>от <span class="price">6450</span> руб.</p></div></li>
						<li class="large"><img src="photos/d29c59aaa8ad70bf5ff7debb5b3ff7d5.jpeg" alt="кондиционер daikin инструкция Очиститель воздуха Ballu AP-430 F7" title="кондиционер daikin инструкция Очиститель воздуха Ballu AP-430 F7"><div class="box" page="ochistitel-vozduha-ballu-ap-f-7950r"><span class="title">кондиционер daikin инструкция Очиститель воздуха Ballu AP-430 F7</span><p>от <span class="price">7950</span> руб.</p></div></li>
						<li class="large"><img src="photos/ef9e7c5df7ec21b4f4f06558964e3c1a.jpeg" alt="купить инверторный кондиционер Электрогрелка для ног  Beurer FW20" title="купить инверторный кондиционер Электрогрелка для ног  Beurer FW20"><div class="box" page="elektrogrelka-dlya-nog-beurer-fw-1800r"><span class="title">купить инверторный кондиционер Электрогрелка для ног  Beurer FW20</span><p>от <span class="price">1800</span> руб.</p></div></li>
						<li><img src="photos/419ba861e53a11edf36e396df32b2bdf.jpeg" alt="инструкция дизельная тепловая пушка Электрогрелка Beurer HK25" title="инструкция дизельная тепловая пушка Электрогрелка Beurer HK25"><div class="box" page="elektrogrelka-beurer-hk-1250r"><span class="title">инструкция дизельная тепловая пушка Электрогрелка Beurer HK25</span><p>от <span class="price">1250</span> руб.</p></div></li>
						<li><img src="photos/3e8a57741f40686130cce0e9aee445a3.png" alt="производители тепловых пушек Электрический матрац ИНКОР (мощность 30 и 60 Вт) 145х75 см" title="производители тепловых пушек Электрический матрац ИНКОР (мощность 30 и 60 Вт) 145х75 см"><div class="box" page="elektricheskiy-matrac-inkor-moschnost-i-vt-h-sm-1000r"><span class="title">производители тепловых пушек Электрический матрац ИНКОР (мощность 30 и 60 Вт) 145х75 см</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li><img src="photos/762fe07a49c5c6da0289dc8a7e721d0e.jpeg" alt="газовый конвектор принцип работы Камин Классический очаг Dimplex Kansas Black" title="газовый конвектор принцип работы Камин Классический очаг Dimplex Kansas Black"><div class="box" page="kamin-klassicheskiy-ochag-dimplex-kansas-black-8921r"><span class="title">газовый конвектор принцип работы Камин Классический очаг Dimplex Kansas Black</span><p>от <span class="price">8921</span> руб.</p></div></li>
						<li><img src="photos/e54b9857f46cfbd9b11c8676b8c1a816.jpeg" alt="вентилятор охлаждения не выключается Электропростынь Microlife FH 422" title="вентилятор охлаждения не выключается Электропростынь Microlife FH 422"><div class="box" page="elektroprostyn-microlife-fh-3790r"><span class="title">вентилятор охлаждения не выключается Электропростынь Microlife FH 422</span><p>от <span class="price">3790</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("teploventilyator-keramicheskiy-vitesse-vs-2970r.php", 0, -4); if (file_exists("comments/teploventilyator-keramicheskiy-vitesse-vs-2970r.php")) require_once "comments/teploventilyator-keramicheskiy-vitesse-vs-2970r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="teploventilyator-keramicheskiy-vitesse-vs-2970r.php" method="post" onsubmit="return checkForm(this)">
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