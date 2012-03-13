<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("lampa-dlya-fotoepilyatora-ms-westfalia-gmbh-hplight-2850r.php","триммер для бикини");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("lampa-dlya-fotoepilyatora-ms-westfalia-gmbh-hplight-2850r.php", $nick, $comment);
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
		<title>триммер для бикини Лампа для фотоэпилятора MS Westfalia GmbH HPLight  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="триммер для бикини, фен для волос rowenta, зеркало недорого, домашний эпилятор отзывы, массаж 2 года, ирригатор waterpik отзывы, шкафчик для ванной с зеркалом, боковое зеркало шкода, зеркало напротив входной двери, выпуклое зеркало, щадящая завивка волос, фен строительный bosch, ирригатор waterpik ultra, оборудование для массажа,  посоветуйте солярий">
		<meta name="description" content="триммер для бикини Лампа для фотоэпилятора – сменный аксессуар к фотоэпилятору HPLight. Заряд лампы...">
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
						<a class="photo" href="photos/79e1d233ed3df4b7188a2a683c3fb0ea.jpeg" title="триммер для бикини Лампа для фотоэпилятора MS Westfalia GmbH HPLight"><img src="photos/79e1d233ed3df4b7188a2a683c3fb0ea.jpeg" alt="триммер для бикини Лампа для фотоэпилятора MS Westfalia GmbH HPLight" title="триммер для бикини Лампа для фотоэпилятора MS Westfalia GmbH HPLight -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/miostimulyator-face-slendertone-dlya-podtyazhki-kozhi-lica-13900r.php"><img src="photos/762c653f3103724bc7a81e305f1935d9.jpeg" alt="фен для волос rowenta Миостимулятор Face Slendertone для подтяжки кожи лица" title="фен для волос rowenta Миостимулятор Face Slendertone для подтяжки кожи лица"></a><h2>Миостимулятор Face Slendertone для подтяжки кожи лица</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-bytovye-elektronnye-omron-hn-1700r.php"><img src="photos/1c286fb4a2f394536fb915a6d87649a7.jpeg" alt="зеркало недорого Весы бытовые электронные OMRON HN-283" title="зеркало недорого Весы бытовые электронные OMRON HN-283"></a><h2>Весы бытовые электронные OMRON HN-283</h2></li>
							<li><a href="http://hometech.elitno.net/zauber-elektronnye-napolnye-vesy-eco-1580r-2.php"><img src="photos/3b8c8a335cc3e56920ea3baf010f9e39.jpeg" alt="домашний эпилятор отзывы Zauber Электронные напольные весы  ECO-150" title="домашний эпилятор отзывы Zauber Электронные напольные весы  ECO-150"></a><h2>Zauber Электронные напольные весы  ECO-150</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>триммер для бикини Лампа для фотоэпилятора MS Westfalia GmbH HPLight</h1>
						<div class="tb"><p>Цена: от <span class="price">2850</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_21492.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Лампа для фотоэпилятора – сменный аксессуар к фотоэпилятору HPLight. Заряд лампы (иначе –  лампового модуля) рассчитан на 750 вспышек, скорость ее работы – 1 импульс  каждые 3,5 секунды. Лампа для фотоэпилятора HPLight создана специально для эффективного и безболезненного  удаления лишних волосков с тела в домашних условиях.</p><p><strong>Характеристики:</strong></p><ul type=\disc\><li>Сменная  лампа для фотоэпилятора HPLight;</li><li>Расчитана  на 750 вспышек;</li><li>Световое   пятно: 2 x 3 см;</li><li>Скорость:  1 импульс каждые 3,5 секунды;</li><li>Технология:  импульсная вспышка (IPL);</li><li>Максимальный   уровень энергии: менее 5 Дж\\см2;</li><li>Длина волны: 475-1200 нм;</li></ul><p><strong>Производитель:</strong><strong>MS</strong><strong>Westfalia</strong><strong>GmbH (</strong><strong>Германия)</strong></p> триммер для бикини</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/b12e567910272f340a2968fe97934736.jpeg" alt="массаж 2 года Весы электронные напольные с анализатором жира Tanita BC-532" title="массаж 2 года Весы электронные напольные с анализатором жира Tanita BC-532"><div class="box"><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-s-analizatorom-zhira-tanita-bc-2800r.php"><h3 class="title">массаж 2 года Весы электронные напольные с анализатором жира Tanita BC-532</h3><p>от <span class="price">2800</span> руб.</p></a></div></li>
						<li><img src="photos/136e687ab7caf7ea2792cd39cf43a22a.jpeg" alt="ирригатор waterpik отзывы Электрощипцы для выпрямления волос Atlanta АТН-839" title="ирригатор waterpik отзывы Электрощипцы для выпрямления волос Atlanta АТН-839"><div class="box" page="elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-400r"><span class="title">ирригатор waterpik отзывы Электрощипцы для выпрямления волос Atlanta АТН-839</span><p>от <span class="price">400</span> руб.</p></div></li>
						<li><img src="photos/547f3143a4cadabab99b7c9561803f70.jpeg" alt="шкафчик для ванной с зеркалом Dental Resources. 1,1 % нейтральная фтористая зубная паста. Neutral RX." title="шкафчик для ванной с зеркалом Dental Resources. 1,1 % нейтральная фтористая зубная паста. Neutral RX."><div class="box" page="dental-resources-neytralnaya-ftoristaya-zubnaya-pasta-neutral-rx-540r"><span class="title">шкафчик для ванной с зеркалом Dental Resources. 1,1 % нейтральная фтористая зубная паста. Neutral RX.</span><p>от <span class="price">540</span> руб.</p></div></li>
						<li><img src="photos/e8ce6906fe484bd61dc8b90eb5a3df4a.jpeg" alt="боковое зеркало шкода Пояс-миостимулятор Slendertone Flex 023 S" title="боковое зеркало шкода Пояс-миостимулятор Slendertone Flex 023 S"><div class="box" page="poyasmiostimulyator-slendertone-flex-s-1500r"><span class="title">боковое зеркало шкода Пояс-миостимулятор Slendertone Flex 023 S</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li class="large"><img src="photos/0028121fe8b92eb1330cfdeab7a690b7.jpeg" alt="зеркало напротив входной двери Аппликатор Ляпко Квадро 5,8" title="зеркало напротив входной двери Аппликатор Ляпко Квадро 5,8"><div class="box" page="applikator-lyapko-kvadro-1460r"><span class="title">зеркало напротив входной двери Аппликатор Ляпко Квадро 5,8</span><p>от <span class="price">1460</span> руб.</p></div></li>
						<li class="large"><img src="photos/bb0c160ca62b650921d1a14315a10ae6.jpeg" alt="выпуклое зеркало Массажер д/глаз ZENET TL-EMY-B" title="выпуклое зеркало Массажер д/глаз ZENET TL-EMY-B"><div class="box" page="massazher-dglaz-zenet-tlemyb-2350r"><span class="title">выпуклое зеркало Массажер д/глаз ZENET TL-EMY-B</span><p>от <span class="price">2350</span> руб.</p></div></li>
						<li class="large"><img src="photos/66244ec47caa50bd5231af5a58d04113.jpeg" alt="щадящая завивка волос Вакуумный очиститель кожи с влажной функцией Gezatone Super Wet Cleaner" title="щадящая завивка волос Вакуумный очиститель кожи с влажной функцией Gezatone Super Wet Cleaner"><div class="box" page="vakuumnyy-ochistitel-kozhi-s-vlazhnoy-funkciey-gezatone-super-wet-cleaner-1600r"><span class="title">щадящая завивка волос Вакуумный очиститель кожи с влажной функцией Gezatone Super Wet Cleaner</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li><img src="photos/9fe714da2d9406c3a47e4f226e874bb7.jpeg" alt="фен строительный bosch Триммер Valera 619.01 для коррекции бровей и стрижки волос в области носа и ушей" title="фен строительный bosch Триммер Valera 619.01 для коррекции бровей и стрижки волос в области носа и ушей"><div class="box" page="trimmer-valera-dlya-korrekcii-brovey-i-strizhki-volos-v-oblasti-nosa-i-ushey-820r"><span class="title">фен строительный bosch Триммер Valera 619.01 для коррекции бровей и стрижки волос в области носа и ушей</span><p>от <span class="price">820</span> руб.</p></div></li>
						<li><img src="photos/0339a99d9db607aa03bad2eea7d85456.jpeg" alt="ирригатор waterpik ultra Фен Corioliss Neon" title="ирригатор waterpik ultra Фен Corioliss Neon"><div class="box" page="fen-corioliss-neon-5350r"><span class="title">ирригатор waterpik ultra Фен Corioliss Neon</span><p>от <span class="price">5350</span> руб.</p></div></li>
						<li><img src="photos/93f6867e3e6593041fb757c52bb25ecf.jpeg" alt="оборудование для массажа Набор Maxwell Фен и Выпрямитель" title="оборудование для массажа Набор Maxwell Фен и Выпрямитель"><div class="box" page="nabor-maxwell-fen-i-vypryamitel-1150r"><span class="title">оборудование для массажа Набор Maxwell Фен и Выпрямитель</span><p>от <span class="price">1150</span> руб.</p></div></li>
						<li><img src="photos/4fffcb2bc314de3650ec3df67e99237a.jpeg" alt="домашние лазерные эпиляторы отзывы Фен BABYLISS D221E" title="домашние лазерные эпиляторы отзывы Фен BABYLISS D221E"><div class="box" page="fen-babyliss-de-980r"><span class="title">домашние лазерные эпиляторы отзывы Фен BABYLISS D221E</span><p>от <span class="price">980</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("lampa-dlya-fotoepilyatora-ms-westfalia-gmbh-hplight-2850r.php", 0, -4); if (file_exists("comments/lampa-dlya-fotoepilyatora-ms-westfalia-gmbh-hplight-2850r.php")) require_once "comments/lampa-dlya-fotoepilyatora-ms-westfalia-gmbh-hplight-2850r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="lampa-dlya-fotoepilyatora-ms-westfalia-gmbh-hplight-2850r.php" method="post" onsubmit="return checkForm(this)">
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