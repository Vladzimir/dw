<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("nabor-dlya-manikyura-i-pedikyura-s-sushkoy-gezatone-d-990r.php","солярий интернет магазин");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("nabor-dlya-manikyura-i-pedikyura-s-sushkoy-gezatone-d-990r.php", $nick, $comment);
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
		<title>солярий интернет магазин Набор для маникюра и педикюра с сушкой Gezatone 112D 1301009  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="солярий интернет магазин, продажа машинок для стрижки, массаж при пневмонии, черное зеркало игра торрент, зеркало camry, ректальное зеркало, массаж головы ребенка, что делать в солярии, фокусы с зеркалами, камера с кривым зеркалом, зеркала заднего вида bmw, мужские стрижки под машинку, комоды с зеркалом фото, держатели для зеркал,  бирюков массаж">
		<meta name="description" content="солярий интернет магазин Набор для маникюра и педикюра с сушкой Gezatone 112D станет отличным приобретени...">
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
						<a class="photo" href="photos/eefabd71c5ced182b3ddd94bf3d47e4e.jpeg" title="солярий интернет магазин Набор для маникюра и педикюра с сушкой Gezatone 112D 1301009"><img src="photos/eefabd71c5ced182b3ddd94bf3d47e4e.jpeg" alt="солярий интернет магазин Набор для маникюра и педикюра с сушкой Gezatone 112D 1301009" title="солярий интернет магазин Набор для маникюра и педикюра с сушкой Gezatone 112D 1301009 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-s-analizatorom-zhira-bg-2950r.php"><img src="photos/71c60833c0bdd329311fc5385da9ccc3.gif" alt="продажа машинок для стрижки Весы электронные напольные с анализатором жира BG39" title="продажа машинок для стрижки Весы электронные напольные с анализатором жира BG39"></a><h2>Весы электронные напольные с анализатором жира BG39</h2></li>
							<li><a href="http://hometech.elitno.net/analizator-zhira-sostava-tela-tanita-bc-6000r.php"><img src="photos/843527b44b33c6dc8e59ed2e3a62ce10.jpeg" alt="массаж при пневмонии Анализатор жира (состава тела) Tanita BC-587" title="массаж при пневмонии Анализатор жира (состава тела) Tanita BC-587"></a><h2>Анализатор жира (состава тела) Tanita BC-587</h2></li>
							<li><a href="http://hometech.elitno.net/darsonval-premium-klassa-s-nasadkami-ultratek-sd-2450r.php"><img src="photos/6b02b1d6efdd924366aa33cf1f72a17d.jpeg" alt="черное зеркало игра торрент Дарсонваль Премиум класса с 5 насадками Ультратек СД-199" title="черное зеркало игра торрент Дарсонваль Премиум класса с 5 насадками Ультратек СД-199"></a><h2>Дарсонваль Премиум класса с 5 насадками Ультратек СД-199</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>солярий интернет магазин Набор для маникюра и педикюра с сушкой Gezatone 112D 1301009</h1>
						<div class="tb"><p>Цена: от <span class="price">990</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_12253.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Набор для маникюра и педикюра с сушкой Gezatone 112D станет отличным приобретением для каждой женщины. С его помощью Вы самостоятельно сможете ухаживать за своими ногтями, подпиливать их и придавать нужную форму. Благодаря специальным насадкам Вы без проблем справитесь с полировкой ногтей, удалением кутикул и обработкой кожи вокруг ногтевых пластин. В набор встроен аккумулятор, так что Вы без лишних хлопот можете брать его в путешествия. </p><p><b>Комплектация:</b> 7 видов насадок, микромотор, адаптер, кейс с сушкой лака, инструкция.</p><p><strong>Производитель:</strong> Gezatone </p><p><b>Страна:</b> Франция</p><p><strong>Гарантия:</strong> 1 год</p> солярий интернет магазин</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/2a374f4a4bcee4ad5582460480916d81.jpeg" alt="зеркало camry Насадка Грибок для КАРАТ ДЕ-212 Дарсонваль" title="зеркало camry Насадка Грибок для КАРАТ ДЕ-212 Дарсонваль"><div class="box"><a href="http://hometech.elitno.net/nasadka-gribok-dlya-karat-de-darsonval-300r.php"><h3 class="title">зеркало camry Насадка Грибок для КАРАТ ДЕ-212 Дарсонваль</h3><p>от <span class="price">300</span> руб.</p></a></div></li>
						<li><img src="photos/9245f68f4f84fd4f77a399b1043302af.jpeg" alt="ректальное зеркало Набор для педикюра Пед Эгг (Реd Egg)" title="ректальное зеркало Набор для педикюра Пед Эгг (Реd Egg)"><div class="box" page="nabor-dlya-pedikyura-ped-egg-red-egg-300r"><span class="title">ректальное зеркало Набор для педикюра Пед Эгг (Реd Egg)</span><p>от <span class="price">300</span> руб.</p></div></li>
						<li><img src="photos/bd43b02490b7b213cfdadf5f9ffcb1e0.jpeg" alt="массаж головы ребенка Вакуумный массажер Gezatone VACU 1301024" title="массаж головы ребенка Вакуумный массажер Gezatone VACU 1301024"><div class="box" page="vakuumnyy-massazher-gezatone-vacu-2990r"><span class="title">массаж головы ребенка Вакуумный массажер Gezatone VACU 1301024</span><p>от <span class="price">2990</span> руб.</p></div></li>
						<li><img src="photos/12b08f535454eb45912e69bb12756cf3.jpeg" alt="что делать в солярии Антицеллюлитный вибромассажер Gezatone Скульптор Тела AMG114 1301070" title="что делать в солярии Антицеллюлитный вибромассажер Gezatone Скульптор Тела AMG114 1301070"><div class="box" page="anticellyulitnyy-vibromassazher-gezatone-skulptor-tela-amg-2000r"><span class="title">что делать в солярии Антицеллюлитный вибромассажер Gezatone Скульптор Тела AMG114 1301070</span><p>от <span class="price">2000</span> руб.</p></div></li>
						<li class="large"><img src="photos/80eb5294ed756e197cb03a6669f75dbb.jpeg" alt="фокусы с зеркалами Массажная накидка Sanitas  SMG 160" title="фокусы с зеркалами Массажная накидка Sanitas  SMG 160"><div class="box" page="massazhnaya-nakidka-sanitas-smg-4000r"><span class="title">фокусы с зеркалами Массажная накидка Sanitas  SMG 160</span><p>от <span class="price">4000</span> руб.</p></div></li>
						<li class="large"><img src="photos/456587fb45bdda7592a0d89b7eb8e4c1.jpeg" alt="камера с кривым зеркалом Фен Babyliss 6612E 2200 Вт" title="камера с кривым зеркалом Фен Babyliss 6612E 2200 Вт"><div class="box" page="fen-babyliss-e-vt-2780r"><span class="title">камера с кривым зеркалом Фен Babyliss 6612E 2200 Вт</span><p>от <span class="price">2780</span> руб.</p></div></li>
						<li class="large"><img src="photos/257d5cc5ea2f5b29c6970128a18fb88b.jpeg" alt="зеркала заднего вида bmw Фен-щетка Babyliss 2715E 700 Вт" title="зеркала заднего вида bmw Фен-щетка Babyliss 2715E 700 Вт"><div class="box" page="fenschetka-babyliss-e-vt-1520r"><span class="title">зеркала заднего вида bmw Фен-щетка Babyliss 2715E 700 Вт</span><p>от <span class="price">1520</span> руб.</p></div></li>
						<li><img src="photos/47acb373ffbb147c27d966071f17fdaa.jpeg" alt="мужские стрижки под машинку Фен Valera Silent 2200 Super Ionic 545.09DV" title="мужские стрижки под машинку Фен Valera Silent 2200 Super Ionic 545.09DV"><div class="box" page="fen-valera-silent-super-ionic-dv-2330r"><span class="title">мужские стрижки под машинку Фен Valera Silent 2200 Super Ionic 545.09DV</span><p>от <span class="price">2330</span> руб.</p></div></li>
						<li><img src="photos/65ef91f9e39ae9c8e58e13820442b2ca.jpeg" alt="комоды с зеркалом фото Насадка для детской зубной щетки BRAUN EB10-2" title="комоды с зеркалом фото Насадка для детской зубной щетки BRAUN EB10-2"><div class="box" page="nasadka-dlya-detskoy-zubnoy-schetki-braun-eb-550r"><span class="title">комоды с зеркалом фото Насадка для детской зубной щетки BRAUN EB10-2</span><p>от <span class="price">550</span> руб.</p></div></li>
						<li><img src="photos/e146d9c559ab30a96ca55f774b626a59.jpeg" alt="держатели для зеркал Насадка для зубной щетки BRAUN Oral-B  EB17-2(EB20-2)" title="держатели для зеркал Насадка для зубной щетки BRAUN Oral-B  EB17-2(EB20-2)"><div class="box" page="nasadka-dlya-zubnoy-schetki-braun-oralb-ebeb-385r"><span class="title">держатели для зеркал Насадка для зубной щетки BRAUN Oral-B  EB17-2(EB20-2)</span><p>от <span class="price">385</span> руб.</p></div></li>
						<li><img src="photos/833169d23c220fec90ad222e16ab5963.jpeg" alt="спиральная завивка волос Эпилятор Valera Comfort-epil Set Cordless 650.01" title="спиральная завивка волос Эпилятор Valera Comfort-epil Set Cordless 650.01"><div class="box" page="epilyator-valera-comfortepil-set-cordless-3270r"><span class="title">спиральная завивка волос Эпилятор Valera Comfort-epil Set Cordless 650.01</span><p>от <span class="price">3270</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("nabor-dlya-manikyura-i-pedikyura-s-sushkoy-gezatone-d-990r.php", 0, -4); if (file_exists("comments/nabor-dlya-manikyura-i-pedikyura-s-sushkoy-gezatone-d-990r.php")) require_once "comments/nabor-dlya-manikyura-i-pedikyura-s-sushkoy-gezatone-d-990r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="nabor-dlya-manikyura-i-pedikyura-s-sushkoy-gezatone-d-990r.php" method="post" onsubmit="return checkForm(this)">
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