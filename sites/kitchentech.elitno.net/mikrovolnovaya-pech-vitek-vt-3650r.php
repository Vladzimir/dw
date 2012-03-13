<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("mikrovolnovaya-pech-vitek-vt-3650r.php","вкусно в пароварке");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("mikrovolnovaya-pech-vitek-vt-3650r.php", $nick, $comment);
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
		<title>вкусно в пароварке Микроволновая печь Vitek VT-1694  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="вкусно в пароварке, чалдовые кофеварки, приготовление теста в хлебопечке, что можно делать блендером, пылесос samsung sc4520, капсульные кофемашины bosch, приготовление майонеза в блендере, пылесос для сбора стружки, хлебопечка panasonic 256, мультиварка daewoo dmc 200, аэрогриль hotter 1037, сладкая выпечка в хлебопечке, утюг для волос профессиональный, magic pot мультиварка,  соковыжималка сатурн">
		<meta name="description" content="вкусно в пароварке Микроволновая печь Vitek VT-1694 просто незаменима на современной кухне, ведь он...">
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
						<a class="photo" href="photos/b6481108ed00fa262329eb9b4a9a7836.jpeg" title="вкусно в пароварке Микроволновая печь Vitek VT-1694"><img src="photos/b6481108ed00fa262329eb9b4a9a7836.jpeg" alt="вкусно в пароварке Микроволновая печь Vitek VT-1694" title="вкусно в пароварке Микроволновая печь Vitek VT-1694 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/avtomaticheskaya-kofemashina-melitta-caffeo-gourmet-chernaya-43999r.php"><img src="photos/a59c30a3b2d8957f43e9fce5f7b6e0f5.jpeg" alt="чалдовые кофеварки Автоматическая кофемашина Melitta CAFFEO GOURMET, черная" title="чалдовые кофеварки Автоматическая кофемашина Melitta CAFFEO GOURMET, черная"></a><h2>Автоматическая кофемашина Melitta CAFFEO GOURMET, черная</h2></li>
							<li><a href="http://kitchentech.elitno.net/avtomaticheskaya-kofemashina-melitta-caffeo-ci-chernaya-65999r.php"><img src="photos/46d0cfd29014c8ec4bfb9c09c292bb23.jpeg" alt="приготовление теста в хлебопечке Автоматическая кофемашина Melitta CAFFEO CI, черная" title="приготовление теста в хлебопечке Автоматическая кофемашина Melitta CAFFEO CI, черная"></a><h2>Автоматическая кофемашина Melitta CAFFEO CI, черная</h2></li>
							<li><a href="http://kitchentech.elitno.net/myasorubka-elektricheskaya-binatone-mgr-white-3700r.php"><img src="photos/060f95312423ba3e968eaf23618bd36d.jpeg" alt="что можно делать блендером Мясорубка электрическая Binatone MGR-3040 White" title="что можно делать блендером Мясорубка электрическая Binatone MGR-3040 White"></a><h2>Мясорубка электрическая Binatone MGR-3040 White</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>вкусно в пароварке Микроволновая печь Vitek VT-1694</h1>
						<div class="tb"><p>Цена: от <span class="price">3650</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_8273.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Микроволновая печь <b>Vitek VT-1694</b> просто незаменима на современной кухне, ведь она может разогреть и приготовить пищу за считанные минуты. В автоматическом меню содержится 9 уникальных программ с фиксированными настройками работы устройства. Вам достаточно будет просто поместить необходимые ингредиенты в микроволновку и выбрать понравившейся режим, «умный» прибор все сделает сам. В модели <b>VT-1694</b> также предусмотрен режим грили. Тип управления сенсорный.</p><p><b>Технические характеристики:</b></p><ul type=disc><li>Объем: 17л <li>Столик: 245 мм <li>Режимы мощности: 5 <li>Режим размораживания: по весу/по времени <li>Автоматическое меню: 9 режимов <li>Функция экспресс-приготовления: есть <li>Таймер: цифровой (60 мин.) <li>Цифровые часы: есть <li>Сигнал завершения приготовления: есть <li>Тип управления: тактовое <li>Защита от доступа детей: есть <li>Мощность гриля: 1000Вт <li>Выходная мощность: 700Вт <li>Потребляемая мощность: 1200Вт <li>Электропитание: 220 В, ~50 Гц <li>Внутренняя камера с антипригарным покрытием</li></ul><p><b>Производитель: </b>Vitek.</p><p><b>Страна:</b> Россия.</p> вкусно в пароварке</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/7c640af98399cc1caf99796cb169cc20.jpeg" alt="пылесос samsung sc4520 Мясорубка электрическая Vitek VT-1672 серебряная" title="пылесос samsung sc4520 Мясорубка электрическая Vitek VT-1672 серебряная"><div class="box" page="myasorubka-elektricheskaya-vitek-vt-serebryanaya-3650r"><span class="title">пылесос samsung sc4520 Мясорубка электрическая Vitek VT-1672 серебряная</span><p>от <span class="price">3650</span> руб.</p></div></li>
						<li><img src="photos/151cdbb0e55d78748fdd51a7bbe40bf0.jpeg" alt="капсульные кофемашины bosch Соковыжималка Atlanta ATH-329" title="капсульные кофемашины bosch Соковыжималка Atlanta ATH-329"><div class="box" page="sokovyzhimalka-atlanta-ath-2990r"><span class="title">капсульные кофемашины bosch Соковыжималка Atlanta ATH-329</span><p>от <span class="price">2990</span> руб.</p></div></li>
						<li><img src="photos/4aba59e656a62396ee01dc9ed0a83fa8.jpeg" alt="приготовление майонеза в блендере Соковыжималка TURBO" title="приготовление майонеза в блендере Соковыжималка TURBO"><div class="box" page="sokovyzhimalka-turbo-7790r"><span class="title">приготовление майонеза в блендере Соковыжималка TURBO</span><p>от <span class="price">7790</span> руб.</p></div></li>
						<li><img src="photos/25bac4b45e0e97c9b045c0e23eb08977.jpeg" alt="пылесос для сбора стружки Хлебопечка Binatone BM-2169 Black с функцией «Домашний пекарь»" title="пылесос для сбора стружки Хлебопечка Binatone BM-2169 Black с функцией «Домашний пекарь»"><div class="box" page="hlebopechka-binatone-bm-black-s-funkciey-«domashniy-pekar»-4500r"><span class="title">пылесос для сбора стружки Хлебопечка Binatone BM-2169 Black с функцией «Домашний пекарь»</span><p>от <span class="price">4500</span> руб.</p></div></li>
						<li class="large"><img src="photos/f5d552f595352df6a881129a694e04b1.jpeg" alt="хлебопечка panasonic 256 Чайник электрический Redmond RK-M112" title="хлебопечка panasonic 256 Чайник электрический Redmond RK-M112"><div class="box" page="chaynik-elektricheskiy-redmond-rkm-990r"><span class="title">хлебопечка panasonic 256 Чайник электрический Redmond RK-M112</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li class="large"><img src="photos/1ce3d92d8e0391534b2eb43fa514d9a4.jpeg" alt="мультиварка daewoo dmc 200 Чайник электрический Redmond RK-М119" title="мультиварка daewoo dmc 200 Чайник электрический Redmond RK-М119"><div class="box" page="chaynik-elektricheskiy-redmond-rkm-2690r"><span class="title">мультиварка daewoo dmc 200 Чайник электрический Redmond RK-М119</span><p>от <span class="price">2690</span> руб.</p></div></li>
						<li class="large"><img src="photos/e9322568d654cf02152dc451f13376f9.jpeg" alt="аэрогриль hotter 1037 Чайник электрический  Vitesse VS-113 1,5л красный" title="аэрогриль hotter 1037 Чайник электрический  Vitesse VS-113 1,5л красный"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-krasnyy-1950r"><span class="title">аэрогриль hotter 1037 Чайник электрический  Vitesse VS-113 1,5л красный</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li><img src="photos/70eaaca49bbd014982b9856679d5c7e6.jpeg" alt="сладкая выпечка в хлебопечке Электрический чайник 1,5л Bodum BISTRO 11138-01EURO" title="сладкая выпечка в хлебопечке Электрический чайник 1,5л Bodum BISTRO 11138-01EURO"><div class="box" page="elektricheskiy-chaynik-l-bodum-bistro-euro-2740r"><span class="title">сладкая выпечка в хлебопечке Электрический чайник 1,5л Bodum BISTRO 11138-01EURO</span><p>от <span class="price">2740</span> руб.</p></div></li>
						<li><img src="photos/ae6aa53dcc9eb32133541922b9ec3b16.jpeg" alt="утюг для волос профессиональный Мини весы Tanita 1579" title="утюг для волос профессиональный Мини весы Tanita 1579"><div class="box" page="mini-vesy-tanita-3900r"><span class="title">утюг для волос профессиональный Мини весы Tanita 1579</span><p>от <span class="price">3900</span> руб.</p></div></li>
						<li><img src="photos/e2b67f21c94f08d0f992c10013ebe15c.jpeg" alt="magic pot мультиварка Пылесос Dyson Carbon Fibre DC 26" title="magic pot мультиварка Пылесос Dyson Carbon Fibre DC 26"><div class="box" page="pylesos-dyson-carbon-fibre-dc-23990r"><span class="title">magic pot мультиварка Пылесос Dyson Carbon Fibre DC 26</span><p>от <span class="price">23990</span> руб.</p></div></li>
						<li><img src="photos/00492fb3046ec485746c0b2d1a1385eb.jpeg" alt="микроволновая печь электросхема Пылесос Thomas Inox 1545 S" title="микроволновая печь электросхема Пылесос Thomas Inox 1545 S"><div class="box" page="pylesos-thomas-inox-s-10410r"><span class="title">микроволновая печь электросхема Пылесос Thomas Inox 1545 S</span><p>от <span class="price">10410</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("mikrovolnovaya-pech-vitek-vt-3650r.php", 0, -4); if (file_exists("comments/mikrovolnovaya-pech-vitek-vt-3650r.php")) require_once "comments/mikrovolnovaya-pech-vitek-vt-3650r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="mikrovolnovaya-pech-vitek-vt-3650r.php" method="post" onsubmit="return checkForm(this)">
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