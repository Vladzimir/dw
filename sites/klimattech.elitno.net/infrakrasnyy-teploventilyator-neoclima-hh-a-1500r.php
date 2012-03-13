<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("infrakrasnyy-teploventilyator-neoclima-hh-a-1500r.php","вентилятор дутьевой");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("infrakrasnyy-teploventilyator-neoclima-hh-a-1500r.php", $nick, $comment);
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
		<title>вентилятор дутьевой Инфракрасный тепловентилятор Neoclima HH11 A  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="вентилятор дутьевой, портативный кондиционер, конвектор аудио файлов скачать, кондиционеры dantex, сдвоенные вентиляторы, водонагреватели vaillant, изготовитель вентиляторов, стоимость монтажа кондиционера, бальзам кондиционер, объявления монтаж кондиционеров, теплоотдача конвекторов, ремень привода вентилятора, кондиционер для серверной, метеостанции интернет магазин,  горизонтальный водонагреватель">
		<meta name="description" content="вентилятор дутьевой Инфракрасный тепловентилятор Neoclima HH11 A имеет четыре степени мощности в соч...">
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
						<a class="photo" href="photos/b5fd51a19760d14477030f4e11efdd42.jpeg" title="вентилятор дутьевой Инфракрасный тепловентилятор Neoclima HH11 A"><img src="photos/b5fd51a19760d14477030f4e11efdd42.jpeg" alt="вентилятор дутьевой Инфракрасный тепловентилятор Neoclima HH11 A" title="вентилятор дутьевой Инфракрасный тепловентилятор Neoclima HH11 A -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-neoclima-ewh-3910r.php"><img src="photos/f357e7a340a2f5acb1779afd6efa8fbb.jpeg" alt="портативный кондиционер Водонагреватель Neoclima EWH 30" title="портативный кондиционер Водонагреватель Neoclima EWH 30"></a><h2>Водонагреватель Neoclima EWH 30</h2></li>
							<li><a href="http://klimattech.elitno.net/konvektor-timberk-tecps-m-2150r.php"><img src="photos/e1dddfd3a2f226bb6178ca8d189f51c5.jpeg" alt="конвектор аудио файлов скачать Конвектор Timberk TEC.PS2 M 1000" title="конвектор аудио файлов скачать Конвектор Timberk TEC.PS2 M 1000"></a><h2>Конвектор Timberk TEC.PS2 M 1000</h2></li>
							<li><a href="http://klimattech.elitno.net/radiator-maslyanyy-timberk-tor-er-i-2000r.php"><img src="photos/ffe9b7c6d5e2ad4da69baee60d1e3e57.jpeg" alt="кондиционеры dantex Радиатор масляный Timberk TOR 21.1507 ER I" title="кондиционеры dantex Радиатор масляный Timberk TOR 21.1507 ER I"></a><h2>Радиатор масляный Timberk TOR 21.1507 ER I</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>вентилятор дутьевой Инфракрасный тепловентилятор Neoclima HH11 A</h1>
						<div class="tb"><p>Цена: от <span class="price">1500</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_16478.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Инфракрасный тепловентилятор </b><b>Neoclima HH11 A </b>имеет четыре степени мощности в сочетании с проверенной защитой от перегревания. К прибору прилагается пульт дистанционного управления, который делает использование обогревателя значительно удобнее и проще. Стильный изящный дизайн позволит <b>Neoclima HH11 A </b>органично вписаться в любой современный интерьер.<b></b></p><p><b>Технические характеристики</b>:</p><ul type=\disc\><li>управление: электронное </li><li>тип нагревательного элемента: галоген </li><li>мощность: 0.4/0.8/1.2/1.6 кВт </li><li>пульт ДУ </li><li>изящный дизайн </li><li>защита от перегрева и опрокидывания </li><li>функция вращения </li><li>четыре степени мощности</li></ul><p><b>Гарантия</b>: 1 год</p><p><b>Производитель</b>: Neoclima</p><p><b>Страна</b>: Китай</p> вентилятор дутьевой</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/c2de30b57a5c75c5b9251fcabe80c0c9.jpeg" alt="сдвоенные вентиляторы Обогреватель NY 20LF" title="сдвоенные вентиляторы Обогреватель NY 20LF"><div class="box"><a href="http://klimattech.elitno.net/obogrevatel-ny-lf-1950r-2.php"><h3 class="title">сдвоенные вентиляторы Обогреватель NY 20LF</h3><p>от <span class="price">1950</span> руб.</p></a></div></li>
						<li><img src="photos/1ea7ff8c7ed815a8f66def82d7b1f7e5.jpeg" alt="водонагреватели vaillant Масляный обогреватель Atlanta АТН-2006R" title="водонагреватели vaillant Масляный обогреватель Atlanta АТН-2006R"><div class="box" page="maslyanyy-obogrevatel-atlanta-atnr-2390r"><span class="title">водонагреватели vaillant Масляный обогреватель Atlanta АТН-2006R</span><p>от <span class="price">2390</span> руб.</p></div></li>
						<li><img src="photos/cbc44bc22b112f1d3347aec6358c74a8.gif" alt="изготовитель вентиляторов Погодная анимационная станция RST meteolight 520, арт. 02520" title="изготовитель вентиляторов Погодная анимационная станция RST meteolight 520, арт. 02520"><div class="box" page="pogodnaya-animacionnaya-stanciya-rst-meteolight-art-6090r"><span class="title">изготовитель вентиляторов Погодная анимационная станция RST meteolight 520, арт. 02520</span><p>от <span class="price">6090</span> руб.</p></div></li>
						<li><img src="photos/046459716f1e2eb91fd049e2bc31557f.jpeg" alt="стоимость монтажа кондиционера Обогреватель Бархатный сезон «Канделябр»" title="стоимость монтажа кондиционера Обогреватель Бархатный сезон «Канделябр»"><div class="box" page="obogrevatel-barhatnyy-sezon-«kandelyabr»-880r"><span class="title">стоимость монтажа кондиционера Обогреватель Бархатный сезон «Канделябр»</span><p>от <span class="price">880</span> руб.</p></div></li>
						<li class="large"><img src="photos/a01db44cda068009da1951bb464b1916.jpeg" alt="бальзам кондиционер Обогреватель Бархатный сезон «Парусник»" title="бальзам кондиционер Обогреватель Бархатный сезон «Парусник»"><div class="box" page="obogrevatel-barhatnyy-sezon-«parusnik»-880r"><span class="title">бальзам кондиционер Обогреватель Бархатный сезон «Парусник»</span><p>от <span class="price">880</span> руб.</p></div></li>
						<li class="large"><img src="photos/051d7dedae25fb49a0d213f9e7739d36.jpeg" alt="объявления монтаж кондиционеров Тепловентилятор Vitek VT-1735GY" title="объявления монтаж кондиционеров Тепловентилятор Vitek VT-1735GY"><div class="box" page="teploventilyator-vitek-vtgy-950r"><span class="title">объявления монтаж кондиционеров Тепловентилятор Vitek VT-1735GY</span><p>от <span class="price">950</span> руб.</p></div></li>
						<li class="large"><img src="photos/66e0aa1057db078ec30260e7078f7d70.jpeg" alt="теплоотдача конвекторов Очиститель воздуха Neoclima NAP" title="теплоотдача конвекторов Очиститель воздуха Neoclima NAP"><div class="box" page="ochistitel-vozduha-neoclima-nap-7000r"><span class="title">теплоотдача конвекторов Очиститель воздуха Neoclima NAP</span><p>от <span class="price">7000</span> руб.</p></div></li>
						<li><img src="photos/dcbf0b1a09446b0768f079fe16310b82.jpeg" alt="ремень привода вентилятора Timberk TMS TEC 05.HM Увлажнитель" title="ремень привода вентилятора Timberk TMS TEC 05.HM Увлажнитель"><div class="box" page="timberk-tms-tec-hm-uvlazhnitel-220r"><span class="title">ремень привода вентилятора Timberk TMS TEC 05.HM Увлажнитель</span><p>от <span class="price">220</span> руб.</p></div></li>
						<li><img src="photos/771e29e896f7ce0ffaac8f209d3a2130.jpeg" alt="кондиционер для серверной Электрогрелка Microlife FH 80" title="кондиционер для серверной Электрогрелка Microlife FH 80"><div class="box" page="elektrogrelka-microlife-fh-1240r"><span class="title">кондиционер для серверной Электрогрелка Microlife FH 80</span><p>от <span class="price">1240</span> руб.</p></div></li>
						<li><img src="photos/2a2428e5e671208d94798fcf6ab9957c.png" alt="метеостанции интернет магазин Электрическая грелка ИНКОР 40x50 cм" title="метеостанции интернет магазин Электрическая грелка ИНКОР 40x50 cм"><div class="box" page="elektricheskaya-grelka-inkor-x-cm-550r"><span class="title">метеостанции интернет магазин Электрическая грелка ИНКОР 40x50 cм</span><p>от <span class="price">550</span> руб.</p></div></li>
						<li><img src="photos/e585d1e72485c3e967023a9b09b2259c.jpeg" alt="тепловые пушки хабаровск Камин Dimplex Obsidian" title="тепловые пушки хабаровск Камин Dimplex Obsidian"><div class="box" page="kamin-dimplex-obsidian-29735r"><span class="title">тепловые пушки хабаровск Камин Dimplex Obsidian</span><p>от <span class="price">29735</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("infrakrasnyy-teploventilyator-neoclima-hh-a-1500r.php", 0, -4); if (file_exists("comments/infrakrasnyy-teploventilyator-neoclima-hh-a-1500r.php")) require_once "comments/infrakrasnyy-teploventilyator-neoclima-hh-a-1500r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="infrakrasnyy-teploventilyator-neoclima-hh-a-1500r.php" method="post" onsubmit="return checkForm(this)">
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