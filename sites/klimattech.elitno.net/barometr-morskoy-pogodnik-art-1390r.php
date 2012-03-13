<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("barometr-morskoy-pogodnik-art-1390r.php","купить вентилятор для вытяжки");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("barometr-morskoy-pogodnik-art-1390r.php", $nick, $comment);
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
		<title>купить вентилятор для вытяжки Барометр Морской  Погодникъ, арт. 07295  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="купить вентилятор для вытяжки, вентиляторы москва, подшипник шкива кондиционера, умывальник с водонагревателем, производство тепловых пушек, водонагреватели ariston shuttle, метеостанции интернет магазин, замена масляного радиатора, вентилятор термостойкий, замена ремня кондиционера, конвектор для андроид, контроль скорости вентиляторов, водонагреватель газовый vektor, принцип работы тепловой пушки,  лучшие накопительные водонагреватели">
		<meta name="description" content="купить вентилятор для вытяжки Барометр до недавнего времени считался раритетом, возможно, пережитком прошлого....">
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
						<a class="photo" href="photos/6dfe798b3326bf9977da25b7994dc82f.jpeg" title="купить вентилятор для вытяжки Барометр Морской  Погодникъ, арт. 07295"><img src="photos/6dfe798b3326bf9977da25b7994dc82f.jpeg" alt="купить вентилятор для вытяжки Барометр Морской  Погодникъ, арт. 07295" title="купить вентилятор для вытяжки Барометр Морской  Погодникъ, арт. 07295 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-protochnyy-thermex-stream-combi-cr-2160r.php"><img src="photos/61644888826ed4288214b529bb8fcb31.jpeg" alt="вентиляторы москва Водонагреватель проточный Thermex 350 Stream (combi cr)" title="вентиляторы москва Водонагреватель проточный Thermex 350 Stream (combi cr)"></a><h2>Водонагреватель проточный Thermex 350 Stream (combi cr)</h2></li>
							<li><a href="http://klimattech.elitno.net/maslyanyy-radiator-timberk-tor-fh-2400r.php"><img src="photos/4d4e0371d8d0ed651ca8a5a344baf781.jpeg" alt="подшипник шкива кондиционера Масляный радиатор Timberk TOR FH" title="подшипник шкива кондиционера Масляный радиатор Timberk TOR FH"></a><h2>Масляный радиатор Timberk TOR FH</h2></li>
							<li><a href="http://klimattech.elitno.net/maslyanyy-radiator-timberk-tor-eh-i-2240r.php"><img src="photos/d9ebfc2db4ed0018ab47b10a0b9a9748.jpeg" alt="умывальник с водонагревателем Масляный радиатор Timberk TOR 31.1706 EH I" title="умывальник с водонагревателем Масляный радиатор Timberk TOR 31.1706 EH I"></a><h2>Масляный радиатор Timberk TOR 31.1706 EH I</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>купить вентилятор для вытяжки Барометр Морской  Погодникъ, арт. 07295</h1>
						<div class="tb"><p>Цена: от <span class="price">1390</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_1238.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Барометр до недавнего времени считался раритетом, возможно, пережитком прошлого. Но мода возвращается и стилизованные под старину барометры уже украшают наши дома. Деревянный корпус барометра Морского дополняется золотым кольцом и старинным дизайном корпуса. Кроме выполнения эстетической функции <strong>Барометр Морской </strong>максимально точно определяет показания атмосферного давления. </p><p><b>Технические характеристики:</b></p><ul><li>Диапазон измерения: 700 – 800 мм рт.ст. <li>Размер корпуса/дисплея: 130/95 мм <li>Точность хода: ± 2 сек <li>Точность измерения температуры: ±2,5 єС <li>Точность измерения относительной влажности: ±10 Rh <li>Цвет: орех, матовая полировка </li></ul><p><b>Производитель:</b> RST (Швеция)</p><p><b>Гарантия: </b>12 месяцев</p> купить вентилятор для вытяжки</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/5e1acb133dee7908889f7853f02ceb0a.jpeg" alt="производство тепловых пушек Масляный обогреватель Vitek VT-1723" title="производство тепловых пушек Масляный обогреватель Vitek VT-1723"><div class="box" page="maslyanyy-obogrevatel-vitek-vt-2820r"><span class="title">производство тепловых пушек Масляный обогреватель Vitek VT-1723</span><p>от <span class="price">2820</span> руб.</p></div></li>
						<li><img src="photos/fe91a31089c8058c33724d6ef127f188.jpeg" alt="водонагреватели ariston shuttle Термогигрометр цифровой RST 06017" title="водонагреватели ariston shuttle Термогигрометр цифровой RST 06017"><div class="box" page="termogigrometr-cifrovoy-rst-825r"><span class="title">водонагреватели ariston shuttle Термогигрометр цифровой RST 06017</span><p>от <span class="price">825</span> руб.</p></div></li>
						<li><img src="photos/6ce8f25c21488d1ca444328673c0a09c.jpeg" alt="метеостанции интернет магазин Погодная цифровая барометрическая  станция с радиодатчиком RST  Meteo Link, арт. 02555" title="метеостанции интернет магазин Погодная цифровая барометрическая  станция с радиодатчиком RST  Meteo Link, арт. 02555"><div class="box" page="pogodnaya-cifrovaya-barometricheskaya-stanciya-s-radiodatchikom-rst-meteo-link-art-2230r"><span class="title">метеостанции интернет магазин Погодная цифровая барометрическая  станция с радиодатчиком RST  Meteo Link, арт. 02555</span><p>от <span class="price">2230</span> руб.</p></div></li>
						<li><img src="photos/2e7eaee61cf998d8e7f977231e61dee7.jpeg" alt="замена масляного радиатора Тепловентилятор NEOCLIMA NCTN-5L" title="замена масляного радиатора Тепловентилятор NEOCLIMA NCTN-5L"><div class="box" page="teploventilyator-neoclima-nctnl-3200r"><span class="title">замена масляного радиатора Тепловентилятор NEOCLIMA NCTN-5L</span><p>от <span class="price">3200</span> руб.</p></div></li>
						<li class="large"><img src="photos/f9eaa5b8986cdd2920eb77f5d5c25994.jpeg" alt="вентилятор термостойкий Тепловентилятор керамический Vitesse VS-882" title="вентилятор термостойкий Тепловентилятор керамический Vitesse VS-882"><div class="box" page="teploventilyator-keramicheskiy-vitesse-vs-1700r"><span class="title">вентилятор термостойкий Тепловентилятор керамический Vitesse VS-882</span><p>от <span class="price">1700</span> руб.</p></div></li>
						<li class="large"><img src="photos/b8fee8729e6225b37952d37bd9c110a9.jpeg" alt="замена ремня кондиционера Климатический комплекс Sharp KC-860E" title="замена ремня кондиционера Климатический комплекс Sharp KC-860E"><div class="box" page="klimaticheskiy-kompleks-sharp-kce-18400r"><span class="title">замена ремня кондиционера Климатический комплекс Sharp KC-860E</span><p>от <span class="price">18400</span> руб.</p></div></li>
						<li class="large"><img src="photos/f0f3a7d2dd327f3c3358e366d97eb793.jpeg" alt="конвектор для андроид Очиститель-ионизатор воздуха универсальный Атмос УВОИ" title="конвектор для андроид Очиститель-ионизатор воздуха универсальный Атмос УВОИ"><div class="box" page="ochistitelionizator-vozduha-universalnyy-atmos-uvoi-1880r"><span class="title">конвектор для андроид Очиститель-ионизатор воздуха универсальный Атмос УВОИ</span><p>от <span class="price">1880</span> руб.</p></div></li>
						<li><img src="photos/f95f1f590bff20e345147b7932efb228.jpeg" alt="контроль скорости вентиляторов Очиститель воздуха Ballu AP-430 F5" title="контроль скорости вентиляторов Очиститель воздуха Ballu AP-430 F5"><div class="box" page="ochistitel-vozduha-ballu-ap-f-6450r"><span class="title">контроль скорости вентиляторов Очиститель воздуха Ballu AP-430 F5</span><p>от <span class="price">6450</span> руб.</p></div></li>
						<li><img src="photos/cb2bd36e5b426ebd6b01cac1b1667c9e.jpeg" alt="водонагреватель газовый vektor Увлажнитель воздуха ультразвуковой Ballu UHB-910H" title="водонагреватель газовый vektor Увлажнитель воздуха ультразвуковой Ballu UHB-910H"><div class="box" page="uvlazhnitel-vozduha-ultrazvukovoy-ballu-uhbh-4170r"><span class="title">водонагреватель газовый vektor Увлажнитель воздуха ультразвуковой Ballu UHB-910H</span><p>от <span class="price">4170</span> руб.</p></div></li>
						<li><img src="photos/8028d854e0a6c79dd5cc262a703c8901.jpeg" alt="принцип работы тепловой пушки Beurer LB12 Воздухоувлажнитель" title="принцип работы тепловой пушки Beurer LB12 Воздухоувлажнитель"><div class="box" page="beurer-lb-vozduhouvlazhnitel-1600r"><span class="title">принцип работы тепловой пушки Beurer LB12 Воздухоувлажнитель</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li><img src="photos/4dbc8cbd8fab8f23d6cfaeca5f2ca7f0.png" alt="домашняя метеостанция купить Электрический матрац ИНКОР (мощность 25 и 40 Вт) 145х50 см" title="домашняя метеостанция купить Электрический матрац ИНКОР (мощность 25 и 40 Вт) 145х50 см"><div class="box" page="elektricheskiy-matrac-inkor-moschnost-i-vt-h-sm-790r"><span class="title">домашняя метеостанция купить Электрический матрац ИНКОР (мощность 25 и 40 Вт) 145х50 см</span><p>от <span class="price">790</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("barometr-morskoy-pogodnik-art-1390r.php", 0, -4); if (file_exists("comments/barometr-morskoy-pogodnik-art-1390r.php")) require_once "comments/barometr-morskoy-pogodnik-art-1390r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="barometr-morskoy-pogodnik-art-1390r.php" method="post" onsubmit="return checkForm(this)">
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