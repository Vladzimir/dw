<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("massazhnoe-kreslo-yamaguchi-ya-270000r.php","массаж с медом");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("massazhnoe-kreslo-yamaguchi-ya-270000r.php", $nick, $comment);
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
		<title>массаж с медом Массажное кресло Yamaguchi YA-2800  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="массаж с медом, к чему бьется зеркало, продажа машинок для стрижки, японская электробритва g ke, сочинение на тему зеркало, трельяж с зеркалом, аллергия на солярий, солярий тюмень, гадание на свечах и зеркале, черное зеркало игра торрент, купить восковой эпилятор, купить зеркало в ванную комнату, сонник зеркало разбитое, заточка ножей машинки для стрижки,  машинки для стрижки волос thrive">
		<meta name="description" content="массаж с медом Благородное и стильное массажное кресло Yamaguchi выполнено в стиле «неоклассика...">
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
						<a class="photo" href="photos/b4819229f946baeab966fd9fb7bf8470.jpeg" title="массаж с медом Массажное кресло Yamaguchi YA-2800"><img src="photos/b4819229f946baeab966fd9fb7bf8470.jpeg" alt="массаж с медом Массажное кресло Yamaguchi YA-2800" title="массаж с медом Массажное кресло Yamaguchi YA-2800 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-bytovye-tanita-hd-2450r.php"><img src="photos/fc6f1a57986f092efd97a2c2ca581b49.jpeg" alt="к чему бьется зеркало Весы бытовые Tanita HD-366" title="к чему бьется зеркало Весы бытовые Tanita HD-366"></a><h2>Весы бытовые Tanita HD-366</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-s-analizatorom-zhira-bg-2950r.php"><img src="photos/71c60833c0bdd329311fc5385da9ccc3.gif" alt="продажа машинок для стрижки Весы электронные напольные с анализатором жира BG39" title="продажа машинок для стрижки Весы электронные напольные с анализатором жира BG39"></a><h2>Весы электронные напольные с анализатором жира BG39</h2></li>
							<li><a href="http://hometech.elitno.net/stayler-corioliss-baby-mini-sxe-2800r.php"><img src="photos/29847e9db78defce39dc91ffe83f7262.jpeg" alt="японская электробритва g ke Стайлер Corioliss Baby Mini SXE" title="японская электробритва g ke Стайлер Corioliss Baby Mini SXE"></a><h2>Стайлер Corioliss Baby Mini SXE</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>массаж с медом Массажное кресло Yamaguchi YA-2800</h1>
						<div class="tb"><p>Цена: от <span class="price">270000</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_13620.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Благородное и стильное массажное кресло Yamaguchi выполнено в стиле «неоклассика». Спокойное и сдержанное, оно превосходно гармонирует как с деловым, так и с роскошным интерьером. Модель оснащена максимальным набором функций для профессионального массажа и целым рядом уникальных и приятных дополнительных опций: трехмерная система навигации «SPINE SCAN», глубокое разминание, растирание, поколачивание (один из видов вибрации), похлопывание, выжимание, шиацу (точечный массаж), массаж пальцев ног, воздушный массаж, активный вибрационный массаж, инфракрасная терапия спины и ног.</p><p><b>Особенности:</b></p><p><b></b></p><ul type=disc><li>Шестироликовый механизм эффективно выполняет все новейшие приемы; <li>509 комбинаций массажных техник; <li>Сенсорная подстройка любой рост человека (технология YAMAGUCHI FOOT SENSOR 2008); <li>VFD-дисплей на удобном современном пульте с панелью полуавтоматического управления для быстрого подбора индивидуальных предпочтений; <li>Второй вспомогательный пульт для дополнительных опций – музыкальной терапии для регулировки положения кресла, не вставая; <li>3 любимых программы массажа, которые можно создать и записать лично; <li>• Математически верное определение акупунктурных точек приложения воздействия (технология YAMAGUCHI SCAN VISION); <li>4 авто режима, для которых кресло самостоятельно принимает нужное положение; <li>Режим для рук; <li>Режим для пальцев ног и верхней части стопы, проработка подошв специальными шипами; <li>Функция «массаж в выбранной зоне отдельно»; <li>Воздушные подушки для рук поддерживают руки в удобном положении и движутся вдоль подлокотников, обеспечивая интенсивное действие на кисти и предплечья; <li>Воздушные подушки для ног (в области икр и ступней) осуществляют разминания задней и боковых поверхностей икр, щиколоток и верхней части ступней, а также полное разминания пальцев ног (сверху и снизу); <li>Режим вибрации (5 уровней интенсивности) для активного воздействия на ткани и на глубокие мышцы под ними; <li>Инфракрасная терапия поясницы.</li></ul><p><b></b></p><p><b>Технические характеристики:</b></p><ul type=disc><li>Мощность: 240 Вт; <li>Номинальное напряжение: 220-240В; <li>Номинальная частота: 50/60 Гц; <li>Класс безопасности класс I; <li>Максимальный вес пользователя: 120 кг; <li>Размеры (ДхШхВ): 201х94х76 см; <li>Вес: 129,5 кг.</li></ul><p><b>Производитель:</b> Yamaguchi.</p><p><b>Страна:</b> Япония.</p><p><b>Гарантия:</b> 3 года.</p> массаж с медом</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/a73d45afb658e85145cdbbf609c3a636.jpeg" alt="сочинение на тему зеркало Стайлер Corioliss С1 красный леопард" title="сочинение на тему зеркало Стайлер Corioliss С1 красный леопард"><div class="box" page="stayler-corioliss-s-krasnyy-leopard-4500r"><span class="title">сочинение на тему зеркало Стайлер Corioliss С1 красный леопард</span><p>от <span class="price">4500</span> руб.</p></div></li>
						<li><img src="photos/089d7c930e29170d136f3c334566ba5f.jpeg" alt="трельяж с зеркалом Электромассажер OMRON Soft Touch (TENS-миостимулятор)" title="трельяж с зеркалом Электромассажер OMRON Soft Touch (TENS-миостимулятор)"><div class="box" page="elektromassazher-omron-soft-touch-tensmiostimulyator-2160r"><span class="title">трельяж с зеркалом Электромассажер OMRON Soft Touch (TENS-миостимулятор)</span><p>от <span class="price">2160</span> руб.</p></div></li>
						<li><img src="photos/d183c7f387a6a16832dcadb30c5c244b.jpeg" alt="аллергия на солярий Массажер OMRON E4 (TENS-миостимулятор)" title="аллергия на солярий Массажер OMRON E4 (TENS-миостимулятор)"><div class="box" page="massazher-omron-e-tensmiostimulyator-4100r"><span class="title">аллергия на солярий Массажер OMRON E4 (TENS-миостимулятор)</span><p>от <span class="price">4100</span> руб.</p></div></li>
						<li><img src="photos/daee302fef3f111d46577290c7b50aa9.jpeg" alt="солярий тюмень Аппликатор Ляпко Спутник 6,2" title="солярий тюмень Аппликатор Ляпко Спутник 6,2"><div class="box" page="applikator-lyapko-sputnik-360r"><span class="title">солярий тюмень Аппликатор Ляпко Спутник 6,2</span><p>от <span class="price">360</span> руб.</p></div></li>
						<li class="large"><img src="photos/baa708c812902442c1208631338bc40c.jpeg" alt="гадание на свечах и зеркале Массажер для тела с ИК прогревом и съемной ручкой Gezatone AMG105 1301059" title="гадание на свечах и зеркале Массажер для тела с ИК прогревом и съемной ручкой Gezatone AMG105 1301059"><div class="box" page="massazher-dlya-tela-s-ik-progrevom-i-semnoy-ruchkoy-gezatone-amg-2200r"><span class="title">гадание на свечах и зеркале Массажер для тела с ИК прогревом и съемной ручкой Gezatone AMG105 1301059</span><p>от <span class="price">2200</span> руб.</p></div></li>
						<li class="large"><img src="photos/572a640e124ff5fab4f1a7d1e039bcd6.jpeg" alt="черное зеркало игра торрент Массажер ZENET TL-FMQ-F" title="черное зеркало игра торрент Массажер ZENET TL-FMQ-F"><div class="box" page="massazher-zenet-tlfmqf-14900r"><span class="title">черное зеркало игра торрент Массажер ZENET TL-FMQ-F</span><p>от <span class="price">14900</span> руб.</p></div></li>
						<li class="large"><img src="photos/a5613a45eb2dc18d490d06da90b8c83c.jpeg" alt="купить восковой эпилятор Массажная накидка US-Medica Sensation LMC-070" title="купить восковой эпилятор Массажная накидка US-Medica Sensation LMC-070"><div class="box" page="massazhnaya-nakidka-usmedica-sensation-lmc-15000r"><span class="title">купить восковой эпилятор Массажная накидка US-Medica Sensation LMC-070</span><p>от <span class="price">15000</span> руб.</p></div></li>
						<li><img src="photos/e2911a94a53518babafa668a3a55c5fb.jpeg" alt="купить зеркало в ванную комнату Фен-щетка Babyliss AS120E 1200 Вт" title="купить зеркало в ванную комнату Фен-щетка Babyliss AS120E 1200 Вт"><div class="box" page="fenschetka-babyliss-ase-vt-1970r"><span class="title">купить зеркало в ванную комнату Фен-щетка Babyliss AS120E 1200 Вт</span><p>от <span class="price">1970</span> руб.</p></div></li>
						<li><img src="photos/e69da6f2452895f2eb5bd226ad7e5f3c.jpeg" alt="сонник зеркало разбитое Фен Valera Swiss Turbo 7000RC Rotocord" title="сонник зеркало разбитое Фен Valera Swiss Turbo 7000RC Rotocord"><div class="box" page="fen-valera-swiss-turbo-rc-rotocord-2920r"><span class="title">сонник зеркало разбитое Фен Valera Swiss Turbo 7000RC Rotocord</span><p>от <span class="price">2920</span> руб.</p></div></li>
						<li><img src="photos/4d14f143b5be3fa914764db01c50d2b4.jpeg" alt="заточка ножей машинки для стрижки Фен Atlanta АТН-860" title="заточка ножей машинки для стрижки Фен Atlanta АТН-860"><div class="box" page="fen-atlanta-atn-500r"><span class="title">заточка ножей машинки для стрижки Фен Atlanta АТН-860</span><p>от <span class="price">500</span> руб.</p></div></li>
						<li><img src="photos/00eef40be8bfe9afe3f74b07e48a72b6.jpeg" alt="зеркало на шевроле лачетти Vitek VT–1374 Электробритва" title="зеркало на шевроле лачетти Vitek VT–1374 Электробритва"><div class="box" page="vitek-vt–-elektrobritva-1390r"><span class="title">зеркало на шевроле лачетти Vitek VT–1374 Электробритва</span><p>от <span class="price">1390</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("massazhnoe-kreslo-yamaguchi-ya-270000r.php", 0, -4); if (file_exists("comments/massazhnoe-kreslo-yamaguchi-ya-270000r.php")) require_once "comments/massazhnoe-kreslo-yamaguchi-ya-270000r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="massazhnoe-kreslo-yamaguchi-ya-270000r.php" method="post" onsubmit="return checkForm(this)">
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