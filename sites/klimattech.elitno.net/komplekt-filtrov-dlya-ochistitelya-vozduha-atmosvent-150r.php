<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("komplekt-filtrov-dlya-ochistitelya-vozduha-atmosvent-150r.php","водонагреватель ariston slim");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("komplekt-filtrov-dlya-ochistitelya-vozduha-atmosvent-150r.php", $nick, $comment);
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
		<title>водонагреватель ariston slim Комплект фильтров для очистителя воздуха Атмос-Вент-801  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="водонагреватель ariston slim, метеостанция цифровая rst, кондиционер для стирки, кондиционеры кассетного типа, выключатель вентилятора, стоимость монтажа кондиционера, аристон водонагреватели pro eco, avi конвектор скачать бесплатно, расчет мощности вентилятора, где купить электрокамин, водонагреватели аристон 100, какой накопительный водонагреватель, кондиционер для серверной, датчик включения вентилятора 2109,  скачать бесплатно dvd конвектор">
		<meta name="description" content="водонагреватель ariston slim Атмос-Вент-801 – высокоэффективный воздухоочиститель, имеющий в своем составе не...">
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
						<a class="photo" href="photos/ea17d502d818fa1bac7491d11b492af6.jpeg" title="водонагреватель ariston slim Комплект фильтров для очистителя воздуха Атмос-Вент-801"><img src="photos/ea17d502d818fa1bac7491d11b492af6.jpeg" alt="водонагреватель ariston slim Комплект фильтров для очистителя воздуха Атмос-Вент-801" title="водонагреватель ariston slim Комплект фильтров для очистителя воздуха Атмос-Вент-801 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/konvektor-ballu-plaza-bepe-4100r.php"><img src="photos/8649b809c04e744919eb968f3bd579c1.jpeg" alt="метеостанция цифровая rst Конвектор Ballu Plaza BEP|E-1500" title="метеостанция цифровая rst Конвектор Ballu Plaza BEP|E-1500"></a><h2>Конвектор Ballu Plaza BEP|E-1500</h2></li>
							<li><a href="http://klimattech.elitno.net/kondicioner-splitsistema-timberk-ac-tim-h-s-12460r.php"><img src="photos/df83a32478b53e9d4c8710306a81f907.jpeg" alt="кондиционер для стирки Кондиционер сплит-система Timberk AC TIM 07H S1" title="кондиционер для стирки Кондиционер сплит-система Timberk AC TIM 07H S1"></a><h2>Кондиционер сплит-система Timberk AC TIM 07H S1</h2></li>
							<li><a href="http://klimattech.elitno.net/maslyanyy-radiator-timberk-tor-ac-1800r.php"><img src="photos/5f85c6442525c86595a794bbc303fa83.jpeg" alt="кондиционеры кассетного типа Масляный радиатор Timberk TOR 21 AC" title="кондиционеры кассетного типа Масляный радиатор Timberk TOR 21 AC"></a><h2>Масляный радиатор Timberk TOR 21 AC</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>водонагреватель ariston slim Комплект фильтров для очистителя воздуха Атмос-Вент-801</h1>
						<div class="tb"><p>Цена: от <span class="price">150</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_1686.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><strong>Атмос-Вент-801 </strong>– высокоэффективный воздухоочиститель, имеющий в своем составе несколько фильтров очистки, которые необходимо периодически менять, дабы обезопасить выход устройства из строя.</p><p>Комплект фильтров представляет собой четыре вида фильтров. Первичный фильтр, задачей которого является очищение воздуха от крупных частичек; электростатический ESP фильтр, который убирает мелкодисперсную пыль; угольный фильтр, который поглощает неприятные запахи, табака, гари и других пахучих веществ; фотокаталитический фильтр, который на молекулярном уровне убирает все токсичные, бензольные соединения и различные газы. Каждый из описанных элементов имеет отличные характеристики и выполнен из качественных материалов.</p><p>Использование фильтров и своевременная их замена существенно увеличивает срок службы воздухоочистителя <strong>Атмос-Вент-801</strong>.</p> водонагреватель ariston slim</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/ae2804a5907193f7f86631a692047c8d.jpeg" alt="выключатель вентилятора Цифровой термометр с радиодатчиком в стиле iPhone 4 RST 02258" title="выключатель вентилятора Цифровой термометр с радиодатчиком в стиле iPhone 4 RST 02258"><div class="box"><a href="http://klimattech.elitno.net/cifrovoy-termometr-s-radiodatchikom-v-stile-iphone-rst-1250r-2.php"><h3 class="title">выключатель вентилятора Цифровой термометр с радиодатчиком в стиле iPhone 4 RST 02258</h3><p>от <span class="price">1250</span> руб.</p></a></div></li>
						<li><img src="photos/79d8c81149db7d8b11f2b519ba845cf1.jpeg" alt="стоимость монтажа кондиционера Метеостанция беспроводная Vitek VT-6405" title="стоимость монтажа кондиционера Метеостанция беспроводная Vitek VT-6405"><div class="box" page="meteostanciya-besprovodnaya-vitek-vt-2700r"><span class="title">стоимость монтажа кондиционера Метеостанция беспроводная Vitek VT-6405</span><p>от <span class="price">2700</span> руб.</p></div></li>
						<li><img src="photos/7a1a82479c04d8e202cb444f94ed9635.jpeg" alt="аристон водонагреватели pro eco Инфракрасный тепловентилятор Neoclima HH10-4" title="аристон водонагреватели pro eco Инфракрасный тепловентилятор Neoclima HH10-4"><div class="box" page="infrakrasnyy-teploventilyator-neoclima-hh-1200r"><span class="title">аристон водонагреватели pro eco Инфракрасный тепловентилятор Neoclima HH10-4</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li><img src="photos/d0d6142b9db6d6cb4ffb5a6023288c8b.png" alt="avi конвектор скачать бесплатно ZENET Доп. фильтр для 2516/2720/2728" title="avi конвектор скачать бесплатно ZENET Доп. фильтр для 2516/2720/2728"><div class="box" page="zenet-dop-filtr-dlya-280r"><span class="title">avi конвектор скачать бесплатно ZENET Доп. фильтр для 2516/2720/2728</span><p>от <span class="price">280</span> руб.</p></div></li>
						<li class="large"><img src="photos/d3af6b5dff48e9808505bf8b2af62c8c.jpeg" alt="расчет мощности вентилятора Ультразвуковой увлажнитель Boneco Air-O-Swiss U7146" title="расчет мощности вентилятора Ультразвуковой увлажнитель Boneco Air-O-Swiss U7146"><div class="box" page="ultrazvukovoy-uvlazhnitel-boneco-airoswiss-u-1950r"><span class="title">расчет мощности вентилятора Ультразвуковой увлажнитель Boneco Air-O-Swiss U7146</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li class="large"><img src="photos/2404258926d8fd6dbbfeb11b6f521d94.jpeg" alt="где купить электрокамин Увлажнитель воздуха ультразвуковой Boneco 7135" title="где купить электрокамин Увлажнитель воздуха ультразвуковой Boneco 7135"><div class="box" page="uvlazhnitel-vozduha-ultrazvukovoy-boneco-5730r"><span class="title">где купить электрокамин Увлажнитель воздуха ультразвуковой Boneco 7135</span><p>от <span class="price">5730</span> руб.</p></div></li>
						<li class="large"><img src="photos/80633934bc2b2e0d2881d68e66fa2ada.jpeg" alt="водонагреватели аристон 100 Ультразвуковой увлажнитель Electrolux EHU 3510D" title="водонагреватели аристон 100 Ультразвуковой увлажнитель Electrolux EHU 3510D"><div class="box" page="ultrazvukovoy-uvlazhnitel-electrolux-ehu-d-5550r"><span class="title">водонагреватели аристон 100 Ультразвуковой увлажнитель Electrolux EHU 3510D</span><p>от <span class="price">5550</span> руб.</p></div></li>
						<li><img src="photos/e7f89a111691832ecee10e786950e2b3.jpeg" alt="какой накопительный водонагреватель Увлажнитель ZENET JSS-34501" title="какой накопительный водонагреватель Увлажнитель ZENET JSS-34501"><div class="box" page="uvlazhnitel-zenet-jss-3960r"><span class="title">какой накопительный водонагреватель Увлажнитель ZENET JSS-34501</span><p>от <span class="price">3960</span> руб.</p></div></li>
						<li><img src="photos/771e29e896f7ce0ffaac8f209d3a2130.jpeg" alt="кондиционер для серверной Электрогрелка Microlife FH 80" title="кондиционер для серверной Электрогрелка Microlife FH 80"><div class="box" page="elektrogrelka-microlife-fh-1240r"><span class="title">кондиционер для серверной Электрогрелка Microlife FH 80</span><p>от <span class="price">1240</span> руб.</p></div></li>
						<li><img src="photos/eefde3c4584d725a6a43beeb9b2794ca.jpeg" alt="датчик включения вентилятора 2109 Electrolux  EFP F - 110 Электрокамин напольный" title="датчик включения вентилятора 2109 Electrolux  EFP F - 110 Электрокамин напольный"><div class="box" page="electrolux-efp-f-elektrokamin-napolnyy-6600r"><span class="title">датчик включения вентилятора 2109 Electrolux  EFP F - 110 Электрокамин напольный</span><p>от <span class="price">6600</span> руб.</p></div></li>
						<li><img src="photos/0f6ed4dc6b74c5c53cedb2ae4b3a2f27.jpeg" alt="вентилятор вытяжной канальный Электроодеяло Beurer HD90" title="вентилятор вытяжной канальный Электроодеяло Beurer HD90"><div class="box" page="elektroodeyalo-beurer-hd-3950r"><span class="title">вентилятор вытяжной канальный Электроодеяло Beurer HD90</span><p>от <span class="price">3950</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("komplekt-filtrov-dlya-ochistitelya-vozduha-atmosvent-150r.php", 0, -4); if (file_exists("comments/komplekt-filtrov-dlya-ochistitelya-vozduha-atmosvent-150r.php")) require_once "comments/komplekt-filtrov-dlya-ochistitelya-vozduha-atmosvent-150r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="komplekt-filtrov-dlya-ochistitelya-vozduha-atmosvent-150r.php" method="post" onsubmit="return checkForm(this)">
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