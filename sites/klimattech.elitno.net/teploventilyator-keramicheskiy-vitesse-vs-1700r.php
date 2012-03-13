<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("teploventilyator-keramicheskiy-vitesse-vs-1700r.php","параметры вентиляторов");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("teploventilyator-keramicheskiy-vitesse-vs-1700r.php", $nick, $comment);
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
		<title>параметры вентиляторов Тепловентилятор керамический Vitesse VS-882  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="параметры вентиляторов, как выбрать вентилятор, тепловые пушки в краснодаре, кондиционеры медея, тепловая пушка hintek, как почистить вентилятор в ноутбуке, умывальник с водонагревателем, выключатель вентилятора, изготовитель вентиляторов, проточный водонагреватель aeg, маркировка вентиляторов, кондиционеры картинки, номера кондиционеров, температура включения вентилятора,  кондиционеры канального типа">
		<meta name="description" content="параметры вентиляторов Напольный керамический тепловентилятор Vitesse VS-882 с  мощностью в1500Вт эффек...">
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
						<a class="photo" href="photos/f9eaa5b8986cdd2920eb77f5d5c25994.jpeg" title="параметры вентиляторов Тепловентилятор керамический Vitesse VS-882"><img src="photos/f9eaa5b8986cdd2920eb77f5d5c25994.jpeg" alt="параметры вентиляторов Тепловентилятор керамический Vitesse VS-882" title="параметры вентиляторов Тепловентилятор керамический Vitesse VS-882 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-neoclima-ewh-4710r.php"><img src="photos/861076b39a899d1e65ace745c382499d.jpeg" alt="как выбрать вентилятор Водонагреватель Neoclima EWH 80" title="как выбрать вентилятор Водонагреватель Neoclima EWH 80"></a><h2>Водонагреватель Neoclima EWH 80</h2></li>
							<li><a href="http://klimattech.elitno.net/metallicheskie-nozhki-ensto-240r.php"><img src="photos/6df9a65c461233800ed70599bad68dc5.jpeg" alt="тепловые пушки в краснодаре Металлические ножки Ensto 51900" title="тепловые пушки в краснодаре Металлические ножки Ensto 51900"></a><h2>Металлические ножки Ensto 51900</h2></li>
							<li><a href="http://klimattech.elitno.net/konvektor-elektricheskiy-timberk-tecpf-m-in-2140r.php"><img src="photos/5d7d89a1625889d24c0e54577aff3f32.jpeg" alt="кондиционеры медея Конвектор электрический Timberk TEC.PF1 М IN" title="кондиционеры медея Конвектор электрический Timberk TEC.PF1 М IN"></a><h2>Конвектор электрический Timberk TEC.PF1 М IN</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>параметры вентиляторов Тепловентилятор керамический Vitesse VS-882</h1>
						<div class="tb"><p>Цена: от <span class="price">1700</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19728.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Напольный керамический тепловентилятор Vitesse VS-882 с  мощностью в1500Вт эффективно обогреет небольшую комнату. Оснащен регулировкой  температуры, таймером, термостатом, вентиляцией без нагрева, удобной ручкой для  переноса, исключительно безопасен: автоматически отключается при перегреве или  опрокидывании.</p><p><strong>Характеристики:</strong></p><ul type=\disc\><li>Уровни   мощности: 1500/750 Вт;</li><li>Регулировка  мощности;</li><li>Тип  нагревательного элемента: керамический нагреватель;</li><li>Вентилятор;</li><li>Вентиляция  без нагрева;</li><li>Термостат;</li><li>Поворот  корпуса, угол поворота 90°;</li><li>Управление:  механическое;</li><li>Регулировка  температуры;</li><li>Выключатель  со световым индикатором;</li><li>Таймер;</li><li>Вариант  монтажа: напольный;</li><li>Отключение  при перегреве;</li><li>Отключение  при опрокидывании.</li></ul><p><strong>Производитель: КНР</strong><br><strong>Гарантия: 1 год</strong></p> параметры вентиляторов</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/3b3d62d33b746ad7a881bc361403117a.jpeg" alt="тепловая пушка hintek Радиатор масляный Timberk TOR 21.2009 BT I" title="тепловая пушка hintek Радиатор масляный Timberk TOR 21.2009 BT I"><div class="box" page="radiator-maslyanyy-timberk-tor-bt-i-2200r"><span class="title">тепловая пушка hintek Радиатор масляный Timberk TOR 21.2009 BT I</span><p>от <span class="price">2200</span> руб.</p></div></li>
						<li><img src="photos/5a722243fe0d4bdaed6d1be8e66a9f23.jpeg" alt="как почистить вентилятор в ноутбуке Масляный радиатор Timberk  TOR 21.1206 MG I" title="как почистить вентилятор в ноутбуке Масляный радиатор Timberk  TOR 21.1206 MG I"><div class="box" page="maslyanyy-radiator-timberk-tor-mg-i-1850r"><span class="title">как почистить вентилятор в ноутбуке Масляный радиатор Timberk  TOR 21.1206 MG I</span><p>от <span class="price">1850</span> руб.</p></div></li>
						<li><img src="photos/d9ebfc2db4ed0018ab47b10a0b9a9748.jpeg" alt="умывальник с водонагревателем Масляный радиатор Timberk TOR 31.1706 EH I" title="умывальник с водонагревателем Масляный радиатор Timberk TOR 31.1706 EH I"><div class="box" page="maslyanyy-radiator-timberk-tor-eh-i-2240r"><span class="title">умывальник с водонагревателем Масляный радиатор Timberk TOR 31.1706 EH I</span><p>от <span class="price">2240</span> руб.</p></div></li>
						<li><img src="photos/ae2804a5907193f7f86631a692047c8d.jpeg" alt="выключатель вентилятора Цифровой термометр с радиодатчиком в стиле iPhone 4 RST 02258" title="выключатель вентилятора Цифровой термометр с радиодатчиком в стиле iPhone 4 RST 02258"><div class="box" page="cifrovoy-termometr-s-radiodatchikom-v-stile-iphone-rst-1250r-2"><span class="title">выключатель вентилятора Цифровой термометр с радиодатчиком в стиле iPhone 4 RST 02258</span><p>от <span class="price">1250</span> руб.</p></div></li>
						<li class="large"><img src="photos/cbc44bc22b112f1d3347aec6358c74a8.gif" alt="изготовитель вентиляторов Погодная анимационная станция RST meteolight 520, арт. 02520" title="изготовитель вентиляторов Погодная анимационная станция RST meteolight 520, арт. 02520"><div class="box" page="pogodnaya-animacionnaya-stanciya-rst-meteolight-art-6090r"><span class="title">изготовитель вентиляторов Погодная анимационная станция RST meteolight 520, арт. 02520</span><p>от <span class="price">6090</span> руб.</p></div></li>
						<li class="large"><img src="photos/9d79f3812dec91433b30f8cd9214e4cc.jpeg" alt="проточный водонагреватель aeg Тепловентилятор Neoclima NWH-A6" title="проточный водонагреватель aeg Тепловентилятор Neoclima NWH-A6"><div class="box" page="teploventilyator-neoclima-nwha-1930r"><span class="title">проточный водонагреватель aeg Тепловентилятор Neoclima NWH-A6</span><p>от <span class="price">1930</span> руб.</p></div></li>
						<li class="large"><img src="photos/069f9035158c301188c327ecd3113c46.jpeg" alt="маркировка вентиляторов Тепловентилятор электрический напольный Timberk TFH T20FSH.LX" title="маркировка вентиляторов Тепловентилятор электрический напольный Timberk TFH T20FSH.LX"><div class="box" page="teploventilyator-elektricheskiy-napolnyy-timberk-tfh-tfshlx-3120r"><span class="title">маркировка вентиляторов Тепловентилятор электрический напольный Timberk TFH T20FSH.LX</span><p>от <span class="price">3120</span> руб.</p></div></li>
						<li><img src="photos/fd51c977a4c16a7ffa848654b91b4a18.jpeg" alt="кондиционеры картинки Очиститель воздуха универсальный Атмос Вент 801" title="кондиционеры картинки Очиститель воздуха универсальный Атмос Вент 801"><div class="box" page="ochistitel-vozduha-universalnyy-atmos-vent-1790r"><span class="title">кондиционеры картинки Очиститель воздуха универсальный Атмос Вент 801</span><p>от <span class="price">1790</span> руб.</p></div></li>
						<li><img src="photos/f08421488a7bd6f20d3e09733f279f3d.jpeg" alt="номера кондиционеров Уличный газовый обогреватель ITM Sunny 04" title="номера кондиционеров Уличный газовый обогреватель ITM Sunny 04"><div class="box" page="ulichnyy-gazovyy-obogrevatel-itm-sunny-23800r"><span class="title">номера кондиционеров Уличный газовый обогреватель ITM Sunny 04</span><p>от <span class="price">23800</span> руб.</p></div></li>
						<li><img src="photos/1e3ec1cf07b142d241380af7d5f60653.jpeg" alt="температура включения вентилятора Электрогрелка Beurer TM 23" title="температура включения вентилятора Электрогрелка Beurer TM 23"><div class="box" page="elektrogrelka-beurer-tm-1400r"><span class="title">температура включения вентилятора Электрогрелка Beurer TM 23</span><p>от <span class="price">1400</span> руб.</p></div></li>
						<li><img src="photos/e7e905bc6a32503c02bab2534a7c54ae.jpeg" alt="заправка кондиционера цена Электрический жилет ИНКОР размером 40х70 см (мощность 60Вт)" title="заправка кондиционера цена Электрический жилет ИНКОР размером 40х70 см (мощность 60Вт)"><div class="box" page="elektricheskiy-zhilet-inkor-razmerom-h-sm-moschnost-vt-900r"><span class="title">заправка кондиционера цена Электрический жилет ИНКОР размером 40х70 см (мощность 60Вт)</span><p>от <span class="price">900</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("teploventilyator-keramicheskiy-vitesse-vs-1700r.php", 0, -4); if (file_exists("comments/teploventilyator-keramicheskiy-vitesse-vs-1700r.php")) require_once "comments/teploventilyator-keramicheskiy-vitesse-vs-1700r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="teploventilyator-keramicheskiy-vitesse-vs-1700r.php" method="post" onsubmit="return checkForm(this)">
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