<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("proekcionnaya-pogodnaya-stanciya-rst-2310r.php","устройство вентилятора");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("proekcionnaya-pogodnaya-stanciya-rst-2310r.php", $nick, $comment);
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
		<title>устройство вентилятора Проекционная погодная станция RST 32712  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="устройство вентилятора, стоимость тепловой завесы, вентилятор для сауны, технология кондиционеров, кондиционеры кассетного типа, конвектор с вентилятором, программа конвектор видео, изготовитель вентиляторов, уличные обогреватели, вентилятор вентс 100, как снять вентилятор отопителя, монтаж кондиционера заказчика, чертеж кондиционера, водонагреватель реал,  программа подбора вентиляторов">
		<meta name="description" content="устройство вентилятора Проекционная погодная станция предназначена специально для определения температу...">
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
						<a class="photo" href="photos/b1e761d740cae58b4b6393acdd9fb6d7.jpeg" title="устройство вентилятора Проекционная погодная станция RST 32712"><img src="photos/b1e761d740cae58b4b6393acdd9fb6d7.jpeg" alt="устройство вентилятора Проекционная погодная станция RST 32712" title="устройство вентилятора Проекционная погодная станция RST 32712 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-timberk-swh-fs-v-7080r.php"><img src="photos/34459b4148fee77d2241856800d108c8.jpeg" alt="стоимость тепловой завесы Водонагреватель Timberk SWH FS3 30 V" title="стоимость тепловой завесы Водонагреватель Timberk SWH FS3 30 V"></a><h2>Водонагреватель Timberk SWH FS3 30 V</h2></li>
							<li><a href="http://klimattech.elitno.net/konvekcionnyy-radiator-timberk-trra-el-3270r.php"><img src="photos/07893d42fc243f8aca2666e180d908a8.jpeg" alt="вентилятор для сауны Конвекционный радиатор Timberk TRR.A EL" title="вентилятор для сауны Конвекционный радиатор Timberk TRR.A EL"></a><h2>Конвекционный радиатор Timberk TRR.A EL</h2></li>
							<li><a href="http://klimattech.elitno.net/splitsistema-neoclima-nsnuhahinr-21900r.php"><img src="photos/fa85dda66f5e6e8c0e413d3d9959f6e7.jpeg" alt="технология кондиционеров Сплит-система NeoClima NS/NU-HAH12INR4" title="технология кондиционеров Сплит-система NeoClima NS/NU-HAH12INR4"></a><h2>Сплит-система NeoClima NS/NU-HAH12INR4</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>устройство вентилятора Проекционная погодная станция RST 32712</h1>
						<div class="tb"><p>Цена: от <span class="price">2310</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_22452.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Проекционная погодная станция предназначена специально для определения температуры и уровня атмосферного давления как внутри помещения, так и снаружи. Проекционная погодная станция RST 32712 имеет оптимальные габариты (165х115х53 мм), огромное количество функций и привлекательный дизайн. При использовании этого прибора полученные данные удобно отображаются на стене с помощью специального проектора, при этом подсветка дисплея меняется в зависимости от изменения температуры. Проекционная погодная станция RST 32712 не только проинформирует вас о том, какая за окном температура воздуха и атмосферное давление, но и предупредит о возможном гололеде и наступлении заморозков. Помимо основных функций погодная станция запоминает все максимальные и минимальные значения температуры, полученные с помощью радиодатчиков, имеет встроенный будильник и календарь. Внешнюю привлекательность этому прибору придает элегантный серебристый цвет корпуса. </p><p><strong>Характеристики:</strong></p><ul type=disc><li>Размер: 165x115х53 мм; <li>Подсветка дисплея меняется в зависимости от изменения температуры; <li>Постоянная подсветка от сетевого адаптера; <li>Измерение температуры в помещении и за окном; <li>Тенденция изменения температуры; <li>Максимальное/минимальное зарегистрированные значения температур за текущие сутки; <li>Часы с rcc сигналом, календарь, будильник; <li>Сигнализатор образования гололеда; <li>Индикатор состояния батареи базовой станции и радиодатчика; <li>Количество датчиков возможных к подключению: 5; <li>Диапазон измерения температуры внутри помещения: 0 °С – +50 °С; <li>Погрешность температуры 0,1 °С; <li>Формат часов: 12/24; <li>Питание: 2 батареи типа АА, сетевой адаптер; <li>В комплекте: основная метеостанция, инструкция на русском языке, сетевой адаптер, гарантийный талон, батареи типа АА 2шт; <li>Цвет корпуса: серебристый. </li></ul><p><strong>Производитель: </strong><strong>RST (Швеция)</strong><br><strong>Гарантия: 1 год</strong></p> устройство вентилятора</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/5f85c6442525c86595a794bbc303fa83.jpeg" alt="кондиционеры кассетного типа Масляный радиатор Timberk TOR 21 AC" title="кондиционеры кассетного типа Масляный радиатор Timberk TOR 21 AC"><div class="box" page="maslyanyy-radiator-timberk-tor-ac-1800r"><span class="title">кондиционеры кассетного типа Масляный радиатор Timberk TOR 21 AC</span><p>от <span class="price">1800</span> руб.</p></div></li>
						<li><img src="photos/70a147d8cce26e099ee8d5c87f11d19c.jpeg" alt="конвектор с вентилятором Масляный радиатор Timberk TOR 41.2009 FH" title="конвектор с вентилятором Масляный радиатор Timberk TOR 41.2009 FH"><div class="box" page="maslyanyy-radiator-timberk-tor-fh-2700r"><span class="title">конвектор с вентилятором Масляный радиатор Timberk TOR 41.2009 FH</span><p>от <span class="price">2700</span> руб.</p></div></li>
						<li><img src="photos/cf662e48865e6f27537ecc36f5b26f9c.jpeg" alt="программа конвектор видео Масляный радиатор Timberk TOR 51.2007 EZ I" title="программа конвектор видео Масляный радиатор Timberk TOR 51.2007 EZ I"><div class="box" page="maslyanyy-radiator-timberk-tor-ez-i-2900r"><span class="title">программа конвектор видео Масляный радиатор Timberk TOR 51.2007 EZ I</span><p>от <span class="price">2900</span> руб.</p></div></li>
						<li><img src="photos/cbc44bc22b112f1d3347aec6358c74a8.gif" alt="изготовитель вентиляторов Погодная анимационная станция RST meteolight 520, арт. 02520" title="изготовитель вентиляторов Погодная анимационная станция RST meteolight 520, арт. 02520"><div class="box" page="pogodnaya-animacionnaya-stanciya-rst-meteolight-art-6090r"><span class="title">изготовитель вентиляторов Погодная анимационная станция RST meteolight 520, арт. 02520</span><p>от <span class="price">6090</span> руб.</p></div></li>
						<li class="large"><img src="photos/b71fd8e694839d507d1ebf508f396381.jpeg" alt="уличные обогреватели Assistant AH-1971 Метеостанция" title="уличные обогреватели Assistant AH-1971 Метеостанция"><div class="box" page="assistant-ah-meteostanciya-1600r"><span class="title">уличные обогреватели Assistant AH-1971 Метеостанция</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li class="large"><img src="photos/6fef5ba0c0459d1b01fda28ea732e773.jpeg" alt="вентилятор вентс 100 Assistant AH-1983 Трехканальный радиодатчик" title="вентилятор вентс 100 Assistant AH-1983 Трехканальный радиодатчик"><div class="box" page="assistant-ah-trehkanalnyy-radiodatchik-450r"><span class="title">вентилятор вентс 100 Assistant AH-1983 Трехканальный радиодатчик</span><p>от <span class="price">450</span> руб.</p></div></li>
						<li class="large"><img src="photos/f2c4271f8351e070194359abb53c123d.jpeg" alt="как снять вентилятор отопителя Обогреватель Бархатный сезон «Бабочки»" title="как снять вентилятор отопителя Обогреватель Бархатный сезон «Бабочки»"><div class="box" page="obogrevatel-barhatnyy-sezon-«babochki»-880r"><span class="title">как снять вентилятор отопителя Обогреватель Бархатный сезон «Бабочки»</span><p>от <span class="price">880</span> руб.</p></div></li>
						<li><img src="photos/ab919beb2a8fc47869d21aaee94c925b.jpeg" alt="монтаж кондиционера заказчика NEOCLIMA FH-03 Тепловентиляторы" title="монтаж кондиционера заказчика NEOCLIMA FH-03 Тепловентиляторы"><div class="box" page="neoclima-fh-teploventilyatory-550r"><span class="title">монтаж кондиционера заказчика NEOCLIMA FH-03 Тепловентиляторы</span><p>от <span class="price">550</span> руб.</p></div></li>
						<li><img src="photos/19665b1d21cfc492b8c9bd9d28c78994.jpeg" alt="чертеж кондиционера Тепловая завеса Ballu BHC-5.000 SB" title="чертеж кондиционера Тепловая завеса Ballu BHC-5.000 SB"><div class="box" page="teplovaya-zavesa-ballu-bhc-sb-5050r"><span class="title">чертеж кондиционера Тепловая завеса Ballu BHC-5.000 SB</span><p>от <span class="price">5050</span> руб.</p></div></li>
						<li><img src="photos/8715a2f096ad000778af417d553ba5fd.jpeg" alt="водонагреватель реал Увлажнитель воздуха ультразвуковой Черепаха B.Well WH-100" title="водонагреватель реал Увлажнитель воздуха ультразвуковой Черепаха B.Well WH-100"><div class="box" page="uvlazhnitel-vozduha-ultrazvukovoy-cherepaha-bwell-wh-1650r"><span class="title">водонагреватель реал Увлажнитель воздуха ультразвуковой Черепаха B.Well WH-100</span><p>от <span class="price">1650</span> руб.</p></div></li>
						<li><img src="photos/9cc3a3ceb02e758ecf8288587202781f.jpeg" alt="вентилятор асинхронный Мойка воздуха Electrolux EHAW 7525D" title="вентилятор асинхронный Мойка воздуха Electrolux EHAW 7525D"><div class="box" page="moyka-vozduha-electrolux-ehaw-d-15450r-3"><span class="title">вентилятор асинхронный Мойка воздуха Electrolux EHAW 7525D</span><p>от <span class="price">15450</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("proekcionnaya-pogodnaya-stanciya-rst-2310r.php", 0, -4); if (file_exists("comments/proekcionnaya-pogodnaya-stanciya-rst-2310r.php")) require_once "comments/proekcionnaya-pogodnaya-stanciya-rst-2310r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="proekcionnaya-pogodnaya-stanciya-rst-2310r.php" method="post" onsubmit="return checkForm(this)">
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