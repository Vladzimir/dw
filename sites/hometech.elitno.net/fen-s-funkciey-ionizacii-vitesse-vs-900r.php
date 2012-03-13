<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("fen-s-funkciey-ionizacii-vitesse-vs-900r.php","баночный массаж отзывы");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("fen-s-funkciey-ionizacii-vitesse-vs-900r.php", $nick, $comment);
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
		<title>баночный массаж отзывы Фен с функцией ионизации Vitesse VS-945  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="баночный массаж отзывы, триммер philips отзывы, аппараты для лица и тела, утюжки для завивки волос, институт массажа и косметологии, приготовление фена, институт массажа и косметологии, установка зеркала заднего вида, шампунь для выпрямления волос, гадание на свечах и зеркале, двойное зеркало, триммер champion, подогрев зеркал купить, почему закрывают зеркала,  оборудование для массажа">
		<meta name="description" content="баночный массаж отзывы Vitesse VS-945 – это компактный и практичный фен с функцией  ионизации, которая ...">
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
						<a class="photo" href="photos/4e3d3fd4062a17924a317b68cea22085.jpeg" title="баночный массаж отзывы Фен с функцией ионизации Vitesse VS-945"><img src="photos/4e3d3fd4062a17924a317b68cea22085.jpeg" alt="баночный массаж отзывы Фен с функцией ионизации Vitesse VS-945" title="баночный массаж отзывы Фен с функцией ионизации Vitesse VS-945 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vypryamitel-dlya-volos-babyliss-ste-1520r.php"><img src="photos/3da7d41a61386c53690f58157cda6dc4.jpeg" alt="триммер philips отзывы Выпрямитель для волос BaByliss ST227E" title="триммер philips отзывы Выпрямитель для волос BaByliss ST227E"></a><h2>Выпрямитель для волос BaByliss ST227E</h2></li>
							<li><a href="http://hometech.elitno.net/multistayler-babyliss-ce-fun-style-nasadok-1340r.php"><img src="photos/3d8d532ba644bc626a45f5b18063107d.jpeg" alt="аппараты для лица и тела Мультистайлер Babyliss 2020CE Fun Style 8 насадок" title="аппараты для лица и тела Мультистайлер Babyliss 2020CE Fun Style 8 насадок"></a><h2>Мультистайлер Babyliss 2020CE Fun Style 8 насадок</h2></li>
							<li><a href="http://hometech.elitno.net/manikyurnyy-nabor-beurer-mp-nasadok-1550r.php"><img src="photos/0771169db5e24831fbf44ff7fabc016d.jpeg" alt="утюжки для завивки волос Маникюрный набор Beurer MP30 (7 насадок)" title="утюжки для завивки волос Маникюрный набор Beurer MP30 (7 насадок)"></a><h2>Маникюрный набор Beurer MP30 (7 насадок)</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>баночный массаж отзывы Фен с функцией ионизации Vitesse VS-945</h1>
						<div class="tb"><p>Цена: от <span class="price">900</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_21095.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Vitesse VS-945 – это компактный и практичный фен с функцией  ионизации, которая не только предотвращает лишнее температурное воздействие на  волосы, но и значительно упрощает процесс укладки. Вместе с тем фен Vitesse  VS-945 обладает функцией подачи холодного воздуха и 2 режимами интенсивности  воздушного потока, что обеспечивает не только быструю, но и комфортную сушку  волос. Кроме того, данная модель включает в себя функцию защиты от перегрева,  которая препятствует повреждению волос горячим воздухом. Кстати, всех  ценительниц прекрасного порадует и стильный дизайн этой модели фена. Также в  комплекте с феном Vitesse VS-945 идет концентратор и насадки.</p><p><strong>Характеристики:</strong></p><ul type=\disc\><li>Тип: компактный фен;</li><li>Мощность: 1200 Вт;</li><li>Складная ручка;</li><li>Количество режимов 2;</li><li>Дополнительные режимы подача холодного воздуха, ионизация;</li><li>Особенности: конструкция «петля» для подвешивания, защита от перегрева;</li><li>В комплекте: концентратор, насадки;</li></ul><p><strong>Производитель:  Франция</strong></p> баночный массаж отзывы</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/abde1a7164344d09d53992486a50887a.jpeg" alt="институт массажа и косметологии Раскладной массажный стол US Medica Malibu линейка SPA" title="институт массажа и косметологии Раскладной массажный стол US Medica Malibu линейка SPA"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-malibu-lineyka-spa-31500r"><span class="title">институт массажа и косметологии Раскладной массажный стол US Medica Malibu линейка SPA</span><p>от <span class="price">31500</span> руб.</p></div></li>
						<li><img src="photos/be933d8d1e85d52fb3b8e981e9e6d19f.jpeg" alt="приготовление фена Подлокотники L73 USM-011" title="приготовление фена Подлокотники L73 USM-011"><div class="box" page="podlokotniki-l-usm-1800r"><span class="title">приготовление фена Подлокотники L73 USM-011</span><p>от <span class="price">1800</span> руб.</p></div></li>
						<li><img src="photos/048943609504ddde8243936e65522ddb.jpeg" alt="институт массажа и косметологии Аппликатор Ляпко Одинарный 6,2" title="институт массажа и косметологии Аппликатор Ляпко Одинарный 6,2"><div class="box" page="applikator-lyapko-odinarnyy-720r"><span class="title">институт массажа и косметологии Аппликатор Ляпко Одинарный 6,2</span><p>от <span class="price">720</span> руб.</p></div></li>
						<li><img src="photos/6032832465abb70306c5ea0aedd085a5.jpeg" alt="установка зеркала заднего вида Аппликатор Ляпко Ромашка" title="установка зеркала заднего вида Аппликатор Ляпко Ромашка"><div class="box" page="applikator-lyapko-romashka-2350r"><span class="title">установка зеркала заднего вида Аппликатор Ляпко Ромашка</span><p>от <span class="price">2350</span> руб.</p></div></li>
						<li class="large"><img src="photos/febc0d538efb454d2fcae5ec3130fad8.jpeg" alt="шампунь для выпрямления волос Аппликатор Стелька-скороход, размер 40-43" title="шампунь для выпрямления волос Аппликатор Стелька-скороход, размер 40-43"><div class="box" page="applikator-stelkaskorohod-razmer-1500r"><span class="title">шампунь для выпрямления волос Аппликатор Стелька-скороход, размер 40-43</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li class="large"><img src="photos/baa708c812902442c1208631338bc40c.jpeg" alt="гадание на свечах и зеркале Массажер для тела с ИК прогревом и съемной ручкой Gezatone AMG105 1301059" title="гадание на свечах и зеркале Массажер для тела с ИК прогревом и съемной ручкой Gezatone AMG105 1301059"><div class="box" page="massazher-dlya-tela-s-ik-progrevom-i-semnoy-ruchkoy-gezatone-amg-2200r"><span class="title">гадание на свечах и зеркале Массажер для тела с ИК прогревом и съемной ручкой Gezatone AMG105 1301059</span><p>от <span class="price">2200</span> руб.</p></div></li>
						<li class="large"><img src="photos/d59acc6853a5ac65d4a0ba3df89a8509.jpeg" alt="двойное зеркало Массажер антицеллюлитный Beurer CM50" title="двойное зеркало Массажер антицеллюлитный Beurer CM50"><div class="box" page="massazher-anticellyulitnyy-beurer-cm-2000r"><span class="title">двойное зеркало Массажер антицеллюлитный Beurer CM50</span><p>от <span class="price">2000</span> руб.</p></div></li>
						<li><img src="photos/6117c27bb4abbcf9770fbc1a16077f34.jpeg" alt="триммер champion Массажер Beurer MG260 для тела" title="триммер champion Массажер Beurer MG260 для тела"><div class="box" page="massazher-beurer-mg-dlya-tela-12500r"><span class="title">триммер champion Массажер Beurer MG260 для тела</span><p>от <span class="price">12500</span> руб.</p></div></li>
						<li><img src="photos/b609531b011f62c233bacac89d2daa55.jpeg" alt="подогрев зеркал купить Фен Valera Silent Energy 1600 545.01" title="подогрев зеркал купить Фен Valera Silent Energy 1600 545.01"><div class="box" page="fen-valera-silent-energy-1610r"><span class="title">подогрев зеркал купить Фен Valera Silent Energy 1600 545.01</span><p>от <span class="price">1610</span> руб.</p></div></li>
						<li><img src="photos/1ad6a3b32c59fb28206bf73e4dc30b08.jpeg" alt="почему закрывают зеркала Фен Atlanta АТН-86" title="почему закрывают зеркала Фен Atlanta АТН-86"><div class="box" page="fen-atlanta-atn-450r"><span class="title">почему закрывают зеркала Фен Atlanta АТН-86</span><p>от <span class="price">450</span> руб.</p></div></li>
						<li><img src="photos/1809b9060c9eea16ab484d459d97c115.jpeg" alt="массаж для дам Фен Atlanta АТН-868" title="массаж для дам Фен Atlanta АТН-868"><div class="box" page="fen-atlanta-atn-800r"><span class="title">массаж для дам Фен Atlanta АТН-868</span><p>от <span class="price">800</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("fen-s-funkciey-ionizacii-vitesse-vs-900r.php", 0, -4); if (file_exists("comments/fen-s-funkciey-ionizacii-vitesse-vs-900r.php")) require_once "comments/fen-s-funkciey-ionizacii-vitesse-vs-900r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="fen-s-funkciey-ionizacii-vitesse-vs-900r.php" method="post" onsubmit="return checkForm(this)">
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