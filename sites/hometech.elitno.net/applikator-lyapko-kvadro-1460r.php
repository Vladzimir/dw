<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("applikator-lyapko-kvadro-1460r.php","солярий sun vision");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("applikator-lyapko-kvadro-1460r.php", $nick, $comment);
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
		<title>солярий sun vision Аппликатор Ляпко Квадро 5,8  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="солярий sun vision, ирина красикова массаж, техника медового массажа, экзотический массаж, стайлер для завивки волос braun, зеркало игрушка, девушка пришла на массаж, лукьяненко зеркала, носовые платочки, массаж для младенцев, эпилятор для лица, солярий шоколад, зеркало петросян, набор для выпрямления волос,  колледж курсы массажа">
		<meta name="description" content="солярий sun vision Аппликатор – это своего рода «игольчатый доктор», который путем воздействия на о...">
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
						<a class="photo" href="photos/0028121fe8b92eb1330cfdeab7a690b7.jpeg" title="солярий sun vision Аппликатор Ляпко Квадро 5,8"><img src="photos/0028121fe8b92eb1330cfdeab7a690b7.jpeg" alt="солярий sun vision Аппликатор Ляпко Квадро 5,8" title="солярий sun vision Аппликатор Ляпко Квадро 5,8 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/schipcy-dlya-zavivki-babyliss-ce-ipro-mm-1750r.php"><img src="photos/a47834e167f88700a1ff6ede56cda638.jpeg" alt="ирина красикова массаж Щипцы для завивки Babyliss 2362CE i-Pro 200 25 мм" title="ирина красикова массаж Щипцы для завивки Babyliss 2362CE i-Pro 200 25 мм"></a><h2>Щипцы для завивки Babyliss 2362CE i-Pro 200 25 мм</h2></li>
							<li><a href="http://hometech.elitno.net/gel-dlya-domashnego-uhoda-ftorida-olova-home-care-540r.php"><img src="photos/ca3cac97732e962cf09778cd2b8d779d.jpeg" alt="техника медового массажа Гель для домашнего ухода. 0,4 % фторида олова. Home care." title="техника медового массажа Гель для домашнего ухода. 0,4 % фторида олова. Home care."></a><h2>Гель для домашнего ухода. 0,4 % фторида олова. Home care.</h2></li>
							<li><a href="http://hometech.elitno.net/parodontologicheskie-nasadki-dlya-irrigatora-waterpik-wpe-wpe-sht-350r.php"><img src="photos/2d366b96963f05922aa6b4a18209076a.jpeg" alt="экзотический массаж Пародонтологические насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)" title="экзотический массаж Пародонтологические насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)"></a><h2>Пародонтологические насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>солярий sun vision Аппликатор Ляпко Квадро 5,8</h1>
						<div class="tb"><p>Цена: от <span class="price">1460</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_763.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Аппликатор – это своего рода «игольчатый доктор», который путем воздействия на определенные зоны способен восстанавливать организм в целом, так и его системы в отдельности.</p><p>Аппликатор представляет собой специальную эластичную резиновую пластину, на которой крепятся иглы, состоящие из различных металлов, среди которых железо, медь, цинк, никель, серебро. В резиновой основе вокруг игл и по краям аппликатора имеются ограничительные выступы, предохраняющие кожу пациента от избыточного проникновения игл и от повреждения.</p><p>Регулярное использование массажера позволяет нормализовать обмен веществ, нормализует сон. Игольчатый массажер помогает при лечении заболеваний желудочно-кишечного тракта, сердечно-сосудистой, дыхательной и нервной систем. Его часто используют как болеутоляющее средство.</p><p><strong>Особенности: </strong></p><ul type=disc><li>повышает работоспособность и жизненный тонус, нормализует сон и обмен веществ, улучшает настроение; <li>помогает в лечении заболеваний желудочно-кишечного тракта, сердечно-сосудистой, дыхательной и нервной систем, нормализует их деятельность; <li>устраняет половые расстройства с последующей нормализацией половых функций у мужчин и женщин; при лечении гинекологических заболеваний способствует быстрому устранению воспалительных явлений и нарушений овариальноменструального цикла; <li>сокращает время полноценного восстановления после черепно-мозговых травм, переломов, операций, инсультов; снимает боли в позвоночнике, суставах и мышцах, а также головные боли; <li>повышает в 2-3 раза эффективность таких методов, как массаж, ушная и общая иглотерапия, мануальная и лазеротерапия, микроволновая резонансная терапия (при совместном или предварительном применении); <li>позволяет сократить прием лекарств, а то и вовсе отказаться от них. </li></ul><p><strong>Техническая характеристика: </strong></p><ul type=disc><li>Ширина: 120 мм. <li>Длина: 470 мм. <li>Шаг: 5,8 мм. <li>Кол-во игл: 1780 , с применением серебра. </li></ul><p><strong>Производство:</strong> Россия</p> солярий sun vision</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/13b08c422e5d93db5b02db2f9f4cebf3.jpeg" alt="стайлер для завивки волос braun Маникюрно-педикюрный набор Beurer MP60 (9 насадок)" title="стайлер для завивки волос braun Маникюрно-педикюрный набор Beurer MP60 (9 насадок)"><div class="box" page="manikyurnopedikyurnyy-nabor-beurer-mp-nasadok-2650r"><span class="title">стайлер для завивки волос braun Маникюрно-педикюрный набор Beurer MP60 (9 насадок)</span><p>от <span class="price">2650</span> руб.</p></div></li>
						<li><img src="photos/3d4dc7b0b0bda1f2ab085baf1dea3a46.jpeg" alt="зеркало игрушка Маска для ног Baby Foot" title="зеркало игрушка Маска для ног Baby Foot"><div class="box" page="maska-dlya-nog-baby-foot-1030r"><span class="title">зеркало игрушка Маска для ног Baby Foot</span><p>от <span class="price">1030</span> руб.</p></div></li>
						<li><img src="photos/45f6a3a7c98373d30c8ccb69b3f4f008.jpeg" alt="девушка пришла на массаж Многофункциональный педикюрный набор Bario" title="девушка пришла на массаж Многофункциональный педикюрный набор Bario"><div class="box" page="mnogofunkcionalnyy-pedikyurnyy-nabor-bario-1650r"><span class="title">девушка пришла на массаж Многофункциональный педикюрный набор Bario</span><p>от <span class="price">1650</span> руб.</p></div></li>
						<li><img src="photos/988207ea3c9688d138379e5f40a3f196.jpeg" alt="лукьяненко зеркала Стационарный массажный стол US Medica Atlant" title="лукьяненко зеркала Стационарный массажный стол US Medica Atlant"><div class="box" page="stacionarnyy-massazhnyy-stol-us-medica-atlant-37000r"><span class="title">лукьяненко зеркала Стационарный массажный стол US Medica Atlant</span><p>от <span class="price">37000</span> руб.</p></div></li>
						<li class="large"><img src="photos/99cbcb6c378c9a65446426b21fc380fe.jpeg" alt="носовые платочки Кармашек для ценных вещей USM-013" title="носовые платочки Кармашек для ценных вещей USM-013"><div class="box" page="karmashek-dlya-cennyh-veschey-usm-200r"><span class="title">носовые платочки Кармашек для ценных вещей USM-013</span><p>от <span class="price">200</span> руб.</p></div></li>
						<li class="large"><img src="photos/a3fdb4f3f35476641171d44c065fe679.jpeg" alt="массаж для младенцев АЛ Волшебная  Лента Здоровье (3 сегмента)" title="массаж для младенцев АЛ Волшебная  Лента Здоровье (3 сегмента)"><div class="box" page="al-volshebnaya-lenta-zdorove-segmenta-2600r"><span class="title">массаж для младенцев АЛ Волшебная  Лента Здоровье (3 сегмента)</span><p>от <span class="price">2600</span> руб.</p></div></li>
						<li class="large"><img src="photos/ab88833e4637905c1c689b34620dfa36.gif" alt="эпилятор для лица Аппликатор-пояс Универсальный (шаг игл 4,3 мм; 3 сегмента) Ляпко" title="эпилятор для лица Аппликатор-пояс Универсальный (шаг игл 4,3 мм; 3 сегмента) Ляпко"><div class="box" page="applikatorpoyas-universalnyy-shag-igl-mm-segmenta-lyapko-1670r"><span class="title">эпилятор для лица Аппликатор-пояс Универсальный (шаг игл 4,3 мм; 3 сегмента) Ляпко</span><p>от <span class="price">1670</span> руб.</p></div></li>
						<li><img src="photos/3f058fca0af13e434cdaba91b5eca059.jpeg" alt="солярий шоколад Шарф массажный NAP Massage Wrap" title="солярий шоколад Шарф массажный NAP Massage Wrap"><div class="box" page="sharf-massazhnyy-nap-massage-wrap-670r"><span class="title">солярий шоколад Шарф массажный NAP Massage Wrap</span><p>от <span class="price">670</span> руб.</p></div></li>
						<li><img src="photos/d6c0da82c6f431373797d962b10fd780.jpeg" alt="зеркало петросян Прибор для массажа кожи головы Laser Hair Gezatone HS585 1301092" title="зеркало петросян Прибор для массажа кожи головы Laser Hair Gezatone HS585 1301092"><div class="box" page="pribor-dlya-massazha-kozhi-golovy-laser-hair-gezatone-hs-1790r"><span class="title">зеркало петросян Прибор для массажа кожи головы Laser Hair Gezatone HS585 1301092</span><p>от <span class="price">1790</span> руб.</p></div></li>
						<li><img src="photos/782aa0f31386fb09629ab9ef5d11ebc4.jpeg" alt="набор для выпрямления волос Массажер для профилактики варикоза Aviafit (2 шт)" title="набор для выпрямления волос Массажер для профилактики варикоза Aviafit (2 шт)"><div class="box" page="massazher-dlya-profilaktiki-varikoza-aviafit-sht-3000r"><span class="title">набор для выпрямления волос Массажер для профилактики варикоза Aviafit (2 шт)</span><p>от <span class="price">3000</span> руб.</p></div></li>
						<li><img src="photos/3e4f87cc3e841e1eba9cd7b8719190ef.jpeg" alt="массаж ног техника Триммер BaByliss E852XE" title="массаж ног техника Триммер BaByliss E852XE"><div class="box" page="trimmer-babyliss-exe-3140r"><span class="title">массаж ног техника Триммер BaByliss E852XE</span><p>от <span class="price">3140</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("applikator-lyapko-kvadro-1460r.php", 0, -4); if (file_exists("comments/applikator-lyapko-kvadro-1460r.php")) require_once "comments/applikator-lyapko-kvadro-1460r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="applikator-lyapko-kvadro-1460r.php" method="post" onsubmit="return checkForm(this)">
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