<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("pribor-sanitas-suv-kontrol-zagara-980r.php","подогрев боковых зеркал");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("pribor-sanitas-suv-kontrol-zagara-980r.php", $nick, $comment);
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
		<title>подогрев боковых зеркал Прибор Sanitas SUV25 (контроль загара)  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="подогрев боковых зеркал, лосьон для для солярия, техника массажа сердца, лучшие электробритвы мужские, курсы массажа стоимость, аллергия на солярий, эпилятор philips hp 6576, весы электронные настольные, электронное зеркало, зеркало задней двери, вакуумный массаж купить, подглядывание в солярии, бумажные полотенца в рулонах, толкование снов зеркало,  массаж приморская">
		<meta name="description" content="подогрев боковых зеркал Красивая загорелая кожа – мечта многих женщин и мужчин. Но не всегда загар получ...">
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
						<a class="photo" href="photos/6b871812d7971c2b8d95f245df97dcb0.jpeg" title="подогрев боковых зеркал Прибор Sanitas SUV25 (контроль загара)"><img src="photos/6b871812d7971c2b8d95f245df97dcb0.jpeg" alt="подогрев боковых зеркал Прибор Sanitas SUV25 (контроль загара)" title="подогрев боковых зеркал Прибор Sanitas SUV25 (контроль загара) -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vypryamitel-mateca-m-besprovodnoy-2400r.php"><img src="photos/54daa8c422694960a4b932dac99e46ae.jpeg" alt="лосьон для для солярия Выпрямитель Mateca M 769 беспроводной" title="лосьон для для солярия Выпрямитель Mateca M 769 беспроводной"></a><h2>Выпрямитель Mateca M 769 беспроводной</h2></li>
							<li><a href="http://hometech.elitno.net/smennyy-kartridzh-k-oserebritelyu-georgiy-430r.php"><img src="photos/7bf9d94bef7f7d982ce7407ebebbc6e0.jpeg" alt="техника массажа сердца Сменный картридж к осеребрителю Георгий" title="техника массажа сердца Сменный картридж к осеребрителю Георгий"></a><h2>Сменный картридж к осеребрителю Георгий</h2></li>
							<li><a href="http://hometech.elitno.net/parodontologicheskie-nasadki-dlya-irrigatora-waterpik-wpe-sht-350r.php"><img src="photos/dded430ece486ae43997cb46bb2e8368.jpeg" alt="лучшие электробритвы мужские Пародонтологические насадки для ирригатора Waterpik WP70E (2 шт.)" title="лучшие электробритвы мужские Пародонтологические насадки для ирригатора Waterpik WP70E (2 шт.)"></a><h2>Пародонтологические насадки для ирригатора Waterpik WP70E (2 шт.)</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>подогрев боковых зеркал Прибор Sanitas SUV25 (контроль загара)</h1>
						<div class="tb"><p>Цена: от <span class="price">980</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_2908.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Красивая загорелая кожа – мечта многих женщин и мужчин. Но не всегда загар получается таким ровным, как бы этого хотелось. <strong>Прибор Sanitas SUV25</strong> поможет определить степень загара для всех типов кожи и предотвратит нежелательные результаты приема солнечной ванны.</p><p><b>Производство:</b> Германия</p><p><b>Гарантия:</b> 1 год</p> подогрев боковых зеркал</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/8df4f8dbcfb00ce4c5c74af768f58cb0.jpeg" alt="курсы массажа стоимость Валик полукруглый L60H11 USM-002" title="курсы массажа стоимость Валик полукруглый L60H11 USM-002"><div class="box"><a href="http://hometech.elitno.net/valik-polukruglyy-lh-usm-1200r.php"><h3 class="title">курсы массажа стоимость Валик полукруглый L60H11 USM-002</h3><p>от <span class="price">1200</span> руб.</p></a></div></li>
						<li><img src="photos/d183c7f387a6a16832dcadb30c5c244b.jpeg" alt="аллергия на солярий Массажер OMRON E4 (TENS-миостимулятор)" title="аллергия на солярий Массажер OMRON E4 (TENS-миостимулятор)"><div class="box" page="massazher-omron-e-tensmiostimulyator-4100r"><span class="title">аллергия на солярий Массажер OMRON E4 (TENS-миостимулятор)</span><p>от <span class="price">4100</span> руб.</p></div></li>
						<li><img src="photos/d74d7c30f76ca3dc8493a83104fd72b9.jpeg" alt="эпилятор philips hp 6576 Аппликатор Ляпко Одинарный 5,8" title="эпилятор philips hp 6576 Аппликатор Ляпко Одинарный 5,8"><div class="box" page="applikator-lyapko-odinarnyy-780r"><span class="title">эпилятор philips hp 6576 Аппликатор Ляпко Одинарный 5,8</span><p>от <span class="price">780</span> руб.</p></div></li>
						<li><img src="photos/b840670e7655c80242a9697a1d40b297.jpeg" alt="весы электронные настольные Аппликатор Ляпко Спутник 5,8" title="весы электронные настольные Аппликатор Ляпко Спутник 5,8"><div class="box" page="applikator-lyapko-sputnik-330r"><span class="title">весы электронные настольные Аппликатор Ляпко Спутник 5,8</span><p>от <span class="price">330</span> руб.</p></div></li>
						<li class="large"><img src="photos/e3a813514433641f393edfdb0982bd86.jpeg" alt="электронное зеркало Массажер для тела Beurer MG80" title="электронное зеркало Массажер для тела Beurer MG80"><div class="box" page="massazher-dlya-tela-beurer-mg-2550r"><span class="title">электронное зеркало Массажер для тела Beurer MG80</span><p>от <span class="price">2550</span> руб.</p></div></li>
						<li class="large"><img src="photos/75cde016b01871ff8d9976da31b77fd1.jpeg" alt="зеркало задней двери Массажер ZENET TL-MHT-C" title="зеркало задней двери Массажер ZENET TL-MHT-C"><div class="box" page="massazher-zenet-tlmhtc-2050r"><span class="title">зеркало задней двери Массажер ZENET TL-MHT-C</span><p>от <span class="price">2050</span> руб.</p></div></li>
						<li class="large"><img src="photos/e30becce6238c35820065daabf81bee7.jpeg" alt="вакуумный массаж купить Массажная подушка US-Medica Apple SMP-19" title="вакуумный массаж купить Массажная подушка US-Medica Apple SMP-19"><div class="box" page="massazhnaya-podushka-usmedica-apple-smp-4500r"><span class="title">вакуумный массаж купить Массажная подушка US-Medica Apple SMP-19</span><p>от <span class="price">4500</span> руб.</p></div></li>
						<li><img src="photos/0cb3f14d82c590ca1830a52fdee51586.jpeg" alt="подглядывание в солярии BAMPITS 057A Заколка для придания объема" title="подглядывание в солярии BAMPITS 057A Заколка для придания объема"><div class="box" page="bampits-a-zakolka-dlya-pridaniya-obema-400r"><span class="title">подглядывание в солярии BAMPITS 057A Заколка для придания объема</span><p>от <span class="price">400</span> руб.</p></div></li>
						<li><img src="photos/51e9a6eaf948832c451cdbbf4a286b50.jpeg" alt="бумажные полотенца в рулонах Воск для депиляции Rica, азуленовый в картридже 100 мл" title="бумажные полотенца в рулонах Воск для депиляции Rica, азуленовый в картридже 100 мл"><div class="box" page="vosk-dlya-depilyacii-rica-azulenovyy-v-kartridzhe-ml-150r"><span class="title">бумажные полотенца в рулонах Воск для депиляции Rica, азуленовый в картридже 100 мл</span><p>от <span class="price">150</span> руб.</p></div></li>
						<li><img src="photos/bddc6e6efaf0b03c628143bf9a4ec50d.jpeg" alt="толкование снов зеркало Фен Vitesse VS-943 зеленый" title="толкование снов зеркало Фен Vitesse VS-943 зеленый"><div class="box" page="fen-vitesse-vs-zelenyy-640r"><span class="title">толкование снов зеркало Фен Vitesse VS-943 зеленый</span><p>от <span class="price">640</span> руб.</p></div></li>
						<li><img src="photos/65ef91f9e39ae9c8e58e13820442b2ca.jpeg" alt="комоды с зеркалом фото Насадка для детской зубной щетки BRAUN EB10-2" title="комоды с зеркалом фото Насадка для детской зубной щетки BRAUN EB10-2"><div class="box" page="nasadka-dlya-detskoy-zubnoy-schetki-braun-eb-550r"><span class="title">комоды с зеркалом фото Насадка для детской зубной щетки BRAUN EB10-2</span><p>от <span class="price">550</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("pribor-sanitas-suv-kontrol-zagara-980r.php", 0, -4); if (file_exists("comments/pribor-sanitas-suv-kontrol-zagara-980r.php")) require_once "comments/pribor-sanitas-suv-kontrol-zagara-980r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="pribor-sanitas-suv-kontrol-zagara-980r.php" method="post" onsubmit="return checkForm(this)">
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