<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("corioliss-sxe-stayler-s-dinamikom-5400r.php","правильный массаж простаты");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("corioliss-sxe-stayler-s-dinamikom-5400r.php", $nick, $comment);
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
		<title>правильный массаж простаты Corioliss SXE Стайлер с динамиком  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="правильный массаж простаты, виды химической завивки волос фото, нечего на зеркало пенять, читать книгу зеркало, вконтакте зеркало вход, выпрямление волос в минске, маски блески бигуди азбука красоты, носовые платочки, зеркало заднего вида 2110, фигурные зеркала, куплю триммер в москве, пройти курсы массажа, зеркало toyota corolla, бигуди на голове,  регулировка машинки для стрижки">
		<meta name="description" content="правильный массаж простаты Ультратонкий дизайн стайлера Corioliss SXE идеально подходит для того, чтобы соз...">
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
						<a class="photo" href="photos/3236b8d5698a5c7c266d5f8f0d9d1ca6.jpeg" title="правильный массаж простаты Corioliss SXE Стайлер с динамиком"><img src="photos/3236b8d5698a5c7c266d5f8f0d9d1ca6.jpeg" alt="правильный массаж простаты Corioliss SXE Стайлер с динамиком" title="правильный массаж простаты Corioliss SXE Стайлер с динамиком -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/zauber-elektronnye-napolnye-vesy-eco-1580r-3.php"><img src="photos/b98fd66435dfbeabe9e3e25e0195a774.jpeg" alt="виды химической завивки волос фото Zauber Электронные напольные весы  ECO-170" title="виды химической завивки волос фото Zauber Электронные напольные весы  ECO-170"></a><h2>Zauber Электронные напольные весы  ECO-170</h2></li>
							<li><a href="http://hometech.elitno.net/analizator-zhira-sostava-tela-tanita-bc-11790r.php"><img src="photos/12c3045da48a854da3c3024e979ea56d.jpeg" alt="нечего на зеркало пенять Анализатор жира (состава тела) Tanita BC-351" title="нечего на зеркало пенять Анализатор жира (состава тела) Tanita BC-351"></a><h2>Анализатор жира (состава тела) Tanita BC-351</h2></li>
							<li><a href="http://hometech.elitno.net/vypryamitel-dlya-volos-braun-ess-2530r.php"><img src="photos/6320dccf20857c12aa3b605bb831003f.jpeg" alt="читать книгу зеркало Выпрямитель для волос Braun ESS" title="читать книгу зеркало Выпрямитель для волос Braun ESS"></a><h2>Выпрямитель для волос Braun ESS</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>правильный массаж простаты Corioliss SXE Стайлер с динамиком</h1>
						<div class="tb"><p>Цена: от <span class="price">5400</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_14312.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Ультратонкий дизайн стайлера Corioliss SXE идеально подходит для того, чтобы создавать роскошные кудри. Он очень прост и необыкновенно удобен в использовании. Прибор снабжен керамическими пластинами, которые при нагревании выделяют отрицательно заряженные ионы, удерживающие влагу и укрепляющие структуру волос. В результате Вы получите красивую, стильную укладку и гладкие, шелковистые волосы. </p><p><b>Особенности и преимущества:</b></p><ul type=disc><li>Простое управление температурой от 60 до 210єC; <li>Ультратонкий корпус; <li>Автоматический режим отключения через 60 минут использования; <li>Благодаря керамике поверхность быстро нагревается, турмалин укрепляет структуру волоса; <li>Сверхбыстрое нагревание пластин до 210єC за 15 секунд; <li>Трехметровый провод для свободы передвижения во время укладки; <li>Подставка-динамик + USB.</li></ul><p><b>Производитель:</b> Corioliss.</p><p><b>Страна:</b> Англия.</p><p><b>Гарантия:</b> 1 год.</p> правильный массаж простаты</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/ac3c60f4ec3044e4c2c5250cb4b2650e.jpeg" alt="вконтакте зеркало вход Насадка бородавчатая для КАРАТ ДЕ-212 Дарсонваль" title="вконтакте зеркало вход Насадка бородавчатая для КАРАТ ДЕ-212 Дарсонваль"><div class="box"><a href="http://hometech.elitno.net/nasadka-borodavchataya-dlya-karat-de-darsonval-300r.php"><h3 class="title">вконтакте зеркало вход Насадка бородавчатая для КАРАТ ДЕ-212 Дарсонваль</h3><p>от <span class="price">300</span> руб.</p></a></div></li>
						<li><img src="photos/fe2e571e3ec9d86eec9199812acac221.jpeg" alt="выпрямление волос в минске Насадка вагинальная для КАРАТ ДЕ-212 Дарсонваль" title="выпрямление волос в минске Насадка вагинальная для КАРАТ ДЕ-212 Дарсонваль"><div class="box" page="nasadka-vaginalnaya-dlya-karat-de-darsonval-300r"><span class="title">выпрямление волос в минске Насадка вагинальная для КАРАТ ДЕ-212 Дарсонваль</span><p>от <span class="price">300</span> руб.</p></div></li>
						<li><img src="photos/053285d569e1ae555817f73299eae874.jpeg" alt="маски блески бигуди азбука красоты Раскладной массажный стол US Medica Osaka линейка Sumo Line" title="маски блески бигуди азбука красоты Раскладной массажный стол US Medica Osaka линейка Sumo Line"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-osaka-lineyka-sumo-line-21900r"><span class="title">маски блески бигуди азбука красоты Раскладной массажный стол US Medica Osaka линейка Sumo Line</span><p>от <span class="price">21900</span> руб.</p></div></li>
						<li><img src="photos/99cbcb6c378c9a65446426b21fc380fe.jpeg" alt="носовые платочки Кармашек для ценных вещей USM-013" title="носовые платочки Кармашек для ценных вещей USM-013"><div class="box" page="karmashek-dlya-cennyh-veschey-usm-200r"><span class="title">носовые платочки Кармашек для ценных вещей USM-013</span><p>от <span class="price">200</span> руб.</p></div></li>
						<li class="large"><img src="photos/efecfdd903b36bfb57ecf33e62da8ced.jpeg" alt="зеркало заднего вида 2110 Вибромассажер Clear Fit Extra Beauty CF 135 E" title="зеркало заднего вида 2110 Вибромассажер Clear Fit Extra Beauty CF 135 E"><div class="box" page="vibromassazher-clear-fit-extra-beauty-cf-e-9490r"><span class="title">зеркало заднего вида 2110 Вибромассажер Clear Fit Extra Beauty CF 135 E</span><p>от <span class="price">9490</span> руб.</p></div></li>
						<li class="large"><img src="photos/e1ef3ba0ed937191286f721cb4e1323c.jpeg" alt="фигурные зеркала Массажер д/глаз ZENET TL-EMY-A" title="фигурные зеркала Массажер д/глаз ZENET TL-EMY-A"><div class="box" page="massazher-dglaz-zenet-tlemya-2150r"><span class="title">фигурные зеркала Массажер д/глаз ZENET TL-EMY-A</span><p>от <span class="price">2150</span> руб.</p></div></li>
						<li class="large"><img src="photos/5d92120d3065dfcf7d5f91af9dd4ca58.jpeg" alt="куплю триммер в москве Массажная накидка ZENET TL-2007-Z" title="куплю триммер в москве Массажная накидка ZENET TL-2007-Z"><div class="box" page="massazhnaya-nakidka-zenet-tlz-4950r"><span class="title">куплю триммер в москве Массажная накидка ZENET TL-2007-Z</span><p>от <span class="price">4950</span> руб.</p></div></li>
						<li><img src="photos/31368c22596515c6979410da5dab3354.jpeg" alt="пройти курсы массажа Машинки для стрижки Valera 642.01" title="пройти курсы массажа Машинки для стрижки Valera 642.01"><div class="box" page="mashinki-dlya-strizhki-valera-2200r"><span class="title">пройти курсы массажа Машинки для стрижки Valera 642.01</span><p>от <span class="price">2200</span> руб.</p></div></li>
						<li><img src="photos/db98c04ce84416d39676eb45e61bf9d6.jpeg" alt="зеркало toyota corolla Фотоэпилятор Rio IPL8000, для домашнего использования" title="зеркало toyota corolla Фотоэпилятор Rio IPL8000, для домашнего использования"><div class="box" page="fotoepilyator-rio-ipl-dlya-domashnego-ispolzovaniya-26900r"><span class="title">зеркало toyota corolla Фотоэпилятор Rio IPL8000, для домашнего использования</span><p>от <span class="price">26900</span> руб.</p></div></li>
						<li><img src="photos/fcd83a4c7808450baa40295368adf3c5.jpeg" alt="бигуди на голове Гель перед депиляцией Rica, с экстрактом хлопка 250мл" title="бигуди на голове Гель перед депиляцией Rica, с экстрактом хлопка 250мл"><div class="box" page="gel-pered-depilyaciey-rica-s-ekstraktom-hlopka-ml-600r"><span class="title">бигуди на голове Гель перед депиляцией Rica, с экстрактом хлопка 250мл</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li><img src="photos/d2b7ff9e11c72a7ec42a2c10d5296088.jpeg" alt="массаж пальчиков Фен-щетка BaByliss AS130E 700 Вт" title="массаж пальчиков Фен-щетка BaByliss AS130E 700 Вт"><div class="box" page="fenschetka-babyliss-ase-vt-2060r"><span class="title">массаж пальчиков Фен-щетка BaByliss AS130E 700 Вт</span><p>от <span class="price">2060</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("corioliss-sxe-stayler-s-dinamikom-5400r.php", 0, -4); if (file_exists("comments/corioliss-sxe-stayler-s-dinamikom-5400r.php")) require_once "comments/corioliss-sxe-stayler-s-dinamikom-5400r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="corioliss-sxe-stayler-s-dinamikom-5400r.php" method="post" onsubmit="return checkForm(this)">
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