<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("stayler-corioliss-s-10000r.php","массаж для увеличения бюста");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("stayler-corioliss-s-10000r.php", $nick, $comment);
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
		<title>массаж для увеличения бюста Стайлер Corioliss С2  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="массаж для увеличения бюста, японская электробритва g ke, девушка перед зеркалом, зеркалом блестит река, японская завивка волос, лукьяненко зеркала, карат де 212 дарсонваль насадки, инфракрасный массаж, солярий в нижнем, массаж 2 года, завивка волос отзывы, зеркала в оправе, электробритва харьков, весы электронные самара,  зеркало левое форд фокус">
		<meta name="description" content="массаж для увеличения бюста Инновационный профессиональный стайлер С2 от Corioliss объединяет в себе стильны...">
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
						<a class="photo" href="photos/333858fb93c0b690fc806cdc87692d49.jpeg" title="массаж для увеличения бюста Стайлер Corioliss С2"><img src="photos/333858fb93c0b690fc806cdc87692d49.jpeg" alt="массаж для увеличения бюста Стайлер Corioliss С2" title="массаж для увеличения бюста Стайлер Corioliss С2 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/stayler-corioliss-baby-mini-sxe-2800r.php"><img src="photos/29847e9db78defce39dc91ffe83f7262.jpeg" alt="японская электробритва g ke Стайлер Corioliss Baby Mini SXE" title="японская электробритва g ke Стайлер Corioliss Baby Mini SXE"></a><h2>Стайлер Corioliss Baby Mini SXE</h2></li>
							<li><a href="http://hometech.elitno.net/schipcy-dlya-zavivki-valera-digicurl-2330r.php"><img src="photos/93c6c5ba12c32207d611fa8f61f42d48.jpeg" alt="девушка перед зеркалом Щипцы для завивки Valera Digicurl 641.32" title="девушка перед зеркалом Щипцы для завивки Valera Digicurl 641.32"></a><h2>Щипцы для завивки Valera Digicurl 641.32</h2></li>
							<li><a href="http://hometech.elitno.net/zerkalo-dvustoronnee-babyliss-e-s-mi-kratnym-uvelicheniem-3190r.php"><img src="photos/c31991b00bf6f0f8d0461c8a88e7db13.jpeg" alt="зеркалом блестит река Зеркало двустороннее Babyliss 8438Е с 8-ми кратным увеличением" title="зеркалом блестит река Зеркало двустороннее Babyliss 8438Е с 8-ми кратным увеличением"></a><h2>Зеркало двустороннее Babyliss 8438Е с 8-ми кратным увеличением</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>массаж для увеличения бюста Стайлер Corioliss С2</h1>
						<div class="tb"><p>Цена: от <span class="price">10000</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_14315.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Инновационный профессиональный стайлер С2 от Corioliss объединяет в себе стильный эргономичный дизайн и безупречное исполнение. Он снабжен уникальными титановыми пластинами, которые при нагревании выделяют отрицательно заряженные ионы, благотворно влияющие на структуру волос. Прибор идеально скользит, поддерживая естественный баланс влажности волос и одновременно уничтожая вредные бактерии. С Corioliss С2 Ваши волосы станут гладкими и блестящими.</p><p><b>Особенности и преимущества:</b></p><ul type=disc><li>Компьютерный контроль температуры пластин от 60 до 210єC; <li>Сверхбыстрое нагревание пластин до 210єC за 20 секунд; <li>Технология равномерного распределения тепла на пластинах; <li>Титановые пластины для идеально легкого скольжения; <li>Режим автоматического выключения после 30 минут использования экономит энергию и гарантирует безопасность.</li></ul><p><b>Производитель:</b> Corioliss.</p><p><b>Страна:</b> Англия.</p><p><b>Гарантия:</b> 1 год.</p> массаж для увеличения бюста</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/e19c07a7eb65a21b96dd8e90725f36cf.jpeg" alt="японская завивка волос Раскладной массажный стол US Medica Master линейка Sumo Line" title="японская завивка волос Раскладной массажный стол US Medica Master линейка Sumo Line"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-master-lineyka-sumo-line-13900r"><span class="title">японская завивка волос Раскладной массажный стол US Medica Master линейка Sumo Line</span><p>от <span class="price">13900</span> руб.</p></div></li>
						<li><img src="photos/988207ea3c9688d138379e5f40a3f196.jpeg" alt="лукьяненко зеркала Стационарный массажный стол US Medica Atlant" title="лукьяненко зеркала Стационарный массажный стол US Medica Atlant"><div class="box" page="stacionarnyy-massazhnyy-stol-us-medica-atlant-37000r"><span class="title">лукьяненко зеркала Стационарный массажный стол US Medica Atlant</span><p>от <span class="price">37000</span> руб.</p></div></li>
						<li><img src="photos/9af88bf8f0a341b5c9eda8033fc64175.jpeg" alt="карат де 212 дарсонваль насадки Массажное кресло US Medica Indigo" title="карат де 212 дарсонваль насадки Массажное кресло US Medica Indigo"><div class="box" page="massazhnoe-kreslo-us-medica-indigo-95000r"><span class="title">карат де 212 дарсонваль насадки Массажное кресло US Medica Indigo</span><p>от <span class="price">95000</span> руб.</p></div></li>
						<li><img src="photos/e739e0447a80415b64bfebe7c6b9a813.jpeg" alt="инфракрасный массаж Аппликатор Ляпко Двойной 5,8" title="инфракрасный массаж Аппликатор Ляпко Двойной 5,8"><div class="box" page="applikator-lyapko-dvoynoy-1490r"><span class="title">инфракрасный массаж Аппликатор Ляпко Двойной 5,8</span><p>от <span class="price">1490</span> руб.</p></div></li>
						<li class="large"><img src="photos/cb1ca3222d5a4e0a7543b31428f06d83.jpeg" alt="солярий в нижнем Вибромассажер с инфракрасным излучением BREMED BD-7400" title="солярий в нижнем Вибромассажер с инфракрасным излучением BREMED BD-7400"><div class="box" page="vibromassazher-s-infrakrasnym-izlucheniem-bremed-bd-850r"><span class="title">солярий в нижнем Вибромассажер с инфракрасным излучением BREMED BD-7400</span><p>от <span class="price">850</span> руб.</p></div></li>
						<li class="large"><img src="photos/f5800fd3cb018e4ce2e878a7829b57fe.jpeg" alt="массаж 2 года Массажер для ног US Medica Angel Feet" title="массаж 2 года Массажер для ног US Medica Angel Feet"><div class="box" page="massazher-dlya-nog-us-medica-angel-feet-13500r"><span class="title">массаж 2 года Массажер для ног US Medica Angel Feet</span><p>от <span class="price">13500</span> руб.</p></div></li>
						<li class="large"><img src="photos/e017b0d2d9ea317c7c27cd62e8804f5a.jpeg" alt="завивка волос отзывы Массажная накидка BODYKRAFT К 51" title="завивка волос отзывы Массажная накидка BODYKRAFT К 51"><div class="box" page="massazhnaya-nakidka-bodykraft-k-6590r"><span class="title">завивка волос отзывы Массажная накидка BODYKRAFT К 51</span><p>от <span class="price">6590</span> руб.</p></div></li>
						<li><img src="photos/7e234be1c8b9948d4170ebfc4aaf09c9.jpeg" alt="зеркала в оправе Прибор ультразвуковой для ухода за кожей лица и тела Gezatone SuperSonic m350" title="зеркала в оправе Прибор ультразвуковой для ухода за кожей лица и тела Gezatone SuperSonic m350"><div class="box" page="pribor-ultrazvukovoy-dlya-uhoda-za-kozhey-lica-i-tela-gezatone-supersonic-m-2540r"><span class="title">зеркала в оправе Прибор ультразвуковой для ухода за кожей лица и тела Gezatone SuperSonic m350</span><p>от <span class="price">2540</span> руб.</p></div></li>
						<li><img src="photos/3e07c9c76543509eb7330cd46f97b553.jpeg" alt="электробритва харьков Машинка для стрижки волос Valera Absolut 648.01" title="электробритва харьков Машинка для стрижки волос Valera Absolut 648.01"><div class="box" page="mashinka-dlya-strizhki-volos-valera-absolut-3480r"><span class="title">электробритва харьков Машинка для стрижки волос Valera Absolut 648.01</span><p>от <span class="price">3480</span> руб.</p></div></li>
						<li><img src="photos/1c7dd7572d7c21e0bd7ee9e060517e54.jpeg" alt="весы электронные самара Лазерный эпилятор Rio Salon Laser для домашнего использования" title="весы электронные самара Лазерный эпилятор Rio Salon Laser для домашнего использования"><div class="box" page="lazernyy-epilyator-rio-salon-laser-dlya-domashnego-ispolzovaniya-10000r"><span class="title">весы электронные самара Лазерный эпилятор Rio Salon Laser для домашнего использования</span><p>от <span class="price">10000</span> руб.</p></div></li>
						<li><img src="photos/06a7400bd6489ecdebf0a840f4cfdc3f.jpeg" alt="купить фен в минске Триммер Vitesse VS-382" title="купить фен в минске Триммер Vitesse VS-382"><div class="box" page="trimmer-vitesse-vs-440r"><span class="title">купить фен в минске Триммер Vitesse VS-382</span><p>от <span class="price">440</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("stayler-corioliss-s-10000r.php", 0, -4); if (file_exists("comments/stayler-corioliss-s-10000r.php")) require_once "comments/stayler-corioliss-s-10000r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="stayler-corioliss-s-10000r.php" method="post" onsubmit="return checkForm(this)">
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