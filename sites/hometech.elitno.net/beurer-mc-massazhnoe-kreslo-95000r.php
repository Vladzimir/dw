<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("beurer-mc-massazhnoe-kreslo-95000r.php","магазин косметики для солярия");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("beurer-mc-massazhnoe-kreslo-95000r.php", $nick, $comment);
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
		<title>магазин косметики для солярия Beurer MC5000 Массажное кресло  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="магазин косметики для солярия, к чему бьется зеркало, аппарат для вакуумного массажа, насадки для машинки для стрижки волос, тайский массаж ног, лукьяненко зеркала, приготовление фена, массаж инструкция, эпилятор силк эпил, после солярия нельзя, накладки на зеркала 2110, химическая завивка волос крупные локоны, электробритвы мужские купить, ирригатор waterpik ultra,  заточка ножей машинки для стрижки">
		<meta name="description" content="магазин косметики для солярия Массажное кресло Beurer MC5000 с функцией автоматического сканирования тела и со...">
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
						<a class="photo" href="photos/3d4ff223442431b121dd91ae8e45e929.jpeg" title="магазин косметики для солярия Beurer MC5000 Массажное кресло"><img src="photos/3d4ff223442431b121dd91ae8e45e929.jpeg" alt="магазин косметики для солярия Beurer MC5000 Массажное кресло" title="магазин косметики для солярия Beurer MC5000 Массажное кресло -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-bytovye-tanita-hd-2450r.php"><img src="photos/fc6f1a57986f092efd97a2c2ca581b49.jpeg" alt="к чему бьется зеркало Весы бытовые Tanita HD-366" title="к чему бьется зеркало Весы бытовые Tanita HD-366"></a><h2>Весы бытовые Tanita HD-366</h2></li>
							<li><a href="http://hometech.elitno.net/glamurnaya-palochka-dlya-zavivki-volos-corioliss-glamour-wand-3080r.php"><img src="photos/5c5fbc08f4578545307c561d516fe2c8.jpeg" alt="аппарат для вакуумного массажа Гламурная палочка для завивки волос Corioliss Glamour Wand" title="аппарат для вакуумного массажа Гламурная палочка для завивки волос Corioliss Glamour Wand"></a><h2>Гламурная палочка для завивки волос Corioliss Glamour Wand</h2></li>
							<li><a href="http://hometech.elitno.net/schipcy-dlya-zavivki-babyliss-e-mm-1070r-2.php"><img src="photos/58f879fc7c3b36b7e8f23db41babefe6.jpeg" alt="насадки для машинки для стрижки волос Щипцы для завивки Babyliss 2325E 25 мм" title="насадки для машинки для стрижки волос Щипцы для завивки Babyliss 2325E 25 мм"></a><h2>Щипцы для завивки Babyliss 2325E 25 мм</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>магазин косметики для солярия Beurer MC5000 Массажное кресло</h1>
						<div class="tb"><p>Цена: от <span class="price">95000</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18281.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Массажное кресло Beurer MC5000 с функцией автоматического сканирования тела и составлением индивидуальной программы массажа. Оно может делать перекатывающий, разминающий, похлопывающий массаж или массаж шиацу. Несколько регулировок положения: лежа, полулежа или сидя. 3 уровня регулировки ширины массажной головки. <br><br><strong>Характеристики:</strong> </p><ul type=disc><li>Функция автоматического сканирования тела <li>Индивидуальная настройка полного массажа тела при помощи системы из 4-х массажных головок <li>Возможно составление индивидуальной программы массажа <li>Массаж шиацу, а также похлопывающий, разминающий и перекатывающий массаж <li>Точечный и частичный массаж 5 видов массажа на выбор <li>Удобный пульт управления, с подсветкой дисплея и кнопок </li></ul><p><strong>Производство: Германия</strong></p> магазин косметики для солярия</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/b065bebb64de8f2c346a89fd812de718.jpeg" alt="тайский массаж ног Восстановление. Реминерализующий гель с фтором. Revive." title="тайский массаж ног Восстановление. Реминерализующий гель с фтором. Revive."><div class="box" page="vosstanovlenie-remineralizuyuschiy-gel-s-ftorom-revive-540r"><span class="title">тайский массаж ног Восстановление. Реминерализующий гель с фтором. Revive.</span><p>от <span class="price">540</span> руб.</p></div></li>
						<li><img src="photos/988207ea3c9688d138379e5f40a3f196.jpeg" alt="лукьяненко зеркала Стационарный массажный стол US Medica Atlant" title="лукьяненко зеркала Стационарный массажный стол US Medica Atlant"><div class="box" page="stacionarnyy-massazhnyy-stol-us-medica-atlant-37000r"><span class="title">лукьяненко зеркала Стационарный массажный стол US Medica Atlant</span><p>от <span class="price">37000</span> руб.</p></div></li>
						<li><img src="photos/be933d8d1e85d52fb3b8e981e9e6d19f.jpeg" alt="приготовление фена Подлокотники L73 USM-011" title="приготовление фена Подлокотники L73 USM-011"><div class="box" page="podlokotniki-l-usm-1800r"><span class="title">приготовление фена Подлокотники L73 USM-011</span><p>от <span class="price">1800</span> руб.</p></div></li>
						<li><img src="photos/b4819229f946baeab966fd9fb7bf8470.jpeg" alt="массаж инструкция Массажное кресло Yamaguchi YA-2800" title="массаж инструкция Массажное кресло Yamaguchi YA-2800"><div class="box" page="massazhnoe-kreslo-yamaguchi-ya-270000r"><span class="title">массаж инструкция Массажное кресло Yamaguchi YA-2800</span><p>от <span class="price">270000</span> руб.</p></div></li>
						<li class="large"><img src="photos/0d9343dd6acb58ca14845e35f6eccd11.jpeg" alt="эпилятор силк эпил Массажер Nozomi MH-102" title="эпилятор силк эпил Массажер Nozomi MH-102"><div class="box" page="massazher-nozomi-mh-1390r"><span class="title">эпилятор силк эпил Массажер Nozomi MH-102</span><p>от <span class="price">1390</span> руб.</p></div></li>
						<li class="large"><img src="photos/443ea533b0dac6c448826c56d4beed62.jpeg" alt="после солярия нельзя Массажер для глаз с тепловой и вибромассажной функцией Gezatone BEM-III" title="после солярия нельзя Массажер для глаз с тепловой и вибромассажной функцией Gezatone BEM-III"><div class="box" page="massazher-dlya-glaz-s-teplovoy-i-vibromassazhnoy-funkciey-gezatone-bemiii-3300r"><span class="title">после солярия нельзя Массажер для глаз с тепловой и вибромассажной функцией Gezatone BEM-III</span><p>от <span class="price">3300</span> руб.</p></div></li>
						<li class="large"><img src="photos/4a6d7ab9cfe83a738906064801e96855.jpeg" alt="накладки на зеркала 2110 Паровая сауна для лица Gezatone 105S" title="накладки на зеркала 2110 Паровая сауна для лица Gezatone 105S"><div class="box" page="parovaya-sauna-dlya-lica-gezatone-s-1200r"><span class="title">накладки на зеркала 2110 Паровая сауна для лица Gezatone 105S</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li><img src="photos/5811756c6fd41ce9cafcc5b01b7c35da.jpeg" alt="химическая завивка волос крупные локоны Машинка для депиляции и стрижки волос и бороды beauty and health (Триммер Just a Trim)" title="химическая завивка волос крупные локоны Машинка для депиляции и стрижки волос и бороды beauty and health (Триммер Just a Trim)"><div class="box" page="mashinka-dlya-depilyacii-i-strizhki-volos-i-borody-beauty-and-health-trimmer-just-a-trim-690r"><span class="title">химическая завивка волос крупные локоны Машинка для депиляции и стрижки волос и бороды beauty and health (Триммер Just a Trim)</span><p>от <span class="price">690</span> руб.</p></div></li>
						<li><img src="photos/e01d2dae2f575f567f13f00f34017217.jpeg" alt="электробритвы мужские купить Машинка для бикини дизайна Gezatone DP501 с насадкой для бритья" title="электробритвы мужские купить Машинка для бикини дизайна Gezatone DP501 с насадкой для бритья"><div class="box" page="mashinka-dlya-bikini-dizayna-gezatone-dp-s-nasadkoy-dlya-britya-1500r"><span class="title">электробритвы мужские купить Машинка для бикини дизайна Gezatone DP501 с насадкой для бритья</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li><img src="photos/0339a99d9db607aa03bad2eea7d85456.jpeg" alt="ирригатор waterpik ultra Фен Corioliss Neon" title="ирригатор waterpik ultra Фен Corioliss Neon"><div class="box" page="fen-corioliss-neon-5350r"><span class="title">ирригатор waterpik ultra Фен Corioliss Neon</span><p>от <span class="price">5350</span> руб.</p></div></li>
						<li><img src="photos/ede11f2c17725c377852bd7c89a582d6.jpeg" alt="солярий в аренду Стерилизатор для зубных щеток Gezatone t4 130811" title="солярий в аренду Стерилизатор для зубных щеток Gezatone t4 130811"><div class="box" page="sterilizator-dlya-zubnyh-schetok-gezatone-t-600r"><span class="title">солярий в аренду Стерилизатор для зубных щеток Gezatone t4 130811</span><p>от <span class="price">600</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("beurer-mc-massazhnoe-kreslo-95000r.php", 0, -4); if (file_exists("comments/beurer-mc-massazhnoe-kreslo-95000r.php")) require_once "comments/beurer-mc-massazhnoe-kreslo-95000r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="beurer-mc-massazhnoe-kreslo-95000r.php" method="post" onsubmit="return checkForm(this)">
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