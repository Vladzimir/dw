<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("grelka-dlya-nog-beurer-fwm-2050r.php","вентилятор асинхронный");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("grelka-dlya-nog-beurer-fwm-2050r.php", $nick, $comment);
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
		<title>вентилятор асинхронный Грелка для ног Beurer FWM40  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="вентилятор асинхронный, комплектация кондиционера, кондиционеры медея, уровень шума кондиционера, сдвоенные вентиляторы, производство тепловых пушек, тепловые пушки в саратове, водонагреватель electrolux ewh 50 centurio, кондиционер калина купить, водонагреватель термекс 50л, electrolux газовый водонагреватель, установка газового водонагревателя, куплю кондиционер lg, вентилятор для жесткого диска,  тепловые пушки хабаровск">
		<meta name="description" content="вентилятор асинхронный Электрическая грелка выполнена в виде большого сапога. Удобная форма грелки позв...">
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
						<a class="photo" href="photos/0c9aac822b8725f8d45b17d95fcd0468.jpeg" title="вентилятор асинхронный Грелка для ног Beurer FWM40"><img src="photos/0c9aac822b8725f8d45b17d95fcd0468.jpeg" alt="вентилятор асинхронный Грелка для ног Beurer FWM40" title="вентилятор асинхронный Грелка для ног Beurer FWM40 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/karbonovyy-obogrevatel-mega-max-mh-r-2950r.php"><img src="photos/99ed66418716ef7bad7c268317c699d0.jpeg" alt="комплектация кондиционера Карбоновый обогреватель Mega Max MH 9100R" title="комплектация кондиционера Карбоновый обогреватель Mega Max MH 9100R"></a><h2>Карбоновый обогреватель Mega Max MH 9100R</h2></li>
							<li><a href="http://klimattech.elitno.net/konvektor-elektricheskiy-timberk-tecpf-m-in-2140r.php"><img src="photos/5d7d89a1625889d24c0e54577aff3f32.jpeg" alt="кондиционеры медея Конвектор электрический Timberk TEC.PF1 М IN" title="кондиционеры медея Конвектор электрический Timberk TEC.PF1 М IN"></a><h2>Конвектор электрический Timberk TEC.PF1 М IN</h2></li>
							<li><a href="http://klimattech.elitno.net/maslyanyy-radiator-neoclima-seriya-standart-1900r.php"><img src="photos/1262130e8464d9c06d7ad2296418cda2.jpeg" alt="уровень шума кондиционера Масляный радиатор Neoclima серия Standart" title="уровень шума кондиционера Масляный радиатор Neoclima серия Standart"></a><h2>Масляный радиатор Neoclima серия Standart</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>вентилятор асинхронный Грелка для ног Beurer FWM40</h1>
						<div class="tb"><p>Цена: от <span class="price">2050</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_808.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Электрическая грелка выполнена в виде большого сапога. Удобная форма грелки позволяет одевать ее сразу на две ноги. К тому главным преимуществом <strong>Beurer FWM40</strong> является наличие функции массажа. </p><p>Сочетание согревающего эффекта и вибрационного массажа способно творить чудеса. Прекрасное самочувствие и бодрость духа после нескольких минут таких процедур вам обеспеченны.</p><p>Для обеспечения результативного массажа следует включить «сапог» как минимум за 15-20 минут до начала сеанса теплотерапии.</p><p><strong>Особенности: </strong></p><ul type=disc><li>Съемная, стирающаяся плюшевая подкладка. <li>Две ступени массажа: успокаивающий и освежающий массаж. <li>Вибрационный массаж <li>Тепло и массаж можно применять и независимо друг от друга. <li>Для достижения оптимального эффекта рекомендуется включить обогреватель ног примерно за 15 минут до использования. </li></ul><p><b>Техническая характеристика:</b></p><ul type=disc><li>Напряжение переменное, 230 В/50Гц <li>Мощность 16 Ватт <li>Размеры 320x260x260мм </li></ul><p><strong>В комплект входит:</strong> основное устройство, инструкция</p><p><strong>Производство:</strong> Beurer (Германия)</p><p><strong>Гарантия: </strong>1 год</p> вентилятор асинхронный</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/c2de30b57a5c75c5b9251fcabe80c0c9.jpeg" alt="сдвоенные вентиляторы Обогреватель NY 20LF" title="сдвоенные вентиляторы Обогреватель NY 20LF"><div class="box" page="obogrevatel-ny-lf-1950r-2"><span class="title">сдвоенные вентиляторы Обогреватель NY 20LF</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li><img src="photos/5e1acb133dee7908889f7853f02ceb0a.jpeg" alt="производство тепловых пушек Масляный обогреватель Vitek VT-1723" title="производство тепловых пушек Масляный обогреватель Vitek VT-1723"><div class="box" page="maslyanyy-obogrevatel-vitek-vt-2820r"><span class="title">производство тепловых пушек Масляный обогреватель Vitek VT-1723</span><p>от <span class="price">2820</span> руб.</p></div></li>
						<li><img src="photos/c4aad0ea2c66d698c02ab05582c08c78.jpeg" alt="тепловые пушки в саратове Термометр цифровой уличный на липучке (арт. 01277)" title="тепловые пушки в саратове Термометр цифровой уличный на липучке (арт. 01277)"><div class="box" page="termometr-cifrovoy-ulichnyy-na-lipuchke-art-650r"><span class="title">тепловые пушки в саратове Термометр цифровой уличный на липучке (арт. 01277)</span><p>от <span class="price">650</span> руб.</p></div></li>
						<li><img src="photos/e1065c959ee5e044b7f65dfc9d025d14.jpeg" alt="водонагреватель electrolux ewh 50 centurio Гигрометр Boneco (механ.) 7057" title="водонагреватель electrolux ewh 50 centurio Гигрометр Boneco (механ.) 7057"><div class="box" page="gigrometr-boneco-mehan-220r"><span class="title">водонагреватель electrolux ewh 50 centurio Гигрометр Boneco (механ.) 7057</span><p>от <span class="price">220</span> руб.</p></div></li>
						<li class="large"><img src="photos/8083c71208f25517314b09f05cf4c1a4.jpeg" alt="кондиционер калина купить Assistant AH-1990 Метеостанция" title="кондиционер калина купить Assistant AH-1990 Метеостанция"><div class="box" page="assistant-ah-meteostanciya-2100r"><span class="title">кондиционер калина купить Assistant AH-1990 Метеостанция</span><p>от <span class="price">2100</span> руб.</p></div></li>
						<li class="large"><img src="photos/ee2384c60dc4d2c93a6ce9944531154a.jpeg" alt="водонагреватель термекс 50л Тепловентилятор Timberk TFH T15TL.D" title="водонагреватель термекс 50л Тепловентилятор Timberk TFH T15TL.D"><div class="box" page="teploventilyator-timberk-tfh-ttld-1100r"><span class="title">водонагреватель термекс 50л Тепловентилятор Timberk TFH T15TL.D</span><p>от <span class="price">1100</span> руб.</p></div></li>
						<li class="large"><img src="photos/eae7f136b39e91a034b59ea5fd29f363.jpeg" alt="electrolux газовый водонагреватель Тепловентилятор Neoclima NWH-A2" title="electrolux газовый водонагреватель Тепловентилятор Neoclima NWH-A2"><div class="box" page="teploventilyator-neoclima-nwha-1820r"><span class="title">electrolux газовый водонагреватель Тепловентилятор Neoclima NWH-A2</span><p>от <span class="price">1820</span> руб.</p></div></li>
						<li><img src="photos/a37a839ea3abe560e6a1639aee6f7491.jpeg" alt="установка газового водонагревателя Воздухоочиститель Redmond RAC-3702" title="установка газового водонагревателя Воздухоочиститель Redmond RAC-3702"><div class="box" page="vozduhoochistitel-redmond-rac-3990r"><span class="title">установка газового водонагревателя Воздухоочиститель Redmond RAC-3702</span><p>от <span class="price">3990</span> руб.</p></div></li>
						<li><img src="photos/b4d60a1b9f36ab7cab1be4d322ed6539.jpeg" alt="куплю кондиционер lg Ультразвуковой увлажнитель Boneco Air-O-Swiss U600" title="куплю кондиционер lg Ультразвуковой увлажнитель Boneco Air-O-Swiss U600"><div class="box" page="ultrazvukovoy-uvlazhnitel-boneco-airoswiss-u-6330r"><span class="title">куплю кондиционер lg Ультразвуковой увлажнитель Boneco Air-O-Swiss U600</span><p>от <span class="price">6330</span> руб.</p></div></li>
						<li><img src="photos/0d6a9a2d5d0b8548fdcc53e2a36f2ef1.jpeg" alt="вентилятор для жесткого диска Увлажнитель ZENET 2728" title="вентилятор для жесткого диска Увлажнитель ZENET 2728"><div class="box" page="uvlazhnitel-zenet-4650r"><span class="title">вентилятор для жесткого диска Увлажнитель ZENET 2728</span><p>от <span class="price">4650</span> руб.</p></div></li>
						<li><img src="photos/dcbf0b1a09446b0768f079fe16310b82.jpeg" alt="ремень привода вентилятора Timberk TMS TEC 05.HM Увлажнитель" title="ремень привода вентилятора Timberk TMS TEC 05.HM Увлажнитель"><div class="box" page="timberk-tms-tec-hm-uvlazhnitel-220r"><span class="title">ремень привода вентилятора Timberk TMS TEC 05.HM Увлажнитель</span><p>от <span class="price">220</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("grelka-dlya-nog-beurer-fwm-2050r.php", 0, -4); if (file_exists("comments/grelka-dlya-nog-beurer-fwm-2050r.php")) require_once "comments/grelka-dlya-nog-beurer-fwm-2050r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="grelka-dlya-nog-beurer-fwm-2050r.php" method="post" onsubmit="return checkForm(this)">
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