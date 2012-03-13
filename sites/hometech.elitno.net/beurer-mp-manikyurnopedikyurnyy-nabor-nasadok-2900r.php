<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("beurer-mp-manikyurnopedikyurnyy-nabor-nasadok-2900r.php","техника массажа сердца");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("beurer-mp-manikyurnopedikyurnyy-nabor-nasadok-2900r.php", $nick, $comment);
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
		<title>техника массажа сердца Beurer MP61 Маникюрно-педикюрный набор (9 насадок)  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="техника массажа сердца, дополнительное зеркало, зеркала на машину, аллергия на солярий, шампунь для выпрямления волос, весы электронные до 200 кг, ожог в солярии, зеркало перевод, зеркала лорак песня, эпиляторы характеристика, куплю зеркало в ванную, химическая завивка на короткие волосы, мужские стрижки под машинку, купить триммер электрический,  машинка для стрижки ровента">
		<meta name="description" content="техника массажа сердца Маникюрно-педикюрный набор Beurer MP61 – набор, состоящий из 9 сапфировых насадо...">
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
						<a class="photo" href="photos/c225afb28f1b6e082ea5b6d0dfd8a7ac.jpeg" title="техника массажа сердца Beurer MP61 Маникюрно-педикюрный набор (9 насадок)"><img src="photos/c225afb28f1b6e082ea5b6d0dfd8a7ac.jpeg" alt="техника массажа сердца Beurer MP61 Маникюрно-педикюрный набор (9 насадок)" title="техника массажа сердца Beurer MP61 Маникюрно-педикюрный набор (9 насадок) -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/valik-polukruglyy-usmedica-green-l-1200r.php"><img src="photos/4d3c7f0a4c5455cbe6d588bf75bcfd09.jpeg" alt="дополнительное зеркало Валик полукруглый US-Medica GREEN L52" title="дополнительное зеркало Валик полукруглый US-Medica GREEN L52"></a><h2>Валик полукруглый US-Medica GREEN L52</h2></li>
							<li><a href="http://hometech.elitno.net/ofisnoe-massazhnoe-kreslo-us-medica-chicago-25000r.php"><img src="photos/f4f525ef8dc957711c174f314a48fb88.jpeg" alt="зеркала на машину Офисное массажное кресло US Medica Chicago" title="зеркала на машину Офисное массажное кресло US Medica Chicago"></a><h2>Офисное массажное кресло US Medica Chicago</h2></li>
							<li><a href="http://hometech.elitno.net/massazher-omron-e-tensmiostimulyator-4100r.php"><img src="photos/d183c7f387a6a16832dcadb30c5c244b.jpeg" alt="аллергия на солярий Массажер OMRON E4 (TENS-миостимулятор)" title="аллергия на солярий Массажер OMRON E4 (TENS-миостимулятор)"></a><h2>Массажер OMRON E4 (TENS-миостимулятор)</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>техника массажа сердца Beurer MP61 Маникюрно-педикюрный набор (9 насадок)</h1>
						<div class="tb"><p>Цена: от <span class="price">2900</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18277.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Маникюрно-педикюрный набор Beurer MP61 – набор, состоящий из 9 сапфировых насадок, который позволит вам в домашних условиях получить то, что раньше было доступно лишь в салоне красоты. Все насадки находятся в стильном и удобном футляре. Вращение насадок происходит как по часовой стрелке, так и в обратном направлении. Есть встроенная подсветка. Скорость работы: до 6100 оборотов в минуту.</p><p><strong>Характеристики:</strong></p><ul><li>9 сапфировых насадок <li>Подсветка рабочей области <li>Вращение по и против часовой стрелки <li>Скорость: 2400 об/мин - 6000 об/мин <li>Эргономичная не скользкая ручка <li>Подходит для диабетиков <li>Удобный футляр для хранения <li>Работа от сети: 100 - 200 V <li>Размер: 3,45 x 3,46 х 15,5 см <li>Вес (включая блок питания) : 240 г <li>Гарантия 2 года </li></ul><p><strong>Производитель:  Германия</strong></p><p><strong>Гарантия 2 года</strong></p> техника массажа сердца</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/febc0d538efb454d2fcae5ec3130fad8.jpeg" alt="шампунь для выпрямления волос Аппликатор Стелька-скороход, размер 40-43" title="шампунь для выпрямления волос Аппликатор Стелька-скороход, размер 40-43"><div class="box"><a href="http://hometech.elitno.net/applikator-stelkaskorohod-razmer-1500r.php"><h3 class="title">шампунь для выпрямления волос Аппликатор Стелька-скороход, размер 40-43</h3><p>от <span class="price">1500</span> руб.</p></a></div></li>
						<li><img src="photos/e19b318cb6be30f4f50f5be72b000917.jpeg" alt="весы электронные до 200 кг Массажер для пальцев ног Pampered Toes" title="весы электронные до 200 кг Массажер для пальцев ног Pampered Toes"><div class="box" page="massazher-dlya-palcev-nog-pampered-toes-250r"><span class="title">весы электронные до 200 кг Массажер для пальцев ног Pampered Toes</span><p>от <span class="price">250</span> руб.</p></div></li>
						<li><img src="photos/2da10774211f671836a3e448d640220b.png" alt="ожог в солярии Массажер для стоп US-Medica Omega" title="ожог в солярии Массажер для стоп US-Medica Omega"><div class="box" page="massazher-dlya-stop-usmedica-omega-4500r"><span class="title">ожог в солярии Массажер для стоп US-Medica Omega</span><p>от <span class="price">4500</span> руб.</p></div></li>
						<li><img src="photos/0e36d5a33ba12bef9e55f0ef96a3960d.jpeg" alt="зеркало перевод Прибор гальванический для ухода за кожей Gezatone Beauty Lifting m910" title="зеркало перевод Прибор гальванический для ухода за кожей Gezatone Beauty Lifting m910"><div class="box" page="pribor-galvanicheskiy-dlya-uhoda-za-kozhey-gezatone-beauty-lifting-m-1000r"><span class="title">зеркало перевод Прибор гальванический для ухода за кожей Gezatone Beauty Lifting m910</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li class="large"><img src="photos/7027adb71f2155ad74bf69c108416d64.jpeg" alt="зеркала лорак песня Прибор для ухода за кожей лица Gezatone Superlifting m355 с функцией светотерапии" title="зеркала лорак песня Прибор для ухода за кожей лица Gezatone Superlifting m355 с функцией светотерапии"><div class="box" page="pribor-dlya-uhoda-za-kozhey-lica-gezatone-superlifting-m-s-funkciey-svetoterapii-3650r"><span class="title">зеркала лорак песня Прибор для ухода за кожей лица Gezatone Superlifting m355 с функцией светотерапии</span><p>от <span class="price">3650</span> руб.</p></div></li>
						<li class="large"><img src="photos/86ec0141c0d9addb97d28879c40d13c8.jpeg" alt="эпиляторы характеристика Corioliss «Микрофон» Щетка (лопатка)" title="эпиляторы характеристика Corioliss «Микрофон» Щетка (лопатка)"><div class="box" page="corioliss-«mikrofon»-schetka-lopatka-810r"><span class="title">эпиляторы характеристика Corioliss «Микрофон» Щетка (лопатка)</span><p>от <span class="price">810</span> руб.</p></div></li>
						<li class="large"><img src="photos/d8f63990242e9c9f3d5c4cfc322b0bcb.jpeg" alt="куплю зеркало в ванную Beurer HL100 Прибор световой эпиляции" title="куплю зеркало в ванную Beurer HL100 Прибор световой эпиляции"><div class="box" page="beurer-hl-pribor-svetovoy-epilyacii-18500r"><span class="title">куплю зеркало в ванную Beurer HL100 Прибор световой эпиляции</span><p>от <span class="price">18500</span> руб.</p></div></li>
						<li><img src="photos/315fceab69c6c513c80a5c9bf34f9fb0.jpeg" alt="химическая завивка на короткие волосы BaByliss E842XE Триммер" title="химическая завивка на короткие волосы BaByliss E842XE Триммер"><div class="box" page="babyliss-exe-trimmer-1520r"><span class="title">химическая завивка на короткие волосы BaByliss E842XE Триммер</span><p>от <span class="price">1520</span> руб.</p></div></li>
						<li><img src="photos/47acb373ffbb147c27d966071f17fdaa.jpeg" alt="мужские стрижки под машинку Фен Valera Silent 2200 Super Ionic 545.09DV" title="мужские стрижки под машинку Фен Valera Silent 2200 Super Ionic 545.09DV"><div class="box" page="fen-valera-silent-super-ionic-dv-2330r"><span class="title">мужские стрижки под машинку Фен Valera Silent 2200 Super Ionic 545.09DV</span><p>от <span class="price">2330</span> руб.</p></div></li>
						<li><img src="photos/4994393d6aed560fb817e6a021ea5232.jpeg" alt="купить триммер электрический Зубная щетка звуковая Omron Sonic Style 458 черная" title="купить триммер электрический Зубная щетка звуковая Omron Sonic Style 458 черная"><div class="box" page="zubnaya-schetka-zvukovaya-omron-sonic-style-chernaya-4500r"><span class="title">купить триммер электрический Зубная щетка звуковая Omron Sonic Style 458 черная</span><p>от <span class="price">4500</span> руб.</p></div></li>
						<li><img src="photos/1ed3782a761a5615bc41cb19f8a9861f.jpeg" alt="массаж в астане Зубная щетка BRAUN D-24 (D-32.546.5x) Triumph" title="массаж в астане Зубная щетка BRAUN D-24 (D-32.546.5x) Triumph"><div class="box" page="zubnaya-schetka-braun-d-dx-triumph-7540r"><span class="title">массаж в астане Зубная щетка BRAUN D-24 (D-32.546.5x) Triumph</span><p>от <span class="price">7540</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("beurer-mp-manikyurnopedikyurnyy-nabor-nasadok-2900r.php", 0, -4); if (file_exists("comments/beurer-mp-manikyurnopedikyurnyy-nabor-nasadok-2900r.php")) require_once "comments/beurer-mp-manikyurnopedikyurnyy-nabor-nasadok-2900r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="beurer-mp-manikyurnopedikyurnyy-nabor-nasadok-2900r.php" method="post" onsubmit="return checkForm(this)">
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