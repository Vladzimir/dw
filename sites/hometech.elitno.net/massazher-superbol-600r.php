<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("massazher-superbol-600r.php","массаж глаз новорожденного");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("massazher-superbol-600r.php", $nick, $comment);
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
		<title>массаж глаз новорожденного Массажер Супербол  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="массаж глаз новорожденного, приготовление фена, продажа машинок для стрижки, девочки в солярии, эпиляторы браун цены, техника массажа сердца, зеркало напротив кровати, зеркало opel astra h, купить хороший эпилятор, хорошие электронные весы, каталог зеркал, набор для выпрямления волос, полный массаж, бразильское выпрямление волос отзывы,  зеркала на ниву">
		<meta name="description" content="массаж глаз новорожденного Четыре массажных шара массируют ваше тело, благоприятно воздействуя на весь орга...">
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
						<a class="photo" href="photos/8599b1c1b0dc418f3853c3b1676d22a5.jpeg" title="массаж глаз новорожденного Массажер Супербол"><img src="photos/8599b1c1b0dc418f3853c3b1676d22a5.jpeg" alt="массаж глаз новорожденного Массажер Супербол" title="массаж глаз новорожденного Массажер Супербол -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-beurer-gs-1500r-2.php"><img src="photos/c9643809c4b783e33f32febe779b2b8d.jpeg" alt="приготовление фена Весы электронные напольные Beurer GS19" title="приготовление фена Весы электронные напольные Beurer GS19"></a><h2>Весы электронные напольные Beurer GS19</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-s-analizatorom-zhira-bg-2950r.php"><img src="photos/71c60833c0bdd329311fc5385da9ccc3.gif" alt="продажа машинок для стрижки Весы электронные напольные с анализатором жира BG39" title="продажа машинок для стрижки Весы электронные напольные с анализатором жира BG39"></a><h2>Весы электронные напольные с анализатором жира BG39</h2></li>
							<li><a href="http://hometech.elitno.net/babyliss-e-zerkalo-s-i-kratnym-uvelicheniem-1340r.php"><img src="photos/77f53115128928974f2537ac5528713b.jpeg" alt="девочки в солярии Babyliss 8435Е Зеркало с 5-и кратным увеличением" title="девочки в солярии Babyliss 8435Е Зеркало с 5-и кратным увеличением"></a><h2>Babyliss 8435Е Зеркало с 5-и кратным увеличением</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>массаж глаз новорожденного Массажер Супербол</h1>
						<div class="tb"><p>Цена: от <span class="price">600</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_1158.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Четыре массажных шара массируют ваше тело, благоприятно воздействуя на весь организм. Происходит расслабление мышц, успокаивается нервная система, за счет стимуляции кровоснабжения появляется ощущение тепла. Расположение массажных шаров расположено так, чтобы воздействие происходило на все группы мышц. Стимулируя биологически активные точки на теле человека, <strong>Супербол</strong> активно влияет на биоэнергетику, нормализуя обмен веществ и устраняя целлюлитные образование. Регулярно пользуясь массажером, вы приобретаете здоровую кожу и отличное настроение. Благодаря небольшим размерам <strong>массажер Супербол </strong>может сопровождать вас повсюду.</p><p>Массажер «СУПЕРБОЛ» поможет:</p><ul type=disc><li>устранить мышечные боли, невралгии, усталость; <li>улучшить циркуляцию крови, нормализовать обмен веществ; <li>избавить от целлюлита и жировых отложений, подкорректировать контуры тела;</li></ul><p><b>Производитель:</b> ООО «Дельта-Терм» (Россия, Москва)</p> массаж глаз новорожденного</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/5a23805b006653a6cc417fee14de0eae.jpeg" alt="эпиляторы браун цены Прибор для получения «Живой» и «Мертвой» воды Мелеста" title="эпиляторы браун цены Прибор для получения «Живой» и «Мертвой» воды Мелеста"><div class="box" page="pribor-dlya-polucheniya-«zhivoy»-i-«mertvoy»-vody-melesta-1190r"><span class="title">эпиляторы браун цены Прибор для получения «Живой» и «Мертвой» воды Мелеста</span><p>от <span class="price">1190</span> руб.</p></div></li>
						<li><img src="photos/7bf9d94bef7f7d982ce7407ebebbc6e0.jpeg" alt="техника массажа сердца Сменный картридж к осеребрителю Георгий" title="техника массажа сердца Сменный картридж к осеребрителю Георгий"><div class="box" page="smennyy-kartridzh-k-oserebritelyu-georgiy-430r"><span class="title">техника массажа сердца Сменный картридж к осеребрителю Георгий</span><p>от <span class="price">430</span> руб.</p></div></li>
						<li><img src="photos/be41cad5680b07f0b91fdd49a1969dba.jpeg" alt="зеркало напротив кровати Пояс-сауна для похудения Sauna Belt" title="зеркало напротив кровати Пояс-сауна для похудения Sauna Belt"><div class="box" page="poyassauna-dlya-pohudeniya-sauna-belt-690r"><span class="title">зеркало напротив кровати Пояс-сауна для похудения Sauna Belt</span><p>от <span class="price">690</span> руб.</p></div></li>
						<li><img src="photos/549a47ec5fa6317ff0310a2c99b5bd9b.jpeg" alt="зеркало opel astra h Массажный стол HOUSE FIT НО-1007" title="зеркало opel astra h Массажный стол HOUSE FIT НО-1007"><div class="box" page="massazhnyy-stol-house-fit-no-11500r"><span class="title">зеркало opel astra h Массажный стол HOUSE FIT НО-1007</span><p>от <span class="price">11500</span> руб.</p></div></li>
						<li class="large"><img src="photos/bdf8de6c43fee60b8e439a0c6ac204b1.jpeg" alt="купить хороший эпилятор Массажное кресло US Medica Cardio" title="купить хороший эпилятор Массажное кресло US Medica Cardio"><div class="box" page="massazhnoe-kreslo-us-medica-cardio-150000r"><span class="title">купить хороший эпилятор Массажное кресло US Medica Cardio</span><p>от <span class="price">150000</span> руб.</p></div></li>
						<li class="large"><img src="photos/20c4dce42cd699155467e91509a5235b.jpeg" alt="хорошие электронные весы Массажер для шеи Beurer MG150" title="хорошие электронные весы Массажер для шеи Beurer MG150"><div class="box" page="massazher-dlya-shei-beurer-mg-4500r"><span class="title">хорошие электронные весы Массажер для шеи Beurer MG150</span><p>от <span class="price">4500</span> руб.</p></div></li>
						<li class="large"><img src="photos/2bafeeb3a10bb6c208d12092d2b70718.jpeg" alt="каталог зеркал Массажер ZENET TL-MHT-A" title="каталог зеркал Массажер ZENET TL-MHT-A"><div class="box" page="massazher-zenet-tlmhta-1850r"><span class="title">каталог зеркал Массажер ZENET TL-MHT-A</span><p>от <span class="price">1850</span> руб.</p></div></li>
						<li><img src="photos/782aa0f31386fb09629ab9ef5d11ebc4.jpeg" alt="набор для выпрямления волос Массажер для профилактики варикоза Aviafit (2 шт)" title="набор для выпрямления волос Массажер для профилактики варикоза Aviafit (2 шт)"><div class="box" page="massazher-dlya-profilaktiki-varikoza-aviafit-sht-3000r"><span class="title">набор для выпрямления волос Массажер для профилактики варикоза Aviafit (2 шт)</span><p>от <span class="price">3000</span> руб.</p></div></li>
						<li><img src="photos/644518c616a9d636ff9cb53435672d46.jpeg" alt="полный массаж Подушка массажная" title="полный массаж Подушка массажная"><div class="box" page="podushka-massazhnaya-3000r"><span class="title">полный массаж Подушка массажная</span><p>от <span class="price">3000</span> руб.</p></div></li>
						<li><img src="photos/b0a6b1ca9fba7303a8eb561892d4f43d.jpeg" alt="бразильское выпрямление волос отзывы Машинка для стрижки  Atlanta АТН-841" title="бразильское выпрямление волос отзывы Машинка для стрижки  Atlanta АТН-841"><div class="box" page="mashinka-dlya-strizhki-atlanta-atn-590r"><span class="title">бразильское выпрямление волос отзывы Машинка для стрижки  Atlanta АТН-841</span><p>от <span class="price">590</span> руб.</p></div></li>
						<li><img src="photos/9eba2371b26d150a840e7f4a6794703c.jpeg" alt="фен на аккумуляторах Солярий для лица Efbe-Schott 834" title="фен на аккумуляторах Солярий для лица Efbe-Schott 834"><div class="box" page="solyariy-dlya-lica-efbeschott-4300r"><span class="title">фен на аккумуляторах Солярий для лица Efbe-Schott 834</span><p>от <span class="price">4300</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("massazher-superbol-600r.php", 0, -4); if (file_exists("comments/massazher-superbol-600r.php")) require_once "comments/massazher-superbol-600r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="massazher-superbol-600r.php" method="post" onsubmit="return checkForm(this)">
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