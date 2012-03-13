<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("fen-vitesse-vs-640r-2.php","тайский массаж для двоих");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("fen-vitesse-vs-640r-2.php", $nick, $comment);
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
		<title>тайский массаж для двоих Фен Vitesse VS-944  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="тайский массаж для двоих, триммер champion, весы напольные электронные tefal, стихи на фене, предлагаю массаж, солярий киров, фокин массаж, солярии в санкт петербурге, массаж нижних конечностей, зеркала в доме, куплю триммер в москве, электробритва харьков, сетчатая электробритва, производство фена,  ремонт боковых зеркал">
		<meta name="description" content="тайский массаж для двоих Vitesse VS-944 – это компактный фен, который вы можете не  только использовать в...">
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
						<a class="photo" href="photos/903db6a8dda8fc3e969d37c0855d0ace.jpeg" title="тайский массаж для двоих Фен Vitesse VS-944"><img src="photos/903db6a8dda8fc3e969d37c0855d0ace.jpeg" alt="тайский массаж для двоих Фен Vitesse VS-944" title="тайский массаж для двоих Фен Vitesse VS-944 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/professionalnye-elektronnye-vesy-tanita-wbpma-35000r.php"><img src="photos/d7ec75485f093187b978e38d5d2724a5.jpeg" alt="триммер champion Профессиональные электронные весы Tanita WB-100PMA" title="триммер champion Профессиональные электронные весы Tanita WB-100PMA"></a><h2>Профессиональные электронные весы Tanita WB-100PMA</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-diagnosticheskie-beurer-bg-pulsometr-pm-nabor-5800r.php"><img src="photos/815eaf02afaf5f0cbb85aab78f5cd950.jpeg" alt="весы напольные электронные tefal Весы электронные диагностические Beurer BG42 + пульсометр PM60 (набор)" title="весы напольные электронные tefal Весы электронные диагностические Beurer BG42 + пульсометр PM60 (набор)"></a><h2>Весы электронные диагностические Beurer BG42 + пульсометр PM60 (набор)</h2></li>
							<li><a href="http://hometech.elitno.net/schipcy-dlya-vypryamleniya-volos-vitesse-vs-850r.php"><img src="photos/c13cfae2d70d4aeb7439f115424821b8.jpeg" alt="стихи на фене Щипцы для выпрямления волос Vitesse VS-906" title="стихи на фене Щипцы для выпрямления волос Vitesse VS-906"></a><h2>Щипцы для выпрямления волос Vitesse VS-906</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>тайский массаж для двоих Фен Vitesse VS-944</h1>
						<div class="tb"><p>Цена: от <span class="price">640</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_21093.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Vitesse VS-944 – это компактный фен, который вы можете не  только использовать в домашних условиях, но и носить в сумочке в любое время.  Фен Vitesse VS-944 обладает функцией подачи холодного воздуха и 2 режимами  интенсивности воздушного потока, что обеспечивает не только быструю, но и  комфортную сушку волос. Кроме того, данная модель включает в себя функцию  защиты от перегрева, которая препятствует повреждению волос горячим воздухом. Кстати,  всех ценительниц прекрасного порадует и стильный дизайн этой модели фена. Также  в комплекте с феном Vitesse VS-943 идет концентратор и насадки.</p><p><strong>Характеристики:</strong></p><ul type=\disc\><li>Тип: компактный фен;</li><li>Мощность: 1350 Вт;</li><li>Складная ручка</li><li>Количество режимов: 2;</li><li>Дополнительные режимы: подача холодного воздуха;</li><li>Особенности: конструкция «петля» для подвешивания, защита от подогрева;</li><li>В комплекте: концентратор, насадки;</li></ul><p><strong>Производитель:  Франция</strong></p> тайский массаж для двоих</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/ebe73366b541ce25ab906d91486c2572.jpeg" alt="предлагаю массаж Щипцы для завивки Babyliss 2361CE i-Pro 200 19 мм" title="предлагаю массаж Щипцы для завивки Babyliss 2361CE i-Pro 200 19 мм"><div class="box" page="schipcy-dlya-zavivki-babyliss-ce-ipro-mm-1430r"><span class="title">предлагаю массаж Щипцы для завивки Babyliss 2361CE i-Pro 200 19 мм</span><p>от <span class="price">1430</span> руб.</p></div></li>
						<li><img src="photos/9a2bc44bf6a5d738109f051af1b10196.jpeg" alt="солярий киров Набор назальных насадок к ирригатору (2 шт) DONFEEL OR-820M" title="солярий киров Набор назальных насадок к ирригатору (2 шт) DONFEEL OR-820M"><div class="box" page="nabor-nazalnyh-nasadok-k-irrigatoru-sht-donfeel-orm-270r"><span class="title">солярий киров Набор назальных насадок к ирригатору (2 шт) DONFEEL OR-820M</span><p>от <span class="price">270</span> руб.</p></div></li>
						<li><img src="photos/db50f056381f7d55d9462e3f852c618b.jpeg" alt="фокин массаж Стационарный массажный стол US Medica Profi" title="фокин массаж Стационарный массажный стол US Medica Profi"><div class="box" page="stacionarnyy-massazhnyy-stol-us-medica-profi-85000r"><span class="title">фокин массаж Стационарный массажный стол US Medica Profi</span><p>от <span class="price">85000</span> руб.</p></div></li>
						<li><img src="photos/181222b228e95669567af2b965a2d19f.jpeg" alt="солярии в санкт петербурге Гидромассажная ванночка для ног Sanitas SFB09" title="солярии в санкт петербурге Гидромассажная ванночка для ног Sanitas SFB09"><div class="box" page="gidromassazhnaya-vannochka-dlya-nog-sanitas-sfb-1700r"><span class="title">солярии в санкт петербурге Гидромассажная ванночка для ног Sanitas SFB09</span><p>от <span class="price">1700</span> руб.</p></div></li>
						<li class="large"><img src="photos/a3331b51ae07cba95c43ef802a9f621a.jpeg" alt="массаж нижних конечностей Массажер для ног BODYKRAFT FM-61" title="массаж нижних конечностей Массажер для ног BODYKRAFT FM-61"><div class="box" page="massazher-dlya-nog-bodykraft-fm-12990r"><span class="title">массаж нижних конечностей Массажер для ног BODYKRAFT FM-61</span><p>от <span class="price">12990</span> руб.</p></div></li>
						<li class="large"><img src="photos/ce5c28be2477a14562f122d5df10bc7e.jpeg" alt="зеркала в доме Массажер для глаз Gezatone Breeze" title="зеркала в доме Массажер для глаз Gezatone Breeze"><div class="box" page="massazher-dlya-glaz-gezatone-breeze-2000r"><span class="title">зеркала в доме Массажер для глаз Gezatone Breeze</span><p>от <span class="price">2000</span> руб.</p></div></li>
						<li class="large"><img src="photos/5d92120d3065dfcf7d5f91af9dd4ca58.jpeg" alt="куплю триммер в москве Массажная накидка ZENET TL-2007-Z" title="куплю триммер в москве Массажная накидка ZENET TL-2007-Z"><div class="box" page="massazhnaya-nakidka-zenet-tlz-4950r"><span class="title">куплю триммер в москве Массажная накидка ZENET TL-2007-Z</span><p>от <span class="price">4950</span> руб.</p></div></li>
						<li><img src="photos/3e07c9c76543509eb7330cd46f97b553.jpeg" alt="электробритва харьков Машинка для стрижки волос Valera Absolut 648.01" title="электробритва харьков Машинка для стрижки волос Valera Absolut 648.01"><div class="box" page="mashinka-dlya-strizhki-volos-valera-absolut-3480r"><span class="title">электробритва харьков Машинка для стрижки волос Valera Absolut 648.01</span><p>от <span class="price">3480</span> руб.</p></div></li>
						<li><img src="photos/73724a05bae5cd52f1287e49c524aba2.jpeg" alt="сетчатая электробритва Фен Atlanta АТН-865" title="сетчатая электробритва Фен Atlanta АТН-865"><div class="box" page="fen-atlanta-atn-720r-2"><span class="title">сетчатая электробритва Фен Atlanta АТН-865</span><p>от <span class="price">720</span> руб.</p></div></li>
						<li><img src="photos/d7811a5163aa6ac7d6a4a878e9e13025.jpeg" alt="производство фена Ультразвуковая зубная щетка DONFEEL HSD-005" title="производство фена Ультразвуковая зубная щетка DONFEEL HSD-005"><div class="box" page="ultrazvukovaya-zubnaya-schetka-donfeel-hsd-2750r"><span class="title">производство фена Ультразвуковая зубная щетка DONFEEL HSD-005</span><p>от <span class="price">2750</span> руб.</p></div></li>
						<li><img src="photos/00eef40be8bfe9afe3f74b07e48a72b6.jpeg" alt="зеркало на шевроле лачетти Vitek VT–1374 Электробритва" title="зеркало на шевроле лачетти Vitek VT–1374 Электробритва"><div class="box" page="vitek-vt–-elektrobritva-1390r"><span class="title">зеркало на шевроле лачетти Vitek VT–1374 Электробритва</span><p>от <span class="price">1390</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("fen-vitesse-vs-640r-2.php", 0, -4); if (file_exists("comments/fen-vitesse-vs-640r-2.php")) require_once "comments/fen-vitesse-vs-640r-2.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="fen-vitesse-vs-640r-2.php" method="post" onsubmit="return checkForm(this)">
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