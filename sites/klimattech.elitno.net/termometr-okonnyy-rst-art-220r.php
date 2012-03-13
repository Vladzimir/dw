<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("termometr-okonnyy-rst-art-220r.php","новая ваз 2114 с кондиционером");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("termometr-okonnyy-rst-art-220r.php", $nick, $comment);
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
		<title>новая ваз 2114 с кондиционером Термометр оконный RST, арт. 02090  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="новая ваз 2114 с кондиционером, электрокамины в краснодаре, масляный обогреватель радиатор, электрокамины в интернете, кондиционер свежий воздух, кондиционер для стирки, муфта привода вентилятора, стоимость монтажа кондиционера, silent канальный вентилятор, газовый нагреватель воздуха, конвекторы электрические nobo, маркировка вентиляторов, газовый обогреватель для рыбалки, метеостанции интернет магазин,  водонагреватели в новосибирске">
		<meta name="description" content="новая ваз 2114 с кондиционером Термометр шведской компании RST представляет собой классический измеритель уличн...">
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
						<a class="photo" href="photos/53eee9f3ea1d2998974c72bc653021ed.jpeg" title="новая ваз 2114 с кондиционером Термометр оконный RST, арт. 02090"><img src="photos/53eee9f3ea1d2998974c72bc653021ed.jpeg" alt="новая ваз 2114 с кондиционером Термометр оконный RST, арт. 02090" title="новая ваз 2114 с кондиционером Термометр оконный RST, арт. 02090 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/konvektor-ballu-plaza-bepe-4530r.php"><img src="photos/eb05146e761d4e4a107c352c95a48979.jpeg" alt="электрокамины в краснодаре Конвектор Ballu Plaza BEP|E-2000" title="электрокамины в краснодаре Конвектор Ballu Plaza BEP|E-2000"></a><h2>Конвектор Ballu Plaza BEP|E-2000</h2></li>
							<li><a href="http://klimattech.elitno.net/radiator-maslyanyy-timberk-tor-er-i-2810r.php"><img src="photos/fd20bcd726977fbfba1823f40dec4b7d.jpeg" alt="масляный обогреватель радиатор Радиатор масляный Timberk TOR 21.2512 ER I" title="масляный обогреватель радиатор Радиатор масляный Timberk TOR 21.2512 ER I"></a><h2>Радиатор масляный Timberk TOR 21.2512 ER I</h2></li>
							<li><a href="http://klimattech.elitno.net/radiator-maslyanyy-timberk-tor-mg-i-2000r.php"><img src="photos/491cee8378c9fb19c43cd73f2da43fe9.jpeg" alt="электрокамины в интернете Радиатор масляный Timberk TOR 21.1507 MG I" title="электрокамины в интернете Радиатор масляный Timberk TOR 21.1507 MG I"></a><h2>Радиатор масляный Timberk TOR 21.1507 MG I</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>новая ваз 2114 с кондиционером Термометр оконный RST, арт. 02090</h1>
						<div class="tb"><p>Цена: от <span class="price">220</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_1505.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Термометр шведской компании RST представляет собой классический измеритель уличной температуры. Простой дизайн дополняется точным механизмом. Термометр измеряет температуру в диапазоне -50° C – +50° C. Устройство удобно крепится к окну. Выбирая место размещения термометра, старайтесь избегать прямого попадания солнечных лучей.</p><p><b>Технические характеристики:</b></p><ul type=disc><li>Цвет: белый <li>Материал: пластик <li>Диапазон измеряемых температур: -50° C – +50° C </li></ul><p><b>Производитель:</b> RST (Швеция)</p> новая ваз 2114 с кондиционером</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/3eeda3242ec91559c0efb8195ed63fc0.jpeg" alt="кондиционер свежий воздух Масляный радиатор Timberk TOR 31.1807 RR" title="кондиционер свежий воздух Масляный радиатор Timberk TOR 31.1807 RR"><div class="box"><a href="http://klimattech.elitno.net/maslyanyy-radiator-timberk-tor-rr-2180r-2.php"><h3 class="title">кондиционер свежий воздух Масляный радиатор Timberk TOR 31.1807 RR</h3><p>от <span class="price">2180</span> руб.</p></a></div></li>
						<li><img src="photos/e2e13802c527e7b1f21c89052f28c59e.jpeg" alt="кондиционер для стирки Масляный радиатор Timberk  TOR 21.1206 ER I" title="кондиционер для стирки Масляный радиатор Timberk  TOR 21.1206 ER I"><div class="box" page="maslyanyy-radiator-timberk-tor-er-i-1890r"><span class="title">кондиционер для стирки Масляный радиатор Timberk  TOR 21.1206 ER I</span><p>от <span class="price">1890</span> руб.</p></div></li>
						<li><img src="photos/eaa9d36d06605b97c43cac0412f52c2b.jpeg" alt="муфта привода вентилятора Барометр  Футбольный мяч RST, арт. 07873" title="муфта привода вентилятора Барометр  Футбольный мяч RST, арт. 07873"><div class="box" page="barometr-futbolnyy-myach-rst-art-1750r"><span class="title">муфта привода вентилятора Барометр  Футбольный мяч RST, арт. 07873</span><p>от <span class="price">1750</span> руб.</p></div></li>
						<li><img src="photos/046459716f1e2eb91fd049e2bc31557f.jpeg" alt="стоимость монтажа кондиционера Обогреватель Бархатный сезон «Канделябр»" title="стоимость монтажа кондиционера Обогреватель Бархатный сезон «Канделябр»"><div class="box" page="obogrevatel-barhatnyy-sezon-«kandelyabr»-880r"><span class="title">стоимость монтажа кондиционера Обогреватель Бархатный сезон «Канделябр»</span><p>от <span class="price">880</span> руб.</p></div></li>
						<li class="large"><img src="photos/b5fd51a19760d14477030f4e11efdd42.jpeg" alt="silent канальный вентилятор Инфракрасный тепловентилятор Neoclima HH11 A" title="silent канальный вентилятор Инфракрасный тепловентилятор Neoclima HH11 A"><div class="box" page="infrakrasnyy-teploventilyator-neoclima-hh-a-1500r"><span class="title">silent канальный вентилятор Инфракрасный тепловентилятор Neoclima HH11 A</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li class="large"><img src="photos/d91affcba353aac790416e23f3c66d27.jpeg" alt="газовый нагреватель воздуха Vitek VT-2130 Керамический Тепловентилятор + увлажнитель , 1500Вт" title="газовый нагреватель воздуха Vitek VT-2130 Керамический Тепловентилятор + увлажнитель , 1500Вт"><div class="box" page="vitek-vt-keramicheskiy-teploventilyator-uvlazhnitel-vt-3150r"><span class="title">газовый нагреватель воздуха Vitek VT-2130 Керамический Тепловентилятор + увлажнитель , 1500Вт</span><p>от <span class="price">3150</span> руб.</p></div></li>
						<li class="large"><img src="photos/76050fccc40ec2957a70f5c9581d0609.jpeg" alt="конвекторы электрические nobo Тепловентилятор Atlanta ATH-102" title="конвекторы электрические nobo Тепловентилятор Atlanta ATH-102"><div class="box" page="teploventilyator-atlanta-ath-350r"><span class="title">конвекторы электрические nobo Тепловентилятор Atlanta ATH-102</span><p>от <span class="price">350</span> руб.</p></div></li>
						<li><img src="photos/f7b651727c936b973e40b0fd646bb983.jpeg" alt="маркировка вентиляторов Воздухоочиститель Redmond RAC-3703" title="маркировка вентиляторов Воздухоочиститель Redmond RAC-3703"><div class="box" page="vozduhoochistitel-redmond-rac-8990r"><span class="title">маркировка вентиляторов Воздухоочиститель Redmond RAC-3703</span><p>от <span class="price">8990</span> руб.</p></div></li>
						<li><img src="photos/be649db047bcdd414e10822bc2b60664.jpeg" alt="газовый обогреватель для рыбалки Электрогрелка Beurer HK54" title="газовый обогреватель для рыбалки Электрогрелка Beurer HK54"><div class="box" page="elektrogrelka-beurer-hk-2600r"><span class="title">газовый обогреватель для рыбалки Электрогрелка Beurer HK54</span><p>от <span class="price">2600</span> руб.</p></div></li>
						<li><img src="photos/2a2428e5e671208d94798fcf6ab9957c.png" alt="метеостанции интернет магазин Электрическая грелка ИНКОР 40x50 cм" title="метеостанции интернет магазин Электрическая грелка ИНКОР 40x50 cм"><div class="box" page="elektricheskaya-grelka-inkor-x-cm-550r"><span class="title">метеостанции интернет магазин Электрическая грелка ИНКОР 40x50 cм</span><p>от <span class="price">550</span> руб.</p></div></li>
						<li><img src="photos/b66a14369e6c809b5c98c67add180793.jpeg" alt="скачать программу для вентиляторов Камин Комплект Dimplex Holbrook DFP4756BW" title="скачать программу для вентиляторов Камин Комплект Dimplex Holbrook DFP4756BW"><div class="box" page="kamin-komplekt-dimplex-holbrook-dfpbw-32865r"><span class="title">скачать программу для вентиляторов Камин Комплект Dimplex Holbrook DFP4756BW</span><p>от <span class="price">32865</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("termometr-okonnyy-rst-art-220r.php", 0, -4); if (file_exists("comments/termometr-okonnyy-rst-art-220r.php")) require_once "comments/termometr-okonnyy-rst-art-220r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="termometr-okonnyy-rst-art-220r.php" method="post" onsubmit="return checkForm(this)">
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