<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("vesy-elektronnye-napolnye-beurer-ps-1200r.php","профилактический массаж");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("vesy-elektronnye-napolnye-beurer-ps-1200r.php", $nick, $comment);
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
		<title>профилактический массаж Весы электронные напольные Beurer PS07  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="профилактический массаж, ортопедический массаж, весы напольные электронные tefal, стрижки мужские короткие машинкой, васичкин массаж, шкафчик для ванной с зеркалом, укладка волос на бигуди, зеркало файла, эпилятор philips hp 6576, солярии в красноярске, антирадар зеркало, косметика для солярия интернет магазин, машинка для стрижки andis, установка боковых зеркал,  отзывы тайский массаж">
		<meta name="description" content="профилактический массаж Электронные весы Beurer PS07 проведут точные измерения. Прочная конструкция приб...">
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
						<a class="photo" href="photos/6677faa1557bb6eca3763a59861f5c6a.jpeg" title="профилактический массаж Весы электронные напольные Beurer PS07"><img src="photos/6677faa1557bb6eca3763a59861f5c6a.jpeg" alt="профилактический массаж Весы электронные напольные Beurer PS07" title="профилактический массаж Весы электронные напольные Beurer PS07 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-s-analizatorom-sostava-tela-tanita-bc-5700r.php"><img src="photos/42653702252a344ba19e9b832e6ee831.jpeg" alt="ортопедический массаж Весы электронные напольные с анализатором состава тела Tanita BC-582" title="ортопедический массаж Весы электронные напольные с анализатором состава тела Tanita BC-582"></a><h2>Весы электронные напольные с анализатором состава тела Tanita BC-582</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-diagnosticheskie-beurer-bg-pulsometr-pm-nabor-5800r.php"><img src="photos/815eaf02afaf5f0cbb85aab78f5cd950.jpeg" alt="весы напольные электронные tefal Весы электронные диагностические Beurer BG42 + пульсометр PM60 (набор)" title="весы напольные электронные tefal Весы электронные диагностические Beurer BG42 + пульсометр PM60 (набор)"></a><h2>Весы электронные диагностические Beurer BG42 + пульсометр PM60 (набор)</h2></li>
							<li><a href="http://hometech.elitno.net/vypryamitel-valera-ionic-ceramic-nanosilver-2480r.php"><img src="photos/480350ac2c02c08c2c9a122491ae6bbf.jpeg" alt="стрижки мужские короткие машинкой Выпрямитель Valera Ionic Ceramic Nanosilver 639.01" title="стрижки мужские короткие машинкой Выпрямитель Valera Ionic Ceramic Nanosilver 639.01"></a><h2>Выпрямитель Valera Ionic Ceramic Nanosilver 639.01</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>профилактический массаж Весы электронные напольные Beurer PS07</h1>
						<div class="tb"><p>Цена: от <span class="price">1200</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_162.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><strong>Электронные весы Beurer PS07</strong> проведут точные измерения. Прочная конструкция прибора обеспечивает возможность взвешивания человека массой вплоть до 150 кг. Модель весов <strong>Beurer PS07 </strong>может проводить измерения как в граммах, так и в фунтах, и в унциях. Современный дизайн и цвет металлик впишутся в любой комнатный интерьер.</p><p><strong>Особенности: </strong></p><ul type=disc><li>Тип: электронные <li>Материал платформы: пластик <li>Активация весов при вставании <li>Прочная конструкция <li>Легкость считывания измерений <li>Точность и надежность <li>Оригинальный современный дизайн <li>Нескользящая поверхность <li>Автоматическое отключение</li></ul><p><b>Технические характеристики:</b></p><ul type=disc><li>Диапазон взвешивания: 2 – 150 кг <li>Единицы измерения: кг/фунты/унции <li>Размер дисплея: 30 мм <li>Точность измерения веса: ±0,1 кг <li>Размер: 320 x 310 мм <li>Цвета: серебристый </li></ul><p><strong>В комплект входит:</strong> прибор, батарейки, инструкция.</p><p><strong>Производитель:</strong> Beurer (Германия)</p><p><strong>Гарантия:</strong> 3 года</p> профилактический массаж</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/74f70e120db119bda19c14b1cbcdb902.jpeg" alt="васичкин массаж Зеркало настольное Rosenberg S-2085" title="васичкин массаж Зеркало настольное Rosenberg S-2085"><div class="box" page="zerkalo-nastolnoe-rosenberg-s-890r-2"><span class="title">васичкин массаж Зеркало настольное Rosenberg S-2085</span><p>от <span class="price">890</span> руб.</p></div></li>
						<li><img src="photos/547f3143a4cadabab99b7c9561803f70.jpeg" alt="шкафчик для ванной с зеркалом Dental Resources. 1,1 % нейтральная фтористая зубная паста. Neutral RX." title="шкафчик для ванной с зеркалом Dental Resources. 1,1 % нейтральная фтористая зубная паста. Neutral RX."><div class="box" page="dental-resources-neytralnaya-ftoristaya-zubnaya-pasta-neutral-rx-540r"><span class="title">шкафчик для ванной с зеркалом Dental Resources. 1,1 % нейтральная фтористая зубная паста. Neutral RX.</span><p>от <span class="price">540</span> руб.</p></div></li>
						<li><img src="photos/3ccd3a7a537feb526e26b8db85765ae5.jpeg" alt="укладка волос на бигуди Маникюрный набор Sanitas SMA-70" title="укладка волос на бигуди Маникюрный набор Sanitas SMA-70"><div class="box" page="manikyurnyy-nabor-sanitas-sma-2500r"><span class="title">укладка волос на бигуди Маникюрный набор Sanitas SMA-70</span><p>от <span class="price">2500</span> руб.</p></div></li>
						<li><img src="photos/31d1296e38d1ca863ab760e3b8349da7.jpeg" alt="зеркало файла Раскладной массажный стол US Medica Tokyo линейка Sumo Line" title="зеркало файла Раскладной массажный стол US Medica Tokyo линейка Sumo Line"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-tokyo-lineyka-sumo-line-27900r"><span class="title">зеркало файла Раскладной массажный стол US Medica Tokyo линейка Sumo Line</span><p>от <span class="price">27900</span> руб.</p></div></li>
						<li class="large"><img src="photos/d74d7c30f76ca3dc8493a83104fd72b9.jpeg" alt="эпилятор philips hp 6576 Аппликатор Ляпко Одинарный 5,8" title="эпилятор philips hp 6576 Аппликатор Ляпко Одинарный 5,8"><div class="box" page="applikator-lyapko-odinarnyy-780r"><span class="title">эпилятор philips hp 6576 Аппликатор Ляпко Одинарный 5,8</span><p>от <span class="price">780</span> руб.</p></div></li>
						<li class="large"><img src="photos/d6a81b5695856acbb870fca5e56fa343.jpeg" alt="солярии в красноярске Аппликатор Ляпко Пояс Малыш 5,8" title="солярии в красноярске Аппликатор Ляпко Пояс Малыш 5,8"><div class="box" page="applikator-lyapko-poyas-malysh-920r"><span class="title">солярии в красноярске Аппликатор Ляпко Пояс Малыш 5,8</span><p>от <span class="price">920</span> руб.</p></div></li>
						<li class="large"><img src="photos/99c6930539a5dbb19e5a1ae959e6833b.jpeg" alt="антирадар зеркало Вакуумный массажер Celluless (Антицеллюлит)" title="антирадар зеркало Вакуумный массажер Celluless (Антицеллюлит)"><div class="box" page="vakuumnyy-massazher-celluless-anticellyulit-1600r"><span class="title">антирадар зеркало Вакуумный массажер Celluless (Антицеллюлит)</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li><img src="photos/bea75616ebe33c954c6ddf8f2c004348.jpeg" alt="косметика для солярия интернет магазин Массажер для тела Beurer MG158" title="косметика для солярия интернет магазин Массажер для тела Beurer MG158"><div class="box" page="massazher-dlya-tela-beurer-mg-1750r"><span class="title">косметика для солярия интернет магазин Массажер для тела Beurer MG158</span><p>от <span class="price">1750</span> руб.</p></div></li>
						<li><img src="photos/f791dc6b11479bf957d60c3bc019bbc7.jpeg" alt="машинка для стрижки andis Массажер для мытья и массажа головы Nozomi MH-105" title="машинка для стрижки andis Массажер для мытья и массажа головы Nozomi MH-105"><div class="box" page="massazher-dlya-mytya-i-massazha-golovy-nozomi-mh-4450r"><span class="title">машинка для стрижки andis Массажер для мытья и массажа головы Nozomi MH-105</span><p>от <span class="price">4450</span> руб.</p></div></li>
						<li><img src="photos/f7810eeae3245b2809b14907b94ee4e0.jpeg" alt="установка боковых зеркал Vitek VT–1361 Машинка для стрижки волос" title="установка боковых зеркал Vitek VT–1361 Машинка для стрижки волос"><div class="box" page="vitek-vt–-mashinka-dlya-strizhki-volos-1240r"><span class="title">установка боковых зеркал Vitek VT–1361 Машинка для стрижки волос</span><p>от <span class="price">1240</span> руб.</p></div></li>
						<li><img src="photos/c34916d8556e9636259427d5254b715e.jpeg" alt="тайский массаж фото Фен Braun HD770" title="тайский массаж фото Фен Braun HD770"><div class="box" page="fen-braun-hd-2750r"><span class="title">тайский массаж фото Фен Braun HD770</span><p>от <span class="price">2750</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("vesy-elektronnye-napolnye-beurer-ps-1200r.php", 0, -4); if (file_exists("comments/vesy-elektronnye-napolnye-beurer-ps-1200r.php")) require_once "comments/vesy-elektronnye-napolnye-beurer-ps-1200r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="vesy-elektronnye-napolnye-beurer-ps-1200r.php" method="post" onsubmit="return checkForm(this)">
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