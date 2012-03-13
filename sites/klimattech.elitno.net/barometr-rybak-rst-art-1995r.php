<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("barometr-rybak-rst-art-1995r.php","кондиционеры kentatsu");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("barometr-rybak-rst-art-1995r.php", $nick, $comment);
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
		<title>кондиционеры kentatsu Барометр Рыбак RST, арт. 05536  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="кондиционеры kentatsu, кондиционеры dantex, водонагреватель накопительный 100, муфта привода вентилятора, газовые обогреватели бытовые, инструкция кондиционер скачать, датчик температуры включения вентилятора, замена ремня кондиционера, обогреватели ветерок, где купить электрокамин, тэн для водонагревателя аристон, взрывозащищенные вентиляторы, домашняя метеостанция купить, заправка кондиционера цена,  горизонтальный водонагреватель">
		<meta name="description" content="кондиционеры kentatsu Безупречный, красивый,  функциональный барометр  «Рыбак»придется по душе не толь...">
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
						<a class="photo" href="photos/013f3389a4720d15e4b61d3a324473e6.jpeg" title="кондиционеры kentatsu Барометр Рыбак RST, арт. 05536"><img src="photos/013f3389a4720d15e4b61d3a324473e6.jpeg" alt="кондиционеры kentatsu Барометр Рыбак RST, арт. 05536" title="кондиционеры kentatsu Барометр Рыбак RST, арт. 05536 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/radiator-maslyanyy-timberk-tor-er-i-2000r.php"><img src="photos/ffe9b7c6d5e2ad4da69baee60d1e3e57.jpeg" alt="кондиционеры dantex Радиатор масляный Timberk TOR 21.1507 ER I" title="кондиционеры dantex Радиатор масляный Timberk TOR 21.1507 ER I"></a><h2>Радиатор масляный Timberk TOR 21.1507 ER I</h2></li>
							<li><a href="http://klimattech.elitno.net/maslyanyy-radiator-timberk-tor-rr-2480r.php"><img src="photos/79514781a11ae1df868b3cf1ab95da61.jpeg" alt="водонагреватель накопительный 100 Масляный радиатор Timberk TOR 31.2309 RR" title="водонагреватель накопительный 100 Масляный радиатор Timberk TOR 31.2309 RR"></a><h2>Масляный радиатор Timberk TOR 31.2309 RR</h2></li>
							<li><a href="http://klimattech.elitno.net/barometr-futbolnyy-myach-rst-art-1750r.php"><img src="photos/eaa9d36d06605b97c43cac0412f52c2b.jpeg" alt="муфта привода вентилятора Барометр  Футбольный мяч RST, арт. 07873" title="муфта привода вентилятора Барометр  Футбольный мяч RST, арт. 07873"></a><h2>Барометр  Футбольный мяч RST, арт. 07873</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>кондиционеры kentatsu Барометр Рыбак RST, арт. 05536</h1>
						<div class="tb"><p>Цена: от <span class="price">1995</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_26621.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description">Безупречный, красивый,  функциональный <strong>барометр  «Рыбак»</strong>придется по душе не только тем, кто обожает рыбалку.  Барометр «Рыбак» от шведской компании-производителя RST удачно сочетает в себя  функциональность, отличные технические характеристики и привлекательный внешний  вид. Отличительная особенность этого барометра – оригинальная стилизация под  старину: показания и условия хорошего клева написаны на старорусском языке XVIII века. Корпус барометра выполнен  в изящном ореховом цвете и имеет матовую полировку, что придает модели особую  привлекательность. </h1> <p><strong>Характеристики:</strong></p> <ul>   <li>Размер корпуса/дисплея: 17х13,5 см; </li>   <li>Измерение атмосферного давления в mmHg /hPa/mb;</li>   <li>Фиксация оптимального давления;</li>   <li>Предвестник погоды;</li>   <li>Настенное крепление;</li>   <li>Диапазон измерения давления 715 mmHg~785mmHg;</li>   <li>Погрешность +/- 0,38 mmHg;</li>   <li>Габариты: диаметр 170/130х25;</li>   <li>В комплекте: инструкция на русском языке, гарантийный  талон;</li>   <li>Цвет: орех,  матовая полировка.</li> </ul> <p><strong>Производитель: RST (Щвеция)</strong></p> кондиционеры kentatsu</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/ed3de5e5ad2bc8f5e762a3fb96398102.jpeg" alt="газовые обогреватели бытовые Assistant AH-1976 Метеостанция" title="газовые обогреватели бытовые Assistant AH-1976 Метеостанция"><div class="box" page="assistant-ah-meteostanciya-4980r"><span class="title">газовые обогреватели бытовые Assistant AH-1976 Метеостанция</span><p>от <span class="price">4980</span> руб.</p></div></li>
						<li><img src="photos/5ab32c38a332cc62db91f2e9f8b78743.jpeg" alt="инструкция кондиционер скачать Assistant AH-1976 Метеостанция" title="инструкция кондиционер скачать Assistant AH-1976 Метеостанция"><div class="box" page="assistant-ah-meteostanciya-2370r"><span class="title">инструкция кондиционер скачать Assistant AH-1976 Метеостанция</span><p>от <span class="price">2370</span> руб.</p></div></li>
						<li><img src="photos/d91d9d3ad2e81814b03a2fc1dcb09a05.jpeg" alt="датчик температуры включения вентилятора Тепловентилятор электрический напольный Timberk TFH T20FSN.SQ" title="датчик температуры включения вентилятора Тепловентилятор электрический напольный Timberk TFH T20FSN.SQ"><div class="box" page="teploventilyator-elektricheskiy-napolnyy-timberk-tfh-tfsnsq-1890r"><span class="title">датчик температуры включения вентилятора Тепловентилятор электрический напольный Timberk TFH T20FSN.SQ</span><p>от <span class="price">1890</span> руб.</p></div></li>
						<li><img src="photos/b8fee8729e6225b37952d37bd9c110a9.jpeg" alt="замена ремня кондиционера Климатический комплекс Sharp KC-860E" title="замена ремня кондиционера Климатический комплекс Sharp KC-860E"><div class="box" page="klimaticheskiy-kompleks-sharp-kce-18400r"><span class="title">замена ремня кондиционера Климатический комплекс Sharp KC-860E</span><p>от <span class="price">18400</span> руб.</p></div></li>
						<li class="large"><img src="photos/70ff9e86256306e32dffb6a5f1466008.jpeg" alt="обогреватели ветерок Очиститель-увлажнитель воздуха Атмос Аква-800" title="обогреватели ветерок Очиститель-увлажнитель воздуха Атмос Аква-800"><div class="box" page="ochistiteluvlazhnitel-vozduha-atmos-akva-1950r"><span class="title">обогреватели ветерок Очиститель-увлажнитель воздуха Атмос Аква-800</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li class="large"><img src="photos/2404258926d8fd6dbbfeb11b6f521d94.jpeg" alt="где купить электрокамин Увлажнитель воздуха ультразвуковой Boneco 7135" title="где купить электрокамин Увлажнитель воздуха ультразвуковой Boneco 7135"><div class="box" page="uvlazhnitel-vozduha-ultrazvukovoy-boneco-5730r"><span class="title">где купить электрокамин Увлажнитель воздуха ультразвуковой Boneco 7135</span><p>от <span class="price">5730</span> руб.</p></div></li>
						<li class="large"><img src="photos/532ccc8f127f06b369d9119ec12ed50e.jpeg" alt="тэн для водонагревателя аристон Увлажнитель воздуха ультразвуковой  Ballu UHB-770D" title="тэн для водонагревателя аристон Увлажнитель воздуха ультразвуковой  Ballu UHB-770D"><div class="box" page="uvlazhnitel-vozduha-ultrazvukovoy-ballu-uhbd-3100r"><span class="title">тэн для водонагревателя аристон Увлажнитель воздуха ультразвуковой  Ballu UHB-770D</span><p>от <span class="price">3100</span> руб.</p></div></li>
						<li><img src="photos/010650b05d2dfced2c530dcd9b85f4cd.jpeg" alt="взрывозащищенные вентиляторы Электрогрелка для ног Microlife FH 200" title="взрывозащищенные вентиляторы Электрогрелка для ног Microlife FH 200"><div class="box" page="elektrogrelka-dlya-nog-microlife-fh-1690r"><span class="title">взрывозащищенные вентиляторы Электрогрелка для ног Microlife FH 200</span><p>от <span class="price">1690</span> руб.</p></div></li>
						<li><img src="photos/4dbc8cbd8fab8f23d6cfaeca5f2ca7f0.png" alt="домашняя метеостанция купить Электрический матрац ИНКОР (мощность 25 и 40 Вт) 145х50 см" title="домашняя метеостанция купить Электрический матрац ИНКОР (мощность 25 и 40 Вт) 145х50 см"><div class="box" page="elektricheskiy-matrac-inkor-moschnost-i-vt-h-sm-790r"><span class="title">домашняя метеостанция купить Электрический матрац ИНКОР (мощность 25 и 40 Вт) 145х50 см</span><p>от <span class="price">790</span> руб.</p></div></li>
						<li><img src="photos/e7e905bc6a32503c02bab2534a7c54ae.jpeg" alt="заправка кондиционера цена Электрический жилет ИНКОР размером 40х70 см (мощность 60Вт)" title="заправка кондиционера цена Электрический жилет ИНКОР размером 40х70 см (мощность 60Вт)"><div class="box" page="elektricheskiy-zhilet-inkor-razmerom-h-sm-moschnost-vt-900r"><span class="title">заправка кондиционера цена Электрический жилет ИНКОР размером 40х70 см (мощность 60Вт)</span><p>от <span class="price">900</span> руб.</p></div></li>
						<li><img src="photos/0f6ed4dc6b74c5c53cedb2ae4b3a2f27.jpeg" alt="вентилятор вытяжной канальный Электроодеяло Beurer HD90" title="вентилятор вытяжной канальный Электроодеяло Beurer HD90"><div class="box" page="elektroodeyalo-beurer-hd-3950r"><span class="title">вентилятор вытяжной канальный Электроодеяло Beurer HD90</span><p>от <span class="price">3950</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("barometr-rybak-rst-art-1995r.php", 0, -4); if (file_exists("comments/barometr-rybak-rst-art-1995r.php")) require_once "comments/barometr-rybak-rst-art-1995r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="barometr-rybak-rst-art-1995r.php" method="post" onsubmit="return checkForm(this)">
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