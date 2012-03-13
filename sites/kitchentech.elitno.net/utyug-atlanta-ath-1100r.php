<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("utyug-atlanta-ath-1100r.php","парогенератор италия");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("utyug-atlanta-ath-1100r.php", $nick, $comment);
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
		<title>парогенератор италия Утюг Atlanta ATH-491  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="парогенератор италия, кофеварка delonghi eco 310, электрочайники из нержавейки, кофеварка делонги отзывы, мешки для пылесоса vax, пакеты для пылесоса, мясорубка binatone, лучший пылесос самсунг, насадки для мясорубки zelmer, какой моющий пылесос выбрать, капсульные кофемашины bosch, фритюрница philips, взбить сливки блендером, шампунь для пылесоса,  печенье через мясорубку рецепт">
		<meta name="description" content="парогенератор италия Утюг Atlanta ATH-491 с пароувлажнителем мощностью 1800 Вт – стильный прибор серо...">
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
						<a class="photo" href="photos/fce59058aae36b814631525a3763b63c.jpeg" title="парогенератор италия Утюг Atlanta ATH-491"><img src="photos/fce59058aae36b814631525a3763b63c.jpeg" alt="парогенератор италия Утюг Atlanta ATH-491" title="парогенератор италия Утюг Atlanta ATH-491 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-braun-mx-2400r.php"><img src="photos/c875beb952f9d6580895bee02e6ce554.jpeg" alt="кофеварка delonghi eco 310 Блендер Braun MX-2000" title="кофеварка delonghi eco 310 Блендер Braun MX-2000"></a><h2>Блендер Braun MX-2000</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-redmond-rhb-2080r.php"><img src="photos/f1ec794f7123a5cfc892f85d1cd7e4e0.jpeg" alt="электрочайники из нержавейки Блендер Redmond RHB-2907" title="электрочайники из нержавейки Блендер Redmond RHB-2907"></a><h2>Блендер Redmond RHB-2907</h2></li>
							<li><a href="http://kitchentech.elitno.net/izmelchitel-ritter-mc-2700r.php"><img src="photos/b329bc8334f65653dc9ef4683c170e62.jpeg" alt="кофеварка делонги отзывы Измельчитель Ritter MC 800" title="кофеварка делонги отзывы Измельчитель Ritter MC 800"></a><h2>Измельчитель Ritter MC 800</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>парогенератор италия Утюг Atlanta ATH-491</h1>
						<div class="tb"><p>Цена: от <span class="price">1100</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19755.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Утюг Atlanta ATH-491 с пароувлажнителем мощностью 1800 Вт – стильный прибор серого цвета для глажки, с подошвой из нержавеющей стали. В отличии от более дешевых приборов имеет систему антикалик, функцию самоочистки, противокапельный механизм. Кроме того, он имеет функцию парового удара. Иногда для проглаживания сильно пересушенных или толстых тканей не хватает даже максимальной модности постоянного пара. Специально для таких случаев в этом утюге есть паровой удар. При нажатии на кнопку происходит мощная подача пара, находящегося под высоким давлением. Сильный удар горячего пара размягчает волокна и быстро разглаживает даже глубокие складки. А подача вертикального пара позволяет гладить пиджаки, пальто и другие вещи прямо на вешалке или манекене. Чтобы не испортить тонкие ткани использованием пара, предусмотрен распылитель.</p><p>Характеристики:</p><ul type=disc><li>Вертикальный пар <li>Система антикалик <li>Подошва из нержавеющей стали <li>Функция самоочистки <li>Сухой или паровой режим глажения <li>Функция увлажнения <li>Дополнительная подача пара <li>Противокапельный механизм <li>Изделие сертифицировано Госстандартом РФ <li>Соответствует европейским нормам безопасности <li>Мощность 1800W <li>230, 50Hz <li>31 x 13 x 16 см </li></ul><p><strong>Производитель: США</strong></p> парогенератор италия</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/4a49eabd132fa073a575c3edfbe7b80b.jpeg" alt="мешки для пылесоса vax Микроволновая печь Vitek VT-1681" title="мешки для пылесоса vax Микроволновая печь Vitek VT-1681"><div class="box" page="mikrovolnovaya-pech-vitek-vt-2770r"><span class="title">мешки для пылесоса vax Микроволновая печь Vitek VT-1681</span><p>от <span class="price">2770</span> руб.</p></div></li>
						<li><img src="photos/2cdb40f493d1b8360833641d1048d5de.jpeg" alt="пакеты для пылесоса Мясорубка Braun G1300 MN WH" title="пакеты для пылесоса Мясорубка Braun G1300 MN WH"><div class="box" page="myasorubka-braun-g-mn-wh-4980r"><span class="title">пакеты для пылесоса Мясорубка Braun G1300 MN WH</span><p>от <span class="price">4980</span> руб.</p></div></li>
						<li><img src="photos/cf93342053e92b125e6f4adca7e47bbe.jpeg" alt="мясорубка binatone Пароварка Tefal Simply Invents VC1017" title="мясорубка binatone Пароварка Tefal Simply Invents VC1017"><div class="box" page="parovarka-tefal-simply-invents-vc-3990r"><span class="title">мясорубка binatone Пароварка Tefal Simply Invents VC1017</span><p>от <span class="price">3990</span> руб.</p></div></li>
						<li><img src="photos/2881dd3b520a8310bcadebe542a3493a.jpeg" alt="лучший пылесос самсунг Пароварка Redmond RST-M1104" title="лучший пылесос самсунг Пароварка Redmond RST-M1104"><div class="box" page="parovarka-redmond-rstm-2950r"><span class="title">лучший пылесос самсунг Пароварка Redmond RST-M1104</span><p>от <span class="price">2950</span> руб.</p></div></li>
						<li class="large"><img src="photos/7476c2912d4d9c99682e7b20dcc24385.jpeg" alt="насадки для мясорубки zelmer Электроплита индукционная Atlanta ATH-192" title="насадки для мясорубки zelmer Электроплита индукционная Atlanta ATH-192"><div class="box" page="elektroplita-indukcionnaya-atlanta-ath-1900r"><span class="title">насадки для мясорубки zelmer Электроплита индукционная Atlanta ATH-192</span><p>от <span class="price">1900</span> руб.</p></div></li>
						<li class="large"><img src="photos/d2b0cc36c62095fdc525b7665e50506c.jpeg" alt="какой моющий пылесос выбрать Соковыжималка Atlanta ATH-321" title="какой моющий пылесос выбрать Соковыжималка Atlanta ATH-321"><div class="box" page="sokovyzhimalka-atlanta-ath-1010r"><span class="title">какой моющий пылесос выбрать Соковыжималка Atlanta ATH-321</span><p>от <span class="price">1010</span> руб.</p></div></li>
						<li class="large"><img src="photos/151cdbb0e55d78748fdd51a7bbe40bf0.jpeg" alt="капсульные кофемашины bosch Соковыжималка Atlanta ATH-329" title="капсульные кофемашины bosch Соковыжималка Atlanta ATH-329"><div class="box" page="sokovyzhimalka-atlanta-ath-2990r"><span class="title">капсульные кофемашины bosch Соковыжималка Atlanta ATH-329</span><p>от <span class="price">2990</span> руб.</p></div></li>
						<li><img src="photos/9b828fe53dfca2c4781201b615fd512e.jpeg" alt="фритюрница philips Чайник электрический  Vitesse VS-137 1,7л бело-синий" title="фритюрница philips Чайник электрический  Vitesse VS-137 1,7л бело-синий"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-belosiniy-920r"><span class="title">фритюрница philips Чайник электрический  Vitesse VS-137 1,7л бело-синий</span><p>от <span class="price">920</span> руб.</p></div></li>
						<li><img src="photos/3a6317b1e5aa0207019da754f6c2351b.jpeg" alt="взбить сливки блендером Электрический чайник Atlanta АТН-673" title="взбить сливки блендером Электрический чайник Atlanta АТН-673"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-560r"><span class="title">взбить сливки блендером Электрический чайник Atlanta АТН-673</span><p>от <span class="price">560</span> руб.</p></div></li>
						<li><img src="photos/52100c33edc3ca0743ca02e24c7f8dba.jpeg" alt="шампунь для пылесоса Электрический чайник Atlanta АТН-720" title="шампунь для пылесоса Электрический чайник Atlanta АТН-720"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-550r"><span class="title">шампунь для пылесоса Электрический чайник Atlanta АТН-720</span><p>от <span class="price">550</span> руб.</p></div></li>
						<li><img src="photos/2604c204c493f1487a5255f83dc099af.jpeg" alt="как использовать пароварку Зарядное устройство GP Batteries PB350GS210-UE4" title="как использовать пароварку Зарядное устройство GP Batteries PB350GS210-UE4"><div class="box" page="zaryadnoe-ustroystvo-gp-batteries-pbgsue-1025r"><span class="title">как использовать пароварку Зарядное устройство GP Batteries PB350GS210-UE4</span><p>от <span class="price">1025</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("utyug-atlanta-ath-1100r.php", 0, -4); if (file_exists("comments/utyug-atlanta-ath-1100r.php")) require_once "comments/utyug-atlanta-ath-1100r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="utyug-atlanta-ath-1100r.php" method="post" onsubmit="return checkForm(this)">
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