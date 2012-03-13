<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("epilyator-braun-2100r.php","чувственный массаж");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("epilyator-braun-2100r.php", $nick, $comment);
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
		<title>чувственный массаж Эпилятор Braun 3270  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="чувственный массаж, машинка для стрижки киев, солярий для лица купить, замена бокового зеркала, эпиляторы браун цены, что значит зеркало, зеркала в ростове, профессиональные фены отзывы, успенская зеркала, виды завивки волос фото, массаж лица соболь, правильный массаж простаты, асахи массаж для тела, авто зеркало купить,  химия на крупные бигуди">
		<meta name="description" content="чувственный массаж Эпилятор с системой из 20 пинцетов быстро и деликатно удаляет волосяной покров, ...">
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
						<a class="photo" href="photos/764b6b9633e467ea63df82cf29b6c602.jpeg" title="чувственный массаж Эпилятор Braun 3270"><img src="photos/764b6b9633e467ea63df82cf29b6c602.jpeg" alt="чувственный массаж Эпилятор Braun 3270" title="чувственный массаж Эпилятор Braun 3270 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/bigudi-babyliss-e-termobigudi-1340r.php"><img src="photos/6dfd693fbbe6f82a445e062d56e6a848.jpeg" alt="машинка для стрижки киев Бигуди Babyliss 3060E (термобигуди)" title="машинка для стрижки киев Бигуди Babyliss 3060E (термобигуди)"></a><h2>Бигуди Babyliss 3060E (термобигуди)</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-s-analizatorom-zhira-tanita-bc-3500r.php"><img src="photos/bf6add516a2c682a354892d59e1c1b1a.jpeg" alt="солярий для лица купить Весы электронные напольные с анализатором жира Tanita BC-543" title="солярий для лица купить Весы электронные напольные с анализатором жира Tanita BC-543"></a><h2>Весы электронные напольные с анализатором жира Tanita BC-543</h2></li>
							<li><a href="http://hometech.elitno.net/analizator-zhira-tanita-um-sv-2000r.php"><img src="photos/5fe7b8cbed1da4a369915cce43684931.jpeg" alt="замена бокового зеркала Анализатор жира Tanita UM-071 (SV)" title="замена бокового зеркала Анализатор жира Tanita UM-071 (SV)"></a><h2>Анализатор жира Tanita UM-071 (SV)</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>чувственный массаж Эпилятор Braun 3270</h1>
						<div class="tb"><p>Цена: от <span class="price">2100</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_12027.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Эпилятор с системой из 20 пинцетов быстро и деликатно удаляет волосяной покров, а уникальные пальчики SoftLift приподнимают и выщипывают даже очень короткие и близко расположенные к коже волоски.</p><p>Модель с двумя скоростями отлично подойдет как для стайлинга в области бикини, так и для обычной эпиляции. В комплект входит: насадка для бриться, массажер, насадка-триммер, а также щетка для очистки и футляр.</p><p><b>Характеристики: </b></p><ul type=disc><li>Тип: эпилятор <li>Назначение: стайлинг в области бикини, эпиляция <li>Число скоростей: 2 <li>Количество пинцетов: 20 <li>Система SoftLift: есть <li>Питание: от сети <li>Подсветка: нет <li>Использование с применением пены: нет <li>Насадки: для бритья, массажер, насадка-триммер <li>В комплекте: щетка для очистки, футляр</li></ul><p><b>Производитель:</b> Braun.</p><p><b>Страна:</b> Германия.</p> чувственный массаж</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/adc8c79d7ed866b242f75ff41255c3ae.jpeg" alt="эпиляторы браун цены Электрощипцы для выпрямления волос Atlanta АТН-830" title="эпиляторы браун цены Электрощипцы для выпрямления волос Atlanta АТН-830"><div class="box" page="elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-350r"><span class="title">эпиляторы браун цены Электрощипцы для выпрямления волос Atlanta АТН-830</span><p>от <span class="price">350</span> руб.</p></div></li>
						<li><img src="photos/d3b4eb483f82d34f6a33d99e454414ea.jpeg" alt="что значит зеркало Электрощипцы для волос Atlanta АТН-833" title="что значит зеркало Электрощипцы для волос Atlanta АТН-833"><div class="box" page="elektroschipcy-dlya-volos-atlanta-atn-500r"><span class="title">что значит зеркало Электрощипцы для волос Atlanta АТН-833</span><p>от <span class="price">500</span> руб.</p></div></li>
						<li><img src="photos/7ea653e31522aab2e52b2dbfda2e3cf7.jpeg" alt="зеркала в ростове Мультистайлер Babyliss 2021CE Infinitix" title="зеркала в ростове Мультистайлер Babyliss 2021CE Infinitix"><div class="box" page="multistayler-babyliss-ce-infinitix-1610r"><span class="title">зеркала в ростове Мультистайлер Babyliss 2021CE Infinitix</span><p>от <span class="price">1610</span> руб.</p></div></li>
						<li><img src="photos/07b29837951e205c6d1a626dd79e38d4.jpeg" alt="профессиональные фены отзывы Зеркало косметологическое двухстороннее с подсветкой Gezatone LM107" title="профессиональные фены отзывы Зеркало косметологическое двухстороннее с подсветкой Gezatone LM107"><div class="box" page="zerkalo-kosmetologicheskoe-dvuhstoronnee-s-podsvetkoy-gezatone-lm-1000r"><span class="title">профессиональные фены отзывы Зеркало косметологическое двухстороннее с подсветкой Gezatone LM107</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li class="large"><img src="photos/e273f348f6c5708fd82a881f65351988.jpeg" alt="успенская зеркала Зеркало настольное Rosenberg S-2338" title="успенская зеркала Зеркало настольное Rosenberg S-2338"><div class="box" page="zerkalo-nastolnoe-rosenberg-s-970r"><span class="title">успенская зеркала Зеркало настольное Rosenberg S-2338</span><p>от <span class="price">970</span> руб.</p></div></li>
						<li class="large"><img src="photos/bd4f4a0171189fffb9c852e095d9e936.jpeg" alt="виды завивки волос фото Ирригатор полости рта Bremed BD 7200" title="виды завивки волос фото Ирригатор полости рта Bremed BD 7200"><div class="box" page="irrigator-polosti-rta-bremed-bd-2300r"><span class="title">виды завивки волос фото Ирригатор полости рта Bremed BD 7200</span><p>от <span class="price">2300</span> руб.</p></div></li>
						<li class="large"><img src="photos/a96ae3566c75021eb37743cc8caf6ff5.jpeg" alt="массаж лица соболь Аппликатор Ляпко Валик Лицевой 3,5" title="массаж лица соболь Аппликатор Ляпко Валик Лицевой 3,5"><div class="box" page="applikator-lyapko-valik-licevoy-720r"><span class="title">массаж лица соболь Аппликатор Ляпко Валик Лицевой 3,5</span><p>от <span class="price">720</span> руб.</p></div></li>
						<li><img src="photos/07e8f52c43849d7cdfb6d82971d9d422.jpeg" alt="правильный массаж простаты Массажер Breo mini" title="правильный массаж простаты Массажер Breo mini"><div class="box" page="massazher-breo-mini-470r"><span class="title">правильный массаж простаты Массажер Breo mini</span><p>от <span class="price">470</span> руб.</p></div></li>
						<li><img src="photos/bc2944ee563c3b24a06eaacc9776c3c3.jpeg" alt="асахи массаж для тела Массажер медицинский Nozomi MH-103 ICST" title="асахи массаж для тела Массажер медицинский Nozomi MH-103 ICST"><div class="box" page="massazher-medicinskiy-nozomi-mh-icst-1850r"><span class="title">асахи массаж для тела Массажер медицинский Nozomi MH-103 ICST</span><p>от <span class="price">1850</span> руб.</p></div></li>
						<li><img src="photos/9c7a489ceaec081c9dd5b77cb7fc7ab6.jpeg" alt="авто зеркало купить Массажная накидка US-Medica Combo LMC-050" title="авто зеркало купить Массажная накидка US-Medica Combo LMC-050"><div class="box" page="massazhnaya-nakidka-usmedica-combo-lmc-12000r"><span class="title">авто зеркало купить Массажная накидка US-Medica Combo LMC-050</span><p>от <span class="price">12000</span> руб.</p></div></li>
						<li><img src="photos/bddc6e6efaf0b03c628143bf9a4ec50d.jpeg" alt="толкование снов зеркало Фен Vitesse VS-943 зеленый" title="толкование снов зеркало Фен Vitesse VS-943 зеленый"><div class="box" page="fen-vitesse-vs-zelenyy-640r"><span class="title">толкование снов зеркало Фен Vitesse VS-943 зеленый</span><p>от <span class="price">640</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("epilyator-braun-2100r.php", 0, -4); if (file_exists("comments/epilyator-braun-2100r.php")) require_once "comments/epilyator-braun-2100r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="epilyator-braun-2100r.php" method="post" onsubmit="return checkForm(this)">
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