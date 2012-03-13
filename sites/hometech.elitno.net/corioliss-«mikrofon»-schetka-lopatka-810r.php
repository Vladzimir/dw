<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("corioliss-«mikrofon»-schetka-lopatka-810r.php","зеркала на ваз 2112");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("corioliss-«mikrofon»-schetka-lopatka-810r.php", $nick, $comment);
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
		<title>зеркала на ваз 2112 Corioliss «Микрофон» Щетка (лопатка)  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="зеркала на ваз 2112, гадание на зеркале отзывы, бразильское выпрямление волос отзывы, триммер бритва, камера в зеркале, боковое зеркало на тойоту, зеркала в ростове, экзотический массаж, весы маленькие электронные, мягкий массаж, весы электронные acs, монолог зеркала, машинка для стрижки волос москва, тайский массаж фото,  подогрев зеркала схема">
		<meta name="description" content="зеркала на ваз 2112 Щетка (лопатка) «Микрофон» от известной английской торговой марки Corioliss обла...">
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
						<a class="photo" href="photos/86ec0141c0d9addb97d28879c40d13c8.jpeg" title="зеркала на ваз 2112 Corioliss «Микрофон» Щетка (лопатка)"><img src="photos/86ec0141c0d9addb97d28879c40d13c8.jpeg" alt="зеркала на ваз 2112 Corioliss «Микрофон» Щетка (лопатка)" title="зеркала на ваз 2112 Corioliss «Микрофон» Щетка (лопатка) -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-bytovye-tanita-hs-2300r.php"><img src="photos/e1b0e790950b801f1a1ef7304886b7ad.jpeg" alt="гадание на зеркале отзывы Весы бытовые Tanita HS-302" title="гадание на зеркале отзывы Весы бытовые Tanita HS-302"></a><h2>Весы бытовые Tanita HS-302</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-s-analizatorom-zhira-tanita-bc-2550r.php"><img src="photos/bc34e86f6dd75e28bd33d7c27b3a7f2b.jpeg" alt="бразильское выпрямление волос отзывы Весы электронные напольные с анализатором жира Tanita BC-531" title="бразильское выпрямление волос отзывы Весы электронные напольные с анализатором жира Tanita BC-531"></a><h2>Весы электронные напольные с анализатором жира Tanita BC-531</h2></li>
							<li><a href="http://hometech.elitno.net/vypryamitel-valera-exilim-2440r.php"><img src="photos/3e27500e40cc62cf895edc096d8d53b4.jpeg" alt="триммер бритва Выпрямитель Valera Exilim 649.01" title="триммер бритва Выпрямитель Valera Exilim 649.01"></a><h2>Выпрямитель Valera Exilim 649.01</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>зеркала на ваз 2112 Corioliss «Микрофон» Щетка (лопатка)</h1>
						<div class="tb"><p>Цена: от <span class="price">810</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_14418.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Щетка (лопатка) «Микрофон» от известной английской торговой марки Corioliss обладает стильным дизайном с изображением микрофона на тыльной стороне. Модель имеет превосходную форму для удобного расчесывания и выпрямления волос любого типа. Она снабжена гибкими эластичными зубчиками и мягкой рифленой ручкой с резиновой основой, что придает максимальный комфорт в применении этого аксессуара. </p><p><b>Особенности и преимущества:</b></p><ul type=disc><li>Резиновая основа щетки не скользит в руке; <li>Гибкие эластичные зубчики.</li></ul><p><b>Производитель:</b> Corioliss.</p><p><b>Страна:</b> Англия.</p> зеркала на ваз 2112</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/df863701f3cd17b55cc8ae2e380269e1.jpeg" alt="камера в зеркале Выпрямитель для волос Braun ES3-C" title="камера в зеркале Выпрямитель для волос Braun ES3-C"><div class="box" page="vypryamitel-dlya-volos-braun-esc-3290r"><span class="title">камера в зеркале Выпрямитель для волос Braun ES3-C</span><p>от <span class="price">3290</span> руб.</p></div></li>
						<li><img src="photos/b6bb344823584f3fea6f0061dd2edab6.jpeg" alt="боковое зеркало на тойоту Насадка носовая для КАРАТ ДЕ-212 Дарсонваль" title="боковое зеркало на тойоту Насадка носовая для КАРАТ ДЕ-212 Дарсонваль"><div class="box" page="nasadka-nosovaya-dlya-karat-de-darsonval-300r"><span class="title">боковое зеркало на тойоту Насадка носовая для КАРАТ ДЕ-212 Дарсонваль</span><p>от <span class="price">300</span> руб.</p></div></li>
						<li><img src="photos/7ea653e31522aab2e52b2dbfda2e3cf7.jpeg" alt="зеркала в ростове Мультистайлер Babyliss 2021CE Infinitix" title="зеркала в ростове Мультистайлер Babyliss 2021CE Infinitix"><div class="box" page="multistayler-babyliss-ce-infinitix-1610r"><span class="title">зеркала в ростове Мультистайлер Babyliss 2021CE Infinitix</span><p>от <span class="price">1610</span> руб.</p></div></li>
						<li><img src="photos/2d366b96963f05922aa6b4a18209076a.jpeg" alt="экзотический массаж Пародонтологические насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)" title="экзотический массаж Пародонтологические насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)"><div class="box" page="parodontologicheskie-nasadki-dlya-irrigatora-waterpik-wpe-wpe-sht-350r"><span class="title">экзотический массаж Пародонтологические насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)</span><p>от <span class="price">350</span> руб.</p></div></li>
						<li class="large"><img src="photos/cf3d408ea107629e3420a5a0b210de54.jpeg" alt="весы маленькие электронные Валик полукруглый L31H7 USM-005" title="весы маленькие электронные Валик полукруглый L31H7 USM-005"><div class="box" page="valik-polukruglyy-lh-usm-1000r"><span class="title">весы маленькие электронные Валик полукруглый L31H7 USM-005</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li class="large"><img src="photos/582bcb29ca20130c2748b22d513bbded.jpeg" alt="мягкий массаж Пояс-миостимулятор двухканальный AbTronic X2 (без геля)" title="мягкий массаж Пояс-миостимулятор двухканальный AbTronic X2 (без геля)"><div class="box" page="poyasmiostimulyator-dvuhkanalnyy-abtronic-x-bez-gelya-1500r"><span class="title">мягкий массаж Пояс-миостимулятор двухканальный AbTronic X2 (без геля)</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li class="large"><img src="photos/4b5374ef2a42b13f32ae833077b5a012.jpeg" alt="весы электронные acs Вибромассажер HOUSE FIT НМ-3003" title="весы электронные acs Вибромассажер HOUSE FIT НМ-3003"><div class="box" page="vibromassazher-house-fit-nm-7700r"><span class="title">весы электронные acs Вибромассажер HOUSE FIT НМ-3003</span><p>от <span class="price">7700</span> руб.</p></div></li>
						<li><img src="photos/b6354d226c8e04e9b88a5ad24218f045.jpeg" alt="монолог зеркала Прибор для ухода за кожей Gezatone Bio Wave m920" title="монолог зеркала Прибор для ухода за кожей Gezatone Bio Wave m920"><div class="box" page="pribor-dlya-uhoda-za-kozhey-gezatone-bio-wave-m-1100r"><span class="title">монолог зеркала Прибор для ухода за кожей Gezatone Bio Wave m920</span><p>от <span class="price">1100</span> руб.</p></div></li>
						<li><img src="photos/7f1474a3d7588365d8b461261c49c7f9.jpeg" alt="машинка для стрижки волос москва Фен Binatone HD-1802 Purple Nacre" title="машинка для стрижки волос москва Фен Binatone HD-1802 Purple Nacre"><div class="box" page="fen-binatone-hd-purple-nacre-1100r"><span class="title">машинка для стрижки волос москва Фен Binatone HD-1802 Purple Nacre</span><p>от <span class="price">1100</span> руб.</p></div></li>
						<li><img src="photos/c34916d8556e9636259427d5254b715e.jpeg" alt="тайский массаж фото Фен Braun HD770" title="тайский массаж фото Фен Braun HD770"><div class="box" page="fen-braun-hd-2750r"><span class="title">тайский массаж фото Фен Braun HD770</span><p>от <span class="price">2750</span> руб.</p></div></li>
						<li><img src="photos/af8481ceec103dd0cc1ed7ecb1e56b05.jpeg" alt="массаж октябрьская Чистящая насадка Philips HX6011 - 02 для Sonicare Flex Care, 1шт." title="массаж октябрьская Чистящая насадка Philips HX6011 - 02 для Sonicare Flex Care, 1шт."><div class="box" page="chistyaschaya-nasadka-philips-hx-dlya-sonicare-flex-care-sht-400r"><span class="title">массаж октябрьская Чистящая насадка Philips HX6011 - 02 для Sonicare Flex Care, 1шт.</span><p>от <span class="price">400</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("corioliss-«mikrofon»-schetka-lopatka-810r.php", 0, -4); if (file_exists("comments/corioliss-«mikrofon»-schetka-lopatka-810r.php")) require_once "comments/corioliss-«mikrofon»-schetka-lopatka-810r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="corioliss-«mikrofon»-schetka-lopatka-810r.php" method="post" onsubmit="return checkForm(this)">
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