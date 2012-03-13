<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("timberk-tms-hd-uvlazhnitel-vozduha-i-polotencesushitel-240r.php","инверторные кондиционеры lg");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("timberk-tms-hd-uvlazhnitel-vozduha-i-polotencesushitel-240r.php", $nick, $comment);
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
		<title>инверторные кондиционеры lg Timberk TMS 07.HD2 Увлажнитель воздуха и полотенцесушитель  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="инверторные кондиционеры lg, очистка кондиционера, холодильный вентилятор, бытовые инфракрасные обогреватели, купить водонагреватель самара, водонагреватели vaillant, изготовитель вентиляторов, тепловая пушка дизельная аренда, датчик температуры включения вентилятора, видео конвектор скачать торрент, реле вентилятора печки, трубопровод кондиционера, вентилятор асинхронный, кондиционер обогреватель,  компьютерный вентилятор">
		<meta name="description" content="инверторные кондиционеры lg Увлажнитель воздуха и полотенцесушитель Timberk TMS 07.HD2 для конвекторов Timbe...">
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
						<a class="photo" href="photos/529d01653dbf042175d64e352c3bb2e4.jpeg" title="инверторные кондиционеры lg Timberk TMS 07.HD2 Увлажнитель воздуха и полотенцесушитель"><img src="photos/529d01653dbf042175d64e352c3bb2e4.jpeg" alt="инверторные кондиционеры lg Timberk TMS 07.HD2 Увлажнитель воздуха и полотенцесушитель" title="инверторные кондиционеры lg Timberk TMS 07.HD2 Увлажнитель воздуха и полотенцесушитель -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/konvektor-timberk-tece-m-2080r.php"><img src="photos/ddc0aab203cdce31375d769ac0564ff3.jpeg" alt="очистка кондиционера Конвектор Timberk TEC.E1 M 1000" title="очистка кондиционера Конвектор Timberk TEC.E1 M 1000"></a><h2>Конвектор Timberk TEC.E1 M 1000</h2></li>
							<li><a href="http://klimattech.elitno.net/kondicioner-mobilnyy-timberk-ac-tim-h-p-27300r.php"><img src="photos/3b0b3a04248aa9404f4791e383647212.jpeg" alt="холодильный вентилятор Кондиционер мобильный Timberk AC TIM 12H P1" title="холодильный вентилятор Кондиционер мобильный Timberk AC TIM 12H P1"></a><h2>Кондиционер мобильный Timberk AC TIM 12H P1</h2></li>
							<li><a href="http://klimattech.elitno.net/radiator-maslyanyy-timberk-tor-bt-i-1950r.php"><img src="photos/7c8bd16774bf9fee3455010ae392ebb1.jpeg" alt="бытовые инфракрасные обогреватели Радиатор масляный Timberk TOR 21.1507 BT I" title="бытовые инфракрасные обогреватели Радиатор масляный Timberk TOR 21.1507 BT I"></a><h2>Радиатор масляный Timberk TOR 21.1507 BT I</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>инверторные кондиционеры lg Timberk TMS 07.HD2 Увлажнитель воздуха и полотенцесушитель</h1>
						<div class="tb"><p>Цена: от <span class="price">240</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18296.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Увлажнитель воздуха и полотенцесушитель Timberk TMS 07.HD2 для конвекторов Timberk серий TEC.PF2…1500 IN, TEC.PS1…1000 IN. Они могут быть установлены как вместе, так и по отдельности. Увлажнитель наполняется водой, после чего она начинает испаряться, делая воздух более влажным, тем самым снимая усталость. Сушилка для полотенца может использоваться небольшими полотенцами, подходящими по размеру. </p><p><strong>Характеристики:</strong></p><ul type=disc><li>Для конвекторов Timberk серии TEC.PF2…1500 IN, TEC.PS1…1000 IN <li>Цвет: белый </li></ul><p><strong>Производитель: Швеция</strong></p> инверторные кондиционеры lg</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/5ce3ea10b3aa81699ed44de939035e9e.jpeg" alt="купить водонагреватель самара Масляный радиатор Neoclima серия Baby" title="купить водонагреватель самара Масляный радиатор Neoclima серия Baby"><div class="box" page="maslyanyy-radiator-neoclima-seriya-baby-1350r"><span class="title">купить водонагреватель самара Масляный радиатор Neoclima серия Baby</span><p>от <span class="price">1350</span> руб.</p></div></li>
						<li><img src="photos/1ea7ff8c7ed815a8f66def82d7b1f7e5.jpeg" alt="водонагреватели vaillant Масляный обогреватель Atlanta АТН-2006R" title="водонагреватели vaillant Масляный обогреватель Atlanta АТН-2006R"><div class="box" page="maslyanyy-obogrevatel-atlanta-atnr-2390r"><span class="title">водонагреватели vaillant Масляный обогреватель Atlanta АТН-2006R</span><p>от <span class="price">2390</span> руб.</p></div></li>
						<li><img src="photos/cbc44bc22b112f1d3347aec6358c74a8.gif" alt="изготовитель вентиляторов Погодная анимационная станция RST meteolight 520, арт. 02520" title="изготовитель вентиляторов Погодная анимационная станция RST meteolight 520, арт. 02520"><div class="box" page="pogodnaya-animacionnaya-stanciya-rst-meteolight-art-6090r"><span class="title">изготовитель вентиляторов Погодная анимационная станция RST meteolight 520, арт. 02520</span><p>от <span class="price">6090</span> руб.</p></div></li>
						<li><img src="photos/82995395f4c5b857d2a196e995f28a79.jpeg" alt="тепловая пушка дизельная аренда Тепловентилятор электрический напольный Timberk TFH T20FSN.PQ" title="тепловая пушка дизельная аренда Тепловентилятор электрический напольный Timberk TFH T20FSN.PQ"><div class="box" page="teploventilyator-elektricheskiy-napolnyy-timberk-tfh-tfsnpq-2650r"><span class="title">тепловая пушка дизельная аренда Тепловентилятор электрический напольный Timberk TFH T20FSN.PQ</span><p>от <span class="price">2650</span> руб.</p></div></li>
						<li class="large"><img src="photos/d91d9d3ad2e81814b03a2fc1dcb09a05.jpeg" alt="датчик температуры включения вентилятора Тепловентилятор электрический напольный Timberk TFH T20FSN.SQ" title="датчик температуры включения вентилятора Тепловентилятор электрический напольный Timberk TFH T20FSN.SQ"><div class="box" page="teploventilyator-elektricheskiy-napolnyy-timberk-tfh-tfsnsq-1890r"><span class="title">датчик температуры включения вентилятора Тепловентилятор электрический напольный Timberk TFH T20FSN.SQ</span><p>от <span class="price">1890</span> руб.</p></div></li>
						<li class="large"><img src="photos/9ede98e92ae59e358c17a02074f2f610.jpeg" alt="видео конвектор скачать торрент Картридж с ионно-обменной смолой Neoclima LIF 007" title="видео конвектор скачать торрент Картридж с ионно-обменной смолой Neoclima LIF 007"><div class="box" page="kartridzh-s-ionnoobmennoy-smoloy-neoclima-lif-280r"><span class="title">видео конвектор скачать торрент Картридж с ионно-обменной смолой Neoclima LIF 007</span><p>от <span class="price">280</span> руб.</p></div></li>
						<li class="large"><img src="photos/2fe8fc76cb7a8e6d1c449b297fc5d429.jpeg" alt="реле вентилятора печки Очиститель-ионизатор воздуха Ballu AP210F3" title="реле вентилятора печки Очиститель-ионизатор воздуха Ballu AP210F3"><div class="box" page="ochistitelionizator-vozduha-ballu-apf-4600r"><span class="title">реле вентилятора печки Очиститель-ионизатор воздуха Ballu AP210F3</span><p>от <span class="price">4600</span> руб.</p></div></li>
						<li><img src="photos/e6b9ca667e9f6c268da3303164b15850.jpeg" alt="трубопровод кондиционера Увлажнитель воздуха ультразвуковой Vitek VT-1761" title="трубопровод кондиционера Увлажнитель воздуха ультразвуковой Vitek VT-1761"><div class="box" page="uvlazhnitel-vozduha-ultrazvukovoy-vitek-vt-2250r"><span class="title">трубопровод кондиционера Увлажнитель воздуха ультразвуковой Vitek VT-1761</span><p>от <span class="price">2250</span> руб.</p></div></li>
						<li><img src="photos/9cc3a3ceb02e758ecf8288587202781f.jpeg" alt="вентилятор асинхронный Мойка воздуха Electrolux EHAW 7525D" title="вентилятор асинхронный Мойка воздуха Electrolux EHAW 7525D"><div class="box" page="moyka-vozduha-electrolux-ehaw-d-15450r-3"><span class="title">вентилятор асинхронный Мойка воздуха Electrolux EHAW 7525D</span><p>от <span class="price">15450</span> руб.</p></div></li>
						<li><img src="photos/f10c15039e78f4d59fa0e355bb473278.jpeg" alt="кондиционер обогреватель Увлажнитель воздуха Beurer LB50" title="кондиционер обогреватель Увлажнитель воздуха Beurer LB50"><div class="box" page="uvlazhnitel-vozduha-beurer-lb-3500r"><span class="title">кондиционер обогреватель Увлажнитель воздуха Beurer LB50</span><p>от <span class="price">3500</span> руб.</p></div></li>
						<li><img src="photos/998c8fbeb09f1a5b36f55e00d62d9435.png" alt="водонагреватели в краснодаре Электрогрелка Beurer HK115 Cosy" title="водонагреватели в краснодаре Электрогрелка Beurer HK115 Cosy"><div class="box" page="elektrogrelka-beurer-hk-cosy-2800r"><span class="title">водонагреватели в краснодаре Электрогрелка Beurer HK115 Cosy</span><p>от <span class="price">2800</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("timberk-tms-hd-uvlazhnitel-vozduha-i-polotencesushitel-240r.php", 0, -4); if (file_exists("comments/timberk-tms-hd-uvlazhnitel-vozduha-i-polotencesushitel-240r.php")) require_once "comments/timberk-tms-hd-uvlazhnitel-vozduha-i-polotencesushitel-240r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="timberk-tms-hd-uvlazhnitel-vozduha-i-polotencesushitel-240r.php" method="post" onsubmit="return checkForm(this)">
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