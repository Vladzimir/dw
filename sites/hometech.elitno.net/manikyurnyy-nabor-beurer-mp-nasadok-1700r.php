<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("manikyurnyy-nabor-beurer-mp-nasadok-1700r.php","набор для массажа");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("manikyurnyy-nabor-beurer-mp-nasadok-1700r.php", $nick, $comment);
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
		<title>набор для массажа Маникюрный набор Beurer MP 40  (7 насадок)  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="набор для массажа, туалетная бумага оптом, массаж в петрозаводске, что значит зеркало, модели фенов, домашние эпиляторы отзывы, укладка волос на бигуди, зеркало соната, купить восковой эпилятор, завивка волос отзывы, массаж при гайморите, солярий во владимире, массаж женщин смотреть бесплатно, носовые платочки,  фен makita">
		<meta name="description" content="набор для массажа Красивые ногти мечтает иметь каждая женщина. Более того, каждая настоящая женщин...">
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
						<a class="photo" href="photos/8722aa0f57aba4bc2517b58a6e461eb5.jpeg" title="набор для массажа Маникюрный набор Beurer MP 40  (7 насадок)"><img src="photos/8722aa0f57aba4bc2517b58a6e461eb5.jpeg" alt="набор для массажа Маникюрный набор Beurer MP 40  (7 насадок)" title="набор для массажа Маникюрный набор Beurer MP 40  (7 насадок) -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-bytovye-tanita-hd-1350r.php"><img src="photos/76a17a21b8b03e258d15d316c04619cf.jpeg" alt="туалетная бумага оптом Весы бытовые Tanita HD-382" title="туалетная бумага оптом Весы бытовые Tanita HD-382"></a><h2>Весы бытовые Tanita HD-382</h2></li>
							<li><a href="http://hometech.elitno.net/analizator-zhirovoy-massy-sostava-tela-tanita-bc-5780r.php"><img src="photos/3f6dce72a9592eff2c7332cea93e75fb.jpeg" alt="массаж в петрозаводске Анализатор жировой массы (состава тела) Tanita BC-582" title="массаж в петрозаводске Анализатор жировой массы (состава тела) Tanita BC-582"></a><h2>Анализатор жировой массы (состава тела) Tanita BC-582</h2></li>
							<li><a href="http://hometech.elitno.net/elektroschipcy-dlya-volos-atlanta-atn-500r.php"><img src="photos/d3b4eb483f82d34f6a33d99e454414ea.jpeg" alt="что значит зеркало Электрощипцы для волос Atlanta АТН-833" title="что значит зеркало Электрощипцы для волос Atlanta АТН-833"></a><h2>Электрощипцы для волос Atlanta АТН-833</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>набор для массажа Маникюрный набор Beurer MP 40  (7 насадок)</h1>
						<div class="tb"><p>Цена: от <span class="price">1700</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_1235.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Красивые ногти мечтает иметь каждая женщина. Более того, каждая настоящая женщина должна иметь красивые ногти. Полноценный уход за ногтями обеспечит <strong>маникюрный набор Beurer MP 40</strong>. С помощь этого устройства немецкой компании Beurer, давно зарекомендовавшей себя на рынке товаров для красоты и здоровья, вы сможете сделать прекрасный маникюр в домашних условиях, не затрачивая драгоценное время на поход в салон красоты. Все насадки имеют сапфировое покрытие, два режима работы прибора и возможность переключения вращения устройства обеспечивают комплексный уход за вашими ногтями.</p><p><b>Технические характеристики:</b></p><ul type=disc><li>Насадки: 7 сапфировых насадок <li>Функциональные ступени: 2 <li>Переключение вращения: вправо/влево <li>Работа от сети <li>Чехол для хранения </li></ul><p><strong>Производитель: </strong>Beurer (Германия)</p><p><b>Гарантия:</b> 2 года</p> набор для массажа</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/9a620fdb399918000af975e9d69559f4.jpeg" alt="модели фенов Электрощипцы для выпрямления волос Atlanta АТН-838" title="модели фенов Электрощипцы для выпрямления волос Atlanta АТН-838"><div class="box" page="elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-600r"><span class="title">модели фенов Электрощипцы для выпрямления волос Atlanta АТН-838</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li><img src="photos/84dba165c6ff6432b2067b74a9b58205.jpeg" alt="домашние эпиляторы отзывы Набор стандартных насадок к ирригатору (2 шт) DONFEEL OR-820M" title="домашние эпиляторы отзывы Набор стандартных насадок к ирригатору (2 шт) DONFEEL OR-820M"><div class="box" page="nabor-standartnyh-nasadok-k-irrigatoru-sht-donfeel-orm-220r"><span class="title">домашние эпиляторы отзывы Набор стандартных насадок к ирригатору (2 шт) DONFEEL OR-820M</span><p>от <span class="price">220</span> руб.</p></div></li>
						<li><img src="photos/3ccd3a7a537feb526e26b8db85765ae5.jpeg" alt="укладка волос на бигуди Маникюрный набор Sanitas SMA-70" title="укладка волос на бигуди Маникюрный набор Sanitas SMA-70"><div class="box" page="manikyurnyy-nabor-sanitas-sma-2500r"><span class="title">укладка волос на бигуди Маникюрный набор Sanitas SMA-70</span><p>от <span class="price">2500</span> руб.</p></div></li>
						<li><img src="photos/8599b1c1b0dc418f3853c3b1676d22a5.jpeg" alt="зеркало соната Массажер Супербол" title="зеркало соната Массажер Супербол"><div class="box" page="massazher-superbol-600r"><span class="title">зеркало соната Массажер Супербол</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li class="large"><img src="photos/a5613a45eb2dc18d490d06da90b8c83c.jpeg" alt="купить восковой эпилятор Массажная накидка US-Medica Sensation LMC-070" title="купить восковой эпилятор Массажная накидка US-Medica Sensation LMC-070"><div class="box" page="massazhnaya-nakidka-usmedica-sensation-lmc-15000r"><span class="title">купить восковой эпилятор Массажная накидка US-Medica Sensation LMC-070</span><p>от <span class="price">15000</span> руб.</p></div></li>
						<li class="large"><img src="photos/e017b0d2d9ea317c7c27cd62e8804f5a.jpeg" alt="завивка волос отзывы Массажная накидка BODYKRAFT К 51" title="завивка волос отзывы Массажная накидка BODYKRAFT К 51"><div class="box" page="massazhnaya-nakidka-bodykraft-k-6590r"><span class="title">завивка волос отзывы Массажная накидка BODYKRAFT К 51</span><p>от <span class="price">6590</span> руб.</p></div></li>
						<li class="large"><img src="photos/80e1549e8ba52d130ff6ca8cfae7cb7f.jpeg" alt="массаж при гайморите Массажер ультразвуковой импульсный Gezatone Ultra-Tonik m115 1301035" title="массаж при гайморите Массажер ультразвуковой импульсный Gezatone Ultra-Tonik m115 1301035"><div class="box" page="massazher-ultrazvukovoy-impulsnyy-gezatone-ultratonik-m-3900r"><span class="title">массаж при гайморите Массажер ультразвуковой импульсный Gezatone Ultra-Tonik m115 1301035</span><p>от <span class="price">3900</span> руб.</p></div></li>
						<li><img src="photos/fe21e6506e33786f24be8409558d7b64.jpeg" alt="солярий во владимире Фен Vitek VT-2262" title="солярий во владимире Фен Vitek VT-2262"><div class="box" page="fen-vitek-vt-1050r"><span class="title">солярий во владимире Фен Vitek VT-2262</span><p>от <span class="price">1050</span> руб.</p></div></li>
						<li><img src="photos/7f9fc77edfcd112c2dc89865bc81f054.jpeg" alt="массаж женщин смотреть бесплатно Фен Braun HD750" title="массаж женщин смотреть бесплатно Фен Braun HD750"><div class="box" page="fen-braun-hd-2480r"><span class="title">массаж женщин смотреть бесплатно Фен Braun HD750</span><p>от <span class="price">2480</span> руб.</p></div></li>
						<li><img src="photos/8500a99a4fd5081d59e0f1449e9b24b5.jpeg" alt="носовые платочки Фен Atlanta АТН-89" title="носовые платочки Фен Atlanta АТН-89"><div class="box" page="fen-atlanta-atn-840r"><span class="title">носовые платочки Фен Atlanta АТН-89</span><p>от <span class="price">840</span> руб.</p></div></li>
						<li><img src="photos/65ef91f9e39ae9c8e58e13820442b2ca.jpeg" alt="комоды с зеркалом фото Насадка для детской зубной щетки BRAUN EB10-2" title="комоды с зеркалом фото Насадка для детской зубной щетки BRAUN EB10-2"><div class="box" page="nasadka-dlya-detskoy-zubnoy-schetki-braun-eb-550r"><span class="title">комоды с зеркалом фото Насадка для детской зубной щетки BRAUN EB10-2</span><p>от <span class="price">550</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("manikyurnyy-nabor-beurer-mp-nasadok-1700r.php", 0, -4); if (file_exists("comments/manikyurnyy-nabor-beurer-mp-nasadok-1700r.php")) require_once "comments/manikyurnyy-nabor-beurer-mp-nasadok-1700r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="manikyurnyy-nabor-beurer-mp-nasadok-1700r.php" method="post" onsubmit="return checkForm(this)">
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