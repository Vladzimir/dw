<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("epilyator-braun-xelle-2800r.php","машинка для стрижки волос panasonic");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("epilyator-braun-xelle-2800r.php", $nick, $comment);
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
		<title>машинка для стрижки волос panasonic Эпилятор Braun 5280 Xelle  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="машинка для стрижки волос panasonic, косметическое зеркало купить, что значит зеркало, ровента фен щетка цена, весы электронные ювелирные, массаж стопы ребенка, зеркало заднего вида 2110, выпрямление волос кератином отзывы, сгорела в солярии что делать, расческа триммер, зеркала лорак песня, самостоятельный массаж лица, сонник зеркало разбитое, ирригатор waterpik ultra,  игры салон красоты маникюр педикюр">
		<meta name="description" content="машинка для стрижки волос panasonic С немецким эпилятором вам будет гарантирована гладкая кожа до 4-х недель. Среди ...">
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
						<a class="photo" href="photos/10ceb77aa96c6d5e616328dc5dbf9640.jpeg" title="машинка для стрижки волос panasonic Эпилятор Braun 5280 Xelle"><img src="photos/10ceb77aa96c6d5e616328dc5dbf9640.jpeg" alt="машинка для стрижки волос panasonic Эпилятор Braun 5280 Xelle" title="машинка для стрижки волос panasonic Эпилятор Braun 5280 Xelle -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-beurer-ps-2100r.php"><img src="photos/d9264ad16a0de4ef44c572b9c1a57a33.jpeg" alt="косметическое зеркало купить Весы электронные напольные Beurer PS24" title="косметическое зеркало купить Весы электронные напольные Beurer PS24"></a><h2>Весы электронные напольные Beurer PS24</h2></li>
							<li><a href="http://hometech.elitno.net/elektroschipcy-dlya-volos-atlanta-atn-500r.php"><img src="photos/d3b4eb483f82d34f6a33d99e454414ea.jpeg" alt="что значит зеркало Электрощипцы для волос Atlanta АТН-833" title="что значит зеркало Электрощипцы для волос Atlanta АТН-833"></a><h2>Электрощипцы для волос Atlanta АТН-833</h2></li>
							<li><a href="http://hometech.elitno.net/termopoyas-dlya-pohudeniya-trimmer-300r.php"><img src="photos/92ff75b9dfa5ef091ca17cf4b292a150.jpeg" alt="ровента фен щетка цена Термопояс для похудения Trimmer" title="ровента фен щетка цена Термопояс для похудения Trimmer"></a><h2>Термопояс для похудения Trimmer</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>машинка для стрижки волос panasonic Эпилятор Braun 5280 Xelle</h1>
						<div class="tb"><p>Цена: от <span class="price">2800</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_12030.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>С немецким эпилятором вам будет гарантирована гладкая кожа до 4-х недель. Среди достоинств изделия можно отметить: уникальную технологию Silkepil с системой Smartlight, а также 40 пинцетов, которые удаляют значительно больше волос за одно движение.</p><p>В комплект входят: охлаждающая рукавица, щетка для очистки, футляр, а также насадка для бритья, массажер и насадка-триммер. Модель идеально подходит как для стайлинга в области бикини, так и для обычной эпиляции.</p><p><b>Характеристики: </b></p><ul type=disc><li>Тип: эпилятор <li>Назначение: стайлинг в области бикини, эпиляция <li>Число скоростей: 2 <li>Питание: от сети <li>Количество пинцетов: 40 <li>Подсветка: есть <li>Использование с применением пены: нет <li>Насадки: для бритья, массажер, насадка-триммер <li>В комплекте: охлаждающая рукавица, щетка для очистки, футляр <li>Насадка EfficiencyPro, обеспечивающая максимальный контакт с кожей</li></ul><p><b>Производитель:</b> Braun.</p><p><b>Страна:</b> Германия.</p> машинка для стрижки волос panasonic</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/b22e40d494cd6893112bef0e9fe9ab49.jpeg" alt="весы электронные ювелирные Термопояс ВУЛКАН  VULKAN Belt" title="весы электронные ювелирные Термопояс ВУЛКАН  VULKAN Belt"><div class="box" page="termopoyas-vulkan-vulkan-belt-350r"><span class="title">весы электронные ювелирные Термопояс ВУЛКАН  VULKAN Belt</span><p>от <span class="price">350</span> руб.</p></div></li>
						<li><img src="photos/ba9e4c83bef0677448f10a87047b3b54.jpeg" alt="массаж стопы ребенка Массажер Beurer EA34 для акупунктурой терапии" title="массаж стопы ребенка Массажер Beurer EA34 для акупунктурой терапии"><div class="box" page="massazher-beurer-ea-dlya-akupunkturoy-terapii-2850r"><span class="title">массаж стопы ребенка Массажер Beurer EA34 для акупунктурой терапии</span><p>от <span class="price">2850</span> руб.</p></div></li>
						<li><img src="photos/efecfdd903b36bfb57ecf33e62da8ced.jpeg" alt="зеркало заднего вида 2110 Вибромассажер Clear Fit Extra Beauty CF 135 E" title="зеркало заднего вида 2110 Вибромассажер Clear Fit Extra Beauty CF 135 E"><div class="box" page="vibromassazher-clear-fit-extra-beauty-cf-e-9490r"><span class="title">зеркало заднего вида 2110 Вибромассажер Clear Fit Extra Beauty CF 135 E</span><p>от <span class="price">9490</span> руб.</p></div></li>
						<li><img src="photos/9547fcca4fcaaeea1c99d9d955e1ecd8.jpeg" alt="выпрямление волос кератином отзывы Массажер для ног US Medica Acupuncture FM-70" title="выпрямление волос кератином отзывы Массажер для ног US Medica Acupuncture FM-70"><div class="box" page="massazher-dlya-nog-us-medica-acupuncture-fm-21000r"><span class="title">выпрямление волос кератином отзывы Массажер для ног US Medica Acupuncture FM-70</span><p>от <span class="price">21000</span> руб.</p></div></li>
						<li class="large"><img src="photos/36ed96a455a01b62383f46ae89490f91.jpeg" alt="сгорела в солярии что делать Массажер для ног Yamaguchi YA-F8B черный" title="сгорела в солярии что делать Массажер для ног Yamaguchi YA-F8B черный"><div class="box" page="massazher-dlya-nog-yamaguchi-yafb-chernyy-15000r"><span class="title">сгорела в солярии что делать Массажер для ног Yamaguchi YA-F8B черный</span><p>от <span class="price">15000</span> руб.</p></div></li>
						<li class="large"><img src="photos/ddeceb0933fcd3947d8b9a4bd8a25da2.jpeg" alt="расческа триммер Подушка массажная BODYKRAFT С-33" title="расческа триммер Подушка массажная BODYKRAFT С-33"><div class="box" page="podushka-massazhnaya-bodykraft-s-4950r"><span class="title">расческа триммер Подушка массажная BODYKRAFT С-33</span><p>от <span class="price">4950</span> руб.</p></div></li>
						<li class="large"><img src="photos/7027adb71f2155ad74bf69c108416d64.jpeg" alt="зеркала лорак песня Прибор для ухода за кожей лица Gezatone Superlifting m355 с функцией светотерапии" title="зеркала лорак песня Прибор для ухода за кожей лица Gezatone Superlifting m355 с функцией светотерапии"><div class="box" page="pribor-dlya-uhoda-za-kozhey-lica-gezatone-superlifting-m-s-funkciey-svetoterapii-3650r"><span class="title">зеркала лорак песня Прибор для ухода за кожей лица Gezatone Superlifting m355 с функцией светотерапии</span><p>от <span class="price">3650</span> руб.</p></div></li>
						<li><img src="photos/ae9da361619c92f9a8cf3fb8e35d98ca.jpeg" alt="самостоятельный массаж лица Corioliss Brush Collection Ионный Термо-Брашинг" title="самостоятельный массаж лица Corioliss Brush Collection Ионный Термо-Брашинг"><div class="box" page="corioliss-brush-collection-ionnyy-termobrashing-630r"><span class="title">самостоятельный массаж лица Corioliss Brush Collection Ионный Термо-Брашинг</span><p>от <span class="price">630</span> руб.</p></div></li>
						<li><img src="photos/e69da6f2452895f2eb5bd226ad7e5f3c.jpeg" alt="сонник зеркало разбитое Фен Valera Swiss Turbo 7000RC Rotocord" title="сонник зеркало разбитое Фен Valera Swiss Turbo 7000RC Rotocord"><div class="box" page="fen-valera-swiss-turbo-rc-rotocord-2920r"><span class="title">сонник зеркало разбитое Фен Valera Swiss Turbo 7000RC Rotocord</span><p>от <span class="price">2920</span> руб.</p></div></li>
						<li><img src="photos/0339a99d9db607aa03bad2eea7d85456.jpeg" alt="ирригатор waterpik ultra Фен Corioliss Neon" title="ирригатор waterpik ultra Фен Corioliss Neon"><div class="box" page="fen-corioliss-neon-5350r"><span class="title">ирригатор waterpik ultra Фен Corioliss Neon</span><p>от <span class="price">5350</span> руб.</p></div></li>
						<li><img src="photos/c8cf21dd7e22c1163270fc605333cbb1.jpeg" alt="линии массажа Фен Atlanta АТН-88" title="линии массажа Фен Atlanta АТН-88"><div class="box" page="fen-atlanta-atn-650r"><span class="title">линии массажа Фен Atlanta АТН-88</span><p>от <span class="price">650</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("epilyator-braun-xelle-2800r.php", 0, -4); if (file_exists("comments/epilyator-braun-xelle-2800r.php")) require_once "comments/epilyator-braun-xelle-2800r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="epilyator-braun-xelle-2800r.php" method="post" onsubmit="return checkForm(this)">
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