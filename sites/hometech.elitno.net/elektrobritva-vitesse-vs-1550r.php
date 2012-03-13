<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("elektrobritva-vitesse-vs-1550r.php","триммер для бровей");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("elektrobritva-vitesse-vs-1550r.php", $nick, $comment);
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
		<title>триммер для бровей Электробритва Vitesse VS-371  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="триммер для бровей, медовый массаж отзывы, массаж коломенская, солярий киров, сауна баня массаж, паспарту купить, весы электронные acs, 1000 зеркал, набор для выпрямления волос, весы порционные электронные, установка фена, купить восковой эпилятор, модели фенов, купить электробритву панасоник,  солярий в аренду">
		<meta name="description" content="триммер для бровей Vitesse VS-371 – роторная электробритва (с вращательной  системой) для мужчин, к...">
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
						<a class="photo" href="photos/2c5bb1673d91e8e164ce05829ac68a2e.jpeg" title="триммер для бровей Электробритва Vitesse VS-371"><img src="photos/2c5bb1673d91e8e164ce05829ac68a2e.jpeg" alt="триммер для бровей Электробритва Vitesse VS-371" title="триммер для бровей Электробритва Vitesse VS-371 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vypryamitel-valera-xstyle-3470r.php"><img src="photos/62f22bbdc8f17106e4896866b5a83f55.jpeg" alt="медовый массаж отзывы Выпрямитель Valera X-Style 645.01" title="медовый массаж отзывы Выпрямитель Valera X-Style 645.01"></a><h2>Выпрямитель Valera X-Style 645.01</h2></li>
							<li><a href="http://hometech.elitno.net/zerkalo-nastolnoe-rosenberg-s-890r.php"><img src="photos/f55d8efc38dd27166eefe179a3e555a4.jpeg" alt="массаж коломенская Зеркало настольное Rosenberg S-2084" title="массаж коломенская Зеркало настольное Rosenberg S-2084"></a><h2>Зеркало настольное Rosenberg S-2084</h2></li>
							<li><a href="http://hometech.elitno.net/nabor-nazalnyh-nasadok-k-irrigatoru-sht-donfeel-orm-270r.php"><img src="photos/9a2bc44bf6a5d738109f051af1b10196.jpeg" alt="солярий киров Набор назальных насадок к ирригатору (2 шт) DONFEEL OR-820M" title="солярий киров Набор назальных насадок к ирригатору (2 шт) DONFEEL OR-820M"></a><h2>Набор назальных насадок к ирригатору (2 шт) DONFEEL OR-820M</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>триммер для бровей Электробритва Vitesse VS-371</h1>
						<div class="tb"><p>Цена: от <span class="price">1550</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_21147.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Vitesse VS-371 – роторная электробритва (с вращательной  системой) для мужчин, которые ценят не только высокое качество, но и комфорт  бритья. Электробритва Vitesse VS-371 предназначена для сухого бритья, имеет 3 бритвенные  головки и систему повторения контуров лица – плавающие головки. К особенностям  данной модели относятся быстрая зарядка и триммер. Прибор заряжается от  аккумулятора (время зарядки: 8 часа) и имеет индикацию зарядки. В комплект с  электробритвой Vitesse VS-371 входит защитная крышка, дорожный чехол, щеточка  для чистки и подставка для зарядки.</p><p><strong>Характеристики:</strong></p><ul type=\disc\><li>Система бритья: роторная;</li><li>Способ бритья: сухое;</li><li>Система питания: от аккумулятора;</li><li>Количество бритвенных головок: 3;</li><li>Система повторения контуров лица: плавающие головки;</li><li>Аккумулятор, время зарядки: 8 ч;</li><li>Особенности: быстрая зарядка, триммер;</li><li>Индикация зарядки, степени зарядки, полной зарядки, очистки;</li><li>Напряжение: 220 В;</li><li>В комплекте: защитная крышка, дорожный чехол, щеточка для чистки;</li></ul><p><strong>Производитель: Франция</strong></p> триммер для бровей</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/06d523dd34a2cdda28a645a220259d39.jpeg" alt="сауна баня массаж Маникюрно-педикюрный набор Beurer MP40 (7 насадок) + BS29" title="сауна баня массаж Маникюрно-педикюрный набор Beurer MP40 (7 насадок) + BS29"><div class="box" page="manikyurnopedikyurnyy-nabor-beurer-mp-nasadok-bs-2000r"><span class="title">сауна баня массаж Маникюрно-педикюрный набор Beurer MP40 (7 насадок) + BS29</span><p>от <span class="price">2000</span> руб.</p></div></li>
						<li><img src="photos/b873fdbadf195aed2e807dd6c213c186.jpeg" alt="паспарту купить Вибромассажер HOUSE FIT НМ-3004" title="паспарту купить Вибромассажер HOUSE FIT НМ-3004"><div class="box" page="vibromassazher-house-fit-nm-6000r"><span class="title">паспарту купить Вибромассажер HOUSE FIT НМ-3004</span><p>от <span class="price">6000</span> руб.</p></div></li>
						<li><img src="photos/4b5374ef2a42b13f32ae833077b5a012.jpeg" alt="весы электронные acs Вибромассажер HOUSE FIT НМ-3003" title="весы электронные acs Вибромассажер HOUSE FIT НМ-3003"><div class="box" page="vibromassazher-house-fit-nm-7700r"><span class="title">весы электронные acs Вибромассажер HOUSE FIT НМ-3003</span><p>от <span class="price">7700</span> руб.</p></div></li>
						<li><img src="photos/0892325aa704adac2474d537e6a6f60b.jpeg" alt="1000 зеркал Массажер ZENET TL-2006B-A" title="1000 зеркал Массажер ZENET TL-2006B-A"><div class="box" page="massazher-zenet-tlba-1350r"><span class="title">1000 зеркал Массажер ZENET TL-2006B-A</span><p>от <span class="price">1350</span> руб.</p></div></li>
						<li class="large"><img src="photos/782aa0f31386fb09629ab9ef5d11ebc4.jpeg" alt="набор для выпрямления волос Массажер для профилактики варикоза Aviafit (2 шт)" title="набор для выпрямления волос Массажер для профилактики варикоза Aviafit (2 шт)"><div class="box" page="massazher-dlya-profilaktiki-varikoza-aviafit-sht-3000r"><span class="title">набор для выпрямления волос Массажер для профилактики варикоза Aviafit (2 шт)</span><p>от <span class="price">3000</span> руб.</p></div></li>
						<li class="large"><img src="photos/bf89764b2aa6c696f3c1950d65523b3a.jpeg" alt="весы порционные электронные Массажер Beurer MG220 для тела" title="весы порционные электронные Массажер Beurer MG220 для тела"><div class="box" page="massazher-beurer-mg-dlya-tela-8200r"><span class="title">весы порционные электронные Массажер Beurer MG220 для тела</span><p>от <span class="price">8200</span> руб.</p></div></li>
						<li class="large"><img src="photos/c44922d1ce093fa2b3e6d1218ae0b483.jpeg" alt="установка фена Массажная подушка Beurer MG145" title="установка фена Массажная подушка Beurer MG145"><div class="box" page="massazhnaya-podushka-beurer-mg-3050r"><span class="title">установка фена Массажная подушка Beurer MG145</span><p>от <span class="price">3050</span> руб.</p></div></li>
						<li><img src="photos/a5613a45eb2dc18d490d06da90b8c83c.jpeg" alt="купить восковой эпилятор Массажная накидка US-Medica Sensation LMC-070" title="купить восковой эпилятор Массажная накидка US-Medica Sensation LMC-070"><div class="box" page="massazhnaya-nakidka-usmedica-sensation-lmc-15000r"><span class="title">купить восковой эпилятор Массажная накидка US-Medica Sensation LMC-070</span><p>от <span class="price">15000</span> руб.</p></div></li>
						<li><img src="photos/d6d662f1051663df0b15aa06e33f4f63.jpeg" alt="модели фенов Прибор для ухода за кожей лица Gezatone Ionic-Ultratonic m365" title="модели фенов Прибор для ухода за кожей лица Gezatone Ionic-Ultratonic m365"><div class="box" page="pribor-dlya-uhoda-za-kozhey-lica-gezatone-ionicultratonic-m-2100r"><span class="title">модели фенов Прибор для ухода за кожей лица Gezatone Ionic-Ultratonic m365</span><p>от <span class="price">2100</span> руб.</p></div></li>
						<li><img src="photos/efe8506e7fb196b07be0aa71e9d36e0b.jpeg" alt="купить электробритву панасоник Фен Babyliss 6632E i-Pro 2000" title="купить электробритву панасоник Фен Babyliss 6632E i-Pro 2000"><div class="box" page="fen-babyliss-e-ipro-1790r"><span class="title">купить электробритву панасоник Фен Babyliss 6632E i-Pro 2000</span><p>от <span class="price">1790</span> руб.</p></div></li>
						<li><img src="photos/f2a381b1d13e277f597cdb5028212274.jpeg" alt="корпус зеркала заднего вида Насадка для зубных щеток Omron Point Brush SB-090" title="корпус зеркала заднего вида Насадка для зубных щеток Omron Point Brush SB-090"><div class="box" page="nasadka-dlya-zubnyh-schetok-omron-point-brush-sb-430r"><span class="title">корпус зеркала заднего вида Насадка для зубных щеток Omron Point Brush SB-090</span><p>от <span class="price">430</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("elektrobritva-vitesse-vs-1550r.php", 0, -4); if (file_exists("comments/elektrobritva-vitesse-vs-1550r.php")) require_once "comments/elektrobritva-vitesse-vs-1550r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="elektrobritva-vitesse-vs-1550r.php" method="post" onsubmit="return checkForm(this)">
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