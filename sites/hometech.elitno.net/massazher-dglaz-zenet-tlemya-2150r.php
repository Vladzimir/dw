<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("massazher-dglaz-zenet-tlemya-2150r.php","массаж в астрахани");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("massazher-dglaz-zenet-tlemya-2150r.php", $nick, $comment);
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
		<title>массаж в астрахани Массажер д/глаз ZENET TL-EMY-A  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="массаж в астрахани, триммер бритва, зеркало файла, ирригатор donfeel or 820m, эпилятор силк эпил, ожог в солярии, массаж нижних конечностей, купить восковой эпилятор, костюм для lpg массажа купить, насадки для эпилятора braun, завивка на длинные волосы фото, курсы массажа в екатеринбурге, массаж ног техника, химическая завивка на короткие волосы,  массаж приморская">
		<meta name="description" content="массаж в астрахани После тяжелого рабочего дня в отдыхе нуждаетесь не только  вы, но и ваши глаза, ...">
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
						<a class="photo" href="photos/e1ef3ba0ed937191286f721cb4e1323c.jpeg" title="массаж в астрахани Массажер д/глаз ZENET TL-EMY-A"><img src="photos/e1ef3ba0ed937191286f721cb4e1323c.jpeg" alt="массаж в астрахани Массажер д/глаз ZENET TL-EMY-A" title="массаж в астрахани Массажер д/глаз ZENET TL-EMY-A -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vypryamitel-valera-exilim-2440r.php"><img src="photos/3e27500e40cc62cf895edc096d8d53b4.jpeg" alt="триммер бритва Выпрямитель Valera Exilim 649.01" title="триммер бритва Выпрямитель Valera Exilim 649.01"></a><h2>Выпрямитель Valera Exilim 649.01</h2></li>
							<li><a href="http://hometech.elitno.net/raskladnoy-massazhnyy-stol-us-medica-tokyo-lineyka-sumo-line-27900r.php"><img src="photos/31d1296e38d1ca863ab760e3b8349da7.jpeg" alt="зеркало файла Раскладной массажный стол US Medica Tokyo линейка Sumo Line" title="зеркало файла Раскладной массажный стол US Medica Tokyo линейка Sumo Line"></a><h2>Раскладной массажный стол US Medica Tokyo линейка Sumo Line</h2></li>
							<li><a href="http://hometech.elitno.net/valik-kruglyy-usmedica-orange-l-1200r.php"><img src="photos/d7739f4f02ec3d6138894095f85fdbd7.jpeg" alt="ирригатор donfeel or 820m Валик круглый US-Medica ORANGE L64" title="ирригатор donfeel or 820m Валик круглый US-Medica ORANGE L64"></a><h2>Валик круглый US-Medica ORANGE L64</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>массаж в астрахани Массажер д/глаз ZENET TL-EMY-A</h1>
						<div class="tb"><p>Цена: от <span class="price">2150</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_26159.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>После тяжелого рабочего дня в отдыхе нуждаетесь не только  вы, но и ваши глаза, а потому заботиться о них так важно. Хотите иметь  прекрасное зрение и красивый выразительный взгляд? В таком случае ценным  приобретением для вас станет специальный массажер для глаз. Массажер для глаз TL-EMY-A  от немецкой компании ZENET имеет 3 режима массажа (воздушное давление, тепловая  терапия и вибромассаж), автоматический режим и отличные технические  характеристики. Работает данный массажер от 3 батареек типа ААА. Кроме того,  приятным дополнением станет компактный размер массажера (21,5х22,5х7,5 см) и  его привлекательный внешний вид. </p> <p><strong>Характеристики:</strong></p> <ul type=disc>   <li>Тип:       для глаз;</li>   <li>Три       режима массажа: воздушное давление, тепловая терапия, вибромассаж; </li>   <li>Автоматический       режим;</li>   <li>Магнитные       узлы;</li>   <li>Диапазон       рабочих температур: +10… 35°С;</li>   <li>Допустимая       влажность: не более 85%;</li>   <li>Питание:       3 батареи типа ААА;</li>   <li>Размер       упаковки: 21,5х22,5х7,5 см;</li>   <li>Цвет:       бирюзовый/черный.</li> </ul> <p><strong>Производитель: </strong><strong>ZENET (Германия)</strong><br>     <strong>Изготовитель: Китай</strong><strong> </strong></p> массаж в астрахани</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/0d9343dd6acb58ca14845e35f6eccd11.jpeg" alt="эпилятор силк эпил Массажер Nozomi MH-102" title="эпилятор силк эпил Массажер Nozomi MH-102"><div class="box" page="massazher-nozomi-mh-1390r"><span class="title">эпилятор силк эпил Массажер Nozomi MH-102</span><p>от <span class="price">1390</span> руб.</p></div></li>
						<li><img src="photos/2da10774211f671836a3e448d640220b.png" alt="ожог в солярии Массажер для стоп US-Medica Omega" title="ожог в солярии Массажер для стоп US-Medica Omega"><div class="box" page="massazher-dlya-stop-usmedica-omega-4500r"><span class="title">ожог в солярии Массажер для стоп US-Medica Omega</span><p>от <span class="price">4500</span> руб.</p></div></li>
						<li><img src="photos/a3331b51ae07cba95c43ef802a9f621a.jpeg" alt="массаж нижних конечностей Массажер для ног BODYKRAFT FM-61" title="массаж нижних конечностей Массажер для ног BODYKRAFT FM-61"><div class="box" page="massazher-dlya-nog-bodykraft-fm-12990r"><span class="title">массаж нижних конечностей Массажер для ног BODYKRAFT FM-61</span><p>от <span class="price">12990</span> руб.</p></div></li>
						<li><img src="photos/a5613a45eb2dc18d490d06da90b8c83c.jpeg" alt="купить восковой эпилятор Массажная накидка US-Medica Sensation LMC-070" title="купить восковой эпилятор Массажная накидка US-Medica Sensation LMC-070"><div class="box" page="massazhnaya-nakidka-usmedica-sensation-lmc-15000r"><span class="title">купить восковой эпилятор Массажная накидка US-Medica Sensation LMC-070</span><p>от <span class="price">15000</span> руб.</p></div></li>
						<li class="large"><img src="photos/369fa02b2fd1e0a8a6d3480c85fe998d.jpeg" alt="костюм для lpg массажа купить Atlanta АТН-842 Машинка для стрижки" title="костюм для lpg массажа купить Atlanta АТН-842 Машинка для стрижки"><div class="box" page="atlanta-atn-mashinka-dlya-strizhki-590r"><span class="title">костюм для lpg массажа купить Atlanta АТН-842 Машинка для стрижки</span><p>от <span class="price">590</span> руб.</p></div></li>
						<li class="large"><img src="photos/c721b9b283ded68e35bca2c1efd68136.jpeg" alt="насадки для эпилятора braun Солярий для лица Efbe-Schott 838 с цветными лампами" title="насадки для эпилятора braun Солярий для лица Efbe-Schott 838 с цветными лампами"><div class="box" page="solyariy-dlya-lica-efbeschott-s-cvetnymi-lampami-7700r"><span class="title">насадки для эпилятора braun Солярий для лица Efbe-Schott 838 с цветными лампами</span><p>от <span class="price">7700</span> руб.</p></div></li>
						<li class="large"><img src="photos/cae249c48fcfeacbbf7bd176d817de70.jpeg" alt="завивка на длинные волосы фото Воск для депиляции Rica, медовый в картридже 100 мл" title="завивка на длинные волосы фото Воск для депиляции Rica, медовый в картридже 100 мл"><div class="box" page="vosk-dlya-depilyacii-rica-medovyy-v-kartridzhe-ml-150r"><span class="title">завивка на длинные волосы фото Воск для депиляции Rica, медовый в картридже 100 мл</span><p>от <span class="price">150</span> руб.</p></div></li>
						<li><img src="photos/475a7571d5ae1be1f11a4e598ccf651c.jpeg" alt="курсы массажа в екатеринбурге Держатель Corioliss Holders" title="курсы массажа в екатеринбурге Держатель Corioliss Holders"><div class="box" page="derzhatel-corioliss-holders-1070r"><span class="title">курсы массажа в екатеринбурге Держатель Corioliss Holders</span><p>от <span class="price">1070</span> руб.</p></div></li>
						<li><img src="photos/3e4f87cc3e841e1eba9cd7b8719190ef.jpeg" alt="массаж ног техника Триммер BaByliss E852XE" title="массаж ног техника Триммер BaByliss E852XE"><div class="box" page="trimmer-babyliss-exe-3140r"><span class="title">массаж ног техника Триммер BaByliss E852XE</span><p>от <span class="price">3140</span> руб.</p></div></li>
						<li><img src="photos/315fceab69c6c513c80a5c9bf34f9fb0.jpeg" alt="химическая завивка на короткие волосы BaByliss E842XE Триммер" title="химическая завивка на короткие волосы BaByliss E842XE Триммер"><div class="box" page="babyliss-exe-trimmer-1520r"><span class="title">химическая завивка на короткие волосы BaByliss E842XE Триммер</span><p>от <span class="price">1520</span> руб.</p></div></li>
						<li><img src="photos/456587fb45bdda7592a0d89b7eb8e4c1.jpeg" alt="камера с кривым зеркалом Фен Babyliss 6612E 2200 Вт" title="камера с кривым зеркалом Фен Babyliss 6612E 2200 Вт"><div class="box" page="fen-babyliss-e-vt-2780r"><span class="title">камера с кривым зеркалом Фен Babyliss 6612E 2200 Вт</span><p>от <span class="price">2780</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("massazher-dglaz-zenet-tlemya-2150r.php", 0, -4); if (file_exists("comments/massazher-dglaz-zenet-tlemya-2150r.php")) require_once "comments/massazher-dglaz-zenet-tlemya-2150r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="massazher-dglaz-zenet-tlemya-2150r.php" method="post" onsubmit="return checkForm(this)">
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