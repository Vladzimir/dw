<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("fen-atlanta-atn-2930r.php","массаж в мурманске");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("fen-atlanta-atn-2930r.php", $nick, $comment);
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
		<title>массаж в мурманске Фен Atlanta АТН-882  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="массаж в мурманске, триммер philips отзывы, черное зеркало игра торрент, зеркала альбом, виды завивки волос фото, укладка волос на бигуди, солярии в красноярске, массаж сергиев посад, триммер для женщин, паспарту купить, вакансии маникюр педикюр, насадки для машинки для стрижки, фокусы с зеркалами, установка фена,  линии массажа">
		<meta name="description" content="массаж в мурманске Фен Atlanta АТН-882 – доступный прибор с эргономичным дизайном для сушки волос м...">
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
						<a class="photo" href="photos/2fd87a77eb352ca0621f915c1a9b541b.jpeg" title="массаж в мурманске Фен Atlanta АТН-882"><img src="photos/2fd87a77eb352ca0621f915c1a9b541b.jpeg" alt="массаж в мурманске Фен Atlanta АТН-882" title="массаж в мурманске Фен Atlanta АТН-882 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vypryamitel-dlya-volos-babyliss-ste-1520r.php"><img src="photos/3da7d41a61386c53690f58157cda6dc4.jpeg" alt="триммер philips отзывы Выпрямитель для волос BaByliss ST227E" title="триммер philips отзывы Выпрямитель для волос BaByliss ST227E"></a><h2>Выпрямитель для волос BaByliss ST227E</h2></li>
							<li><a href="http://hometech.elitno.net/darsonval-premium-klassa-s-nasadkami-ultratek-sd-2450r.php"><img src="photos/6b02b1d6efdd924366aa33cf1f72a17d.jpeg" alt="черное зеркало игра торрент Дарсонваль Премиум класса с 5 насадками Ультратек СД-199" title="черное зеркало игра торрент Дарсонваль Премиум класса с 5 насадками Ультратек СД-199"></a><h2>Дарсонваль Премиум класса с 5 насадками Ультратек СД-199</h2></li>
							<li><a href="http://hometech.elitno.net/zerkalo-beurer-bs-kosmeticheskoe-550r.php"><img src="photos/453dcbd53e683e2622b408d4ea19e1cc.jpeg" alt="зеркала альбом Зеркало Beurer BS05 косметическое" title="зеркала альбом Зеркало Beurer BS05 косметическое"></a><h2>Зеркало Beurer BS05 косметическое</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>массаж в мурманске Фен Atlanta АТН-882</h1>
						<div class="tb"><p>Цена: от <span class="price">2930</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19868.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Фен Atlanta АТН-882 – доступный прибор с эргономичным дизайном для сушки волос мощностью 1200 Вт со складной ручкой. Имеет два уровня интенсивности сушки и шнур с защитой от выкручивания. Не скользит в руках, благодаря специальному покрытию. Абсолютно безопасен, т. к. защищен от перегрева. Получил сертификат Госстандара РФ и соответствует европейским нормам безопасности. Снабжен петлей для подвешивания.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Складывающаяся ручка; <li>Защита от перегрева; <li>Два уровня интенсивности сушки; <li>Специальное противоскользящие покрытие; <li>Соответствует американским и европейским нормам безопасности; <li>Мощность 1200W; <li>230V, 50Hz <li>17 x 7 x 21.5 см </li></ul><p><strong>Производитель: США</strong></p> массаж в мурманске</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/bd4f4a0171189fffb9c852e095d9e936.jpeg" alt="виды завивки волос фото Ирригатор полости рта Bremed BD 7200" title="виды завивки волос фото Ирригатор полости рта Bremed BD 7200"><div class="box"><a href="http://hometech.elitno.net/irrigator-polosti-rta-bremed-bd-2300r.php"><h3 class="title">виды завивки волос фото Ирригатор полости рта Bremed BD 7200</h3><p>от <span class="price">2300</span> руб.</p></a></div></li>
						<li><img src="photos/3ccd3a7a537feb526e26b8db85765ae5.jpeg" alt="укладка волос на бигуди Маникюрный набор Sanitas SMA-70" title="укладка волос на бигуди Маникюрный набор Sanitas SMA-70"><div class="box" page="manikyurnyy-nabor-sanitas-sma-2500r"><span class="title">укладка волос на бигуди Маникюрный набор Sanitas SMA-70</span><p>от <span class="price">2500</span> руб.</p></div></li>
						<li><img src="photos/d6a81b5695856acbb870fca5e56fa343.jpeg" alt="солярии в красноярске Аппликатор Ляпко Пояс Малыш 5,8" title="солярии в красноярске Аппликатор Ляпко Пояс Малыш 5,8"><div class="box" page="applikator-lyapko-poyas-malysh-920r"><span class="title">солярии в красноярске Аппликатор Ляпко Пояс Малыш 5,8</span><p>от <span class="price">920</span> руб.</p></div></li>
						<li><img src="photos/109ab999609bcd7a247d413a4e6a9ec7.jpeg" alt="массаж сергиев посад Массажер для спины Beurer MG 230" title="массаж сергиев посад Массажер для спины Beurer MG 230"><div class="box" page="massazher-dlya-spiny-beurer-mg-12000r"><span class="title">массаж сергиев посад Массажер для спины Beurer MG 230</span><p>от <span class="price">12000</span> руб.</p></div></li>
						<li class="large"><img src="photos/009fd98d06242ce12bfb8e391acb85ea.jpeg" alt="триммер для женщин Массажер-подушка Gezatone AMG392 1301100" title="триммер для женщин Массажер-подушка Gezatone AMG392 1301100"><div class="box" page="massazherpodushka-gezatone-amg-2490r"><span class="title">триммер для женщин Массажер-подушка Gezatone AMG392 1301100</span><p>от <span class="price">2490</span> руб.</p></div></li>
						<li class="large"><img src="photos/b873fdbadf195aed2e807dd6c213c186.jpeg" alt="паспарту купить Вибромассажер HOUSE FIT НМ-3004" title="паспарту купить Вибромассажер HOUSE FIT НМ-3004"><div class="box" page="vibromassazher-house-fit-nm-6000r"><span class="title">паспарту купить Вибромассажер HOUSE FIT НМ-3004</span><p>от <span class="price">6000</span> руб.</p></div></li>
						<li class="large"><img src="photos/75b05ae33b613e40ffe8181cdc09a99b.jpeg" alt="вакансии маникюр педикюр Массажер ZENET TL-MHT-H" title="вакансии маникюр педикюр Массажер ZENET TL-MHT-H"><div class="box" page="massazher-zenet-tlmhth-1250r"><span class="title">вакансии маникюр педикюр Массажер ZENET TL-MHT-H</span><p>от <span class="price">1250</span> руб.</p></div></li>
						<li><img src="photos/ae3ee4c3437d43e701e69a64da50647c.jpeg" alt="насадки для машинки для стрижки Капиллярный массажер Пальчики Шиатсу" title="насадки для машинки для стрижки Капиллярный массажер Пальчики Шиатсу"><div class="box" page="kapillyarnyy-massazher-palchiki-shiatsu-120r"><span class="title">насадки для машинки для стрижки Капиллярный массажер Пальчики Шиатсу</span><p>от <span class="price">120</span> руб.</p></div></li>
						<li><img src="photos/80eb5294ed756e197cb03a6669f75dbb.jpeg" alt="фокусы с зеркалами Массажная накидка Sanitas  SMG 160" title="фокусы с зеркалами Массажная накидка Sanitas  SMG 160"><div class="box" page="massazhnaya-nakidka-sanitas-smg-4000r"><span class="title">фокусы с зеркалами Массажная накидка Sanitas  SMG 160</span><p>от <span class="price">4000</span> руб.</p></div></li>
						<li><img src="photos/c44922d1ce093fa2b3e6d1218ae0b483.jpeg" alt="установка фена Массажная подушка Beurer MG145" title="установка фена Массажная подушка Beurer MG145"><div class="box" page="massazhnaya-podushka-beurer-mg-3050r"><span class="title">установка фена Массажная подушка Beurer MG145</span><p>от <span class="price">3050</span> руб.</p></div></li>
						<li><img src="photos/945c138743c182a77eab0350446922cc.jpeg" alt="купить эпилятор philips Триммер Babyliss E600XE для стрижки волос в носу и ушах" title="купить эпилятор philips Триммер Babyliss E600XE для стрижки волос в носу и ушах"><div class="box" page="trimmer-babyliss-exe-dlya-strizhki-volos-v-nosu-i-ushah-590r"><span class="title">купить эпилятор philips Триммер Babyliss E600XE для стрижки волос в носу и ушах</span><p>от <span class="price">590</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("fen-atlanta-atn-2930r.php", 0, -4); if (file_exists("comments/fen-atlanta-atn-2930r.php")) require_once "comments/fen-atlanta-atn-2930r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="fen-atlanta-atn-2930r.php" method="post" onsubmit="return checkForm(this)">
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