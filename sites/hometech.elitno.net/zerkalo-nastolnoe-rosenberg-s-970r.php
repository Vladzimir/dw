<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("zerkalo-nastolnoe-rosenberg-s-970r.php","завивка волос средней длины");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("zerkalo-nastolnoe-rosenberg-s-970r.php", $nick, $comment);
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
		<title>завивка волос средней длины Зеркало настольное Rosenberg S-2338  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="завивка волос средней длины, солярий челябинск, маникюр педикюр стоимость, стрижки мужские короткие машинкой, модели фенов, фокин массаж, эксплуатация электронных весов, где научиться массажу, массаж головы ребенка, зеркало телевизор, массаж большой груди, пройти курсы массажа, зеркало ниссан альмера, купить электробритву панасоник,  крем для солярия отзывы">
		<meta name="description" content="завивка волос средней длины Оригинальным украшением вашей комнаты станет настольное  зеркало S-2338 от  неме...">
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
						<a class="photo" href="photos/e273f348f6c5708fd82a881f65351988.jpeg" title="завивка волос средней длины Зеркало настольное Rosenberg S-2338"><img src="photos/e273f348f6c5708fd82a881f65351988.jpeg" alt="завивка волос средней длины Зеркало настольное Rosenberg S-2338" title="завивка волос средней длины Зеркало настольное Rosenberg S-2338 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-bytovye-tanita-hd-1000r.php"><img src="photos/f6d7768111f2b2d1a629e5ad58787f64.jpeg" alt="солярий челябинск Весы бытовые Tanita HD-386" title="солярий челябинск Весы бытовые Tanita HD-386"></a><h2>Весы бытовые Tanita HD-386</h2></li>
							<li><a href="http://hometech.elitno.net/beurer-vesy-bg-2000r.php"><img src="photos/396d7ad790b512ebfc9b60cd3372355c.jpeg" alt="маникюр педикюр стоимость BEURER Весы BG28" title="маникюр педикюр стоимость BEURER Весы BG28"></a><h2>BEURER Весы BG28</h2></li>
							<li><a href="http://hometech.elitno.net/vypryamitel-valera-ionic-ceramic-nanosilver-2480r.php"><img src="photos/480350ac2c02c08c2c9a122491ae6bbf.jpeg" alt="стрижки мужские короткие машинкой Выпрямитель Valera Ionic Ceramic Nanosilver 639.01" title="стрижки мужские короткие машинкой Выпрямитель Valera Ionic Ceramic Nanosilver 639.01"></a><h2>Выпрямитель Valera Ionic Ceramic Nanosilver 639.01</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>завивка волос средней длины Зеркало настольное Rosenberg S-2338</h1>
						<div class="tb"><p>Цена: от <span class="price">970</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_25961.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Оригинальным украшением вашей комнаты станет настольное  зеркало S-2338 от  немецкой компании Rosenberg. Овальное настольное зеркало Rosenberg S-2338 имеет оптимальные  размеры и подставку, украшенную абстрактным рельефным рисунком и яркими  красными камнями. Кроме того, привлекательность данному набору предметов  придает и серебристый цвет поверхности. </p> <p><strong>Характеристики:</strong></p> <ul type=disc>   <li>Тип:       настольное;</li>   <li>Размер:       15x24x39,5 см;</li>   <li>Цвет:       серебристый/красный.</li> </ul> <p><strong>Производитель:  Rosenberg (Германия)</strong></p> завивка волос средней длины</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/9a620fdb399918000af975e9d69559f4.jpeg" alt="модели фенов Электрощипцы для выпрямления волос Atlanta АТН-838" title="модели фенов Электрощипцы для выпрямления волос Atlanta АТН-838"><div class="box" page="elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-600r"><span class="title">модели фенов Электрощипцы для выпрямления волос Atlanta АТН-838</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li><img src="photos/db50f056381f7d55d9462e3f852c618b.jpeg" alt="фокин массаж Стационарный массажный стол US Medica Profi" title="фокин массаж Стационарный массажный стол US Medica Profi"><div class="box" page="stacionarnyy-massazhnyy-stol-us-medica-profi-85000r"><span class="title">фокин массаж Стационарный массажный стол US Medica Profi</span><p>от <span class="price">85000</span> руб.</p></div></li>
						<li><img src="photos/80751e023e3ff12de485090c14fbecdd.jpeg" alt="эксплуатация электронных весов Валик под шею L35D9 USM-010" title="эксплуатация электронных весов Валик под шею L35D9 USM-010"><div class="box" page="valik-pod-sheyu-ld-usm-1000r"><span class="title">эксплуатация электронных весов Валик под шею L35D9 USM-010</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li><img src="photos/921b5abf5fd22743c43409e559d706e6.jpeg" alt="где научиться массажу Гидромассажер для ванны Sanitas SLS 30" title="где научиться массажу Гидромассажер для ванны Sanitas SLS 30"><div class="box" page="gidromassazher-dlya-vanny-sanitas-sls-3500r"><span class="title">где научиться массажу Гидромассажер для ванны Sanitas SLS 30</span><p>от <span class="price">3500</span> руб.</p></div></li>
						<li class="large"><img src="photos/bd43b02490b7b213cfdadf5f9ffcb1e0.jpeg" alt="массаж головы ребенка Вакуумный массажер Gezatone VACU 1301024" title="массаж головы ребенка Вакуумный массажер Gezatone VACU 1301024"><div class="box" page="vakuumnyy-massazher-gezatone-vacu-2990r"><span class="title">массаж головы ребенка Вакуумный массажер Gezatone VACU 1301024</span><p>от <span class="price">2990</span> руб.</p></div></li>
						<li class="large"><img src="photos/a29c87a6d37c3c1c350b3ca5da030cb3.jpeg" alt="зеркало телевизор Гидромассажная ванночка для ног BREMED BD 7500" title="зеркало телевизор Гидромассажная ванночка для ног BREMED BD 7500"><div class="box" page="gidromassazhnaya-vannochka-dlya-nog-bremed-bd-2450r"><span class="title">зеркало телевизор Гидромассажная ванночка для ног BREMED BD 7500</span><p>от <span class="price">2450</span> руб.</p></div></li>
						<li class="large"><img src="photos/7b364eeb2d902e56ea6ba4e90d9f40ee.jpeg" alt="массаж большой груди Прибор для ухода за кожей лица Gezatone Ionic-Ultrasonic m360" title="массаж большой груди Прибор для ухода за кожей лица Gezatone Ionic-Ultrasonic m360"><div class="box" page="pribor-dlya-uhoda-za-kozhey-lica-gezatone-ionicultrasonic-m-1600r"><span class="title">массаж большой груди Прибор для ухода за кожей лица Gezatone Ionic-Ultrasonic m360</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li><img src="photos/31368c22596515c6979410da5dab3354.jpeg" alt="пройти курсы массажа Машинки для стрижки Valera 642.01" title="пройти курсы массажа Машинки для стрижки Valera 642.01"><div class="box" page="mashinki-dlya-strizhki-valera-2200r"><span class="title">пройти курсы массажа Машинки для стрижки Valera 642.01</span><p>от <span class="price">2200</span> руб.</p></div></li>
						<li><img src="photos/c1e44ae0346cc39b27bb78d6ca139c3e.jpeg" alt="зеркало ниссан альмера Лосьон после депиляции Rica, ментоловый 250мл" title="зеркало ниссан альмера Лосьон после депиляции Rica, ментоловый 250мл"><div class="box" page="loson-posle-depilyacii-rica-mentolovyy-ml-600r"><span class="title">зеркало ниссан альмера Лосьон после депиляции Rica, ментоловый 250мл</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li><img src="photos/efe8506e7fb196b07be0aa71e9d36e0b.jpeg" alt="купить электробритву панасоник Фен Babyliss 6632E i-Pro 2000" title="купить электробритву панасоник Фен Babyliss 6632E i-Pro 2000"><div class="box" page="fen-babyliss-e-ipro-1790r"><span class="title">купить электробритву панасоник Фен Babyliss 6632E i-Pro 2000</span><p>от <span class="price">1790</span> руб.</p></div></li>
						<li><img src="photos/f98698f167b448092a3ab477739f68fd.jpeg" alt="солярий в новосибирске Фен Braun HD710" title="солярий в новосибирске Фен Braun HD710"><div class="box" page="fen-braun-hd-2240r"><span class="title">солярий в новосибирске Фен Braun HD710</span><p>от <span class="price">2240</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("zerkalo-nastolnoe-rosenberg-s-970r.php", 0, -4); if (file_exists("comments/zerkalo-nastolnoe-rosenberg-s-970r.php")) require_once "comments/zerkalo-nastolnoe-rosenberg-s-970r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="zerkalo-nastolnoe-rosenberg-s-970r.php" method="post" onsubmit="return checkForm(this)">
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