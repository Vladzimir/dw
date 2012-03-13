<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("elektroprostynya-beurer-ts-1800r.php","схема осевого вентилятора");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("elektroprostynya-beurer-ts-1800r.php", $nick, $comment);
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
		<title>схема осевого вентилятора Электропростыня Beurer TS20  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="схема осевого вентилятора, стоимость тепловой завесы, конвектор для телефона бесплатно, уличные обогреватели, бесплатный конвектор музыки, схема регулятора оборотов вентилятора, вентилятор процессора программа, вентилятор для жесткого диска, номера кондиционеров, вентиляторы для сушильных камер, вентилятор для корпуса компьютера, ремонт вентилятора радиатора, программа подбора вентиляторов, водонагреватели в красноярске,  вентилятор печки шевроле нива">
		<meta name="description" content="схема осевого вентилятора Простой рецепт создания здоровой атмосферы – использование электропростыни Beure...">
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
						<a class="photo" href="photos/ff5b486f3cfb58cfb6ea41a27f8e4bf2.jpeg" title="схема осевого вентилятора Электропростыня Beurer TS20"><img src="photos/ff5b486f3cfb58cfb6ea41a27f8e4bf2.jpeg" alt="схема осевого вентилятора Электропростыня Beurer TS20" title="схема осевого вентилятора Электропростыня Beurer TS20 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-timberk-swh-fs-h-8800r.php"><img src="photos/9fd1114342ef595c4fe0f4c809f57077.jpeg" alt="стоимость тепловой завесы Водонагреватель Timberk SWH FS4 50 H" title="стоимость тепловой завесы Водонагреватель Timberk SWH FS4 50 H"></a><h2>Водонагреватель Timberk SWH FS4 50 H</h2></li>
							<li><a href="http://klimattech.elitno.net/pogodnaya-stanciya-s-radiodatchikom-rst-meteolight-art-4790r.php"><img src="photos/5cf990f7107ab558513021337c95a1bb.jpeg" alt="конвектор для телефона бесплатно Погодная станция с радиодатчиком  RST meteolight , арт. 02889" title="конвектор для телефона бесплатно Погодная станция с радиодатчиком  RST meteolight , арт. 02889"></a><h2>Погодная станция с радиодатчиком  RST meteolight , арт. 02889</h2></li>
							<li><a href="http://klimattech.elitno.net/assistant-ah-meteostanciya-1600r.php"><img src="photos/b71fd8e694839d507d1ebf508f396381.jpeg" alt="уличные обогреватели Assistant AH-1971 Метеостанция" title="уличные обогреватели Assistant AH-1971 Метеостанция"></a><h2>Assistant AH-1971 Метеостанция</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>схема осевого вентилятора Электропростыня Beurer TS20</h1>
						<div class="tb"><p>Цена: от <span class="price">1800</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_276.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Простой рецепт создания здоровой атмосферы – использование <strong>электропростыни Beurer TS20. </strong>Крепкий сон на слегка теплой, сравнимой с температурой человеческого тела, простыне – залог отличного самочувствия на целый день. <strong>Электропростыня Beurer TS20 </strong>проста и надежна в эксплуатации. Вы может отрегулировать на свой выбор уровень температуры и спокойно наслаждаться отдыхом.</p><p><strong>Особенности: </strong></p><ul type=disc><li>Система безопасности BSS Beurer <li>Количество температурных режимов 3 <li>Дисплей с подсветкой <li>Возможность машинной стирки <li>Материал - верхняя сторона флис </li></ul><p><b>Техническая характеристика:</b></p><ul type=disc><li>Напряжение питания 220В <li>Потребляемая мощность 60 Вт <li>Размер(1,5 спальная) примерно 130x75 см </li></ul><p><strong>В комплект входит: </strong>основное устройство, инструкция</p><p><strong>Производство:</strong> Beurer (Германия)</p><p><strong>Гарантия:</strong> 1 год</p> схема осевого вентилятора</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/70c70b7625471597901e2a4d38fd77ec.jpeg" alt="бесплатный конвектор музыки Тепловентилятор настенный Timberk TFH W200.TR" title="бесплатный конвектор музыки Тепловентилятор настенный Timberk TFH W200.TR"><div class="box"><a href="http://klimattech.elitno.net/teploventilyator-nastennyy-timberk-tfh-wtr-2060r.php"><h3 class="title">бесплатный конвектор музыки Тепловентилятор настенный Timberk TFH W200.TR</h3><p>от <span class="price">2060</span> руб.</p></a></div></li>
						<li><img src="photos/2cd95fd7e6a6c358ce5a5720f3641573.jpeg" alt="схема регулятора оборотов вентилятора Тепловентилятор керамический Vitesse VS-883" title="схема регулятора оборотов вентилятора Тепловентилятор керамический Vitesse VS-883"><div class="box" page="teploventilyator-keramicheskiy-vitesse-vs-1560r"><span class="title">схема регулятора оборотов вентилятора Тепловентилятор керамический Vitesse VS-883</span><p>от <span class="price">1560</span> руб.</p></div></li>
						<li><img src="photos/19096f1a55ac4134787bff919f82a090.jpeg" alt="вентилятор процессора программа Ультразвуковой увлажнитель Electrolux EHU 5515D" title="вентилятор процессора программа Ультразвуковой увлажнитель Electrolux EHU 5515D"><div class="box" page="ultrazvukovoy-uvlazhnitel-electrolux-ehu-d-7050r"><span class="title">вентилятор процессора программа Ультразвуковой увлажнитель Electrolux EHU 5515D</span><p>от <span class="price">7050</span> руб.</p></div></li>
						<li><img src="photos/0d6a9a2d5d0b8548fdcc53e2a36f2ef1.jpeg" alt="вентилятор для жесткого диска Увлажнитель ZENET 2728" title="вентилятор для жесткого диска Увлажнитель ZENET 2728"><div class="box" page="uvlazhnitel-zenet-4650r"><span class="title">вентилятор для жесткого диска Увлажнитель ZENET 2728</span><p>от <span class="price">4650</span> руб.</p></div></li>
						<li class="large"><img src="photos/f08421488a7bd6f20d3e09733f279f3d.jpeg" alt="номера кондиционеров Уличный газовый обогреватель ITM Sunny 04" title="номера кондиционеров Уличный газовый обогреватель ITM Sunny 04"><div class="box" page="ulichnyy-gazovyy-obogrevatel-itm-sunny-23800r"><span class="title">номера кондиционеров Уличный газовый обогреватель ITM Sunny 04</span><p>от <span class="price">23800</span> руб.</p></div></li>
						<li class="large"><img src="photos/c7f39ca4ae7ab043ae60cf2c5864767f.jpeg" alt="вентиляторы для сушильных камер Уличный газовый обогреватель ITM Sunny 950 Inbox" title="вентиляторы для сушильных камер Уличный газовый обогреватель ITM Sunny 950 Inbox"><div class="box" page="ulichnyy-gazovyy-obogrevatel-itm-sunny-inbox-26350r"><span class="title">вентиляторы для сушильных камер Уличный газовый обогреватель ITM Sunny 950 Inbox</span><p>от <span class="price">26350</span> руб.</p></div></li>
						<li class="large"><img src="photos/c8852d9018feeaf23f4c40bb843b8d78.jpeg" alt="вентилятор для корпуса компьютера Электрогрелка Beurer HK63" title="вентилятор для корпуса компьютера Электрогрелка Beurer HK63"><div class="box" page="elektrogrelka-beurer-hk-1950r"><span class="title">вентилятор для корпуса компьютера Электрогрелка Beurer HK63</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li><img src="photos/a8833dd2fdd473cc6f53d503f212c53f.jpeg" alt="ремонт вентилятора радиатора Очаг Dimplex Chesford" title="ремонт вентилятора радиатора Очаг Dimplex Chesford"><div class="box" page="ochag-dimplex-chesford-55000r"><span class="title">ремонт вентилятора радиатора Очаг Dimplex Chesford</span><p>от <span class="price">55000</span> руб.</p></div></li>
						<li><img src="photos/70f6960cecdf1abff008176a5480b04e.jpeg" alt="программа подбора вентиляторов Камин Dimplex Modern SP 16" title="программа подбора вентиляторов Камин Dimplex Modern SP 16"><div class="box" page="kamin-dimplex-modern-sp-67295r"><span class="title">программа подбора вентиляторов Камин Dimplex Modern SP 16</span><p>от <span class="price">67295</span> руб.</p></div></li>
						<li><img src="photos/bfd8ecbc73c9e0f16c918bc711fcf2a4.jpeg" alt="водонагреватели в красноярске Электроодеяло Элит 170х140" title="водонагреватели в красноярске Электроодеяло Элит 170х140"><div class="box" page="elektroodeyalo-elit-h-1550r"><span class="title">водонагреватели в красноярске Электроодеяло Элит 170х140</span><p>от <span class="price">1550</span> руб.</p></div></li>
						<li><img src="photos/1da829ba214e242ac0953c641d6e6269.jpeg" alt="горизонтальный водонагреватель Электроодеяло Beurer HD50" title="горизонтальный водонагреватель Электроодеяло Beurer HD50"><div class="box" page="elektroodeyalo-beurer-hd-3000r"><span class="title">горизонтальный водонагреватель Электроодеяло Beurer HD50</span><p>от <span class="price">3000</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("elektroprostynya-beurer-ts-1800r.php", 0, -4); if (file_exists("comments/elektroprostynya-beurer-ts-1800r.php")) require_once "comments/elektroprostynya-beurer-ts-1800r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="elektroprostynya-beurer-ts-1800r.php" method="post" onsubmit="return checkForm(this)">
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