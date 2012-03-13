<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("loson-posle-depilyacii-rica-mentolovyy-ml-600r.php","васко ру интернет магазин");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("loson-posle-depilyacii-rica-mentolovyy-ml-600r.php", $nick, $comment);
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
		<title>васко ру интернет магазин Лосьон после депиляции Rica, ментоловый 250мл  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="васко ру интернет магазин, тонкое зеркало, зеркала torrent, зеркало войны, техника медового массажа, домашние эпиляторы отзывы, картридж для электробритвы, светильники для зеркал, зеркала на машину, солярии в санкт петербурге, массаж при пупочной грыже, камеди зеркало, домашние лазерные эпиляторы отзывы, массаж в астане,  фен makita">
		<meta name="description" content="васко ру интернет магазин Лосьон после депиляции с ментолом прекрасно успокаивает кожу и снимает раздражен...">
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
						<a class="photo" href="photos/c1e44ae0346cc39b27bb78d6ca139c3e.jpeg" title="васко ру интернет магазин Лосьон после депиляции Rica, ментоловый 250мл"><img src="photos/c1e44ae0346cc39b27bb78d6ca139c3e.jpeg" alt="васко ру интернет магазин Лосьон после депиляции Rica, ментоловый 250мл" title="васко ру интернет магазин Лосьон после депиляции Rica, ментоловый 250мл -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-s-analizatorom-zhira-tanita-um-1400r.php"><img src="photos/bc02e0075087def17d8a206ec6d6015c.jpeg" alt="тонкое зеркало Весы электронные напольные с анализатором жира Tanita UM-070" title="тонкое зеркало Весы электронные напольные с анализатором жира Tanita UM-070"></a><h2>Весы электронные напольные с анализатором жира Tanita UM-070</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-diagnosticheskie-beurer-bf-5900r.php"><img src="photos/680c415f1a8f04e6d0fb6380807493f2.jpeg" alt="зеркала torrent Весы электронные диагностические Beurer BF100" title="зеркала torrent Весы электронные диагностические Beurer BF100"></a><h2>Весы электронные диагностические Beurer BF100</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-napolnye-s-analizatorom-zhira-i-vody-gezatone-esga-1200r.php"><img src="photos/43a957bd80b6ff4e3954c5f31015c90c.jpeg" alt="зеркало войны Весы напольные с анализатором жира и воды Gezatone ESG2804А 1301501" title="зеркало войны Весы напольные с анализатором жира и воды Gezatone ESG2804А 1301501"></a><h2>Весы напольные с анализатором жира и воды Gezatone ESG2804А 1301501</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>васко ру интернет магазин Лосьон после депиляции Rica, ментоловый 250мл</h1>
						<div class="tb"><p>Цена: от <span class="price">600</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_14692.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Лосьон после депиляции с ментолом прекрасно успокаивает кожу и снимает раздражение, а также оказывает увлажняющее действие. Его можно использовать на всех участках кожи.</p><p>Препарат лучше наносить сразу после процедуры депиляции, когда протоки сальных желез еще расширены и внешняя часть волосяного фолликула доступна. Эфирные масла ценны тем, что в них содержится высокий процент терпенов, известных своим активным стягивающим составляющим из растительных экстрактов. Продукция итальянского производителя Rica отличается высоким качеством и доступной ценой и отвечает всем европейским и мировым стандартам.</p><p><b>Характеристики:</b></p><ul type=disc><li>В составе: ментол <li>Тип кожи: для любого типа кожи</li></ul><p><b>Производитель:</b> RICA S.p.a.</p><p><b>Страна:</b> Италия.</p> васко ру интернет магазин</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/ca3cac97732e962cf09778cd2b8d779d.jpeg" alt="техника медового массажа Гель для домашнего ухода. 0,4 % фторида олова. Home care." title="техника медового массажа Гель для домашнего ухода. 0,4 % фторида олова. Home care."><div class="box"><a href="http://hometech.elitno.net/gel-dlya-domashnego-uhoda-ftorida-olova-home-care-540r.php"><h3 class="title">техника медового массажа Гель для домашнего ухода. 0,4 % фторида олова. Home care.</h3><p>от <span class="price">540</span> руб.</p></a></div></li>
						<li><img src="photos/84dba165c6ff6432b2067b74a9b58205.jpeg" alt="домашние эпиляторы отзывы Набор стандартных насадок к ирригатору (2 шт) DONFEEL OR-820M" title="домашние эпиляторы отзывы Набор стандартных насадок к ирригатору (2 шт) DONFEEL OR-820M"><div class="box" page="nabor-standartnyh-nasadok-k-irrigatoru-sht-donfeel-orm-220r"><span class="title">домашние эпиляторы отзывы Набор стандартных насадок к ирригатору (2 шт) DONFEEL OR-820M</span><p>от <span class="price">220</span> руб.</p></div></li>
						<li><img src="photos/2c25dbb509feb3825290d2d56dd8e055.jpeg" alt="картридж для электробритвы Стационарный массажный стол US Medica Olimp" title="картридж для электробритвы Стационарный массажный стол US Medica Olimp"><div class="box" page="stacionarnyy-massazhnyy-stol-us-medica-olimp-42000r"><span class="title">картридж для электробритвы Стационарный массажный стол US Medica Olimp</span><p>от <span class="price">42000</span> руб.</p></div></li>
						<li><img src="photos/26722c15de67dde150ff899fe1744f29.jpeg" alt="светильники для зеркал Валик пятиугольный L58H16 USM-009" title="светильники для зеркал Валик пятиугольный L58H16 USM-009"><div class="box" page="valik-pyatiugolnyy-lh-usm-1200r"><span class="title">светильники для зеркал Валик пятиугольный L58H16 USM-009</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li class="large"><img src="photos/f4f525ef8dc957711c174f314a48fb88.jpeg" alt="зеркала на машину Офисное массажное кресло US Medica Chicago" title="зеркала на машину Офисное массажное кресло US Medica Chicago"><div class="box" page="ofisnoe-massazhnoe-kreslo-us-medica-chicago-25000r"><span class="title">зеркала на машину Офисное массажное кресло US Medica Chicago</span><p>от <span class="price">25000</span> руб.</p></div></li>
						<li class="large"><img src="photos/181222b228e95669567af2b965a2d19f.jpeg" alt="солярии в санкт петербурге Гидромассажная ванночка для ног Sanitas SFB09" title="солярии в санкт петербурге Гидромассажная ванночка для ног Sanitas SFB09"><div class="box" page="gidromassazhnaya-vannochka-dlya-nog-sanitas-sfb-1700r"><span class="title">солярии в санкт петербурге Гидромассажная ванночка для ног Sanitas SFB09</span><p>от <span class="price">1700</span> руб.</p></div></li>
						<li class="large"><img src="photos/cd38f6015c695c1257de400a936e8d7a.jpeg" alt="массаж при пупочной грыже Массажная роликовая накидка Fit Studio (FitStudio)" title="массаж при пупочной грыже Массажная роликовая накидка Fit Studio (FitStudio)"><div class="box" page="massazhnaya-rolikovaya-nakidka-fit-studio-fitstudio-3670r"><span class="title">массаж при пупочной грыже Массажная роликовая накидка Fit Studio (FitStudio)</span><p>от <span class="price">3670</span> руб.</p></div></li>
						<li><img src="photos/8d407214430de224e31012888584fda6.jpeg" alt="камеди зеркало Бикини-триммер с функцией бритвы Vitesse VS-961" title="камеди зеркало Бикини-триммер с функцией бритвы Vitesse VS-961"><div class="box" page="bikinitrimmer-s-funkciey-britvy-vitesse-vs-1730r"><span class="title">камеди зеркало Бикини-триммер с функцией бритвы Vitesse VS-961</span><p>от <span class="price">1730</span> руб.</p></div></li>
						<li><img src="photos/4fffcb2bc314de3650ec3df67e99237a.jpeg" alt="домашние лазерные эпиляторы отзывы Фен BABYLISS D221E" title="домашние лазерные эпиляторы отзывы Фен BABYLISS D221E"><div class="box" page="fen-babyliss-de-980r"><span class="title">домашние лазерные эпиляторы отзывы Фен BABYLISS D221E</span><p>от <span class="price">980</span> руб.</p></div></li>
						<li><img src="photos/1ed3782a761a5615bc41cb19f8a9861f.jpeg" alt="массаж в астане Зубная щетка BRAUN D-24 (D-32.546.5x) Triumph" title="массаж в астане Зубная щетка BRAUN D-24 (D-32.546.5x) Triumph"><div class="box" page="zubnaya-schetka-braun-d-dx-triumph-7540r"><span class="title">массаж в астане Зубная щетка BRAUN D-24 (D-32.546.5x) Triumph</span><p>от <span class="price">7540</span> руб.</p></div></li>
						<li><img src="photos/652893843b4242898200a587b05f18e7.jpeg" alt="зеркала на логан Эпилятор Braun SE1370" title="зеркала на логан Эпилятор Braun SE1370"><div class="box" page="epilyator-braun-se-1290r"><span class="title">зеркала на логан Эпилятор Braun SE1370</span><p>от <span class="price">1290</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("loson-posle-depilyacii-rica-mentolovyy-ml-600r.php", 0, -4); if (file_exists("comments/loson-posle-depilyacii-rica-mentolovyy-ml-600r.php")) require_once "comments/loson-posle-depilyacii-rica-mentolovyy-ml-600r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="loson-posle-depilyacii-rica-mentolovyy-ml-600r.php" method="post" onsubmit="return checkForm(this)">
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