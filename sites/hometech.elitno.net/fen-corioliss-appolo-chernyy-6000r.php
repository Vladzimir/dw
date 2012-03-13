<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("fen-corioliss-appolo-chernyy-6000r.php","расческа для выпрямления волос");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("fen-corioliss-appolo-chernyy-6000r.php", $nick, $comment);
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
		<title>расческа для выпрямления волос Фен Corioliss Appolo черный  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="расческа для выпрямления волос, стоимость солярия, акупунктурный массаж, зеркалом блестит река, ирригатор braun, наборы с зеркалом, весы маленькие электронные, зеркало психология, вакансии маникюр педикюр, магазин соляриев, массаж после перелома, завивка на длинные волосы фото, триммер бензиновый husqvarna, электрическая зубная щетка орал би,  кривые зеркала текст">
		<meta name="description" content="расческа для выпрямления волос Многофункциональный надежный фен Appolo от Corioliss обладает мощностью 2000 Вт,...">
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
						<a class="photo" href="photos/c54e699249e8d288849c5af815d2e97b.jpeg" title="расческа для выпрямления волос Фен Corioliss Appolo черный"><img src="photos/c54e699249e8d288849c5af815d2e97b.jpeg" alt="расческа для выпрямления волос Фен Corioliss Appolo черный" title="расческа для выпрямления волос Фен Corioliss Appolo черный -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-bytovye-tanita-hd-3700r.php"><img src="photos/07ef3c12017d28c1e6e84a22589adc62.jpeg" alt="стоимость солярия Весы бытовые Tanita HD-357" title="стоимость солярия Весы бытовые Tanita HD-357"></a><h2>Весы бытовые Tanita HD-357</h2></li>
							<li><a href="http://hometech.elitno.net/schipcy-dlya-vypryamleniya-volos-professionalnyy-stilist-vitesse-vs-1130r.php"><img src="photos/95f83d2fc77a8c1038cbf28dc7b115c0.jpeg" alt="акупунктурный массаж Щипцы для выпрямления волос, Профессиональный стилист, Vitesse VS-933" title="акупунктурный массаж Щипцы для выпрямления волос, Профессиональный стилист, Vitesse VS-933"></a><h2>Щипцы для выпрямления волос, Профессиональный стилист, Vitesse VS-933</h2></li>
							<li><a href="http://hometech.elitno.net/zerkalo-dvustoronnee-babyliss-e-s-mi-kratnym-uvelicheniem-3190r.php"><img src="photos/c31991b00bf6f0f8d0461c8a88e7db13.jpeg" alt="зеркалом блестит река Зеркало двустороннее Babyliss 8438Е с 8-ми кратным увеличением" title="зеркалом блестит река Зеркало двустороннее Babyliss 8438Е с 8-ми кратным увеличением"></a><h2>Зеркало двустороннее Babyliss 8438Е с 8-ми кратным увеличением</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>расческа для выпрямления волос Фен Corioliss Appolo черный</h1>
						<div class="tb"><p>Цена: от <span class="price">6000</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_14412.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Многофункциональный надежный фен Appolo от Corioliss обладает мощностью 2000 Вт, поэтому легко и быстро справится с сушкой волос. Он снабжен специальным колесиком для удобной регулировки скорости, технологией подачи холодного воздуха, выдувает ионизированный воздух, предотвращая статическое электричество. В целях безопасности предусмотрено автоматическое отключение в случае падения прибора. Фен комплектуется диффузорами и стильной дизайнерской сумкой с отделениями для инструментов.</p><p><b>Особенности и преимущества:</b></p><ul type=disc><li>Революционная система регулировки скорости колесиком; </li><li>Мощность мотора – 2000 Вт; </li><li>Технология подачи холодного воздуха; </li><li>Выдувает ионизированный воздух и предотвращает статическое электричество; </li><li>В комплект входит дизайнерская сумка с отделениями для инструментов и диффузоры; </li><li>Автоматическая система отключения при падении.</li></ul><p><b>Производитель:</b> Corioliss.</p><p><b>Страна:</b> Англия.</p><p><b>Гарантия:</b> 1 год.</p> расческа для выпрямления волос</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/3025b33574a5012cbf58b0e574fda6d1.jpeg" alt="ирригатор braun Косметический набор Beurer MP05+HL05+BS05" title="ирригатор braun Косметический набор Beurer MP05+HL05+BS05"><div class="box" page="kosmeticheskiy-nabor-beurer-mphlbs-1550r"><span class="title">ирригатор braun Косметический набор Beurer MP05+HL05+BS05</span><p>от <span class="price">1550</span> руб.</p></div></li>
						<li><img src="photos/173fc00526bb1e09cfe42da1b29445db.jpeg" alt="наборы с зеркалом Раскладной массажный стол YA-01AL" title="наборы с зеркалом Раскладной массажный стол YA-01AL"><div class="box" page="raskladnoy-massazhnyy-stol-yaal-16900r"><span class="title">наборы с зеркалом Раскладной массажный стол YA-01AL</span><p>от <span class="price">16900</span> руб.</p></div></li>
						<li><img src="photos/cf3d408ea107629e3420a5a0b210de54.jpeg" alt="весы маленькие электронные Валик полукруглый L31H7 USM-005" title="весы маленькие электронные Валик полукруглый L31H7 USM-005"><div class="box" page="valik-polukruglyy-lh-usm-1000r"><span class="title">весы маленькие электронные Валик полукруглый L31H7 USM-005</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li><img src="photos/4aca7dd74af44ac0b4f6a79b9df1a999.jpeg" alt="зеркало психология Многофункциональный прибор Пояс Здоровья Gezatone m142 1301057" title="зеркало психология Многофункциональный прибор Пояс Здоровья Gezatone m142 1301057"><div class="box" page="mnogofunkcionalnyy-pribor-poyas-zdorovya-gezatone-m-2300r"><span class="title">зеркало психология Многофункциональный прибор Пояс Здоровья Gezatone m142 1301057</span><p>от <span class="price">2300</span> руб.</p></div></li>
						<li class="large"><img src="photos/75b05ae33b613e40ffe8181cdc09a99b.jpeg" alt="вакансии маникюр педикюр Массажер ZENET TL-MHT-H" title="вакансии маникюр педикюр Массажер ZENET TL-MHT-H"><div class="box" page="massazher-zenet-tlmhth-1250r"><span class="title">вакансии маникюр педикюр Массажер ZENET TL-MHT-H</span><p>от <span class="price">1250</span> руб.</p></div></li>
						<li class="large"><img src="photos/bf7091b51f9b18fac68640a374cc7836.jpeg" alt="магазин соляриев Импульсный массажер для лица Gezatone BT-101 4 сменных насадки" title="магазин соляриев Импульсный массажер для лица Gezatone BT-101 4 сменных насадки"><div class="box" page="impulsnyy-massazher-dlya-lica-gezatone-bt-smennyh-nasadki-2800r"><span class="title">магазин соляриев Импульсный массажер для лица Gezatone BT-101 4 сменных насадки</span><p>от <span class="price">2800</span> руб.</p></div></li>
						<li class="large"><img src="photos/c8620dbef37f340c26e8c8184b3a5bdc.jpeg" alt="массаж после перелома Ультразвуковой прибор для ухода за кожей лица Gezatone HS3003D" title="массаж после перелома Ультразвуковой прибор для ухода за кожей лица Gezatone HS3003D"><div class="box" page="ultrazvukovoy-pribor-dlya-uhoda-za-kozhey-lica-gezatone-hsd-4490r"><span class="title">массаж после перелома Ультразвуковой прибор для ухода за кожей лица Gezatone HS3003D</span><p>от <span class="price">4490</span> руб.</p></div></li>
						<li><img src="photos/cae249c48fcfeacbbf7bd176d817de70.jpeg" alt="завивка на длинные волосы фото Воск для депиляции Rica, медовый в картридже 100 мл" title="завивка на длинные волосы фото Воск для депиляции Rica, медовый в картридже 100 мл"><div class="box" page="vosk-dlya-depilyacii-rica-medovyy-v-kartridzhe-ml-150r"><span class="title">завивка на длинные волосы фото Воск для депиляции Rica, медовый в картридже 100 мл</span><p>от <span class="price">150</span> руб.</p></div></li>
						<li><img src="photos/411b114c42a782dcb76d7868ef5adbca.jpeg" alt="триммер бензиновый husqvarna Лосьон после депиляции Rica, с экстрактом розы 250мл" title="триммер бензиновый husqvarna Лосьон после депиляции Rica, с экстрактом розы 250мл"><div class="box" page="loson-posle-depilyacii-rica-s-ekstraktom-rozy-ml-600r"><span class="title">триммер бензиновый husqvarna Лосьон после депиляции Rica, с экстрактом розы 250мл</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li><img src="photos/604fac3d6bc90d1a626b6fb1f84938bc.jpeg" alt="электрическая зубная щетка орал би Машинка для стрижки Vitesse VS-383" title="электрическая зубная щетка орал би Машинка для стрижки Vitesse VS-383"><div class="box" page="mashinka-dlya-strizhki-vitesse-vs-700r"><span class="title">электрическая зубная щетка орал би Машинка для стрижки Vitesse VS-383</span><p>от <span class="price">700</span> руб.</p></div></li>
						<li><img src="photos/10ceb77aa96c6d5e616328dc5dbf9640.jpeg" alt="фен ровента с вращающейся щеткой Эпилятор Braun 5280 Xelle" title="фен ровента с вращающейся щеткой Эпилятор Braun 5280 Xelle"><div class="box" page="epilyator-braun-xelle-2800r"><span class="title">фен ровента с вращающейся щеткой Эпилятор Braun 5280 Xelle</span><p>от <span class="price">2800</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("fen-corioliss-appolo-chernyy-6000r.php", 0, -4); if (file_exists("comments/fen-corioliss-appolo-chernyy-6000r.php")) require_once "comments/fen-corioliss-appolo-chernyy-6000r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="fen-corioliss-appolo-chernyy-6000r.php" method="post" onsubmit="return checkForm(this)">
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