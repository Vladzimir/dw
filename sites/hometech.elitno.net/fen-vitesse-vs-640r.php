<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("fen-vitesse-vs-640r.php","весы карманные электронные");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("fen-vitesse-vs-640r.php", $nick, $comment);
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
		<title>весы карманные электронные Фен Vitesse VS-943  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="весы карманные электронные, главное зеркало, терапия массаж, купить машинку для стрижки животных, обратное зеркало, зеркала в доме, дарсонваль ультратек отзывы, эпилятор philips hp 6570, массаж в севастополе, чистое зеркало, ожог в солярии, купить восковой эпилятор, зеркала в доме, сонник зеркало разбитое,  электронные весы новосибирск">
		<meta name="description" content="весы карманные электронные Vitesse VS-943 – это компактный фен, который вы можете не  только использовать в...">
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
						<a class="photo" href="photos/df60e9368f4af47e5694b1e1f79f6d7a.jpeg" title="весы карманные электронные Фен Vitesse VS-943"><img src="photos/df60e9368f4af47e5694b1e1f79f6d7a.jpeg" alt="весы карманные электронные Фен Vitesse VS-943" title="весы карманные электронные Фен Vitesse VS-943 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/bigudi-elektricheskie-binatone-hr-black-purple-1600r.php"><img src="photos/6e44ecb4d824649a428e6f37c98ceedb.jpeg" alt="главное зеркало Бигуди электрические Binatone HR-20 Black Purple" title="главное зеркало Бигуди электрические Binatone HR-20 Black Purple"></a><h2>Бигуди электрические Binatone HR-20 Black Purple</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-beurer-gs-spiegelled-steklo-2600r.php"><img src="photos/648e5c85fd28c2211dee143be1d4f432.jpeg" alt="терапия массаж Весы электронные напольные Beurer GS46 Spiegel-LED (стекло)" title="терапия массаж Весы электронные напольные Beurer GS46 Spiegel-LED (стекло)"></a><h2>Весы электронные напольные Beurer GS46 Spiegel-LED (стекло)</h2></li>
							<li><a href="http://hometech.elitno.net/valik-kruglyy-ld-usm-1200r.php"><img src="photos/cf0d849803c50ecf1fcbb2de09b6624e.jpeg" alt="купить машинку для стрижки животных Валик круглый L61D22 USM-001" title="купить машинку для стрижки животных Валик круглый L61D22 USM-001"></a><h2>Валик круглый L61D22 USM-001</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>весы карманные электронные Фен Vitesse VS-943</h1>
						<div class="tb"><p>Цена: от <span class="price">640</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_21091.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Vitesse VS-943 – это компактный фен, который вы можете не  только использовать в домашних условиях, но и носить в сумочке в любое время.  Фен Vitesse VS-943 обладает функцией подачи холодного воздуха и 2 режимами  интенсивности воздушного потока, что обеспечивает не только быструю, но и  комфортную сушку волос. Кроме того, данная модель включает в себя функцию  защиты от перегрева, которая препятствует повреждению волос горячим воздухом. Кстати,  всех ценительниц прекрасного порадует и стильный дизайн этой модели фена. Также  в комплекте с феном Vitesse VS-943 идет концентратор и насадки.</p><p><strong>Характеристики:</strong></p><ul type=\disc\><li>Тип: компактный фен;</li><li>Мощность: 1350 Вт;</li><li>Складная ручка;</li><li>Количество режимов: 2;</li><li>Дополнительные режимы: подача холодного воздуха;</li><li>Особенности: защита от перегрева;</li><li>В комплекте: концентратор, насадки;</li><li>Цвет на выбор: белый, зеленый, сиреневый.</li></ul><p><strong>Производитель:  Франция</strong></p> весы карманные электронные</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/ab60edc5e5d6d0d93bae30a2db89bedb.jpeg" alt="обратное зеркало Тренажер  для пресса Beurer EM30" title="обратное зеркало Тренажер  для пресса Beurer EM30"><div class="box"><a href="http://hometech.elitno.net/trenazher-dlya-pressa-beurer-em-2100r.php"><h3 class="title">обратное зеркало Тренажер  для пресса Beurer EM30</h3><p>от <span class="price">2100</span> руб.</p></a></div></li>
						<li><img src="photos/141e64aa65d868c3a97b8e656348cb5f.jpeg" alt="зеркала в доме Аппликатор Ляпко Квадро 6,2" title="зеркала в доме Аппликатор Ляпко Квадро 6,2"><div class="box" page="applikator-lyapko-kvadro-1360r"><span class="title">зеркала в доме Аппликатор Ляпко Квадро 6,2</span><p>от <span class="price">1360</span> руб.</p></div></li>
						<li><img src="photos/a8543d64cd722ca1a2055d5dba2188d4.jpeg" alt="дарсонваль ультратек отзывы Массажер Тетрабол" title="дарсонваль ультратек отзывы Массажер Тетрабол"><div class="box" page="massazher-tetrabol-550r"><span class="title">дарсонваль ультратек отзывы Массажер Тетрабол</span><p>от <span class="price">550</span> руб.</p></div></li>
						<li><img src="photos/c2c64becf445fe1abeaa76be59229b33.jpeg" alt="эпилятор philips hp 6570 Массажер Nozomi MH-103" title="эпилятор philips hp 6570 Массажер Nozomi MH-103"><div class="box" page="massazher-nozomi-mh-1700r"><span class="title">эпилятор philips hp 6570 Массажер Nozomi MH-103</span><p>от <span class="price">1700</span> руб.</p></div></li>
						<li class="large"><img src="photos/9f1f118485079a64f3c566d47f0bfff9.jpeg" alt="массаж в севастополе Скульптор тела массажер Relax & Tone (Релакс энд Тон)" title="массаж в севастополе Скульптор тела массажер Relax & Tone (Релакс энд Тон)"><div class="box" page="skulptor-tela-massazher-relax-tone-relaks-end-ton-1100r"><span class="title">массаж в севастополе Скульптор тела массажер Relax & Tone (Релакс энд Тон)</span><p>от <span class="price">1100</span> руб.</p></div></li>
						<li class="large"><img src="photos/162e8aba5b7c2b6e04d42b21cc7de697.jpeg" alt="чистое зеркало Массажер Beurer MG130 для шеи" title="чистое зеркало Массажер Beurer MG130 для шеи"><div class="box" page="massazher-beurer-mg-dlya-shei-3200r"><span class="title">чистое зеркало Массажер Beurer MG130 для шеи</span><p>от <span class="price">3200</span> руб.</p></div></li>
						<li class="large"><img src="photos/2da10774211f671836a3e448d640220b.png" alt="ожог в солярии Массажер для стоп US-Medica Omega" title="ожог в солярии Массажер для стоп US-Medica Omega"><div class="box" page="massazher-dlya-stop-usmedica-omega-4500r"><span class="title">ожог в солярии Массажер для стоп US-Medica Omega</span><p>от <span class="price">4500</span> руб.</p></div></li>
						<li><img src="photos/a5613a45eb2dc18d490d06da90b8c83c.jpeg" alt="купить восковой эпилятор Массажная накидка US-Medica Sensation LMC-070" title="купить восковой эпилятор Массажная накидка US-Medica Sensation LMC-070"><div class="box" page="massazhnaya-nakidka-usmedica-sensation-lmc-15000r"><span class="title">купить восковой эпилятор Массажная накидка US-Medica Sensation LMC-070</span><p>от <span class="price">15000</span> руб.</p></div></li>
						<li><img src="photos/268da259ea6cd611200b950164247b1d.jpeg" alt="зеркала в доме Машинка для стрижки Atlanta АТН-859" title="зеркала в доме Машинка для стрижки Atlanta АТН-859"><div class="box" page="mashinka-dlya-strizhki-atlanta-atn-490r"><span class="title">зеркала в доме Машинка для стрижки Atlanta АТН-859</span><p>от <span class="price">490</span> руб.</p></div></li>
						<li><img src="photos/e69da6f2452895f2eb5bd226ad7e5f3c.jpeg" alt="сонник зеркало разбитое Фен Valera Swiss Turbo 7000RC Rotocord" title="сонник зеркало разбитое Фен Valera Swiss Turbo 7000RC Rotocord"><div class="box" page="fen-valera-swiss-turbo-rc-rotocord-2920r"><span class="title">сонник зеркало разбитое Фен Valera Swiss Turbo 7000RC Rotocord</span><p>от <span class="price">2920</span> руб.</p></div></li>
						<li><img src="photos/9b24354d91fc7d0efe4ae6ea4a04db99.jpeg" alt="игры делаем маникюр и педикюр Фен Atlanta АТН-864" title="игры делаем маникюр и педикюр Фен Atlanta АТН-864"><div class="box" page="fen-atlanta-atn-720r"><span class="title">игры делаем маникюр и педикюр Фен Atlanta АТН-864</span><p>от <span class="price">720</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("fen-vitesse-vs-640r.php", 0, -4); if (file_exists("comments/fen-vitesse-vs-640r.php")) require_once "comments/fen-vitesse-vs-640r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="fen-vitesse-vs-640r.php" method="post" onsubmit="return checkForm(this)">
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