<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("fen-vitesse-vs-belyy-640r.php","дубровский массаж");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("fen-vitesse-vs-belyy-640r.php", $nick, $comment);
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
		<title>дубровский массаж Фен Vitesse VS-943 белый  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="дубровский массаж, машинка для стрижки киев, стрижки мужские короткие машинкой, машинка для стрижки волос киев, солярий сан сити, ректальное зеркало, наборы с зеркалом, эпилятор с охлаждающим эффектом, консультации трихолога, куплю триммер в москве, курсы массажа в минске, зеркало ниссан альмера, туалетный столик с зеркалом фото, камеди зеркало,  ремонт машинок для стрижки">
		<meta name="description" content="дубровский массаж Vitesse VS-943 – это компактный фен, который вы можете не  только использовать в...">
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
						<a class="photo" href="photos/2e536713ecf881b83c6b9e9324e25ed1.jpeg" title="дубровский массаж Фен Vitesse VS-943 белый"><img src="photos/2e536713ecf881b83c6b9e9324e25ed1.jpeg" alt="дубровский массаж Фен Vitesse VS-943 белый" title="дубровский массаж Фен Vitesse VS-943 белый -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/bigudi-babyliss-e-termobigudi-1340r.php"><img src="photos/6dfd693fbbe6f82a445e062d56e6a848.jpeg" alt="машинка для стрижки киев Бигуди Babyliss 3060E (термобигуди)" title="машинка для стрижки киев Бигуди Babyliss 3060E (термобигуди)"></a><h2>Бигуди Babyliss 3060E (термобигуди)</h2></li>
							<li><a href="http://hometech.elitno.net/vypryamitel-valera-ionic-ceramic-nanosilver-2480r.php"><img src="photos/480350ac2c02c08c2c9a122491ae6bbf.jpeg" alt="стрижки мужские короткие машинкой Выпрямитель Valera Ionic Ceramic Nanosilver 639.01" title="стрижки мужские короткие машинкой Выпрямитель Valera Ionic Ceramic Nanosilver 639.01"></a><h2>Выпрямитель Valera Ionic Ceramic Nanosilver 639.01</h2></li>
							<li><a href="http://hometech.elitno.net/elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-650r.php"><img src="photos/36e443eaf6287b929dd8b73b824c491a.jpeg" alt="машинка для стрижки волос киев Электрощипцы для выпрямления волос Atlanta АТН-832" title="машинка для стрижки волос киев Электрощипцы для выпрямления волос Atlanta АТН-832"></a><h2>Электрощипцы для выпрямления волос Atlanta АТН-832</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>дубровский массаж Фен Vitesse VS-943 белый</h1>
						<div class="tb"><p>Цена: от <span class="price">640</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_22966.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Vitesse VS-943 – это компактный фен, который вы можете не  только использовать в домашних условиях, но и носить в сумочке в любое время.  Фен Vitesse VS-943 обладает функцией подачи холодного воздуха и 2 режимами  интенсивности воздушного потока, что обеспечивает не только быструю, но и  комфортную сушку волос. Кроме того, данная модель включает в себя функцию  защиты от перегрева, которая препятствует повреждению волос горячим воздухом. Кстати,  всех ценительниц прекрасного порадует и стильный дизайн этой модели фена. Также  в комплекте с феном Vitesse VS-943 идет концентратор и насадки.</p><p><strong>Характеристики:</strong></p><ul type=\disc\><li>Тип: компактный фен;</li><li>Мощность: 1350 Вт;</li><li>Складная ручка;</li><li>Количество режимов: 2;</li><li>Дополнительные режимы: подача холодного воздуха;</li><li>Особенности: защита от перегрева;</li><li>В комплекте: концентратор, насадки;</li></ul><p><strong>Производитель:  Франция</strong></p> дубровский массаж</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/a4916afed5e89e4f7b9b3539fdd5dbae.jpeg" alt="солярий сан сити Электрощипцы для выпрямления волос Atlanta АТН-835" title="солярий сан сити Электрощипцы для выпрямления волос Atlanta АТН-835"><div class="box" page="elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-700r"><span class="title">солярий сан сити Электрощипцы для выпрямления волос Atlanta АТН-835</span><p>от <span class="price">700</span> руб.</p></div></li>
						<li><img src="photos/9245f68f4f84fd4f77a399b1043302af.jpeg" alt="ректальное зеркало Набор для педикюра Пед Эгг (Реd Egg)" title="ректальное зеркало Набор для педикюра Пед Эгг (Реd Egg)"><div class="box" page="nabor-dlya-pedikyura-ped-egg-red-egg-300r"><span class="title">ректальное зеркало Набор для педикюра Пед Эгг (Реd Egg)</span><p>от <span class="price">300</span> руб.</p></div></li>
						<li><img src="photos/173fc00526bb1e09cfe42da1b29445db.jpeg" alt="наборы с зеркалом Раскладной массажный стол YA-01AL" title="наборы с зеркалом Раскладной массажный стол YA-01AL"><div class="box" page="raskladnoy-massazhnyy-stol-yaal-16900r"><span class="title">наборы с зеркалом Раскладной массажный стол YA-01AL</span><p>от <span class="price">16900</span> руб.</p></div></li>
						<li><img src="photos/5d711d5eed018cbd13b88e17524fc23f.jpeg" alt="эпилятор с охлаждающим эффектом Массажный матрас US-Medica Ocean MA-190" title="эпилятор с охлаждающим эффектом Массажный матрас US-Medica Ocean MA-190"><div class="box" page="massazhnyy-matras-usmedica-ocean-ma-30000r"><span class="title">эпилятор с охлаждающим эффектом Массажный матрас US-Medica Ocean MA-190</span><p>от <span class="price">30000</span> руб.</p></div></li>
						<li class="large"><img src="photos/28b4768c3cdb0ef358b594b4e291437d.jpeg" alt="консультации трихолога Стационарный массажный стол US-Medica Sumo Professional" title="консультации трихолога Стационарный массажный стол US-Medica Sumo Professional"><div class="box" page="stacionarnyy-massazhnyy-stol-usmedica-sumo-professional-29500r"><span class="title">консультации трихолога Стационарный массажный стол US-Medica Sumo Professional</span><p>от <span class="price">29500</span> руб.</p></div></li>
						<li class="large"><img src="photos/5d92120d3065dfcf7d5f91af9dd4ca58.jpeg" alt="куплю триммер в москве Массажная накидка ZENET TL-2007-Z" title="куплю триммер в москве Массажная накидка ZENET TL-2007-Z"><div class="box" page="massazhnaya-nakidka-zenet-tlz-4950r"><span class="title">куплю триммер в москве Массажная накидка ZENET TL-2007-Z</span><p>от <span class="price">4950</span> руб.</p></div></li>
						<li class="large"><img src="photos/d881128511cd03aa90feb76747b82b80.jpeg" alt="курсы массажа в минске Воск для депиляции Rica, апельсиновый в картридже 100 мл" title="курсы массажа в минске Воск для депиляции Rica, апельсиновый в картридже 100 мл"><div class="box" page="vosk-dlya-depilyacii-rica-apelsinovyy-v-kartridzhe-ml-140r"><span class="title">курсы массажа в минске Воск для депиляции Rica, апельсиновый в картридже 100 мл</span><p>от <span class="price">140</span> руб.</p></div></li>
						<li><img src="photos/c1e44ae0346cc39b27bb78d6ca139c3e.jpeg" alt="зеркало ниссан альмера Лосьон после депиляции Rica, ментоловый 250мл" title="зеркало ниссан альмера Лосьон после депиляции Rica, ментоловый 250мл"><div class="box" page="loson-posle-depilyacii-rica-mentolovyy-ml-600r"><span class="title">зеркало ниссан альмера Лосьон после депиляции Rica, ментоловый 250мл</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li><img src="photos/0b818c5778593d88240657fc3fa330a4.jpeg" alt="туалетный столик с зеркалом фото Триммер для стрижки волос в области носа и ушей Valera Trimmy 624.01" title="туалетный столик с зеркалом фото Триммер для стрижки волос в области носа и ушей Valera Trimmy 624.01"><div class="box" page="trimmer-dlya-strizhki-volos-v-oblasti-nosa-i-ushey-valera-trimmy-570r"><span class="title">туалетный столик с зеркалом фото Триммер для стрижки волос в области носа и ушей Valera Trimmy 624.01</span><p>от <span class="price">570</span> руб.</p></div></li>
						<li><img src="photos/8d407214430de224e31012888584fda6.jpeg" alt="камеди зеркало Бикини-триммер с функцией бритвы Vitesse VS-961" title="камеди зеркало Бикини-триммер с функцией бритвы Vitesse VS-961"><div class="box" page="bikinitrimmer-s-funkciey-britvy-vitesse-vs-1730r"><span class="title">камеди зеркало Бикини-триммер с функцией бритвы Vitesse VS-961</span><p>от <span class="price">1730</span> руб.</p></div></li>
						<li><img src="photos/1a210244749be72407427b614ce3bd69.jpeg" alt="колледж курсы массажа Зубная щетка-ирригатор AMEE ORAL JET BRAUN MD-18 (MD-20)" title="колледж курсы массажа Зубная щетка-ирригатор AMEE ORAL JET BRAUN MD-18 (MD-20)"><div class="box" page="zubnaya-schetkairrigator-amee-oral-jet-braun-md-md-5600r"><span class="title">колледж курсы массажа Зубная щетка-ирригатор AMEE ORAL JET BRAUN MD-18 (MD-20)</span><p>от <span class="price">5600</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("fen-vitesse-vs-belyy-640r.php", 0, -4); if (file_exists("comments/fen-vitesse-vs-belyy-640r.php")) require_once "comments/fen-vitesse-vs-belyy-640r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="fen-vitesse-vs-belyy-640r.php" method="post" onsubmit="return checkForm(this)">
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