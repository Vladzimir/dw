<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("massazhnyy-stol-house-fit-no-11500r.php","маникюр фотогалерея");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("massazhnyy-stol-house-fit-no-11500r.php", $nick, $comment);
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
		<title>маникюр фотогалерея Массажный стол HOUSE FIT НО-1007  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="маникюр фотогалерея, что значит зеркало, лазерный эпилятор домашний купить, насадки для машинки для стрижки волос, фен строительный отзывы, фокин массаж, весы электронные москва, инфракрасный массаж, зеркала в доме, весы электронные настольные, косметика из индии, перманентное выпрямление волос, сайбер зеркало, насадки для машинки для стрижки,  кривые зеркала текст">
		<meta name="description" content="маникюр фотогалерея НО-1007 – это  универсальный портативный массажный тол с подголовником от америк...">
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
						<a class="photo" href="photos/549a47ec5fa6317ff0310a2c99b5bd9b.jpeg" title="маникюр фотогалерея Массажный стол HOUSE FIT НО-1007"><img src="photos/549a47ec5fa6317ff0310a2c99b5bd9b.jpeg" alt="маникюр фотогалерея Массажный стол HOUSE FIT НО-1007" title="маникюр фотогалерея Массажный стол HOUSE FIT НО-1007 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/elektroschipcy-dlya-volos-atlanta-atn-500r.php"><img src="photos/d3b4eb483f82d34f6a33d99e454414ea.jpeg" alt="что значит зеркало Электрощипцы для волос Atlanta АТН-833" title="что значит зеркало Электрощипцы для волос Atlanta АТН-833"></a><h2>Электрощипцы для волос Atlanta АТН-833</h2></li>
							<li><a href="http://hometech.elitno.net/nasadka-rogatka-dlya-karat-de-darsonval-300r.php"><img src="photos/7be8c940f8b8240aa8ad50f75f612fb6.jpeg" alt="лазерный эпилятор домашний купить Насадка Рогатка для КАРАТ ДЕ-212 Дарсонваль" title="лазерный эпилятор домашний купить Насадка Рогатка для КАРАТ ДЕ-212 Дарсонваль"></a><h2>Насадка Рогатка для КАРАТ ДЕ-212 Дарсонваль</h2></li>
							<li><a href="http://hometech.elitno.net/schipcy-dlya-zavivki-babyliss-e-mm-1070r-2.php"><img src="photos/58f879fc7c3b36b7e8f23db41babefe6.jpeg" alt="насадки для машинки для стрижки волос Щипцы для завивки Babyliss 2325E 25 мм" title="насадки для машинки для стрижки волос Щипцы для завивки Babyliss 2325E 25 мм"></a><h2>Щипцы для завивки Babyliss 2325E 25 мм</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>маникюр фотогалерея Массажный стол HOUSE FIT НО-1007</h1>
						<div class="tb"><p>Цена: от <span class="price">11500</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_25534.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>НО-1007 – это  универсальный портативный массажный тол с подголовником от американской  компании HOUSE FIT.  Массажный стол HOUSE FIT НО-1007 имеет складную конструкцию (в сложенном виде имеет  форму чемодана), специальное покрытие из кожзаменителя и регулируемую высоту  стола. Кроме того, к преимуществам данной модели массажного стола относится  оптимальный размер (188х72х61-85   см) и эргономичный дизайн.</p> <p><strong>Характеристики:</strong></p> <ul type=disc>   <li>Универсальный портативный массажный       стол с подголовником;</li>   <li>Конструкция: складная;</li>   <li>Покрытие: кожзаменитель;</li>   <li>Деревянная рама;   </li>   <li>В сложенном виде имеет форму       чемодана;</li>   <li>Регулируемая высота стола;</li>   <li>Вес: 14,3 кг;</li>   <li>Размер: 188х72х61-85 см.</li> </ul> <p><strong>Производитель: HOUSE FIT (США)</strong><br/> <strong>Изготовитель:  Китай</strong></p> маникюр фотогалерея</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/eb12a032143663e4e7371d414ba3b2d2.jpeg" alt="фен строительный отзывы Складной стул для массажа US Medica Boston" title="фен строительный отзывы Складной стул для массажа US Medica Boston"><div class="box" page="skladnoy-stul-dlya-massazha-us-medica-boston-17000r"><span class="title">фен строительный отзывы Складной стул для массажа US Medica Boston</span><p>от <span class="price">17000</span> руб.</p></div></li>
						<li><img src="photos/db50f056381f7d55d9462e3f852c618b.jpeg" alt="фокин массаж Стационарный массажный стол US Medica Profi" title="фокин массаж Стационарный массажный стол US Medica Profi"><div class="box" page="stacionarnyy-massazhnyy-stol-us-medica-profi-85000r"><span class="title">фокин массаж Стационарный массажный стол US Medica Profi</span><p>от <span class="price">85000</span> руб.</p></div></li>
						<li><img src="photos/5657d90760adccc4b3f2f0665fc2869d.jpeg" alt="весы электронные москва Массажное кресло Anatomico Perfetto" title="весы электронные москва Массажное кресло Anatomico Perfetto"><div class="box" page="massazhnoe-kreslo-anatomico-perfetto-132000r"><span class="title">весы электронные москва Массажное кресло Anatomico Perfetto</span><p>от <span class="price">132000</span> руб.</p></div></li>
						<li><img src="photos/e739e0447a80415b64bfebe7c6b9a813.jpeg" alt="инфракрасный массаж Аппликатор Ляпко Двойной 5,8" title="инфракрасный массаж Аппликатор Ляпко Двойной 5,8"><div class="box" page="applikator-lyapko-dvoynoy-1490r"><span class="title">инфракрасный массаж Аппликатор Ляпко Двойной 5,8</span><p>от <span class="price">1490</span> руб.</p></div></li>
						<li class="large"><img src="photos/141e64aa65d868c3a97b8e656348cb5f.jpeg" alt="зеркала в доме Аппликатор Ляпко Квадро 6,2" title="зеркала в доме Аппликатор Ляпко Квадро 6,2"><div class="box" page="applikator-lyapko-kvadro-1360r"><span class="title">зеркала в доме Аппликатор Ляпко Квадро 6,2</span><p>от <span class="price">1360</span> руб.</p></div></li>
						<li class="large"><img src="photos/b840670e7655c80242a9697a1d40b297.jpeg" alt="весы электронные настольные Аппликатор Ляпко Спутник 5,8" title="весы электронные настольные Аппликатор Ляпко Спутник 5,8"><div class="box" page="applikator-lyapko-sputnik-330r"><span class="title">весы электронные настольные Аппликатор Ляпко Спутник 5,8</span><p>от <span class="price">330</span> руб.</p></div></li>
						<li class="large"><img src="photos/9465b0dca2e8fe2c49ae1e6021d20f1e.gif" alt="косметика из индии АЛ Волшебная  Лента Здоровье (7 сегментов)" title="косметика из индии АЛ Волшебная  Лента Здоровье (7 сегментов)"><div class="box" page="al-volshebnaya-lenta-zdorove-segmentov-5230r"><span class="title">косметика из индии АЛ Волшебная  Лента Здоровье (7 сегментов)</span><p>от <span class="price">5230</span> руб.</p></div></li>
						<li><img src="photos/dadf4bbe6ddc1cd8c59620628f9c327c.jpeg" alt="перманентное выпрямление волос Массажер для тела Beurer MG70" title="перманентное выпрямление волос Массажер для тела Beurer MG70"><div class="box" page="massazher-dlya-tela-beurer-mg-2200r"><span class="title">перманентное выпрямление волос Массажер для тела Beurer MG70</span><p>от <span class="price">2200</span> руб.</p></div></li>
						<li><img src="photos/be181278ce9e9fb11b74a0b43f3149c0.jpeg" alt="сайбер зеркало Гидромассажер для ванны Montiss WBS6230M (эффект джакузи) с функцией озонирования" title="сайбер зеркало Гидромассажер для ванны Montiss WBS6230M (эффект джакузи) с функцией озонирования"><div class="box" page="gidromassazher-dlya-vanny-montiss-wbsm-effekt-dzhakuzi-s-funkciey-ozonirovaniya-3480r"><span class="title">сайбер зеркало Гидромассажер для ванны Montiss WBS6230M (эффект джакузи) с функцией озонирования</span><p>от <span class="price">3480</span> руб.</p></div></li>
						<li><img src="photos/ae3ee4c3437d43e701e69a64da50647c.jpeg" alt="насадки для машинки для стрижки Капиллярный массажер Пальчики Шиатсу" title="насадки для машинки для стрижки Капиллярный массажер Пальчики Шиатсу"><div class="box" page="kapillyarnyy-massazher-palchiki-shiatsu-120r"><span class="title">насадки для машинки для стрижки Капиллярный массажер Пальчики Шиатсу</span><p>от <span class="price">120</span> руб.</p></div></li>
						<li><img src="photos/00eef40be8bfe9afe3f74b07e48a72b6.jpeg" alt="зеркало на шевроле лачетти Vitek VT–1374 Электробритва" title="зеркало на шевроле лачетти Vitek VT–1374 Электробритва"><div class="box" page="vitek-vt–-elektrobritva-1390r"><span class="title">зеркало на шевроле лачетти Vitek VT–1374 Электробритва</span><p>от <span class="price">1390</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("massazhnyy-stol-house-fit-no-11500r.php", 0, -4); if (file_exists("comments/massazhnyy-stol-house-fit-no-11500r.php")) require_once "comments/massazhnyy-stol-house-fit-no-11500r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="massazhnyy-stol-house-fit-no-11500r.php" method="post" onsubmit="return checkForm(this)">
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