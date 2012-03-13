<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("teploventilyator-vitek-vtgy-950r.php","принцип работы тепловой пушки");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("teploventilyator-vitek-vtgy-950r.php", $nick, $comment);
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
		<title>принцип работы тепловой пушки Тепловентилятор Vitek VT-1735GY  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="принцип работы тепловой пушки, тепловые пушки ростов, кондиционеры владивосток, вентиляторы для котлов, инфракрасные обогреватели для теплиц, датчик вентилятора ваз 2114, газовые обогреватели для дома, водонагреватель садко, scarlett инфракрасный обогреватель, инфракрасные обогреватели уличные, кондиционеры на холод, козырек для кондиционера, вентилятор glacialtech igloo, установка кондиционера зимой,  тепловые пушки хабаровск">
		<meta name="description" content="принцип работы тепловой пушки Компактный Тепловентилятор Vitek VT-1735GY белого цвета и привлекательного дизай...">
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
						<a class="photo" href="photos/051d7dedae25fb49a0d213f9e7739d36.jpeg" title="принцип работы тепловой пушки Тепловентилятор Vitek VT-1735GY"><img src="photos/051d7dedae25fb49a0d213f9e7739d36.jpeg" alt="принцип работы тепловой пушки Тепловентилятор Vitek VT-1735GY" title="принцип работы тепловой пушки Тепловентилятор Vitek VT-1735GY -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-timberk-swh-fs-v-10700r.php"><img src="photos/a907bd478b36ebf61ebf8752aef5a2f8.jpeg" alt="тепловые пушки ростов Водонагреватель Timberk SWH FS3 80 V" title="тепловые пушки ростов Водонагреватель Timberk SWH FS3 80 V"></a><h2>Водонагреватель Timberk SWH FS3 80 V</h2></li>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-neoclima-ewh-3600r.php"><img src="photos/4a1622af2fb6c2a36801dd777d58d197.jpeg" alt="кондиционеры владивосток Водонагреватель Neoclima EWH 15" title="кондиционеры владивосток Водонагреватель Neoclima EWH 15"></a><h2>Водонагреватель Neoclima EWH 15</h2></li>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-neoclima-slim-5100r.php"><img src="photos/b5805207523553ebd0ca1ec4544614a2.jpeg" alt="вентиляторы для котлов Водонагреватель Neoclima Slim 30" title="вентиляторы для котлов Водонагреватель Neoclima Slim 30"></a><h2>Водонагреватель Neoclima Slim 30</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>принцип работы тепловой пушки Тепловентилятор Vitek VT-1735GY</h1>
						<div class="tb"><p>Цена: от <span class="price">950</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18456.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Компактный Тепловентилятор Vitek VT-1735GY белого цвета и привлекательного дизайна мощностью в 2000Вт согреет своим теплом комнату до 20м2. <br>В наличии два температурных режима, термостат, защита от перегрева.</p><p><strong>Характеристики:</strong> <strong></strong></p><ul type=disc><li>Мощность 2000Вт; <li>2-позиционный переключатель нагрева (800/2000 Вт); <li>Площадь обогрева до 20 м2; <li>Режим \Только вентилятор\; <li>Регулируемый термостат; <li>Защита от перегрева; <li>Индикаторы работы; <li>Электропитание 220-240 В, ~ 50 Гц. </li></ul><p><strong>Производитель: Vitek (Россия)</strong><br><strong>Гарантия: 1 год</strong></p> принцип работы тепловой пушки</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/df88674debddbba6547d083f5d9d509a.jpeg" alt="инфракрасные обогреватели для теплиц Водонагреватель Neoclima Slim 50" title="инфракрасные обогреватели для теплиц Водонагреватель Neoclima Slim 50"><div class="box" page="vodonagrevatel-neoclima-slim-6350r"><span class="title">инфракрасные обогреватели для теплиц Водонагреватель Neoclima Slim 50</span><p>от <span class="price">6350</span> руб.</p></div></li>
						<li><img src="photos/19a68e8aaac1488b247429400fdfd8f4.jpeg" alt="датчик вентилятора ваз 2114 Радиатор масляный Timberk TOR 51.2509 EZ I" title="датчик вентилятора ваз 2114 Радиатор масляный Timberk TOR 51.2509 EZ I"><div class="box" page="radiator-maslyanyy-timberk-tor-ez-i-3350r"><span class="title">датчик вентилятора ваз 2114 Радиатор масляный Timberk TOR 51.2509 EZ I</span><p>от <span class="price">3350</span> руб.</p></div></li>
						<li><img src="photos/1678b72db68c6229f134eb565404d6f9.jpeg" alt="газовые обогреватели для дома Обогреватель Бархатный сезон «Свечи»" title="газовые обогреватели для дома Обогреватель Бархатный сезон «Свечи»"><div class="box" page="obogrevatel-barhatnyy-sezon-«svechi»-880r"><span class="title">газовые обогреватели для дома Обогреватель Бархатный сезон «Свечи»</span><p>от <span class="price">880</span> руб.</p></div></li>
						<li><img src="photos/67084118d5753838baadc3c476e16214.jpeg" alt="водонагреватель садко Тепловентилятор Neoclima FH-15" title="водонагреватель садко Тепловентилятор Neoclima FH-15"><div class="box" page="teploventilyator-neoclima-fh-700r"><span class="title">водонагреватель садко Тепловентилятор Neoclima FH-15</span><p>от <span class="price">700</span> руб.</p></div></li>
						<li class="large"><img src="photos/a917aa3905e6fd88abcea6eeb0319427.jpeg" alt="scarlett инфракрасный обогреватель Керамический тепловентилятор Vitek VT-1759" title="scarlett инфракрасный обогреватель Керамический тепловентилятор Vitek VT-1759"><div class="box" page="keramicheskiy-teploventilyator-vitek-vt-1380r"><span class="title">scarlett инфракрасный обогреватель Керамический тепловентилятор Vitek VT-1759</span><p>от <span class="price">1380</span> руб.</p></div></li>
						<li class="large"><img src="photos/3476d3b7ddc26fb658316c5d977212a7.jpeg" alt="инфракрасные обогреватели уличные Тепловентилятор конвекторный Vitek VT-2141" title="инфракрасные обогреватели уличные Тепловентилятор конвекторный Vitek VT-2141"><div class="box" page="teploventilyator-konvektornyy-vitek-vt-2930r"><span class="title">инфракрасные обогреватели уличные Тепловентилятор конвекторный Vitek VT-2141</span><p>от <span class="price">2930</span> руб.</p></div></li>
						<li class="large"><img src="photos/040ec11d51cb385fda44e4f5e4e3d7d4.jpeg" alt="кондиционеры на холод Очиститель-ионизатор воздуха Атмос HG-504" title="кондиционеры на холод Очиститель-ионизатор воздуха Атмос HG-504"><div class="box" page="ochistitelionizator-vozduha-atmos-hg-2150r"><span class="title">кондиционеры на холод Очиститель-ионизатор воздуха Атмос HG-504</span><p>от <span class="price">2150</span> руб.</p></div></li>
						<li><img src="photos/cc8e6593e30b4b2269157a1333a6a22e.jpeg" alt="козырек для кондиционера Увлажнитель воздуха ультразвуковой Атмос 2710" title="козырек для кондиционера Увлажнитель воздуха ультразвуковой Атмос 2710"><div class="box" page="uvlazhnitel-vozduha-ultrazvukovoy-atmos-4950r"><span class="title">козырек для кондиционера Увлажнитель воздуха ультразвуковой Атмос 2710</span><p>от <span class="price">4950</span> руб.</p></div></li>
						<li><img src="photos/8e7cf513a767fff9bb3803c99a15db7b.jpeg" alt="вентилятор glacialtech igloo Увлажнитель воздуха ультразвуковой Vitek VT-1763" title="вентилятор glacialtech igloo Увлажнитель воздуха ультразвуковой Vitek VT-1763"><div class="box" page="uvlazhnitel-vozduha-ultrazvukovoy-vitek-vt-2900r"><span class="title">вентилятор glacialtech igloo Увлажнитель воздуха ультразвуковой Vitek VT-1763</span><p>от <span class="price">2900</span> руб.</p></div></li>
						<li><img src="photos/2586fb68ec1a45fc9c5b24e305da4b22.jpeg" alt="установка кондиционера зимой Timberk THU UL 03 A1 Увлажнитель и ароматизатор воздуха" title="установка кондиционера зимой Timberk THU UL 03 A1 Увлажнитель и ароматизатор воздуха"><div class="box" page="timberk-thu-ul-a-uvlazhnitel-i-aromatizator-vozduha-1600r"><span class="title">установка кондиционера зимой Timberk THU UL 03 A1 Увлажнитель и ароматизатор воздуха</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li><img src="photos/998c8fbeb09f1a5b36f55e00d62d9435.png" alt="водонагреватели в краснодаре Электрогрелка Beurer HK115 Cosy" title="водонагреватели в краснодаре Электрогрелка Beurer HK115 Cosy"><div class="box" page="elektrogrelka-beurer-hk-cosy-2800r"><span class="title">водонагреватели в краснодаре Электрогрелка Beurer HK115 Cosy</span><p>от <span class="price">2800</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("teploventilyator-vitek-vtgy-950r.php", 0, -4); if (file_exists("comments/teploventilyator-vitek-vtgy-950r.php")) require_once "comments/teploventilyator-vitek-vtgy-950r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="teploventilyator-vitek-vtgy-950r.php" method="post" onsubmit="return checkForm(this)">
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