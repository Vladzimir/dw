<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("mashinka-dlya-strizhki-volos-corioliss-grand-prix-3750r.php","обучающие курсы массажа");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("mashinka-dlya-strizhki-volos-corioliss-grand-prix-3750r.php", $nick, $comment);
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
		<title>обучающие курсы массажа Машинка для стрижки волос Corioliss Grand Prix  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="обучающие курсы массажа, фен для волос rowenta, чувственный массаж, зеркало недорого, зеркала с повторителем, весы cas электронные, техника массажа сердца, купить дарсонваль карат, весы маленькие электронные, двигатель для триммера, щадящая завивка волос, курсы массажа в минске, электрическая зубная щетка орал би, косметология массаж,  массаж тазобедренный">
		<meta name="description" content="обучающие курсы массажа Вдохновившись гонками Формулы 1, известный английский производитель Corioliss со...">
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
						<a class="photo" href="photos/a70a4eca436f5b2965400a809b31f370.jpeg" title="обучающие курсы массажа Машинка для стрижки волос Corioliss Grand Prix"><img src="photos/a70a4eca436f5b2965400a809b31f370.jpeg" alt="обучающие курсы массажа Машинка для стрижки волос Corioliss Grand Prix" title="обучающие курсы массажа Машинка для стрижки волос Corioliss Grand Prix -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/miostimulyator-face-slendertone-dlya-podtyazhki-kozhi-lica-13900r.php"><img src="photos/762c653f3103724bc7a81e305f1935d9.jpeg" alt="фен для волос rowenta Миостимулятор Face Slendertone для подтяжки кожи лица" title="фен для волос rowenta Миостимулятор Face Slendertone для подтяжки кожи лица"></a><h2>Миостимулятор Face Slendertone для подтяжки кожи лица</h2></li>
							<li><a href="http://hometech.elitno.net/bigudi-valera-quick-termobigudi-3030r.php"><img src="photos/ea6a2898ef3873b7a549ab1554409bf5.jpeg" alt="чувственный массаж Бигуди Valera 605.01 Quick 24 (термобигуди)" title="чувственный массаж Бигуди Valera 605.01 Quick 24 (термобигуди)"></a><h2>Бигуди Valera 605.01 Quick 24 (термобигуди)</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-bytovye-elektronnye-omron-hn-1700r.php"><img src="photos/1c286fb4a2f394536fb915a6d87649a7.jpeg" alt="зеркало недорого Весы бытовые электронные OMRON HN-283" title="зеркало недорого Весы бытовые электронные OMRON HN-283"></a><h2>Весы бытовые электронные OMRON HN-283</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>обучающие курсы массажа Машинка для стрижки волос Corioliss Grand Prix</h1>
						<div class="tb"><p>Цена: от <span class="price">3750</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_14415.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Вдохновившись гонками Формулы 1, известный английский производитель Corioliss создал эксклюзивную машинку для стрижки волос Grand Prix, в которой объединил стильный ультрамодный дизайн с инновационными технологиями. Профессиональный прибор представлен в трех неподражаемых принтах: Monza - итальянская гоночная машина красного цвета, Silverstone – английский автомобиль зеленого цвета и La Mans – голубая французская машина. Эргономичный дизайн, мощный мотор, точность и надежность в работе, а также применение исключительно качественных материалов - с Grand Prix любая стрижка станет яркой, стильной и легкой.</p><p><b>Особенности и преимущества:</b></p><ul type=disc><li>Лезвия из немецкой стали; <li>Частота 50Гц; <li>Профессиональный мотор; <li>Удобный рычаг; <li>Масло для лезвий и щетка для очистки регулирующий уровень лезвий; <li>Длина кабеля - 3 м; <li>Набор насадок; <li>220-240 Вольт.</li></ul><p><b>Производитель:</b> Corioliss.</p><p><b>Страна:</b> Англия.</p><p><b>Гарантия:</b> 1 год.</p> обучающие курсы массажа</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/63cbd51c577ee000c18c439d41a34667.jpeg" alt="зеркала с повторителем Напольные электронные весы Beurer PS45 BMI" title="зеркала с повторителем Напольные электронные весы Beurer PS45 BMI"><div class="box" page="napolnye-elektronnye-vesy-beurer-ps-bmi-4000r"><span class="title">зеркала с повторителем Напольные электронные весы Beurer PS45 BMI</span><p>от <span class="price">4000</span> руб.</p></div></li>
						<li><img src="photos/7dbc33322e4439b0f562bbaf80476cbb.jpeg" alt="весы cas электронные Анализатор жира (состава тела) Tanita BC-575" title="весы cas электронные Анализатор жира (состава тела) Tanita BC-575"><div class="box" page="analizator-zhira-sostava-tela-tanita-bc-2750r"><span class="title">весы cas электронные Анализатор жира (состава тела) Tanita BC-575</span><p>от <span class="price">2750</span> руб.</p></div></li>
						<li><img src="photos/7bf9d94bef7f7d982ce7407ebebbc6e0.jpeg" alt="техника массажа сердца Сменный картридж к осеребрителю Георгий" title="техника массажа сердца Сменный картридж к осеребрителю Георгий"><div class="box" page="smennyy-kartridzh-k-oserebritelyu-georgiy-430r"><span class="title">техника массажа сердца Сменный картридж к осеребрителю Георгий</span><p>от <span class="price">430</span> руб.</p></div></li>
						<li><img src="photos/db70e4caed6a14bdf471de2cc1b8511a.jpeg" alt="купить дарсонваль карат Насадки для ирригаторов серии AquaPulsar (4шт.) OMRON CS Medica AP-40" title="купить дарсонваль карат Насадки для ирригаторов серии AquaPulsar (4шт.) OMRON CS Medica AP-40"><div class="box" page="nasadki-dlya-irrigatorov-serii-aquapulsar-sht-omron-cs-medica-ap-360r"><span class="title">купить дарсонваль карат Насадки для ирригаторов серии AquaPulsar (4шт.) OMRON CS Medica AP-40</span><p>от <span class="price">360</span> руб.</p></div></li>
						<li class="large"><img src="photos/cf3d408ea107629e3420a5a0b210de54.jpeg" alt="весы маленькие электронные Валик полукруглый L31H7 USM-005" title="весы маленькие электронные Валик полукруглый L31H7 USM-005"><div class="box" page="valik-polukruglyy-lh-usm-1000r"><span class="title">весы маленькие электронные Валик полукруглый L31H7 USM-005</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li class="large"><img src="photos/bff935c34202fecb6c42480671fe51be.jpeg" alt="двигатель для триммера Массажная накидка US-Medica Pilot" title="двигатель для триммера Массажная накидка US-Medica Pilot"><div class="box" page="massazhnaya-nakidka-usmedica-pilot-3500r"><span class="title">двигатель для триммера Массажная накидка US-Medica Pilot</span><p>от <span class="price">3500</span> руб.</p></div></li>
						<li class="large"><img src="photos/66244ec47caa50bd5231af5a58d04113.jpeg" alt="щадящая завивка волос Вакуумный очиститель кожи с влажной функцией Gezatone Super Wet Cleaner" title="щадящая завивка волос Вакуумный очиститель кожи с влажной функцией Gezatone Super Wet Cleaner"><div class="box" page="vakuumnyy-ochistitel-kozhi-s-vlazhnoy-funkciey-gezatone-super-wet-cleaner-1600r"><span class="title">щадящая завивка волос Вакуумный очиститель кожи с влажной функцией Gezatone Super Wet Cleaner</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li><img src="photos/d881128511cd03aa90feb76747b82b80.jpeg" alt="курсы массажа в минске Воск для депиляции Rica, апельсиновый в картридже 100 мл" title="курсы массажа в минске Воск для депиляции Rica, апельсиновый в картридже 100 мл"><div class="box" page="vosk-dlya-depilyacii-rica-apelsinovyy-v-kartridzhe-ml-140r"><span class="title">курсы массажа в минске Воск для депиляции Rica, апельсиновый в картридже 100 мл</span><p>от <span class="price">140</span> руб.</p></div></li>
						<li><img src="photos/604fac3d6bc90d1a626b6fb1f84938bc.jpeg" alt="электрическая зубная щетка орал би Машинка для стрижки Vitesse VS-383" title="электрическая зубная щетка орал би Машинка для стрижки Vitesse VS-383"><div class="box" page="mashinka-dlya-strizhki-vitesse-vs-700r"><span class="title">электрическая зубная щетка орал би Машинка для стрижки Vitesse VS-383</span><p>от <span class="price">700</span> руб.</p></div></li>
						<li><img src="photos/903db6a8dda8fc3e969d37c0855d0ace.jpeg" alt="косметология массаж Фен Vitesse VS-944" title="косметология массаж Фен Vitesse VS-944"><div class="box" page="fen-vitesse-vs-640r-2"><span class="title">косметология массаж Фен Vitesse VS-944</span><p>от <span class="price">640</span> руб.</p></div></li>
						<li><img src="photos/911946efc52754ce84a17ed8828d0d7d.jpeg" alt="химия на крупные бигуди Зубная нить DONFEEL UF-628, 30 м" title="химия на крупные бигуди Зубная нить DONFEEL UF-628, 30 м"><div class="box" page="zubnaya-nit-donfeel-uf-m-92r-2"><span class="title">химия на крупные бигуди Зубная нить DONFEEL UF-628, 30 м</span><p>от <span class="price">92</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("mashinka-dlya-strizhki-volos-corioliss-grand-prix-3750r.php", 0, -4); if (file_exists("comments/mashinka-dlya-strizhki-volos-corioliss-grand-prix-3750r.php")) require_once "comments/mashinka-dlya-strizhki-volos-corioliss-grand-prix-3750r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="mashinka-dlya-strizhki-volos-corioliss-grand-prix-3750r.php" method="post" onsubmit="return checkForm(this)">
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