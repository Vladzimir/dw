<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("bigudi-babyliss-e-termobigudi-1340r.php","двойное зеркало");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("bigudi-babyliss-e-termobigudi-1340r.php", $nick, $comment);
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
		<title>двойное зеркало Бигуди Babyliss 3060E (термобигуди)  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="двойное зеркало, книги массаж бесплатно, триммер екатеринбург, укладка волос на бигуди, ведьма в зеркале бесплатно, массаж в россии, антирадар зеркало, массаж при гайморите, электробритва харьков, триммер браун, бумажные полотенца в рулонах, самостоятельный массаж лица, фен строительный bosch, массаж женщин смотреть бесплатно,  зеркала на ниву">
		<meta name="description" content="двойное зеркало Бигуди Babyliss 3060E (термобигуди) предназначены для создания вьющихся локонов,...">
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
						<a class="photo" href="photos/6dfd693fbbe6f82a445e062d56e6a848.jpeg" title="двойное зеркало Бигуди Babyliss 3060E (термобигуди)"><img src="photos/6dfd693fbbe6f82a445e062d56e6a848.jpeg" alt="двойное зеркало Бигуди Babyliss 3060E (термобигуди)" title="двойное зеркало Бигуди Babyliss 3060E (термобигуди) -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-beurer-ps-1100r.php"><img src="photos/030cdb8b5d05bee1309d2a22263708df.jpeg" alt="книги массаж бесплатно Весы электронные напольные Beurer PS06" title="книги массаж бесплатно Весы электронные напольные Beurer PS06"></a><h2>Весы электронные напольные Beurer PS06</h2></li>
							<li><a href="http://hometech.elitno.net/vypryamitel-dlya-volos-braun-es-estraightener-1820r.php"><img src="photos/f3ed2f2a457bc3c47d247e9bbfe87664.jpeg" alt="триммер екатеринбург Выпрямитель для волос Braun ES1 E-Straightener" title="триммер екатеринбург Выпрямитель для волос Braun ES1 E-Straightener"></a><h2>Выпрямитель для волос Braun ES1 E-Straightener</h2></li>
							<li><a href="http://hometech.elitno.net/manikyurnyy-nabor-sanitas-sma-2500r.php"><img src="photos/3ccd3a7a537feb526e26b8db85765ae5.jpeg" alt="укладка волос на бигуди Маникюрный набор Sanitas SMA-70" title="укладка волос на бигуди Маникюрный набор Sanitas SMA-70"></a><h2>Маникюрный набор Sanitas SMA-70</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>двойное зеркало Бигуди Babyliss 3060E (термобигуди)</h1>
						<div class="tb"><p>Цена: от <span class="price">1340</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_6973.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Бигуди </b><b>Babyliss 3060</b><b>E (термобигуди)</b> предназначены для создания вьющихся локонов, волн и придания объема. В набор входят 20 бигуди 3-х видов с мини-зажимами: 8 шт – 32 мм, 6 шт – 25 мм и 6 шт 19 мм. На одной из бигуди каждого размера размещен индикатор нагрева. Среди особенностей модели: керамическое покрытие, быстрый нагрев, оформление в приятном лиловом цвете. Бигуди Babyliss 3060E помогут вам изменить свой образ без вреда для волос.</p><p><b>Характеристики:</b></p><ul type=disc><li>Быстрый нагрев; <li>Удерживают температуру около 15 минут; <li>20 бигуди с мини-зажимами; <li>3 размера: 8 шт – 32 мм, 6 шт – 25 мм и 6 шт 19 мм; <li>Индикатор разогрева на одной термобигуди каждого размера; <li>Цвет: лиловый.</li></ul><p><b></b></p><p><b>Производитель:</b> Babyliss.</p><p><b>Гарантия:</b> 2 года.</p> двойное зеркало</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/9fadb3bc1b0070c759f3914e2beceea5.jpeg" alt="ведьма в зеркале бесплатно Миостимулятор цифровой 3 в 1 Beurer EM 41" title="ведьма в зеркале бесплатно Миостимулятор цифровой 3 в 1 Beurer EM 41"><div class="box" page="miostimulyator-cifrovoy-v-beurer-em-2750r"><span class="title">ведьма в зеркале бесплатно Миостимулятор цифровой 3 в 1 Beurer EM 41</span><p>от <span class="price">2750</span> руб.</p></div></li>
						<li><img src="photos/2cb4e8a91d245f53ceebe70f42a3b86c.jpeg" alt="массаж в россии Коврик малый Ляпко АЛ" title="массаж в россии Коврик малый Ляпко АЛ"><div class="box" page="kovrik-malyy-lyapko-al-890r"><span class="title">массаж в россии Коврик малый Ляпко АЛ</span><p>от <span class="price">890</span> руб.</p></div></li>
						<li><img src="photos/99c6930539a5dbb19e5a1ae959e6833b.jpeg" alt="антирадар зеркало Вакуумный массажер Celluless (Антицеллюлит)" title="антирадар зеркало Вакуумный массажер Celluless (Антицеллюлит)"><div class="box" page="vakuumnyy-massazher-celluless-anticellyulit-1600r"><span class="title">антирадар зеркало Вакуумный массажер Celluless (Антицеллюлит)</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li><img src="photos/80e1549e8ba52d130ff6ca8cfae7cb7f.jpeg" alt="массаж при гайморите Массажер ультразвуковой импульсный Gezatone Ultra-Tonik m115 1301035" title="массаж при гайморите Массажер ультразвуковой импульсный Gezatone Ultra-Tonik m115 1301035"><div class="box" page="massazher-ultrazvukovoy-impulsnyy-gezatone-ultratonik-m-3900r"><span class="title">массаж при гайморите Массажер ультразвуковой импульсный Gezatone Ultra-Tonik m115 1301035</span><p>от <span class="price">3900</span> руб.</p></div></li>
						<li class="large"><img src="photos/3e07c9c76543509eb7330cd46f97b553.jpeg" alt="электробритва харьков Машинка для стрижки волос Valera Absolut 648.01" title="электробритва харьков Машинка для стрижки волос Valera Absolut 648.01"><div class="box" page="mashinka-dlya-strizhki-volos-valera-absolut-3480r"><span class="title">электробритва харьков Машинка для стрижки волос Valera Absolut 648.01</span><p>от <span class="price">3480</span> руб.</p></div></li>
						<li class="large"><img src="photos/0915015c954509bbff766b4be4039b0b.jpeg" alt="триммер браун Разогреватель для воска Gezatone с базой" title="триммер браун Разогреватель для воска Gezatone с базой"><div class="box" page="razogrevatel-dlya-voska-gezatone-s-bazoy-1490r"><span class="title">триммер браун Разогреватель для воска Gezatone с базой</span><p>от <span class="price">1490</span> руб.</p></div></li>
						<li class="large"><img src="photos/51e9a6eaf948832c451cdbbf4a286b50.jpeg" alt="бумажные полотенца в рулонах Воск для депиляции Rica, азуленовый в картридже 100 мл" title="бумажные полотенца в рулонах Воск для депиляции Rica, азуленовый в картридже 100 мл"><div class="box" page="vosk-dlya-depilyacii-rica-azulenovyy-v-kartridzhe-ml-150r"><span class="title">бумажные полотенца в рулонах Воск для депиляции Rica, азуленовый в картридже 100 мл</span><p>от <span class="price">150</span> руб.</p></div></li>
						<li><img src="photos/ae9da361619c92f9a8cf3fb8e35d98ca.jpeg" alt="самостоятельный массаж лица Corioliss Brush Collection Ионный Термо-Брашинг" title="самостоятельный массаж лица Corioliss Brush Collection Ионный Термо-Брашинг"><div class="box" page="corioliss-brush-collection-ionnyy-termobrashing-630r"><span class="title">самостоятельный массаж лица Corioliss Brush Collection Ионный Термо-Брашинг</span><p>от <span class="price">630</span> руб.</p></div></li>
						<li><img src="photos/9fe714da2d9406c3a47e4f226e874bb7.jpeg" alt="фен строительный bosch Триммер Valera 619.01 для коррекции бровей и стрижки волос в области носа и ушей" title="фен строительный bosch Триммер Valera 619.01 для коррекции бровей и стрижки волос в области носа и ушей"><div class="box" page="trimmer-valera-dlya-korrekcii-brovey-i-strizhki-volos-v-oblasti-nosa-i-ushey-820r"><span class="title">фен строительный bosch Триммер Valera 619.01 для коррекции бровей и стрижки волос в области носа и ушей</span><p>от <span class="price">820</span> руб.</p></div></li>
						<li><img src="photos/7f9fc77edfcd112c2dc89865bc81f054.jpeg" alt="массаж женщин смотреть бесплатно Фен Braun HD750" title="массаж женщин смотреть бесплатно Фен Braun HD750"><div class="box" page="fen-braun-hd-2480r"><span class="title">массаж женщин смотреть бесплатно Фен Braun HD750</span><p>от <span class="price">2480</span> руб.</p></div></li>
						<li><img src="photos/52f08ec28309d7a90cb25c044bae31d4.jpeg" alt="эпилятор филипс отзывы Фен Braun SPI C2000 DF" title="эпилятор филипс отзывы Фен Braun SPI C2000 DF"><div class="box" page="fen-braun-spi-c-df-2810r"><span class="title">эпилятор филипс отзывы Фен Braun SPI C2000 DF</span><p>от <span class="price">2810</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("bigudi-babyliss-e-termobigudi-1340r.php", 0, -4); if (file_exists("comments/bigudi-babyliss-e-termobigudi-1340r.php")) require_once "comments/bigudi-babyliss-e-termobigudi-1340r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="bigudi-babyliss-e-termobigudi-1340r.php" method="post" onsubmit="return checkForm(this)">
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