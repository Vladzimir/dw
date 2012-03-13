<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-400r.php","щипцы для завивки выпрямления волос");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-400r.php", $nick, $comment);
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
		<title>щипцы для завивки выпрямления волос Электрощипцы для выпрямления волос Atlanta АТН-839  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="щипцы для завивки выпрямления волос, гель для массажа, художественные зеркала, триммер екатеринбург, аппараты для лица и тела, чувственный массаж, сауна баня массаж, эксплуатация электронных весов, весы электронные москва, массаж пальцев рук, efbe schott солярий, установка боковых зеркал, куплю зеркало в ванную, солярий в новосибирске,  зеркала толщина">
		<meta name="description" content="щипцы для завивки выпрямления волос Atlanta АТН-839 – электрощипцы для выпрямления волос красного цвета мощностью 30...">
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
						<a class="photo" href="photos/136e687ab7caf7ea2792cd39cf43a22a.jpeg" title="щипцы для завивки выпрямления волос Электрощипцы для выпрямления волос Atlanta АТН-839"><img src="photos/136e687ab7caf7ea2792cd39cf43a22a.jpeg" alt="щипцы для завивки выпрямления волос Электрощипцы для выпрямления волос Atlanta АТН-839" title="щипцы для завивки выпрямления волос Электрощипцы для выпрямления волос Atlanta АТН-839 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/professionalnye-elektronnye-vesy-tanita-bwbp-18500r.php"><img src="photos/4664759878659f9563da3e6c4f8b0151.jpeg" alt="гель для массажа Профессиональные электронные весы Tanita BWB-800P" title="гель для массажа Профессиональные электронные весы Tanita BWB-800P"></a><h2>Профессиональные электронные весы Tanita BWB-800P</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-and-ms-personalnyy-trener-2400r.php"><img src="photos/271898957e95aad64e9df31797f32e2e.png" alt="художественные зеркала Весы электронные AND MS-101 (персональный тренер)" title="художественные зеркала Весы электронные AND MS-101 (персональный тренер)"></a><h2>Весы электронные AND MS-101 (персональный тренер)</h2></li>
							<li><a href="http://hometech.elitno.net/vypryamitel-dlya-volos-braun-es-estraightener-1820r.php"><img src="photos/f3ed2f2a457bc3c47d247e9bbfe87664.jpeg" alt="триммер екатеринбург Выпрямитель для волос Braun ES1 E-Straightener" title="триммер екатеринбург Выпрямитель для волос Braun ES1 E-Straightener"></a><h2>Выпрямитель для волос Braun ES1 E-Straightener</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>щипцы для завивки выпрямления волос Электрощипцы для выпрямления волос Atlanta АТН-839</h1>
						<div class="tb"><p>Цена: от <span class="price">400</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19784.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Atlanta АТН-839 – электрощипцы для выпрямления волос красного цвета мощностью 30 Вт с индикатором работы. Время нагревания – одна минута. Установлен керамический нагревательный элемент с быстрым стартом. Щипцы имеют фиксирующую конструкцию, вращающийся шнур и индикатор работы. Размер насадок 25 на 90 мм. Максимальная температура 200°С. Мощность 30 Вт.</p><p>Характеристики:</p><ul type=disc><li>Насадки с керамическим покрытием <li>Керамический нагревательный элемент с быстрым стартом <li>Два уровня мощности <li>Фиксирующаяся конструкция <li>Вращающийся шнур <li>Индикатор работы <li>Размер насадок 25 на 90 мм <li>Максимальная температура 200°С <li>230 В, 50 Гц <li>Мощность 30 Вт </li></ul><p><strong>Производитель: США</strong></p> щипцы для завивки выпрямления волос</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/3d8d532ba644bc626a45f5b18063107d.jpeg" alt="аппараты для лица и тела Мультистайлер Babyliss 2020CE Fun Style 8 насадок" title="аппараты для лица и тела Мультистайлер Babyliss 2020CE Fun Style 8 насадок"><div class="box" page="multistayler-babyliss-ce-fun-style-nasadok-1340r"><span class="title">аппараты для лица и тела Мультистайлер Babyliss 2020CE Fun Style 8 насадок</span><p>от <span class="price">1340</span> руб.</p></div></li>
						<li><img src="photos/c225afb28f1b6e082ea5b6d0dfd8a7ac.jpeg" alt="чувственный массаж Beurer MP61 Маникюрно-педикюрный набор (9 насадок)" title="чувственный массаж Beurer MP61 Маникюрно-педикюрный набор (9 насадок)"><div class="box" page="beurer-mp-manikyurnopedikyurnyy-nabor-nasadok-2900r"><span class="title">чувственный массаж Beurer MP61 Маникюрно-педикюрный набор (9 насадок)</span><p>от <span class="price">2900</span> руб.</p></div></li>
						<li><img src="photos/06d523dd34a2cdda28a645a220259d39.jpeg" alt="сауна баня массаж Маникюрно-педикюрный набор Beurer MP40 (7 насадок) + BS29" title="сауна баня массаж Маникюрно-педикюрный набор Beurer MP40 (7 насадок) + BS29"><div class="box" page="manikyurnopedikyurnyy-nabor-beurer-mp-nasadok-bs-2000r"><span class="title">сауна баня массаж Маникюрно-педикюрный набор Beurer MP40 (7 насадок) + BS29</span><p>от <span class="price">2000</span> руб.</p></div></li>
						<li><img src="photos/80751e023e3ff12de485090c14fbecdd.jpeg" alt="эксплуатация электронных весов Валик под шею L35D9 USM-010" title="эксплуатация электронных весов Валик под шею L35D9 USM-010"><div class="box" page="valik-pod-sheyu-ld-usm-1000r"><span class="title">эксплуатация электронных весов Валик под шею L35D9 USM-010</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li class="large"><img src="photos/5657d90760adccc4b3f2f0665fc2869d.jpeg" alt="весы электронные москва Массажное кресло Anatomico Perfetto" title="весы электронные москва Массажное кресло Anatomico Perfetto"><div class="box" page="massazhnoe-kreslo-anatomico-perfetto-132000r"><span class="title">весы электронные москва Массажное кресло Anatomico Perfetto</span><p>от <span class="price">132000</span> руб.</p></div></li>
						<li class="large"><img src="photos/a1b381333fae64349d21756cbea5ef5a.jpeg" alt="массаж пальцев рук Электроды к EM40 - EM80  - 4 шт." title="массаж пальцев рук Электроды к EM40 - EM80  - 4 шт."><div class="box" page="elektrody-k-em-em-sht-750r"><span class="title">массаж пальцев рук Электроды к EM40 - EM80  - 4 шт.</span><p>от <span class="price">750</span> руб.</p></div></li>
						<li class="large"><img src="photos/78dcc0183deafce2449388d025ca7df3.jpeg" alt="efbe schott солярий Машинка для стрижки волос и бороды Valera Contour X Ceramic 625.01" title="efbe schott солярий Машинка для стрижки волос и бороды Valera Contour X Ceramic 625.01"><div class="box" page="mashinka-dlya-strizhki-volos-i-borody-valera-contour-x-ceramic-2190r"><span class="title">efbe schott солярий Машинка для стрижки волос и бороды Valera Contour X Ceramic 625.01</span><p>от <span class="price">2190</span> руб.</p></div></li>
						<li><img src="photos/f7810eeae3245b2809b14907b94ee4e0.jpeg" alt="установка боковых зеркал Vitek VT–1361 Машинка для стрижки волос" title="установка боковых зеркал Vitek VT–1361 Машинка для стрижки волос"><div class="box" page="vitek-vt–-mashinka-dlya-strizhki-volos-1240r"><span class="title">установка боковых зеркал Vitek VT–1361 Машинка для стрижки волос</span><p>от <span class="price">1240</span> руб.</p></div></li>
						<li><img src="photos/d8f63990242e9c9f3d5c4cfc322b0bcb.jpeg" alt="куплю зеркало в ванную Beurer HL100 Прибор световой эпиляции" title="куплю зеркало в ванную Beurer HL100 Прибор световой эпиляции"><div class="box" page="beurer-hl-pribor-svetovoy-epilyacii-18500r"><span class="title">куплю зеркало в ванную Beurer HL100 Прибор световой эпиляции</span><p>от <span class="price">18500</span> руб.</p></div></li>
						<li><img src="photos/f98698f167b448092a3ab477739f68fd.jpeg" alt="солярий в новосибирске Фен Braun HD710" title="солярий в новосибирске Фен Braun HD710"><div class="box" page="fen-braun-hd-2240r"><span class="title">солярий в новосибирске Фен Braun HD710</span><p>от <span class="price">2240</span> руб.</p></div></li>
						<li><img src="photos/6e5d590192a5181703e803b0b6645d0c.jpeg" alt="игры салон красоты маникюр педикюр Зубная щётка OMRON Sonic Style 450 (HT-B450-E)" title="игры салон красоты маникюр педикюр Зубная щётка OMRON Sonic Style 450 (HT-B450-E)"><div class="box" page="zubnaya-schetka-omron-sonic-style-htbe-3000r"><span class="title">игры салон красоты маникюр педикюр Зубная щётка OMRON Sonic Style 450 (HT-B450-E)</span><p>от <span class="price">3000</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-400r.php", 0, -4); if (file_exists("comments/elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-400r.php")) require_once "comments/elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-400r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-400r.php" method="post" onsubmit="return checkForm(this)">
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