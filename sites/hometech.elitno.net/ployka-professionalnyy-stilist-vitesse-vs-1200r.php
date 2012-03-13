<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("ployka-professionalnyy-stilist-vitesse-vs-1200r.php","ремонт бытовых электронных весов");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("ployka-professionalnyy-stilist-vitesse-vs-1200r.php", $nick, $comment);
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
		<title>ремонт бытовых электронных весов Плойка Профессиональный стилист Vitesse VS-921  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="ремонт бытовых электронных весов, наборы с зеркалом, domotec машинка для стрижки, эпилятор philips hp 6576, косметика из индии, электронное зеркало, резка стекла и зеркал, ожог в солярии, маникюр педикюр москва, модели фенов, зеркала в доме, произведение зеркало, почему закрывают зеркала, старославянский массаж,  регулировка машинки для стрижки">
		<meta name="description" content="ремонт бытовых электронных весов Плойка Vitesse VS-921 из серии «Профессиональный стилист»  отлично подходит для ...">
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
						<a class="photo" href="photos/7f3e0927be5b977ce03159a3abbb0e0b.jpeg" title="ремонт бытовых электронных весов Плойка Профессиональный стилист Vitesse VS-921"><img src="photos/7f3e0927be5b977ce03159a3abbb0e0b.jpeg" alt="ремонт бытовых электронных весов Плойка Профессиональный стилист Vitesse VS-921" title="ремонт бытовых электронных весов Плойка Профессиональный стилист Vitesse VS-921 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/raskladnoy-massazhnyy-stol-yaal-16900r.php"><img src="photos/173fc00526bb1e09cfe42da1b29445db.jpeg" alt="наборы с зеркалом Раскладной массажный стол YA-01AL" title="наборы с зеркалом Раскладной массажный стол YA-01AL"></a><h2>Раскладной массажный стол YA-01AL</h2></li>
							<li><a href="http://hometech.elitno.net/trenazher-dlya-pressa-sanitas-sem-1900r.php"><img src="photos/6d4dd781ff315f609772a193ec85e622.jpeg" alt="domotec машинка для стрижки Тренажер для пресса Sanitas SEM30" title="domotec машинка для стрижки Тренажер для пресса Sanitas SEM30"></a><h2>Тренажер для пресса Sanitas SEM30</h2></li>
							<li><a href="http://hometech.elitno.net/applikator-lyapko-odinarnyy-780r.php"><img src="photos/d74d7c30f76ca3dc8493a83104fd72b9.jpeg" alt="эпилятор philips hp 6576 Аппликатор Ляпко Одинарный 5,8" title="эпилятор philips hp 6576 Аппликатор Ляпко Одинарный 5,8"></a><h2>Аппликатор Ляпко Одинарный 5,8</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>ремонт бытовых электронных весов Плойка Профессиональный стилист Vitesse VS-921</h1>
						<div class="tb"><p>Цена: от <span class="price">1200</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_21103.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Плойка Vitesse VS-921 из серии «Профессиональный стилист»  отлично подходит для качественной завивки и укладки волос в домашних условиях. Оптимальный  диаметр плойки (25 мм)  позволит вам создать по-настоящему легкие и естественные кудри, а возможность  вращения шнура вокруг своей оси сделает процесс завивки максимально комфортным.  Кстати, данная модель плойки порадует всех ценительниц прекрасного своим  стильным дизайном. Также в комплекте с плойкой Vitesse VS-921 идет специальный  футляр.</p><p><strong>Характеристики:</strong></p><ul type=\disc\><li>Тип: щипцы д/завивки;</li><li>Максимальная температура нагрева: 200 С;</li><li>Индикация включения;</li><li>Особенности: вращение шнура вокруг своей оси;</li><li>Диаметр щипцов для завивки: 25 мм;</li><li>В комплекте: футляр</li></ul><p><strong>Производитель:  Франция</strong></p> ремонт бытовых электронных весов</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/9465b0dca2e8fe2c49ae1e6021d20f1e.gif" alt="косметика из индии АЛ Волшебная  Лента Здоровье (7 сегментов)" title="косметика из индии АЛ Волшебная  Лента Здоровье (7 сегментов)"><div class="box" page="al-volshebnaya-lenta-zdorove-segmentov-5230r"><span class="title">косметика из индии АЛ Волшебная  Лента Здоровье (7 сегментов)</span><p>от <span class="price">5230</span> руб.</p></div></li>
						<li><img src="photos/e3a813514433641f393edfdb0982bd86.jpeg" alt="электронное зеркало Массажер для тела Beurer MG80" title="электронное зеркало Массажер для тела Beurer MG80"><div class="box" page="massazher-dlya-tela-beurer-mg-2550r"><span class="title">электронное зеркало Массажер для тела Beurer MG80</span><p>от <span class="price">2550</span> руб.</p></div></li>
						<li><img src="photos/32653bc15e232e434b4131f9b427cfdf.jpeg" alt="резка стекла и зеркал Массажер для профилактики варикоза Aviafit" title="резка стекла и зеркал Массажер для профилактики варикоза Aviafit"><div class="box" page="massazher-dlya-profilaktiki-varikoza-aviafit-2000r"><span class="title">резка стекла и зеркал Массажер для профилактики варикоза Aviafit</span><p>от <span class="price">2000</span> руб.</p></div></li>
						<li><img src="photos/2da10774211f671836a3e448d640220b.png" alt="ожог в солярии Массажер для стоп US-Medica Omega" title="ожог в солярии Массажер для стоп US-Medica Omega"><div class="box" page="massazher-dlya-stop-usmedica-omega-4500r"><span class="title">ожог в солярии Массажер для стоп US-Medica Omega</span><p>от <span class="price">4500</span> руб.</p></div></li>
						<li class="large"><img src="photos/bcabcf5532aacefb2fe352cc581c70f2.jpeg" alt="маникюр педикюр москва Подушка массажная BODYKRAFT С-31G" title="маникюр педикюр москва Подушка массажная BODYKRAFT С-31G"><div class="box" page="podushka-massazhnaya-bodykraft-sg-3290r"><span class="title">маникюр педикюр москва Подушка массажная BODYKRAFT С-31G</span><p>от <span class="price">3290</span> руб.</p></div></li>
						<li class="large"><img src="photos/d6d662f1051663df0b15aa06e33f4f63.jpeg" alt="модели фенов Прибор для ухода за кожей лица Gezatone Ionic-Ultratonic m365" title="модели фенов Прибор для ухода за кожей лица Gezatone Ionic-Ultratonic m365"><div class="box" page="pribor-dlya-uhoda-za-kozhey-lica-gezatone-ionicultratonic-m-2100r"><span class="title">модели фенов Прибор для ухода за кожей лица Gezatone Ionic-Ultratonic m365</span><p>от <span class="price">2100</span> руб.</p></div></li>
						<li class="large"><img src="photos/268da259ea6cd611200b950164247b1d.jpeg" alt="зеркала в доме Машинка для стрижки Atlanta АТН-859" title="зеркала в доме Машинка для стрижки Atlanta АТН-859"><div class="box" page="mashinka-dlya-strizhki-atlanta-atn-490r"><span class="title">зеркала в доме Машинка для стрижки Atlanta АТН-859</span><p>от <span class="price">490</span> руб.</p></div></li>
						<li><img src="photos/1b8045a8b00517a46ef7bcbf121b878d.jpeg" alt="произведение зеркало Лосьон после депиляции Rica, очищающий с маслом авокадо, 100мл" title="произведение зеркало Лосьон после депиляции Rica, очищающий с маслом авокадо, 100мл"><div class="box" page="loson-posle-depilyacii-rica-ochischayuschiy-s-maslom-avokado-ml-600r"><span class="title">произведение зеркало Лосьон после депиляции Rica, очищающий с маслом авокадо, 100мл</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li><img src="photos/1ad6a3b32c59fb28206bf73e4dc30b08.jpeg" alt="почему закрывают зеркала Фен Atlanta АТН-86" title="почему закрывают зеркала Фен Atlanta АТН-86"><div class="box" page="fen-atlanta-atn-450r"><span class="title">почему закрывают зеркала Фен Atlanta АТН-86</span><p>от <span class="price">450</span> руб.</p></div></li>
						<li><img src="photos/146942793decd2e42b5bdfe65d419109.jpeg" alt="старославянский массаж Фен Vitesse VS-946" title="старославянский массаж Фен Vitesse VS-946"><div class="box" page="fen-vitesse-vs-1250r"><span class="title">старославянский массаж Фен Vitesse VS-946</span><p>от <span class="price">1250</span> руб.</p></div></li>
						<li><img src="photos/2e536713ecf881b83c6b9e9324e25ed1.jpeg" alt="массаж после родов Фен Vitesse VS-943 белый" title="массаж после родов Фен Vitesse VS-943 белый"><div class="box" page="fen-vitesse-vs-belyy-640r"><span class="title">массаж после родов Фен Vitesse VS-943 белый</span><p>от <span class="price">640</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("ployka-professionalnyy-stilist-vitesse-vs-1200r.php", 0, -4); if (file_exists("comments/ployka-professionalnyy-stilist-vitesse-vs-1200r.php")) require_once "comments/ployka-professionalnyy-stilist-vitesse-vs-1200r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="ployka-professionalnyy-stilist-vitesse-vs-1200r.php" method="post" onsubmit="return checkForm(this)">
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