<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("fenschetka-babyliss-ase-vt-870r.php","бигуди на голове");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("fenschetka-babyliss-ase-vt-870r.php", $nick, $comment);
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
		<title>бигуди на голове Фен-щетка Babyliss AS30E 300 Вт  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="бигуди на голове, тайский массаж бесплатно, косметическое зеркало купить, триммер bosch, модели фенов, мини солярий для лица купить, триммер для зоны бикини, массаж тазобедренный, водительское зеркало, эпилятор ровента отзывы, приготовление фена, весы электронные настольные, массаж после перелома, фен на аккумуляторах,  купить фен в киеве">
		<meta name="description" content="бигуди на голове Фен-щетка Babyliss AS30E 300 Вт сочетает в себе высокую функциональность и стиль...">
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
						<a class="photo" href="photos/ab49e365fa99a44636dc99968921bfb0.jpeg" title="бигуди на голове Фен-щетка Babyliss AS30E 300 Вт"><img src="photos/ab49e365fa99a44636dc99968921bfb0.jpeg" alt="бигуди на голове Фен-щетка Babyliss AS30E 300 Вт" title="бигуди на голове Фен-щетка Babyliss AS30E 300 Вт -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/professionalnyy-analizator-sostava-tela-tanita-sc-60000r.php"><img src="photos/e587ff8ffd5e0a34c406f0eff8e7fc05.jpeg" alt="тайский массаж бесплатно Профессиональный анализатор состава тела Tanita SC-330" title="тайский массаж бесплатно Профессиональный анализатор состава тела Tanita SC-330"></a><h2>Профессиональный анализатор состава тела Tanita SC-330</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-beurer-ps-2100r.php"><img src="photos/d9264ad16a0de4ef44c572b9c1a57a33.jpeg" alt="косметическое зеркало купить Весы электронные напольные Beurer PS24" title="косметическое зеркало купить Весы электронные напольные Beurer PS24"></a><h2>Весы электронные напольные Beurer PS24</h2></li>
							<li><a href="http://hometech.elitno.net/analizator-zhira-sostava-tela-tanita-bc-sv-3000r.php"><img src="photos/5e9b4cd093153df88b137e4b04257a76.jpeg" alt="триммер bosch Анализатор жира (состава тела) Tanita BC-542 (SV)" title="триммер bosch Анализатор жира (состава тела) Tanita BC-542 (SV)"></a><h2>Анализатор жира (состава тела) Tanita BC-542 (SV)</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>бигуди на голове Фен-щетка Babyliss AS30E 300 Вт</h1>
						<div class="tb"><p>Цена: от <span class="price">870</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_6990.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Фен-щетка </b><b>Babyliss </b><b>AS30</b><b>E 300 Вт</b> сочетает в себе высокую функциональность и стильный дизайн по приемлемой цене. В комплекте поставляются три насадки: для завивки локонов 38 и 25 мм, для выпрямления с нейлоновой щетиной 20 мм. Мощность в 300 Вт позволит в процессе укладки высушивать волосы. Приобретая продукцию компании Babyliss, вы получаете высокое качество и функциональность по доступной цене.</p><p><b>Комплектация:</b></p><ul type=disc><li>Фен-щетка; <li>Насадка из пластика: 38 мм; <li>Насадка из пластика: 25 мм; <li>Насадка из нейлона: 20 мм; <li>Инструкция.</li></ul><p><b>Особенности:</b></p><ul type=disc><li>Мощность: 300 Вт; <li>Регулировка температуры: 2 режима; <li>Цвет: черный с синим.</li></ul><p><b>Производитель:</b> Babyliss.</p><p><b></b></p><p><b>Гарантия:</b> 2 года.</p> бигуди на голове</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/9a620fdb399918000af975e9d69559f4.jpeg" alt="модели фенов Электрощипцы для выпрямления волос Atlanta АТН-838" title="модели фенов Электрощипцы для выпрямления волос Atlanta АТН-838"><div class="box"><a href="http://hometech.elitno.net/elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-600r.php"><h3 class="title">модели фенов Электрощипцы для выпрямления волос Atlanta АТН-838</h3><p>от <span class="price">600</span> руб.</p></a></div></li>
						<li><img src="photos/0b842281306633c8ae0a56a5ee94d808.jpeg" alt="мини солярий для лица купить Зеркало настольное Rosenberg S-2083" title="мини солярий для лица купить Зеркало настольное Rosenberg S-2083"><div class="box" page="zerkalo-nastolnoe-rosenberg-s-500r"><span class="title">мини солярий для лица купить Зеркало настольное Rosenberg S-2083</span><p>от <span class="price">500</span> руб.</p></div></li>
						<li><img src="photos/ca66537608944cd4881ffac56a0a3e8e.jpeg" alt="триммер для зоны бикини Бальзам для ирригатора DONFEEL Профилактика пародонтоза и гингивита" title="триммер для зоны бикини Бальзам для ирригатора DONFEEL Профилактика пародонтоза и гингивита"><div class="box" page="balzam-dlya-irrigatora-donfeel-profilaktika-parodontoza-i-gingivita-180r"><span class="title">триммер для зоны бикини Бальзам для ирригатора DONFEEL Профилактика пародонтоза и гингивита</span><p>от <span class="price">180</span> руб.</p></div></li>
						<li><img src="photos/1c249153c440530c851d6e7c7521cfb0.jpeg" alt="массаж тазобедренный Ирригатор полости рта CS Medica AquaPulsar OS-1" title="массаж тазобедренный Ирригатор полости рта CS Medica AquaPulsar OS-1"><div class="box" page="irrigator-polosti-rta-cs-medica-aquapulsar-os-2150r"><span class="title">массаж тазобедренный Ирригатор полости рта CS Medica AquaPulsar OS-1</span><p>от <span class="price">2150</span> руб.</p></div></li>
						<li class="large"><img src="photos/19a369233df7f920d9736295c23d4a31.jpeg" alt="водительское зеркало Раскладной массажный стол US Medica Marino линейка Sumo Line" title="водительское зеркало Раскладной массажный стол US Medica Marino линейка Sumo Line"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-marino-lineyka-sumo-line-17500r"><span class="title">водительское зеркало Раскладной массажный стол US Medica Marino линейка Sumo Line</span><p>от <span class="price">17500</span> руб.</p></div></li>
						<li class="large"><img src="photos/73a821d3ad225325ed956d5e193b7846.jpeg" alt="эпилятор ровента отзывы Раскладной массажный стол US Medica Sakura линейка Sumo Line" title="эпилятор ровента отзывы Раскладной массажный стол US Medica Sakura линейка Sumo Line"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-sakura-lineyka-sumo-line-24900r"><span class="title">эпилятор ровента отзывы Раскладной массажный стол US Medica Sakura линейка Sumo Line</span><p>от <span class="price">24900</span> руб.</p></div></li>
						<li class="large"><img src="photos/be933d8d1e85d52fb3b8e981e9e6d19f.jpeg" alt="приготовление фена Подлокотники L73 USM-011" title="приготовление фена Подлокотники L73 USM-011"><div class="box" page="podlokotniki-l-usm-1800r"><span class="title">приготовление фена Подлокотники L73 USM-011</span><p>от <span class="price">1800</span> руб.</p></div></li>
						<li><img src="photos/b840670e7655c80242a9697a1d40b297.jpeg" alt="весы электронные настольные Аппликатор Ляпко Спутник 5,8" title="весы электронные настольные Аппликатор Ляпко Спутник 5,8"><div class="box" page="applikator-lyapko-sputnik-330r"><span class="title">весы электронные настольные Аппликатор Ляпко Спутник 5,8</span><p>от <span class="price">330</span> руб.</p></div></li>
						<li><img src="photos/c8620dbef37f340c26e8c8184b3a5bdc.jpeg" alt="массаж после перелома Ультразвуковой прибор для ухода за кожей лица Gezatone HS3003D" title="массаж после перелома Ультразвуковой прибор для ухода за кожей лица Gezatone HS3003D"><div class="box" page="ultrazvukovoy-pribor-dlya-uhoda-za-kozhey-lica-gezatone-hsd-4490r"><span class="title">массаж после перелома Ультразвуковой прибор для ухода за кожей лица Gezatone HS3003D</span><p>от <span class="price">4490</span> руб.</p></div></li>
						<li><img src="photos/9eba2371b26d150a840e7f4a6794703c.jpeg" alt="фен на аккумуляторах Солярий для лица Efbe-Schott 834" title="фен на аккумуляторах Солярий для лица Efbe-Schott 834"><div class="box" page="solyariy-dlya-lica-efbeschott-4300r"><span class="title">фен на аккумуляторах Солярий для лица Efbe-Schott 834</span><p>от <span class="price">4300</span> руб.</p></div></li>
						<li><img src="photos/5f5038653f3c2015ec2e5347d9b0e3ea.jpeg" alt="ионизатор воды из серебра Электрическая зубная щетка FlexCare HX 6982-10" title="ионизатор воды из серебра Электрическая зубная щетка FlexCare HX 6982-10"><div class="box" page="elektricheskaya-zubnaya-schetka-flexcare-hx-4700r"><span class="title">ионизатор воды из серебра Электрическая зубная щетка FlexCare HX 6982-10</span><p>от <span class="price">4700</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("fenschetka-babyliss-ase-vt-870r.php", 0, -4); if (file_exists("comments/fenschetka-babyliss-ase-vt-870r.php")) require_once "comments/fenschetka-babyliss-ase-vt-870r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="fenschetka-babyliss-ase-vt-870r.php" method="post" onsubmit="return checkForm(this)">
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