<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("epilyator-braun-se-4020r.php","образцы зеркал");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("epilyator-braun-se-4020r.php", $nick, $comment);
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
		<title>образцы зеркал Эпилятор Braun SE7280  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="образцы зеркал, нечего на зеркало пенять, домашний мини солярий, акупунктурный массаж, для маникюра и педикюра купить, антирадар зеркало, техника медового массажа, тайский массаж ног, расческа фен отзывы, картридж для электробритвы, зеркала в доме, электробритва браун отзывы, солярий шоколад, триммер для волос в носу,  ремонт машинок для стрижки">
		<meta name="description" content="образцы зеркал Деликатный и эффективный эпилятор от Braun поможет вам быстро и легко добиться г...">
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
						<a class="photo" href="photos/53d9072b8f04cf4458796dff45e54e15.jpeg" title="образцы зеркал Эпилятор Braun SE7280"><img src="photos/53d9072b8f04cf4458796dff45e54e15.jpeg" alt="образцы зеркал Эпилятор Braun SE7280" title="образцы зеркал Эпилятор Braun SE7280 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/analizator-zhira-sostava-tela-tanita-bc-11790r.php"><img src="photos/12c3045da48a854da3c3024e979ea56d.jpeg" alt="нечего на зеркало пенять Анализатор жира (состава тела) Tanita BC-351" title="нечего на зеркало пенять Анализатор жира (состава тела) Tanita BC-351"></a><h2>Анализатор жира (состава тела) Tanita BC-351</h2></li>
							<li><a href="http://hometech.elitno.net/analizator-zhirovoy-massy-tanita-mc-569000r.php"><img src="photos/ac422a9d1c8a424c0704c63a1c376866.jpeg" alt="домашний мини солярий Анализатор жировой массы Tanita MC-180" title="домашний мини солярий Анализатор жировой массы Tanita MC-180"></a><h2>Анализатор жировой массы Tanita MC-180</h2></li>
							<li><a href="http://hometech.elitno.net/schipcy-dlya-vypryamleniya-volos-professionalnyy-stilist-vitesse-vs-1130r.php"><img src="photos/95f83d2fc77a8c1038cbf28dc7b115c0.jpeg" alt="акупунктурный массаж Щипцы для выпрямления волос, Профессиональный стилист, Vitesse VS-933" title="акупунктурный массаж Щипцы для выпрямления волос, Профессиональный стилист, Vitesse VS-933"></a><h2>Щипцы для выпрямления волос, Профессиональный стилист, Vitesse VS-933</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>образцы зеркал Эпилятор Braun SE7280</h1>
						<div class="tb"><p>Цена: от <span class="price">4020</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_12035.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Деликатный и эффективный эпилятор от Braun поможет вам быстро и легко добиться гладкой кожи, которая еще долго останется шелковистой. Двойная массажная система, 2 скорости работы, 40 пинцетов и отличный набор насадок обеспечат вам хороший результат.</p><p>Удобная плавающая головка с возможностью промывки двигается вперед и назад под углом до15 градусов, что позволяет ей лучше повторять контуры тела для более комфортной эпиляции. Массажная система Silkepil стимулирует кожу и «отвлекает» ее в процессе обработки. Подсветка SmartLight делает видимыми даже самые незаметные волоски.</p><p><b>Характеристики: </b></p><ul type=disc><li>Тип: эпилятор <li>Число скоростей: 2 <li>Эпиляционная головка: плавающая, с возможностью промывки <li>Питание: от сети <li>Система Hair Lift: есть <li>Количество пинцетов: 40 <li>Подсветка: есть <li>Использование с применением пены: нет <li>Насадки: для бритья, массажер, насадка-ограничитель <li>В комплекте: щетка для очистки, футляр</li></ul><p><b>Производитель:</b> Braun.</p><p><b>Страна:</b> Германия.</p> образцы зеркал</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/75d902ae8807f03207b39389f629860a.jpeg" alt="для маникюра и педикюра купить Щипцы для выпрямления волос Профессиональный стилист Vitesse VS-932" title="для маникюра и педикюра купить Щипцы для выпрямления волос Профессиональный стилист Vitesse VS-932"><div class="box"><a href="http://hometech.elitno.net/schipcy-dlya-vypryamleniya-volos-professionalnyy-stilist-vitesse-vs-1100r.php"><h3 class="title">для маникюра и педикюра купить Щипцы для выпрямления волос Профессиональный стилист Vitesse VS-932</h3><p>от <span class="price">1100</span> руб.</p></a></div></li>
						<li><img src="photos/5712abdb0c58f572c0d79788d5ffdca4.jpeg" alt="антирадар зеркало Насадка Палочка для КАРАТ ДЕ-212 Дарсонваль" title="антирадар зеркало Насадка Палочка для КАРАТ ДЕ-212 Дарсонваль"><div class="box" page="nasadka-palochka-dlya-karat-de-darsonval-300r"><span class="title">антирадар зеркало Насадка Палочка для КАРАТ ДЕ-212 Дарсонваль</span><p>от <span class="price">300</span> руб.</p></div></li>
						<li><img src="photos/ca3cac97732e962cf09778cd2b8d779d.jpeg" alt="техника медового массажа Гель для домашнего ухода. 0,4 % фторида олова. Home care." title="техника медового массажа Гель для домашнего ухода. 0,4 % фторида олова. Home care."><div class="box" page="gel-dlya-domashnego-uhoda-ftorida-olova-home-care-540r"><span class="title">техника медового массажа Гель для домашнего ухода. 0,4 % фторида олова. Home care.</span><p>от <span class="price">540</span> руб.</p></div></li>
						<li><img src="photos/b065bebb64de8f2c346a89fd812de718.jpeg" alt="тайский массаж ног Восстановление. Реминерализующий гель с фтором. Revive." title="тайский массаж ног Восстановление. Реминерализующий гель с фтором. Revive."><div class="box" page="vosstanovlenie-remineralizuyuschiy-gel-s-ftorom-revive-540r"><span class="title">тайский массаж ног Восстановление. Реминерализующий гель с фтором. Revive.</span><p>от <span class="price">540</span> руб.</p></div></li>
						<li class="large"><img src="photos/08e4b83a03d978d9f74e3f0763b49dd6.jpeg" alt="расческа фен отзывы Раскладной массажный стол US Medica Bora-Bora линейка SPA" title="расческа фен отзывы Раскладной массажный стол US Medica Bora-Bora линейка SPA"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-borabora-lineyka-spa-24400r"><span class="title">расческа фен отзывы Раскладной массажный стол US Medica Bora-Bora линейка SPA</span><p>от <span class="price">24400</span> руб.</p></div></li>
						<li class="large"><img src="photos/2c25dbb509feb3825290d2d56dd8e055.jpeg" alt="картридж для электробритвы Стационарный массажный стол US Medica Olimp" title="картридж для электробритвы Стационарный массажный стол US Medica Olimp"><div class="box" page="stacionarnyy-massazhnyy-stol-us-medica-olimp-42000r"><span class="title">картридж для электробритвы Стационарный массажный стол US Medica Olimp</span><p>от <span class="price">42000</span> руб.</p></div></li>
						<li class="large"><img src="photos/141e64aa65d868c3a97b8e656348cb5f.jpeg" alt="зеркала в доме Аппликатор Ляпко Квадро 6,2" title="зеркала в доме Аппликатор Ляпко Квадро 6,2"><div class="box" page="applikator-lyapko-kvadro-1360r"><span class="title">зеркала в доме Аппликатор Ляпко Квадро 6,2</span><p>от <span class="price">1360</span> руб.</p></div></li>
						<li><img src="photos/0f804e21b3b864128c310dab356b8737.jpeg" alt="электробритва браун отзывы Массажёр Фараон-М" title="электробритва браун отзывы Массажёр Фараон-М"><div class="box" page="massazher-faraonm-260r"><span class="title">электробритва браун отзывы Массажёр Фараон-М</span><p>от <span class="price">260</span> руб.</p></div></li>
						<li><img src="photos/3f058fca0af13e434cdaba91b5eca059.jpeg" alt="солярий шоколад Шарф массажный NAP Massage Wrap" title="солярий шоколад Шарф массажный NAP Massage Wrap"><div class="box" page="sharf-massazhnyy-nap-massage-wrap-670r"><span class="title">солярий шоколад Шарф массажный NAP Massage Wrap</span><p>от <span class="price">670</span> руб.</p></div></li>
						<li><img src="photos/6d48bec212af26655fd41e486d8ba53a.jpeg" alt="триммер для волос в носу Массажная накидка на сидение с нагревом BODYCRAFT К-52" title="триммер для волос в носу Массажная накидка на сидение с нагревом BODYCRAFT К-52"><div class="box" page="massazhnaya-nakidka-na-sidenie-s-nagrevom-bodycraft-k-9690r"><span class="title">триммер для волос в носу Массажная накидка на сидение с нагревом BODYCRAFT К-52</span><p>от <span class="price">9690</span> руб.</p></div></li>
						<li><img src="photos/2c7a77c230be7b8e97a075b819c83be5.jpeg" alt="общий массаж тела Солярий для лица Efbe-Schott 836" title="общий массаж тела Солярий для лица Efbe-Schott 836"><div class="box" page="solyariy-dlya-lica-efbeschott-5000r"><span class="title">общий массаж тела Солярий для лица Efbe-Schott 836</span><p>от <span class="price">5000</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("epilyator-braun-se-4020r.php", 0, -4); if (file_exists("comments/epilyator-braun-se-4020r.php")) require_once "comments/epilyator-braun-se-4020r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="epilyator-braun-se-4020r.php" method="post" onsubmit="return checkForm(this)">
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