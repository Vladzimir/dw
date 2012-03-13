<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("massazher-dlya-tela-beurer-mg-2550r.php","ожог в солярии");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("massazher-dlya-tela-beurer-mg-2550r.php", $nick, $comment);
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
		<title>ожог в солярии Массажер для тела Beurer MG80  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="ожог в солярии, приготовление фена, солярий челябинск, медовый массаж отзывы, модели фенов, утреннее солнце массаж, ирина красикова массаж, круглосуточный солярий, польза массажа, массаж саратов, каталог зеркал, 1000 зеркал, резка стекла и зеркал, укрепляющий массаж,  черное зеркало 2 ключ">
		<meta name="description" content="ожог в солярии Быстро расслабить мышцы, снять усталость, прогреть ткани поможет массажер для те...">
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
						<a class="photo" href="photos/e3a813514433641f393edfdb0982bd86.jpeg" title="ожог в солярии Массажер для тела Beurer MG80"><img src="photos/e3a813514433641f393edfdb0982bd86.jpeg" alt="ожог в солярии Массажер для тела Beurer MG80" title="ожог в солярии Массажер для тела Beurer MG80 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-beurer-gs-1500r-2.php"><img src="photos/c9643809c4b783e33f32febe779b2b8d.jpeg" alt="приготовление фена Весы электронные напольные Beurer GS19" title="приготовление фена Весы электронные напольные Beurer GS19"></a><h2>Весы электронные напольные Beurer GS19</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-bytovye-tanita-hd-1000r.php"><img src="photos/f6d7768111f2b2d1a629e5ad58787f64.jpeg" alt="солярий челябинск Весы бытовые Tanita HD-386" title="солярий челябинск Весы бытовые Tanita HD-386"></a><h2>Весы бытовые Tanita HD-386</h2></li>
							<li><a href="http://hometech.elitno.net/vypryamitel-valera-xstyle-3470r.php"><img src="photos/62f22bbdc8f17106e4896866b5a83f55.jpeg" alt="медовый массаж отзывы Выпрямитель Valera X-Style 645.01" title="медовый массаж отзывы Выпрямитель Valera X-Style 645.01"></a><h2>Выпрямитель Valera X-Style 645.01</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>ожог в солярии Массажер для тела Beurer MG80</h1>
						<div class="tb"><p>Цена: от <span class="price">2550</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_546.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Быстро расслабить мышцы, снять усталость, прогреть ткани поможет <strong>массажер для тела Beurer MG80. </strong>В этой модели немецкой компании Beurer используется метод ударного массажа, известный как наиболее эффективно снимающий напряжение. На массажной головке прибора имеется петля, с помощью нее удобно проводить массаж похлопывающими движениями. Съемная ручка также предусмотрена для создания удобства в эксплуатации.</p><p>Лампа инфракрасного излучения, входящая в устройство <strong>Beurer MG80</strong>, усиливает действие любой процедуру, оказывая терапевтический эффект. Волны инфракрасного цвета глубоко прогревают ткани, мышцы, кости, усиливают кровообращение.</p><p><strong>Особенности:</strong> </p><ul type=\disc\><li>Инфракрасный прогрев </li><li>Мощный ударный массаж </li><li>2 режима: массаж и массаж с подогревом </li><li>Массаж улучшает общее самочувствие, помогает при мышечных болях, растяжениях, снимает усталость, улучшает кровообращение </li><li>Непрерывная работа: не более 15 минут</li></ul><p><b>Технические характеристики:</b></p><ul type=\disc\><li>Мощность: 35 Вт </li><li>Количество насадок: 2 </li></ul><p><strong>В комплект входит: </strong>основное устройство, 2 насадки, инструкция.</p><p><strong>Производитель:</strong> Beurer (Германия)</p><p><strong>Гарантия: </strong>2 года</p> ожог в солярии</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/9a620fdb399918000af975e9d69559f4.jpeg" alt="модели фенов Электрощипцы для выпрямления волос Atlanta АТН-838" title="модели фенов Электрощипцы для выпрямления волос Atlanta АТН-838"><div class="box" page="elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-600r"><span class="title">модели фенов Электрощипцы для выпрямления волос Atlanta АТН-838</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li><img src="photos/3b1d3a2501150f3525f392072fa66671.jpeg" alt="утреннее солнце массаж Насадка Расческа для КАРАТ ДЕ-212 Дарсонваль" title="утреннее солнце массаж Насадка Расческа для КАРАТ ДЕ-212 Дарсонваль"><div class="box" page="nasadka-rascheska-dlya-karat-de-darsonval-300r"><span class="title">утреннее солнце массаж Насадка Расческа для КАРАТ ДЕ-212 Дарсонваль</span><p>от <span class="price">300</span> руб.</p></div></li>
						<li><img src="photos/a47834e167f88700a1ff6ede56cda638.jpeg" alt="ирина красикова массаж Щипцы для завивки Babyliss 2362CE i-Pro 200 25 мм" title="ирина красикова массаж Щипцы для завивки Babyliss 2362CE i-Pro 200 25 мм"><div class="box" page="schipcy-dlya-zavivki-babyliss-ce-ipro-mm-1750r"><span class="title">ирина красикова массаж Щипцы для завивки Babyliss 2362CE i-Pro 200 25 мм</span><p>от <span class="price">1750</span> руб.</p></div></li>
						<li><img src="photos/a773900794ca3cfff643e6a1344e2568.jpeg" alt="круглосуточный солярий Раскладной массажный стол US Medica Samurai линейка Sumo Line" title="круглосуточный солярий Раскладной массажный стол US Medica Samurai линейка Sumo Line"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-samurai-lineyka-sumo-line-10900r"><span class="title">круглосуточный солярий Раскладной массажный стол US Medica Samurai линейка Sumo Line</span><p>от <span class="price">10900</span> руб.</p></div></li>
						<li class="large"><img src="photos/24a1f98b96076ea10a4940039bfafbfb.jpeg" alt="польза массажа Аппликатор Стелька-скороход, размер 37-40" title="польза массажа Аппликатор Стелька-скороход, размер 37-40"><div class="box" page="applikator-stelkaskorohod-razmer-1350r"><span class="title">польза массажа Аппликатор Стелька-скороход, размер 37-40</span><p>от <span class="price">1350</span> руб.</p></div></li>
						<li class="large"><img src="photos/04903c082d5df734adcc169f980fc2f0.jpeg" alt="массаж саратов Прибор для лечения болей в спине Backlife" title="массаж саратов Прибор для лечения болей в спине Backlife"><div class="box" page="pribor-dlya-lecheniya-boley-v-spine-backlife-9000r"><span class="title">массаж саратов Прибор для лечения болей в спине Backlife</span><p>от <span class="price">9000</span> руб.</p></div></li>
						<li class="large"><img src="photos/2bafeeb3a10bb6c208d12092d2b70718.jpeg" alt="каталог зеркал Массажер ZENET TL-MHT-A" title="каталог зеркал Массажер ZENET TL-MHT-A"><div class="box" page="massazher-zenet-tlmhta-1850r"><span class="title">каталог зеркал Массажер ZENET TL-MHT-A</span><p>от <span class="price">1850</span> руб.</p></div></li>
						<li><img src="photos/0892325aa704adac2474d537e6a6f60b.jpeg" alt="1000 зеркал Массажер ZENET TL-2006B-A" title="1000 зеркал Массажер ZENET TL-2006B-A"><div class="box" page="massazher-zenet-tlba-1350r"><span class="title">1000 зеркал Массажер ZENET TL-2006B-A</span><p>от <span class="price">1350</span> руб.</p></div></li>
						<li><img src="photos/32653bc15e232e434b4131f9b427cfdf.jpeg" alt="резка стекла и зеркал Массажер для профилактики варикоза Aviafit" title="резка стекла и зеркал Массажер для профилактики варикоза Aviafit"><div class="box" page="massazher-dlya-profilaktiki-varikoza-aviafit-2000r"><span class="title">резка стекла и зеркал Массажер для профилактики варикоза Aviafit</span><p>от <span class="price">2000</span> руб.</p></div></li>
						<li><img src="photos/4f91a9a11655bfb69a31e66d275bcd6b.jpeg" alt="укрепляющий массаж Заколки для придания объема Бампит (Bumpits) 057A (черная)" title="укрепляющий массаж Заколки для придания объема Бампит (Bumpits) 057A (черная)"><div class="box" page="zakolki-dlya-pridaniya-obema-bampit-bumpits-a-chernaya-400r"><span class="title">укрепляющий массаж Заколки для придания объема Бампит (Bumpits) 057A (черная)</span><p>от <span class="price">400</span> руб.</p></div></li>
						<li><img src="photos/ce51f4efb2afc504cf5b3a55b1bc269e.jpeg" alt="массаж скрытая смотреть Триммер BaByliss E830XE" title="массаж скрытая смотреть Триммер BaByliss E830XE"><div class="box" page="trimmer-babyliss-exe-1790r"><span class="title">массаж скрытая смотреть Триммер BaByliss E830XE</span><p>от <span class="price">1790</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("massazher-dlya-tela-beurer-mg-2550r.php", 0, -4); if (file_exists("comments/massazher-dlya-tela-beurer-mg-2550r.php")) require_once "comments/massazher-dlya-tela-beurer-mg-2550r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="massazher-dlya-tela-beurer-mg-2550r.php" method="post" onsubmit="return checkForm(this)">
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