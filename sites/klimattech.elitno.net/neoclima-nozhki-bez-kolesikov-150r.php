<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("neoclima-nozhki-bez-kolesikov-150r.php","вентилятор для процессора");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("neoclima-nozhki-bez-kolesikov-150r.php", $nick, $comment);
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
		<title>вентилятор для процессора NEOCLIMA  ножки без колесиков  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="вентилятор для процессора, агв водонагреватели, тепловые пушки хабаровск, устройство водонагревателя термекс, очиститель увлажнитель воздуха sharp, очистка кондиционера, предохранитель кондиционера, датчик вентилятора ваз 2114, уровень шума кондиционера, бесплатный конвектор музыки, газовый нагреватель воздуха, трасса кондиционера, вентилятор автомобильный, вентилятор асинхронный,  сервисный центр кондиционеров">
		<meta name="description" content="вентилятор для процессора Ножки без колесиков Neoclima предназначены для напольной установки конвекторов с...">
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
						<a class="photo" href="photos/a7749e955ae7faa7d2f8c192eba3c2cc.jpeg" title="вентилятор для процессора NEOCLIMA  ножки без колесиков"><img src="photos/a7749e955ae7faa7d2f8c192eba3c2cc.jpeg" alt="вентилятор для процессора NEOCLIMA  ножки без колесиков" title="вентилятор для процессора NEOCLIMA  ножки без колесиков -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-timberk-swh-rs-h-8400r.php"><img src="photos/0f9f68f0f1f2e0b09f96240a41e0fa83.jpeg" alt="агв водонагреватели Водонагреватель Timberk SWH RS2 80 H" title="агв водонагреватели Водонагреватель Timberk SWH RS2 80 H"></a><h2>Водонагреватель Timberk SWH RS2 80 H</h2></li>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-timberk-swh-fs-h-7750r.php"><img src="photos/31c206cb5d507160b76af6f9958365a3.jpeg" alt="тепловые пушки хабаровск Водонагреватель Timberk SWH FS2 50 H" title="тепловые пушки хабаровск Водонагреватель Timberk SWH FS2 50 H"></a><h2>Водонагреватель Timberk SWH FS2 50 H</h2></li>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-neoclima-slim-8350r.php"><img src="photos/e3ac300665006bbafd472165984f115d.jpeg" alt="устройство водонагревателя термекс Водонагреватель Neoclima Slim 150" title="устройство водонагревателя термекс Водонагреватель Neoclima Slim 150"></a><h2>Водонагреватель Neoclima Slim 150</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>вентилятор для процессора NEOCLIMA  ножки без колесиков</h1>
						<div class="tb"><p>Цена: от <span class="price">150</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_16227.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Ножки без колесиков </b><b>Neoclima</b> предназначены для напольной установки конвекторов серии Dolce и Comforte. В комплект входит две ножки белого цвета. Отличаются прочностью и надежностью.</p><p><b>Производитель</b>: Neoclima</p><p><b>Страна</b>: Украина</p> вентилятор для процессора</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/78a4770ecd1d41fed364230526a418a5.jpeg" alt="очиститель увлажнитель воздуха sharp Инфракрасный обогреватель Sinbo" title="очиститель увлажнитель воздуха sharp Инфракрасный обогреватель Sinbo"><div class="box"><a href="http://klimattech.elitno.net/infrakrasnyy-obogrevatel-sinbo-1900r.php"><h3 class="title">очиститель увлажнитель воздуха sharp Инфракрасный обогреватель Sinbo</h3><p>от <span class="price">1900</span> руб.</p></a></div></li>
						<li><img src="photos/ddc0aab203cdce31375d769ac0564ff3.jpeg" alt="очистка кондиционера Конвектор Timberk TEC.E1 M 1000" title="очистка кондиционера Конвектор Timberk TEC.E1 M 1000"><div class="box" page="konvektor-timberk-tece-m-2080r"><span class="title">очистка кондиционера Конвектор Timberk TEC.E1 M 1000</span><p>от <span class="price">2080</span> руб.</p></div></li>
						<li><img src="photos/7630b1e6dccadaf1f4a39299c06f31be.jpeg" alt="предохранитель кондиционера Конвектор Timberk TEC.E1 E 1000" title="предохранитель кондиционера Конвектор Timberk TEC.E1 E 1000"><div class="box" page="konvektor-timberk-tece-e-2360r"><span class="title">предохранитель кондиционера Конвектор Timberk TEC.E1 E 1000</span><p>от <span class="price">2360</span> руб.</p></div></li>
						<li><img src="photos/19a68e8aaac1488b247429400fdfd8f4.jpeg" alt="датчик вентилятора ваз 2114 Радиатор масляный Timberk TOR 51.2509 EZ I" title="датчик вентилятора ваз 2114 Радиатор масляный Timberk TOR 51.2509 EZ I"><div class="box" page="radiator-maslyanyy-timberk-tor-ez-i-3350r"><span class="title">датчик вентилятора ваз 2114 Радиатор масляный Timberk TOR 51.2509 EZ I</span><p>от <span class="price">3350</span> руб.</p></div></li>
						<li class="large"><img src="photos/1262130e8464d9c06d7ad2296418cda2.jpeg" alt="уровень шума кондиционера Масляный радиатор Neoclima серия Standart" title="уровень шума кондиционера Масляный радиатор Neoclima серия Standart"><div class="box" page="maslyanyy-radiator-neoclima-seriya-standart-1900r"><span class="title">уровень шума кондиционера Масляный радиатор Neoclima серия Standart</span><p>от <span class="price">1900</span> руб.</p></div></li>
						<li class="large"><img src="photos/70c70b7625471597901e2a4d38fd77ec.jpeg" alt="бесплатный конвектор музыки Тепловентилятор настенный Timberk TFH W200.TR" title="бесплатный конвектор музыки Тепловентилятор настенный Timberk TFH W200.TR"><div class="box" page="teploventilyator-nastennyy-timberk-tfh-wtr-2060r"><span class="title">бесплатный конвектор музыки Тепловентилятор настенный Timberk TFH W200.TR</span><p>от <span class="price">2060</span> руб.</p></div></li>
						<li class="large"><img src="photos/d91affcba353aac790416e23f3c66d27.jpeg" alt="газовый нагреватель воздуха Vitek VT-2130 Керамический Тепловентилятор + увлажнитель , 1500Вт" title="газовый нагреватель воздуха Vitek VT-2130 Керамический Тепловентилятор + увлажнитель , 1500Вт"><div class="box" page="vitek-vt-keramicheskiy-teploventilyator-uvlazhnitel-vt-3150r"><span class="title">газовый нагреватель воздуха Vitek VT-2130 Керамический Тепловентилятор + увлажнитель , 1500Вт</span><p>от <span class="price">3150</span> руб.</p></div></li>
						<li><img src="photos/34e7f1a6500988f9a92a4b885e19a4b0.jpeg" alt="трасса кондиционера Timberk TFH T15PTS.V Тепловентилятор" title="трасса кондиционера Timberk TFH T15PTS.V Тепловентилятор"><div class="box" page="timberk-tfh-tptsv-teploventilyator-1330r"><span class="title">трасса кондиционера Timberk TFH T15PTS.V Тепловентилятор</span><p>от <span class="price">1330</span> руб.</p></div></li>
						<li><img src="photos/0f622d04b572b032f9e05b807cff4150.jpeg" alt="вентилятор автомобильный Климатический комплекс Sharp KC-850" title="вентилятор автомобильный Климатический комплекс Sharp KC-850"><div class="box" page="klimaticheskiy-kompleks-sharp-kc-17690r"><span class="title">вентилятор автомобильный Климатический комплекс Sharp KC-850</span><p>от <span class="price">17690</span> руб.</p></div></li>
						<li><img src="photos/9cc3a3ceb02e758ecf8288587202781f.jpeg" alt="вентилятор асинхронный Мойка воздуха Electrolux EHAW 7525D" title="вентилятор асинхронный Мойка воздуха Electrolux EHAW 7525D"><div class="box" page="moyka-vozduha-electrolux-ehaw-d-15450r-3"><span class="title">вентилятор асинхронный Мойка воздуха Electrolux EHAW 7525D</span><p>от <span class="price">15450</span> руб.</p></div></li>
						<li><img src="photos/737fd11198a10bfcffa48fb592f17fc5.jpeg" alt="давление в кондиционере Уличный газовый обогреватель Neoclima HSS-RS-SS" title="давление в кондиционере Уличный газовый обогреватель Neoclima HSS-RS-SS"><div class="box" page="ulichnyy-gazovyy-obogrevatel-neoclima-hssrsss-15100r"><span class="title">давление в кондиционере Уличный газовый обогреватель Neoclima HSS-RS-SS</span><p>от <span class="price">15100</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("neoclima-nozhki-bez-kolesikov-150r.php", 0, -4); if (file_exists("comments/neoclima-nozhki-bez-kolesikov-150r.php")) require_once "comments/neoclima-nozhki-bez-kolesikov-150r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="neoclima-nozhki-bez-kolesikov-150r.php" method="post" onsubmit="return checkForm(this)">
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