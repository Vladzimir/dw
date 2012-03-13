<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("fen-vitesse-vs-1250r.php","электробритва для женщин");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("fen-vitesse-vs-1250r.php", $nick, $comment);
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
		<title>электробритва для женщин Фен Vitesse VS-946  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="электробритва для женщин, боковое зеркало ниссан, домашний эпилятор отзывы, домашний мини солярий, эпилятор профессиональный, машинка для стрижки волос киев, эпилятор philips hp 6576, зеркало соната, зеркало и обезьяна, выпрямление волос кератином отзывы, солярии в санкт петербурге, даньков зеркала, общий массаж тела, самостоятельный массаж лица,  зеркала на логан">
		<meta name="description" content="электробритва для женщин Фен Vitesse VS-946 отлично подходит для сушки волос в  домашних условиях. Данная...">
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
						<a class="photo" href="photos/146942793decd2e42b5bdfe65d419109.jpeg" title="электробритва для женщин Фен Vitesse VS-946"><img src="photos/146942793decd2e42b5bdfe65d419109.jpeg" alt="электробритва для женщин Фен Vitesse VS-946" title="электробритва для женщин Фен Vitesse VS-946 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-beurer-gs-photo-steklo-2150r.php"><img src="photos/fe32926e7d1e441020f0c5a0ba96ce73.jpeg" alt="боковое зеркало ниссан Весы  электронные напольные Beurer GS23 Photo (стекло)" title="боковое зеркало ниссан Весы  электронные напольные Beurer GS23 Photo (стекло)"></a><h2>Весы  электронные напольные Beurer GS23 Photo (стекло)</h2></li>
							<li><a href="http://hometech.elitno.net/zauber-elektronnye-napolnye-vesy-eco-1580r-2.php"><img src="photos/3b8c8a335cc3e56920ea3baf010f9e39.jpeg" alt="домашний эпилятор отзывы Zauber Электронные напольные весы  ECO-150" title="домашний эпилятор отзывы Zauber Электронные напольные весы  ECO-150"></a><h2>Zauber Электронные напольные весы  ECO-150</h2></li>
							<li><a href="http://hometech.elitno.net/analizator-zhirovoy-massy-tanita-mc-569000r.php"><img src="photos/ac422a9d1c8a424c0704c63a1c376866.jpeg" alt="домашний мини солярий Анализатор жировой массы Tanita MC-180" title="домашний мини солярий Анализатор жировой массы Tanita MC-180"></a><h2>Анализатор жировой массы Tanita MC-180</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>электробритва для женщин Фен Vitesse VS-946</h1>
						<div class="tb"><p>Цена: от <span class="price">1250</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_21096.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Фен Vitesse VS-946 отлично подходит для сушки волос в  домашних условиях. Данная модель фена обладает функцией подачи холодного  воздуха и 3 режимами интенсивности воздушного потока, что обеспечивает не  только быструю, но и комфортную сушку волос. Кроме того, данная модель включает  в себя функцию защиты от перегрева, которая препятствует повреждению волос  горячим воздухом. Кстати, всех ценительниц прекрасного порадует и стильный  дизайн этой модели фена. Также в комплекте с феном Vitesse VS-946 идет  концентратор, насадки (в том числе насадка-расческа) и диффузор.</p><p><strong>Характеристики:</strong></p><ul type=\disc\><li>Тип: обычный фен</li><li>Мощность: 2200 Вт</li><li>Количество режимов: 6</li><li>Независимая регулировка нагрева и воздушного потока;</li><li>Количество режимов нагрева: 3;</li><li>Количество режимов интенсивности воздушного потока: 2;</li><li>Дополнительные режимы: подача холодного воздуха;</li><li>Особенности: конструкция «петля» для подвешивания, защита от перегрева;</li><li>В комплекте: диффузор, концентратор, насадки (в т.ч. насадка-расческа)</li></ul><p><strong>Производитель:  Франция</strong></p> электробритва для женщин</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/ac0eed435cd4056b5acda4ed64c178a0.jpeg" alt="эпилятор профессиональный Электрощипцы для выпрямления волос Atlanta АТН-831" title="эпилятор профессиональный Электрощипцы для выпрямления волос Atlanta АТН-831"><div class="box" page="elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-350r-2"><span class="title">эпилятор профессиональный Электрощипцы для выпрямления волос Atlanta АТН-831</span><p>от <span class="price">350</span> руб.</p></div></li>
						<li><img src="photos/36e443eaf6287b929dd8b73b824c491a.jpeg" alt="машинка для стрижки волос киев Электрощипцы для выпрямления волос Atlanta АТН-832" title="машинка для стрижки волос киев Электрощипцы для выпрямления волос Atlanta АТН-832"><div class="box" page="elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-650r"><span class="title">машинка для стрижки волос киев Электрощипцы для выпрямления волос Atlanta АТН-832</span><p>от <span class="price">650</span> руб.</p></div></li>
						<li><img src="photos/d74d7c30f76ca3dc8493a83104fd72b9.jpeg" alt="эпилятор philips hp 6576 Аппликатор Ляпко Одинарный 5,8" title="эпилятор philips hp 6576 Аппликатор Ляпко Одинарный 5,8"><div class="box" page="applikator-lyapko-odinarnyy-780r"><span class="title">эпилятор philips hp 6576 Аппликатор Ляпко Одинарный 5,8</span><p>от <span class="price">780</span> руб.</p></div></li>
						<li><img src="photos/8599b1c1b0dc418f3853c3b1676d22a5.jpeg" alt="зеркало соната Массажер Супербол" title="зеркало соната Массажер Супербол"><div class="box" page="massazher-superbol-600r"><span class="title">зеркало соната Массажер Супербол</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li class="large"><img src="photos/15b245e4c99a3ad164830ab7215e451b.jpeg" alt="зеркало и обезьяна Массажер медицинский Nozomi MH-102 ICST" title="зеркало и обезьяна Массажер медицинский Nozomi MH-102 ICST"><div class="box" page="massazher-medicinskiy-nozomi-mh-icst-1550r"><span class="title">зеркало и обезьяна Массажер медицинский Nozomi MH-102 ICST</span><p>от <span class="price">1550</span> руб.</p></div></li>
						<li class="large"><img src="photos/9547fcca4fcaaeea1c99d9d955e1ecd8.jpeg" alt="выпрямление волос кератином отзывы Массажер для ног US Medica Acupuncture FM-70" title="выпрямление волос кератином отзывы Массажер для ног US Medica Acupuncture FM-70"><div class="box" page="massazher-dlya-nog-us-medica-acupuncture-fm-21000r"><span class="title">выпрямление волос кератином отзывы Массажер для ног US Medica Acupuncture FM-70</span><p>от <span class="price">21000</span> руб.</p></div></li>
						<li class="large"><img src="photos/181222b228e95669567af2b965a2d19f.jpeg" alt="солярии в санкт петербурге Гидромассажная ванночка для ног Sanitas SFB09" title="солярии в санкт петербурге Гидромассажная ванночка для ног Sanitas SFB09"><div class="box" page="gidromassazhnaya-vannochka-dlya-nog-sanitas-sfb-1700r"><span class="title">солярии в санкт петербурге Гидромассажная ванночка для ног Sanitas SFB09</span><p>от <span class="price">1700</span> руб.</p></div></li>
						<li><img src="photos/991e5918a98c4f174a34a2f80873edbd.jpeg" alt="даньков зеркала Массажная накидка шиатсу  Beurer MG190" title="даньков зеркала Массажная накидка шиатсу  Beurer MG190"><div class="box" page="massazhnaya-nakidka-shiatsu-beurer-mg-5500r"><span class="title">даньков зеркала Массажная накидка шиатсу  Beurer MG190</span><p>от <span class="price">5500</span> руб.</p></div></li>
						<li><img src="photos/2c7a77c230be7b8e97a075b819c83be5.jpeg" alt="общий массаж тела Солярий для лица Efbe-Schott 836" title="общий массаж тела Солярий для лица Efbe-Schott 836"><div class="box" page="solyariy-dlya-lica-efbeschott-5000r"><span class="title">общий массаж тела Солярий для лица Efbe-Schott 836</span><p>от <span class="price">5000</span> руб.</p></div></li>
						<li><img src="photos/ae9da361619c92f9a8cf3fb8e35d98ca.jpeg" alt="самостоятельный массаж лица Corioliss Brush Collection Ионный Термо-Брашинг" title="самостоятельный массаж лица Corioliss Brush Collection Ионный Термо-Брашинг"><div class="box" page="corioliss-brush-collection-ionnyy-termobrashing-630r"><span class="title">самостоятельный массаж лица Corioliss Brush Collection Ионный Термо-Брашинг</span><p>от <span class="price">630</span> руб.</p></div></li>
						<li><img src="photos/456587fb45bdda7592a0d89b7eb8e4c1.jpeg" alt="камера с кривым зеркалом Фен Babyliss 6612E 2200 Вт" title="камера с кривым зеркалом Фен Babyliss 6612E 2200 Вт"><div class="box" page="fen-babyliss-e-vt-2780r"><span class="title">камера с кривым зеркалом Фен Babyliss 6612E 2200 Вт</span><p>от <span class="price">2780</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("fen-vitesse-vs-1250r.php", 0, -4); if (file_exists("comments/fen-vitesse-vs-1250r.php")) require_once "comments/fen-vitesse-vs-1250r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="fen-vitesse-vs-1250r.php" method="post" onsubmit="return checkForm(this)">
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