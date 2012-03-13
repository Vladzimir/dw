<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("beurer-vesy-bg-2000r.php","солярий акции");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("beurer-vesy-bg-2000r.php", $nick, $comment);
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
		<title>солярий акции BEURER Весы BG28  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="солярий акции, нечего на зеркало пенять, зеркало хонда аккорд, наборы с зеркалом, курсы массажа стоимость, зеркало на опель астра, массаж при заболеваниях, зеркало задней двери, асахи массаж для тела, массаж обертывание, ожог в солярии, дорожный ирригатор, мужские стрижки под машинку, эпилятор филипс отзывы,  зеркала на ниву">
		<meta name="description" content="солярий акции Вы следите за своим весом и хотите иметь стройную фигуру и  хорошее здоровье? В ...">
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
						<a class="photo" href="photos/396d7ad790b512ebfc9b60cd3372355c.jpeg" title="солярий акции BEURER Весы BG28"><img src="photos/396d7ad790b512ebfc9b60cd3372355c.jpeg" alt="солярий акции BEURER Весы BG28" title="солярий акции BEURER Весы BG28 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/analizator-zhira-sostava-tela-tanita-bc-11790r.php"><img src="photos/12c3045da48a854da3c3024e979ea56d.jpeg" alt="нечего на зеркало пенять Анализатор жира (состава тела) Tanita BC-351" title="нечего на зеркало пенять Анализатор жира (состава тела) Tanita BC-351"></a><h2>Анализатор жира (состава тела) Tanita BC-351</h2></li>
							<li><a href="http://hometech.elitno.net/donfeel-balzam-dlya-polosti-rta-quotdlya-chuvstvitelnyh-zubov-i-desen-s-ekstraktom-malinyquot-195r.php"><img src="photos/c1c3bd42bc7d056a98d7c0e68bb21b63.jpeg" alt="зеркало хонда аккорд Donfeel Бальзам для полости рта &quot;Для чувствительных зубов и десен с экстрактом малины&quot;" title="зеркало хонда аккорд Donfeel Бальзам для полости рта &quot;Для чувствительных зубов и десен с экстрактом малины&quot;"></a><h2>Donfeel Бальзам для полости рта &quot;Для чувствительных зубов и десен с экстрактом малины&quot;</h2></li>
							<li><a href="http://hometech.elitno.net/raskladnoy-massazhnyy-stol-yaal-16900r.php"><img src="photos/173fc00526bb1e09cfe42da1b29445db.jpeg" alt="наборы с зеркалом Раскладной массажный стол YA-01AL" title="наборы с зеркалом Раскладной массажный стол YA-01AL"></a><h2>Раскладной массажный стол YA-01AL</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>солярий акции BEURER Весы BG28</h1>
						<div class="tb"><p>Цена: от <span class="price">2000</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_13500.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Вы следите за своим весом и хотите иметь стройную фигуру и  хорошее здоровье? В таком случае полезным приобретением для вас несомненно  станут электронные диагностические весы. Весы BEURER  BG28 от известной немецкой компании-производителя определяют не только  вес (с точностью до 100 гр), но содержание воды в организме, жировой ткани,  массовую долю жировой и костной ткани, а также производят расчет индекса массы  тела (BMI). Вместе с тем электронные весы BEURER BG28  имеют память на 10 результатов и специальные функции включения/выключения. Приятным  дополнением также служит привлекательный дизайн прибора – модель выполнена в  свежем и элегантном голубом цвете.</p> <p><strong>Характеристики:</strong></p> <ul>   <li>Тип: электронные,  диагностические;</li>   <li>Материал платформы:  стекло;</li>   <li>Максимальная нагрузка:  150 кг;</li>   <li>Точность измерения: 0,1 кг;</li>   <li>Единицы измерения:  кг/фунты;</li>   <li>Дополнительные  измерения: содержание воды, содержание жировой ткани, массовая доля  мышечной ткани, массовая доля костной ткани, расчет индекса массы тела (BMI); </li>   <li>Функция запоминания  результатов на 10 пользователей;</li>   <li>Автоматическое  включение;</li>   <li>Автоматическое  выключение;</li>   <li>Цвет: голубой.</li> </ul> <p><strong>Производитель:</strong> <strong>Beurer (Германия)</strong><br>     <strong>Гарантия: </strong><strong>3 года </strong></p> солярий акции</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/8df4f8dbcfb00ce4c5c74af768f58cb0.jpeg" alt="курсы массажа стоимость Валик полукруглый L60H11 USM-002" title="курсы массажа стоимость Валик полукруглый L60H11 USM-002"><div class="box" page="valik-polukruglyy-lh-usm-1200r"><span class="title">курсы массажа стоимость Валик полукруглый L60H11 USM-002</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li><img src="photos/234e7f009134ec4e716a50e2c790eb7e.jpeg" alt="зеркало на опель астра Аппликатор Ляпко Коврик 6,8" title="зеркало на опель астра Аппликатор Ляпко Коврик 6,8"><div class="box" page="applikator-lyapko-kovrik-2720r"><span class="title">зеркало на опель астра Аппликатор Ляпко Коврик 6,8</span><p>от <span class="price">2720</span> руб.</p></div></li>
						<li><img src="photos/72b586dfa56f31bfc0f823688b4ab76c.jpeg" alt="массаж при заболеваниях Массажер Beurer MG 16 - цвет красный" title="массаж при заболеваниях Массажер Beurer MG 16 - цвет красный"><div class="box" page="massazher-beurer-mg-cvet-krasnyy-500r"><span class="title">массаж при заболеваниях Массажер Beurer MG 16 - цвет красный</span><p>от <span class="price">500</span> руб.</p></div></li>
						<li><img src="photos/75cde016b01871ff8d9976da31b77fd1.jpeg" alt="зеркало задней двери Массажер ZENET TL-MHT-C" title="зеркало задней двери Массажер ZENET TL-MHT-C"><div class="box" page="massazher-zenet-tlmhtc-2050r"><span class="title">зеркало задней двери Массажер ZENET TL-MHT-C</span><p>от <span class="price">2050</span> руб.</p></div></li>
						<li class="large"><img src="photos/bc2944ee563c3b24a06eaacc9776c3c3.jpeg" alt="асахи массаж для тела Массажер медицинский Nozomi MH-103 ICST" title="асахи массаж для тела Массажер медицинский Nozomi MH-103 ICST"><div class="box" page="massazher-medicinskiy-nozomi-mh-icst-1850r"><span class="title">асахи массаж для тела Массажер медицинский Nozomi MH-103 ICST</span><p>от <span class="price">1850</span> руб.</p></div></li>
						<li class="large"><img src="photos/5dd95fcbd77902411af3599387a4ddf5.jpeg" alt="массаж обертывание Массажер для головы Мурашка Антистресс" title="массаж обертывание Массажер для головы Мурашка Антистресс"><div class="box" page="massazher-dlya-golovy-murashka-antistress-200r"><span class="title">массаж обертывание Массажер для головы Мурашка Антистресс</span><p>от <span class="price">200</span> руб.</p></div></li>
						<li class="large"><img src="photos/2da10774211f671836a3e448d640220b.png" alt="ожог в солярии Массажер для стоп US-Medica Omega" title="ожог в солярии Массажер для стоп US-Medica Omega"><div class="box" page="massazher-dlya-stop-usmedica-omega-4500r"><span class="title">ожог в солярии Массажер для стоп US-Medica Omega</span><p>от <span class="price">4500</span> руб.</p></div></li>
						<li><img src="photos/9b3f0e022bbd448ed5b771d1a1f4ed2e.jpeg" alt="дорожный ирригатор Фен Valera Ionic Wellness 2000 545.08DV" title="дорожный ирригатор Фен Valera Ionic Wellness 2000 545.08DV"><div class="box" page="fen-valera-ionic-wellness-dv-2220r"><span class="title">дорожный ирригатор Фен Valera Ionic Wellness 2000 545.08DV</span><p>от <span class="price">2220</span> руб.</p></div></li>
						<li><img src="photos/47acb373ffbb147c27d966071f17fdaa.jpeg" alt="мужские стрижки под машинку Фен Valera Silent 2200 Super Ionic 545.09DV" title="мужские стрижки под машинку Фен Valera Silent 2200 Super Ionic 545.09DV"><div class="box" page="fen-valera-silent-super-ionic-dv-2330r"><span class="title">мужские стрижки под машинку Фен Valera Silent 2200 Super Ionic 545.09DV</span><p>от <span class="price">2330</span> руб.</p></div></li>
						<li><img src="photos/52f08ec28309d7a90cb25c044bae31d4.jpeg" alt="эпилятор филипс отзывы Фен Braun SPI C2000 DF" title="эпилятор филипс отзывы Фен Braun SPI C2000 DF"><div class="box" page="fen-braun-spi-c-df-2810r"><span class="title">эпилятор филипс отзывы Фен Braun SPI C2000 DF</span><p>от <span class="price">2810</span> руб.</p></div></li>
						<li><img src="photos/57f3d365b7fef295495b26d502528449.jpeg" alt="регулировка машинки для стрижки Насадка для щёток OMRON Triple Cleaning Head SB-070" title="регулировка машинки для стрижки Насадка для щёток OMRON Triple Cleaning Head SB-070"><div class="box" page="nasadka-dlya-schetok-omron-triple-cleaning-head-sb-300r"><span class="title">регулировка машинки для стрижки Насадка для щёток OMRON Triple Cleaning Head SB-070</span><p>от <span class="price">300</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("beurer-vesy-bg-2000r.php", 0, -4); if (file_exists("comments/beurer-vesy-bg-2000r.php")) require_once "comments/beurer-vesy-bg-2000r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="beurer-vesy-bg-2000r.php" method="post" onsubmit="return checkForm(this)">
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