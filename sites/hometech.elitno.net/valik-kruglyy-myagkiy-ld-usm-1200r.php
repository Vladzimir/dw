<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("valik-kruglyy-myagkiy-ld-usm-1200r.php","напольные электронные весы тефаль");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("valik-kruglyy-myagkiy-ld-usm-1200r.php", $nick, $comment);
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
		<title>напольные электронные весы тефаль Валик круглый мягкий L66D20 USM-006  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="напольные электронные весы тефаль, массаж в ярославле, зеркала на ауди а6, триммер philips отзывы, утреннее солнце массаж, профессиональные фены отзывы, крем для солярия отзывы, фокин массаж, сколько в крови держится фен, весы электронные москва, массаж пальцев рук, массаж в гомеле, солярий шоколад, обогрев зеркал заднего вида,  работа администратором в солярии">
		<meta name="description" content="напольные электронные весы тефаль Валик круглый мягкий L66D20 USM-006 станет отличным помощником для любого профес...">
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
						<a class="photo" href="photos/62db52b399d7c20707e01ba738aef4b6.jpeg" title="напольные электронные весы тефаль Валик круглый мягкий L66D20 USM-006"><img src="photos/62db52b399d7c20707e01ba738aef4b6.jpeg" alt="напольные электронные весы тефаль Валик круглый мягкий L66D20 USM-006" title="напольные электронные весы тефаль Валик круглый мягкий L66D20 USM-006 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/analizator-zhirovoy-massy-tanita-mcma-669000r.php"><img src="photos/25ef57ddaf2ca71d16b13307acd93725.jpeg" alt="массаж в ярославле Анализатор жировой массы Tanita MC-980MA" title="массаж в ярославле Анализатор жировой массы Tanita MC-980MA"></a><h2>Анализатор жировой массы Tanita MC-980MA</h2></li>
							<li><a href="http://hometech.elitno.net/stayler-corioliss-mini-root-lifter-chernyy-2650r.php"><img src="photos/793f5e34425900f9f8cb0286c947d677.jpeg" alt="зеркала на ауди а6 Стайлер Corioliss Mini Root Lifter черный" title="зеркала на ауди а6 Стайлер Corioliss Mini Root Lifter черный"></a><h2>Стайлер Corioliss Mini Root Lifter черный</h2></li>
							<li><a href="http://hometech.elitno.net/vypryamitel-dlya-volos-babyliss-ste-1520r.php"><img src="photos/3da7d41a61386c53690f58157cda6dc4.jpeg" alt="триммер philips отзывы Выпрямитель для волос BaByliss ST227E" title="триммер philips отзывы Выпрямитель для волос BaByliss ST227E"></a><h2>Выпрямитель для волос BaByliss ST227E</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>напольные электронные весы тефаль Валик круглый мягкий L66D20 USM-006</h1>
						<div class="tb"><p>Цена: от <span class="price">1200</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_13649.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Валик круглый мягкий L66D20 USM-006</b> станет отличным помощником для любого профессионала. Валик используется для максимального расслабления клиента в положении лежа на спине или животе в выбранной зоне в зависимости от того, какие задачи имеет массаж. Часто клиенты очень напряжены, и им психологически сложно расслабиться в прямом положении, поэтому <b>валик</b> станет дополнительной поддержкой, которая поможет снять напряжение позвоночника, что в свою очередь приведет к более эффективному массажу. Обивка валика изготовлена из гипоаллергенного материала, приятна на ощупь. </p><p><b>Характеристики:</b></p><ul type=disc><li>Форма: круглый; <li>Диаметр: 20 см; <li>Длина: 66 см; <li>Вес: 100 г; <li>Цвет: белый.</li></ul><p><b>Производитель</b>: US Medica LLC</p><p><b>Страна</b>: США</p> напольные электронные весы тефаль</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/3b1d3a2501150f3525f392072fa66671.jpeg" alt="утреннее солнце массаж Насадка Расческа для КАРАТ ДЕ-212 Дарсонваль" title="утреннее солнце массаж Насадка Расческа для КАРАТ ДЕ-212 Дарсонваль"><div class="box"><a href="http://hometech.elitno.net/nasadka-rascheska-dlya-karat-de-darsonval-300r.php"><h3 class="title">утреннее солнце массаж Насадка Расческа для КАРАТ ДЕ-212 Дарсонваль</h3><p>от <span class="price">300</span> руб.</p></a></div></li>
						<li><img src="photos/07b29837951e205c6d1a626dd79e38d4.jpeg" alt="профессиональные фены отзывы Зеркало косметологическое двухстороннее с подсветкой Gezatone LM107" title="профессиональные фены отзывы Зеркало косметологическое двухстороннее с подсветкой Gezatone LM107"><div class="box" page="zerkalo-kosmetologicheskoe-dvuhstoronnee-s-podsvetkoy-gezatone-lm-1000r"><span class="title">профессиональные фены отзывы Зеркало косметологическое двухстороннее с подсветкой Gezatone LM107</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li><img src="photos/a49bb22ab9b1c7c4501855c8942e6cde.jpeg" alt="крем для солярия отзывы Ирригатор полости рта Aquajet LD-A7" title="крем для солярия отзывы Ирригатор полости рта Aquajet LD-A7"><div class="box" page="irrigator-polosti-rta-aquajet-lda-2500r"><span class="title">крем для солярия отзывы Ирригатор полости рта Aquajet LD-A7</span><p>от <span class="price">2500</span> руб.</p></div></li>
						<li><img src="photos/db50f056381f7d55d9462e3f852c618b.jpeg" alt="фокин массаж Стационарный массажный стол US Medica Profi" title="фокин массаж Стационарный массажный стол US Medica Profi"><div class="box" page="stacionarnyy-massazhnyy-stol-us-medica-profi-85000r"><span class="title">фокин массаж Стационарный массажный стол US Medica Profi</span><p>от <span class="price">85000</span> руб.</p></div></li>
						<li class="large"><img src="photos/394000ec0f3455ebe103d8192764620a.jpeg" alt="сколько в крови держится фен Массажное кресло Anatomico Leonardo" title="сколько в крови держится фен Массажное кресло Anatomico Leonardo"><div class="box" page="massazhnoe-kreslo-anatomico-leonardo-107000r"><span class="title">сколько в крови держится фен Массажное кресло Anatomico Leonardo</span><p>от <span class="price">107000</span> руб.</p></div></li>
						<li class="large"><img src="photos/5657d90760adccc4b3f2f0665fc2869d.jpeg" alt="весы электронные москва Массажное кресло Anatomico Perfetto" title="весы электронные москва Массажное кресло Anatomico Perfetto"><div class="box" page="massazhnoe-kreslo-anatomico-perfetto-132000r"><span class="title">весы электронные москва Массажное кресло Anatomico Perfetto</span><p>от <span class="price">132000</span> руб.</p></div></li>
						<li class="large"><img src="photos/a1b381333fae64349d21756cbea5ef5a.jpeg" alt="массаж пальцев рук Электроды к EM40 - EM80  - 4 шт." title="массаж пальцев рук Электроды к EM40 - EM80  - 4 шт."><div class="box" page="elektrody-k-em-em-sht-750r"><span class="title">массаж пальцев рук Электроды к EM40 - EM80  - 4 шт.</span><p>от <span class="price">750</span> руб.</p></div></li>
						<li><img src="photos/cccc1362e9d5a3d5ef09f8d62f196587.jpeg" alt="массаж в гомеле Миостимулятор для мышц живота Beurer EM 35" title="массаж в гомеле Миостимулятор для мышц живота Beurer EM 35"><div class="box" page="miostimulyator-dlya-myshc-zhivota-beurer-em-2000r"><span class="title">массаж в гомеле Миостимулятор для мышц живота Beurer EM 35</span><p>от <span class="price">2000</span> руб.</p></div></li>
						<li><img src="photos/3f058fca0af13e434cdaba91b5eca059.jpeg" alt="солярий шоколад Шарф массажный NAP Massage Wrap" title="солярий шоколад Шарф массажный NAP Massage Wrap"><div class="box" page="sharf-massazhnyy-nap-massage-wrap-670r"><span class="title">солярий шоколад Шарф массажный NAP Massage Wrap</span><p>от <span class="price">670</span> руб.</p></div></li>
						<li><img src="photos/c2cf0bf512fa2b305c7aafb76cac52bb.jpeg" alt="обогрев зеркал заднего вида Фен Braun SPI C2000" title="обогрев зеркал заднего вида Фен Braun SPI C2000"><div class="box" page="fen-braun-spi-c-2540r"><span class="title">обогрев зеркал заднего вида Фен Braun SPI C2000</span><p>от <span class="price">2540</span> руб.</p></div></li>
						<li><img src="photos/9f7c56363d95b3f8ad1c9e5826358cb8.jpeg" alt="завивка волос утюжком Электрическая зубная щетка HealthyWhite НХ 6731-02" title="завивка волос утюжком Электрическая зубная щетка HealthyWhite НХ 6731-02"><div class="box" page="elektricheskaya-zubnaya-schetka-healthywhite-nh-3400r"><span class="title">завивка волос утюжком Электрическая зубная щетка HealthyWhite НХ 6731-02</span><p>от <span class="price">3400</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("valik-kruglyy-myagkiy-ld-usm-1200r.php", 0, -4); if (file_exists("comments/valik-kruglyy-myagkiy-ld-usm-1200r.php")) require_once "comments/valik-kruglyy-myagkiy-ld-usm-1200r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="valik-kruglyy-myagkiy-ld-usm-1200r.php" method="post" onsubmit="return checkForm(this)">
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