<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("konvektor-timberk-tece-m-1920r.php","установка кондиционеров видео");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("konvektor-timberk-tece-m-1920r.php", $nick, $comment);
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
		<title>установка кондиционеров видео Конвектор Timberk TEC.E1 M 500  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="установка кондиционеров видео, вентилятор для процессора, газовый проточный водонагреватель оазис, датчик включения вентилятора 2109, водонагреватели att, водонагреватели аристон 200, уличные обогреватели, инструкция кондиционер скачать, тепловая пушка дизельная аренда, водонагреватели в краснодаре, кондиционер моноблок, теплоотдача конвекторов, номера кондиционеров, обогреватель с вентилятором,  питание вентиляторов компьютера">
		<meta name="description" content="установка кондиционеров видео Timberk TEC.E1 M 500 – недорогой конвектор мощностью 500 Вт с механическим термо...">
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
						<a class="photo" href="photos/886814913ca344aa1df25dca152ec8f5.jpeg" title="установка кондиционеров видео Конвектор Timberk TEC.E1 M 500"><img src="photos/886814913ca344aa1df25dca152ec8f5.jpeg" alt="установка кондиционеров видео Конвектор Timberk TEC.E1 M 500" title="установка кондиционеров видео Конвектор Timberk TEC.E1 M 500 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/timberk-tgh-sm-gazovyy-obogrevatel-3350r.php"><img src="photos/f3246275eec08979f9b2a0c787db4136.jpeg" alt="вентилятор для процессора Timberk TGH 4200 SM1 Газовый обогреватель" title="вентилятор для процессора Timberk TGH 4200 SM1 Газовый обогреватель"></a><h2>Timberk TGH 4200 SM1 Газовый обогреватель</h2></li>
							<li><a href="http://klimattech.elitno.net/korotkovolnovyy-infrakrasnyy-obogrevatel-aeg-haustehnik-ir-premium-13900r.php"><img src="photos/9b91ead40e1020bdbe638fc731ab3293.jpeg" alt="газовый проточный водонагреватель оазис Коротковолновый инфракрасный обогреватель AEG Haustehnik IR Premium 1650" title="газовый проточный водонагреватель оазис Коротковолновый инфракрасный обогреватель AEG Haustehnik IR Premium 1650"></a><h2>Коротковолновый инфракрасный обогреватель AEG Haustehnik IR Premium 1650</h2></li>
							<li><a href="http://klimattech.elitno.net/radiator-maslyanyy-timberk-tor-hb-i-2640r.php"><img src="photos/6a5a186e2015259e98897a7fbd644ae5.jpeg" alt="датчик включения вентилятора 2109 Радиатор масляный Timberk TOR 21.2512 HB I" title="датчик включения вентилятора 2109 Радиатор масляный Timberk TOR 21.2512 HB I"></a><h2>Радиатор масляный Timberk TOR 21.2512 HB I</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>установка кондиционеров видео Конвектор Timberk TEC.E1 M 500</h1>
						<div class="tb"><p>Цена: от <span class="price">1920</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18165.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Timberk TEC.E1 M 500 – недорогой конвектор мощностью 500 Вт с механическим термостатом специально разработанный как экономичный вариант с минимальным использованием электронных плат управления. Но, не смотря на это, конвектор защищен от перегрева и совершенно безопасен в использовании. Он не накапливает пыль и не выжигает кислород, а высокий класс защиты от влаги IP24 позволяет использовать конвектор даже во влажных помещениях.</p><p><b>Характеристики:</b></p><ul type=disc><li>Напряжение-частота: 220-240/50 <li>Мощность: 500 Вт <li>Размеры с ножками: 540х340х330 </li></ul><p><b>Производитель: Швеция</b></p> установка кондиционеров видео</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/d177a5c37d485059f7f1413434f7f7ff.jpeg" alt="водонагреватели att Погодная станция Классика - тepмoмeтp, бapoмeтp ПогодникЪ, арт. 07391" title="водонагреватели att Погодная станция Классика - тepмoмeтp, бapoмeтp ПогодникЪ, арт. 07391"><div class="box" page="pogodnaya-stanciya-klassika-tepmometp-bapometp-pogodnik-art-1470r"><span class="title">водонагреватели att Погодная станция Классика - тepмoмeтp, бapoмeтp ПогодникЪ, арт. 07391</span><p>от <span class="price">1470</span> руб.</p></div></li>
						<li><img src="photos/99f5f4572be3577df15f74d4b197b54c.jpeg" alt="водонагреватели аристон 200 Цифровой термометр с радиодатчиком в стиле iPhone 4 RST 02251" title="водонагреватели аристон 200 Цифровой термометр с радиодатчиком в стиле iPhone 4 RST 02251"><div class="box" page="cifrovoy-termometr-s-radiodatchikom-v-stile-iphone-rst-1250r"><span class="title">водонагреватели аристон 200 Цифровой термометр с радиодатчиком в стиле iPhone 4 RST 02251</span><p>от <span class="price">1250</span> руб.</p></div></li>
						<li><img src="photos/b71fd8e694839d507d1ebf508f396381.jpeg" alt="уличные обогреватели Assistant AH-1971 Метеостанция" title="уличные обогреватели Assistant AH-1971 Метеостанция"><div class="box" page="assistant-ah-meteostanciya-1600r"><span class="title">уличные обогреватели Assistant AH-1971 Метеостанция</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li><img src="photos/5ab32c38a332cc62db91f2e9f8b78743.jpeg" alt="инструкция кондиционер скачать Assistant AH-1976 Метеостанция" title="инструкция кондиционер скачать Assistant AH-1976 Метеостанция"><div class="box" page="assistant-ah-meteostanciya-2370r"><span class="title">инструкция кондиционер скачать Assistant AH-1976 Метеостанция</span><p>от <span class="price">2370</span> руб.</p></div></li>
						<li class="large"><img src="photos/82995395f4c5b857d2a196e995f28a79.jpeg" alt="тепловая пушка дизельная аренда Тепловентилятор электрический напольный Timberk TFH T20FSN.PQ" title="тепловая пушка дизельная аренда Тепловентилятор электрический напольный Timberk TFH T20FSN.PQ"><div class="box" page="teploventilyator-elektricheskiy-napolnyy-timberk-tfh-tfsnpq-2650r"><span class="title">тепловая пушка дизельная аренда Тепловентилятор электрический напольный Timberk TFH T20FSN.PQ</span><p>от <span class="price">2650</span> руб.</p></div></li>
						<li class="large"><img src="photos/84494cd79e9ba1c8e97a5e697cbf2909.jpeg" alt="водонагреватели в краснодаре Керамический тепловентилятор Vitek VT-1734" title="водонагреватели в краснодаре Керамический тепловентилятор Vitek VT-1734"><div class="box" page="keramicheskiy-teploventilyator-vitek-vt-1290r"><span class="title">водонагреватели в краснодаре Керамический тепловентилятор Vitek VT-1734</span><p>от <span class="price">1290</span> руб.</p></div></li>
						<li class="large"><img src="photos/25043930107e9bee6e7f233a02c84477.jpeg" alt="кондиционер моноблок Тепловая пушка Ballu BPH-9.000C" title="кондиционер моноблок Тепловая пушка Ballu BPH-9.000C"><div class="box" page="teplovaya-pushka-ballu-bphc-6200r"><span class="title">кондиционер моноблок Тепловая пушка Ballu BPH-9.000C</span><p>от <span class="price">6200</span> руб.</p></div></li>
						<li><img src="photos/66e0aa1057db078ec30260e7078f7d70.jpeg" alt="теплоотдача конвекторов Очиститель воздуха Neoclima NAP" title="теплоотдача конвекторов Очиститель воздуха Neoclima NAP"><div class="box" page="ochistitel-vozduha-neoclima-nap-7000r"><span class="title">теплоотдача конвекторов Очиститель воздуха Neoclima NAP</span><p>от <span class="price">7000</span> руб.</p></div></li>
						<li><img src="photos/f08421488a7bd6f20d3e09733f279f3d.jpeg" alt="номера кондиционеров Уличный газовый обогреватель ITM Sunny 04" title="номера кондиционеров Уличный газовый обогреватель ITM Sunny 04"><div class="box" page="ulichnyy-gazovyy-obogrevatel-itm-sunny-23800r"><span class="title">номера кондиционеров Уличный газовый обогреватель ITM Sunny 04</span><p>от <span class="price">23800</span> руб.</p></div></li>
						<li><img src="photos/cad9340fab92aa85ffc59e5d750e5fa0.jpeg" alt="обогреватель с вентилятором Электрогрелка Beurer TM78" title="обогреватель с вентилятором Электрогрелка Beurer TM78"><div class="box" page="elektrogrelka-beurer-tm-1600r"><span class="title">обогреватель с вентилятором Электрогрелка Beurer TM78</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li><img src="photos/e549e1e5157223b3859f1431efac4165.jpeg" alt="конвекторы электрические форум Очаг Dimplex Cavendish" title="конвекторы электрические форум Очаг Dimplex Cavendish"><div class="box" page="ochag-dimplex-cavendish-55000r"><span class="title">конвекторы электрические форум Очаг Dimplex Cavendish</span><p>от <span class="price">55000</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("konvektor-timberk-tece-m-1920r.php", 0, -4); if (file_exists("comments/konvektor-timberk-tece-m-1920r.php")) require_once "comments/konvektor-timberk-tece-m-1920r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="konvektor-timberk-tece-m-1920r.php" method="post" onsubmit="return checkForm(this)">
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