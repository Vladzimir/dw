<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("elektroprostynya-beurer-ub-1900r.php","вентилятор для сауны");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("elektroprostynya-beurer-ub-1900r.php", $nick, $comment);
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
		<title>вентилятор для сауны Электропростыня Beurer UB30  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="вентилятор для сауны, вентилятор накладной, конвекторы отопления отзывы, вакуумирование кондиционера, водонагреватели газовые котлы, водонагреватели аристон 100, как установить водонагреватель, кондиционеры маквей, scarlett инфракрасный обогреватель, конвектор для андроид, проточный водонагреватель stiebel, конвектор из mkv в avi, установка инфракрасных обогревателей, гидромуфта привода вентилятора,  газовый конвектор принцип работы">
		<meta name="description" content="вентилятор для сауны Здоровый сон в холодной комнате обеспечит электропростыня Beurer UB30. Приятное ...">
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
						<a class="photo" href="photos/e01be7630870a250e33967b13b22cf7a.jpeg" title="вентилятор для сауны Электропростыня Beurer UB30"><img src="photos/e01be7630870a250e33967b13b22cf7a.jpeg" alt="вентилятор для сауны Электропростыня Beurer UB30" title="вентилятор для сауны Электропростыня Beurer UB30 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/karbonovyy-obogrevatel-zenet-smbt-2890r.php"><img src="photos/7083061770ff56bfe4b02a345dcc2c47.jpeg" alt="вентилятор накладной Карбоновый обогреватель ZENET SMB-60T" title="вентилятор накладной Карбоновый обогреватель ZENET SMB-60T"></a><h2>Карбоновый обогреватель ZENET SMB-60T</h2></li>
							<li><a href="http://klimattech.elitno.net/konvektor-ballu-plaza-bepe-3600r.php"><img src="photos/60bbbf503cc1f54478f2063da8fc6ed7.jpeg" alt="конвекторы отопления отзывы Конвектор Ballu Plaza BEP|E-1000" title="конвекторы отопления отзывы Конвектор Ballu Plaza BEP|E-1000"></a><h2>Конвектор Ballu Plaza BEP|E-1000</h2></li>
							<li><a href="http://klimattech.elitno.net/obogrevatel-ny-lf-1950r.php"><img src="photos/c9386d59c1539e6337f9db268ce3bbb6.jpeg" alt="вакуумирование кондиционера Обогреватель NY 17LF" title="вакуумирование кондиционера Обогреватель NY 17LF"></a><h2>Обогреватель NY 17LF</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>вентилятор для сауны Электропростыня Beurer UB30</h1>
						<div class="tb"><p>Цена: от <span class="price">1900</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_278.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Здоровый сон в холодной комнате обеспечит <strong>электропростыня Beurer UB30</strong>. Приятное тепло, приближенное к температуре тела человека, будет производиться простыней на протяжении всей ночи. <strong>Электропростыня Beurer TS20</strong> проста и надежна в эксплуатации. Вы может отрегулировать на свой выбор уровень температуры из предложенных трех режимов и спокойно наслаждаться отдыхом.</p><p><strong>Электропростыню Beurer UB30 </strong>можно стирать в машине-автомат.</p><p><strong>Особенности: </strong></p><ul type=disc><li>Система безопасности BSS Beurer <li>Количество температурных режимов 3 <li>Дисплей с подсветкой <li>Возможность машинной стирки <li>Материал - верхняя сторона - хлопок, нижняя сторона флис </li></ul><p><b>Техническая характеристика:</b></p><ul type=disc><li>Напряжение питания 220В <li>Потребляемая мощность 60 Вт <li>Размер(1,5 спальная) примерно 130x75 см </li></ul><p><strong>В комплект входит:</strong> основное устройство, инструкция</p><p><strong>Производство:</strong> Beurer (Германия)</p><p><strong>Гарантия:</strong> 1 год</p> вентилятор для сауны</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/d08a3769d6472d1c5dcfdd9b96e9984a.jpeg" alt="водонагреватели газовые котлы Масляный обогреватель  Atlanta АТН-2001" title="водонагреватели газовые котлы Масляный обогреватель  Atlanta АТН-2001"><div class="box" page="maslyanyy-obogrevatel-atlanta-atn-1700r"><span class="title">водонагреватели газовые котлы Масляный обогреватель  Atlanta АТН-2001</span><p>от <span class="price">1700</span> руб.</p></div></li>
						<li><img src="photos/bc1daaf95eee8347567dc4da1715dd67.jpeg" alt="водонагреватели аристон 100 Масляный обогреватель  Atlanta АТН-2002" title="водонагреватели аристон 100 Масляный обогреватель  Atlanta АТН-2002"><div class="box" page="maslyanyy-obogrevatel-atlanta-atn-1920r"><span class="title">водонагреватели аристон 100 Масляный обогреватель  Atlanta АТН-2002</span><p>от <span class="price">1920</span> руб.</p></div></li>
						<li><img src="photos/ad0835909603c49137f2b5d7613cae24.jpeg" alt="как установить водонагреватель Погодная  анимационная станция  RST  Meteolight IQ777 , арт. 02777" title="как установить водонагреватель Погодная  анимационная станция  RST  Meteolight IQ777 , арт. 02777"><div class="box" page="pogodnaya-animacionnaya-stanciya-rst-meteolight-iq-art-6300r"><span class="title">как установить водонагреватель Погодная  анимационная станция  RST  Meteolight IQ777 , арт. 02777</span><p>от <span class="price">6300</span> руб.</p></div></li>
						<li><img src="photos/dc025c12b462d53777cc586a428ad588.jpeg" alt="кондиционеры маквей Инфракрасный тепловентилятор Neoclima NCH-02" title="кондиционеры маквей Инфракрасный тепловентилятор Neoclima NCH-02"><div class="box" page="infrakrasnyy-teploventilyator-neoclima-nch-2050r"><span class="title">кондиционеры маквей Инфракрасный тепловентилятор Neoclima NCH-02</span><p>от <span class="price">2050</span> руб.</p></div></li>
						<li class="large"><img src="photos/a917aa3905e6fd88abcea6eeb0319427.jpeg" alt="scarlett инфракрасный обогреватель Керамический тепловентилятор Vitek VT-1759" title="scarlett инфракрасный обогреватель Керамический тепловентилятор Vitek VT-1759"><div class="box" page="keramicheskiy-teploventilyator-vitek-vt-1380r"><span class="title">scarlett инфракрасный обогреватель Керамический тепловентилятор Vitek VT-1759</span><p>от <span class="price">1380</span> руб.</p></div></li>
						<li class="large"><img src="photos/f0f3a7d2dd327f3c3358e366d97eb793.jpeg" alt="конвектор для андроид Очиститель-ионизатор воздуха универсальный Атмос УВОИ" title="конвектор для андроид Очиститель-ионизатор воздуха универсальный Атмос УВОИ"><div class="box" page="ochistitelionizator-vozduha-universalnyy-atmos-uvoi-1880r"><span class="title">конвектор для андроид Очиститель-ионизатор воздуха универсальный Атмос УВОИ</span><p>от <span class="price">1880</span> руб.</p></div></li>
						<li class="large"><img src="photos/8431705897587dd3b76f37d2dd61f575.jpeg" alt="проточный водонагреватель stiebel Увлажнитель ZENET 2720" title="проточный водонагреватель stiebel Увлажнитель ZENET 2720"><div class="box" page="uvlazhnitel-zenet-3850r"><span class="title">проточный водонагреватель stiebel Увлажнитель ZENET 2720</span><p>от <span class="price">3850</span> руб.</p></div></li>
						<li><img src="photos/b795a672f41e4f8abd03deb08303cef9.jpeg" alt="конвектор из mkv в avi Увлажнитель воздуха Boneco Air-O-Swiss E2441 холодный пар" title="конвектор из mkv в avi Увлажнитель воздуха Boneco Air-O-Swiss E2441 холодный пар"><div class="box" page="uvlazhnitel-vozduha-boneco-airoswiss-e-holodnyy-par-5780r"><span class="title">конвектор из mkv в avi Увлажнитель воздуха Boneco Air-O-Swiss E2441 холодный пар</span><p>от <span class="price">5780</span> руб.</p></div></li>
						<li><img src="photos/5c11708815961fee7eed3b7791a7e12a.jpeg" alt="установка инфракрасных обогревателей Electrolux  EFP W - 1250RC Электрокамин настенный" title="установка инфракрасных обогревателей Electrolux  EFP W - 1250RC Электрокамин настенный"><div class="box" page="electrolux-efp-w-rc-elektrokamin-nastennyy-16330r"><span class="title">установка инфракрасных обогревателей Electrolux  EFP W - 1250RC Электрокамин настенный</span><p>от <span class="price">16330</span> руб.</p></div></li>
						<li><img src="photos/f47a65e88ab4db3ee8b125a23b926cab.jpeg" alt="гидромуфта привода вентилятора Камин Комплект Dimplex Hastings СFP 49-49BW-EU" title="гидромуфта привода вентилятора Камин Комплект Dimplex Hastings СFP 49-49BW-EU"><div class="box" page="kamin-komplekt-dimplex-hastings-sfp-bweu-34430r"><span class="title">гидромуфта привода вентилятора Камин Комплект Dimplex Hastings СFP 49-49BW-EU</span><p>от <span class="price">34430</span> руб.</p></div></li>
						<li><img src="photos/395c26d925753d52d47567573a219548.jpeg" alt="сервисный центр кондиционеров Камин Комплект Dimplex Toronto угл+фронт CFP3902BW" title="сервисный центр кондиционеров Камин Комплект Dimplex Toronto угл+фронт CFP3902BW"><div class="box" page="kamin-komplekt-dimplex-toronto-uglfront-cfpbw-29109r"><span class="title">сервисный центр кондиционеров Камин Комплект Dimplex Toronto угл+фронт CFP3902BW</span><p>от <span class="price">29109</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("elektroprostynya-beurer-ub-1900r.php", 0, -4); if (file_exists("comments/elektroprostynya-beurer-ub-1900r.php")) require_once "comments/elektroprostynya-beurer-ub-1900r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="elektroprostynya-beurer-ub-1900r.php" method="post" onsubmit="return checkForm(this)">
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