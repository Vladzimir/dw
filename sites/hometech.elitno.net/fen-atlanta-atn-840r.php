<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("fen-atlanta-atn-840r.php","гадание перед зеркалом");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("fen-atlanta-atn-840r.php", $nick, $comment);
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
		<title>гадание перед зеркалом Фен Atlanta АТН-89  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="гадание перед зеркалом, ирригатор waterpik ultra, бразильское выпрямление волос отзывы, зеркала на ауди а6, курсы массажа в нижнем, массаж в оренбурге, утюжки для завивки волос, бигуди роскошные локоны, сколько стоит минута в солярии, что делать в солярии, дарсонваль купить минск, фен строительный профессиональный, двигатель для триммера, зеркала для спален,  ионизатор воды из серебра">
		<meta name="description" content="гадание перед зеркалом Фен Atlanta АТН-89 – доступный прибор с эргономичным дизайном фиолетового цвета ...">
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
						<a class="photo" href="photos/8500a99a4fd5081d59e0f1449e9b24b5.jpeg" title="гадание перед зеркалом Фен Atlanta АТН-89"><img src="photos/8500a99a4fd5081d59e0f1449e9b24b5.jpeg" alt="гадание перед зеркалом Фен Atlanta АТН-89" title="гадание перед зеркалом Фен Atlanta АТН-89 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-beurer-gs-kozha-glamour-2750r.php"><img src="photos/da109c8ab3a7beebe47279ad431dfe0e.jpeg" alt="ирригатор waterpik ultra Весы электронные напольные Beurer GS37 (кожа) Glamour" title="ирригатор waterpik ultra Весы электронные напольные Beurer GS37 (кожа) Glamour"></a><h2>Весы электронные напольные Beurer GS37 (кожа) Glamour</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-s-analizatorom-zhira-tanita-bc-2550r.php"><img src="photos/bc34e86f6dd75e28bd33d7c27b3a7f2b.jpeg" alt="бразильское выпрямление волос отзывы Весы электронные напольные с анализатором жира Tanita BC-531" title="бразильское выпрямление волос отзывы Весы электронные напольные с анализатором жира Tanita BC-531"></a><h2>Весы электронные напольные с анализатором жира Tanita BC-531</h2></li>
							<li><a href="http://hometech.elitno.net/stayler-corioliss-mini-root-lifter-chernyy-2650r.php"><img src="photos/793f5e34425900f9f8cb0286c947d677.jpeg" alt="зеркала на ауди а6 Стайлер Corioliss Mini Root Lifter черный" title="зеркала на ауди а6 Стайлер Corioliss Mini Root Lifter черный"></a><h2>Стайлер Corioliss Mini Root Lifter черный</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>гадание перед зеркалом Фен Atlanta АТН-89</h1>
						<div class="tb"><p>Цена: от <span class="price">840</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19886.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Фен Atlanta АТН-89 – доступный прибор с эргономичным дизайном фиолетового цвета для сушки волос мощностью 1000 Вт с 5 насадками. Имеет два уровня интенсивности сушки, режим холодного воздуха и шнур с защитой от выкручивания. Не скользит в руках, благодаря специальному покрытию. Абсолютно безопасен, т. к. защищен от перегрева. Получил сертификат Госстандара РФ и соответствует европейским нормам безопасности. Снабжен петлей для подвешивания. Имеет петлю для подвески.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Эргономичный дизайн <li>Защита от перегрева <li>Два уровня интенсивности сушки <li>Режим холодного воздуха <li>Пять насадок <li>Петля для подвешивания <li>Шнур с защитой от выкручивания <li>Изделие сертифицировано Госстандартом РФ <li>Соответствует европейским нормам безопасности <li>Мощность 1000W <li>230V, 50Hz </li></ul><p><strong>Производитель: США</strong></p> гадание перед зеркалом</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/9b4398884aa836c0acb140840fd7df60.jpeg" alt="курсы массажа в нижнем Набор для укладки Valera Ionic Multistyle Professional 640.01" title="курсы массажа в нижнем Набор для укладки Valera Ionic Multistyle Professional 640.01"><div class="box" page="nabor-dlya-ukladki-valera-ionic-multistyle-professional-4390r"><span class="title">курсы массажа в нижнем Набор для укладки Valera Ionic Multistyle Professional 640.01</span><p>от <span class="price">4390</span> руб.</p></div></li>
						<li><img src="photos/c6d699daf666463f9b839fa82bf8ede0.jpeg" alt="массаж в оренбурге Ирригатор полости рта Waterpik WP-100" title="массаж в оренбурге Ирригатор полости рта Waterpik WP-100"><div class="box" page="irrigator-polosti-rta-waterpik-wp-4600r"><span class="title">массаж в оренбурге Ирригатор полости рта Waterpik WP-100</span><p>от <span class="price">4600</span> руб.</p></div></li>
						<li><img src="photos/0771169db5e24831fbf44ff7fabc016d.jpeg" alt="утюжки для завивки волос Маникюрный набор Beurer MP30 (7 насадок)" title="утюжки для завивки волос Маникюрный набор Beurer MP30 (7 насадок)"><div class="box" page="manikyurnyy-nabor-beurer-mp-nasadok-1550r"><span class="title">утюжки для завивки волос Маникюрный набор Beurer MP30 (7 насадок)</span><p>от <span class="price">1550</span> руб.</p></div></li>
						<li><img src="photos/ea4bc761dd704bb1b832dd0bbcbcac26.jpeg" alt="бигуди роскошные локоны Маникюрный набор Babyliss 8480E (10 насадок)" title="бигуди роскошные локоны Маникюрный набор Babyliss 8480E (10 насадок)"><div class="box" page="manikyurnyy-nabor-babyliss-e-nasadok-1790r"><span class="title">бигуди роскошные локоны Маникюрный набор Babyliss 8480E (10 насадок)</span><p>от <span class="price">1790</span> руб.</p></div></li>
						<li class="large"><img src="photos/86bdc09c2f8fced55e77163da86e1eb1.jpeg" alt="сколько стоит минута в солярии Вибромассажный пояс для коррекции фигуры Slender Pro 005S" title="сколько стоит минута в солярии Вибромассажный пояс для коррекции фигуры Slender Pro 005S"><div class="box" page="vibromassazhnyy-poyas-dlya-korrekcii-figury-slender-pro-s-1700r"><span class="title">сколько стоит минута в солярии Вибромассажный пояс для коррекции фигуры Slender Pro 005S</span><p>от <span class="price">1700</span> руб.</p></div></li>
						<li class="large"><img src="photos/12b08f535454eb45912e69bb12756cf3.jpeg" alt="что делать в солярии Антицеллюлитный вибромассажер Gezatone Скульптор Тела AMG114 1301070" title="что делать в солярии Антицеллюлитный вибромассажер Gezatone Скульптор Тела AMG114 1301070"><div class="box" page="anticellyulitnyy-vibromassazher-gezatone-skulptor-tela-amg-2000r"><span class="title">что делать в солярии Антицеллюлитный вибромассажер Gezatone Скульптор Тела AMG114 1301070</span><p>от <span class="price">2000</span> руб.</p></div></li>
						<li class="large"><img src="photos/907dcd2af7058aef19fefe857a6583b5.jpeg" alt="дарсонваль купить минск Гидромассажная ванна для ног BaByliss 8033E" title="дарсонваль купить минск Гидромассажная ванна для ног BaByliss 8033E"><div class="box" page="gidromassazhnaya-vanna-dlya-nog-babyliss-e-3050r"><span class="title">дарсонваль купить минск Гидромассажная ванна для ног BaByliss 8033E</span><p>от <span class="price">3050</span> руб.</p></div></li>
						<li><img src="photos/e80e018f5a3b9a5d3aab17626d1428ec.png" alt="фен строительный профессиональный Массажная подушка Beurer MG140" title="фен строительный профессиональный Массажная подушка Beurer MG140"><div class="box" page="massazhnaya-podushka-beurer-mg-2900r"><span class="title">фен строительный профессиональный Массажная подушка Beurer MG140</span><p>от <span class="price">2900</span> руб.</p></div></li>
						<li><img src="photos/bff935c34202fecb6c42480671fe51be.jpeg" alt="двигатель для триммера Массажная накидка US-Medica Pilot" title="двигатель для триммера Массажная накидка US-Medica Pilot"><div class="box" page="massazhnaya-nakidka-usmedica-pilot-3500r"><span class="title">двигатель для триммера Массажная накидка US-Medica Pilot</span><p>от <span class="price">3500</span> руб.</p></div></li>
						<li><img src="photos/7f2ce257a271953a7408284d4ab7a314.jpeg" alt="зеркала для спален Машинка для стрижки Atlanta АТН-849" title="зеркала для спален Машинка для стрижки Atlanta АТН-849"><div class="box" page="mashinka-dlya-strizhki-atlanta-atn-400r"><span class="title">зеркала для спален Машинка для стрижки Atlanta АТН-849</span><p>от <span class="price">400</span> руб.</p></div></li>
						<li><img src="photos/c34916d8556e9636259427d5254b715e.jpeg" alt="тайский массаж фото Фен Braun HD770" title="тайский массаж фото Фен Braun HD770"><div class="box" page="fen-braun-hd-2750r"><span class="title">тайский массаж фото Фен Braun HD770</span><p>от <span class="price">2750</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("fen-atlanta-atn-840r.php", 0, -4); if (file_exists("comments/fen-atlanta-atn-840r.php")) require_once "comments/fen-atlanta-atn-840r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="fen-atlanta-atn-840r.php" method="post" onsubmit="return checkForm(this)">
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