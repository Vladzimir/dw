<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("massazher-beurer-mg-14000r.php","двойное зеркало");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("massazher-beurer-mg-14000r.php", $nick, $comment);
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
		<title>двойное зеркало Массажер Beurer MG 310  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="двойное зеркало, зеркало хонда аккорд, вконтакте зеркало вход, девушка перед зеркалом, массаж пальчиков, зеркало соната, солярий в нижнем, эпилятор силк эпил, массаж саратов, массаж головы ребенка, ожог в солярии, массаж большой груди, ремонт фенов в москве, купить электробритву панасоник,  машинка для стрижки ровента">
		<meta name="description" content="двойное зеркало Хотите получать массаж тогда, когда пожелаете? Приобретайте массажное кресло Beu...">
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
						<a class="photo" href="photos/ce1d55bfc4c54022422846b14975fcfd.jpeg" title="двойное зеркало Массажер Beurer MG 310"><img src="photos/ce1d55bfc4c54022422846b14975fcfd.jpeg" alt="двойное зеркало Массажер Beurer MG 310" title="двойное зеркало Массажер Beurer MG 310 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/elektrobigudi-nabor-shtuk-gezatone-s-1600r.php"><img src="photos/e2e122b0859c871e800bdc81f2f10ebc.jpeg" alt="зеркало хонда аккорд Электробигуди (набор 20 штук) Gezatone С403 1306000" title="зеркало хонда аккорд Электробигуди (набор 20 штук) Gezatone С403 1306000"></a><h2>Электробигуди (набор 20 штук) Gezatone С403 1306000</h2></li>
							<li><a href="http://hometech.elitno.net/nasadka-borodavchataya-dlya-karat-de-darsonval-300r.php"><img src="photos/ac3c60f4ec3044e4c2c5250cb4b2650e.jpeg" alt="вконтакте зеркало вход Насадка бородавчатая для КАРАТ ДЕ-212 Дарсонваль" title="вконтакте зеркало вход Насадка бородавчатая для КАРАТ ДЕ-212 Дарсонваль"></a><h2>Насадка бородавчатая для КАРАТ ДЕ-212 Дарсонваль</h2></li>
							<li><a href="http://hometech.elitno.net/schipcy-dlya-zavivki-valera-digicurl-2330r.php"><img src="photos/93c6c5ba12c32207d611fa8f61f42d48.jpeg" alt="девушка перед зеркалом Щипцы для завивки Valera Digicurl 641.32" title="девушка перед зеркалом Щипцы для завивки Valera Digicurl 641.32"></a><h2>Щипцы для завивки Valera Digicurl 641.32</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>двойное зеркало Массажер Beurer MG 310</h1>
						<div class="tb"><p>Цена: от <span class="price">14000</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_2888.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Хотите получать массаж тогда, когда пожелаете? Приобретайте массажное кресло <strong>Beurer MG 310</strong>. 15-иминутный сеанс поможет снять стресс и поднять настроение. Четыре массажные головки шиацу вращаются и перекатываются попарно, ощутимо воздействуя на позвоночник и всю спину. По желанию вы можете выбрать тип массажа: интенсивность работы кресла <strong>Beurer MG 310 </strong>регулируется вручную. Точечный массаж по восточной методике шиацу воздействует на определенные биологически активные точки, тем самым благоприятно влияет на состояние организма в целом. Кресло имеет складной механизм и регулируется по высоте. Усилить эффект от массажа поможет функция подогрева. </p><p><b>Особенности:</b></p><ul type=disc><li>Расслабляющий массаж шиацу <li>Роликовый массаж, движение вдоль позвоночника <li>4 массажные головки шиацу, вращающиеся и перекатывающиеся попарно <li>Точечный массаж шиацу <li>Регулирование интенсивности массажа <li>Выбор массажных зон <li>Функция подсветки и подогрева <li>Регулируемая высота сиденья и спинки <li>Складное кресло <li>Ручной выключатель <li>Съемный защитный чехол из велюра <li>Удобная подушка для шеи</li></ul><p><b>Технические характеристики:</b></p><p>Мощность: 42 Вт</p><p><b>Производитель: </b>Beurer (Германия)</p><p><b>Гарантия:</b> 2 года</p> двойное зеркало</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/0891aaac96a9696aa1419e17da073bfe.jpeg" alt="массаж пальчиков Осеребритель воды Георгий" title="массаж пальчиков Осеребритель воды Георгий"><div class="box" page="oserebritel-vody-georgiy-2880r"><span class="title">массаж пальчиков Осеребритель воды Георгий</span><p>от <span class="price">2880</span> руб.</p></div></li>
						<li><img src="photos/8599b1c1b0dc418f3853c3b1676d22a5.jpeg" alt="зеркало соната Массажер Супербол" title="зеркало соната Массажер Супербол"><div class="box" page="massazher-superbol-600r"><span class="title">зеркало соната Массажер Супербол</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li><img src="photos/cb1ca3222d5a4e0a7543b31428f06d83.jpeg" alt="солярий в нижнем Вибромассажер с инфракрасным излучением BREMED BD-7400" title="солярий в нижнем Вибромассажер с инфракрасным излучением BREMED BD-7400"><div class="box" page="vibromassazher-s-infrakrasnym-izlucheniem-bremed-bd-850r"><span class="title">солярий в нижнем Вибромассажер с инфракрасным излучением BREMED BD-7400</span><p>от <span class="price">850</span> руб.</p></div></li>
						<li><img src="photos/0d9343dd6acb58ca14845e35f6eccd11.jpeg" alt="эпилятор силк эпил Массажер Nozomi MH-102" title="эпилятор силк эпил Массажер Nozomi MH-102"><div class="box" page="massazher-nozomi-mh-1390r"><span class="title">эпилятор силк эпил Массажер Nozomi MH-102</span><p>от <span class="price">1390</span> руб.</p></div></li>
						<li class="large"><img src="photos/04903c082d5df734adcc169f980fc2f0.jpeg" alt="массаж саратов Прибор для лечения болей в спине Backlife" title="массаж саратов Прибор для лечения болей в спине Backlife"><div class="box" page="pribor-dlya-lecheniya-boley-v-spine-backlife-9000r"><span class="title">массаж саратов Прибор для лечения болей в спине Backlife</span><p>от <span class="price">9000</span> руб.</p></div></li>
						<li class="large"><img src="photos/bd43b02490b7b213cfdadf5f9ffcb1e0.jpeg" alt="массаж головы ребенка Вакуумный массажер Gezatone VACU 1301024" title="массаж головы ребенка Вакуумный массажер Gezatone VACU 1301024"><div class="box" page="vakuumnyy-massazher-gezatone-vacu-2990r"><span class="title">массаж головы ребенка Вакуумный массажер Gezatone VACU 1301024</span><p>от <span class="price">2990</span> руб.</p></div></li>
						<li class="large"><img src="photos/2da10774211f671836a3e448d640220b.png" alt="ожог в солярии Массажер для стоп US-Medica Omega" title="ожог в солярии Массажер для стоп US-Medica Omega"><div class="box" page="massazher-dlya-stop-usmedica-omega-4500r"><span class="title">ожог в солярии Массажер для стоп US-Medica Omega</span><p>от <span class="price">4500</span> руб.</p></div></li>
						<li><img src="photos/7b364eeb2d902e56ea6ba4e90d9f40ee.jpeg" alt="массаж большой груди Прибор для ухода за кожей лица Gezatone Ionic-Ultrasonic m360" title="массаж большой груди Прибор для ухода за кожей лица Gezatone Ionic-Ultrasonic m360"><div class="box" page="pribor-dlya-uhoda-za-kozhey-lica-gezatone-ionicultrasonic-m-1600r"><span class="title">массаж большой груди Прибор для ухода за кожей лица Gezatone Ionic-Ultrasonic m360</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li><img src="photos/94d139f73d58b1e6125c92b3eccea25e.jpeg" alt="ремонт фенов в москве Горячая бритва Corioliss Heat Razor" title="ремонт фенов в москве Горячая бритва Corioliss Heat Razor"><div class="box" page="goryachaya-britva-corioliss-heat-razor-5400r"><span class="title">ремонт фенов в москве Горячая бритва Corioliss Heat Razor</span><p>от <span class="price">5400</span> руб.</p></div></li>
						<li><img src="photos/efe8506e7fb196b07be0aa71e9d36e0b.jpeg" alt="купить электробритву панасоник Фен Babyliss 6632E i-Pro 2000" title="купить электробритву панасоник Фен Babyliss 6632E i-Pro 2000"><div class="box" page="fen-babyliss-e-ipro-1790r"><span class="title">купить электробритву панасоник Фен Babyliss 6632E i-Pro 2000</span><p>от <span class="price">1790</span> руб.</p></div></li>
						<li><img src="photos/c34916d8556e9636259427d5254b715e.jpeg" alt="тайский массаж фото Фен Braun HD770" title="тайский массаж фото Фен Braun HD770"><div class="box" page="fen-braun-hd-2750r"><span class="title">тайский массаж фото Фен Braun HD770</span><p>от <span class="price">2750</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("massazher-beurer-mg-14000r.php", 0, -4); if (file_exists("comments/massazher-beurer-mg-14000r.php")) require_once "comments/massazher-beurer-mg-14000r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="massazher-beurer-mg-14000r.php" method="post" onsubmit="return checkForm(this)">
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