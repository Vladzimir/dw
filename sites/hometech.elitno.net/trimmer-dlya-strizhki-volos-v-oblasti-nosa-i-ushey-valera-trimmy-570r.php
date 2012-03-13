<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("trimmer-dlya-strizhki-volos-v-oblasti-nosa-i-ushey-valera-trimmy-570r.php","бигуди бархатные бигуди");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("trimmer-dlya-strizhki-volos-v-oblasti-nosa-i-ushey-valera-trimmy-570r.php", $nick, $comment);
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
		<title>бигуди бархатные бигуди Триммер для стрижки волос в области носа и ушей Valera Trimmy 624.01  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="бигуди бархатные бигуди, электробритва philips 6990, соблазнил массажем, солярий киров, курсы массажа в новосибирске, зеркало заднего вида 2110, асахи массаж для тела, массаж обертывание, фен самара, для беременных массаж, зеркало toyota corolla, новый год в зеркале, правильный массаж живота, домашние лазерные эпиляторы отзывы,  бирюков массаж">
		<meta name="description" content="бигуди бархатные бигуди Триммер Trimmy 624.01 от известного швейцарского производителя Valera предназнач...">
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
						<a class="photo" href="photos/0b818c5778593d88240657fc3fa330a4.jpeg" title="бигуди бархатные бигуди Триммер для стрижки волос в области носа и ушей Valera Trimmy 624.01"><img src="photos/0b818c5778593d88240657fc3fa330a4.jpeg" alt="бигуди бархатные бигуди Триммер для стрижки волос в области носа и ушей Valera Trimmy 624.01" title="бигуди бархатные бигуди Триммер для стрижки волос в области носа и ушей Valera Trimmy 624.01 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/elektroschipcy-dlya-vypryamleniya-volos-atlanta-atnn-500r.php"><img src="photos/b6a471449cbe12dbfcc99a068c9e41dc.jpeg" alt="электробритва philips 6990 Электрощипцы для выпрямления волос Atlanta АТН-834N" title="электробритва philips 6990 Электрощипцы для выпрямления волос Atlanta АТН-834N"></a><h2>Электрощипцы для выпрямления волос Atlanta АТН-834N</h2></li>
							<li><a href="http://hometech.elitno.net/zerkalo-beurer-bs-kosmeticheskoe-1900r.php"><img src="photos/ed0c34c7ee29ed14f07ab5b9a731bbc5.jpeg" alt="соблазнил массажем Зеркало Beurer BS 59 косметическое" title="соблазнил массажем Зеркало Beurer BS 59 косметическое"></a><h2>Зеркало Beurer BS 59 косметическое</h2></li>
							<li><a href="http://hometech.elitno.net/nabor-nazalnyh-nasadok-k-irrigatoru-sht-donfeel-orm-270r.php"><img src="photos/9a2bc44bf6a5d738109f051af1b10196.jpeg" alt="солярий киров Набор назальных насадок к ирригатору (2 шт) DONFEEL OR-820M" title="солярий киров Набор назальных насадок к ирригатору (2 шт) DONFEEL OR-820M"></a><h2>Набор назальных насадок к ирригатору (2 шт) DONFEEL OR-820M</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>бигуди бархатные бигуди Триммер для стрижки волос в области носа и ушей Valera Trimmy 624.01</h1>
						<div class="tb"><p>Цена: от <span class="price">570</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_11379.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Триммер </b><b>Trimmy 624.01 </b>от известного швейцарского производителя Valera предназначен для эффективного удаления волос в области носа и ушей. Он поможет вам быстро и безболезненно избавиться от нежелательной растительности. Модель обладает стильным современным дизайном, качественным исполнением и невысокой ценой. Прибор оснащен одной насадкой, работа триммера осуществляется от батареи типа «АА» 1,5 Вольт (покупается отдельно).</p><p><b>Характеристики:</b></p><ul type=disc><li>Тип: для стрижки волос в носу и ушах; <li>Количество насадок 1; <li>Работает от батареи AA 1,5 Вольт (в комплекте не идет).</li></ul><p><b>Производитель:</b> Valera.</p><p><b>Страна:</b> Швейцария. </p><p><b>Гарантия:</b> 2 года.</p> бигуди бархатные бигуди</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/bbbfd04b81d31947d9e57fb11bf3d7a4.jpeg" alt="курсы массажа в новосибирске Стационарный массажный стол US Medica Bali" title="курсы массажа в новосибирске Стационарный массажный стол US Medica Bali"><div class="box" page="stacionarnyy-massazhnyy-stol-us-medica-bali-47000r"><span class="title">курсы массажа в новосибирске Стационарный массажный стол US Medica Bali</span><p>от <span class="price">47000</span> руб.</p></div></li>
						<li><img src="photos/efecfdd903b36bfb57ecf33e62da8ced.jpeg" alt="зеркало заднего вида 2110 Вибромассажер Clear Fit Extra Beauty CF 135 E" title="зеркало заднего вида 2110 Вибромассажер Clear Fit Extra Beauty CF 135 E"><div class="box" page="vibromassazher-clear-fit-extra-beauty-cf-e-9490r"><span class="title">зеркало заднего вида 2110 Вибромассажер Clear Fit Extra Beauty CF 135 E</span><p>от <span class="price">9490</span> руб.</p></div></li>
						<li><img src="photos/bc2944ee563c3b24a06eaacc9776c3c3.jpeg" alt="асахи массаж для тела Массажер медицинский Nozomi MH-103 ICST" title="асахи массаж для тела Массажер медицинский Nozomi MH-103 ICST"><div class="box" page="massazher-medicinskiy-nozomi-mh-icst-1850r"><span class="title">асахи массаж для тела Массажер медицинский Nozomi MH-103 ICST</span><p>от <span class="price">1850</span> руб.</p></div></li>
						<li><img src="photos/5dd95fcbd77902411af3599387a4ddf5.jpeg" alt="массаж обертывание Массажер для головы Мурашка Антистресс" title="массаж обертывание Массажер для головы Мурашка Антистресс"><div class="box" page="massazher-dlya-golovy-murashka-antistress-200r"><span class="title">массаж обертывание Массажер для головы Мурашка Антистресс</span><p>от <span class="price">200</span> руб.</p></div></li>
						<li class="large"><img src="photos/9294f52350ef235ecf04b9e5bd203c2c.jpeg" alt="фен самара Массажер для лица c функцией брашинга Gezatone AMG106 1301101" title="фен самара Массажер для лица c функцией брашинга Gezatone AMG106 1301101"><div class="box" page="massazher-dlya-lica-c-funkciey-brashinga-gezatone-amg-600r"><span class="title">фен самара Массажер для лица c функцией брашинга Gezatone AMG106 1301101</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li class="large"><img src="photos/556cecd1e2f27d03b7762d25fe40880d.jpeg" alt="для беременных массаж Vitek VT–1362 Машинка для стрижки волос" title="для беременных массаж Vitek VT–1362 Машинка для стрижки волос"><div class="box" page="vitek-vt–-mashinka-dlya-strizhki-volos-760r"><span class="title">для беременных массаж Vitek VT–1362 Машинка для стрижки волос</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li class="large"><img src="photos/db98c04ce84416d39676eb45e61bf9d6.jpeg" alt="зеркало toyota corolla Фотоэпилятор Rio IPL8000, для домашнего использования" title="зеркало toyota corolla Фотоэпилятор Rio IPL8000, для домашнего использования"><div class="box" page="fotoepilyator-rio-ipl-dlya-domashnego-ispolzovaniya-26900r"><span class="title">зеркало toyota corolla Фотоэпилятор Rio IPL8000, для домашнего использования</span><p>от <span class="price">26900</span> руб.</p></div></li>
						<li><img src="photos/deb641c0c651e619c7356b65a8874c43.jpeg" alt="новый год в зеркале Фен Valera Swiss Turbo 8200 Ionic Tourmaline" title="новый год в зеркале Фен Valera Swiss Turbo 8200 Ionic Tourmaline"><div class="box" page="fen-valera-swiss-turbo-ionic-tourmaline-3530r"><span class="title">новый год в зеркале Фен Valera Swiss Turbo 8200 Ionic Tourmaline</span><p>от <span class="price">3530</span> руб.</p></div></li>
						<li><img src="photos/f858c82b10a39109d5171ba0356b80f7.jpeg" alt="правильный массаж живота Фен Vitesse VS-943 сиреневый" title="правильный массаж живота Фен Vitesse VS-943 сиреневый"><div class="box" page="fen-vitesse-vs-sirenevyy-640r"><span class="title">правильный массаж живота Фен Vitesse VS-943 сиреневый</span><p>от <span class="price">640</span> руб.</p></div></li>
						<li><img src="photos/4fffcb2bc314de3650ec3df67e99237a.jpeg" alt="домашние лазерные эпиляторы отзывы Фен BABYLISS D221E" title="домашние лазерные эпиляторы отзывы Фен BABYLISS D221E"><div class="box" page="fen-babyliss-de-980r"><span class="title">домашние лазерные эпиляторы отзывы Фен BABYLISS D221E</span><p>от <span class="price">980</span> руб.</p></div></li>
						<li><img src="photos/2c5bb1673d91e8e164ce05829ac68a2e.jpeg" alt="отзывы тайский массаж Электробритва Vitesse VS-371" title="отзывы тайский массаж Электробритва Vitesse VS-371"><div class="box" page="elektrobritva-vitesse-vs-1550r"><span class="title">отзывы тайский массаж Электробритва Vitesse VS-371</span><p>от <span class="price">1550</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("trimmer-dlya-strizhki-volos-v-oblasti-nosa-i-ushey-valera-trimmy-570r.php", 0, -4); if (file_exists("comments/trimmer-dlya-strizhki-volos-v-oblasti-nosa-i-ushey-valera-trimmy-570r.php")) require_once "comments/trimmer-dlya-strizhki-volos-v-oblasti-nosa-i-ushey-valera-trimmy-570r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="trimmer-dlya-strizhki-volos-v-oblasti-nosa-i-ushey-valera-trimmy-570r.php" method="post" onsubmit="return checkForm(this)">
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