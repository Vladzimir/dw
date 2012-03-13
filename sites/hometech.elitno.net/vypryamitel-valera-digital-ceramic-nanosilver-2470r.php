<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("vypryamitel-valera-digital-ceramic-nanosilver-2470r.php","масляный массаж");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("vypryamitel-valera-digital-ceramic-nanosilver-2470r.php", $nick, $comment);
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
		<title>масляный массаж Выпрямитель Valera Digital Ceramic Nanosilver 638.01  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="масляный массаж, массаж в петрозаводске, лосьон для для солярия, сколько в крови держится фен, зеркало corolla, зеркало заднего вида мерседес, косметика из индии, 1000 зеркал, институт массажа и косметологии, триммер для бороды philips, подарочный сертификат на массаж, массаж черкассы, сонник зеркало разбитое, крем для солярия отзывы,  бирюков массаж">
		<meta name="description" content="масляный массаж Выпрямитель Valera Digital Ceramic Nanosilver 638.01 представляет собой професси...">
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
						<a class="photo" href="photos/65295d452583f16a109ca092e4c4f41f.jpeg" title="масляный массаж Выпрямитель Valera Digital Ceramic Nanosilver 638.01"><img src="photos/65295d452583f16a109ca092e4c4f41f.jpeg" alt="масляный массаж Выпрямитель Valera Digital Ceramic Nanosilver 638.01" title="масляный массаж Выпрямитель Valera Digital Ceramic Nanosilver 638.01 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/analizator-zhirovoy-massy-sostava-tela-tanita-bc-5780r.php"><img src="photos/3f6dce72a9592eff2c7332cea93e75fb.jpeg" alt="массаж в петрозаводске Анализатор жировой массы (состава тела) Tanita BC-582" title="массаж в петрозаводске Анализатор жировой массы (состава тела) Tanita BC-582"></a><h2>Анализатор жировой массы (состава тела) Tanita BC-582</h2></li>
							<li><a href="http://hometech.elitno.net/vypryamitel-mateca-m-besprovodnoy-2400r.php"><img src="photos/54daa8c422694960a4b932dac99e46ae.jpeg" alt="лосьон для для солярия Выпрямитель Mateca M 769 беспроводной" title="лосьон для для солярия Выпрямитель Mateca M 769 беспроводной"></a><h2>Выпрямитель Mateca M 769 беспроводной</h2></li>
							<li><a href="http://hometech.elitno.net/massazhnoe-kreslo-anatomico-leonardo-107000r.php"><img src="photos/394000ec0f3455ebe103d8192764620a.jpeg" alt="сколько в крови держится фен Массажное кресло Anatomico Leonardo" title="сколько в крови держится фен Массажное кресло Anatomico Leonardo"></a><h2>Массажное кресло Anatomico Leonardo</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>масляный массаж Выпрямитель Valera Digital Ceramic Nanosilver 638.01</h1>
						<div class="tb"><p>Цена: от <span class="price">2470</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_7683.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Выпрямитель </b><b>Valera </b><b>Digital </b><b>Ceramic </b><b>Nanosilver 638.01</b> представляет собой профессиональные парикмахерские щипцы с керамическим покрытием и антибактериальным наносеребрением, которые служат для выпрямления волос. Насадка снабжена направляющими зубчиками. Модель имеет цифровой дисплей с возможностью электронной регулировки температуры, для удобства на корпусе расположен индикатор работы. Нагрев происходит спустя всего лишь 30 секунд с момента включения. Стильный и качественный прибор от известного производителя.</p><p><b>Характеристики:</b></p><p><b></b></p><ul type=disc><li>Тип: щипцы для выпрямления с зубчиками; <li>Цифровой дисплей; <li>Электронная регулировка температуры; <li>Индикация включения; <li>Сверхбыстрый нагрев: 30 сек; <li>Пластины с керамическим покрытием; <li>Технология антибактериального наносеребрения; <li>Длина сетевого шнура: 3 м. </li></ul><p><b>Производитель: </b>Valera.</p><p><b>Страна:</b> Швейцария. </p><p><b></b></p><p><b>Гарантия: </b>2 года.</p> масляный массаж</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/2af53540787e858b003d24b15fc92f87.jpeg" alt="зеркало corolla Массажёр Фараон" title="зеркало corolla Массажёр Фараон"><div class="box" page="massazher-faraon-260r"><span class="title">зеркало corolla Массажёр Фараон</span><p>от <span class="price">260</span> руб.</p></div></li>
						<li><img src="photos/4672e333a6bf6781c5b059e098066f46.jpeg" alt="зеркало заднего вида мерседес Аппликатор Кузнецова" title="зеркало заднего вида мерседес Аппликатор Кузнецова"><div class="box" page="applikator-kuznecova-200r"><span class="title">зеркало заднего вида мерседес Аппликатор Кузнецова</span><p>от <span class="price">200</span> руб.</p></div></li>
						<li><img src="photos/9465b0dca2e8fe2c49ae1e6021d20f1e.gif" alt="косметика из индии АЛ Волшебная  Лента Здоровье (7 сегментов)" title="косметика из индии АЛ Волшебная  Лента Здоровье (7 сегментов)"><div class="box" page="al-volshebnaya-lenta-zdorove-segmentov-5230r"><span class="title">косметика из индии АЛ Волшебная  Лента Здоровье (7 сегментов)</span><p>от <span class="price">5230</span> руб.</p></div></li>
						<li><img src="photos/0892325aa704adac2474d537e6a6f60b.jpeg" alt="1000 зеркал Массажер ZENET TL-2006B-A" title="1000 зеркал Массажер ZENET TL-2006B-A"><div class="box" page="massazher-zenet-tlba-1350r"><span class="title">1000 зеркал Массажер ZENET TL-2006B-A</span><p>от <span class="price">1350</span> руб.</p></div></li>
						<li class="large"><img src="photos/364f57c9bbd57d63831a2d87ac4fd285.jpeg" alt="институт массажа и косметологии Прибор для лифтинга в области глаз Gezatone m190" title="институт массажа и косметологии Прибор для лифтинга в области глаз Gezatone m190"><div class="box" page="pribor-dlya-liftinga-v-oblasti-glaz-gezatone-m-2000r"><span class="title">институт массажа и косметологии Прибор для лифтинга в области глаз Gezatone m190</span><p>от <span class="price">2000</span> руб.</p></div></li>
						<li class="large"><img src="photos/d623595f96e96179088db87929856903.jpeg" alt="триммер для бороды philips Машинка для стрижки Atlanta АТН-852" title="триммер для бороды philips Машинка для стрижки Atlanta АТН-852"><div class="box" page="mashinka-dlya-strizhki-atlanta-atn-400r-2"><span class="title">триммер для бороды philips Машинка для стрижки Atlanta АТН-852</span><p>от <span class="price">400</span> руб.</p></div></li>
						<li class="large"><img src="photos/53f8d91f5957e6c5723fee1b3f141a53.jpeg" alt="подарочный сертификат на массаж Лосьон после депиляции Rica Золотое Сияние 250мл" title="подарочный сертификат на массаж Лосьон после депиляции Rica Золотое Сияние 250мл"><div class="box" page="loson-posle-depilyacii-rica-zolotoe-siyanie-ml-780r"><span class="title">подарочный сертификат на массаж Лосьон после депиляции Rica Золотое Сияние 250мл</span><p>от <span class="price">780</span> руб.</p></div></li>
						<li><img src="photos/7dce7c4f266661e0b89628817a4f4d5e.jpeg" alt="массаж черкассы Фен Valera Swiss Nano 6000 Light" title="массаж черкассы Фен Valera Swiss Nano 6000 Light"><div class="box" page="fen-valera-swiss-nano-light-2490r"><span class="title">массаж черкассы Фен Valera Swiss Nano 6000 Light</span><p>от <span class="price">2490</span> руб.</p></div></li>
						<li><img src="photos/e69da6f2452895f2eb5bd226ad7e5f3c.jpeg" alt="сонник зеркало разбитое Фен Valera Swiss Turbo 7000RC Rotocord" title="сонник зеркало разбитое Фен Valera Swiss Turbo 7000RC Rotocord"><div class="box" page="fen-valera-swiss-turbo-rc-rotocord-2920r"><span class="title">сонник зеркало разбитое Фен Valera Swiss Turbo 7000RC Rotocord</span><p>от <span class="price">2920</span> руб.</p></div></li>
						<li><img src="photos/2fc7af019baa319a2dcc770556eb82e7.jpeg" alt="крем для солярия отзывы Фен Atlanta АТН-882N" title="крем для солярия отзывы Фен Atlanta АТН-882N"><div class="box" page="fen-atlanta-atnn-450r"><span class="title">крем для солярия отзывы Фен Atlanta АТН-882N</span><p>от <span class="price">450</span> руб.</p></div></li>
						<li><img src="photos/22e21c0bea0c32121f5c56fb4b451a62.jpeg" alt="двигатель для триммера Насадка для зубных щеток Omron Super-Fine Soft Bristle Head SB-080" title="двигатель для триммера Насадка для зубных щеток Omron Super-Fine Soft Bristle Head SB-080"><div class="box" page="nasadka-dlya-zubnyh-schetok-omron-superfine-soft-bristle-head-sb-300r"><span class="title">двигатель для триммера Насадка для зубных щеток Omron Super-Fine Soft Bristle Head SB-080</span><p>от <span class="price">300</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("vypryamitel-valera-digital-ceramic-nanosilver-2470r.php", 0, -4); if (file_exists("comments/vypryamitel-valera-digital-ceramic-nanosilver-2470r.php")) require_once "comments/vypryamitel-valera-digital-ceramic-nanosilver-2470r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="vypryamitel-valera-digital-ceramic-nanosilver-2470r.php" method="post" onsubmit="return checkForm(this)">
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