<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("vitek-vt–-mashinka-dlya-strizhki-volos-1240r.php","евгений гришковец и бигуди");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("vitek-vt–-mashinka-dlya-strizhki-volos-1240r.php", $nick, $comment);
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
		<title>евгений гришковец и бигуди Vitek VT–1361 Машинка для стрижки волос  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="евгений гришковец и бигуди, производители фенов, построение изображения в зеркале, солярий для дома, массаж сергиев посад, триммер для женщин, женщина перед зеркалом, подогрев зеркал калина, весы порционные электронные, efbe schott солярий, ножи для электробритвы, тайский массаж фото, массаж пальчиков, бытовая техника фены,  электронные весы новосибирск">
		<meta name="description" content="евгений гришковец и бигуди Vitek VT-1361 – профессиональный набор для стрижки машинка для стрижки волос с ч...">
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
						<a class="photo" href="photos/f7810eeae3245b2809b14907b94ee4e0.jpeg" title="евгений гришковец и бигуди Vitek VT–1361 Машинка для стрижки волос"><img src="photos/f7810eeae3245b2809b14907b94ee4e0.jpeg" alt="евгений гришковец и бигуди Vitek VT–1361 Машинка для стрижки волос" title="евгений гришковец и бигуди Vitek VT–1361 Машинка для стрижки волос -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vypryamitel-valera-digital-ceramic-nanosilver-2470r.php"><img src="photos/65295d452583f16a109ca092e4c4f41f.jpeg" alt="производители фенов Выпрямитель Valera Digital Ceramic Nanosilver 638.01" title="производители фенов Выпрямитель Valera Digital Ceramic Nanosilver 638.01"></a><h2>Выпрямитель Valera Digital Ceramic Nanosilver 638.01</h2></li>
							<li><a href="http://hometech.elitno.net/raskladnoy-massazhnyy-stol-us-medica-super-light-lineyka-sumo-line-15000r.php"><img src="photos/e302a52396d03041a39ed52588cd8a9a.jpeg" alt="построение изображения в зеркале Раскладной массажный стол US Medica Super Light линейка Sumo Line" title="построение изображения в зеркале Раскладной массажный стол US Medica Super Light линейка Sumo Line"></a><h2>Раскладной массажный стол US Medica Super Light линейка Sumo Line</h2></li>
							<li><a href="http://hometech.elitno.net/massazhnoe-kreslo-yamaguchi-ya-210000r.php"><img src="photos/ce6a955d13728ae3fcdf117ddcdd8d60.jpeg" alt="солярий для дома Массажное кресло Yamaguchi YA-2500" title="солярий для дома Массажное кресло Yamaguchi YA-2500"></a><h2>Массажное кресло Yamaguchi YA-2500</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>евгений гришковец и бигуди Vitek VT–1361 Машинка для стрижки волос</h1>
						<div class="tb"><p>Цена: от <span class="price">1240</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18340.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Vitek VT-1361 – профессиональный набор для стрижки машинка для стрижки волос с четырьмя насадками и Ni-Mh аккумулятором. Насадки, выполненные из нержавеющей стали рассчитаны на длину волос (3, 6, 9 и 12 мм). В комплект входит парикхмахерский набор, состоящий из расчески, ножниц, щеточки для чистки и масла для лезвий). Питание от аккумулятора или сети (длина провода 2 метра). Может непрерывно работать в течении одного часа. </p><p><b>Характеристики:</b></p><ul type=disc><li>питание от сети или аккумулятора <li>напряжение питания: 220-240 В ~ 50 Гц <li>потребляемая мощность: 8 Вт <li>продолжительность непрерывной работы: 1 час <li>материал лезвий: сталь <li>расческа, щеточка для чистки, масло, защитная крышка </li></ul><p><b>Проиводитель: Австрия</b></p> евгений гришковец и бигуди</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/109ab999609bcd7a247d413a4e6a9ec7.jpeg" alt="массаж сергиев посад Массажер для спины Beurer MG 230" title="массаж сергиев посад Массажер для спины Beurer MG 230"><div class="box" page="massazher-dlya-spiny-beurer-mg-12000r"><span class="title">массаж сергиев посад Массажер для спины Beurer MG 230</span><p>от <span class="price">12000</span> руб.</p></div></li>
						<li><img src="photos/009fd98d06242ce12bfb8e391acb85ea.jpeg" alt="триммер для женщин Массажер-подушка Gezatone AMG392 1301100" title="триммер для женщин Массажер-подушка Gezatone AMG392 1301100"><div class="box" page="massazherpodushka-gezatone-amg-2490r"><span class="title">триммер для женщин Массажер-подушка Gezatone AMG392 1301100</span><p>от <span class="price">2490</span> руб.</p></div></li>
						<li><img src="photos/824ee45e08163a2c1814ad6f375574d1.png" alt="женщина перед зеркалом Ручной массажер US-Medica Magic Peeling" title="женщина перед зеркалом Ручной массажер US-Medica Magic Peeling"><div class="box" page="ruchnoy-massazher-usmedica-magic-peeling-990r"><span class="title">женщина перед зеркалом Ручной массажер US-Medica Magic Peeling</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li><img src="photos/8524c9a81149ced5afefd960c059f93e.jpeg" alt="подогрев зеркал калина Вибромассажер Clear Fit Top Beauty CF 135 T" title="подогрев зеркал калина Вибромассажер Clear Fit Top Beauty CF 135 T"><div class="box" page="vibromassazher-clear-fit-top-beauty-cf-t-10490r"><span class="title">подогрев зеркал калина Вибромассажер Clear Fit Top Beauty CF 135 T</span><p>от <span class="price">10490</span> руб.</p></div></li>
						<li class="large"><img src="photos/bf89764b2aa6c696f3c1950d65523b3a.jpeg" alt="весы порционные электронные Массажер Beurer MG220 для тела" title="весы порционные электронные Массажер Beurer MG220 для тела"><div class="box" page="massazher-beurer-mg-dlya-tela-8200r"><span class="title">весы порционные электронные Массажер Beurer MG220 для тела</span><p>от <span class="price">8200</span> руб.</p></div></li>
						<li class="large"><img src="photos/78dcc0183deafce2449388d025ca7df3.jpeg" alt="efbe schott солярий Машинка для стрижки волос и бороды Valera Contour X Ceramic 625.01" title="efbe schott солярий Машинка для стрижки волос и бороды Valera Contour X Ceramic 625.01"><div class="box" page="mashinka-dlya-strizhki-volos-i-borody-valera-contour-x-ceramic-2190r"><span class="title">efbe schott солярий Машинка для стрижки волос и бороды Valera Contour X Ceramic 625.01</span><p>от <span class="price">2190</span> руб.</p></div></li>
						<li class="large"><img src="photos/6b329b59e2c95c28766254ced4d923f8.jpeg" alt="ножи для электробритвы Фен Valera Action 1800 542.08" title="ножи для электробритвы Фен Valera Action 1800 542.08"><div class="box" page="fen-valera-action-1300r"><span class="title">ножи для электробритвы Фен Valera Action 1800 542.08</span><p>от <span class="price">1300</span> руб.</p></div></li>
						<li><img src="photos/7f172dccdb7126c4af36384b087444bb.jpeg" alt="тайский массаж фото Фен Valera Excel Pro 2000 561.08-I" title="тайский массаж фото Фен Valera Excel Pro 2000 561.08-I"><div class="box" page="fen-valera-excel-pro-i-1860r"><span class="title">тайский массаж фото Фен Valera Excel Pro 2000 561.08-I</span><p>от <span class="price">1860</span> руб.</p></div></li>
						<li><img src="photos/d2b7ff9e11c72a7ec42a2c10d5296088.jpeg" alt="массаж пальчиков Фен-щетка BaByliss AS130E 700 Вт" title="массаж пальчиков Фен-щетка BaByliss AS130E 700 Вт"><div class="box" page="fenschetka-babyliss-ase-vt-2060r"><span class="title">массаж пальчиков Фен-щетка BaByliss AS130E 700 Вт</span><p>от <span class="price">2060</span> руб.</p></div></li>
						<li><img src="photos/8ec2c52e42a0b6563df60b019f08c0e4.jpeg" alt="бытовая техника фены Фен Corioliss Mini Vintage Dryer Floral" title="бытовая техника фены Фен Corioliss Mini Vintage Dryer Floral"><div class="box" page="fen-corioliss-mini-vintage-dryer-floral-2250r"><span class="title">бытовая техника фены Фен Corioliss Mini Vintage Dryer Floral</span><p>от <span class="price">2250</span> руб.</p></div></li>
						<li><img src="photos/249ba2f65a0c23549126bf59f65e62f2.jpeg" alt="заточка ножей машинки для стрижки Зубная щетка BRAUN VITALITY D12.013DW" title="заточка ножей машинки для стрижки Зубная щетка BRAUN VITALITY D12.013DW"><div class="box" page="zubnaya-schetka-braun-vitality-ddw-1040r"><span class="title">заточка ножей машинки для стрижки Зубная щетка BRAUN VITALITY D12.013DW</span><p>от <span class="price">1040</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("vitek-vt–-mashinka-dlya-strizhki-volos-1240r.php", 0, -4); if (file_exists("comments/vitek-vt–-mashinka-dlya-strizhki-volos-1240r.php")) require_once "comments/vitek-vt–-mashinka-dlya-strizhki-volos-1240r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="vitek-vt–-mashinka-dlya-strizhki-volos-1240r.php" method="post" onsubmit="return checkForm(this)">
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