<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("hplight-domashniy-fotoepillyator-29000r.php","массаж в тюмени");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("hplight-domashniy-fotoepillyator-29000r.php", $nick, $comment);
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
		<title>массаж в тюмени HPLight Домашний фотоэпиллятор  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="массаж в тюмени, ирригатор waterpik отзывы, зеркало camry, профессиональные фены отзывы, зачем закрывают зеркала, эпилятор ровента отзывы, дренажный массаж, массаж инструкция, карат де 212 дарсонваль насадки, лучший фен отзывы, где купить бигуди, бразильское выпрямление волос цена, весы электронные acs, вакансии маникюр педикюр,  массаж в астане">
		<meta name="description" content="массаж в тюмени Сверхбыстрый домашний портативный фотоэпиллятор HPLight для проведения эпиляции ...">
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
						<a class="photo" href="photos/3707538f40c37bb168d45512eed1aee5.jpeg" title="массаж в тюмени HPLight Домашний фотоэпиллятор"><img src="photos/3707538f40c37bb168d45512eed1aee5.jpeg" alt="массаж в тюмени HPLight Домашний фотоэпиллятор" title="массаж в тюмени HPLight Домашний фотоэпиллятор -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-400r.php"><img src="photos/136e687ab7caf7ea2792cd39cf43a22a.jpeg" alt="ирригатор waterpik отзывы Электрощипцы для выпрямления волос Atlanta АТН-839" title="ирригатор waterpik отзывы Электрощипцы для выпрямления волос Atlanta АТН-839"></a><h2>Электрощипцы для выпрямления волос Atlanta АТН-839</h2></li>
							<li><a href="http://hometech.elitno.net/nasadka-gribok-dlya-karat-de-darsonval-300r.php"><img src="photos/2a374f4a4bcee4ad5582460480916d81.jpeg" alt="зеркало camry Насадка Грибок для КАРАТ ДЕ-212 Дарсонваль" title="зеркало camry Насадка Грибок для КАРАТ ДЕ-212 Дарсонваль"></a><h2>Насадка Грибок для КАРАТ ДЕ-212 Дарсонваль</h2></li>
							<li><a href="http://hometech.elitno.net/zerkalo-kosmetologicheskoe-dvuhstoronnee-s-podsvetkoy-gezatone-lm-1000r.php"><img src="photos/07b29837951e205c6d1a626dd79e38d4.jpeg" alt="профессиональные фены отзывы Зеркало косметологическое двухстороннее с подсветкой Gezatone LM107" title="профессиональные фены отзывы Зеркало косметологическое двухстороннее с подсветкой Gezatone LM107"></a><h2>Зеркало косметологическое двухстороннее с подсветкой Gezatone LM107</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>массаж в тюмени HPLight Домашний фотоэпиллятор</h1>
						<div class="tb"><p>Цена: от <span class="price">29000</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18343.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Сверхбыстрый домашний портативный фотоэпиллятор HPLight для проведения эпиляции в домашних условиях. Использует технологии, применяемые в профессиональной эпиляции (IPL). Удобное и интуитивно понятное управление. Большая площадь светового пятна: 6х2 см. Процедура проходит абсолютно безболезненно. </p><p><strong>Характеристики:</strong></p><ul type=disc><li>Использование профессиональных технологий фотоэпиляции (IPL). <li>вес 1,2 кг <li>площадь светового пятна 6х2 см </li></ul><p><strong>Производитель: Германия</strong></p> массаж в тюмени</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/b335395a214a3a546c41305f7ef60066.jpeg" alt="зачем закрывают зеркала Набор для маникюра и педикюра с 5 насадками Gezatone 116D 1301051" title="зачем закрывают зеркала Набор для маникюра и педикюра с 5 насадками Gezatone 116D 1301051"><div class="box" page="nabor-dlya-manikyura-i-pedikyura-s-nasadkami-gezatone-d-590r"><span class="title">зачем закрывают зеркала Набор для маникюра и педикюра с 5 насадками Gezatone 116D 1301051</span><p>от <span class="price">590</span> руб.</p></div></li>
						<li><img src="photos/73a821d3ad225325ed956d5e193b7846.jpeg" alt="эпилятор ровента отзывы Раскладной массажный стол US Medica Sakura линейка Sumo Line" title="эпилятор ровента отзывы Раскладной массажный стол US Medica Sakura линейка Sumo Line"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-sakura-lineyka-sumo-line-24900r"><span class="title">эпилятор ровента отзывы Раскладной массажный стол US Medica Sakura линейка Sumo Line</span><p>от <span class="price">24900</span> руб.</p></div></li>
						<li><img src="photos/8e0d56e9d9bc332ca7666fce73e0922e.jpeg" alt="дренажный массаж Раскладной массажный стол US Medica Panda линейка Sumo Line" title="дренажный массаж Раскладной массажный стол US Medica Panda линейка Sumo Line"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-panda-lineyka-sumo-line-35000r"><span class="title">дренажный массаж Раскладной массажный стол US Medica Panda линейка Sumo Line</span><p>от <span class="price">35000</span> руб.</p></div></li>
						<li><img src="photos/b4819229f946baeab966fd9fb7bf8470.jpeg" alt="массаж инструкция Массажное кресло Yamaguchi YA-2800" title="массаж инструкция Массажное кресло Yamaguchi YA-2800"><div class="box" page="massazhnoe-kreslo-yamaguchi-ya-270000r"><span class="title">массаж инструкция Массажное кресло Yamaguchi YA-2800</span><p>от <span class="price">270000</span> руб.</p></div></li>
						<li class="large"><img src="photos/9af88bf8f0a341b5c9eda8033fc64175.jpeg" alt="карат де 212 дарсонваль насадки Массажное кресло US Medica Indigo" title="карат де 212 дарсонваль насадки Массажное кресло US Medica Indigo"><div class="box" page="massazhnoe-kreslo-us-medica-indigo-95000r"><span class="title">карат де 212 дарсонваль насадки Массажное кресло US Medica Indigo</span><p>от <span class="price">95000</span> руб.</p></div></li>
						<li class="large"><img src="photos/8a98e77bf2013252bbcf0a798cdb865d.jpeg" alt="лучший фен отзывы Массажер для тела Beurer MG40" title="лучший фен отзывы Массажер для тела Beurer MG40"><div class="box" page="massazher-dlya-tela-beurer-mg-950r"><span class="title">лучший фен отзывы Массажер для тела Beurer MG40</span><p>от <span class="price">950</span> руб.</p></div></li>
						<li class="large"><img src="photos/b8fa68534bca726355bda362e43ac70b.jpeg" alt="где купить бигуди Массажер-подушка Gezatone AMG390 1301099" title="где купить бигуди Массажер-подушка Gezatone AMG390 1301099"><div class="box" page="massazherpodushka-gezatone-amg-3290r"><span class="title">где купить бигуди Массажер-подушка Gezatone AMG390 1301099</span><p>от <span class="price">3290</span> руб.</p></div></li>
						<li><img src="photos/ef10884f9e80a4171170846108539bb4.jpeg" alt="бразильское выпрямление волос цена Спа-массажер Gezatone AMG107 1301102" title="бразильское выпрямление волос цена Спа-массажер Gezatone AMG107 1301102"><div class="box" page="spamassazher-gezatone-amg-890r"><span class="title">бразильское выпрямление волос цена Спа-массажер Gezatone AMG107 1301102</span><p>от <span class="price">890</span> руб.</p></div></li>
						<li><img src="photos/4b5374ef2a42b13f32ae833077b5a012.jpeg" alt="весы электронные acs Вибромассажер HOUSE FIT НМ-3003" title="весы электронные acs Вибромассажер HOUSE FIT НМ-3003"><div class="box" page="vibromassazher-house-fit-nm-7700r"><span class="title">весы электронные acs Вибромассажер HOUSE FIT НМ-3003</span><p>от <span class="price">7700</span> руб.</p></div></li>
						<li><img src="photos/75b05ae33b613e40ffe8181cdc09a99b.jpeg" alt="вакансии маникюр педикюр Массажер ZENET TL-MHT-H" title="вакансии маникюр педикюр Массажер ZENET TL-MHT-H"><div class="box" page="massazher-zenet-tlmhth-1250r"><span class="title">вакансии маникюр педикюр Массажер ZENET TL-MHT-H</span><p>от <span class="price">1250</span> руб.</p></div></li>
						<li><img src="photos/d2b7ff9e11c72a7ec42a2c10d5296088.jpeg" alt="массаж пальчиков Фен-щетка BaByliss AS130E 700 Вт" title="массаж пальчиков Фен-щетка BaByliss AS130E 700 Вт"><div class="box" page="fenschetka-babyliss-ase-vt-2060r"><span class="title">массаж пальчиков Фен-щетка BaByliss AS130E 700 Вт</span><p>от <span class="price">2060</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("hplight-domashniy-fotoepillyator-29000r.php", 0, -4); if (file_exists("comments/hplight-domashniy-fotoepillyator-29000r.php")) require_once "comments/hplight-domashniy-fotoepillyator-29000r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="hplight-domashniy-fotoepillyator-29000r.php" method="post" onsubmit="return checkForm(this)">
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