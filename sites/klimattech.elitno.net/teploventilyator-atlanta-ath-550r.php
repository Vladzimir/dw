<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("teploventilyator-atlanta-ath-550r.php","водонагреватели москва");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("teploventilyator-atlanta-ath-550r.php", $nick, $comment);
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
		<title>водонагреватели москва Тепловентилятор Atlanta ATH-105  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="водонагреватели москва, бесплатный конвектор музыки, комплектация кондиционера, масляный радиатор на ваз, установка кондиционеров харьков, регулятор оборотов вентилятора, кондиционер daikin инструкция, скорость вентилятора программа, водонагреватель аристон цена, компьютерный вентилятор, тепловая пушка для натяжных потолков, кондиционер типа сплит, эльдорадо кондиционеры, датчик включения вентилятора 2109,  муранское стекло украшения">
		<meta name="description" content="водонагреватели москва Тепловентилятор Atlanta ATH-110 белого цвета мощностью 2000 Вт с механическим уп...">
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
						<a class="photo" href="photos/b6565f7fad53009fc4307abb9d764c90.jpeg" title="водонагреватели москва Тепловентилятор Atlanta ATH-105"><img src="photos/b6565f7fad53009fc4307abb9d764c90.jpeg" alt="водонагреватели москва Тепловентилятор Atlanta ATH-105" title="водонагреватели москва Тепловентилятор Atlanta ATH-105 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-timberk-swh-fs-v-10800r.php"><img src="photos/a4c681a56efbbdafb625aaec2dfbaf9f.jpeg" alt="бесплатный конвектор музыки Водонагреватель Timberk SWH FS1 100 V" title="бесплатный конвектор музыки Водонагреватель Timberk SWH FS1 100 V"></a><h2>Водонагреватель Timberk SWH FS1 100 V</h2></li>
							<li><a href="http://klimattech.elitno.net/karbonovyy-obogrevatel-mega-max-mh-r-2950r.php"><img src="photos/99ed66418716ef7bad7c268317c699d0.jpeg" alt="комплектация кондиционера Карбоновый обогреватель Mega Max MH 9100R" title="комплектация кондиционера Карбоновый обогреватель Mega Max MH 9100R"></a><h2>Карбоновый обогреватель Mega Max MH 9100R</h2></li>
							<li><a href="http://klimattech.elitno.net/assistant-ah-meteostanciya-2690r.php"><img src="photos/83ea01d1eaf2c3bcdbc30dbe76b7be74.jpeg" alt="масляный радиатор на ваз Assistant AH-1973 Метеостанция" title="масляный радиатор на ваз Assistant AH-1973 Метеостанция"></a><h2>Assistant AH-1973 Метеостанция</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>водонагреватели москва Тепловентилятор Atlanta ATH-105</h1>
						<div class="tb"><p>Цена: от <span class="price">550</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19665.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Тепловентилятор Atlanta ATH-110 белого цвета мощностью 2000 Вт с механическим управлением. Долговечный нагревательный элемент гарантирует вам долгие годы службы. Обладает высокий коэффициентом теплоотдачи. Имеет улучшенную систему распределения потока воздуха. Предусмотрены два режима мощности. Безопасен в использовании, т. к. имеет защиту от перегрева. Изделие сертифицировано Госстандартом РФ. Соответствует американским и европейским нормам безопасности.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Современный дизайн <li>Компактный размер <li>Термостат – автоматический контроль температуры <li>2 степени нагрева и функция вентилятора <li>Защита от перегрева <li>Изделие сертифицировано Госстандартом РФ <li>Соответствует европейским и американским нормам безопасности <li>230 В/ 50 Гц <li>Мощность 2000 Вт, <li>Регулировка мощности <li>Управление механическое, регулировка температуры, выключатель со световым индикатором <li>Напольный монтаж <li>12.5 х 22.5 х 26 см </li></ul><p><strong>Производитель: США</strong></p> водонагреватели москва</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/b5e41c2a0d829fc1efe57e1e63ba0ab3.jpeg" alt="установка кондиционеров харьков Обогреватель Бархатный сезон «Карета»" title="установка кондиционеров харьков Обогреватель Бархатный сезон «Карета»"><div class="box"><a href="http://klimattech.elitno.net/obogrevatel-barhatnyy-sezon-«kareta»-880r.php"><h3 class="title">установка кондиционеров харьков Обогреватель Бархатный сезон «Карета»</h3><p>от <span class="price">880</span> руб.</p></a></div></li>
						<li><img src="photos/074272158896d057ebc207b2af80ccbd.jpeg" alt="регулятор оборотов вентилятора Очиститель воздуха Ballu AP-420 F7" title="регулятор оборотов вентилятора Очиститель воздуха Ballu AP-420 F7"><div class="box" page="ochistitel-vozduha-ballu-ap-f-6450r-2"><span class="title">регулятор оборотов вентилятора Очиститель воздуха Ballu AP-420 F7</span><p>от <span class="price">6450</span> руб.</p></div></li>
						<li><img src="photos/d29c59aaa8ad70bf5ff7debb5b3ff7d5.jpeg" alt="кондиционер daikin инструкция Очиститель воздуха Ballu AP-430 F7" title="кондиционер daikin инструкция Очиститель воздуха Ballu AP-430 F7"><div class="box" page="ochistitel-vozduha-ballu-ap-f-7950r"><span class="title">кондиционер daikin инструкция Очиститель воздуха Ballu AP-430 F7</span><p>от <span class="price">7950</span> руб.</p></div></li>
						<li><img src="photos/e8e90b674fbd2a1788339d6123df9fc5.jpeg" alt="скорость вентилятора программа ZENET JSS-11001 Увлажнитель" title="скорость вентилятора программа ZENET JSS-11001 Увлажнитель"><div class="box" page="zenet-jss-uvlazhnitel-1680r"><span class="title">скорость вентилятора программа ZENET JSS-11001 Увлажнитель</span><p>от <span class="price">1680</span> руб.</p></div></li>
						<li class="large"><img src="photos/f582d095ca5f4d9ee39dfd4a1564b1bc.jpeg" alt="водонагреватель аристон цена Увлажнитель воздуха Vitesse VS-867" title="водонагреватель аристон цена Увлажнитель воздуха Vitesse VS-867"><div class="box" page="uvlazhnitel-vozduha-vitesse-vs-8750r"><span class="title">водонагреватель аристон цена Увлажнитель воздуха Vitesse VS-867</span><p>от <span class="price">8750</span> руб.</p></div></li>
						<li class="large"><img src="photos/62815d3e6c27c4697dc9916bb41ef3b3.jpeg" alt="компьютерный вентилятор Мойка воздуха Boneco Air-O-Swiss 2055D" title="компьютерный вентилятор Мойка воздуха Boneco Air-O-Swiss 2055D"><div class="box" page="moyka-vozduha-boneco-airoswiss-d-15750r"><span class="title">компьютерный вентилятор Мойка воздуха Boneco Air-O-Swiss 2055D</span><p>от <span class="price">15750</span> руб.</p></div></li>
						<li class="large"><img src="photos/e76dfeadd933803037b175a3b2975d0d.jpeg" alt="тепловая пушка для натяжных потолков Мойка воздуха с цифровым дисплеем Boneco Air-O-Swiss 2055DR" title="тепловая пушка для натяжных потолков Мойка воздуха с цифровым дисплеем Boneco Air-O-Swiss 2055DR"><div class="box" page="moyka-vozduha-s-cifrovym-displeem-boneco-airoswiss-dr-16500r"><span class="title">тепловая пушка для натяжных потолков Мойка воздуха с цифровым дисплеем Boneco Air-O-Swiss 2055DR</span><p>от <span class="price">16500</span> руб.</p></div></li>
						<li><img src="photos/42ef4ed773db3af070e58991dc6661ef.jpeg" alt="кондиционер типа сплит Электрогрелка для спины и шеи Beurer HK55 EASY FIX" title="кондиционер типа сплит Электрогрелка для спины и шеи Beurer HK55 EASY FIX"><div class="box" page="elektrogrelka-dlya-spiny-i-shei-beurer-hk-easy-fix-1900r"><span class="title">кондиционер типа сплит Электрогрелка для спины и шеи Beurer HK55 EASY FIX</span><p>от <span class="price">1900</span> руб.</p></div></li>
						<li><img src="photos/9b9dec6ba66e5480aa283df2c6786c0d.jpeg" alt="эльдорадо кондиционеры Электрокамин напольный  Electrolux  EFP F - 100" title="эльдорадо кондиционеры Электрокамин напольный  Electrolux  EFP F - 100"><div class="box" page="elektrokamin-napolnyy-electrolux-efp-f-6600r"><span class="title">эльдорадо кондиционеры Электрокамин напольный  Electrolux  EFP F - 100</span><p>от <span class="price">6600</span> руб.</p></div></li>
						<li><img src="photos/eefde3c4584d725a6a43beeb9b2794ca.jpeg" alt="датчик включения вентилятора 2109 Electrolux  EFP F - 110 Электрокамин напольный" title="датчик включения вентилятора 2109 Electrolux  EFP F - 110 Электрокамин напольный"><div class="box" page="electrolux-efp-f-elektrokamin-napolnyy-6600r"><span class="title">датчик включения вентилятора 2109 Electrolux  EFP F - 110 Электрокамин напольный</span><p>от <span class="price">6600</span> руб.</p></div></li>
						<li><img src="photos/b79163c91007aadf2e63577566219489.jpeg" alt="установщик кондиционеров Электроодеяло (плед) Sanitas SHD45" title="установщик кондиционеров Электроодеяло (плед) Sanitas SHD45"><div class="box" page="elektroodeyalo-pled-sanitas-shd-3000r"><span class="title">установщик кондиционеров Электроодеяло (плед) Sanitas SHD45</span><p>от <span class="price">3000</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("teploventilyator-atlanta-ath-550r.php", 0, -4); if (file_exists("comments/teploventilyator-atlanta-ath-550r.php")) require_once "comments/teploventilyator-atlanta-ath-550r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="teploventilyator-atlanta-ath-550r.php" method="post" onsubmit="return checkForm(this)">
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